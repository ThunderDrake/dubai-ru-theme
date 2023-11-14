<section class="preferences-section" id="callback-section">
  <div class="preferences-section__container container">
    <div class="content-container">
      <div class="preferences-section__left">
        <div class="preferences-section__subtitle">Leave a request for a free consultation</div>
        <h2 class="preferences-section__title">We’ll tell you what <span>advantages of doing business in the UAE</span> are right for you</h2>
        <div class="preferences-section__list-title">For consultation:</div>
        <ul class="list-reset preferences-section__list">
          <li class="preferences-section__list-item">We will analyze your specific situation and possible risks.</li>
          <li class="preferences-section__list-item">We will create a personal strategy for your business model</li>
          <li class="preferences-section__list-item">We will provide several solution options</li>
        </ul>
      </div>

      <div class="preferences-section__right">
        <div class="preferences-section__form-title">
          Fill out the form and our specialist will will contact you<br><span>within 15 minutes</span>
        </div>
        <form class="preferences-section__form" data-form="section-form">
          <input class="preferences-section__form-input input-reset preferences-section__form-input--name" name="name" type="text" placeholder="Your e-mail">
          <input class="preferences-section__form-input input-reset preferences-section__form-input--tel" name="phone" data-phone-country type="tel">
          <button class="btn-reset preferences-section__form-button btn--main">Next</button>
          <label class="custom-checkbox preferences-section__form-checkbox">
            <input type="checkbox" class="custom-checkbox__field">
            <span class="custom-checkbox__content">I agree with the terms of the <a href="<?= get_privacy_policy_url() ?>" target="_blank">policy data privacy</a></span>
          </label>
        </form>
      </div>

      <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/preferences-section__person.png" class="preferences-section__person" width="630" height="935" alt="">
    </div>
  </div>
</section>
