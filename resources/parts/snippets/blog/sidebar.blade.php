<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 21/09/2017
 * Time: 16:27
 *
 * @var Cryslo\Object\WordPress\Tag[] $tags
 */
?>
<div class="g-pl-20--lg">

    <?php /*
    <!-- Links -->
    <div class="g-mb-50">
        <h3 class="h5 g-color-black g-font-weight-600 mb-4">Links</h3>
        <ul class="list-unstyled g-font-size-13 mb-0">
            <li><a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#"><i
                            class="mr-2 fa fa-angle-right"></i> People</a>
            </li>
            <li><a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#"><i
                            class="mr-2 fa fa-angle-right"></i> News Publications</a>
            </li>
            <li><a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#"><i
                            class="mr-2 fa fa-angle-right"></i> Marketing &amp; IT</a>
            </li>
            <li><a class="d-block u-link-v5 g-color-gray-dark-v4 rounded g-px-20 g-py-8" href="#"><i
                            class="mr-2 fa fa-angle-right"></i> Business Strategy</a>
            </li>
            <li>
                <a class="d-block active u-link-v5 g-color-black g-bg-gray-light-v5 g-font-weight-600 g-rounded-50 g-px-20 g-py-8"
                   href="#"><i class="mr-2 fa fa-angle-right"></i> Untold Stories</a>
            </li>
        </ul>
    </div>
    <!-- End Links -->

    <hr class="g-brd-gray-light-v4 g-mt-50 mb-0">
    */ ?>

    <div id="stickyblock-start">
        <div class="js-sticky-block g-sticky-block--lg g-pt-50" data-responsive="true"
             data-start-point="#stickyblock-start" data-end-point="#stickyblock-end">

        <?php /*
            <!-- Publications -->
            <div class="g-mb-50">
                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Publications</h3>
                <ul class="list-unstyled g-font-size-13 mb-0">
                    <li>
                        <article class="media g-mb-35">
                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                 src="/theme/unify/assets/img-temp/100x100/img1.jpg" alt="Image Description">
                            <div class="media-body">
                                <h4 class="h6 g-color-black g-font-weight-600">Htmlstream</h4>
                                <p class="g-color-gray-dark-v4">This is where we sit down, grab a cup of coffee and
                                    dial in the details.</p>
                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25" href="#">Follow</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="media g-mb-35">
                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                 src="/theme/unify/assets/img-temp/100x100/img3.jpg" alt="Image Description">
                            <div class="media-body">
                                <h4 class="h6 g-color-black g-font-weight-600">Pixeel</h4>
                                <p class="g-color-gray-dark-v4">This is where we sit down, grab a cup of coffee and
                                    dial in the details.</p>
                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25" href="#">Follow</a>
                            </div>
                        </article>
                    </li>
                    <li>
                        <article class="media">
                            <img class="d-flex g-width-40 g-height-40 rounded-circle mr-3"
                                 src="/theme/unify/assets/img-temp/100x100/img2.jpg" alt="Image Description">
                            <div class="media-body">
                                <h4 class="h6 g-color-black g-font-weight-600">WrapBootstrap</h4>
                                <p class="g-color-gray-dark-v4">This is where we sit down, grab a cup of coffee and
                                    dial in the details.</p>
                                <a class="btn u-btn-outline-primary g-font-size-11 g-rounded-25" href="#">Follow</a>
                            </div>
                        </article>
                    </li>
                </ul>
            </div>
            <!-- End Publications -->

            <hr class="g-brd-gray-light-v4 g-my-50">
            */ ?>

        <!-- Tags -->
            <div class="g-mb-40">
                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Tags</h3>
                <ul class="u-list-inline mb-0">

                    <?php foreach ($tags as $tag)
                    { ?>
                    <li class="list-inline-item g-mb-10">
                        <a class="<?= $tag->getCssClass() ?> u-tags-v1 g-font-size-12 g-rounded-50 g-py-4 g-px-15"
                           href="#"><?= $tag->getName() ?></a>
                    </li>
                    <?php } ?>

                </ul>
            </div>
            <!-- End Tags -->

            <?php /*
            <hr class="g-brd-gray-light-v4 g-my-50">

            <!-- Newsletter -->
            <div class="g-mb-50">
                <h3 class="h5 g-color-black g-font-weight-600 mb-4">Newsletter</h3>
                <div class="input-group">
                    <span class="input-group-btn">
                        <button class="btn u-btn-primary g-rounded-left-50 g-py-13 g-px-20">
                          <i class="icon-communication-062 u-line-icon-pro g-pos-rel g-top-1"></i>
                        </button>
                      </span>
                    <input class="form-control g-brd-primary g-placeholder-gray-dark-v5 border-left-0 g-rounded-right-50 g-px-15"
                           type="email" placeholder="Enter your email ...">
                </div>
            </div>
            <!-- End Newsletter -->
            */ ?>

        </div>
    </div>
</div>