<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class ViewHelper extends View
{
    // key is route name
    // value is custom class
    public const HEADER_CLASSES = [
        'about' => '--black',
    ];

    public const DEFAULT_HEADER_CLASS = '--default-color';


    /**
     * Get header class by current route name.
     *
     * @return string
     */
    public static function getHeaderClass(): string
    {
        return self::HEADER_CLASSES[Route::currentRouteName()] ?? self::DEFAULT_HEADER_CLASS;
    }

    /**
     * Returns a string depends on locale.
     *
     * @param string $ru
     * @param string $en
     * @return string
     */
    public static function trans(string $ru, string $en): string
    {
        return App::getLocale() === 'ru' ? $ru : $en;
    }
}
