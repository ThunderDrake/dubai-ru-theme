<section class="preferences-section" id="callback-section">
  <div class="preferences-section__container container">
    <div class="content-container">
      <div class="preferences-section__left">
        <div class="preferences-section__subtitle">Оставьте заявку на бесплатную консультацию</div>
        <h2 class="preferences-section__title">Расскажем какие <span>преимущества ведения бизнеса в ОАЭ</span> подойдут именно для Вас</h2>
        <div class="preferences-section__list-title">На консультации:</div>
        <ul class="list-reset preferences-section__list">
          <li class="preferences-section__list-item">Разберем конкретно вашу ситуацию и возможные риски</li>
          <li class="preferences-section__list-item">Составим персональную стратегию под вашу бизнес модель</li>
          <li class="preferences-section__list-item">Предоставим несколько вариантов решения</li>
        </ul>
      </div>

      <div class="preferences-section__right">
        <div class="preferences-section__form-title">
          Заполните форму и наш специалист свяжется с вами<br><span>в течение 15 минут</span>
        </div>
        <form class="preferences-section__form" data-form="section-form">
          <input class="preferences-section__form-input input-reset preferences-section__form-input--name" name="name" type="text" placeholder="Ваш e-mail">
          <input class="preferences-section__form-input input-reset preferences-section__form-input--tel" name="phone" data-phone-country type="tel">
          <button class="btn-reset preferences-section__form-button btn--main">Далее</button>
          <label class="custom-checkbox preferences-section__form-checkbox">
            <input type="checkbox" class="custom-checkbox__field">
            <span class="custom-checkbox__content">Согласен с условиями <a href="<?= get_privacy_policy_url() ?>" target="_blank">политики конфиденциальности данных</a></span>
          </label>
        </form>
      </div>

      <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/preferences-section__person.png" class="preferences-section__person" width="630" height="935" alt="">
    </div>
  </div>
</section>
