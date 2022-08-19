<?php

namespace App\Http\Controllers\OfCitaciones;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfCitacionesController extends Controller
{
    public function index(){
        return view('ofcitaciones.index');
    } 

    public function create(){
        return view('ofcitaciones.create');
    }   

    public function edit(){
                return view('ofcitaciones.edit');
    }   

    public function show(){
                return view('ofcitaciones.show');
    }   

    public function store(Request $request){

        return to_route('indexOfCitaciones');
        return redirect()->route('indexOfCitaciones');
        return $request; //esto para verificar lo que se envia 
    }   

}
