<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman Products dengan route prefix untuk berbagai kategori

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'index'])->defaults('category', 'food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'index'])->defaults('category', 'beauty-health');
    Route::get('/home-care', [ProductController::class, 'index'])->defaults('category', 'home-care');
    Route::get('/baby-kid', [ProductController::class, 'index'])->defaults('category', 'baby-kid');
});

// Halaman User dengan route parameter
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

// Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index']);
