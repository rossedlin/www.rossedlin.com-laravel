<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:17
 *
 * @var int $id
 */
?>
<div id="demo-stripe">
    <div class="container demo g-pt-100">

        <!-- Heading -->
        <div class="text-center mx-auto" style="margin-top: 60px;">
            <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4"
                style="font-size: 32px;">
                Stripe Integration
            </h1>
            <p class="g-font-size-16">
                A fully working payment form, designed by me of course!<br/>
                If you like it and want it on your site, <a href="/contact">contact me!</a>
            </p>
        </div>
        <!-- End Heading -->

        <hr/>

        <!-- Stripe Form -->
        <section class="container text-center mx-auto">
            @include('portfolio.stripe.snippets.elements')
        </section>

        <!-- Card Details -->
        <div class="row text-center mx-auto">

            <div class="col-sm-6">
                <h3 class="g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4">
                    Stripe Details
                </h3>
                <p class="g-font-size-16">
                    <a href="https://dashboard.stripe.com/login" target="_blank">https://stripe.com/login</a><br/>
                    <span>demo@rossedlin.com</span><br/>
                    <span>Password1234!!!</span><br/>
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
                    <h4 class="card-title">Stripe Checkout - ID #<?= $id ?></h4>
                    <p class="card-text">Stripe's embedded payment form, Checkout, simplifies and secures online payment
                        processing. Quickly integrate Checkout into your site to provide your users with a streamlined,
                        mobile-ready payment experience that is constantly improving.</p>

                    {{--@include(portfolio.stripe.snippets.checkout')--}}

                </div>
            </div>

        </div>
    </div>
</div>