<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategorieController::class, 'index'])->name('hmoe');


Route::resource('categories', CategorieController::class);
Route::resource('products', ProductController::class);
