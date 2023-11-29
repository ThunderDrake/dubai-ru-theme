<?php
/**
 * Шаблон формы Заказа консультации
 */

$form = new TaxUae\Form\Form_Consult();
?>
<div class="graph-modal__container service-modal service-modal--consult" role="dialog" aria-modal="true"
  data-graph-target="consult-modal">
  <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
  <div class="graph-modal__content service-modal__content">
    <div class="service-modal__header">
    </div>
    <form class="service-modal__form" method="POST" action="<?= esc_url( $form->get_url() ) ?>" data-form="consult-form">
      <div class="service-modal__form-title">Оставьте заявку</div>
      <div class="service-modal__form-subtitle">и мы свяжемся с вами в ближайшее время</div>
      <input class="service-modal__form-input input-reset service-modal__form-input--name" type="text" name="name" placeholder="Ваше имя">
      <input class="service-modal__form-input input-reset service-modal__form-input--tel" name="phone"
        data-phone-country type="tel">
      <div class="service-modal__form-select-title">на почту мы направим Вам Гайд</div>
      <input class="service-modal__form-input input-reset service-modal__form-input--mail" type="email" name="email" placeholder="Ваша почта">
      <button class="btn-reset service-modal__form-button">Получить консультацию</button>
      <div class="service-modal__form-legal">Отправляю форму вы соглашаетесь с условиями <a href="<?= get_privacy_policy_url() ?>" target="_blank">политики конфиденциальности данных</a></div>
    </form>
  </div>
</div>
