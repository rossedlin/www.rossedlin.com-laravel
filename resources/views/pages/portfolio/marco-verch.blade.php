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
@extends('theme.unify-consulting.layouts.default')
@section('content')
    <!-- Contact Form -->
    <section class="container g-py-100">
        <div class="row g-mb-20">
            <div class="col-lg-6 g-mb-50">
                <!-- Heading -->
                <h2 class="h1 g-color-black g-font-weight-700 mb-4">Marco Verch</h2>
                <!-- End Heading -->
            </div>

            <div class="col-lg-3 align-self-end ml-auto g-mb-50"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12 form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-size-13">Invoice ID / Number</label>
                        <input id="invoice-id"
                               class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                               type="text" value="3165692">
                    </div>

                    <div class="col-md-12 form-group g-mb-20">
                        <label class="g-color-gray-dark-v2 g-font-size-13">Email</label>
                        <input id="invoice-email"
                               class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15"
                               type="text" value="rossedlin@hotmail.com">
                    </div>

                    <div class="col-xs-6 form-group g-mb-20" style="margin: 5px;">
                        <button id="mark-invoice-complete"
                                class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                                role="button"
                                onclick="markInvoiceComplete();">
                            <span style="padding: 0 10px">Mark Invoice Complete</span>
                            <span class="fa fa-spinner fa-spin" style="display: none; font-size:18px"></span>
                        </button>
                    </div>

                    <div class="col-xs-6 form-group g-mb-20" style="margin: 5px;">
                        <button id="send-invoice"
                                class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                                role="button"
                                onclick="sendInvoice();">
                            <span style="padding: 0 10px">Send Invoice</span>
                            <span class="fa fa-spinner fa-spin" style="display: none; font-size:18px"></span>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div id="dumper" class="col-xs-12 form-group g-mb-20">

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Form -->

    <script>

        /**
         *
         */
        function markInvoiceComplete() {

            $('#mark-invoice-complete').find('.fa-spinner').show();

            $.post('<?= url('api/portfolio/marco-verch/mark-invoice-complete') ?>', {
                invoice_id: $('#invoice-id').val(),
                _token: '<?= csrf_token(); ?>'
            })
                    .done(function (data, textStatus, jqXHR) {

                        var obj = jQuery.parseJSON(data);

                        $('#mark-invoice-complete').find('.fa-spinner').hide();
                        $('#dumper').html(obj['payload']);
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {

                    });
        }

        /**
         *
         */
        function sendInvoice() {

            $('#send-invoice').find('.fa-spinner').show();

            $.post('<?= url('api/portfolio/marco-verch/send-invoice') ?>', {
                invoice_id: $('#invoice-id').val(),
                email: $('#invoice-email').val(),
                _token: '<?= csrf_token(); ?>'
            })
                    .done(function (data, textStatus, jqXHR) {

                        var obj = jQuery.parseJSON(data);

                        $('#send-invoice').find('.fa-spinner').hide();
                        $('#dumper').html(obj['payload']);
                    })
                    .fail(function (jqXHR, textStatus, errorThrown) {

                    });
        }

    </script>
@stop