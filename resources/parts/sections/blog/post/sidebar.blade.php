<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 17/09/2017
 * Time: 17:46
 *
 * @var Cryslo\Object\WordPress\Post[] $latest_posts
 */
?>
<!-- Sidebar -->
<div class="col-lg-3">

<?php /*
    <!-- Useful Links -->
    <div class="g-mb-50">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Useful
                Links</h2>
        </div>

        <ul class="list-unstyled">
            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                <h4 class="h6">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Wrapbootstrap
                        Marketplace</a>
                </h4>
            </li>
            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                <h4 class="h6">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Google
                        Adwords &amp; Adsense</a>
                </h4>
            </li>
            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                <h4 class="h6">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Web Design
                        with UX/UI</a>
                </h4>
            </li>
            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                <h4 class="h6">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Digital
                        Marketing</a>
                </h4>
            </li>
            <li class="g-brd-bottom g-brd-gray-light-v4 g-pb-10 g-mb-12">
                <h4 class="h6">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Support
                        Forum &amp; Community</a>
                </h4>
            </li>
            <li class="mb-0">
                <h4 class="h6">
                    <i class="fa fa-angle-right g-color-gray-dark-v5 g-mr-5"></i>
                    <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Unify
                        Template Pages</a>
                </h4>
            </li>
        </ul>
    </div>
    <!-- End Useful Links -->
    */ ?>

<!-- Recent Posts -->
    <div class="g-mb-30">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
                Recent Posts
            </h2>
        </div>

        <?php foreach ($latest_posts as $latest_post)
        { ?>
            <!-- Article -->
            <article class="media g-mb-30">


                <a class="d-flex u-shadow-v25 mr-3" href="/blog/<?= $latest_post->getYear() ?>/<?= $latest_post->getSlug() ?>">
                    <img class="g-width-60 g-height-60"
                         src="<?= $latest_post->getFeaturedMedia(Cryslo\Object\WordPress\Post::SIZE_THUMBNAIL, '/theme/unify/assets/img-temp/100x100/img4.jpg') ?>"
                         alt="<?= $latest_post->getTitle() ?>">
                </a>

                <div class="media-body">
                    <h3 class="h6">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                           href="/blog/<?= $latest_post->getYear() ?>/<?= $latest_post->getSlug() ?>">
                            <?= $latest_post->getTitle() ?>
                        </a>
                    </h3>

                    <ul class="u-list-inline g-font-size-12 g-color-gray-dark-v4">
                        <li class="list-inline-item">
                            <?= $latest_post->getDateFormatted() ?>
                        </li>

                        <?php /*
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">
                            <a class="g-color-gray-dark-v4 g-text-underline--none--hover" href="#">
                                <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                                18
                            </a>
                        </li>
                        */ ?>
                    </ul>
                </div>
            </article>
            <!-- End Article -->
        <?php } ?>
    </div>
    <!-- End Recent Posts -->

    <hr />

    <!-- Subscribe -->
    <div class="u-shadow-v25 u-bg-overlay g-bg-img-hero g-bg-white-gradient-opacity-v2--after g-py-40 g-px-20 g-mb-50"
         style="background-image: url(/theme/unify/assets/img-temp/500x600/img1.jpg);">
        <div class="u-bg-overlay__inner text-center">
            <div class="g-mb-40">
                <h2 class="g-color-white">Vancouver, BC</h2>
                <p class="g-color-white-opacity-0_8">Unit 25 Suite 3, 925 Prospect PI,<br>Beach Resort,
                    23001</p>
            </div>

            <div class="g-mb-30">
                <h3 class="d-inline-block g-bg-primary-opacity-0_6 g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-py-5 g-px-10">
                    Phone number</h3>
                <span class="d-block g-color-white g-font-size-18">+01 (0) 333 444 55</span>
            </div>

            <div class="input-group rounded">
                <input class="form-control g-brd-none g-px-13" type="email" placeholder="Your Email">
                <div class="input-group-btn">
                    <button class="btn u-btn-primary text-uppercase g-px-20 g-py-14" type="submit">
                        <i class="icon-envelope g-pos-rel g-top-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe -->

<?php /*
    <!-- Popular Videos -->
    <div class="g-mb-50">
        <article class="g-pos-rel">
            <figure class="u-shadow-v25 g-bg-img-hero g-min-height-400"
                    style="background-image: url(/theme/unify/assets/img-temp/500x650/img2.jpg);">
            </figure>

                  <span class="text-center g-pos-abs g-top-20 g-left-0">
                    <a class="btn u-btn-red text-uppercase rounded-0" href="#">Discover</a>
                    <small class="g-bg-black g-color-white g-pa-5 d-block">July 09, 2017</small>
                  </span>

                  <span class="u-icon-v3 g-font-size-18 g-bg-white g-color-black g-bg-gray-dark-v2--hover g-color-white--hover g-rounded-50 g-cursor-pointer g-absolute-centered">
                    <i class="icon-control-play g-left-2"></i>
                  </span>

            <header class="g-pos-abs g-bottom-20 g-left-0">
                <h3 class="h5 g-bg-red-opacity-0_5 g-pa-5-10--sm">
                    <a class="g-color-white g-color-white--hover" href="#">Traveling</a>
                </h3>
            </header>
        </article>
    </div>
    <!-- End Popular Videos -->
    */ ?>

