<?php

namespace TaxUae\Form;

use WP_REST_Request;

abstract class Form_Base {

	protected string $post_type = 'site-form';
	protected string $route_namespace = 'api/site-form';

	protected string $form_key = '';
	protected string $form_name = '';
	protected array $form_fields = [];

	/**
	 * Регистрирует действия и фильтры для формы.
	 *
	 * @return void
	 */
	public function init(): void {
		$this->set_fields();

		add_action( 'rest_api_init', [ $this, 'register_rest_route_form' ] );
		add_filter( 'site_form_names', [ $this, 'set_form_info' ] );
		add_action( 'site_form_name', [ $this, 'saved_site_form_name' ] );
		add_action( 'site_form_content', [ $this, 'saved_site_form_content' ] );
	}

	/**
	 * Регистрирует маршрут для приёма данных от пользователя.
	 *
	 * @return void
	 */
	public function register_rest_route_form(): void {
		register_rest_route(
			$this->route_namespace,
			$this->form_key,
			[
				'methods'             => 'POST',
				'permission_callback' => '__return_true',
				'show_in_index'       => false,
				'callback'            => function ( $request ) {
					return $this->rest_callback( $request );
				},
			]
		);
	}

	/**
	 * Обрабатывает rest запрос формы (проверяет, сохраняет).
	 *
	 * Здесь описана простая, стандартная процедура для приёма данных от пользователя.
	 * Если нужно что-то более сложное, то опишите этот метод в классе нужной формы.
	 *
	 *
	 * @param \WP_REST_Request $request
	 *
	 * @return array|true
	 */
	public function rest_callback( $request ) {
		$data = $this->prepare_request_form_data( $request );

		if ( $data['errors'] ) {
			return $data['errors'];
		}

		$this->save_form( $data['fields'] );
		$this->sent_email( $data['fields'] );

		return true;
	}

	/**
	 * Заполяет основную информацию о формах.
	 *
	 * @param array $forms_info
	 *
	 * @return array
	 */
	public function set_form_info( $forms_info ): array {
		$forms_info[ $this->form_key ] = $this->form_name;

		return $forms_info;
	}

	/**
	 * Получает ссылку на rest маршрут для приёма данных от пользователя.
	 *
	 * @return string
	 */
	public function get_url() {
		return rest_url( $this->route_namespace . '/' . $this->form_key );
	}

	/**
	 * Формирует сообщение об ошибке всей формы.
	 *
	 * @param string $message
	 *
	 * @return array
	 */
	protected function fail_form( $message ) {
		return [
			'error_form' => $message,
		];
	}

	/**
	 * Формирует сообщение об ошибке в одном или более полях формы.
	 *
	 * @param array $message
	 *
	 * @return array
	 */
	protected function fail_fields( $errors_fields ) {
		return [
			'errors_fields' => $errors_fields,
		];
	}

	/**
	 * Сохраняет форму в базу данных.
	 *
	 * @param array $keys_values_from_user
	 */
	protected function save_form( $keys_values_from_user ) {
		wp_insert_post( [
			'post_type'    => $this->post_type,
			'post_title'   => wp_generate_uuid4(),
			'post_content' => '',
			'post_status'  => 'publish',
			'meta_input'   => $this->get_prepare_meta_all_data( $keys_values_from_user ),
		] );
	}

	/**
	 * Отправляет форму по почте.
	 *
	 * @param array $keys_values_from_user
	 */
	protected function sent_email( $keys_values_from_user ) {
		$email   = get_field('site_callback-email', 'option');
		$subject = "Заявка с сайта taxuae.ru \nДанные с формы \"{$this->form_name}\"";
		$headers = [
			'From: Логгер писем <no-replay@taxuae.ru>',
			'content-type: text/html',
		];
		$message = '';
		$metas   = $this->get_prepare_meta_all_data( $keys_values_from_user );

		// Удалим фильтры, которые могут изменять заголовок $headers
		remove_all_filters( 'wp_mail_from' );
		remove_all_filters( 'wp_mail_from_name' );

		// Шаблон контента письма
		$message .= '<style type="text/css">table, th, td {border:1px solid black;border-collapse:collapse;padding:5px}</style>';
		$message .= "<tr><td>Название формы</td><td>{$this->form_name}</td></tr>";
		$message .= "<tr><td>Ключ формы</td><td>{$this->form_key}</td></tr>";
		foreach ( $metas as $key => $value ) {
			$message .= sprintf( '<tr><td>%s</td><td>%s</td></tr>', $key, print_r( $value, true ) );
		}
		$message = sprintf( '<table>%s</table>', $message );

		wp_mail( $email, $subject, $message, $headers );
	}

	protected function get_prepare_meta_all_data( $keys_values_from_user ) {
		return array_merge(
			$this->get_prepare_meta_user_data( $keys_values_from_user ),
			$this->get_prepare_meta_tech_data(),
		);
	}

	protected function get_prepare_meta_tech_data() {
    $url_components = parse_url($this->get_http_referer());
    parse_str($url_components['query'], $params);

		$metas = [
			'form_key'     => $this->form_key,
			'page_referer' => $this->get_http_referer(),
			'user_ip'      => $_SERVER['REMOTE_ADDR'] ?? '',
			'utm_source'   => $params['utm_source'] ?? '',
			'utm_medium'   => $params['utm_medium'] ?? '',
			'utm_campaign' => $params['utm_campaign'] ?? '',
			'utm_content'  => $params['utm_content'] ?? '',
			'utm_term'     => $params['utm_term'] ?? '',
    ];
		return $this->get_prepare_meta_key(
			$metas,
			$this->get_meta_prefix_tech_data()
		);
	}

