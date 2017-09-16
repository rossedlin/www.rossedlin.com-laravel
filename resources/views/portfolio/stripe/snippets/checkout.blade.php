<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:37
 *
 * @var int $id
 * @var string $amount
 * @var string $currency_code
 * @var string $publish_key
 */
?>

<div class="mx-auto">
    <form action="/demo/stripe/authorise" method="POST">
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

        <input type="hidden" name="id" value="<?= $id ?>" />
        <input type="hidden" name="_token" value="<?= csrf_token() ?>" />
    </form>
</div>