<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 13:51
 */
?>
<!-- Contact -->
<footer id="contact" class="g-pos-rel">
    <!-- Content -->
    <div class="g-bg-size-cover g-bg-img-hero g-bg-cover g-bg-black-opacity-0_8--after g-pt-120 g-pb-70"
         style="background-image: url(/img/pixabay/telephone-586266-1920x1280.jpg);">
        <div class="container g-z-index-1">
            <div class="row align-items-center">
                <div class="col-md-4 g-mb-50">
                    <h3 class="h4 g-color-white mb-4">Contact Info</h3>

                <?php /*
                    <!-- Icon Block -->
                    <div class="media align-items-center mb-4">
                        <div class="d-flex">
                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                      <i class="icon-hotel-restaurant-235 u-line-icon-pro"></i>
                    </span>
                        </div>
                        <div class="media-body">
                            <p class="g-color-white-opacity-0_6 mb-0">5B Streat, City 50987 New Town US</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    */ ?>

                <?php /*
                    <!-- Icon Block -->
                    <div class="media align-items-center mb-4">
                        <div class="d-flex">
                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                      <i class="icon-communication-033 u-line-icon-pro"></i>
                    </span>
                        </div>
                        <div class="media-body">
                            <p class="g-color-white-opacity-0_6 mb-0">+32 (0) 333 444 555</p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                    */ ?>

                <!-- Icon Block -->
                    <div class="media align-items-center g-mb-60">
                        <div class="d-flex">
                    <span class="u-icon-v1 u-icon-size--sm g-color-white mr-2">
                      <i class="icon-communication-062 u-line-icon-pro"></i>
                    </span>
                        </div>
                        <div class="media-body">
                            <a href="mailto:contact@rossedlin.com"
                               class="g-color-white-opacity-0_6 mb-0">contact@rossedlin.com</a>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Social Icons -->
                    <h3 class="h4 g-color-white">Social Networks</h3>

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                               href="@lang('social.facebook')" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                               href="@lang('social.instagram')" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                               href="@lang('social.twitter')" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                               href="@lang('social.linkedin')" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>

                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm g-color-white g-bg-white-opacity-0_1 g-bg-primary--hover g-font-size-13 rounded-circle"
                               href="@lang('social.github')" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Social Icons -->
                </div>

                <div class="col-md-8 g-mb-50">
                    <div class="g-brd-around g-brd-white-opacity-0_6 g-px-45 g-py-60">
                        <div class="row">
                            <div class="col-md-4 g-mb-30">
                                <h2 class="h1 g-color-white">Contact Us</h2>
                            </div>

                            <div class="col-md-8 g-mb-30">
                                <!-- Contact Form -->
                                <div class="mb-3">
                                    <input id="contact-name"
                                           class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2"
                                           type="text" placeholder="Name">
                                </div>

                                <div class="mb-3">
                                    <input id="contact-email"
                                           class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 rounded-0 g-py-13 g-px-0 mb-2"
                                           type="email" placeholder="Email">
                                </div>

                                <div class="mb-4">
                                            <textarea id="contact-message"
                                                      class="form-control g-brd-none g-brd-bottom g-brd-white g-brd-primary--focus g-color-white g-bg-transparent g-placeholder-gray-light-v5 g-resize-none rounded-0 g-py-13 g-px-0 mb-5"
                                                      rows="5" placeholder="Message"></textarea>
                                </div>

                                <button id="contact-submit"
                                        class="btn u-btn-primary g-bg-secondary g-color-primary g-color-white--hover g-bg-primary--hover g-font-weight-600 g-font-size-12 g-rounded-30 g-py-15 g-px-35"
                                        onclick="sendContactMessage();"
                                        role="button">
                                    Send Message
                                    <span class="fa fa-spinner fa-spin" style="display: none; font-size:18px; margin-left: 8px;"></span>
                                </button>
                                <!-- End Contact Form -->
                            </div>
                        </div>

                        <!-- Teal Alert -->
                        <div id="contact-alert-success" class="alert show g-bg-teal g-color-white rounded-0"
                             style="display: none;" role="alert">
                            <strong>Success!</strong> Your message has been submitted.
                        </div>
                        <!-- End Teal Alert -->

                        <!-- Red Alert -->
                        <div id="contact-alert-danger" class="alert show g-bg-red g-color-white rounded-0"
                             style="display: none;" role="alert">
                            <strong>Oh snap!</strong> Something went wrong, try emailing me instead!
                        </div>
                        <!-- End Red Alert -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
</footer>

<script>
    /**
     *
     */
    function sendContactMessage() {

        $('#contact-submit').find('.fa-spinner').show();

        $.post('<?= url('api/contact') ?>', {
            name: $('#contact-name').val(),
            email: $('#contact-email').val(),
            message: $('#contact-message').val(),
            _token: '<?= csrf_token(); ?>'
        })
                .done(function (data, textStatus, jqXHR) {

                    $('#contact-submit').find('.fa-spinner').hide();

                    var obj = jQuery.parseJSON(data);
                    var response = obj['response'];

                    if (response['success']) {
                        $('#contact-alert-success').show();
                        setTimeout(hideAlerts, 5000);
                    }
                    else {
                        $('#contact-alert-danger').show();
                        setTimeout(hideAlerts, 5000);
                    }
                })
                .fail(function (jqXHR, textStatus, errorThrown) {
                    $('#contact-alert-danger').show();
                    setTimeout(hideAlerts, 5000);
                });
    }

    function hideAlerts() {
        $('#contact-alert-success').hide();
        $('#contact-alert-danger').hide();
    }
</script>
<!-- End Contact -->