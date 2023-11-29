<?php
/**
 * Шаблон формы заказа бухгалтерских услуг
 */

$form = new TaxUae\Form\Form_Accounting();
?>
<div class="graph-modal__container service-modal service-modal--accounting" role="dialog" aria-modal="true"
  data-graph-target="accounting-modal">
  <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
  <div class="graph-modal__content service-modal__content">
    <div class="service-modal__header">
    </div>
    <form class="service-modal__form" method="POST" action="<?= esc_url( $form->get_url() ) ?>" data-form="accounting-form">
      <div class="service-modal__form-title">Оставьте заявку</div>
      <div class="service-modal__form-subtitle">для консультации по <span>бухгалтерским услугам</span></div>
      <input class="service-modal__form-input input-reset service-modal__form-input--name" type="text" name="name" placeholder="Ваше имя">
      <input class="service-modal__form-input input-reset service-modal__form-input--tel" name="phone"
        data-phone-country type="tel">
      <div class="service-modal__form-select-title">Выберите услугу</div>
      <select class="service-modal__form-input service-modal__form-input--select" name="service">
        <option value="Бухгалтерское сопровождение">Бухгалтерское сопровождение</option>
        <option value="Регистрация VAT">Регистрация VAT</option>
        <option value="Корпоративные налоги">Корпоративные налоги</option>
        <option value="Годовой аудит">Годовой аудит</option>
        <option value="Другое">Другое</option>
      </select>
      <button class="btn-reset service-modal__form-button">Подобрать стоимость</button>
      <div class="service-modal__form-legal">Отправляю форму вы соглашаетесь с условиями <a href="<?= get_privacy_policy_url() ?>" target="_blank">политики конфиденциальности данных</a></div>
    </form>
  </div>
</div>
