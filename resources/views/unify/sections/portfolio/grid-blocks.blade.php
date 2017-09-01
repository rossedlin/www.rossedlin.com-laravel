<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 01/09/2017
 * Time: 16:28
 */
?>
<!-- Blog Grid Blocks -->
<div class="g-bg-gray-light-v5">
    <div class="container g-py-100">
        <div class="masonry-grid row g-mb-70">

            <div class="masonry-grid-item col-sm-12 col-lg-8 g-mb-30">
                <!-- Blog Grid Modern Blocks -->
                <article class="row align-items-stretch no-gutters u-shadow-v21 u-shadow-v21--hover g-transition-0_3">
                    <div class="col-md-6 g-bg-white g-rounded-left-5">
                        <div class="g-pa-60">
                            <ul class="list-inline g-color-gray-dark-v4 g-font-weight-600 g-font-size-12">
                                <li class="list-inline-item mr-0">Alex Teseira</li>
                                <li class="list-inline-item mx-2">&#183;</li>
                                <li class="list-inline-item">5 June 2017</li>
                            </ul>

                            <h2 class="h5 g-color-black g-font-weight-600 mb-4">
                                <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#">Announcing
                                    a free plan for small teams</a>
                            </h2>
                            <p class="g-color-gray-dark-v4 g-line-height-1_8 mb-4">At Wake, our mission has always been
                                focused on bringing openness and transparency to the design process.</p>

                            <ul class="list-inline g-font-size-12 mb-0">
                                <li class="list-inline-item g-mb-10">
                                    <a class="u-tags-v1 g-color-lightred g-bg-lightred-opacity-0_1 g-bg-lightred--hover g-color-white--hover g-rounded-50 g-py-4 g-px-15"
                                       href="#">Start-Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 g-bg-size-cover g-bg-pos-center g-min-height-300 g-rounded-right-5"
                         data-bg-img-src="/theme/unify/assets/img-temp/400x500/img1.jpg"></div>
                </article>
                <!-- End Blog Grid Modern Blocks -->
            </div>

            @include('unify.snippets.portfolio.website')
        </div>

    @include('unify.snippets.portfolio.pagination')
    </div>
</div>
<!-- End Blog Grid Blocks -->