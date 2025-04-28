<?php

use App\Http\Controllers\Web\V1\AboutController;
use Illuminate\Support\Facades\Route;

Route::prefix('about')->name('v1.about.')->controller(AboutController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});
