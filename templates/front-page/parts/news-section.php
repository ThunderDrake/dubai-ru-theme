<?php
global $post;

$news_list = get_posts([
  'numberposts' => 10,
	'post_type'   => 'news',
]);
?>
<section class="news-section">
  <div class="news-section__container content-container">
    <div class="news-section__header">
      <h2 class="news-section__title" data-aos="fade-up">And we talk about the <span>nuances of accounting</span>, <b>share useful tools</b></h2>
      <div class="news-section__slider-controls">
        <button class="btn-reset news-section__slider-button news-section__slider-button--prev">
          <svg class="news-section__slider-button-icon" width="29" height="16">
            <use xlink:href="<?= ct()->get_assets_url() ?>/img/sprite.svg#button-arrow"></use>
          </svg>
        </button>
        <button class="btn-reset news-section__slider-button news-section__slider-button--next">
          <svg class="news-section__slider-button-icon" width="29" height="16">
            <use xlink:href="<?= ct()->get_assets_url() ?>/img/sprite.svg#button-arrow"></use>
          </svg>
        </button>
      </div>
    </div>

    <div class="swiper news-section__slider">
      <div class="swiper-wrapper news-section__slider-wrapper">
        <?php foreach($news_list as $post): ?>
          <?php setup_postdata( $post ) ?>
         <div class="swiper-slide news-section__slider-slide news">
            <div class="news__wrapper">
              <div class="news__image-wrapper">
                <img loading="lazy" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" class="news__image" width="370" height="218" alt="">
                <div class="news__date"><?= get_the_date('j F, Y') ?></div>
              </div>
              <div class="news__content">
                <div class="news__title"><?php the_title() ?></div>
                <div class="news__description"><?php the_excerpt() ?></div>
                <a class="news__link" href="<?= get_permalink() ?>">More</a>
              </div>
            </div>
         </div>
         <?php endforeach; ?>
         <?php wp_reset_postdata() ?>

      </div>
    </div>
  </div>
</section>
