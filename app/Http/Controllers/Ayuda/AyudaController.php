<?php

namespace App\Http\Controllers\Ayuda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function index(){
        return view('ayuda.index');
    } 

    public function create(){
        return view('ayuda.create');
    }   

    public function edit(){
                return view('ayuda.edit');
    }   

    public function show(){
                return view('ayuda.show');
    }   

    public function store(Request $request){

        return to_route('indexAyuda');
        return redirect()->route('indexAyuda');
        return $request; //esto para verificar lo que se envia 
    } 
}
