<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ayuda\AyudaController;

Route::get('', [AyudaController::class, 'index'])->name('indexAyuda');
Route::get('/create', [AyudaController::class, 'create'])->name('createAyuda');
Route::post('', [AyudaController::class, 'store'])->name('storeAyuda');
Route::get('/edit', [AyudaController::class, 'edit'])->name('editAyuda'); 
Route::get('/show', [AyudaController::class, 'show'])->name('showAyuda');
