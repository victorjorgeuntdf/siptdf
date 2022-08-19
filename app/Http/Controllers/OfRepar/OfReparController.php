<?php

namespace App\Http\Controllers\OfRepar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfReparController extends Controller
{
    public function index(){
        return view('ofrepar.index');
    } 

    public function create(){
        return view('ofrepar.create');
    }   

    public function edit(){
                return view('ofrepar.edit');
    }   

    public function show(){
                return view('ofrepar.show');
    }   

    public function store(Request $request){

        return to_route('indexOfRepar');
        return redirect()->route('indexOfRepar');
        return $request; //esto para verificar lo que se envia 
    } 
}
