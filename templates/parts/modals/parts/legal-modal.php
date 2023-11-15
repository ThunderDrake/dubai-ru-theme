<div class="graph-modal__container service-modal service-modal--legal" role="dialog" aria-modal="true"
  data-graph-target="legal-modal">
  <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
  <div class="graph-modal__content service-modal__content">
    <div class="service-modal__header">
    </div>
    <form class="service-modal__form" action="" data-form="legal-form">
      <div class="service-modal__form-title">Оставьте заявку</div>
      <div class="service-modal__form-subtitle">для консультации по <span>юридическим услугам</span></div>
      <input class="service-modal__form-input input-reset service-modal__form-input--name" type="text" name="name" placeholder="Ваше имя">
      <input class="service-modal__form-input input-reset service-modal__form-input--tel" name="phone"
        data-phone-country type="tel">
      <div class="service-modal__form-select-title">Выбрать услугу</div>
      <select class="service-modal__form-input service-modal__form-input--select" name="service">
        <option value="Открытие компании во Free zone">Открытие компании во Free zone</option>
        <option value="Регистрация компании в Mainland">Регистрация компании в Mainland</option>
        <option value="Открытие фриланс лицензии">Открытие фриланс лицензии</option>
        <option value="Резидентская виза">Резидентская виза</option>
        <option value="Открытие банковского счета">Открытие банковского счета</option>
        <option value="Открытие оффшора">Открытие оффшора</option>
        <option value="Создание трастовых структур">Создание трастовых структур</option>
        <option value="Другое">Другое</option>
      </select>
      <button class="btn-reset service-modal__form-button">Подобрать цену</button>
      <div class="service-modal__form-legal">Отправляю форму вы соглашаетесь с условиями <a href="<?= get_privacy_policy_url() ?>" target="_blank">политики конфиденциальности данных</a></div>
    </form>
  </div>
</div>
