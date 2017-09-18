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
<div class="card col-xs-12 col-lg-12" style="margin-bottom: 30px;">
    <div class="card-block">
        <h4 class="card-title">Stripe Checkout - ID #<?= $id ?></h4>
        <p class="card-text">
            This is Stripes Checkout form, it's a simplified design which you can integrate into your site.<br/>
            It'll <span style="font-weight: 500; font-style: italic; color: #0b2c0c;">popup</span> when you click the
            button.<br/>
            Don't worry, this is in <span style="font-weight: bold; color: #55161f;">test mode</span> so no money is
            actually transferred!
        </p>

        <div id="stripe-loading" class="fa fa-spinner fa-spin" style="font-size:36px;"></div>

        <div id="pay-button-container" style="display: none;">
            <button id="pay-button" class="btn btn-primary" disabled>
                <span style="font-size:18px; line-height: 32px;">Click to try Stripe Checkout</span>
                <span id="pay-button-loading" class="fa fa-spinner fa-spin"
                      style="font-size:24px; display: none; margin-left: 5px;"></span>
            </button>
        </div>

        <div id="pay-message" class="g-mt-20"></div>
    </div>
</div>

<script>

    var submittedForm = false;
    var loadScript = function (url, callback) {
        jQuery.ajax({
            url: url,
            dataType: 'script',
            success: callback,
            async: true
        });
    };

    /**
     *
     */
    function authoriseStripe(token) {

        $.post('<?= url('api/portfolio/stripe/authorise') ?>', {
            id: '<?= $id ?>',
            token: token,
            _token: '<?= csrf_token(); ?>'
        })
                .done(function (data, textStatus, jqXHR) {

                    var obj = jQuery.parseJSON(data);
                    console.log(obj);

                    submittedForm = false;
                    $('#pay-button').prop('disabled', false);
                    $('#pay-button-loading').hide();

                    $('#pay-message').html(obj['response']['message']);
                })
                .fail(function (jqXHR, textStatus, errorThrown) {

                });
    }

    function setupStripe() {

        loadScript('https://checkout.stripe.com/checkout.js', function () {

                    console.log('loaded stripe checkout.js');

                    var handler = StripeCheckout.configure({
                        key: '<?= $publish_key ?>',
                        image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                        locale: 'auto',
                        token: function (token) {

                            // You can access the token ID with `token.id`.
                            // Get the token ID to your server-side code for use.

                            console.log(token);
                            submittedForm = true;

                            authoriseStripe(token);
                        }
                    });

                    document.getElementById('pay-button').addEventListener('click', function (e) {
                        // Open Checkout with further options:

                        $('#pay-button').prop('disabled', true);
                        $('#pay-button-loading').show();

                        handler.open({
                            name: 'Ross Edlin (Demo)',
                            description: '2 widgets',
                            zipCode: true,
                            currency: '<?= $currency_code ?>',
                            amount: parseInt('<?= (int)$amount ?>'),
                            closed: function () {

                                if (submittedForm === false) {
                                    console.log('Stripe checkout closed');

                                    $('#pay-button').prop('disabled', false);
                                    $('#pay-button-loading').hide();
                                }
                            }
                        });
                        e.preventDefault();
                    });

                    // Close Checkout on page navigation:
                    window.addEventListener('popstate', function () {
                        handler.close();
                    });

                    /**
                     * Finished loading Stripe
                     * Show buttons
                     */
                    $('#stripe-loading').hide();
                    $('#pay-button-container').show();
                    $('#pay-button').prop('disabled', false);

                }
        )
        ;
    }

    window.onload = setupStripe;
</script>