	protected function get_prepare_meta_user_data( $keys_values ) {
		return $this->get_prepare_meta_key(
			$keys_values,
			$this->get_meta_prefix_user_data()
		);
	}

	protected function get_prepare_meta_key( $keys_values, $prefix ) {
		$items = [];

		foreach ( $keys_values as $key => $item ) {
			$items[ $prefix . $key ] = $item;
		}

		return $items;
	}

	protected function get_meta_prefix_user_data() {
		return 'site_form__user_data__';
	}

	protected function get_meta_prefix_tech_data() {
		return 'site_form__tech_data__';
	}

	/**
	 * Получает ссылку на страницу, с которой была отправлена форма.
	 *
	 * @return string
	 */
	protected function get_http_referer() {
		if ( ! empty( $_SERVER['HTTP_REFERER'] ) ) {
			return wp_unslash( $_SERVER['HTTP_REFERER'] );
		}

		return '';
	}

	/**
	 * @param WP_REST_Request $request
	 *
	 * @return array
	 */
	protected function prepare_request_form_data( WP_REST_Request $request ): array {
		$data = [
			'fields' => [],
			'errors' => [],
		];

		foreach ( $this->get_user_fields() as $field ) {
			$key   = $field['key'];
			$value = trim( $request->get_param( $key ) );

			$data['fields'][ $key ] = $value;

			if ( ! $value && $field['required'] ) {
				$data['errors'][] = [
					'name'  => $key,
					'error' => 'Поле обязательно для заполнения',
				];

				continue;
			}

			if ( $value && $field['validate_as'] === 'email' ) {
				if ( ! is_email( $value ) ) {
					$data['errors'][] = [
						'name'  => $key,
						'error' => 'Некорректный email',
					];

					continue;
				}
			}

			if ( $value && $field['validate_as'] === 'url' ) {
				if ( empty( parse_url( $value )['host'] ) ) {
					$data['errors'][] = [
						'name'  => $key,
						'error' => 'Некорректный url',
					];
				}
			}
		}

		if ( ! array_filter( $data['fields'] ) ) {
			return array_merge( $data, [ 'errors' => $this->fail_form( 'Заполните форму!' ) ] );
		}

		if ( $data['errors'] ) {
			return array_merge( $data, [ 'errors' => $this->fail_fields( $data['errors'] ) ] );
		}

		return $data;
	}

	/**
	 * Получает список полей формы.
	 *
	 * @return array
	 */
	protected function get_user_fields(): array {
		$default_values = [
			'key'         => '',
			'name'        => '',
			'required'    => false,
			'validate_as' => '',
		];

		foreach ( $this->form_fields as & $form_field ) {
			$form_field = wp_parse_args( $form_field, $default_values );
		}

		return $this->form_fields;
	}

	protected function get_form_meta( $key, $post_id ) {
		return get_post_meta( $post_id, "{$this->get_meta_prefix_user_data()}_$key", true );
	}

	protected function is_saved_form_by_id( $post_id ) {
		$meta_key = "{$this->get_meta_prefix_tech_data()}form_key";
		$form_key = get_post_meta( $post_id, $meta_key, true );

		return $form_key === $this->form_key;
	}

	/**
	 * Получает название формы.
	 *
	 * @param int $post_id
	 *
	 * @return void
	 */
	public function saved_site_form_name( $post_id ): void {
		echo $this->is_saved_form_by_id( $post_id ) ? $this->form_name : '';
	}

	/**
	 * Выводит на экран контент сохранённой формы.
	 *
	 * @param int $post_id
	 */
	public function saved_site_form_content( $post_id ) {
		if ( ! $this->is_saved_form_by_id( $post_id ) ) {
			return;
		}

		$metas = get_post_meta( $post_id, null, true );

		$metas = array_map( static function ( $meta ) {
			return $meta[0];
		}, $metas );

		if ( ! $metas ) {
			return;
		}

		// Данные от пользователя
		$metas_user = array_filter( $metas, function ( $meta ) {
			return str_contains( $meta, $this->get_meta_prefix_user_data() );
		}, ARRAY_FILTER_USE_KEY );

		// Технические данные
		$metas_tech = array_filter( $metas, function ( $meta ) {
			return str_contains( $meta, $this->get_meta_prefix_tech_data() );
		}, ARRAY_FILTER_USE_KEY );
		?>

		<table class="site_form_content">
			<tr class="site_form_content_line">
				<td class="site_form_content_user"><b>От пользователя</b></td>
				<td class="site_form_content_tech"><b>Технические</b></td>
			</tr>
			<tr class="site_form_content_line">
				<td class="site_form_content_user">
					<table>
						<?php foreach ( $metas_user as $key => $meta ): ?>
							<tr>
								<td><?= $this->get_field_name( $key ) ?></td>
								<td><?= esc_html( $meta ) ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</td>

				<td class="site_form_content_tech">
					<table>
						<?php foreach ( $metas_tech as $key => $meta ): ?>
							<tr>
								<td><?= $this->get_field_name( $key ) ?></td>
								<td><?= esc_html( $meta ) ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</td>
			</tr>

		</table>

		<?php
	}

	public function get_field_name( $full_key ) {
		$user_key = str_replace( $this->get_meta_prefix_user_data(), '', $full_key );

		$user_fields = $this->get_user_fields();

		foreach ( $user_fields as $user_field ) {
			if ( $user_key === $user_field['key'] ) {
				return $user_field['name'];
			}
		}

		return $full_key;
	}

	/**
	 * @return void
	 */
	abstract public function set_fields(): void;

}
