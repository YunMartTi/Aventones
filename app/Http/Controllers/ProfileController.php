<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function register()
    {
        return view('perfil.registro');
    }
    public function editar(){
        return view('perfil.editar');
    }
}
