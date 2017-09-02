<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 31/08/2017
 * Time: 16:03
 *
 * @var string                            $id
 * @var \App\Objects\Navigation\Element[] $navigation
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
                <div class="collapse navbar-collapse align-items-center"
                     id="navBar">
                    <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">

                        <?php foreach ($navigation as $element)
                        {
                        ?>

                        <li class="hs-has-mega-menu nav-item g-mx-10--lg g-mx-15--xl">
                            <a id="mega-menu-home" class="nav-link g-py-7 g-px-0" href="<?= $element->getSubUrl() ?>"><?= $element->getName() ?></a>
                        </li>

                        <?php } ?>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
    </div>
</header>