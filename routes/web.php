<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasController;

Route::resource('produk-tas', TasController::class);




    Route::get('/', [TasController::class, 'index'])->name('index');
    Route::get('/create', [TasController::class, 'create'])->name('create');
    Route::post('/store', [TasController::class, 'store'])->name('store');

