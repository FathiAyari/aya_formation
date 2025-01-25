<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategorieController::class, 'index'])->name('hmoe');


Route::resource('categories', CategorieController::class);
