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

    @include('index.sections.about-1')
    @include('index.sections.services')
    @include('sections.quote.one')

    {{--@include('pages.index.sections.quote-2')--}}

    {{--@include('pages.index.sections.portfolio')--}}
    {{--@include('pages.index.sections.blog')--}}
    {{--@include('pages.index.sections.testimonials')--}}
    {{--@include('pages.index.sections.contact')--}}
@stop

@section('body.post')
    @include('index.snippets.body-post')
@stop