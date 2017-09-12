<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 12/09/2017
 * Time: 11:21
 *
 * @var \App\Objects\Portfolio\Item[] $portfolio
 */
?>
@extends('theme.unify-consulting.layouts.default')

@section('content')
    <!-- Portfolio -->
    <div id="portfolio">
        <div class="container demo g-pt-100">

            <!-- Heading -->
            <div class="text-center mx-auto" style="margin-top: 60px;">
                <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-font-size-36 g-letter-spacing-2 mb-4">
                    Portfolio
                </h1>
                <p class="g-font-size-16">
                    Welcome to my portfolio, these are sample pieces I have created or worked on.<br/>
                    If you like it and want it on your site, <a href="/contact">contact me!</a>
                </p>
            </div>
            <!-- End Heading -->

            <hr/>

            <div class="container g-pt-20 g-pb-20">
                <div class="row justify-content-between">
                    <div class="col-lg-12 g-mb-80">
                        <div class="g-pr-20--lg">
                            <div class="masonry-grid row g-mb-70">

                                <?php foreach ($portfolio as $item) {
                                ?>
                                @include('pages.portfolio.item')
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio -->
@stop

@section('body.post')
    @include('pages.index.snippets.body-post')
@stop