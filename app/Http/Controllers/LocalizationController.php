<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LocalizationController extends Controller
{
    /**
     * Redirect from homepage to homepage with localization variable.
     *
     * @return RedirectResponse
     */
    public function redirect(): RedirectResponse
    {
        return redirect()->route('home', ['ru']);
    }
}