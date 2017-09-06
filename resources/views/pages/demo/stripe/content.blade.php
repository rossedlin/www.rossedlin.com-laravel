<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:17
 */
?>
<div class="container" style="padding: 50px 20px;">
    <div class="row">

        <div class="card col-xs-12" style="margin-bottom: 30px;">
            <div class="card-block">
                <h4 class="card-title">Stripe Checkout</h4>
                <p class="card-text">Stripe's embedded payment form, Checkout, simplifies and secures online payment processing. Quickly integrate Checkout into your site to provide your users with a streamlined, mobile-ready payment experience that is constantly improving.</p>

                @include('pages.demo.stripe.snippets.checkout')

            </div>
        </div>

        <div class="panel panel-default information-box">
            <h2>@lang('stripe.title')</h2>
            <br/>
            <p>
                This is a fully working payment form linked to a stripe account.
            </p>
            <br/>
            <h4>Stripe dashboard</h4>
            <p>
                <a href="https://dashboard.stripe.com/login">https://stripe.com/login</a><br/>
                <span>demo@rossedlin.co.uk</span><br/>
                <span>password1234</span><br/>
            </p>
            <br/>
            <h4>Test card details</h4>
            <p>
                4242 4242 4242 4242<br/>
                <span style="margin-right: 30px;  color: #8b140c;">12 / 34</span>
                <span style="margin-left: 30px; color: #20118b;">123</span>
            </p>
        </div>
    </div>
</div>
</div>