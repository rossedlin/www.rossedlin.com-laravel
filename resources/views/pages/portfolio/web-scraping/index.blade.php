<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 23:40
 */
?>
@extends('theme.unify-consulting.layouts.default')
@section('content')
    <!-- Web Scraping -->
    <div id="demo-stripe">
        <div class="container demo g-pt-100">

            <!-- Heading -->
            <div class="text-center mx-auto" style="margin-top: 60px;">
                <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4"
                    style="font-size: 32px;">
                    Web Scraping
                </h1>
                <p class="g-font-size-16">
                    Hey! This is a fully working web scraping tool, We're going to scrape search results from <b>Google</b>, try it!<br />
                    If you like it and want it on your site, <a href="/contact">contact me!</a>
                </p>
            </div>
            <!-- End Heading -->

            <hr/>

            <!-- Web Scraping Form -->
            <section class="container text-center mx-auto">
                @include('pages.portfolio.web-scraping.google.search')
            </section>
            <!-- End Web Scraping Form -->
        </div>
    </div>
    <!-- End Web Scraping -->
@stop