<!-- Social Links -->
    <div class="g-mb-50">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Social
                Links</h2>
        </div>

        <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center justify-content-between g-mb-20">
                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-facebook g-bg-facebook--hover g-color-white rounded-circle g-mr-10"
                            href="#">
                        <i class="fa fa-facebook"></i>
                      </span>
                    Like
                </a>
                <span class="js-counter d-block g-color-gray-dark-v4">103832</span>
            </li>
            <li class="d-flex align-items-center justify-content-between g-mb-20">
                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-lightred g-bg-lightred--hover g-color-white rounded-circle g-mr-10"
                            href="#">
                        <i class="fa fa-google-plus"></i>
                      </span>
                    Add to Circle
                </a>
                <span class="js-counter d-block g-color-gray-dark-v4">47192</span>
            </li>
            <li class="d-flex align-items-center justify-content-between g-mb-20">
                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-instagram g-bg-instagram--hover g-color-white rounded-circle g-mr-10"
                            href="#">
                        <i class="fa fa-instagram"></i>
                      </span>
                    Follow Us
                </a>
                <span class="js-counter d-block g-color-gray-dark-v4">38291</span>
            </li>
            <li class="d-flex align-items-center justify-content-between g-mb-20">
                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-teal g-bg-teal--hover g-color-white rounded-circle g-mr-10"
                            href="#">
                        <i class="fa fa-medium"></i>
                      </span>
                    Writers
                </a>
                <span class="js-counter d-block g-color-gray-dark-v4">23871</span>
            </li>
            <li class="d-flex align-items-center justify-content-between">
                <a class="d-flex align-items-center u-link-v5 g-color-gray-dark-v1" href="#">
                      <span class="u-icon-v3 u-icon-size--xs u-shadow-v25 g-font-size-12 g-bg-twitter g-bg-twitter--hover g-color-white rounded-circle g-mr-10"
                            href="#">
                        <i class="fa fa-twitter"></i>
                      </span>
                    Follow Us
                </a>
                <span class="js-counter d-block g-color-gray-dark-v4">391743</span>
            </li>
        </ul>
    </div>
    <!-- End Social Links -->

    <!-- Popular Tags -->
    <div class="g-mb-20">
        <div class="u-heading-v3-1 g-mb-30">
            <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Popular
                Tags</h2>
        </div>

        <ul class="u-list-inline g-font-size-11 text-uppercase mb-0">
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Web Design</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Bootstrap</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">SASS</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Marketing</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Unify</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Htmlstream</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Pixeel</a>
            </li>
            <li class="list-inline-item g-mb-10">
                <a class="u-tags-v1 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                   href="#">Free Themes</a>
            </li>
        </ul>
    </div>
    <!-- End Popular Tags -->

    <div id="stickyblock-start" class="js-sticky-block g-sticky-block--lg g-pt-20"
         data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">

        <?php /*
        <!-- News Feed -->
        <div class="g-mb-40">
            <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
                    News Feed</h2>
            </div>

            <!-- Article -->
            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#">Jonathan Owen</a>
                    </span>
                <h3 class="h6">
                    <a class="g-color-gray-dark-v1" href="#">Architects plan to stop skyscrapers from
                        blocking out sunlight</a>
                </h3>
            </article>
            <!-- End Article -->

            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

            <!-- Article -->
            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#">James Doe</a>
                    </span>
                <h3 class="h6">
                    <a class="g-color-gray-dark-v1" href="#">Cooltex is one of the best technology
                        company of our age and future</a>
                </h3>
            </article>
            <!-- End Article -->

            <hr class="g-brd-gray-light-v4 g-mt-15 g-mb-10">

            <!-- Article -->
            <article>
                    <span class="g-font-size-12">
                      <a class="u-link-v5 g-color-gray-dark-v4" href="#">Albert Coolmen</a>
                    </span>
                <h3 class="h6">
                    <a class="g-color-gray-dark-v1" href="#">Some text goes here with plain English and
                        much more other texts go there..</a>
                </h3>
            </article>
            <!-- End Article -->
        </div>
        <!-- End News Feed -->
        */ ?>

        <?php /*
        <!-- Top Authors -->
        <div class="g-mb-40">
            <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Top
                    Authors</h2>
            </div>

            <article class="media g-mb-35">
                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3"
                     src="/theme/unify/assets/img-temp/100x100/img1.jpg" alt="Image Description">
                <div class="media-body">
                    <h4 class="g-font-size-16">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Htmlstream</a>
                        <small class="g-color-gray-dark-v4">@Htmlstream</small>
                    </h4>
                    <p>Sed ultrices velit vitae tortor posuere and dial in the details.</p>
                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase"
                       href="#">Follow</a>
                </div>
            </article>

            <article class="media g-mb-35">
                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3"
                     src="/theme/unify/assets/img-temp/100x100/img3.jpg" alt="Image Description">
                <div class="media-body">
                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover"
                           href="#">Pixeel</a>
                        <small class="g-color-gray-dark-v4">@Pixeeluk</small>
                    </h4>
                    <p>This is where we sit down, grab a cup of coffee and dial in the details.</p>
                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase"
                       href="#">Follow</a>
                </div>
            </article>

            <article class="media">
                <img class="d-flex u-shadow-v25 g-width-40 g-height-40 rounded-circle mr-3"
                     src="/theme/unify/assets/img-temp/100x100/img2.jpg" alt="Image Description">
                <div class="media-body">
                    <h4 class="g-font-size-16 g-color-gray-dark-v1">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">WrapBootstrap</a>
                        <small class="g-color-gray-dark-v4">@WrapBootstrap</small>
                    </h4>
                    <p>Ulvinar leo ultricies ut, grab a cup of coffee and dial in the details.</p>
                    <a class="btn u-btn-outline-primary g-font-size-11 text-uppercase"
                       href="#">Follow</a>
                </div>
            </article>
        </div>
        <!-- End Top Authors -->
        */ ?>

    </div>
</div>
<!-- End Sidebar -->