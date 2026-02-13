<?php

use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and 'blog-test2' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('blog-test2', function () {
    Route::get('/', 'Main@index')->name('index');
});
