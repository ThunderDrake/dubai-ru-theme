<?php
add_action( 'wp_ajax_form_action', 'ajax_action_callback' );
add_action( 'wp_ajax_nopriv_form_action', 'ajax_action_callback' );
/**
 * Обработка скрипта
 */

function ajax_action_callback() {

  $err_message = array();

	if ( ! wp_verify_nonce( $_POST['nonce'], 'form-nonce' ) ) {
		wp_die( 'Данные отправлены с левого адреса' );
	}

	if ( empty( $_POST['name'] ) && isset( $_POST['name'] ) ) {
		$err_message['name'] = 'Пожалуйста, введите ваше имя.';
	} else {
		$form_name = sanitize_text_field( $_POST['name'] );
	}

	if ( empty( $_POST['phone'] ) && isset( $_POST['phone'] ) ) {
		$err_message['phone'] = 'Пожалуйста, введите ваш телефон.';
	} else {
		$form_phone = sanitize_text_field( $_POST['full'] );
	}

	if ( empty( $_POST['service'] ) && isset( $_POST['service'] ) ) {
		$err_message['service'] = 'Пожалуйста, выберите услугу';
	} else {
		$form_service_name = sanitize_text_field( $_POST['service'] );
	}

	if ( $err_message ) {

		wp_send_json_error( $err_message );

	} else {

		$email_to = get_field('site_callback-email', 'option');

		if ( ! $email_to ) {
			$email_to = get_option( 'admin_email' );
		}

		$body    = "Телефон для связи: $form_phone";

    if($form_name) {
      $body .= "\nИмя клиента: $form_name";
    }

    if($form_service_name) {
      $body .= "\nНазвание услуги: $form_service_name";
    }

		$headers = 'From: ' . $form_name . ' <' . $email_to . '>' . "\r\n" . 'Reply-To: ' . $email_to;
    save_form([
      'Телефон для связи' => $form_phone,
      'Имя клиента' => $form_name,
      'Название услуги' => $form_service_name,
    ]);
		wp_mail( $email_to, 'Заявка с сайта taxuae.ru', $body, $headers );

		$message_success = 'Собщение отправлено. В ближайшее время c вами свяжутся.';
		wp_send_json_success( $message_success );

	}

	wp_die();

}

function save_form( $keys_values_from_user ) {
  error_log( print_r( get_prepare_meta_all_data( $keys_values_from_user ), true ) );
  wp_insert_post( [
    'post_type'    => 'site-form',
    'post_title'   => wp_generate_uuid4(),
    'post_content' => '',
    'post_status'  => 'publish',
    'meta_input'   => get_prepare_meta_all_data( $keys_values_from_user ),
  ] );
}

function get_prepare_meta_all_data( $keys_values_from_user ) {
  return array_merge(
    get_prepare_meta_user_data( $keys_values_from_user ),
    get_prepare_meta_tech_data(),
  );
}

function get_prepare_meta_tech_data() {
  $metas = [
    'page_referer' => get_http_referer(),
    'user_ip'      => $_SERVER['REMOTE_ADDR'] ?? '',
  ];

  return get_prepare_meta_key(
    $metas,
    get_meta_prefix_tech_data()
  );
}

function get_prepare_meta_user_data( $keys_values ) {
  return get_prepare_meta_key(
    $keys_values,
    get_meta_prefix_user_data()
  );
}

function get_prepare_meta_key( $keys_values, $prefix ) {
  $items = [];

  foreach ( $keys_values as $key => $item ) {
    $items[ $prefix . $key ] = $item;
  }

  return $items;
}

function get_meta_prefix_user_data() {
  return 'site_form__user_data__';
}

function get_meta_prefix_tech_data() {
  return 'site_form__tech_data__';
}

/**
 * Получает ссылку на страницу, с которой была отправлена форма.
 *
 * @return string
 */
function get_http_referer() {
  if ( ! empty( $_SERVER['HTTP_REFERER'] ) ) {
    return wp_unslash( $_SERVER['HTTP_REFERER'] );
  }

  return '';
}
