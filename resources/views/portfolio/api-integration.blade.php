<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 05/09/2017
 * Time: 14:42
 *
 * @var string $sample_url
 * @var string $ajax_get_request_url
 */
?>
@extends('unify-consulting.layout')
@section('content')
    <!-- Contact Form -->
    <section class="container g-py-100">
        <div class="row g-mb-20">
            <div class="col-lg-6 g-mb-50">
                <!-- Heading -->
                <h2 class="h1 g-color-black g-font-weight-700 mb-4">API Integration Demo</h2>
                <p class="g-font-size-18 mb-0">
                    Hey, I'm an API Integration Demo, basically, I can connect with an api and pull information and show
                    you it,
                    Try me and see what happens.
                </p>
                <!-- End Heading -->
            </div>

            <div class="col-lg-3 align-self-end ml-auto g-mb-50"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-size-13">URL</label>
                        <input id="api-integration-url"
                               class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                               type="text" placeholder="https://reqres.in/api/users?page=2" value="https://reqres.in/api/users?page=2">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group g-mb-20">
                        <button id="api-integration-button"
                                class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                                role="button"
                                onclick="getRequestThreeSecs();">
                            <span style="padding: 0 10px">GET Request</span>
                            <span class="fa fa-spinner fa-spin" style="display: none; font-size:18px"></span>
                        </button>
                    </div>

                    <div id="api-integration-info" class="col-md-6 form-group g-mb-20" style="padding: 10px 0;"></div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group g-mb-20">
                        <p class="g-font-size-18 mb-0">
                            Have a look at <a href="https://reqres.in" target="_blank">https://reqres.in</a> for
                            testing.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="g-mb-40">
                    <label class="g-color-gray-dark-v2 g-font-size-13">Api Integration Result</label>
                <textarea
                        id="api-integration-result"
                        class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15"
                        rows="12" placeholder="A dump for the api integration result"></textarea>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Form -->

    <script>

        /**
         *
         */
        function getRequestThreeSecs() {

            $('#api-integration-result').val('');
            $('#api-integration-button').find('.fa-spinner').show();
            $('#api-integration-info').html('Requesting in 3...');

            setTimeout(getRequestTwoSecs, 1000);
        }

        /**
         *
         */
        function getRequestTwoSecs() {
            $('#api-integration-info').html('Requesting in 3... 2...');

            setTimeout(getRequestOneSecs, 1000);
        }

        /**
         *
         */
        function getRequestOneSecs() {
            $('#api-integration-info').html('Requesting in 3... 2... 1...');

            setTimeout(getRequest, 1000);
        }

        /**
         *
         */
        function getRequest() {

            $('#api-integration-info').html('Requesting...');

            $('#api-integration-result').val('');
            $('#api-integration-button').find('.fa-spinner').show();

//            sleep(2000);

            $.post('<?= url('api/portfolio/api-integration/get-request') ?>', {
                url: $('#api-integration-url').val(),
                _token: '<?= csrf_token(); ?>'
            })
                    .done(function (data, textStatus, jqXHR) {

                        $('#api-integration-result').val(data);
                        $('#api-integration-button').find('.fa-spinner').hide();
                        $('#api-integration-info').html('Done!');

                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {

                    });
        }

        function sleep(milliseconds) {
            var start = new Date().getTime();
            for (var i = 0; i < 1e7; i++) {
                if ((new Date().getTime() - start) > milliseconds) {
                    break;
                }
            }
        }

    </script>
@stop