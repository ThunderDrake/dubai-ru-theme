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
		$err_message['event_name'] = 'Пожалуйста, выберите услугу';
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
		wp_mail( $email_to, 'Заявка с сайта Dubai TAX', $body, $headers );

		$message_success = 'Собщение отправлено. В ближайшее время c вами свяжутся.';
		wp_send_json_success( $message_success );
	}

	wp_die();

}

