<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 22/12/2016
 * Time: 15:28
 *
 * @var string $publish_key
 * @var string $url_ajax_authorise
 * @var string $csrf_token
 */
?>
@extends('layouts.default')
@section('head.post')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="<?= secure_url('vendor/jquery/payment/3.0.0/jquery.payment.min.js') ?>"></script>
    <style>
        /* CSS for Credit Card Payment form */
        .spacing
        {
            margin-bottom: 10px;
        }

        @keyframes animatedBackground
        {
            0%
            {
                background-position: 97% 40%;
                opacity: .9;
            }
            100%
            {
                background-position: 99% 40%;
                opacity: 1;
            }
        }

        #cardNumber.amex
        {
            background: url(/images/payment/amex-24.png) 99% 40% no-repeat;
            animation: animatedBackground .05s linear;
        }

        #cardNumber.mastercard
        {
            background: url(/images/payment/mc-24.png) 99% 40% no-repeat;
            animation: animatedBackground .05s linear;
        }

        #cardNumber.visa
        {
            background: url(/images/payment/visa-24.png) 99% 40% no-repeat;
            animation: animatedBackground .05s linear;
        }

        .card-button-expiry
        {
            font-size: 0.6em;
            line-height: 1.1em;
            display: inline-block;
            vertical-align: middle;
        }

        .card-button-icon
        {
            margin-top: -2px;
            display: inline-block;
            vertical-align: middle;
        }

        .card-button-number
        {
            display: inline-block;
            vertical-align: middle;
            padding: 0 10px;
        }

        #page-demo-payment-stripe
        {
            margin: 20px 0 !important;
        }

        .panel.information-box
        {
            padding: 0 !important;
            margin: 20px 0 !important;
        }

        .panel.credit-card-box
        {
            padding: 0 !important;
            margin: 20px 0 !important;
        }

        .credit-card-box .panel-body
        {
            padding: 10px;
        }

        .credit-card-box label
        {
            display: block;
        }

        /* The old "center div vertically" hack */
        .credit-card-box .display-table
        {
            display: table;
        }

        .credit-card-box .display-tr
        {
            display: table-row;
        }

        .credit-card-box .display-td
        {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }

        .credit-card-box .panel-heading img
        {
            margin-left: 6px;
            -webkit-transition: all .6s ease;
        }

        .credit-card-box .btn
        {
            margin-top: 6px;
        }

        .credit-card-box .input-group-addon
        {
            border: none;
            border-bottom: 1px solid #222222;
            background: none;
            padding: 5px 12px;
            border-radius: 0;
        }

        .loader
        {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin
        {
            0%
            {
                -webkit-transform: rotate(0deg);
            }
            100%
            {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin
        {
            0%
            {
                transform: rotate(0deg);
            }
            100%
            {
                transform: rotate(360deg);
            }
        }
    </style>
@stop

@section('content')
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
@stop

@section('footer.post')
<script type="text/javascript">

    var paymentForm = $('#payment-form');
    paymentForm.on('submit', payWithStripe);

    $(document).ready(function ()
    {
        setUpStripeForm();
    });

    /**
     *
     */
    function setUpStripeForm()
    {
        /* Form validation using Stripe client-side validation helpers */
        jQuery.validator.addMethod("cardNumber", function (value, element)
        {
            return this.optional(element) || Stripe.card.validateCardNumber(value);
        }, "Please specify a valid credit card number.");

//        jQuery.validator.addMethod("cardExpiry", function (value, element)
//        {
//            /* Parsing month/year uses jQuery.payment library */
//            var splitValue = $.payment.cardExpiryVal(value);
//            return this.optional(element) || Stripe.card.validateExpiry(splitValue.month, splitValue.year);
//        }, "Invalid expiration date.");
//
//        jQuery.validator.addMethod("cardCVC", function (value, element)
//        {
//            return this.optional(element) || Stripe.card.validateCVC(value);
//        }, "Invalid CVC.");
//
//        paymentForm.validate({
//            rules: {
//                cardNumber: {
//                    required: true,
//                    cardNumber: true
//                },
//                cardExpiry: {
//                    required: true,
//                    cardExpiry: true
//                },
//                cardCVC: {
//                    required: true,
//                    cardCVC: true
//                }
//            },
//            highlight: function (element)
//            {
//                $(element).closest('.form-control').removeClass('success').addClass('error');
//            },
//            unhighlight: function (element)
//            {
//                $(element).closest('.form-control').removeClass('error').addClass('success');
//            },
//            errorPlacement: function (error, element)
//            {
//                $(element).closest('.form-group').append(error);
//            }
//        });

//            paymentForm.find('[type=submit]').prop('disabled', true);
//            var readyInterval = setInterval(function ()
//            {
//                if (isPaymentFormReady())
//                {
//                    paymentForm.find('[type=submit]').prop('disabled', false);
//                    clearInterval(readyInterval);
//                }
//            }, 250);

        /* Fancy restrictive input formatting via jQuery.payment library*/
        $('input[name=cardNumber]').payment('formatCardNumber');
        $('input[name=amount]').payment('restrictNumeric');
        $('input[name=cardCVC]').payment('formatCardCVC');
        $('input[name=cardExpiry]').payment('formatCardExpiry');
    }

    /**
     * Validates whether the payment form is ready
     */
    function isPaymentFormReady()
    {
        if (!paymentForm.find('[name=cardNumber]').hasClass("success")) return false;
        if (!paymentForm.find('[name=cardExpiry]').hasClass("success")) return false;
        if (paymentForm.find('[name=cardCVC]').val().length < 3) return false;
        if (paymentForm.find('[name=amount]').val().length < 1) return false;

        return true;
    }

    /**
     *
     */
    function payWithStripe(e)
    {
        e.preventDefault();

        hidePaymentFeedback();
        disablePaymentButtons();

        if (!isPaymentFormReady())
        {
            paymentFailed("You're missing a bit of information...");
            enabledPaymentButtons();
            return;
        }

        Stripe.setPublishableKey('<?= $publish_key ?>');

        /* Create token */
        var expiry = paymentForm.find('[name=cardExpiry]').payment('cardExpiryVal');
        var ccData = {
            number: paymentForm.find('[name=cardNumber]').val().replace(/\s/g, ''),
            cvc: paymentForm.find('[name=cardCVC]').val(),
            exp_month: expiry.month,
            exp_year: expiry.year
        };

        Stripe.card.createToken(ccData, function stripeResponseHandler(status, response)
        {
            if (response.error)
            {
                enabledPaymentButtons();

                /* Show Stripe errors on the form */
//                    paymentError(response.error.message);
            }
            else
            {
                // response contains id and card, which contains additional card details
                var token = response.id;
                authoriseByToken(token);
            }
        });
    }

    /**
     * Pay with the token retrieved from Stripe
     *
     * @param token
     */
    function authoriseByToken(token)
    {
        var data = {
            token: token,
            amount: $("input[name='amount']").val() * 100,
            _token: "<?= $csrf_token ?>"
//                save_card: $('#save_card').is(':checked')
        };

        $.post('<?= $url_ajax_authorise ?>', data)
                .done(function (response, textStatus, jqXHR)
                {
                    console.log(response);

                    if (response.success)
                    {
                        enabledPaymentButtons();
                        paymentSuccess(response['message']);
                    }
                    else
                    {
                        enabledPaymentButtons();
                        paymentFailed(response['message']);
                    }
                })
                .fail(function (jqXHR, textStatus, errorThrown)
                {
                    enabledPaymentButtons();
                    paymentFailed('');
                });
    }

    /**
     *
     */
    function enabledPaymentButtons()
    {
        /**
         * Visual Feedback
         */
        $('#stripe-confirm').html('<?= trans('common.confirm') ?>');
    }

    /**
     *
     */
    function disablePaymentButtons()
    {
        /**
         * Visual Feedback
         */
        $('#stripe-confirm').html('<i class="fa fa-spinner fa-spin"></i> <?= trans('common.confirming') ?>');

    }

    /**
     *
     * @param message
     */
    function paymentSuccess(message)
    {
//            $('#credit-card-box').hide();
        $('#success-box').show();
    }

    /**
     *
     * @param message
     */
    function paymentFailed(message)
    {
//            $('#credit-card-box').hide();
        $('#failed-box').show().find('h4').html(message);
    }

    /**
     *
     */
    function hidePaymentFeedback()
    {
        $('#success-box').hide();
        $('#failed-box').hide();
    }
</script>
@stop