<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produk-tas', function () {
    return view('produk-tas.index', ['title' => 'tas']);
});

Route::get('produk-tas/create', function () {
    return view('produk-tas.create', ['title' => ' create tas']);
});
