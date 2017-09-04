<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/09/2017
 * Time: 10:57
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    @include('unify-agency.head.default')
</head>

<body>
<main>

    @include('unify-agency.header.default')

    @include('unify-agency.sections.home')
    @include('unify-agency.sections.about')
    {{--@include('unify-agency.sections.why-me')--}}
    {{--@include('unify-agency.sections.services')--}}
    {{--@include('unify-agency.sections.word-process')--}}
    {{--@include('unify-agency.sections.skills')--}}
    {{--@include('unify-agency.sections.team')--}}

    @include('unify-agency.sections.testimonials')
    @include('unify-agency.sections.contact')

    @include('unify-agency.footer.default')

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
<script src="/theme/unify/assets/vendor/jquery.easing/js/jquery.easing.js"></script>
<script src="/theme/unify/assets/vendor/tether.min.js"></script>
<script src="/theme/unify/assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="/theme/unify/assets/vendor/appear.js"></script>
<script src="/theme/unify/assets/vendor/chosen/chosen.jquery.js"></script>
<script src="/theme/unify/assets/vendor/image-select/src/ImageSelect.jquery.js"></script>
<script src="/theme/unify/assets/vendor/circles/circles.min.js"></script>
<script src="/theme/unify/assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="/theme/unify/assets/vendor/gmaps/gmaps.min.js"></script>

<!-- JS Revolution Slider -->
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script src='/theme/unify/assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js'></script>

<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="/theme/unify/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- JS Unify -->
<script src="/theme/unify/assets/js/hs.core.js"></script>
<script src="/theme/unify/assets/js/components/hs.header.js"></script>
<script src="/theme/unify/assets/js/helpers/hs.hamburgers.js"></script>
<script src="/theme/unify/assets/js/components/hs.scroll-nav.js"></script>
<script src="/theme/unify/assets/js/components/hs.select.js"></script>
<script src="/theme/unify/assets/js/components/hs.onscroll-animation.js"></script>
<script src="/theme/unify/assets/js/components/hs.tabs.js"></script>
<script src="/theme/unify/assets/js/components/hs.progress-bar.js"></script>
<script src="/theme/unify/assets/js/components/hs.chart-pie.js"></script>
<script src="/theme/unify/assets/js/components/hs.carousel.js"></script>
<script src="/theme/unify/assets/js/components/gmap/hs.map.js"></script>
<script src="/theme/unify/assets/js/components/hs.go-to.js"></script>

<!-- JS Customization -->
<script src="/theme/unify/assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    // initialization of google map
    function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
    }

    // initialization of revolution slider
    var tpj = jQuery,
            promoSlider;

    tpj(document).on('ready', function () {
        if (tpj('#promoSlider').revolution == undefined) {
            revslider_showDoubleJqueryError('#promoSlider');
        } else {
            promoSlider = tpj('#promoSlider').show().revolution({
                sliderType: 'standard',
                jsFileLocation: '../../revolution/js/',
                sliderLayout: 'fullscreen',
                dottedOverlay: 'none',
                delay: 9000,
                navigation: {
                    keyboardNavigation: 'off',
                    keyboard_direction: 'horizontal',
                    mouseScrollNavigation: 'off',
                    onHoverStop: 'off',
                    touch: {
                        touchenabled: 'on',
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: 'horizontal',
                        drag_block_vertical: false
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 960,
                        style: 'zeus',
                        hide_onleave: false,
                        direction: 'horizontal',
                        h_align: 'right',
                        v_align: 'bottom',
                        h_offset: 80,
                        v_offset: 50,
                        space: 5,
                        tmp: '<span class="tp-bullet-image"></span>' +
                        '<span class="tp-bullet-imageoverlay"></span>' +
                        '<span class="tp-bullet-title">title</span>'
                    }
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [868, 768, 960, 720],
                lazyType: 'none',
                parallax: {
                    type: 'mouse',
                    origo: 'slidercenter',
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    disable_onmobile: 'on'
                },
                shadow: 0,
                spinner: 'off',
                stopLoop: 'on',
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: 'off',
                autoHeight: 'off',
                fullScreenAlignForce: 'off',
                fullScreenOffset: '60px',
                disableProgressBar: 'on',
                hideThumbsOnMobile: 'off',
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: 'off',
                    nextSlideOnWindowFocus: 'off',
                    disableFocusListener: false
                }
            });

            var newCall = new Object(),
                    cslide;

            newCall.callback = function () {
                var proc = promoSlider.revgetparallaxproc(),
                        fade = 1 + proc,
                        scale = 1 + (Math.abs(proc) / 10);

                punchgs.TweenLite.set(promoSlider.find('.slotholder, .rs-background-video-layer'), {
                    opacity: fade,
                    scale: scale
                });
            };

            newCall.inmodule = 'parallax';
            newCall.atposition = 'start';

            promoSlider.bind('revolution.slide.onloaded', function (e) {
                promoSlider.revaddcallback(newCall);
            });
        }
    });

    $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#carouselCus1').slick('setOption', 'responsive', [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }], true);

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of scroll animation
        $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of progressbar
        var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
            direction: 'horizontal',
            indicatorSelector: '.js-hr-progress-bar-indicator'
        });

        // initialization of chart pies
        var items = $.HSCore.components.HSChartPie.init('.js-pie');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });

    $(window).on('load', function () {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700,
            easing: 'easeOutExpo'
        });

        setTimeout(function () {
            // initialization of select
            $.HSCore.components.HSSelect.init('.js-custom-select');
        }, 1);
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>

<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap"
        async></script>
</body>
</html>