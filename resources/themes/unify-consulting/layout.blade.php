<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 12:50
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    @yield('head.pre')
    @include('unify-consulting.head')
    @yield('head.post')
</head>

<body id="home-section" class="g-overflow-hidden">

@yield('head.pre')

<main>

    @include('unify-consulting.nav')

    @yield('content')

    @include('unify-consulting.footer')
    @include('unify-consulting.copyright')

</main>

<!-- JavaScript -->
<script src="<?= \Cryslo\Core\Utils::addVersionToCssFile('/js/core.js') ?>"></script>
<!-- End JavaScript -->

@yield('body.post')

</body>
</html>