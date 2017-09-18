<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:37
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

        <div class="mx-auto">
            <form action="/portfolio/stripe/authorise" method="POST">
                <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="<?= $publish_key ?>"
                        data-amount="<?= $amount ?>"
                        data-name="Ross Edlin (Demo)"
                        data-description="Widget"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"
                        data-zip-code="true"
                        data-currency="<?= $currency_code ?>">
                </script>

                <input type="hidden" name="id" value="<?= $id ?>"/>
                <input type="hidden" name="_token" value="<?= csrf_token() ?>"/>
            </form>
        </div>

    </div>
</div>