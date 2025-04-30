<?php

use App\Http\Controllers\Web\V1\CommentController;
use Illuminate\Support\Facades\Route;


Route::prefix('comment')->name('v1.comment.')->controller(CommentController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name(name: 'store');
    Route::get('/create', 'create')->name(name: 'create');
    Route::get('/{project}', 'edit')->name('edit');
    Route::put('/{project}', 'update')->name('update');
    Route::delete('/{project}', 'destroy')->name('destroy');
});

