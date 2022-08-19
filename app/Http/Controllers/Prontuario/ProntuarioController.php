<?php

namespace App\Http\Controllers\Prontuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class ProntuarioController extends Controller
{
    public function index(){
        return view('prontuario.index');
    } 

    public function mostrarProntuario(){
        return view('prontuario.mostrar');
    } 

}
