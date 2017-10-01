<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 17/09/2017
 * Time: 17:46
 *
 * @var Cryslo\Object\WordPress\Post $post
 */
?>

<!-- Articles Content -->
<div class="col-lg-9 g-mb-50 g-mb-0--lg">
    <article class="g-mb-60">
        <header class="g-mb-30">
            <h2 class="h1 g-mb-15"><?= $post->getTitle() ?></h2>

            <ul class="list-inline d-sm-flex g-color-gray-dark-v4 mb-0">
                <li class="list-inline-item">
                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#"><?= $post->getAuthor()->getDisplayName()?></a>
                </li>
                <li class="list-inline-item g-mx-10">/</li>
                <li class="list-inline-item">
                    <?= $post->getDateFormatted() ?>
                </li>
                <li class="list-inline-item g-mx-10">/</li>
                <li class="list-inline-item g-mr-10">
                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                        <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-1"></i>
                        24
                    </a>
                </li>
                <li class="list-inline-item ml-auto">
                    <i class="icon-eye u-line-icon-pro align-middle mr-1"></i> Views 3821
                </li>
            </ul>

            <hr class="g-brd-gray-light-v4 g-my-15">

            <ul class="list-inline text-uppercase mb-0">
                <li class="list-inline-item g-mr-10">
                    <strong class="align-middle g-font-size-24">423</strong>
                </li>
                <li class="list-inline-item g-mr-10">
                    <span class="g-color-gray-dark-v5">|</span>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                        <i class="fa fa-facebook g-mr-5--sm"></i> <span
                                class="g-hidden-xs-down">Share on Facebook</span>
                    </a>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                        <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>
        </header>

        <div class="g-font-size-16 g-line-height-1_8 g-mb-30">
            <figure class="u-shadow-v25 g-mb-30">
                <img class="img-fluid w-100" src="<?= $post->getFeaturedMedia() ?>" alt="Image Description">
            </figure>

            <?= $post->getContent() ?>
        </div>

        <!-- Sources & Tags -->
        <div class="g-mb-30">
            <h6 class="g-color-gray-dark-v1 g-mb-15">
                <strong class="g-mr-5">Source:</strong> <a
                        class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">The Next
                    Web (TNW)</a>
            </h6>
            <h6 class="g-color-gray-dark-v1">
                <strong class="g-mr-5">Tags:</strong>
                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5"
                   href="#">Business</a>
                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5"
                   href="#">SaaS</a>
                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5"
                   href="#">Web Design</a>
                <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15 g-mr-5"
                   href="#">IT</a>
            </h6>
        </div>
        <!-- End Sources & Tags -->

        <hr class="g-brd-gray-light-v4">

        <!-- Social Shares -->
        <div class="g-mb-30">
            <ul class="list-inline text-uppercase mb-0">
                <li class="list-inline-item g-mr-10">
                    <strong class="align-middle g-font-size-24">423</strong>
                </li>
                <li class="list-inline-item g-mr-10">
                    <span class="g-color-gray-dark-v5">|</span>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="btn u-btn-facebook g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                        <i class="fa fa-facebook g-mr-5--sm"></i> <span
                                class="g-hidden-xs-down">Share on Facebook</span>
                    </a>
                </li>
                <li class="list-inline-item g-mr-10">
                    <a class="btn u-btn-twitter g-font-size-12 rounded g-px-20--sm g-py-10" href="#">
                        <i class="fa fa-twitter g-mr-5--sm"></i> <span class="g-hidden-xs-down">Tweet on Twitter</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn u-btn-lightred g-font-size-12 rounded g-py-10" href="#">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Social Shares -->

        <hr class="g-brd-gray-light-v4 g-mb-40">

        <!-- Related Articles -->
        <div class="g-mb-40">
            <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
                    Related Articles</h2>
            </div>

            <div class="row">
                <!-- Article Video -->
                <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            <img class="img-fluid w-100" src="/theme/unify/assets/img-temp/400x270/img2.jpg"
                                 alt="Image Description">

                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                <a class="btn btn-xs u-btn-blue text-uppercase rounded-0"
                                   href="#">Spa</a>
                            </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Clark
                                Valberg is a new CEO of InVision..</a>
                        </h3>
                    </article>
                </div>
                <!-- End Article Video -->

                <!-- Article Video -->
                <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            <img class="img-fluid w-100" src="/theme/unify/assets/img-temp/400x270/img3.jpg"
                                 alt="Image Description">

                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                <a class="btn btn-xs u-btn-pink text-uppercase rounded-0" href="#">Internet</a>
                            </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">How
                                to run a ticket: Best 10 point..</a>
                        </h3>
                    </article>
                </div>
                <!-- End Article Video -->

                <!-- Article Video -->
                <div class="col-lg-4 col-sm-6 g-mb-30">
                    <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            <img class="img-fluid w-100" src="/theme/unify/assets/img-temp/400x270/img8.jpg"
                                 alt="Image Description">

                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                <a class="btn btn-xs u-btn-teal text-uppercase rounded-0" href="#">Support</a>
                            </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Skyscrapers
                                from blocking sunlight..</a>
                        </h3>
                    </article>
                </div>
                <!-- End Article Video -->

                <!-- Article Video -->
                <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                    <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            <img class="img-fluid w-100" src="/theme/unify/assets/img-temp/400x270/img15.jpg"
                                 alt="Image Description">

                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                <a class="btn btn-xs u-btn-darkred text-uppercase rounded-0" href="#">Coworking</a>
                            </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Architects
                                plan to from blocking out sunlight..</a>
                        </h3>
                    </article>
                </div>
                <!-- End Article Video -->

                <!-- Article Video -->
                <div class="col-lg-4 col-sm-6 g-mb-30 g-mb-0--sm">
                    <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            <img class="img-fluid w-100" src="/theme/unify/assets/img-temp/400x270/img12.jpg"
                                 alt="Image Description">

                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                <a class="btn btn-xs u-btn-indigo text-uppercase rounded-0" href="#">Finance</a>
                            </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Cooltex
                                is one of the best technology company..</a>
                        </h3>
                    </article>
                </div>
                <!-- End Article Video -->

                <!-- Article Video -->
                <div class="col-lg-4 col-sm-6">
                    <article>
                        <figure class="u-shadow-v25 g-pos-rel g-mb-20">
                            <img class="img-fluid w-100" src="/theme/unify/assets/img-temp/400x270/img13.jpg"
                                 alt="Image Description">

                            <figcaption class="g-pos-abs g-top-10 g-left-10">
                                <a class="btn btn-xs u-btn-brown text-uppercase rounded-0" href="#">Meeting</a>
                            </figcaption>
                        </figure>

                        <h3 class="g-font-size-16 g-mb-10">
                            <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Cameron's
                                silence on defence is shameful..</a>
                        </h3>
                    </article>
                </div>
                <!-- End Article Video -->
            </div>
        </div>

        <!-- Author Block -->
        <div class="g-mb-60">
            <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">
                    About The Author</h2>
            </div>

            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                <img class="d-flex u-shadow-v25 g-width-80 g-height-80 rounded-circle g-mr-15"
                     src="/theme/unify/assets/img-temp/100x100/img8.jpg" alt="Image Description">

                <div class="media-body">
                    <h4 class="g-color-gray-dark-v1 g-mb-15">
                        <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="#">Marina
                            Olsson</a>
                    </h4>

                    <div class="g-mb-15">
                        <p>About my site amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at.</p>
                    </div>

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                               href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                               href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-10">
                            <a class="u-icon-v3 u-icon-size--xs g-font-size-12 g-bg-gray-light-v5 g-bg-primary--hover g-color-gray-dark-v5 g-color-white--hover rounded-circle"
                               href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Author Block -->

        <!-- Comments -->
        <div class="g-mb-60">
            <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">24
                    Comments</h2>
            </div>

            <!-- Comment 1 -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15"
                     src="/theme/unify/assets/img-temp/100x100/img9.jpg" alt="Image Description">

                <div class="media-body">
                    <div class="g-mb-15">
                        <h5 class="d-flex justify-content-between align-items-center g-font-size-16 g-color-gray-dark-v1 mb-0">
                            <span class="d-block g-mr-10">James Coolman</span>
                            <a class="u-tags-v1 g-font-size-12 g-brd-around g-brd-gray-light-v4 g-bg-primary--hover g-brd-primary--hover g-color-black-opacity-0_8 g-color-white--hover rounded g-py-6 g-px-15"
                               href="#">Author</a>
                        </h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">2 days ago</span>
                    </div>

                    <div class="g-mb-15">
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                            congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis.</p>
                    </div>

                    <ul class="list-inline d-sm-flex my-0">
                        <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 214
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 35
                            </a>
                        </li>
                        <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Comment 1 -->

            <!-- Comment 2 -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-ml-40 g-mb-20">
                <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15"
                     src="/theme/unify/assets/img-temp/100x100/img10.jpg" alt="Image Description">

                <div class="media-body">
                    <div class="g-mb-15">
                        <h5 class="g-font-size-16 g-color-gray-dark-v1 mb-0">Alberta Watson</h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">3 days ago</span>
                    </div>

                    <div class="g-mb-15">
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                            congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis.</p>
                    </div>

                    <ul class="list-inline d-sm-flex my-0">
                        <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 637
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 12
                            </a>
                        </li>
                        <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Comment 2 -->

            <!-- Comment 3 -->
            <div class="media g-brd-around g-brd-gray-light-v4 rounded g-pa-30 g-mb-20">
                <img class="d-flex u-shadow-v25 g-width-50 g-height-50 rounded-circle g-mr-15"
                     src="/theme/unify/assets/img-temp/100x100/img11.jpg" alt="Image Description">

                <div class="media-body">
                    <div class="g-mb-15">
                        <h5 class="g-font-size-16 g-color-gray-dark-v1 mb-0">David Lee</h5>
                        <span class="g-color-gray-dark-v4 g-font-size-12">4 days ago</span>
                    </div>

                    <div class="g-mb-15">
                        <p>Sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                            congue felis in faucibus ras purus odio, vestibulum in vulputate at, tempus
                            viverra turpis.</p>
                    </div>

                    <ul class="list-inline d-sm-flex my-0">
                        <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-like g-pos-rel g-top-1 g-mr-3"></i> 192
                            </a>
                        </li>
                        <li class="list-inline-item g-mr-20">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-dislike g-pos-rel g-top-1 g-mr-3"></i> 87
                            </a>
                        </li>
                        <li class="list-inline-item ml-auto">
                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
                                <i class="icon-note g-pos-rel g-top-1 g-mr-3"></i> Reply
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Comment 3 -->

            <div class="text-center g-mt-30">
                <a class="btn u-btn-outline-primary g-font-size-12 text-uppercase g-px-25 g-py-13"
                   href="#">
                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i>
                    Load More Comments
                </a>
            </div>
        </div>
        <!-- Comments -->

        <!-- Add Comment -->
        <div class="g-mb-60">
            <div class="u-heading-v3-1 g-mb-30">
                <h2 class="h5 u-heading-v3__title g-color-gray-dark-v1 text-uppercase g-brd-primary">Add
                    a Comment</h2>
            </div>

            <form>
                <div class="row">
                    <div class="col-md-6 form-group g-mb-30">
                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15"
                               type="text" placeholder="Your Name">
                    </div>

                    <div class="col-md-6 form-group g-mb-30">
                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-pa-15"
                               type="email" placeholder="Email">
                    </div>
                </div>

                <div class="g-mb-30">
                                    <textarea
                                            class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-pa-15"
                                            rows="12" placeholder="Your Message"></textarea>
                </div>

                <a class="btn u-btn-primary g-font-size-12 text-uppercase g-px-25 g-py-13" href="#">
                    <i class="icon-finance-206 u-line-icon-pro align-middle g-pos-rel g-top-1 mr-2"></i>
                    Add a Comment
                </a>
            </form>
        </div>
        <!-- End Add Comment -->
    </article>

    <div id="stickyblock-end"></div>
</div>
<!-- End Articles Content -->