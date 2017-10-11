<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 25/09/2017
 * Time: 13:12
 *
 * @var Cryslo\Object\WordPress\Post $post
 */
?>
<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 g-mb-30">
    <!-- Blog Classic Blocks -->
    <article class="u-shadow-v11">
        <a href="<?= url('/blog/' . $post->getYear() . '/' . $post->getSlug()) ?>">
            <img class="img-fluid w-100"
                 src="<?= $post->getFeaturedMedia($post::SIZE_ORIGINAL, '/theme/unify/assets/img-temp/500x650/img1.jpg') ?>"
                 alt="Image Description">
        </a>
        <div class="g-bg-white g-pa-30">

            <div>
                <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 mb-2">
                    <?= $post->getDateFormatted() ?>
                </span>
                <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                    <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer"
                       href="<?= url('/blog/' . $post->getYear() . '/' . $post->getSlug()) ?>">
                        <?= $post->getTitle() ?>
                    </a>
                </h2>
                <p class="g-color-gray-dark-v4 g-line-height-1_8">
                    <?= $post->getExcerpt() ?>
                </p>
                <a class="g-font-size-13" href="<?= url('/blog/' . $post->getYear() . '/' . $post->getSlug()) ?>">Read
                    more...</a>
            </div>

            <div class="g-mt-20">
                <ul class="list-inline g-font-size-12">

                    <?php foreach ($post->getTags() as $tag)
                    { ?>
                        <li class="list-inline-item g-my-5">
                            <a class="<?= $tag->getCssClass() ?> u-tags-v1 g-color-white--hover g-rounded-50 g-py-4 g-px-15"
                               href="#"><?= $tag->getName() ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <?php /*
            <hr class="g-mb-20 g-mt-10">

            <div>
                <ul class="list-inline d-flex justify-content-between mb-0">
                    <li class="list-inline-item g-color-gray-dark-v4">
                        <a class="d-inline-block g-color-gray-dark-v4 g-font-size-13 g-cursor-pointer g-text-underline--none--hover"
                           href="#">
                            <i class="align-middle g-font-size-default mr-1 icon-finance-206 u-line-icon-pro"></i>
                            10 Comments
                        </a>
                    </li>
                    <li class="list-inline-item g-color-gray-dark-v4">
                        <i class="align-middle g-color-primary g-font-size-default mr-1 icon-medical-022 u-line-icon-pro"></i>
                        <a class="d-inline-block g-color-gray-dark-v4 g-font-size-13 g-cursor-pointer g-text-underline--none--hover"
                           href="#">57</a>
                    </li>
                </ul>
            </div>
            */ ?>

        </div>
    </article>
    <!-- End Blog Classic Blocks -->
</div>