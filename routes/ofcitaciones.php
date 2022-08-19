<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfCitaciones\OfCitacionesController;

Route::get('', [OfCitacionesController::class, 'index'])->name('indexOfCitaciones');
Route::get('/create', [OfCitacionesController::class, 'create'])->name('createOfCitaciones');
Route::post('', [OfCitacionesController::class, 'store'])->name('storeOfCitaciones');
Route::get('/edit', [OfCitacionesController::class, 'edit'])->name('editOfCitaciones'); 
Route::get('/show', [OfCitacionesController::class, 'show'])->name('showOfCitaciones');
