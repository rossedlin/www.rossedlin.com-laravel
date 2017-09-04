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
<div>

@include('unify-agency.header.default')

{{--@include('unify-agency.sections.home')--}}
{{--@include('unify-agency.sections.about')--}}
{{--@include('unify-agency.sections.why-me')--}}
{{--@include('unify-agency.sections.services')--}}







    <!-- Section Content -->
    <section id="workProcess" class="u-bg-overlay g-theme-bg-gray-dark-v1-opacity-0_95--after g-py-30 g-py-80--md"
             style="background-image: url(/theme/unify-agency/assets/img-temp/1400x1033/img1.jpg);">
        <div class="container text-center u-bg-overlay__inner g-max-width-770 g-mb-30 g-mb-70--md">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-30">
                <h3 class="g-font-weight-600 g-font-size-12 g-color-primary g-mb-20">Work process</h3>
                <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-weight-700 g-font-size-30 g-font-size-40--md g-color-white mb-0">
                    How we work</h2>
            </div>

            <p class="g-color-white-opacity-0_5 mb-0">Praesent eu nibh malesuada, condimentum nibh hendrerit, viverra
                sem. Nulla porttitor eget ante ullamcorper convallis. Integer dictum lorem arcu, eget tempus nulla
                accumsan id.</p>
        </div>

        <div class="container u-bg-overlay__inner">
            <div class="row">
                <div class="col-md-3">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column text-uppercase u-nav-v1-1 u-nav-primary g-font-weight-600 g-font-size-11"
                        role="tablist"
                        data-target="workProcessTabs"
                        data-tabs-mobile-type="accordion"
                        data-btn-classes="btn btn-md btn-block text-uppercase u-btn-outline-primary g-font-weight-700 rounded-0 g-mb-20">
                        <li class="nav-item g-mb-10">
                            <a class="nav-link active" data-toggle="tab" href="#userInterfase" role="tab">User
                                interfase</a>
                        </li>
                        <li class="nav-item g-mb-10">
                            <a class="nav-link" data-toggle="tab" href="#identityAndBranding" role="tab">Identity and
                                branding</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#webDesign" role="tab">Web design</a>
                        </li>
                    </ul>
                    <!-- End Nav tabs -->
                </div>

                <div class="col-md-9">
                    <!-- Tab panes -->
                    <div id="workProcessTabs" class="tab-content">
                        <div id="userInterfase" class="tab-pane fade g-mb-20 g-mb-0--md show active" role="tabpanel">
                            <img class="img-fluid g-mb-30" src="/theme/unify-agency/assets/img-temp/900x372/img1.jpg"
                                 alt="Image description">

                            <div class="row">
                                <div class="col-md-4 g-mb-20 g-mb-0--md">
                                    <div class="media g-parent g-mb-15">
                                        <div class="d-flex align-self-center g-mr-15">
                          <span class="u-icon-v2 g-width-40 g-height-40 g-color-gray-dark-v4 g-brd-4 g-theme-brd-gray-dark-v3 g-brd-primary--parent-hover rounded-circle">
                            <i class="g-font-style-normal g-font-weight-700 g-font-size-default g-color-primary">1</i>
                          </span>
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h3 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-color-white mb-0">
                                                Discuss with client</h3>
                                        </div>
                                    </div>

                                    <p class="g-line-height-1_4 mb-0">Quisque rhoncus euismod pulvinar. Nulla non arcu
                                        at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis. Donec vel
                                        pharetra tellus. Sed non est lacus.</p>
                                </div>

                                <div class="col-md-4 g-mb-20 g-mb-0--md">
                                    <div class="media g-parent g-mb-15">
                                        <div class="d-flex align-self-center g-mr-15">
                          <span class="u-icon-v2 g-width-40 g-height-40 g-color-gray-dark-v4 g-brd-4 g-theme-brd-gray-dark-v3 g-brd-primary--parent-hover rounded-circle">
                            <i class="g-font-style-normal g-font-weight-700 g-font-size-default g-color-primary">2</i>
                          </span>
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h3 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-color-white mb-0">
                                                Wireframe</h3>
                                        </div>
                                    </div>

                                    <p class="g-line-height-1_4 mb-0">Cras sit amet varius velit. Maecenas porta
                                        condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis dis.
                                        Donec vel pharetra tellus. Sed non est lacus.</p>
                                </div>

                                <div class="col-md-4">
                                    <div class="media g-parent g-mb-15">
                                        <div class="d-flex align-self-center g-mr-15">
                          <span class="u-icon-v2 g-width-40 g-height-40 g-color-gray-dark-v4 g-brd-4 g-theme-brd-gray-dark-v3 g-brd-primary--parent-hover rounded-circle">
                            <i class="g-font-style-normal g-font-weight-700 g-font-size-default g-color-primary">3</i>
                          </span>
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h3 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-color-white mb-0">
                                                Creative concept</h3>
                                        </div>
                                    </div>

                                    <p class="g-line-height-1_4 mb-0">Nam in nisl volutpat ex bibendum sollicitudin.
                                        Praesent ac magna convallis, sagittis erat in, dapibus mauris. Donec vel
                                        pharetra tellus. Sed non est lacus.</p>
                                </div>
                            </div>
                        </div>

                        <div id="identityAndBranding" class="tab-pane fade g-mb-20 g-mb-0--md" role="tabpanel">
                            <img class="img-fluid g-mb-30" src="/theme/unify-agency/assets/img-temp/900x372/img2.jpg"
                                 alt="Image description">

                            <div class="row">
                                <div class="col-md-6 g-mb-20 g-mb-0--md">
                                    <div class="media g-parent g-mb-15">
                                        <div class="d-flex align-self-center g-mr-15">
                          <span class="u-icon-v2 g-width-40 g-height-40 g-color-gray-dark-v4 g-brd-4 g-theme-brd-gray-dark-v3 g-brd-primary--parent-hover rounded-circle">
                            <i class="g-font-style-normal g-font-weight-700 g-font-size-default g-color-primary">1</i>
                          </span>
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h3 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-color-white mb-0">
                                                Discuss with client</h3>
                                        </div>
                                    </div>

                                    <p class="g-line-height-1_4 mb-0">Quisque rhoncus euismod pulvinar. Nulla non arcu
                                        at lectus. Vestibulum fringilla velit rhoncus euismod rhoncus turpis. Donec vel
                                        pharetra tellus. Sed non est lacus.</p>
                                </div>

                                <div class="col-md-6">
                                    <div class="media g-parent g-mb-15">
                                        <div class="d-flex align-self-center g-mr-15">
                          <span class="u-icon-v2 g-width-40 g-height-40 g-color-gray-dark-v4 g-brd-4 g-theme-brd-gray-dark-v3 g-brd-primary--parent-hover rounded-circle">
                            <i class="g-font-style-normal g-font-weight-700 g-font-size-default g-color-primary">2</i>
                          </span>
                                        </div>

                                        <div class="media-body align-self-center">
                                            <h3 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-color-white mb-0">
                                                Wireframe</h3>
                                        </div>
                                    </div>

                                    <p class="g-line-height-1_4 mb-0">Cras sit amet varius velit. Maecenas porta
                                        condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis dis.
                                        Donec vel pharetra tellus. Sed non est lacus.</p>
                                </div>
                            </div>
                        </div>

                        <div id="webDesign" class="tab-pane fade" role="tabpanel">
                            <img class="img-fluid g-mb-30" src="/theme/unify-agency/assets/img-temp/900x372/img3.jpg"
                                 alt="Image description">
                            <p class="g-line-height-1_4 mb-0">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum
                                in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc
                                ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor
                                lorem eros vel odio.</p>
                        </div>
                    </div>
                    <!-- End Tab panes -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="skills" class="g-py-30 g-py-80--md">
        <div class="container text-center u-bg-overlay__inner g-max-width-770 g-mb-30 g-mb-70--md">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-30">
                <h3 class="g-font-weight-600 g-font-size-12 g-color-primary g-mb-20">Skills</h3>
                <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-weight-700 g-font-size-30 g-font-size-40--md g-theme-color-gray-dark-v1 mb-0">
                    Our best side</h2>
            </div>

            <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra justo
                odio. Donec eu nulla leo. Vivamus risus lacus, viverra eu maximus non, tincidunt sodales massa.</p>
        </div>

        <div class="container">
            <div class="row g-mb-50">
                <!-- Counter Pie Chart -->
                <div class="col-md-6 col-lg-3 text-center g-mb-50 g-mb-0--lg">
                    <div class="js-pie g-font-weight-600 g-mb-35"
                         data-circles-value="84"
                         data-circles-max-value="100"
                         data-circles-bg-color="#f8f8f8"
                         data-circles-fg-color="#e74c3c"
                         data-circles-radius="80"
                         data-circles-stroke-width="10"
                         data-circles-duration="2000"
                         data-circles-scroll-animate="true"
                         data-circles-font-size="56"
                         data-circles-color="#000">
                    </div>

                    <h4 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Happy Clients</h4>
                    <p class="mb-0">Integer accumsan maximus leo, et consectetur metus vestibulum in. Vestibulum viverra
                        justo odio maximus efficitur</p>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="col-md-6 col-lg-3 text-center g-mb-50 g-mb-0--lg">
                    <div class="js-pie g-font-weight-600 g-mb-35"
                         data-circles-value="34"
                         data-circles-max-value="100"
                         data-circles-bg-color="#f8f8f8"
                         data-circles-fg-color="#e74c3c"
                         data-circles-radius="80"
                         data-circles-stroke-width="10"
                         data-circles-duration="2000"
                         data-circles-scroll-animate="true"
                         data-circles-font-size="56"
                         data-circles-color="#000">
                    </div>

                    <h4 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Completed Projects</h4>
                    <p class="mb-0">Quisque vestibulum sem eget nibh commodo, non elementum nibh pulvinar. Duis mattis
                        venenatis tortor iaculis ultricies</p>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="col-md-6 col-lg-3 text-center g-mb-50 g-mb-0--md">
                    <div class="js-pie g-font-weight-600 g-mb-35"
                         data-circles-value="35"
                         data-circles-max-value="100"
                         data-circles-bg-color="#f8f8f8"
                         data-circles-fg-color="#e74c3c"
                         data-circles-radius="80"
                         data-circles-stroke-width="10"
                         data-circles-duration="2000"
                         data-circles-scroll-animate="true"
                         data-circles-font-size="56"
                         data-circles-color="#000">
                    </div>

                    <h4 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Our Team</h4>
                    <p class="mb-0">Nullam in diam arcu. Etiam nisl justo, tempor scelerisque sagittis vel, bibendum
                        vestibulum metus. Donec eget nunc neque</p>
                </div>
                <!-- End Counter Pie Chart -->

                <!-- Counter Pie Chart -->
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="js-pie g-font-weight-600 g-mb-35"
                         data-circles-value="67"
                         data-circles-max-value="100"
                         data-circles-bg-color="#f8f8f8"
                         data-circles-fg-color="#e74c3c"
                         data-circles-radius="80"
                         data-circles-stroke-width="10"
                         data-circles-duration="2000"
                         data-circles-scroll-animate="true"
                         data-circles-font-size="56"
                         data-circles-color="#000">
                    </div>

                    <h4 class="h6 text-uppercase g-font-weight-600 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Countries</h4>
                    <p class="mb-0">Rhoncus euismod pulvinar. Nulla non arcu at lectus. Vestibulum fringilla velit
                        rhoncus euismod rhoncus turpis</p>
                </div>
                <!-- End Counter Pie Chart -->
            </div>

            <div class="row">
                <div class="col-md-6 g-px-30 g-px-15--md g-mb-30">
                    <h6 class="text-uppercase g-letter-spacing-0_5 g-font-weight-600 g-font-size-11 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Web development</h6>

                    <div class="js-hr-progress-bar progress g-pos-rel g-height-10 rounded-0 g-overflow-visible g-mb-20">
                        <div class="js-hr-progress-bar-indicator progress-bar g-theme-bg-gray-dark-v1"
                             role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                             style="width: 85%;"></div>
                        <div class="text-center u-progress__pointer-v1 g-font-weight-700 g-font-size-11 g-color-white g-bg-primary-dark-v1 g-rounded-50x">
                            85%
                        </div>
                    </div>
                </div>

                <div class="col-md-6 g-px-30 g-px-15--md g-mb-30">
                    <h6 class="text-uppercase g-letter-spacing-0_5 g-font-weight-600 g-font-size-11 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        App development</h6>

                    <div class="js-hr-progress-bar progress g-pos-rel g-height-10 rounded-0 g-overflow-visible g-mb-20">
                        <div class="js-hr-progress-bar-indicator progress-bar g-theme-bg-gray-dark-v1"
                             role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                             style="width: 75%;"></div>
                        <div class="text-center u-progress__pointer-v1 g-font-weight-700 g-font-size-11 g-color-white g-bg-primary-dark-v1 g-rounded-50x">
                            75%
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 g-px-30 g-px-15--md g-mb-30">
                    <h6 class="text-uppercase g-letter-spacing-0_5 g-font-weight-600 g-font-size-11 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        CSS3 and HTML5</h6>

                    <div class="js-hr-progress-bar progress g-pos-rel g-height-10 rounded-0 g-overflow-visible g-mb-20">
                        <div class="js-hr-progress-bar-indicator progress-bar g-theme-bg-gray-dark-v1"
                             role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                             style="width: 70%;"></div>
                        <div class="text-center u-progress__pointer-v1 g-font-weight-700 g-font-size-11 g-color-white g-bg-primary-dark-v1 g-rounded-50x">
                            70%
                        </div>
                    </div>
                </div>

                <div class="col-md-6 g-px-30 g-px-15--md g-mb-30">
                    <h6 class="text-uppercase g-letter-spacing-0_5 g-font-weight-600 g-font-size-11 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Branding</h6>

                    <div class="js-hr-progress-bar progress g-pos-rel g-height-10 rounded-0 g-overflow-visible g-mb-20">
                        <div class="js-hr-progress-bar-indicator progress-bar g-theme-bg-gray-dark-v1"
                             role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                             style="width: 95%;"></div>
                        <div class="text-center u-progress__pointer-v1 g-font-weight-700 g-font-size-11 g-color-white g-bg-primary-dark-v1 g-rounded-50x">
                            95%
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 g-px-30 g-px-15--md g-mb-30 g-mb-0--md">
                    <h6 class="text-uppercase g-letter-spacing-0_5 g-font-weight-600 g-font-size-11 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Social media</h6>

                    <div class="js-hr-progress-bar progress g-pos-rel g-height-10 rounded-0 g-overflow-visible g-mb-20">
                        <div class="js-hr-progress-bar-indicator progress-bar g-theme-bg-gray-dark-v1"
                             role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                             style="width: 90%;"></div>
                        <div class="text-center u-progress__pointer-v1 g-font-weight-700 g-font-size-11 g-color-white g-bg-primary-dark-v1 g-rounded-50x">
                            90%
                        </div>
                    </div>
                </div>

                <div class="col-md-6 g-px-30 g-px-15--md">
                    <h6 class="text-uppercase g-letter-spacing-0_5 g-font-weight-600 g-font-size-11 g-font-secondary g-theme-color-gray-dark-v1 g-mb-15">
                        Wordpress</h6>

                    <div class="js-hr-progress-bar progress g-pos-rel g-height-10 rounded-0 g-overflow-visible g-mb-20">
                        <div class="js-hr-progress-bar-indicator progress-bar g-theme-bg-gray-dark-v1"
                             role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                             style="width: 70%;"></div>
                        <div class="text-center u-progress__pointer-v1 g-font-weight-700 g-font-size-11 g-color-white g-bg-primary-dark-v1 g-rounded-50x">
                            70%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="team" class="g-py-30 g-pb-80--md">
        <div class="u-bg-overlay g-theme-bg-gray-dark-v1-opacity-0_95--after g-pt-30 g-pt-80--md g-pb-250"
             style="background-image: url(/theme/unify-agency/assets/img-temp/1400x585/img1.jpg);">
            <div class="container text-center u-bg-overlay__inner g-max-width-770">
                <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-30">
                    <h3 class="g-font-weight-600 g-font-size-12 g-color-primary g-mb-20">Our team</h3>
                    <h2 class="u-heading-v2__title g-line-height-1 g-letter-spacing-2 g-font-weight-700 g-font-size-30 g-font-size-40--md g-color-white mb-0">
                        Work with professionals</h2>
                </div>

                <p class="g-color-white-opacity-0_5 mb-0">Praesent eu nibh malesuada, condimentum nibh hendrerit,
                    viverra sem. Nulla porttitor eget ante ullamcorper convallis. Integer dictum lorem arcu, eget tempus
                    nulla accumsan id.</p>
            </div>
        </div>

        <div class="container g-mt-minus-200">
            <!-- Team Block -->
            <div class="row">
                <div class="col-md-6 col-lg-3 g-mb-30 g-mb-0--lg">
                    <div class="text-center">
                        <!-- Figure -->
                        <figure class="g-pos-rel g-parent g-mb-30">
                            <!-- Figure Image -->
                            <img class="w-100" src="/theme/unify-agency/assets/img-temp/270x450/img1.jpg"
                                 alt="Image Description">
                            <!-- End Figure Image -->

                            <!-- Figure Caption -->
                            <figcaption
                                    class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-dark-v1-opacity-0_8 opacity-0 g-opacity-1--parent-hover g-pa-20 g-transition-0_2 g-transition--ease-in">
                                <q class="text-uppercase u-quote-v1 g-flex-middle-item g-line-height-1_4 g-font-weight-700 g-font-size-16 g-color-white">Changing
                                    your mind and changing world</q>
                                <!-- Figure Social Icons -->
                                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </figcaption>
                            <!-- End Figure Caption -->
                        </figure>
                        <!-- End Figure -->

                        <!-- Figure Info -->
                        <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-11 g-color-primary g-mb-5">Photographer</em>
                        <h4 class="text-uppercase g-font-weight-700 g-font-size-18 g-theme-color-gray-dark-v1 g-mb-7">
                            Ralf Smith</h4>
                        <p class="g-font-size-13 g-theme-color-gray-light-v3 mb-0">head photographer</p>
                        <!-- End Figure Info-->
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 g-mb-30 g-mb-0--lg">
                    <div class="text-center">
                        <!-- Figure -->
                        <figure class="g-pos-rel g-parent g-mb-30">
                            <!-- Figure Image -->
                            <img class="w-100" src="/theme/unify-agency/assets/img-temp/270x450/img2.jpg"
                                 alt="Image Description">
                            <!-- End Figure Image -->

                            <!-- Figure Caption -->
                            <figcaption
                                    class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-dark-v1-opacity-0_8 opacity-0 g-opacity-1--parent-hover g-pa-20 g-transition-0_2 g-transition--ease-in">
                                <q class="text-uppercase u-quote-v1 g-flex-middle-item g-line-height-1_4 g-font-weight-700 g-font-size-16 g-color-white">Changing
                                    your mind and changing world</q>
                                <!-- Figure Social Icons -->
                                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </figcaption>
                            <!-- End Figure Caption -->
                        </figure>
                        <!-- End Figure -->

                        <!-- Figure Info -->
                        <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-11 g-color-primary g-mb-5">Designer</em>
                        <h4 class="text-uppercase g-font-weight-700 g-font-size-18 g-theme-color-gray-dark-v1 g-mb-7">
                            Monica Gaudy</h4>
                        <p class="g-font-size-13 g-theme-color-gray-light-v3 mb-0">head photographer</p>
                        <!-- End Figure Info-->
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 g-mb-30 g-mb-0--md">
                    <div class="text-center">
                        <!-- Figure -->
                        <figure class="g-pos-rel g-parent g-mb-30">
                            <!-- Figure Image -->
                            <img class="w-100" src="/theme/unify-agency/assets/img-temp/270x450/img3.jpg"
                                 alt="Image Description">
                            <!-- End Figure Image -->

                            <!-- Figure Caption -->
                            <figcaption
                                    class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-dark-v1-opacity-0_8 opacity-0 g-opacity-1--parent-hover g-pa-20 g-transition-0_2 g-transition--ease-in">
                                <q class="text-uppercase u-quote-v1 g-flex-middle-item g-line-height-1_4 g-font-weight-700 g-font-size-16 g-color-white">Changing
                                    your mind and changing world</q>
                                <!-- Figure Social Icons -->
                                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </figcaption>
                            <!-- End Figure Caption -->
                        </figure>
                        <!-- End Figure -->

                        <!-- Figure Info -->
                        <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-11 g-color-primary g-mb-5">Co-founder</em>
                        <h4 class="text-uppercase g-font-weight-700 g-font-size-18 g-theme-color-gray-dark-v1 g-mb-7">
                            Julia Exon</h4>
                        <p class="g-font-size-13 g-theme-color-gray-light-v3 mb-0">head photographer</p>
                        <!-- End Figure Info-->
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="text-center">
                        <!-- Figure -->
                        <figure class="g-pos-rel g-parent g-mb-30">
                            <!-- Figure Image -->
                            <img class="w-100" src="/theme/unify-agency/assets/img-temp/270x450/img4.jpg"
                                 alt="Image Description">
                            <!-- End Figure Image -->

                            <!-- Figure Caption -->
                            <figcaption
                                    class="g-pos-abs g-top-0 g-left-0 g-flex-middle w-100 h-100 g-bg-primary-dark-v1-opacity-0_8 opacity-0 g-opacity-1--parent-hover g-pa-20 g-transition-0_2 g-transition--ease-in">
                                <q class="text-uppercase u-quote-v1 g-flex-middle-item g-line-height-1_4 g-font-weight-700 g-font-size-16 g-color-white">Changing
                                    your mind and changing world</q>
                                <!-- Figure Social Icons -->
                                <ul class="list-inline g-flex-middle-item--bottom g-mb-30 mt-0">
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item g-mx-5">
                                        <a class="u-icon-v3 u-icon-size--xs g-width-35 g-height-35 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover"
                                           href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End Figure Social Icons -->
                            </figcaption>
                            <!-- End Figure Caption -->
                        </figure>
                        <!-- End Figure -->

                        <!-- Figure Info -->
                        <em class="d-block text-uppercase g-font-style-normal g-font-weight-700 g-font-size-11 g-color-primary g-mb-5">Co-founder</em>
                        <h4 class="text-uppercase g-font-weight-700 g-font-size-18 g-theme-color-gray-dark-v1 g-mb-7">
                            Jacob Assange</h4>
                        <p class="g-font-size-13 g-theme-color-gray-light-v3 mb-0">head photographer</p>
                        <!-- End Figure Info-->
                    </div>
                </div>
            </div>
            <!-- End Team Block -->
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Section Content -->
    <section id="testimonials" class="g-theme-bg-gray-light-v4">
        <div class="container text-center g-max-width-770 g-py-30 g-py-70--md">
            <div class="u-heading-v8-2 g-mb-40">
                <h2 class="text-uppercase u-heading-v8__title g-font-weight-700 g-font-secondary g-font-size-26 g-color-gray-dark-v2 g-mb-25">
                    Want to join our team?</h2>
                <p class="mb-0">Sed eget aliquet nisl. Proin laoreet accumsan nisl non vestibulum. Donec molestie, lorem
                    nec sollicitudin elementum, mi justo posuere lectus, vitae ullamcorper orci mi vel massa.
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <a class="btn u-btn-primary btn-md text-uppercase g-font-weight-700 g-font-size-12 rounded-0 g-px-25 g-py-10 mb-0"
               href="#">Send your resume</a>
        </div>

        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <!-- Testimonials Block -->
                <section class="col-lg-6 g-theme-bg-gray-dark-v1 g-py-30 g-py-70--md g-px-30">
                    <div class="js-carousel"
                         data-infinite="true"
                         data-arrows-classes="hidden-xs-down u-arrow-v1 g-pos-abs g-right-0 g-top-0 g-width-50 g-height-50 g-rounded-50x g-font-size-18 g-color-white g-theme-bg-gray-dark-v2 g-bg-primary-dark-v1--hover g-mt-15 g-transition-0_2 g-transition--ease-in"
                         data-arrow-left-classes="fa fa-angle-left g-mr-60"
                         data-arrow-right-classes="fa fa-angle-right">
                        <div class="js-slide g-color-white">
                            <!-- Testimonial Block -->
                            <div class="media g-mb-25">
                                <div class="media-left g-pr-20">
                                    <img class="media-object rounded-circle"
                                         src="/theme/unify-agency/assets/img-temp/80x80/img1.jpg"
                                         alt="Image Description">
                                </div>

                                <div class="media-body align-self-center text-uppercase">
                                    <h4 class="g-font-weight-700 g-font-size-default g-color-white g-mb-3">Melissa
                                        Jordany</h4>
                                    <em class="g-font-weight-700 g-font-style-normal g-font-size-10 g-theme-color-gray-light-v3 g-mb-0">Gray
                                        Consultion Corp.</em>
                                </div>
                            </div>

                            <blockquote class="g-theme-color-gray-light-v3 mb-0">Ut augue diam, lacinia fringilla erat
                                eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur
                                lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et
                                vulputate dui. Morbi aliquam leo id ipsum tempus mollis.
                            </blockquote>
                            <!-- End Testimonial Block -->
                        </div>

                        <div class="js-slide g-color-white">
                            <!-- Testimonial Block -->
                            <div class="media g-mb-25">
                                <div class="media-left g-pr-20">
                                    <img class="media-object rounded-circle"
                                         src="/theme/unify-agency/assets/img-temp/80x80/img2.jpg"
                                         alt="Image Description">
                                </div>

                                <div class="media-body align-self-center text-uppercase">
                                    <h4 class="g-font-weight-700 g-font-size-default g-color-white g-mb-3">Joe
                                        Armstrong</h4>
                                    <em class="g-font-weight-700 g-font-style-normal g-font-size-10 g-theme-color-gray-light-v3 g-mb-0">Blue
                                        Yellow Sky Corp.</em>
                                </div>
                            </div>

                            <blockquote class="g-theme-color-gray-light-v3 mb-0">Ut augue diam, lacinia fringilla erat
                                eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur
                                lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et
                                vulputate dui. Morbi aliquam leo id ipsum tempus mollis.
                            </blockquote>
                            <!-- End Testimonial Block -->
                        </div>
                    </div>
                </section>
                <!-- End Testimonials Block -->

                <section class="col-lg-6 d-flex g-theme-bg-gray-dark-v2 g-py-30 g-py-70--md g-px-30">
                    <div id="carouselCus1" class="js-carousel w-100 align-self-center"
                         data-autoplay="true"
                         data-slides-show="4">
                        <div class="js-slide">
                            <img class="img-fluid mx-auto" src="/theme/unify-agency/assets/img-temp/200x150/img1.png"
                                 alt="Image description">
                        </div>

                        <div class="js-slide">
                            <img class="img-fluid mx-auto" src="/theme/unify-agency/assets/img-temp/200x150/img2.png"
                                 alt="Image description">
                        </div>

                        <div class="js-slide">
                            <img class="img-fluid mx-auto" src="/theme/unify-agency/assets/img-temp/200x150/img3.png"
                                 alt="Image description">
                        </div>

                        <div class="js-slide">
                            <img class="img-fluid mx-auto" src="/theme/unify-agency/assets/img-temp/200x150/img4.png"
                                 alt="Image description">
                        </div>

                        <div class="js-slide">
                            <img class="img-fluid mx-auto" src="/theme/unify-agency/assets/img-temp/200x150/img5.png"
                                 alt="Image description">
                        </div>

                        <div class="js-slide">
                            <img class="img-fluid mx-auto" src="/theme/unify-agency/assets/img-temp/200x150/img6.png"
                                 alt="Image description">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Footer -->
    <footer class="text-center">
        <div class="g-py-30 g-py-80--md">
            <div class="container">
                <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary">
                    <h4 class="g-line-height-1 g-font-weight-600 g-font-size-12 g-color-primary g-mb-20">Contact us</h4>
                    <h2 class="u-heading-v2__title g-font-weight-600 g-font-size-30 g-font-size-40--md g-theme-color-gray-dark-v1">
                        Get in touch</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <address class="row g-color-gray-dark-v4 mb-0">
                <div class="col-sm-6 col-md-3 g-theme-bg-gray-dark-v1 px-0 g-py-60">
                    <i class="icon-line icon-map d-inline-block g-font-size-30 g-font-size-40--md g-color-primary g-mb-30"></i>
                    <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v3 g-mb-5">Address</h3>
                    <strong class="g-font-size-16 g-color-white">In sed lectus tincidunt</strong>
                </div>

                <div class="col-sm-6 col-md-3 g-theme-bg-gray-dark-v2 px-0 g-py-60">
                    <i class="icon-line icon-screen-smartphone d-inline-block g-font-size-30 g-font-size-40--md g-color-primary g-mb-30"></i>
                    <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v3 g-mb-5">Phone number</h3>
                    <strong class="g-font-size-16 g-color-white">+48 555 2566 112</strong>
                </div>

                <div class="col-sm-6 col-md-3 g-theme-bg-gray-dark-v1 px-0 g-py-60">
                    <i class="icon-line icon-envelope-letter d-inline-block g-font-size-30 g-font-size-40--md g-color-primary g-mb-30"></i>
                    <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v3 g-mb-5">Email</h3>
                    <a class="g-font-size-16 g-color-white" href="mailto:info@htmlstream.com"><strong>info@htmlstream
                            .com</strong></a>
                </div>

                <div class="col-sm-6 col-md-3 g-theme-bg-gray-dark-v2 px-0 g-py-60">
                    <i class="icon-line icon-call-in d-inline-block g-font-size-30 g-font-size-40--md g-color-primary g-mb-30"></i>
                    <h3 class="text-uppercase g-font-size-11 g-theme-color-gray-light-v3 g-mb-5">Call free</h3>
                    <strong class="g-font-size-16 g-color-white">+48 555 1258 987</strong>
                </div>
            </address>
        </div>

        <div id="contact" class="g-color-gray-dark-v5 g-bg-gray-light-v5 g-py-30 g-py-70--md">
            <div class="container">
                <div class="u-heading-v8-2 g-mb-60">
                    <h2 class="h1 text-uppercase u-heading-v8__title g-font-weight-700 g-font-size-26 g-font-secondary g-color-gray-dark-v2 g-mb-25">
                        Have a questions?</h2>
                    <p class="mb-0">Sed eget aliquet nisl. Proin laoreet accumsan nisl non vestibulum.</p>
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6 form-group g-mb-30">
                            <input id="inputGroup1_1"
                                   class="form-control g-font-size-default g-theme-color-gray-dark-v2 g-placeholder-inherit g-bg-white g-bg-white--focus g-brd-white g-brd-gray-light-v3--hover g-brd-gray-light-v3--focus g-rounded-1 g-py-13 g-px-12 g-transition-0_2 g-transition--ease-in"
                                   type="text" placeholder="Your name">
                        </div>

                        <div class="col-md-6 form-group g-mb-30">
                            <input id="inputGroup1_2"
                                   class="form-control g-font-size-default g-theme-color-gray-dark-v2 g-placeholder-inherit g-bg-white g-bg-white--focus g-brd-white g-brd-gray-light-v3--hover g-brd-gray-light-v3--focus g-rounded-1 g-py-13 g-px-12 g-transition-0_2 g-transition--ease-in"
                                   type="tel" placeholder="Your phone">
                        </div>

                        <div class="col-md-6 form-group g-mb-30">
                            <select id="inputGroup1_3"
                                    class="js-custom-select form-control text-left u-form-control u-select-v1 g-font-size-default g-theme-color-gray-dark-v2 g-bg-white g-brd-white g-brd-gray-light-v3--hover g-rounded-1 g-py-13 g-px-12 g-transition-0_2 g-transition--ease-in"
                                    style="width: 100%;"
                                    data-placeholder="Department"
                                    data-open-icon="fa fa-caret-down"
                                    data-close-icon="fa fa-caret-up">
                                <option></option>
                                <option value="Department1">Department1</option>
                                <option value="Department2">Department2</option>
                                <option value="Department3">Department3</option>
                                <option value="Department4">Department4</option>
                            </select>
                        </div>

                        <div class="col-md-6 form-group g-mb-30">
                            <input id="inputGroup1_4"
                                   class="form-control g-font-size-default g-theme-color-gray-dark-v2 g-placeholder-inherit g-bg-white g-bg-white--focus g-brd-white g-brd-gray-light-v3--hover g-brd-gray-light-v3--focus g-rounded-1 g-py-13 g-px-12 g-transition-0_2 g-transition--ease-in"
                                   type="text" placeholder="Subject">
                        </div>

                        <div class="col-md-12 form-group g-mb-30">
                            <textarea id="inputGroup1_5"
                                      class="form-control g-resize-none g-font-size-default g-theme-color-gray-dark-v2 g-placeholder-inherit g-bg-white g-bg-white--focus g-brd-white g-brd-gray-light-v3--hover g-brd-gray-light-v3--focus g-rounded-1 g-py-13 g-px-12 g-transition-0_2 g-transition--ease-in"
                                      rows="6" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn u-btn-primary btn-md text-uppercase g-font-weight-700 g-font-size-12 rounded-0 g-px-25 g-py-10 mb-0"
                                type="submit" role="button">Send message
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Google (Map) [custom] -->
        <div class="g-pos-rel g-height-500">
            <div id="gMap" class="js-g-map g-pos-abs w-100 h-100"
                 data-type="custom"
                 data-lat="40.674"
                 data-lng="-73.946"
                 data-zoom="12"
                 data-title="Agency"
                 data-styles='[
                 ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
                 ["", "labels", [{"visibility":"on"}]],
                 ["water", "", [{"color":"#bac6cb"}]]
               ]'
                 data-pin="true"
                 data-pin-icon="assets/img/pin.png"></div>
        </div>
        <!-- End Google (Map) [custom] -->

        <div class="g-color-white g-bg-primary-dark-v1 g-py-40 g-px-15">
            <a class="d-inline-block g-mb-30" href="/">
                <img class="img-fluid g-width-130" src="/theme/unify-agency/assets/img/logo-light.png"
                     alt="Image description">
            </a>
            <p class="g-color-white-opacity-0_7 g-mb-30">Integer accumsan maximus leo, et consectetur metus vestibulum
                in. Vestibulum viverra justo odio maximus efficitur</p>
            <ul class="list-inline d-inline-block g-mb-30">
                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                       href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                       href="#"><i class="fa fa-pinterest"></i></a>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                       href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                       href="#"><i class="fa fa-linkedin"></i></a>
                </li>
            </ul>
            <ul class="list-inline text-uppercase g-font-weight-600 g-font-size-11 mb-0">
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">About</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Why
                        we</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Services</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Work
                        process</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Skills</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Team</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Testimonials</a>
                </li>
                <li class="list-inline-item g-px-12--md">
                    <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </footer>
    <!-- End Footer -->

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
</div>

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