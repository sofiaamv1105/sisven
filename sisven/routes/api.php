<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{catrgory}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/{catrgory}', [CategoryController::class, 'show'])->name('categories.show');
Route::put('/categories/{catrgory}', [CategoryController::class, 'update'])->name('categories.update');