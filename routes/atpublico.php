<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtPublico\AtPublicoController;

Route::get('', [AtPublicoController::class, 'index'])->name('indexAtPublico');
Route::get('/create', [AtPublicoController::class, 'create'])->name('createAtPublico');
Route::post('', [AtPublicoController::class, 'store'])->name('storeAtPublico');
Route::get('/edit', [AtPublicoController::class, 'edit'])->name('editAtPublico'); 
Route::get('/show', [AtPublicoController::class, 'show'])->name('showAtPublico');
