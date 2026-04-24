<?php

use App\Http\Controllers\TasController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
 Route::get('/produk-tas', [TasController::class, 'index']);
 Route::get('/produk-tas/create', [TasController::class, 'create']);


