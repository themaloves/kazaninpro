<?php

namespace App\Http\Controllers;

use App\Helpers\ObjectHelper;
use App\Models\Card;

class ObjectController extends Controller
{
    public function show($locale, $object)
    {
        abort_if(!array_key_exists($object, ObjectHelper::OBJECTS), 404);

        $cards = Card::query()
            ->with(['attachment'])
            ->where('object', $object)
            ->get();

        return view('page.object.show')
            ->with(ObjectHelper::OBJECTS[$object])
            ->with(compact('cards'));
    }

    public function showCard($locale, $object, Card $card)
    {
        abort_if($card->object !== $object, 404);

        return view('page.object.show-card')
            ->with(compact('card'));
    }
}
