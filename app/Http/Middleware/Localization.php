<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->route('locale');

        if (!in_array($locale, config('app.locales'))) {
            return redirect()->route(
                Route::currentRouteName(),
                array_merge($request->all(), ['locale' => $request->session()->get('locale') ?? config('app.locale')]));
        }

        URL::defaults(['locale' => $locale]);
        $request->session()->put('locale', $locale);

        $request->setLocale($locale);
        App::setLocale($locale);

        return $next($request);
    }
}
