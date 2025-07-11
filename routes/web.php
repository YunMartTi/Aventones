<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RidesController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\ProfileController;

Route::get('/', [RidesController::class, 'welcome'])->name('welcome');
Route::get('/bookings', [RidesController::class, 'bookings'])->name('bookings');
Route::get('/login', [RidesController::class, 'login'])->name('login');
Route::get('/my-rides',[RidesController::class, 'myRides'])->name('myRides');
Route::get('/register', [ProfileController::class, 'register'])->name('register');
Route::get('/rides/add', [RidesController::class, 'addRide'])->name('addRide');