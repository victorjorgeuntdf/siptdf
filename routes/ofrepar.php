<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfRepar\OfReparController;

Route::get('', [OfReparController::class, 'index'])->name('indexOfRepar');
Route::get('/create', [OfReparController::class, 'create'])->name('createOfRepar');
Route::post('', [OfReparController::class, 'store'])->name('storeOfRepar');
Route::get('/edit', [OfReparController::class, 'edit'])->name('editOfRepar'); 
Route::get('/show', [OfReparController::class, 'show'])->name('showOfRepar');
