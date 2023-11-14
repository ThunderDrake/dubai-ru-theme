<?php
/**
 * Шаблон главной страницы
 */

 ct()->header()
?>
<?php ct()->template('/front-page/parts/hero-section.php') ?>
<?php ct()->template('/front-page/parts/services-section.php') ?>
<?php ct()->template('/front-page/parts/quiz-section.php') ?>
<?php ct()->template('/front-page/parts/advantages-section.php') ?>
<?php ct()->template('/front-page/parts/steps-section.php') ?>
<?php ct()->template('/front-page/parts/form-section.php') ?>
<?php ct()->template('/front-page/parts/map-section.php') ?>
<?php ct()->template('/front-page/parts/team-section.php') ?>
<?php ct()->template('/front-page/parts/status-section.php') ?>
<?php ct()->template('/front-page/parts/about-section.php') ?>
<?php ct()->template('/front-page/parts/preferences-section.php') ?>
<?php ct()->template('/front-page/parts/socials-section.php') ?>
<?php ct()->template('/front-page/parts/news-section.php') ?>
<?php
ct()->footer();
