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
                    <ul class="navbar-nav text-uppercase ml-auto">

                        <?php foreach ($navigation as $element)
                        {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $element->getSubUrl() ?>"><?= $element->getName() ?></a>
                        </li>

                        <?php } ?>
                    </ul>
                </div>
                <!-- End Navigation -->
            </div>
        </nav>
</header>