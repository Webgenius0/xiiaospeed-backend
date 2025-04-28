<?php

use App\Http\Controllers\Web\V1\AboutController;
use App\Http\Controllers\Web\V1\BrandController;
use App\Http\Controllers\Web\V1\DesignController;
use App\Http\Controllers\Web\V1\DevelopController;
use App\Http\Controllers\Web\V1\IntroController;
use App\Http\Controllers\Web\V1\MarketController;
use App\Http\Controllers\Web\V1\SectionController;
use App\Http\Controllers\Web\V1\SupportController;
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

Route::prefix('brand')->name('v1.brand.')->controller(BrandController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::prefix('develop')->name('v1.develop.')->controller(DevelopController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::prefix('market')->name('v1.market.')->controller(MarketController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::prefix('support')->name('v1.support.')->controller(SupportController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});


Route::prefix('section')->name('v1.section.')->controller(SectionController::class)
->group(function () {
    Route::delete('/{section}', 'destroyImage')->name('delete.image');
});


Route::prefix('introduction')->name('v1.introduction.')->controller(IntroController::class)
->group(function () {
    Route::get('/', 'show')->name('show');
    Route::post('/', 'store')->name('store');
});
