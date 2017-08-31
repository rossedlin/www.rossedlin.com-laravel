<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 31/08/2017
 * Time: 15:44
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    @include('unify.head.home-page-1')
</head>

<body>
<main>
    @include('unify.header.default')

    @yield('content')

    @include('unify.sections.home.footer')
    @include('unify.footer.default')

    <a class="js-go-to u-go-to-v1" href="#"
       data-type="fixed"
       data-position='{
           "bottom": 15,
           "right": 15
         }'
       data-offset-top="400"
       data-compensation="#js-header"
       data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
</main>

<!-- JS Global Compulsory -->
<script src="/theme/unify/assets/vendor/jquery/jquery.min.js"></script>
<script src="/theme/unify/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="/theme/unify/assets/vendor/tether.min.js"></script>
<script src="/theme/unify/assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/theme/unify/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="/theme/unify/assets/vendor/fancybox/jquery.fancybox.min.js"></script>
<script src="/theme/unify/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/theme/unify/assets/vendor/typedjs/typed.min.js"></script>

<!-- JS Unify -->
<script src="/theme/unify/assets/js/hs.core.js"></script>
<script src="/theme/unify/assets/js/components/hs.header.js"></script>
<script src="/theme/unify/assets/js/helpers/hs.hamburgers.js"></script>
<script src="/theme/unify/assets/js/components/hs.tabs.js"></script>
<script src="/theme/unify/assets/js/components/hs.popup.js"></script>
<script src="/theme/unify/assets/js/components/hs.carousel.js"></script>
<script src="/theme/unify/assets/js/components/text-animation/hs.text-slideshow.js"></script>
<script src="/theme/unify/assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="/theme/unify/assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of text animation (typing)
        $(".u-text-animation.u-text-animation--typing").typed({
            strings: [
                "an awesome template",
                "perfect template",
                "just like a boss"
            ],
            typeSpeed: 60,
            loop: true,
            backDelay: 1500
        });
    });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 991
        });
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>

</body>
</html>
