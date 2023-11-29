<?php

namespace TaxUae\Form;

class Form_Guide extends Form_Base {

	protected string $form_key = 'guide-form';
	protected string $form_name = 'Заявка на Гайд с Главной страницы';

	/**
	 * Устанавливает данные для полей формы.
	 *
	 * @return void
	 */
	public function set_fields(): void {
		$this->form_fields = [
			[
				'key'         => 'full',
				'name'        => 'Телефон',
				'required'    => true,
				'validate_as' => 'phone',
			],
		];
	}

}

( new Form_Guide() )->init();
