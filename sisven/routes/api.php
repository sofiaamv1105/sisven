<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\PayModeController;
use App\Http\Controllers\api\CustomerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

Route::get('/pay_modes', [PayModeController::class, 'index'])->name('pay_modes');
Route::post('/pay_modes', [PayModeController::class, 'store'])->name('pay_modes.store');
Route::delete('/pay_modes/{pay_mode}', [PayModeController::class, 'destroy'])->name('pay_modes.destroy');
Route::get('/pay_modes/{pay_mode}', [PayModeController::class, 'show'])->name('pay_modes.show');
Route::put('/pay_modes/{pay_mode}', [PayModeController::class, 'update'])->name('pay_modes.update');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');