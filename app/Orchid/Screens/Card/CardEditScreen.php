<?php

namespace App\Orchid\Screens\Card;

use App\Helpers\ObjectHelper;
use App\Http\Requests\Card\StoreUpdateRequest;
use App\Models\Card;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class CardEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create new card';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = '';

    /**
     * Determine of exists the entity.
     *
     * @var bool $exists
     */
    protected $exists = false;

    /**
     * Query data.
     *
     * @param Card $card
     * @return array
     */
    public function query(Card $card): array
    {
        $this->exists = $card->exists;

        if ($this->exists) {
            $card->load('attachment');
            $this->name = 'Edit new card';
        }

        return compact('card');
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('List')
                ->icon('icon-list')
                ->route('platform.card.list'),

            Button::make('Create card')
                ->icon('icon-pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Update')
                ->icon('icon-note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Remove')
                ->icon('icon-trash')
                ->method('remove')
                ->canSee($this->exists),
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
            Layout::rows([
                Select::make('card.object')
                    ->options(array_combine(
                        array_keys(ObjectHelper::OBJECTS),
                        collect(ObjectHelper::OBJECTS)->pluck('title')->all()
                    ))
                    ->required(),

                Upload::make('card.attachment')
                    ->acceptedFiles('image/*')
                    ->media()
                    ->multiple(),

                [
                    Input::make('card.title.ru')
                        ->title('Title RU'),

                    Input::make('card.title.en')
                        ->title('Title EN'),
                ],

                [
                    Input::make('card.description.ru')
                        ->title('Description RU'),

                    Input::make('card.description.en')
                        ->title('Description EN'),
                ],

                [
                    Input::make('card.address.ru')
                        ->title('Address RU'),

                    Input::make('card.address.en')
                        ->title('Address EN'),
                ],
            ]),
        ];
    }

    /**
     * @param Card $card
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Card $card, StoreUpdateRequest $request)
    {
        $data = $request->validated()['card'];
        unset($data['images']);
        $card->fill($data)->save();

        $card->attachment()->sync(
            $request->input('card.attachment', [])
        );

        Alert::info('You have successfully created an card.');

        return redirect()->route('platform.card.list');
    }

    /**
     * @param Card $card
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Card $card)
    {
        $card->delete()
            ? Alert::info('You have successfully deleted the post.')
            : Alert::warning('An error has occurred');

        return redirect()->route('platform.card.list');
    }
}
