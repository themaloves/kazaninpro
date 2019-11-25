@extends('layout')

@section('content')
    <section class="contacts">

        <div class="contacts__background"></div>

        <div class="contacts__director">
            <h1>{{ __('contacts.director.name') }}</h1>
            <p>
                {{ __('contacts.director.last-name') }}
                {{ __('contacts.director.first-name') }}
                {{ __('contacts.director.middle-name') }}
                <br>
                {{ __('contacts.director.tel') }}
            </p>

        </div>

        <div class="contacts__engineer">
            <h1>{{ __('contacts.engineer.name') }}</h1>
            <p>
                {{ __('contacts.engineer.last-name') }}
                {{ __('contacts.engineer.first-name') }}
                {{ __('contacts.engineer.middle-name') }}
                <br>
                {{ __('contacts.engineer.tel') }}
            </p>
        </div>

        <div class="contacts__address">
            <h1>{{ __('contacts.address.name') }}</h1>
            <p>
                {{ __('contacts.address.location') }},
                <br>
                {{ __('contacts.address.street') }}
            </p>
        </div>

        <div class="contacts__email">
            <h1>{{ __('contacts.mail.name') }}</h1>
            <p>
                {{ __('contacts.mail.email') }}
            </p>
        </div>

    </section>
@endsection