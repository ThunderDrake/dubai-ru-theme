<div class="graph-modal__container service-modal service-modal--legal" role="dialog" aria-modal="true"
  data-graph-target="legal-modal">
  <button class="btn-reset js-modal-close graph-modal__close" aria-label="Закрыть модальное окно"></button>
  <div class="graph-modal__content service-modal__content">
    <div class="service-modal__header">
    </div>
    <form class="service-modal__form" action="" data-form="legal-form">
      <div class="service-modal__form-title">Leave a request</div>
      <div class="service-modal__form-subtitle">for the provision of <span>legal services</span></div>
      <input class="service-modal__form-input input-reset service-modal__form-input--name" type="text" name="name" placeholder="Your name">
      <input class="service-modal__form-input input-reset service-modal__form-input--tel" name="phone"
        data-phone-country type="tel">
      <div class="service-modal__form-select-title">Select a service</div>
      <select class="service-modal__form-input service-modal__form-input--select" name="service">
        <option value="Opening of the Free Zone company">Opening of the Free Zone company</option>
        <option value="Opening a company in Mainland">Opening a company in Mainland</option>
        <option value="Opening a freelance license">Opening a freelance license</option>
        <option value="Obtaining a resident visa">Obtaining a resident visa</option>
        <option value="Opening a bank account">Opening a bank account</option>
        <option value="Opening Offshore">Opening Offshore</option>
        <option value="Creation of trust structures">Creation of trust structures</option>
        <option value="Other">Other</option>
      </select>
      <button class="btn-reset service-modal__form-button">Find out the price</button>
      <div class="service-modal__form-legal">By submitting the form you agree to the terms of the <a href="<?= get_privacy_policy_url() ?>" target="_blank">data
          privacy policy</a></div>
    </form>
  </div>
</div>
