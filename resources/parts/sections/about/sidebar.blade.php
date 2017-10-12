<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/10/2017
 * Time: 12:50
 */
?>
<div>
    <!-- User Image -->
    <div class="u-block-hover g-pos-rel">
        <figure>
            <img class="img-fluid w-100 u-block-hover__main--zoom-v1"
                 src="/img/about/ross-edlin-headshot-400-450.jpg" alt="<?= \App\Library\About::getFullName() ?>">
        </figure>

        <!-- Figure Caption -->
        <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
            <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                <!-- Figure Social Icons -->
                <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                    <li class="list-inline-item align-middle g-mx-7">
                        <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                            <i class="icon-note u-line-icon-pro"></i>
                        </a>
                    </li>
                    <li class="list-inline-item align-middle g-mx-7">
                        <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                            <i class="icon-notebook u-line-icon-pro"></i>
                        </a>
                    </li>
                    <li class="list-inline-item align-middle g-mx-7">
                        <a class="u-icon-v1 u-icon-size--md g-color-white" href="#">
                            <i class="icon-settings u-line-icon-pro"></i>
                        </a>
                    </li>
                </ul>
                <!-- End Figure Social Icons -->
            </div>
        </figcaption>
        <!-- End Figure Caption -->

        <!-- User Info -->
        <span class="g-pos-abs g-top-20 g-left-0 hidden-md-down">
            <span class="btn-sm u-btn-primary g-color-white rounded-0"><?= \App\Library\About::getFullName() ?></span>
            <small class="d-block g-bg-black g-color-white g-pa-5"><?= \App\Library\About::getTitle() ?></small>
        </span>
        <!-- End User Info -->
    </div>
    <!-- User Image -->

    <!-- Sidebar Navigation -->
    <div class="list-group list-group-border-0 g-mb-40">

        <!-- Profile -->
        <a href="/about#content"
           class="list-group-item list-group-item-action justify-content-between">
            <span><i class="icon-cursor g-pos-rel g-top-1 g-mr-8"></i> About</span>
        </a>
        <!-- End Profile -->

        <!-- Social Media -->
        <a href="/about#social"
           class="list-group-item list-group-item-action justify-content-between">
            <span><i class="icon-notebook g-pos-rel g-top-1 g-mr-8"></i> Social Media</span>
        </a>
        <!-- End Social Media -->

        <!-- My Portfolio -->
        <a href="/portfolio"
           class="list-group-item list-group-item-action justify-content-between">
            <span><i class="icon-layers g-pos-rel g-top-1 g-mr-8"></i> My Portfolio</span>
            <span class="u-label g-font-size-11 g-bg-primary g-rounded-20 g-px-10"><?= \App\Library\Portfolio::getItemCount() ?></span>
        </a>
        <!-- End My Projects -->

        <!-- History -->
        <a href="/about#history" class="list-group-item justify-content-between active">
            <span><i class="icon-fire g-pos-rel g-top-1 g-mr-8"></i> History</span>
        </a>
        <!-- End History -->

    </div>
    <!-- End Sidebar Navigation -->

    <!-- Top Skills -->
    <div class="card border-0 rounded-0 g-mb-50">
        <!-- Panel Header -->
        <div class="card-header d-flex align-items-center justify-content-between g-bg-gray-light-v5 border-0 g-mb-15">
            <h3 class="h4 mb-0">
                <i class="icon-layers g-pos-rel g-top-1 g-mr-5"></i> Top Skills
            </h3>
        </div>
        <!-- End Panel Header -->

        <!-- Panel Body -->
        <div class="card-block u-info-v1-1 g-pa-0">

            <!-- Web Design -->
            <div class="g-mb-20">
                <h6 class="g-mb-10">Web Development <span class="float-right g-ml-10">98%</span></h6>
                <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-cyan u-progress-bar--xs"
                         role="progressbar" style="width: 98%;" aria-valuenow="98" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
            </div>
            <!-- End Web Design -->

            <!-- Unify Project -->
            <div class="g-mb-20">
                <h6 class="g-mb-10">Lamp Stack <span class="float-right g-ml-10">92%</span></h6>
                <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-primary u-progress-bar--xs"
                         role="progressbar" style="width: 92%;" aria-valuenow="93" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
            </div>
            <!-- End Unify Project -->

            <!-- DevOps -->
            <div class="g-mb-20">
                <h6 class="g-mb-10">DevOps <span class="float-right g-ml-10">62%</span></h6>
                <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-pink u-progress-bar--xs"
                         role="progressbar" style="width: 62%;" aria-valuenow="62" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
            </div>
            <!-- End DevOps -->

            <!-- MVC Frameworks -->
            <div class="g-mb-20">
                <h6 class="g-mb-10">MVC Frameworks <span class="float-right g-ml-10">74%</span></h6>
                <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-black u-progress-bar--xs"
                         role="progressbar" style="width: 74%;" aria-valuenow="74" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
            </div>
            <!-- End MVC Frameworks -->

            <!-- DevOps -->
            <div class="g-mb-20">
                <h6 class="g-mb-10">DevOps <span class="float-right g-ml-10">60%</span></h6>
                <div class="js-hr-progress-bar progress g-bg-black-opacity-0_1 rounded-0 g-mb-5">
                    <div class="js-hr-progress-bar-indicator progress-bar g-bg-darkpurple u-progress-bar--xs"
                         role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                         aria-valuemax="100"></div>
                </div>
            </div>
            <!-- End DevOps -->
        </div>
        <!-- End Panel Body -->
    </div>
    <!-- End Top Skills -->
</div>