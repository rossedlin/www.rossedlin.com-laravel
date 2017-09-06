<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 31/08/2017
 * Time: 16:27
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.ross-edlin.head')
</head>

<body>
<main>
    {{--@include('theme.unify.header.default')--}}

    @yield('content')

    @include('theme.ross-edlin.footer')
    @include('theme.ross-edlin.copyright')

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
<script src="/theme/unify/assets/vendor/appear.js"></script>
<script src="/theme/unify/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/theme/unify/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="/theme/unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="/theme/unify/assets/vendor/hs-bg-video/hs-bg-video.js"></script>
<script src="/theme/unify/assets/vendor/hs-bg-video/vendor/player.min.js"></script>
<script src="/theme/unify/assets/vendor/fancybox/jquery.fancybox.js"></script>

<!-- JS Unify -->
<script src="/theme/unify/assets/js/hs.core.js"></script>
<script src="/theme/unify/assets/js/components/hs.header.js"></script>
<script src="/theme/unify/assets/js/helpers/hs.hamburgers.js"></script>
<script src="/theme/unify/assets/js/components/hs.tabs.js"></script>
<script src="/theme/unify/assets/js/helpers/hs.height-calc.js"></script>
<script src="/theme/unify/assets/js/components/hs.onscroll-animation.js"></script>
<script src="/theme/unify/assets/js/helpers/hs.bg-video.js"></script>
<script src="/theme/unify/assets/js/components/hs.popup.js"></script>
<script src="/theme/unify/assets/js/components/hs.carousel.js"></script>
<script src="/theme/unify/assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="/theme/unify/assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#we-provide').slick('setOption', 'responsive', [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }], true);

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of header's height equal offset
        $.HSCore.helpers.HSHeightCalc.init();

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of video on background
        $.HSCore.helpers.HSBgVideo.init('.js-bg-video');

        // initialization of popups with media
        $.HSCore.components.HSPopup.init('.js-fancybox-media', {
            helpers: {
                media: {},
                overlay: {
                    css: {
                        'background': 'rgba(0, 0, 0, .8)'
                    }
                }
            }
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
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