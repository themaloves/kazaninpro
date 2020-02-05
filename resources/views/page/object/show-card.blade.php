@extends('layout')
@section('content')

<div class="card-show">

    @include('layout.header')

    <div class="card-show__items">

        <div class="card-show__item">

            <div class="card-show__column">

                <h2 class="card-show__title">{{ View::trans($card->title['ru'], $card->title['en']) }}</h2>

                <p class="card__description">{{ View::trans($card->description['ru'], $card->description['en']) }}</p>

                <p>{{ View::trans($card->address['ru'], $card->address['en']) }}</p>

            </div>


        </div>
        <div class="card-show__item">
            <div class="card-show__picture-collection">
                @foreach($card->attachment as $attachment)
                    <img class="card-show__image" src="{{ $attachment->url() }}" alt="">
                @endforeach
            </div>

            <div class="card-show__background"></div>
        </div>


    </div>
</div>
@endsection
