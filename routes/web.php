<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/tambah-produk', [PageController::class, 'tambahProduk'])->name('tambah-produk');
