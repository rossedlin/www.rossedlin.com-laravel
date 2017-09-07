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
    @include('theme.unify-consulting.head.default')
    @yield('head.post')
</head>

<body id="home-section" class="g-overflow-hidden">

@yield('head.pre')

<main>

    @include('theme.unify-consulting.nav.default')

    @yield('content')

</main>

<!-- JS Global Compulsory -->
<script src="/theme/unify/assets/vendor/jquery/jquery.min.js"></script>
<script src="/theme/unify/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="/theme/unify/assets/vendor/jquery.easing/js/jquery.easing.js"></script>
<script src="/theme/unify/assets/vendor/tether.min.js"></script>
<script src="/theme/unify/assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/theme/unify/assets/vendor/appear.js"></script>
<script src="/theme/unify/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/theme/unify/assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="/theme/unify/assets/vendor/fancybox/jquery.fancybox.js"></script>

<!-- JS Unify -->
<script src="/theme/unify/assets/js/hs.core.js"></script>
<script src="/theme/unify/assets/js/components/hs.header.js"></script>
<script src="/theme/unify/assets/js/helpers/hs.hamburgers.js"></script>
<script src="/theme/unify/assets/js/components/hs.scroll-nav.js"></script>
<script src="/theme/unify/assets/js/components/hs.counter.js"></script>
<script src="/theme/unify/assets/js/components/hs.carousel.js"></script>
<script src="/theme/unify/assets/js/components/hs.cubeportfolio.js"></script>
<script src="/theme/unify/assets/js/components/hs.popup.js"></script>
<script src="/theme/unify/assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="/theme/unify/assets/js/custom.js"></script>

@yield('body.post')

</body>
</html>