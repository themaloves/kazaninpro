{{--<h1>{{ $title }}</h1>--}}
@extends('layout')
@section('content')
<div class="collection-object">

    <div class="collection-object__background-wrap"></div>

    @foreach($cards as $card)

        <a class="collection-object__items" href="{{ route('object.show-card', ['object' => $card->object, 'card' => $card->id]) }}">

            <div class="collection-object__background">
                @if($card->attachment->count() > 0)
                    <img src="{{ $card->attachment->first()->url() }}" alt="">
                @endif
            </div>

            <div class="collection-object__wrap">

                <span class="collection-object__title">
                    {{ View::trans($card->title['ru'], $card->title['en']) }}
                </span>

                <span class="collection-object__description">
                    {{ View::trans($card->description['ru'], $card->description['en']) }}
                </span>

                <span class="collection-object__address">
                    {{ View::trans($card->address['ru'], $card->address['en']) }}
                </span>

            </div>
        </a>

    @endforeach

</div>
@endsection
