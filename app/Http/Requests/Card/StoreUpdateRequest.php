<?php

namespace App\Http\Requests\Card;

use App\Foundation\RedirectFormRequest;
use App\Helpers\ObjectHelper;
use Illuminate\Validation\Rule;

class StoreUpdateRequest extends RedirectFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card.object' => [
                'required', Rule::in(array_keys(ObjectHelper::OBJECTS)),
            ],

            'card.images' => 'nullable|array',
            'card.title.ru' => 'required|string',
            'card.title.en' => 'required|string',

            'card.description.ru' => 'required|string',
            'card.description.en' => 'required|string',

            'card.address.ru' => 'required|string',
            'card.address.en' => 'required|string',
        ];
    }
}
