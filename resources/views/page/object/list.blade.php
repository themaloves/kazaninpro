@extends('layout')
@section('title', 'Объекты')
@section('content')
    <section class="list">
        @include('layout.header')
        @include('parts.menu-categories.menu-categories')
    </section>
@endsection
