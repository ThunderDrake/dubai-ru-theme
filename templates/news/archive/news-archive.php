<?php
ct()->header()
?>
<section class="inner-hero">
  <div class="content-container inner-hero__container">
    <div class="breadcrumbs">
      <ul class="breadcrumbs__list list-reset">
        <li class="breadcrumbs__item">
          <a class="breadcrumbs__link" href="/">Main</a>
        </li>
        <li class="breadcrumbs__item">
          <span class="breadcrumbs__link breadcrumbs__link--current">News</span>
        </li>
      </ul>
    </div>

    <h1 class="inner-hero__title">News</h1>
  </div>
</section>
<section class="page">
  <div class="page__container content-container page__news">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        ?>
          <div class="news">
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
        <?php
      }
    }
  ?>
  </div>
</section>
<?php ct()->template('/front-page/parts/preferences-section.php') ?>
<?php
ct()->footer()
?>
