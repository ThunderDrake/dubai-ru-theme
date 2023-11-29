<?php
$form = new TaxUae\Form\Form_Guide();
?>
<section class="form-section" id="guide">
  <div class="form-section__container container">
    <div class="content-container">
      <div class="form-section__wrapper">
        <div class="form-section__subtitle">Укажите номер телефона и мы отправим ГАЙД вам в мессенджер</div>
        <h2 class="form-section__title">В 1 клик скачайте гайд<br><span>«Как открыть свой бизнес в ОАЭ?»</span></h2>
        <div class="form-section__info">
          <svg class="form-section__info-reload-icon" width="26" height="27">
            <use xlink:href="<?= ct()->get_assets_url() ?>/img/sprite.svg#reload-icon"></use>
          </svg>
          <div class="form-section__info-text">Обновлено: <span>12 августа 2023</span></div>
        </div>
        <form class="form-section__form" method="POST" action="<?= esc_url( $form->get_url() ) ?>" data-form="guide-form">
          <input class="form-section__form-input input-reset form-section__form-input--tel" name="phone" data-phone-country type="tel">
          <button class="btn-reset form-section__form-button btn--main">Далее</button>
          <label class="custom-checkbox form-section__form-checkbox">
            <input type="checkbox" class="custom-checkbox__field">
            <span class="custom-checkbox__content">Согласен с условиями <a href="<?= get_privacy_policy_url() ?>" target="_blank">политики конфиденциальности данных</a></span>
          </label>
        </form>
      </div>
    </div>
  </div>
</section>
