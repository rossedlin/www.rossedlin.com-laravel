<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/09/2017
 * Time: 12:44
 *
 * @var \App\Objects\Portfolio\Item $item
 */
?>
<div class="masonry-grid-item col-sm-4 g-mb-30">
    <!-- Blog Classic Blocks -->
    <article class="u-shadow-v11">
        <img class="img-fluid w-100" src="<?= $item->getImage() ?>"
             alt="Image Description">
        <div class="g-bg-white g-pa-30">
            <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">1 June 2017</span>
            <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer"
                   href="<?= $item->getLink() ?>">
                    <?= $item->getTitle() ?>
                </a>
            </h2>
            <p class="g-color-gray-dark-v4 g-line-height-1_8">
                <?= $item->getExcerpt() ?>
            </p>
            <a class="g-font-size-13" href="<?= $item->getLink() ?>">Read more...</a>

            <?php /*
            <hr class="g-my-20">

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
            */ ?>
        </div>
    </article>
    <!-- End Blog Classic Blocks -->
</div>