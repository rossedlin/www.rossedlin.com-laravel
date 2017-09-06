<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 01/09/2017
 * Time: 15:52
 */
?>
<!-- Contact Form -->
<section class="container g-py-100">
    <div class="row g-mb-20">
        <div class="col-lg-6 g-mb-50">
            <!-- Heading -->
            <h2 class="h1 g-color-black g-font-weight-700 mb-4">How can we assist you?</h2>
            <p class="g-font-size-18 mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art.
                Somewhere between sophistication and simplicity.</p>
            <!-- End Heading -->
        </div>

        <?php /*
        <div class="col-lg-3 align-self-end ml-auto g-mb-50">
            <div class="media">
                <div class="d-flex align-self-center">
                <span class="u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                  <i class="g-font-size-16 icon-communication-033 u-line-icon-pro"></i>
                </span>
                </div>
                <div class="media-body align-self-center">
                    <h3 class="h6 g-color-black g-font-weight-700 text-uppercase mb-0">Phone Number</h3>
                    <p class="mb-0">+32 (0) 333 444 555</p>
                </div>
            </div>
        </div>
        */ ?>

        <div class="col-lg-3 align-self-end ml-auto g-mb-50">
            <div class="media">
                <div class="d-flex align-self-center">
                <span class="u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                  <i class="g-font-size-16 icon-communication-062 u-line-icon-pro"></i>
                </span>
                </div>
                <div class="media-body align-self-center">
                    <h3 class="h6 g-color-black g-font-weight-700 text-uppercase mb-0">Email Address</h3>
                    <p class="mb-0">contact@cuttingweb.co.uk</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-5">
            <form>
                <div class="row">
                    <div class="col-md-6 form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-size-13">First name</label>
                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                               type="text" placeholder="John">
                    </div>

                    <div class="col-md-6 form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-size-13">Last name</label>
                        <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                               type="text" placeholder="Doe">
                    </div>
                </div>

                <div class="g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Your email</label>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                           type="email" placeholder="johndoe@gmail.com">
                </div>

                <div class="g-mb-20">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Phone number</label>
                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                           type="tel" placeholder="+ (01) 222 33 44">
                </div>

            </form>
        </div>
        <div class="col-md-7">
            <div class="g-mb-40">
                <label class="g-color-gray-dark-v2 g-font-size-13">Your message</label>
                <textarea
                        class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15"
                        rows="12" placeholder="Hi there, I would like to ..."></textarea>
            </div>

            <div class="text-right">
                <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                        type="submit" role="button">Send
                </button>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Form -->
