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
    Route::get('/', function () {
        return view('page.home');
    })->name('home');
    Route::get('/about-us', function () {
        return view('page.about');
    })->name('about');
    Route::get('/objects', function () {
        return view('page.objects');
    })->name('objects');
    Route::get('/contacts', function () {
       return view('page.contacts');
    })->name('contacts');
});
