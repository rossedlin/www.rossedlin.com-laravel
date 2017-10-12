<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 12:05
 */
?>

@extends('unify-consulting.layout')

@section('content')

    @include('unify-consulting.header')

    @include('sections.quote.two')

    {{--@include('index.sections.services')--}}

    {{--@include('pages.index.sections.quote-2')--}}

    {{--@include('pages.index.sections.portfolio')--}}
    {{--@include('pages.index.sections.blog')--}}
    {{--@include('pages.index.sections.testimonials')--}}
    @include('sections.contact')
@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop