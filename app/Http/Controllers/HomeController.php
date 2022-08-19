<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        $personas = Persona::all();
        $usuarios = User::all();
        //return $usuarios;
        return view('welcome');
    }
}
