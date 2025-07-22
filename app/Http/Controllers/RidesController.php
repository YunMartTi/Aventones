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
    public function bookings()
    {
        // Logic to retrieve and return bookings
        return view('Rides.bookings');
    }
    public function myRides()
    {
        // Logic to retrieve and return user's rides
        return view('Rides.myRides');
    }
    public function addRide()
    {
        // Logic to show the form for adding a ride
        return view('Rides.AddRide');
    }
    public function confBio()
    {
        return view('perfil.configuracion');
    }
    public function home()
    {
        return view('rides.home');
    }
    public function editRide()
    {
        return view('Rides.edit');
    }
    public function details()
    {
        return view('Rides.details');
    }
}
