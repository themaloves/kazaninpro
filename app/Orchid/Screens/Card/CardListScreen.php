<?php

namespace App\Orchid\Screens\Card;

use App\Models\Card;
use App\Orchid\Layouts\CardListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CardListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Cards';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = '';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'cards' => Card::query()
                ->orderByDesc('id')
                ->paginate(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Create')
                ->icon('icon-pencil')
                ->route('platform.card.edit'),
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            CardListLayout::class,
        ];
    }
}
