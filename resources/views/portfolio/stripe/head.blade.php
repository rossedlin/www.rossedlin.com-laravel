<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:15
 */
?>
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
            opacity:             .9;
        }
        100%
        {
            background-position: 99% 40%;
            opacity:             1;
        }
    }

    #cardNumber.amex
    {
        background: url(/img/demo/stripe/amex-24.png) 99% 40% no-repeat;
        animation:  animatedBackground .05s linear;
    }

    #cardNumber.mastercard
    {
        background: url(/img/demo/stripe/mc-24.png) 99% 40% no-repeat;
        animation:  animatedBackground .05s linear;
    }

    #cardNumber.visa
    {
        background: url(/img/demo/stripe/visa-24.png) 99% 40% no-repeat;
        animation:  animatedBackground .05s linear;
    }

    .card-button-expiry
    {
        font-size:      0.6em;
        line-height:    1.1em;
        display:        inline-block;
        vertical-align: middle;
    }

    .card-button-icon
    {
        margin-top:     -2px;
        display:        inline-block;
        vertical-align: middle;
    }

    .card-button-number
    {
        display:        inline-block;
        vertical-align: middle;
        padding:        0 10px;
    }

    #page-demo-payment-stripe
    {
        margin: 20px 0 !important;
    }

    .panel.information-box
    {
        padding: 0 !important;
        margin:  20px 0 !important;
    }

    .panel.credit-card-box
    {
        padding: 0 !important;
        margin:  20px 0 !important;
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
        display:        table-cell;
        vertical-align: middle;
        width:          100%;
    }

    .credit-card-box .panel-heading img
    {
        margin-left:        6px;
        -webkit-transition: all .6s ease;
    }

    .credit-card-box .btn
    {
        margin-top: 6px;
    }

    .credit-card-box .input-group-addon
    {
        border:        none;
        border-bottom: 1px solid #222222;
        background:    none;
        padding:       5px 12px;
        border-radius: 0;
    }

    .loader
    {
        border:        16px solid #f3f3f3;
        border-top:    16px solid #3498db;
        border-radius: 50%;
        width:         120px;
        height:        120px;
        animation:     spin 2s linear infinite;
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