<?php
ct()->header()
?>
<?php ct()->template('/parts/inner-page-hero.php') ?>
<section class="page">
  <div class="page__container content-container">
    <?php the_content() ?>
  </div>
</section>
<?php ct()->template('/front-page/parts/preferences-section.php') ?>
<?php
ct()->footer()
?>
