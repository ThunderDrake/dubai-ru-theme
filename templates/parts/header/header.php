<?php
$site_menu_accounting = get_field('site_menu_accounting', 'option')['site_menu_item'];
$site_menu_legal = get_field('site_menu_legal', 'option')['site_menu_item'];
$site_menu_hr = get_field('site_menu_hr', 'option')['site_menu_item'];
$site_menu_info = get_field('site_menu_info', 'option')['site_menu_item'];
?>
<!DOCTYPE html>
<html lang="ru" class="page">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <?php wp_head(); ?>

  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KW6XBZGV');

  </script>
  <!-- End Google Tag Manager -->

</head>

<body class="page__body">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KW6XBZGV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="site-container">
    <header class="header">
      <div class="container header__container">
        <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/small-logo.svg" class="header__small-logo" width="72"
          height="72" alt="">
        <div class="content-container">
          <div class="logo__container">
            <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/logo.svg" class="header__logo logo" width="110"
              height="92" alt="">
            <span class="logo__text">
              Legal and accounting services TAX~UAE
            </span>
          </div>

          <div class="header__address">
            <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/address__map.png" class="header__address-map"
              width="98" height="98" alt="">
            <div class="header__address-content">
              <div class="header__address-title">Office address:</div>
              <div class="header__address-text"><?= Contacts::get_address() ?></div>
              <a class="header__address-link link-default" href="<?= Contacts::get_map_url() ?>">Show on map</a>
            </div>
          </div>

          <a class="header__link link-default" href="<?= get_home_url() ?>/#quiz">Calculate the cost</a>

          <div class="header__socials">
            <div class="header__socials-text">Ask a question, <br><span>we are online</span></div>
            <a class="header__socials-link link-round-hover" href="<?= Contacts::get_wa_url() ?>" rel="nofollow noopener noreferrer">
              <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="54" height="54" rx="27" fill="#31B939" />
                <path
                  d="M27.0001 15.1201C20.4416 15.1201 15.1201 20.4416 15.1201 27.0001C15.1201 29.6263 15.9702 32.0451 17.4077 34.0148L15.8941 38.4931L20.6144 37.0211C22.4596 38.1959 24.6504 38.8801 27.0001 38.8801C33.5587 38.8801 38.8801 33.5587 38.8801 27.0001C38.8801 20.4416 33.5587 15.1201 27.0001 15.1201ZM32.4391 33.3721C30.2828 34.2359 27.7119 33.3997 24.8992 31.2642C22.0864 29.1287 20.2343 26.1224 20.1099 23.8902C19.9855 21.6579 21.803 20.5314 22.7913 20.5383C23.7796 20.5452 24.8646 23.7036 24.8784 24.1873C24.8923 24.678 23.669 25.5488 23.6206 25.9635C23.5723 26.3781 25.2862 28.4238 26.0118 28.9767C26.7306 29.5226 28.2165 30.5731 28.9836 30.4763C29.7438 30.3727 30.2483 28.8454 30.7321 28.7486C31.2158 28.6518 33.8558 29.9649 34.1184 30.3036C34.3811 30.6491 34.3534 32.6118 32.4391 33.3721Z"
                  fill="white" />
              </svg>

            </a>
            <a class="header__socials-link link-round-hover" href="<?= Contacts::get_tg_url() ?>" rel="nofollow noopener noreferrer">
              <svg width="55" height="54" viewBox="0 0 55 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.0839844" width="54" height="54" rx="27" fill="#05A0EB" />
                <path
                  d="M24.7593 29.7472L24.4007 34.5704C24.9112 34.5704 25.1348 34.3598 25.4006 34.1046L27.7968 31.9057L32.7623 35.3965C33.6736 35.8825 34.3148 35.6273 34.5595 34.5906L37.8206 19.9267C38.1117 18.6389 37.3354 18.1327 36.4495 18.4526L17.2879 25.495C15.9801 25.981 16.0012 26.6816 17.0643 26.9975L21.9623 28.4594L33.3403 21.6235C33.8761 21.2833 34.3612 21.4696 33.9604 21.8139L24.7593 29.7472Z"
                  fill="white" />
              </svg>
            </a>
          </div>

          <div class="header__contacts">
            <div class="header__top-text">We are working now, call</div>
            <div class="header__phone">
              <img loading="lazy" src="<?= ct()->get_assets_url() ?>/img/dub-flag.png" class="header__phone-flag"
                width="30" height="15" alt="">
              <a class="header__phone-link"
                href="tel:<?= Contacts::get_main_phone()['formated'] ?>"><?= Contacts::get_main_phone()['raw'] ?></a>
            </div>
          </div>

          <button class="burger header__burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
            <span class="burger__line"></span>
          </button>

          <div class="header-menu" data-menu>
            <nav class="header-menu__nav nav">
              <ul class="nav__list list-reset">
                <li class="nav__item"><a href="/" class="nav__link nav__link--main">Main</a></li>
                <li class="nav__item">
                  <span class="nav__link nav__link--dropdown">Accounting services</span>
                  <div class="nav__item-submenu">
                    <?php foreach($site_menu_accounting as $item): ?>
                    <?php
                    $title = '';

                    if($item['item-name']) {
                      $title = $item['item-name'];
                    } else {
                      $title = get_the_title(url_to_postid( $item['linked-page'] ));
                    }
                    ?>
                    <a class="nav__link nav__link--submenu" href="<?= $item['linked-page'] ?>"><?= $title ?></a>
                    <?php endforeach; ?>
                  </div>
                </li>
                <li class="nav__item">
                  <span class="nav__link nav__link--dropdown">Legal services</span>
                  <div class="nav__item-submenu">
                    <?php foreach($site_menu_legal as $item): ?>
                    <?php
                    $title = '';

                    if($item['item-name']) {
                      $title = $item['item-name'];
                    } else {
                      $title = get_the_title(url_to_postid( $item['linked-page'] ));
                    }
                    ?>
                    <a class="nav__link nav__link--submenu" href="<?= $item['linked-page'] ?>"><?= $title ?></a>
                    <?php endforeach; ?>
                  </div>
                </li>
                <li class="nav__item">
                  <span class="nav__link nav__link--dropdown">HR in UAE</span>
                  <div class="nav__item-submenu">
                    <?php foreach($site_menu_hr as $item): ?>
                    <?php
                    $title = '';

                    if($item['item-name']) {
                      $title = $item['item-name'];
                    } else {
                      $title = get_the_title(url_to_postid( $item['linked-page'] ));
                    }
                    ?>
                    <a class="nav__link nav__link--submenu" href="<?= $item['linked-page'] ?>"><?= $title ?></a>
                    <?php endforeach; ?>
                  </div>
                </li>
                <li class="nav__item">
                  <span class="nav__link nav__link--dropdown">Helpful information</span>
                  <div class="nav__item-submenu">
                    <?php foreach($site_menu_info as $item): ?>
                    <?php
                    $title = '';

                    if($item['item-name']) {
                      $title = $item['item-name'];
                    } else {
                      $title = get_the_title(url_to_postid( $item['linked-page'] ));
                    }
                    ?>
                    <a class="nav__link nav__link--submenu" href="<?= $item['linked-page'] ?>"><?= $title ?></a>
                    <?php endforeach; ?>
                  </div>
                </li>
                <li class="nav__item"><a href="/contacts/" class="nav__link">Contacts</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
