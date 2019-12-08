<?php

namespace App\Foundation;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RedirectFormRequest extends FormRequest
{
    protected function failedAuthorization()
    {
        abort(403);
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->back()
                ->withInput(request()->all())
                ->withErrors($validator->errors())
        );
    }
}
