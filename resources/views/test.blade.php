<?php
/**
 * Created by PhpStorm.
 *
 * @author Ross Edlin <contact@rossedlin.com>
 *
 * Date: 16/09/2017
 * Time: 19:47
 */
?>
@extends('unify-consulting.layout')

@section('content')

    <main class="g-min-height-100vh g-flex-centered g-bg-size-cover g-bg-cover g-bg-bluegray-opacity-0_3--after g-pa-15"
          style="background-image: url(/img/pixabay/landscape-2389023-1920x960.jpg);">
        <div class="text-center g-max-width-700 g-flex-centered-item g-z-index-1 g-color-white">
            <h1 class="display-3 g-mb-30 text-shadow-1" style="font-size: 88px;color: #e6e6e6">Coming Soon</h1>
            <p class="g-font-size-22 g-mb-50 text-shadow-1" style="font-size: 24px; color: #e6e6e6;">In the mean time,
                why not <a href="#contact">contact me!</a></p>
        </div>
    </main>

    @include('sections.quote.one')
    @include('sections.contact')

@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop
