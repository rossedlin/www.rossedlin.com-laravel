<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 13/09/2017
 * Time: 16:52
 */
?>
@extends('unify-consulting.layout')

@section('content')

    <section id="about" class="g-mb-100">
        <div class="container g-pt-150">
            <div class="row">

                <!-- Profile Sidebar -->
                <div class="col-md-3" >
                    @include('sections.about.sidebar')
                </div>
                <!-- End Profile Sidebar -->

                <!-- Profle Content -->
                <div class="col-md-9">
                    @include('sections.about.content')
                </div>
                <!-- End Profle Content -->


            </div>
        </div>
    </section>

@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop