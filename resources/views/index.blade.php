<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/09/2017
 * Time: 12:05
 */
?>

@extends('theme.unify-consulting.layouts.default')

@section('content')

    @include('theme.unify-consulting.header.default')

    @include('pages.index.sections.about-1')
    @include('pages.index.sections.services')
    @include('pages.index.sections.quote-1')

    {{--@include('pages.index.sections.quote-2')--}}

    {{--@include('pages.index.sections.portfolio')--}}
    {{--@include('pages.index.sections.blog')--}}
    {{--@include('pages.index.sections.testimonials')--}}
    {{--@include('pages.index.sections.contact')--}}
@stop

@section('body.post')
    @include('pages.index.snippets.body-post')
@stop