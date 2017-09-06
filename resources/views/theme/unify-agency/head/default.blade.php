<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/09/2017
 * Time: 11:16
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
<link rel="shortcut icon" href="/favicon.ico">

<!-- Google Fonts -->
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,500,600,700,800">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="/theme/unify/assets/vendor/bootstrap/bootstrap.min.css">

<!-- CSS Implementing Plugins -->
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-hs/style.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-line-pro/style.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-line/css/simple-line-icons.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/hamburgers/hamburgers.min.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/chosen/chosen.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/animate.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/slick-carousel/slick/slick.css">

<!-- Revolution Slider -->
<link rel="stylesheet"
      href="/theme/unify/assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/revolution-slider/revolution/css/settings.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/revolution-slider/revolution/css/layers.css">
<link rel="stylesheet" href="/theme/unify/assets/vendor/revolution-slider/revolution/css/navigation.css">

<!-- CSS Template -->
<link rel="stylesheet" href="/theme/unify-agency/assets/css/styles.op-agency.css">

<!-- CSS Customization -->
<link rel="stylesheet" href="<?= \Cryslo\Core\Utils::addVersionToCssFile('/theme/unify-agency/assets/css/custom.css') ?>">
