<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:17
 */
?>
<div class="row">
    <div id="page-demo-payment-stripe" class="row col-xs-12 text-center">
        <div id="information-box" class="panel panel-default information-box">
            <h2>@lang('stripe.heading')</h2>
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
        <div id="success-box" class="panel panel-default success-box" style="display: none;">
            <div style="margin: 30px;">
                <h2 style="color: #038b3f;">You have made a successful payment</h2>
                <h4></h4>
            </div>
        </div>
        <div id="failed-box" class="panel panel-default success-box" style="display: none;">
            <div style="margin: 30px;">
                <h2 style="color: #8b2104;">Your payment has failed</h2>
                <h4></h4>
            </div>
        </div>
        <div id="credit-card-box" class="panel panel-default credit-card-box col-xs-12 col-sm-12">
            <div class="panel-body">
                <form role="form" id="payment-form">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="cardNumber">CARD NUMBER</label>
                                <input type="tel"
                                       class="form-control"
                                       id="cardNumber"
                                       name="cardNumber"
                                       placeholder="Valid Card Number"
                                       {{--value="4242 4242 4242 4242"--}}
                                       autocomplete="cc-number"
                                       required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3 col-md-3">
                            <div class="form-group">
                                <label for="cardExpiry">AMOUNT (£)</label>
                                <input type="tel"
                                       class="form-control"
                                       name="amount"
                                       placeholder="9.99"
                                       {{--value=""--}}
                                       autocomplete="cc-number"
                                       required/>
                            </div>
                        </div>
                        <div class="col-xs-1 col-md-1"></div>
                        <div class="col-xs-4 col-md-4">
                            <div class="form-group">
                                <label for="cardExpiry">
                                    <span class="hidden-xs">EXPIRATION</span><span
                                            class="visible-xs-inline">EXP</span>&nbspDATE
                                </label>
                                <input type="tel"
                                       class="form-control"
                                       name="cardExpiry"
                                       placeholder="MM / YY"
                                       {{--value="12 / 34"--}}
                                       autocomplete="cc-exp"
                                       required/>
                            </div>
                        </div>
                        <div class="col-xs-1 col-md-1"></div>
                        <div class="col-xs-3 col-md-3 pull-right">
                            <div class="form-group">
                                <label for="cardCVC">CV CODE</label>
                                <input type="tel"
                                       class="form-control"
                                       name="cardCVC"
                                       placeholder="CVC"
                                       {{--value="123"--}}
                                       autocomplete="cc-csc"
                                       required/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button id="stripe-confirm" class="btn btn-main btn-lg btn-block"
                                    data-style="zoom-in"
                                    type="submit">
                                @lang('common.confirm')
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>