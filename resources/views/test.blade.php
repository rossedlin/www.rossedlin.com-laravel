<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 16/09/2017
 * Time: 19:47
 *
 * @var mixed $dump
 */
?>
@extends('unify-consulting.layout')

@section('content')

    <!-- Web Scraping -->
    <div id="test">
        <div class="container demo g-pt-100">

            <!-- Heading -->
            <div class="text-center mx-auto" style="margin-top: 60px;">
                <h1 class="text-uppercase g-color-main-light-v1 g-font-weight-600 g-letter-spacing-2 mb-4"
                    style="font-size: 32px;">
                    Test
                </h1>
            </div>
            <!-- End Heading -->

            <hr/>

            <!-- Web Scraping Form -->
            <section class="container mx-auto">
                <?php pre($dump) ?>
            </section>
            <!-- End Web Scraping Form -->
        </div>
    </div>
    <!-- End Web Scraping -->

@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop
