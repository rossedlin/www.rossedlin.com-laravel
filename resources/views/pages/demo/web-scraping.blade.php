<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 23:40
 */
?>
@extends('theme.unify-consulting.layouts.default')
@section('content')
    <!-- Web Scraping -->
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
                               type="text" placeholder="<?= $sample_url ?>" value="<?= $sample_url ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group g-mb-20">
                        <button id="api-integration-button"
                                class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35"
                                role="button"
                                onclick="getRequestThreeSecs();"><span style="padding: 0 10px">GET Request</span><span
                                    class="fa fa-spinner fa-spin" style="display: none; font-size:18px"></span></button>
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
    <!-- End Web Scraping -->
@stop