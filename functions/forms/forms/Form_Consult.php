<?php

namespace TaxUae\Form;

class Form_Consult extends Form_Base {

	protected string $form_key = 'consult-form';
	protected string $form_name = 'Заявка на консультацию';

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
				'key'         => 'email',
				'name'        => 'Почта',
				'required'    => true,
				'validate_as' => 'email',
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

( new Form_Consult() )->init();
