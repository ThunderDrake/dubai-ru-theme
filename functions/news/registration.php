<?php

// Регистрируем
add_action( 'init', function () {

	register_post_type( 'news', [
		'labels'           => [
			'name'               => 'Новости',
			'singular_name'      => 'Новость',
			'name_admin_bar'     => 'Новости',
			'add_new'            => 'Добавить',
			'add_new_item'       => 'Добавить новую',
			'edit_item'          => 'Редактировать',
			'new_item'           => 'Новая',
			'view_item'          => 'Посмотреть',
			'search_items'       => 'Найти',
			'not_found'          => 'Новости не найдены',
			'not_found_in_trash' => 'В корзине новости не найдены',
			'parent_item_colon'  => '',
			'menu_name'          => 'Новости',
			'title_placeholder'  => 'Введите заголовок новости',
		],
		'public'             => true,
		'has_archive'        => 'news',
		'hierarchical'       => false,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-edit-page',
		'supports'           => [ 'title', 'editor', 'thumbnail' ],
		'posts_per_page'     => -1,
		'show_in_rest'       => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'template_archive'   => '/templates/news/archive/news-archive.php',
	] );

}, 9 );
