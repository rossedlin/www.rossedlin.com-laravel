<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 17/09/2017
 * Time: 17:33
 */
?>
@extends('unify-consulting.layout')

@section('content')
    <div id="content" class="g-pt-100">
        <!-- News Content -->
        <section class="g-pt-50 g-pb-100">
            <div class="container">
                <div class="row">

                    @include('sections.blog.post.article')

                    @include('sections.blog.post.sidebar')

                </div>
            </div>
        </section>
        <!-- End News Content -->
    </div>
@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop