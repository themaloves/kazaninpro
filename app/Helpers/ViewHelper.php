<?php

namespace App\Helpers;

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
}