<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 31/08/2017
 * Time: 14:50
 *
 * @var \App\Objects\Page $page
 */
?>
<!-- Title -->
<title><?= $page->getTitle() ?></title>

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Favicon -->
<link rel="shortcut icon" href="../../favicon.ico">

<!-- Google Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700">

<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="/theme/unify/assets/vendor/bootstrap/bootstrap.min.css">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-line/css/simple-line-icons.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-line-pro/style.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-hs/style.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/animate.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/fancybox/jquery.fancybox.min.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/typedjs/typed.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/hs-megamenu/src/hs.megamenu.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/hamburgers/hamburgers.min.css">

<!-- CSS Unify -->
<link rel="stylesheet" href="/theme/unify/assets/css/unify.css">

<!-- CSS Customization -->
<link rel="stylesheet" href="<?= \CuttingWeb\Core::addVersionToCssFile('/theme/unify/assets/css/custom.css') ?>">

<?php
if (config('site.theme'))
{ ?>
<link rel="stylesheet"
      href="<?= \CuttingWeb\Core::addVersionToCssFile('/theme/unify/assets/css/theme/' . config('site.theme') . '.css') ?>">
<link rel="stylesheet" href="<?= \CuttingWeb\Core::addVersionToCssFile('/theme/unify/assets/css/theme.css') ?>">
<?php } ?>