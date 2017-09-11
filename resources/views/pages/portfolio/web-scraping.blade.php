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
                    This is a fully working web scraping form, try it!
                    If you like it and want it on your site, <a href="/contact">contact me!</a>
                </p>
            </div>
            <!-- End Heading -->

            <hr/>

            <!-- Stripe Form -->
            <section class="container text-center mx-auto">
                @include('pages.portfolio.web-scraping.google.search')
            </section>

            <!-- Card Details -->
            <div class="row text-center mx-auto" style="display: none;">

                <div class="col-sm-6">
                    <h3 class="g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4">
                        Stripe Details
                    </h3>
                    <p class="g-font-size-16">
                        <a href="https://dashboard.stripe.com/login">https://stripe.com/login</a><br/>
                        <span>demo@rossedlin.co.uk</span><br/>
                        <span>password1234</span><br/>
                    </p>
                </div>

                <div class="col-sm-6">
                    <h4>Test card details</h4>
                    <p>
                        4242 4242 4242 4242<br/>
                        <span style="margin-right: 30px;  color: #8b140c;">12 / 34</span>
                        <span style="margin-left: 30px; color: #20118b;">123</span>
                    </p>
                </div>

            </div>
            <!-- End Card Details -->

            <div class="row" style="display: none;">

                <div class="card col-xs-12" style="margin-bottom: 30px;">
                    <div class="card-block">
                        <h4 class="card-title">Stripe Checkout - ID #124</h4>
                        <p class="card-text">Stripe's embedded payment form, Checkout, simplifies and secures online payment
                            processing. Quickly integrate Checkout into your site to provide your users with a streamlined,
                            mobile-ready payment experience that is constantly improving.</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Web Scraping -->
@stop