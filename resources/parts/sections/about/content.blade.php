<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/10/2017
 * Time: 13:03
 */
?>

<!-- User Block -->
<div id="content" class="g-brd-around g-brd-gray-light-v4 g-pa-20 g-mb-40">
    <div class="row">

        <div class="col-lg-12">
            <!-- User Details -->
            <div class="d-flex align-items-center justify-content-sm-between g-mb-5">
                <h2 class="g-font-weight-300 g-mr-10"><?= \App\Library\About::getFullName() ?></h2>
                <ul class="list-inline mb-0">

                    <!-- Facebook -->
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                           href="@lang('social.facebook')"
                           target="_blank">
                            <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                            <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                        </a>
                    </li>
                    <!-- End Facebook -->

                    <!-- Instagram -->
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                           href="@lang('social.instagram')"
                           target="_blank">
                            <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-instagram"></i>
                            <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-instagram"></i>
                        </a>
                    </li>
                    <!-- End Instagram -->

                    <!-- Twitter -->
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                           href="@lang('social.twitter')"
                           target="_blank">
                            <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                            <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                        </a>
                    </li>
                    <!-- End Twitter -->

                    <!-- LinkedIn -->
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                           href="@lang('social.linkedin')"
                           target="_blank">
                            <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-linkedin"></i>
                            <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-linkedin"></i>
                        </a>
                    </li>
                    <!-- End LinkedIn -->

                    <!-- GitHub -->
                    <li class="list-inline-item g-mx-2">
                        <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-gray-light-v1 g-bg-gray-light-v5 g-color-gray-light-v1--hover rounded-circle"
                           href="@lang('social.github')"
                           target="_blank">
                            <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-github"></i>
                            <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-github"></i>
                        </a>
                    </li>
                    <!-- End GitHub -->
                </ul>
            </div>
            <!-- End User Details -->

            <!-- User Position -->
            <h4 class="h6 g-font-weight-300 g-mb-10">
                <i class="icon-badge g-pos-rel g-top-1 g-mr-5 g-color-gray-dark-v5"></i> <?= \App\Library\About::getTitle() ?>
            </h4>
            <!-- End User Position -->

            <!-- User Info -->
            <ul class="list-inline g-font-weight-300">
                <li class="list-inline-item g-mr-20">
                    <i class="icon-location-pin g-pos-rel g-top-1 g-color-gray-dark-v5 g-mr-5"></i> <?= \App\Library\About::getLocation() ?>
                </li>
            </ul>
            <!-- End User Info -->

            <hr class="g-brd-gray-light-v4 g-my-20">

            <div class="">
                <?= \App\Library\About::getDescription() ?>
            </div>


            <hr class="g-brd-gray-light-v4 g-my-20">

            <!-- User Skills -->
            <div class="d-flex flex-wrap text-center">
                <!-- Counter Pie Chart -->
                <div class="g-mr-40 g-mb-20 g-mb-0--xl">
                    <div class="js-pie g-color-purple g-mb-5" data-circles-value="54" data-circles-max-value="100"
                         data-circles-bg-color="#d3b6c6" data-circles-fg-color="#9b6bcc" data-circles-radius="30"
                         data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000"
                         data-circles-scroll-animate="true" data-circles-font-size="14">
                    </div>
                    <h4 class="h6 g-font-weight-300">Consulting</h4>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="g-mr-40 g-mb-20 g-mb-0--xl">
                    <div class="js-pie g-color-blue g-mb-5" data-circles-value="72" data-circles-max-value="100"
                         data-circles-bg-color="#bee3f7" data-circles-fg-color="#3498db" data-circles-radius="30"
                         data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000"
                         data-circles-scroll-animate="true" data-circles-font-size="14">
                    </div>
                    <h4 class="h6 g-font-weight-300">Branding</h4>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="g-mr-40 g-mb-20 g-mb-0--xl">
                    <div class="js-pie g-color-lightred g-mb-5" data-circles-value="81" data-circles-max-value="100"
                         data-circles-bg-color="#ffc2bb" data-circles-fg-color="#e74c3c" data-circles-radius="30"
                         data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000"
                         data-circles-scroll-animate="true" data-circles-font-size="14">
                    </div>
                    <h4 class="h6 g-font-weight-300">Copywriting</h4>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="g-mr-40 g-mb-20 g-mb-0--xl">
                    <div class="js-pie g-color-primary g-mb-5" data-circles-value="83" data-circles-max-value="100"
                         data-circles-bg-color="#c9ff97" data-circles-fg-color="#72c02c" data-circles-radius="30"
                         data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000"
                         data-circles-scroll-animate="true" data-circles-font-size="14">
                    </div>
                    <h4 class="h6 g-font-weight-300">Marketing</h4>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="g-mb-20 g-mb-0--lg">
                    <div class="js-pie g-mb-5" data-circles-value="92" data-circles-max-value="100"
                         data-circles-bg-color="#eeeeee" data-circles-fg-color="#111111" data-circles-radius="30"
                         data-circles-stroke-width="3" data-circles-additional-text="%" data-circles-duration="2000"
                         data-circles-scroll-animate="true" data-circles-font-size="14">
                    </div>
                    <h4 class="h6 g-font-weight-300">Management</h4>
                </div>
                <!-- End Counter Pie Chart -->
            </div>
            <!-- End User Skills -->
        </div>
    </div>
</div>
<!-- End User Block -->

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of chart pies
        var items = $.HSCore.components.HSChartPie.init('.js-pie');

        // initialization of HSScrollBar component
        $.HSCore.components.HSScrollBar.init( $('.js-scrollbar') );
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

        // initialization of horizontal progress bars
        setTimeout(function () { // important in this case
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress-bar', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar-indicator'
            });
        }, 1);
    });

    $(window).on('resize', function () {
        setTimeout(function () {
            $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
    });
</script>
