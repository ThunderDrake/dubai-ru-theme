<?php
$site_menu_accounting = get_field('site_menu_accounting', 'option')['site_menu_item'];
$site_menu_legal = get_field('site_menu_legal', 'option')['site_menu_item'];
?>
<div class="social-widget">
  <button class="btn-reset social-widget__button">
    <svg class="social-widget__icon" width="35" height="32" viewBox="0 0 35 32" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M11.2667 12.6981H23.3667M11.2667 16.4717H23.3667M4.8104 23.5777C2.4311 21.1909 1 18.1215 1 14.7736C1 7.16679 8.38723 1 17.5 1C26.6128 1 34 7.16679 34 14.7736C34 22.3804 26.6128 28.5472 17.5 28.5472C15.6278 28.5472 13.8286 28.2868 12.1511 27.8072L12 27.7925L5.03333 31V23.8219L4.8104 23.5777Z"
        stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"
        fill="none"></path>
    </svg>
  </button>
  <ul class="list-reset social-widget__list">
    <li class="social-widget__item">
      <a class="social-widget__link social-widget__link--phone" href="tel:<?= Contacts::get_main_phone()['formated'] ?>">
        <svg role="presentation" width="50" height="50" viewBox="0 0 50 50" fill="none"
          xmlns="http://www.w3.org/2000/svg" class="social-widget__link-icon">
          <path d="M25 0C11.2 0 0 11.2 0 25C0 38.8 11.2 50 25 50C38.8 50 50 38.8 50 25C50 11.2 38.84 0 25 0Z"
            fill="#004D73"></path>
          <path
            d="M38.66 34.1001L32.44 27.7801C32.3435 27.6746 32.226 27.5904 32.0952 27.5327C31.9643 27.4751 31.8229 27.4453 31.68 27.4453C31.537 27.4453 31.3956 27.4751 31.2647 27.5327C31.1339 27.5904 31.0165 27.6746 30.92 27.7801L27.5 31.2001C26.81 31.8801 25.79 31.8801 25.1 31.2001L18.74 24.8301C18.5778 24.6751 18.4488 24.4889 18.3606 24.2826C18.2724 24.0764 18.227 23.8544 18.227 23.6301C18.227 23.4058 18.2724 23.1838 18.3606 22.9776C18.4488 22.7713 18.5778 22.5851 18.74 22.4301L22.16 19.0001C22.61 18.5601 22.61 17.9201 22.16 17.4801L15.9 11.3101C15.7943 11.209 15.6695 11.13 15.5329 11.0776C15.3963 11.0253 15.2506 11.0008 15.1045 11.0054C14.9583 11.0101 14.8145 11.0439 14.6815 11.1048C14.5485 11.1657 14.429 11.2525 14.33 11.3601C12.33 13.8101 8.65996 20.6201 18.73 30.9101L18.89 31.0601L19.03 31.2101C29.36 41.3501 36.16 37.6801 38.61 35.6701C39.1 35.2701 39.15 34.5401 38.66 34.1001Z"
            fill="white"></path>
        </svg>
      </a>
    </li>
    <li class="social-widget__item">
      <a class="social-widget__link social-widget__link--wa" href="<?= Contacts::get_wa_url() ?>">
        <svg role="presentation" width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg"
          class="social-widget__link-icon">
          <path d="M25 50a25 25 0 100-50 25 25 0 000 50z" fill="#fff"></path>
          <path
            d="M26.1 12a12.1 12.1 0 00-10.25 18.53l.29.46-1.22 4.46 4.57-1.2.45.27a12.1 12.1 0 106.16-22.51V12zm6.79 17.22c-.3.85-1.72 1.62-2.41 1.72-.62.1-1.4.14-2.25-.14-.7-.22-1.37-.47-2.03-.77-3.59-1.57-5.93-5.24-6.1-5.48-.19-.24-1.47-1.97-1.47-3.76 0-1.79.93-2.67 1.25-3.03.33-.37.72-.46.96-.46.23 0 .47 0 .68.02.22 0 .52-.09.8.62l1.1 2.7c.1.18.16.4.04.64s-.18.39-.36.6c-.18.21-.38.47-.54.64-.18.18-.36.38-.15.74.2.36.92 1.55 1.98 2.52 1.37 1.23 2.52 1.62 2.88 1.8.35.18.56.15.77-.1.2-.23.9-1.05 1.13-1.42.24-.36.48-.3.8-.18.33.12 2.09 1 2.44 1.18.36.19.6.28.69.43.09.15.09.88-.21 1.73z"
            fill="#27D061"></path>
          <path
            d="M25 0a25 25 0 100 50 25 25 0 000-50zm1.03 38.37c-2.42 0-4.8-.6-6.9-1.76l-7.67 2 2.05-7.45a14.3 14.3 0 01-1.93-7.2c0-7.92 6.49-14.38 14.45-14.38a14.4 14.4 0 110 28.79z"
            fill="#27D061"></path>
        </svg>
      </a>
    </li>
    <li class="social-widget__item">
      <a class="social-widget__link social-widget__link--tg" href="<?= Contacts::get_tg_url() ?>">
        <svg role="presentation" width="50" height="50" viewBox="0 0 50 50" fill="none"
          xmlns="http://www.w3.org/2000/svg" class="social-widget__link-icon">
          <path
            d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
            fill="#0087D0"></path>
          <path
            d="M36.11 13.0399L9.40999 22.7999C8.86999 22.9999 8.85999 23.7999 9.38999 24.0299L16.23 26.7199L18.78 34.4099C18.93 34.8199 19.47 34.9599 19.81 34.6799L23.73 31.1899L31.17 35.9099C31.55 36.1499 32.06 35.9399 32.15 35.5099L36.99 13.7599C37.09 13.2799 36.59 12.8699 36.11 13.0599V13.0399ZM20.03 28.1599L19.6 32.1199L17.53 26.0299L32.1 16.8699L20.03 28.1699V28.1599Z"
            fill="white"></path>
        </svg>
      </a>
    </li>
  </ul>
