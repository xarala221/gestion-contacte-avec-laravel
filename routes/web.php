<?php


use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::controller(ContactController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/contact/create', 'create');
    Route::get('/contact/{id}', 'show');
    Route::get('/contact/{id}/edit', 'edit');


    Route::post('/contact', 'store');
    Route::patch('/contact/{id}', 'update');
    Route::delete('/contact/{id}', 'destroy');

});
