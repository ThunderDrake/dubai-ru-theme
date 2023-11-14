<?php
/**
 * Шаблон страницы контактов
 */

 ct()->header()
?>
<?php ct()->template('/parts/inner-page-hero.php') ?>
<?php ct()->template('/contacts-page/parts/map-section.php') ?>
<?php ct()->template('/front-page/parts/preferences-section.php') ?>
<?php
ct()->footer();
