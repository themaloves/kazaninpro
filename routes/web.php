<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LocalizationController@redirect');
Route::get('admin', 'Orchid\Platform\Http\Controllers\Systems\IndexController@index')
    ->name('platform.index')->middleware('platform');

Route::prefix('{locale}')->middleware('localization')->group(function () {
    Route::view('/', 'page.home')->name('home');
    Route::view('/about-us', 'page.about')->name('about');
    Route::view('/contacts', 'page.contacts')->name('contacts');

    Route::prefix('objects')->name('object.')->group(function () {
        Route::view('/', 'page.object.list')->name('list');
        Route::get('{object}', 'ObjectController@show')->name('show');
        Route::get('{object}/{card}', 'ObjectController@showCard')->name('show-card');
    });
});
