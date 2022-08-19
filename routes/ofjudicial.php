<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfJudicial\OfJudicialController;

Route::get('', [OfJudicialController::class, 'index'])->name('indexOfJudicial');
Route::get('/create', [OfJudicialController::class, 'create'])->name('createOfJudicial');
Route::post('', [OfJudicialController::class, 'store'])->name('storeOfJudicial');
Route::get('/edit', [OfJudicialController::class, 'edit'])->name('editOfJudicial'); 
Route::get('/show', [OfJudicialController::class, 'show'])->name('showOfJudicial');
