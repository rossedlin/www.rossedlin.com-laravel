<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 01/10/2017
 * Time: 15:09
 *
 * @var Cryslo\Object\WordPress\Post $post
 */
?>
<!-- Author Block -->
<div class="g-mb-60">
    <div class="u-heading-v3-1 g-mb-30">
        <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
            About The Author
        </h2>
    </div>

    <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
        <img class="d-flex u-shadow-v25 g-width-80 g-height-80 rounded-circle g-mr-15"
             src="<?= $post->getUser()->getAvatar(\Cryslo\Object\WordPress\User::AVATAR_96, '/theme/unify/assets/img-temp/100x100/img8.jpg') ?>" alt="Image Description">

        <div class="media-body">
            <h4 class="g-color-gray-dark-v1 g-mb-15">
                <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover">
                    <?= $post->getUser()->getDisplayName() ?>
                </a>
            </h4>

            <div class="g-mb-15">
                <p><?= $post->getUser()->getDescription() ?></p>
            </div>

            <ul class="list-inline mb-0">
                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                       href="<?= $post->getUser()->getFacebook() ?>" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                       href="<?= $post->getUser()->getInstagram() ?>" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                       href="<?= $post->getUser()->getTwitter() ?>" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>

                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                       href="<?= $post->getUser()->getLinkedin() ?>" target="_blank">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>

                <li class="list-inline-item g-mr-10">
                    <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                       href="<?= $post->getUser()->getGithub() ?>" target="_blank">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Author Block -->