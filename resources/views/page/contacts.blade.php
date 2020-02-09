@extends('layout')

@section('title', 'Контакты')

@section('content')
    <section class="contacts">

        @include('layout.header')

        <div class="contacts__items inner-content">

                <div class="contacts__item">
                    <h1 class="contacts__title">{{ __('contacts.director.name') }}</h1>
                    <p class="contacts__description">
                        {{ __('contacts.director.last-name') }}
                        {{ __('contacts.director.first-name') }}
                        {{ __('contacts.director.middle-name') }}
                        <br>
                        <a href="tel:+79172303109"
                           class="contacts__description">{{ __('contacts.director.tel') }}
                        </a>
                    </p>

                </div>

                <div class="contacts__item">
                    <h1 class="contacts__title">{{ __('contacts.engineer.name') }}</h1>
                    <p class="contacts__description">
                        {{ __('contacts.engineer.last-name') }}
                        {{ __('contacts.engineer.first-name') }}
                        {{ __('contacts.engineer.middle-name') }}
                        <br>
                        <a href="tel:+79172874466"
                           class="contacts__description">{{ __('contacts.engineer.tel') }}
                        </a>
                    </p>
                </div>

                <div class="contacts__item">
                    <h1 class="contacts__title">{{ __('contacts.address.name') }}</h1>
                    <p class="contacts__description">
                        {{ __('contacts.address.location') }},
                        <br>
                        {{ __('contacts.address.street') }}
                    </p>
                </div>

                <div class="contacts__item">
                    <h1 class="contacts__title">{{ __('contacts.mail.name') }}</h1>
                    <a href="mailto:kazaninpro@mail.ru" class="contacts__description">
                        {{ __('contacts.mail.email') }}
                    </a>
                </div>

        </div>

        <div class="spacer"></div>

    </section>
@endsection
