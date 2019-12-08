<?php

namespace App\Orchid\Layouts;

use App\Models\Card;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CardListLayout extends Table
{
    /**
     * Data source.
     *
     * @var string
     */
    protected $target = 'cards';

    /**
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('object'),
            TD::set('title.ru', 'Title RU'),
            TD::set('title.en', 'Title EN'),
            TD::set('Action')->render(function (Card $card) {
                return Link::make('Edit')
                    ->icon('icon-pencil')
                    ->route('platform.card.edit', $card->id);
            }),
        ];
    }
}
