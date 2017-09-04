<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/09/2017
 * Time: 11:54
 *
 * @var int   $key
 * @var array $testimonial
 */
?>

<div class="col-sm-6 col-md-6 <?= (\CuttingWeb\Core\Math::isEven($key) ? 'g-theme-bg-gray-dark-v1' : 'g-theme-bg-gray-dark-v2') ?> g-py-30 g-py-70--md g-px-30">
    <!-- Testimonial Block -->
    <div class="media g-mb-25">
        <div class="media-left g-pr-20">
            <img class="media-object rounded-circle"
                 src="<?= $testimonial['image'] ?>"
                 width="80"
                 height="80"
                 alt="Image Description">
        </div>

        <div class="media-body align-self-center text-uppercase">
            <h4 class="g-font-weight-700 g-font-size-default g-color-white g-mb-3">
                <?= $testimonial['name'] ?>
            </h4>
            <em class="g-font-weight-700 g-font-style-normal g-font-size-10 g-theme-color-gray-light-v3 g-mb-0">
                <?= $testimonial['company'] ?>
            </em>
        </div>
    </div>

    <blockquote class="g-theme-color-gray-light-v3 mb-0">
        <?= $testimonial['quote'] ?>
    </blockquote>
    <!-- End Testimonial Block -->
</div>