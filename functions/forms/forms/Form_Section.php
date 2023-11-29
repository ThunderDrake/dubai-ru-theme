<?php

namespace TaxUae\Form;

class Form_Section extends Form_Base {

	protected string $form_key = 'section-form';
	protected string $form_name = 'Заявка на консультацию (главная страница)';

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

( new Form_Section() )->init();
