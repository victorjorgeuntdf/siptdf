<?php

namespace App\Http\Controllers\AtPublico;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AtPublicoController extends Controller
{
    public function index(){
        return view('atpublico.index');
    } 

    public function create(){
        return view('atpublico.create');
    }   

    public function edit(){
                return view('atpublico.edit');
    }   

    public function show(){
                return view('atpublico.show');
    }   

    public function store(Request $request){

        return to_route('indexAtPublico');
        return redirect()->route('indexAtPublico');
        return $request; //esto para verificar lo que se envia 
    }   
}
