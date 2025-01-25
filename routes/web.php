<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategorieController::class, 'index'])->name('home');


Route::resource('categories', CategorieController::class);
