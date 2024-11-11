<?php

use App\Http\Controllers\ProdController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('prod/create', [ProdController::class, 'create'])->name('prod.create');
Route::post('prod/store', [ProdController::class, 'store'])->name('prod.store');