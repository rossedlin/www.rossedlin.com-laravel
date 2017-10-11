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

<!-- JS Implementing Plugins -->
<script src="/vendor/appear.js"></script>
<script src="/vendor/slick-carousel/slick/slick.js"></script>
<script src="/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.js"></script>
<script src="/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="/vendor/fancybox/jquery.fancybox.js"></script>

<!-- JS Unify -->
<script src="/js/hs.core.js"></script>
<script src="/js/components/hs.header.js"></script>
<script src="/js/helpers/hs.hamburgers.js"></script>
<script src="/js/components/hs.scroll-nav.js"></script>
<script src="/js/components/hs.counter.js"></script>
<script src="/js/components/hs.carousel.js"></script>
<script src="/js/components/hs.cubeportfolio.js"></script>
<script src="/js/components/hs.popup.js"></script>
<script src="/js/components/hs.go-to.js"></script>

@yield('body.post')

</body>
</html>