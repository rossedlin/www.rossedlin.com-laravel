<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 12:51
 *
 * @var \App\Objects\Web\Meta $meta
 */
?>
<!-- Title -->
<title><?= $meta->getTitle() ?></title>

<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="<?= $meta->getDescription() ?>"/>
<meta name="keywords" content="<?= $meta->getKeywords() ?>">

<!-- Meta OG -->
<meta property="og:locale" content="<?= $meta->getLocale() ?>"/>
<meta property="og:type" content="<?= $meta->getType() ?>"/>
<meta property="og:title" content="<?= $meta->getTitle() ?>"/>
<meta property="og:image" content="<?= $meta->getImage() ?>"/>
<meta property="og:description" content="<?= $meta->getDescription() ?>"/>
<meta property="og:url" content="<?= $meta->getUrl() ?>"/>
<meta property="og:site_name" content="<?= $meta->getSiteName() ?>"/>

<!-- Canonical -->
{{--<link rel="canonical" href="https://www.rossedlin.com/"/>--}}

<!-- Favicon -->
<link rel="shortcut icon" href="/favicon.ico">

<!-- CSS Styles -->
<link rel="stylesheet" href="<?= \Cryslo\Core\Utils::addVersionToCssFile('/css/core.min.css') ?>">
<!-- End CSS Styles -->

<!-- JavaScript -->
<script src="<?= \Cryslo\Core\Utils::addVersionToCssFile('/js/core.js') ?>"></script>
<!-- End JavaScript -->

<?php if (App::environment('production'))
{
    echo \Cryslo\Api\Google\Analytics::getHtml('UA-61673839-8');
} ?>