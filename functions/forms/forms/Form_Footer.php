<?php

namespace TaxUae\Form;

class Form_Footer extends Form_Base {

	protected string $form_key = 'footer-form';
	protected string $form_name = 'Заявка из подвала страницы';

	/**
	 * Устанавливает данные для полей формы.
	 *
	 * @return void
	 */
	public function set_fields(): void {
		$this->form_fields = [
			[
				'key'      => 'name',
				'name'     => 'Имя',
				'required' => true,
			],
			[
				'key'         => 'full',
				'name'        => 'Телефон',
				'required'    => true,
				'validate_as' => 'phone',
			],
		];
	}

}

( new Form_Footer() )->init();
