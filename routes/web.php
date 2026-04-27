<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasController;

Route::resource('produk-tas', TasController::class);




    Route::get('/', [TasController::class, 'index'])->name('produk-tas.index');
    Route::get('/produk-tas/create', [TasController::class, 'create'])->name('produk-tas.create');
    Route::post('/produk-tas', [TasController::class, 'store'])->name('produk-tas.store');
    Route::get('/produk-tas/{tas}/edit', [TasController::class, 'edit'])->name('produk-tas.edit');
    Route::put('/produk-tas/{tas}', [TasController::class, 'update'])->name('produk-tas.update');

