@section ('title', 'О нас')

@extends('layout')

@section('content')
    <section class="about-us">

        @include('layout.header')

        @include('parts.column-top.column-top')

        @include('parts.column-bottom.column-bottom')

        @include('parts.geography-projects.geography-projects')

        @include('parts.direction-activity.direction-activity')

        @include('parts.our-clients.our-clients')

{{--        <span class="about-us__page-decor">О нас</span>--}}

    </section>
@endsection
