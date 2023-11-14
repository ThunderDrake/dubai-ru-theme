<?php
/**
 * Добавляем шаблоны, которые лежат глубже, чем может прочесть движок.
 *
 * @param string[] $templates
 *
 * @return string[]
 */
function add_templates_to_dropdown( $templates ) {

	// выбор шаблона в атрибутах
	$templates['templates/contacts-page/contacts-page.php'] = 'Шаблон страницы "Контакты"';
	$templates['templates/tariffs-page/tariffs-page.php'] = 'Шаблон страницы "Тарифы"';

	return $templates;
}

add_filter( 'theme_page_templates', 'add_templates_to_dropdown' );
