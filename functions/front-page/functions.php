<?php

add_filter( 'template_include', function ( $template ) {
	return is_front_page() ? locate_template( '/templates/front-page/front-page.php' ) : $template;
}, 99 );

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page( [
		'page_title' => 'Настройки сайта',
		'menu_title' => 'Настройки сайта',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'position'   => 2,
	] );

}

class Contacts {

	public static function get_main_phone() {
		return [
			'raw'      => get_field( 'site-phone', 'options' ),
			'formated' => cth()->format_phone( get_field( 'site-phone', 'options' ) ),
		];
	}

	public static function get_address() {
		return get_field( 'site-address', 'options' );
	}

	public static function get_map_url() {
		return get_field( 'site-map-url', 'options' );
	}

	/**
	 * Получает основной адрес электронной почты для связи.
	 *
	 * @return string|null
	 */
	public static function get_main_mail() {
		return get_field( 'site-email', 'options' );
	}

	public static function get_wa_url() {
		return get_field( 'site_wa-link', 'options' );
	}

	public static function get_tg_url() {
		return get_field( 'site_tg-link', 'options' );
	}

	public static function get_yt_url() {
		return get_field( 'site_yt-link', 'options' );
	}

	public static function get_inst_url() {
		return get_field( 'site_inst-link', 'options' );
	}

	public static function get_fb_url() {
		return get_field( 'site_fb-link', 'options' );
	}
}
