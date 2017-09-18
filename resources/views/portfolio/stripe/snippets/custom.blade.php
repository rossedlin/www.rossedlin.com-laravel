<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 17:49
 *
 * @var int    $id
 * @var string $amount
 * @var string $currency_code
 * @var string $publish_key
 */
?>
<div class="card col-xs-12 col-md-6" style="margin-bottom: 30px;">
    <div class="card-block">
        <h4 class="card-title">Stripe Checkout - ID #<?= $id ?></h4>
        <p class="card-text">Stripe's embedded payment form, Checkout, simplifies and secures online payment
            processing. Quickly integrate Checkout into your site to provide your users with a streamlined,
            mobile-ready payment experience that is constantly improving.</p>

        <div class="fa fa-spinner fa-spin" style="font-size:36px;"></div>

        <div id="pay-button-container" style="display: none;">
            <button id="pay-button" class="btn btn-primary" disabled>Purchase</button>
        </div>


    </div>
</div>

{{--<script src="https://checkout.stripe.com/checkout.js"></script>--}}

<script>

    var loadScript = function (url, callback) {
        jQuery.ajax({
            url: url,
            dataType: 'script',
            success: callback,
            async: true
        });
    };

    function setupStripe() {

        loadScript('https://checkout.stripe.com/checkout.js', function () {

            alert('loaded!');

        });
    }

    var handler = StripeCheckout.configure({
        key: '<?= $publish_key ?>',
        image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
        locale: 'auto',
        token: function (token) {
            // You can access the token ID with `token.id`.
            // Get the token ID to your server-side code for use.
        }
    });

    document.getElementById('pay-button').addEventListener('click', function (e) {
        // Open Checkout with further options:
        handler.open({
            name: 'Ross Edlin (Demo)',
            description: '2 widgets',
            zipCode: true,
            currency: '<?= $currency_code ?>',
            amount: '<?= (int)$amount ?>'
        });
        e.preventDefault();
    });

    // Close Checkout on page navigation:
    window.addEventListener('popstate', function () {
        handler.close();
    });

    window.onload = setupStripe;
</script>