</div>
<footer class="footer">
  <div class="content-container">
    <div class="footer__form">
      <div class="footer__form-title">Didn't find the answer to your question?</div>
      <div class="footer__form-subtitle">Leave a request for a free preliminary consultation. We will answer all
        questions.</div>
      <form class="footer__form-form" action="" data-form="footer-form">
        <input class="footer__form-input input-reset footer__form-input--name" name="name" type="text"
          placeholder="Your name">
        <input class="footer__form-input input-reset footer__form-input--tel" name="phone" data-phone-country
          type="tel">
        <button class="btn-reset footer__form-button btn--main">Next</button>
        <label class="custom-checkbox footer__form-checkbox">
          <input type="checkbox" class="custom-checkbox__field">
          <span class="custom-checkbox__content">I agree with the terms of the <a href="<?= get_privacy_policy_url() ?>"
              target="_blank">policy data
              privacy</a></span>
        </label>
      </form>
    </div>
  </div>
  <div class="content-container footer__container">
    <div class="footer__col">
      <div class="logo__container">
        <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/logo--footer.svg" class="footer__logo logo"
          width="140" height="97" alt="">
        <span class="logo__text">
          Legal and accounting services TAX~UAE
        </span>
      </div>

      <div class="footer__socials">
        <a class="footer__socials-link link-round-hover" href="<?= Contacts::get_inst_url() ?>"
          rel="nofollow noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M12.9493 0.00395645C12.6162 0.00380699 12.3076 0.0036685 12.0207 0.00411749V0C8.95093 0.0034315 8.36209 0.0240202 6.84266 0.0926486C5.23676 0.166424 4.36483 0.434075 3.78424 0.660548C3.0156 0.959768 2.46657 1.31664 1.89009 1.89312C1.31361 2.46959 0.95606 3.01862 0.657527 3.78726C0.432082 4.36786 0.163745 5.23944 0.090313 6.84534C0.0113903 8.58164 -0.00439453 9.10047 -0.00439453 13.4989C-0.00439453 17.8973 0.0113903 18.4188 0.090313 20.1551C0.163402 21.761 0.432082 22.6326 0.657527 23.2125C0.956747 23.9815 1.31361 24.5292 1.89009 25.1056C2.46657 25.6821 3.0156 26.039 3.78424 26.3375C4.36518 26.563 5.23676 26.8313 6.84266 26.9054C8.57896 26.9844 9.10019 27.0015 13.4982 27.0015C17.896 27.0015 18.4175 26.9844 20.1538 26.9054C21.7597 26.832 22.632 26.5643 23.2119 26.3379C23.9809 26.0393 24.5282 25.6825 25.1047 25.106C25.6812 24.5299 26.0387 23.9825 26.3372 23.2139C26.5627 22.634 26.831 21.7624 26.9045 20.1565C26.9834 18.4202 27.0005 17.8986 27.0005 13.503C27.0005 9.10733 26.9834 8.58576 26.9045 6.84946C26.8314 5.24355 26.5627 4.37197 26.3372 3.79206C26.038 3.02342 25.6812 2.4744 25.1047 1.89792C24.5285 1.32144 23.9805 0.964573 23.2119 0.666039C22.6313 0.440595 21.7597 0.172257 20.1538 0.098825C18.4172 0.0199024 17.896 0.00411749 13.4982 0.00411749C13.3082 0.00411749 13.1253 0.00403544 12.9493 0.00395645ZM21.1921 3.07211C21.5171 2.8549 21.8993 2.73896 22.2902 2.73896V2.73827C23.3814 2.73827 24.2667 3.62358 24.2667 4.71477C24.2669 5.10572 24.1511 5.48792 23.934 5.81304C23.7169 6.13817 23.4082 6.39161 23.0471 6.54131C22.6859 6.69101 22.2885 6.73025 21.9051 6.65406C21.5216 6.57788 21.1694 6.38969 20.8929 6.1133C20.6164 5.83691 20.4281 5.48473 20.3518 5.10131C20.2754 4.71789 20.3145 4.32044 20.4641 3.95924C20.6137 3.59805 20.867 3.28932 21.1921 3.07211ZM5.03979 13.5068C5.03979 8.83557 8.82705 5.04831 13.4982 5.04831C18.1694 5.04831 21.9557 8.83557 21.9557 13.5068C21.9557 18.178 18.1694 21.9635 13.4982 21.9635C8.82705 21.9635 5.03979 18.178 5.03979 13.5068ZM18.9885 13.5068C18.9885 10.4744 16.5302 8.01649 13.4982 8.01649C10.4659 8.01649 8.00797 10.4744 8.00797 13.5068C8.00797 16.5388 10.4659 18.997 13.4982 18.997C16.5302 18.997 18.9885 16.5388 18.9885 13.5068Z"
              fill="white" />
          </svg>
        </a>
        <a class="footer__socials-link link-round-hover" href="<?= Contacts::get_tg_url() ?>"
          rel="nofollow noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">
            <path
              d="M4.50675 18.2603C14.2239 13.9855 26.7987 8.77357 28.5345 8.0522C33.0877 6.16412 34.4848 6.52597 33.7882 10.7073C33.2879 13.7126 31.8444 23.6625 30.6939 29.8555C30.0112 33.5281 28.4796 33.9634 26.0712 32.3745C24.913 31.6098 19.067 27.744 17.7983 26.8363C16.6401 26.009 15.0427 25.014 17.046 23.054C17.7588 22.3558 22.4319 17.8939 26.0727 14.4208C26.5498 13.9646 25.9506 13.2154 25.4001 13.5811C20.4928 16.8354 13.6889 21.3522 12.8229 21.9406C11.5147 22.829 10.2583 23.2364 8.00301 22.5885C6.29895 22.0991 4.63432 21.5154 3.9864 21.2927C1.49139 20.436 2.08364 19.3265 4.50675 18.2603Z"
              fill="white" />
          </svg>
        </a>
        <a class="footer__socials-link link-round-hover" href="<?= Contacts::get_yt_url() ?>"
          rel="nofollow noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" width="39" height="28" viewBox="0 0 39 28" fill="none">
            <path
              d="M37.5151 2.52792C36.1404 0.843385 33.6022 0.15625 28.7547 0.15625H11.1586C6.20022 0.15625 3.619 0.887709 2.24939 2.68115C0.914062 4.42976 0.914062 7.00621 0.914062 10.5721V17.3686C0.914062 24.2768 2.49842 27.7843 11.1586 27.7843H28.7549C32.9585 27.7843 35.2879 27.1779 36.7948 25.6913C38.3403 24.1669 38.9996 21.6778 38.9996 17.3686V10.5721C38.9996 6.81156 38.8963 4.21992 37.5151 2.52792ZM25.3651 14.9086L17.3748 19.2132C17.1961 19.3094 17.0008 19.3572 16.8057 19.3572C16.5848 19.3572 16.3644 19.2959 16.1692 19.1741C15.8016 18.9445 15.5771 18.5338 15.5771 18.0908V9.50933C15.5771 9.06711 15.801 8.6568 16.1678 8.42708C16.5348 8.19736 16.9912 8.18166 17.3719 8.38554L25.3623 12.6623C25.7688 12.8799 26.0241 13.3125 26.0247 13.7845C26.0252 14.2568 25.771 14.6901 25.3651 14.9086Z"
              fill="white" />
          </svg>
        </a>
        <a class="footer__socials-link link-round-hover" href="<?= Contacts::get_fb_url() ?>"
          rel="nofollow noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34" viewBox="0 0 35 34" fill="none">
            <path
              d="M35 17.1039C35 7.65767 27.165 0 17.5 0C7.83501 0 0 7.65767 0 17.1039C0 25.6409 6.39949 32.7169 14.7656 34V22.048H10.3223V17.1039H14.7656V13.3357C14.7656 9.04902 17.3782 6.68122 21.3756 6.68122C23.2903 6.68122 25.293 7.01527 25.293 7.01527V11.2244H23.0863C20.9123 11.2244 20.2344 12.5429 20.2344 13.8955V17.1039H25.0879L24.312 22.048H20.2344V34C28.6005 32.7169 35 25.6409 35 17.1039Z"
              fill="white" />
          </svg>
        </a>
        <a class="footer__socials-email"
          href="mailto:<?= Contacts::get_main_mail() ?>"><?= Contacts::get_main_mail() ?></a>
      </div>
    </div>

    <div class="footer__col">
      <div class="footer__nav-title">Accounting services</div>
      <ul class="list-reset footer__nav">
        <?php foreach($site_menu_accounting as $item): ?>
        <?php
          $title = '';

          if($item['item-name']) {
            $title = $item['item-name'];
          } else {
            $title = get_the_title(url_to_postid( $item['linked-page'] ));
          }
          ?>
        <li class="footer__nav-item">
          <a class="footer__nav-link" href="<?= $item['linked-page'] ?>"><?= $title ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="footer__col">
      <div class="footer__nav-title">Legal services</div>
      <ul class="list-reset footer__nav">
        <?php foreach($site_menu_legal as $item): ?>
        <?php
          $title = '';

          if($item['item-name']) {
            $title = $item['item-name'];
          } else {
            $title = get_the_title(url_to_postid( $item['linked-page'] ));
          }
          ?>
        <li class="footer__nav-item">
          <a class="footer__nav-link" href="<?= $item['linked-page'] ?>"><?= $title ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="footer__col">
      <div class="footer__contacts">
        <div class="footer__top-text">We are working now, call</div>
        <div class="footer__phone">
          <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/dub-flag.png" class="footer__phone-flag" width="30"
            height="15" alt="">
          <a class="footer__phone-link"
            href="tel:<?= Contacts::get_main_phone()['formated'] ?>"><?= Contacts::get_main_phone()['raw'] ?></a>
        </div>
        <div class="footer__socials-block">
          <a class="footer__socials-link link-round-hover" href="<?= Contacts::get_wa_url() ?>"
            rel="nofollow noopener noreferrer">
            <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="54" height="54" rx="27" fill="#31B939" />
              <path
                d="M27.0001 15.1201C20.4416 15.1201 15.1201 20.4416 15.1201 27.0001C15.1201 29.6263 15.9702 32.0451 17.4077 34.0148L15.8941 38.4931L20.6144 37.0211C22.4596 38.1959 24.6504 38.8801 27.0001 38.8801C33.5587 38.8801 38.8801 33.5587 38.8801 27.0001C38.8801 20.4416 33.5587 15.1201 27.0001 15.1201ZM32.4391 33.3721C30.2828 34.2359 27.7119 33.3997 24.8992 31.2642C22.0864 29.1287 20.2343 26.1224 20.1099 23.8902C19.9855 21.6579 21.803 20.5314 22.7913 20.5383C23.7796 20.5452 24.8646 23.7036 24.8784 24.1873C24.8923 24.678 23.669 25.5488 23.6206 25.9635C23.5723 26.3781 25.2862 28.4238 26.0118 28.9767C26.7306 29.5226 28.2165 30.5731 28.9836 30.4763C29.7438 30.3727 30.2483 28.8454 30.7321 28.7486C31.2158 28.6518 33.8558 29.9649 34.1184 30.3036C34.3811 30.6491 34.3534 32.6118 32.4391 33.3721Z"
                fill="white" />
            </svg>

          </a>
          <a class="footer__socials-link link-round-hover" href="<?= Contacts::get_tg_url() ?>"
            rel="nofollow noopener noreferrer">
            <svg width="55" height="54" viewBox="0 0 55 54" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.0839844" width="54" height="54" rx="27" fill="#05A0EB" />
              <path
                d="M24.7593 29.7472L24.4007 34.5704C24.9112 34.5704 25.1348 34.3598 25.4006 34.1046L27.7968 31.9057L32.7623 35.3965C33.6736 35.8825 34.3148 35.6273 34.5595 34.5906L37.8206 19.9267C38.1117 18.6389 37.3354 18.1327 36.4495 18.4526L17.2879 25.495C15.9801 25.981 16.0012 26.6816 17.0643 26.9975L21.9623 28.4594L33.3403 21.6235C33.8761 21.2833 34.3612 21.4696 33.9604 21.8139L24.7593 29.7472Z"
                fill="white" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="content-container footer__container footer__container--bottom">
    <div class="footer__address">
      <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/address__map.png" class="footer__address-map"
        width="98" height="98" alt="">
      <div class="footer__address-content">
        <div class="footer__address-title">Office address:</div>
        <div class="footer__address-text"><?= Contacts::get_address() ?></div>
        <a class="footer__address-link link-default" href="<?= Contacts::get_map_url() ?>">Show on map</a>
      </div>
    </div>

    <div class="footer__reserved">All rights reserved</div>

    <a class="footer__terms" href="<?= get_privacy_policy_url() ?>">Privacy Policy</a>
  </div>
</footer>
<div class="lang-switcher">
  <?php echo do_shortcode('[language-switcher]') ?>
</div>
<?php ct()->template('/parts/modals/modals-section.php') ?>
<?php wp_footer() ?>
</div>
</body>

</html>
