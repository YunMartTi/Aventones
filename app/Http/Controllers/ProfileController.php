<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function register()
    {
        // Logic to handle user registration
        return view('perfil.registro');
    }
}
