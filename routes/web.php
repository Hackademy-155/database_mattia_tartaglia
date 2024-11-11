<?php

use App\Http\Controllers\ProdController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('game/create', [ProdController::class, 'create'])->name('game.create');
Route::post('/game/store', [ProdController::class, 'store'])->name('game.store');