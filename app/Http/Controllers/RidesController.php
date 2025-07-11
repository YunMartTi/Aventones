<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RidesController extends Controller
{

    public function welcome()
    {
        // Logic to retrieve and return rides
        return view('welcome');
    }
    public function login()
    {
        // Logic to retrieve and return rides
        return view('ingresoUsuarios.login');
    }
    public function bookings()
    {
        // Logic to retrieve and return bookings
        return view('Rides.bookings');
    }
    public function myRides(){
        // Logic to retrieve and return user's rides
        return view('Rides.myRides');
    }
    public function addRide()
    {
        // Logic to show the form for adding a ride
        return view('Rides.AddRide');
    }
    public function confBio(){
        return view('perfil.configuracion');
    }
}
