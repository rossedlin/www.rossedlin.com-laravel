<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/09/2017
 * Time: 11:31
 *
 * @var \App\Objects\Navigation\Element[] $navigation
 */
?>
<!-- Footer -->
<footer class="text-center">

    <div class="g-color-white g-bg-primary-dark-v1 g-py-40 g-px-15">

        <ul class="list-inline d-inline-block g-mb-30">

            <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                   href="@lang('social.facebook')"
                   target="_blank"><i class="fa fa-facebook"></i></a>
            </li>

            <li class="list-inline-item">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                   href="@lang('social.linkedin')"
                   target="_blank"><i class="fa fa-linkedin"></i></a>
            </li>

            <li class="list-inline-item">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                   href="@lang('social.instagram')"
                   target="_blank"><i class="fa fa-instagram"></i></a>
            </li>

            <li class="list-inline-item g-mr-10">
                <a class="u-icon-v3 g-width-35 g-height-35 g-font-size-16 g-color-primary g-color-white--hover g-bg-white g-bg-gray-dark-v2--hover g-transition-0_2 g-transition--ease-in"
                   href="@lang('social.github')"
                   target="_blank"><i class="fa fa-github"></i></a>
            </li>


        </ul>
        <ul class="list-inline text-uppercase g-font-weight-600 g-font-size-11 mb-0">

            <?php foreach ($navigation as $element)
            {
            ?>
            <li class="list-inline-item g-px-12--md <?= ($element->isActive() ? 'active' : '') ?>">
                <a class="g-color-white-opacity-0_7 g-color-white--hover g-text-underline--none--hover"
                   href="<?= $element->getSubUrl() ?>"><?= $element->getName() ?></a>
            </li>
            <?php } ?>

        </ul>
    </div>
</footer>
<!-- End Footer -->