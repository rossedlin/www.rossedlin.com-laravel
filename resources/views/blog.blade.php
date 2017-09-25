<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 16/09/2017
 * Time: 22:27
 *
 * @var Cryslo\Object\WordPress\Post[] $posts
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
    <div class="container g-pt-50 g-pb-20">
        <div class="row justify-content-between">
            <div class="col-lg-9 g-mb-80">
                <div class="g-pr-20--lg">
                    <div class="masonry-grid row g-mb-70">

                        <?php foreach ($posts as $post)
                        { ?>
                        @include('snippets.blog.mini-post')
                        <?php } ?>

                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-3 g-brd-left--lg g-brd-gray-light-v4 g-mb-80">
                @include('snippets.blog.sidebar')
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
    <!-- End Blog -->
@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop