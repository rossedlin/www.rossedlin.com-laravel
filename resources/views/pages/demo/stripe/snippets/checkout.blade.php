<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:37
 */
?>

<div class="mx-auto">
    <form action="/demo/stripe/authorise" method="POST">
        <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="pk_test_LbFIAL4dmQyihwu1kX1OfcNI"
                data-amount="999"
                data-name="Ross Edlin (Demo)"
                data-description="Widget"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-zip-code="true"
                data-currency="gbp">
        </script>
    </form>
</div>