<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 12:51
 */
?>
<!-- Title -->
<title>Ross Edlin</title>

<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Favicon -->
<link rel="shortcut icon" href="/favicon.ico">

<!-- CSS Styles -->
<link rel="stylesheet" href="<?= \Cryslo\Core\Utils::addVersionToCssFile('/css/app.css') ?>">
<link rel="stylesheet" href="<?= \Cryslo\Core\Utils::addVersionToCssFile('/css/style.css') ?>">

<link rel="stylesheet" href="/theme/unify/assets/vendor/icon-line-pro/style.css">

<link rel="stylesheet" href="<?= \Cryslo\Core\Utils::addVersionToCssFile('/css/custom.css') ?>">

<?php if (App::environment('production'))
{
    echo \Cryslo\Api\Google\Analytics::getHtml('UA-61673839-8');
} ?>