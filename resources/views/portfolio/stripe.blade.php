<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 22/12/2016
 * Time: 15:28
 *
 * @var string $publish_key
 * @var string $url_ajax_authorise
 * @var string $csrf_token
 */
?>
@extends('theme.unify-consulting.layouts.default')
@section('head.post')
    {{--@include('pages.demo.stripe.head')--}}
@stop

@section('content')
    @include('pages.demo.stripe.content')
@stop

@section('footer.post')
    {{--@include('pages.demo.stripe.footer')--}}
@stop