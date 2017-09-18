<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/09/2017
 * Time: 16:17
 *
 * @var int $id
 */
?>
<div id="demo-stripe">
    <div class="container demo g-pt-100">

        <!-- Heading -->
        <div class="text-center mx-auto" style="margin-top: 60px;">
            <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4"
                style="font-size: 32px;">
                Stripe Integration
            </h1>
            <p class="g-font-size-16">
                A fully working payment form, designed by me of course!<br/>
                If you like it and want it on your site, <a href="/contact">contact me!</a>
            </p>
        </div>
        <!-- End Heading -->

        <hr/>

        <!-- Stripe Form -->
        <section class="container text-center mx-auto">
            {{--@include('portfolio.stripe.snippets.checkout')--}}
            @include('portfolio.stripe.snippets.custom')
            {{--@include('portfolio.stripe.snippets.elements')--}}
        </section>

        <!-- Card Details -->
        <div class="row text-center mx-auto">

            <div class="col-sm-6">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                    <tr>
                        <th class="hidden-sm-down">#</th>
                        <th>Login Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="hidden-sm-down">Link</td>
                        <td><a href="https://dashboard.stripe.com/login" target="_blank">https://stripe.com/login</a></td>
                    </tr>

                    <tr>
                        <td class="hidden-sm-down">Username</td>
                        <td>demo@rossedlin.com</td>
                    </tr>

                    <tr>
                        <td class="hidden-sm-down">Password</td>
                        <td>Password1234!!!</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-6">
                <table class="table table-striped">
                    <thead class="thead-inverse">
                    <tr>
                        <th class="hidden-sm-down">#</th>
                        <th>Test Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="hidden-sm-down">Card</td>
                        <td>4242 4242 4242 4242</td>
                    </tr>

                    <tr>
                        <td class="hidden-sm-down">Expiry</td>
                        <td>12 / 32</td>
                    </tr>

                    <tr>
                        <td class="hidden-sm-down">CVC</td>
                        <td>123</td>
                    </tr>

                    <tr>
                        <td class="hidden-sm-down">Zip</td>
                        <td>12345</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- End Card Details -->
    </div>
</div>