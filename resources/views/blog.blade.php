<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 16/09/2017
 * Time: 22:27
 */
?>
@extends('unify-consulting.layout')

@section('content')

    <!-- Breadcrumbs -->
    <section class="g-bg-gray-light-v5 g-py-80 g-pt-140">
        <div class="container text-center">
            <h2 class="h2 g-color-black g-font-weight-600">Blog grid background overlay 3</h2>

            <ul class="u-list-inline">
                <li class="list-inline-item g-mr-5">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Home</a>
                    <i class="g-color-gray-light-v2 g-ml-5">/</i>
                </li>
                <li class="list-inline-item g-mr-5">
                    <a class="u-link-v5 g-color-gray-dark-v5 g-color-primary--hover" href="#">Blog</a>
                    <i class="g-color-gray-light-v2 g-ml-5">/</i>
                </li>
                <li class="list-inline-item g-color-primary">
                    <span>Blog grid background overlay 3</span>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- Blog -->
    <div class="container g-py-100">
        <div class="masonry-grid row g-mb-70">

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Background Overlay Blocks -->
                <article class="u-block-hover">
                    <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="u-block-hover__main--mover-down" src="/theme/unify/assets/img-temp/500x650/img1.jpg"
                             alt="Image Description">
                    </div>
                    <div class="g-pos-abs g-top-0 g-right-0 g-z-index-1 g-pa-35">
                        <span class="d-block g-color-white g-font-weight-600 g-font-size-12">June 1, 2017</span>
                    </div>
                    <div class="u-block-hover__additional--partially-slide-up g-z-index-1">
                        <div class="u-block-hover__visible g-pa-25">
                            <span class="d-block g-color-white-opacity-0_7 g-font-weight-600 g-font-size-12 mb-2">web design</span>
                            <h2 class="h3 g-color-white g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">Discover
                                    the Htmlstream Studio</a>
                            </h2>
                            <p class="g-color-white-opacity-0_7 mb-0">At Wake, our mission has always been focused
                                on...</p>
                        </div>

                        <div class="g-pl-25">
                            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                               href="#">Read more</a>
                        </div>
                    </div>
                </article>
                <!-- End Blog Background Overlay Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Background Overlay Blocks -->
                <article class="u-block-hover">
                    <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="d-flex align-items-end u-block-hover__main--mover-down"
                             src="/theme/unify/assets/img-temp/500x650/img9.jpg" alt="Image Description">
                    </div>
                    <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                        <div class="u-block-hover__visible g-pa-25">
                            <span class="d-block g-color-white-opacity-0_7 g-font-weight-600 g-font-size-12 mb-2">photography</span>
                            <h2 class="h3 g-color-white g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">Stunning
                                    Man's Capture</a>
                            </h2>
                            <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                                By,
                                <a class="g-color-white-opacity-0_7 text-uppercase" href="#">Dan Shaw</a>
                            </h4>
                            <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                            <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
                        </div>

                        <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                           href="#">Read more</a>
                    </div>
                </article>
                <!-- End Blog Background Overlay Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Background Overlay Blocks -->
                <article class="u-block-hover">
                    <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="d-flex align-items-end u-block-hover__main--mover-down"
                             src="/theme/unify/assets/img-temp/500x650/img2.jpg" alt="Image Description">
                    </div>
                    <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                        <div class="u-block-hover__visible g-pa-25">
                            <span class="d-block g-color-white-opacity-0_7 g-font-weight-600 g-font-size-12 mb-2">photography</span>
                            <h2 class="h3 g-color-white g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">Time
                                    to Travel</a>
                            </h2>
                            <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                                By,
                                <a class="g-color-white-opacity-0_7 text-uppercase" href="#">Dan Shaw</a>
                            </h4>
                            <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                            <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
                        </div>

                        <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                           href="#">Read more</a>
                    </div>
                </article>
                <!-- End Blog Background Overlay Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Background Overlay Blocks -->
                <article class="u-block-hover">
                    <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="d-flex align-items-end u-block-hover__main--mover-down"
                             src="/theme/unify/assets/img-temp/500x650/img13.jpg" alt="Image Description">
                    </div>
                    <div class="u-block-hover__additional--partially-slide-up text-center g-z-index-1 mt-auto">
                        <div class="u-block-hover__visible g-pa-25">
                            <span class="d-block g-color-white-opacity-0_7 g-font-weight-600 g-font-size-12 mb-2">photography</span>
                            <h2 class="h3 g-color-white g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">The
                                    Strong Woman</a>
                            </h2>
                            <h4 class="d-inline-block g-color-white-opacity-0_7 g-font-size-11 mb-0">
                                By,
                                <a class="g-color-white-opacity-0_7 text-uppercase" href="#">Dan Shaw</a>
                            </h4>
                            <span class="g-color-white-opacity-0_7 g-pos-rel g-top-2 mx-2">&#183;</span>
                            <span class="g-color-white-opacity-0_7 g-font-size-10 text-uppercase">May 31, 2017</span>
                        </div>

                        <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                           href="#">Read more</a>
                    </div>
                </article>
                <!-- End Blog Background Overlay Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Background Overlay Blocks -->
                <article class="u-block-hover">
                    <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="u-block-hover__main--mover-down"
                             src="/theme/unify/assets/img-temp/500x650/img12.jpg" alt="Image Description">
                    </div>
                    <div class="g-pos-abs g-top-0 g-right-0 g-z-index-1 g-pa-35">
                        <span class="d-block g-color-white g-font-weight-600 g-font-size-12">June 1, 2017</span>
                    </div>
                    <div class="u-block-hover__additional--partially-slide-up g-z-index-1">
                        <div class="u-block-hover__visible g-pa-25">
                            <span class="d-block g-color-white-opacity-0_7 g-font-weight-600 g-font-size-12 mb-2">web design</span>
                            <h2 class="h3 g-color-white g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">Talking
                                    Why Him?</a>
                            </h2>
                            <p class="g-color-white-opacity-0_7 mb-0">At Wake, our mission has always been focused
                                on...</p>
                        </div>

                        <div class="g-pl-25">
                            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                               href="#">Read more</a>
                        </div>
                    </div>
                </article>
                <!-- End Blog Background Overlay Blocks -->
            </div>

            <div class="masonry-grid-item col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Background Overlay Blocks -->
                <article class="u-block-hover">
                    <div class="g-bg-cover g-bg-white-gradient-opacity-v1--after">
                        <img class="u-block-hover__main--mover-down"
                             src="/theme/unify/assets/img-temp/500x650/img10.jpg" alt="Image Description">
                    </div>
                    <div class="g-pos-abs g-top-0 g-right-0 g-z-index-1 g-pa-35">
                        <span class="d-block g-color-white g-font-weight-600 g-font-size-12">June 1, 2017</span>
                    </div>
                    <div class="u-block-hover__additional--partially-slide-up g-z-index-1">
                        <div class="u-block-hover__visible g-pa-25">
                            <span class="d-block g-color-white-opacity-0_7 g-font-weight-600 g-font-size-12 mb-2">web design</span>
                            <h2 class="h3 g-color-white g-font-weight-600 mb-3">
                                <a class="u-link-v5 g-color-white g-color-primary--hover g-cursor-pointer" href="#">Seeking
                                    for a Perfect Working Room</a>
                            </h2>
                            <p class="g-color-white-opacity-0_7 mb-0">At Wake, our mission has always been focused
                                on...</p>
                        </div>

                        <div class="g-pl-25">
                            <a class="d-inline-block g-brd-bottom g-brd-white g-color-white g-font-weight-600 g-font-size-12 text-uppercase g-text-underline--none--hover g-mb-30"
                               href="#">Read more</a>
                        </div>
                    </div>
                </article>
                <!-- End Blog Background Overlay Blocks -->
            </div>
        </div>

        <!-- Pagination -->
        <nav class="text-center" aria-label="Page Navigation">
            <ul class="list-inline">
                <li class="list-inline-item float-left g-hidden-xs-down">
                    <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                       href="#" aria-label="Previous">
              <span aria-hidden="true">
                <i class="fa fa-angle-left g-mr-5"></i> Previous
              </span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="u-pagination-v1__item u-pagination-v1-4 u-pagination-v1-4--active g-rounded-50 g-pa-7-14"
                       href="#">1</a>
                </li>
                <li class="list-inline-item">
                    <a class="u-pagination-v1__item u-pagination-v1-4 g-rounded-50 g-pa-7-14" href="#">2</a>
                </li>
                <li class="list-inline-item float-right g-hidden-xs-down">
                    <a class="u-pagination-v1__item u-pagination-v1-4 g-brd-gray-light-v3 g-brd-primary--hover g-rounded-50 g-pa-7-16"
                       href="#" aria-label="Next">
              <span aria-hidden="true">
                Next <i class="fa fa-angle-right g-ml-5"></i>
              </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Pagination -->
    </div>
    <!-- End Blog -->
@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop