<?php

namespace App\Http\Controllers\OfJudicial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfJudicialController extends Controller
{
    public function index(){
        return view('ofjudicial.index');
    } 

    public function create(){
        return view('ofjudicial.create');
    }   

    public function edit(){
                return view('ofjudicial.edit');
    }   

    public function show(){
                return view('ofjudicial.show');
    }   

    public function store(Request $request){

        return to_route('indexOfJudicial');
        return redirect()->route('indexOfJudicial');
        return $request; //esto para verificar lo que se envia 
    } 
}
