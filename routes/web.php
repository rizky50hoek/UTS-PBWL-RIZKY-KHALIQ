<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/produk', [PageController::class, 'produk']);
Route::get('/tambah-produk', [PageController::class, 'tambahProduk']);
