<?php

use App\Http\Controllers\Web\V1\ProjectController;
use Illuminate\Support\Facades\Route;


Route::prefix('project')->name('v1.project.')->controller(ProjectController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name(name: 'store');
    Route::get('/{project}', 'edit')->name('edit');
    Route::put('/{project}', 'update')->name('update');
    Route::delete('/{project}', 'destroy')->name('destroy');
});

