<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 31/08/2017
 * Time: 16:03
 */
?>
<header id="js-header" class="u-header u-header--static">
    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-toggleable-md">
            <div class="container">
                <!-- Responsive Toggle Button -->
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0"
                        type="button"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Logo -->
                <a href="/" class="navbar-brand">
                    <img src="/theme/unify/assets/img/logo/logo-1.png" alt="Image Description">
                </a>
                <!-- End Logo -->

                <!-- Navigation -->
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg"
                     id="navBar">
                    <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">

                        <!-- Home -->
                        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl">
                            <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="/">Home</a>
                        </li>
                        <!-- End Home -->

                        <?php /*
                        <!-- Blog -->
                        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl">
                            <a id="mega-menu-blog" class="nav-link g-py-7 g-px-0" href="/blog">Blog</a>
                        </li>
                        <!-- End Blog -->
                        */ ?>

                        <?php /*
                        <!-- Demos -->
                        <li class="nav-item hs-has-sub-menu g-mx-10--lg g-mx-15--xl"
                            data-animation-in="fadeIn"
                            data-animation-out="fadeOut">
                            <a id="nav-link-demos" class="nav-link g-py-7 g-px-0" href="#"
                               aria-haspopup="true"
                               aria-expanded="false"
                               aria-controls="nav-submenu-demos"
                            >Demos</a>

                            <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-20 g-mt-10--lg--scrolling"
                                id="nav-submenu-demos"
                                aria-labelledby="nav-link-demos">
                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--demos--one-page" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--demos--one-page"
                                    >One Pages</a>

                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 u-dropdown-col-2 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                                        id="nav-submenu--demos--one-page"
                                        aria-labelledby="nav-link--demos--one-page">
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/accounting/index.html">Accounting</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/agency/index.html">Agency</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/app/index.html">App</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/architecture/index.html">Architecture</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/business/index.html">Business</a></li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/charity/index.html">Charity</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/consulting/index.html">Сonsulting
                                                <span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">New</span></a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/construction/index.html">Construction</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/courses/index.html">Courses</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/corporate/index.html">Corporate
                                                <span class="u-label g-rounded-3 g-font-size-10 g-bg-lightred g-py-3 g-pos-rel g-top-minus-1 g-ml-5">New</span></a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/event/index.html">Event</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/gym/index.html">GYM</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/lawyer/index.html">Lawyer</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/music/index.html">Music</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/photography/index.html">Photography</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link" href="../../one-pages/real-estate/index.html">Real
                                                Estate</a></li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/restaurant/index.html">Restaurant</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../one-pages/shipping/index.html">Shipping</a></li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/spa/index.html">Spa</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/travel/index.html">Travel</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../one-pages/wedding/index.html">Wedding</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--demos--e-commerce" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--demos--e-commerce"
                                    >E-Commerce</a>

                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                                        id="nav-submenu--demos--e-commerce"
                                        aria-labelledby="nav-link--demos--e-commerce">
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../e-commerce/index.html">Main
                                                Page</a></li>
                                        <li class="dropdown-item">
                                            <a class="nav-link" href="../../e-commerce/page-grid-filter-1.html">Grid
                                                Filter</a></li>
                                        <li class="dropdown-item">
                                            <a class="nav-link" href="../../e-commerce/page-list-filter-1.html">List
                                                Filter</a></li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../e-commerce/page-product-1.html">Product</a></li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../e-commerce/page-checkout-1.html">Сheckout</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../e-commerce/page-login-1.html">Login</a>
                                        </li>
                                        <li class="dropdown-item"><a class="nav-link"
                                                                     href="../../e-commerce/page-signup-1.html">Signup</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-item hs-has-sub-menu">
                                    <a id="nav-link--demos--blog-magazine" class="nav-link" href="#"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       aria-controls="nav-submenu--demos--blog-magazine"
                                    >Blogs &amp; Magazines</a>

                                    <ul class="hs-sub-menu list-unstyled u-shadow-v11 g-brd-top g-brd-primary g-brd-top-2 g-min-width-220 g-mt-minus-2"
                                        id="nav-submenu--demos--blog-magazine"
                                        aria-labelledby="nav-link--demos--blog-magazine">
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../blog-magazine/classic/bm-classic-home-1.html">Home</a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a class="nav-link"
                                               href="../../blog-magazine/classic/bm-classic-single-1.html">Single</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!-- End Demos -->
                        */ ?>

                        <!-- Portfolio -->
                        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl">
                            <a id="mega-menu-portfolio" class="nav-link g-py-7 g-px-0" href="/portfolio">Portfolio</a>
                        </li>
                        <!-- End Portfolio -->

                        <!-- About -->
                        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl">
                            <a id="mega-menu-about" class="nav-link g-py-7 g-px-0" href="/about">About</a>
                        </li>
                        <!-- End About -->

                        <!-- Contact -->
                        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl">
                            <a id="mega-menu-about" class="nav-link g-py-7 g-px-0" href="/contact">Contact</a>
                        </li>
                        <!-- End Contact -->
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>