<?php

namespace TaxUae\Form;

class Form_Accounting extends Form_Base {

	protected string $form_key = 'accounting-form';
	protected string $form_name = 'Заявка на бухгалтерские услуги услуги';

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
      [
				'key'         => 'service',
				'name'        => 'Услуга',
				'required'    => true,
			],
		];
	}

}

( new Form_Accounting() )->init();
