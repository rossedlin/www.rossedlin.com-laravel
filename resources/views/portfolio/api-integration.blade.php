<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 05/09/2017
 * Time: 14:42
 *
 * @var string $sample_url
 * @var string $ajax_get_request_url
 */
?>
@extends('unify-consulting.layout')
@section('content')

    <!-- Web Scraping -->
    <div id="demo-api-integration">
        <div class="container demo g-pt-100">

            <!-- Heading -->
            <div class="text-center mx-auto" style="margin-top: 60px;">
                <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4"
                    style="font-size: 32px;">
                    Api Integration
                </h1>
                <p class="g-font-size-16">
                    Hey, I'm an API Integration Demo, basically, I can connect with an api and pull information and show you it.<br />
                    Try me and see what happens. If you like it and want it on your site, <a href="/contact"> contact me!</a>
                </p>
            </div>
            <!-- End Heading -->

            <hr/>

            <!-- Web Scraping Form -->
            <section class="container text-center mx-auto">
                @include('portfolio.api-integration.get')
            </section>
            <!-- End Web Scraping Form -->
        </div>
    </div>
    <!-- End Web Scraping -->
@stop