@extends('layout')
@section('content')
<div class="card">
    <div class="card__title">
        <h2>{{ View::trans($card->title['ru'], $card->title['en']) }}</h2>
    </div>

    <div class="card__description">
        <p>{{ View::trans($card->description['ru'], $card->description['en']) }}</p>
    </div>

    <div class="card__images-collection">
        @foreach($card->attachment as $attachment)
            <img src="{{ $attachment->url() }}" alt="">
        @endforeach
    </div>
</div>
@endsection
