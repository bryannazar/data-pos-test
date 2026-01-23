<?php

use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and custom prefix applied to all routes
 *
 * @see \App\Providers\Route::register
 */

Route::admin('invoice-cai', function () {
    Route::get('fiscal', 'SettingsController@edit')->name('edit');
    Route::patch('fiscal', 'SettingsController@update')->name('update');
}, [
    'prefix' => 'settings/invoices',
    'as'     => 'settings.invoices.fiscal.',
]);
