@extends('layout')

@section('content')
    <section class="preview">


        <div class="preview__background"></div>

        <div class="preview__company">

            <h1 class="heading--big-size">{{ __('home.company-name') }}</h1>

            <ul>
                <li>{{ __('home.company-description.inspection-of-buildings-and-structures') }}</li>
                <li>{{ __('home.company-description.reinforcement-overhaul-and-reconstruction') }}</li>
                <li>{{ __('home.company-description.designing-new-facilities') }}</li>
            </ul>

        </div>

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

    </section>

    @include('parts.menu-categories.menu-categories')
@endsection
