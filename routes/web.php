<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasController;
use App\Http\Controllers\BrandTasController;
use App\Http\Controllers\KoleksiTasController;

// Halaman utama menampilkan daftar produk tas
Route::get('/', [TasController::class, 'index'])->name('produk-tas.index');

// CRUD manual untuk produk tas
Route::get('/produk-tas/create', [TasController::class, 'create'])->name('produk-tas.create');
Route::post('/produk-tas', [TasController::class, 'store'])->name('produk-tas.store');
Route::get('/produk-tas/{tas}/edit', [TasController::class, 'edit'])->name('produk-tas.edit');
Route::put('/produk-tas/{tas}', [TasController::class, 'update'])->name('produk-tas.update');
Route::delete('/produk-tas/{tas}', [TasController::class, 'destroy'])->name('produk-tas.destroy');

// Resource untuk brand dan koleksi tas
Route::resource('brand-tas', BrandTasController::class);
Route::resource('koleksi-tas', KoleksiTasController::class);
