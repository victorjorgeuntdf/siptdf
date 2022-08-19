<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Prontuario\ProntuarioController;
use App\Http\Livewire\Prontuario\CreateProntuario;
use App\Http\Livewire\Prontuario\EditProntuario;
use App\Http\Livewire\Prontuario\ShowProntuarios;

Route::get('', [ProntuarioController::class, 'index'])->name('indexProntuario');
Route::post('', [ProntuarioController::class, 'store'])->name('storeProntuario');
Route::get('/create', CreateProntuario::class)->name('createProntuario');
//Route::get('/create', [ProntuarioController::class, 'create'])->name('createProntuario');
Route::get('/show', ShowProntuarios::class)->name('showProntuarios');
//Route::get('/show', [ProntuarioController::class, 'show'])->name('showProntuario');
Route::get('/{persona}/edit', EditProntuario::class)->name('editProntuario');
//Route::get('/edit', [ProntuarioController::class, 'edit'])->name('editProntuario'); 

