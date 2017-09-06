<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:18
 */
?>
<script type="text/javascript">

    var paymentForm = $('#payment-form');
    paymentForm.on('submit', payWithStripe);

    $(document).ready(function () {
        setUpStripeForm();
    });

    /**
     *
     */
    function setUpStripeForm() {
        /* Form validation using Stripe client-side validation helpers */
        jQuery.validator.addMethod("cardNumber", function (value, element) {
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
    function isPaymentFormReady() {
        if (!paymentForm.find('[name=cardNumber]').hasClass("success")) return false;
        if (!paymentForm.find('[name=cardExpiry]').hasClass("success")) return false;
        if (paymentForm.find('[name=cardCVC]').val().length < 3) return false;
        if (paymentForm.find('[name=amount]').val().length < 1) return false;

        return true;
    }

    /**
     *
     */
    function payWithStripe(e) {
        e.preventDefault();

        hidePaymentFeedback();
        disablePaymentButtons();

        if (!isPaymentFormReady()) {
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

        Stripe.card.createToken(ccData, function stripeResponseHandler(status, response) {
            if (response.error) {
                enabledPaymentButtons();

                /* Show Stripe errors on the form */
//                    paymentError(response.error.message);
            }
            else {
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
    function authoriseByToken(token) {
        var data = {
            token: token,
            amount: $("input[name='amount']").val() * 100,
            _token: "<?= $csrf_token ?>"
//                save_card: $('#save_card').is(':checked')
        };

        $.post('<?= $url_ajax_authorise ?>', data)
                .done(function (response, textStatus, jqXHR) {
                    console.log(response);

                    if (response.success) {
                        enabledPaymentButtons();
                        paymentSuccess(response['message']);
                    }
                    else {
                        enabledPaymentButtons();
                        paymentFailed(response['message']);
                    }
                })
                .fail(function (jqXHR, textStatus, errorThrown) {
                    enabledPaymentButtons();
                    paymentFailed('');
                });
    }

    /**
     *
     */
    function enabledPaymentButtons() {
        /**
         * Visual Feedback
         */
        $('#stripe-confirm').html('<?= trans('common.confirm') ?>');
    }

    /**
     *
     */
    function disablePaymentButtons() {
        /**
         * Visual Feedback
         */
        $('#stripe-confirm').html('<i class="fa fa-spinner fa-spin"></i> <?= trans('common.confirming') ?>');

    }

    /**
     *
     * @param message
     */
    function paymentSuccess(message) {
//            $('#credit-card-box').hide();
        $('#success-box').show();
    }

    /**
     *
     * @param message
     */
    function paymentFailed(message) {
//            $('#credit-card-box').hide();
        $('#failed-box').show().find('h4').html(message);
    }

    /**
     *
     */
    function hidePaymentFeedback() {
        $('#success-box').hide();
        $('#failed-box').hide();
    }
</script>