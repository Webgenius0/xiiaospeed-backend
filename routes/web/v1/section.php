<?php

use App\Http\Controllers\Web\V1\AboutController;
use App\Http\Controllers\Web\V1\DesignController;
use Illuminate\Support\Facades\Route;

Route::prefix('about')->name('v1.about.')->controller(AboutController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::prefix('design')->name('v1.design.')->controller(DesignController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});
