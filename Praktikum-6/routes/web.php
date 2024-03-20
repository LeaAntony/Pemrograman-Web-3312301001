<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ListProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list_product/{id}/{nama}', [ListProductController::class, 'tampilkan']);
Route::get('/list_product', [ListProductController::class, 'tampilkan']);