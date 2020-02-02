@extends('layout')

@section('title', 'Главная')

@section('content')
    <section class="preview">

        @include('layout.header')

        <div class="preview__company inner-content">

            <h1 class="preview__title">{{ __('home.company-name') }}</h1>

            <ul class="preview__items">
                <li class="preview__item iteration-lists">{{ __('home.company-description.inspection-of-buildings-and-structures') }}</li>
                <li class="preview__item iteration-lists">{{ __('home.company-description.reinforcement-overhaul-and-reconstruction') }}</li>
                <li class="preview__item iteration-lists">{{ __('home.company-description.designing-new-facilities') }}</li>
            </ul>

        </div>

        <div class="preview__localization inner-content">

            <div class="language">

                <div class="language__item">
                    <a class="link--default" href="{{ route('home', ['locale' => 'en']) }}">EN</a>
                </div>
                <div class="language__item">
                    <a class="link--default" href="{{ route('home', ['locale' => 'ru']) }}">RU</a>
                </div>

            </div>

            <div class="anchor">

                <button class="anchor__button">
                    <i class="fas fa-chevron-down"></i>
                </button>

            </div>

            <div class="spacer"></div>
        </div>

    </section>

    @include('parts.menu-categories.menu-categories')
@endsection
