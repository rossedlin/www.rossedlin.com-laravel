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
@extends('unify-consulting.layout')

@section('content')

    <script src="https://js.stripe.com/v3/"></script>

    @include('portfolio.stripe.stripe')
@stop