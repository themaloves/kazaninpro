@section ('title', 'О нас')

@extends('layout')

@section('content')
    <section class="about-us">

        @include('layout.header')

        @include('parts.column-top.column-top')

        @include('parts.column-bottom.column-bottom')

        @include('parts.geography-projects.geography-projects')

        @include('parts.direction-activity.direction-activity')

{{--        <span class="about-us__page-decor">О нас</span>--}}

{{--


{{--        <div class="our-clients">--}}
{{--            <div class="our-clients__title">--}}
{{--                <h1 class="heading--normal-size">Наши Клиенты</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

    </section>
@endsection
