<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aventones</title>
    
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <br>
    <br>
    <img src="{{ asset('imagenes/logoAventones.png') }}" alt="Logo">

   @if (!request()->routeIs('welcome') && !request()->routeIs('register'))
    <nav class="navbar">
    <ul class="navbar-menu">
        <li><a href="{{ route('myRides') }}" class="{{ request()->routeIs('myRides') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('myRides') }}" class="{{ request()->routeIs('myRides') ? 'active' : '' }}">Rides</a></li>
        <li><a href="{{ route('myRides') }}" class="{{ request()->routeIs('myRides') ? 'active' : '' }}">Bookings</a></li>
        <li>
            <input type="text" placeholder="Search..." class="search-bar">
        </li>
        <li class="dropdown">
            <img src="{{ asset('imagenes/user-icon.png') }}" alt="User" class="user-icon">
            <ul class="dropdown-menu">
                <li><a href="{{ route('welcome') }}">Logout</a></li>
                <li><a href="{{ route('editProfile') }}">Profile</a></li>
                <li><a href="{{ route('biografia') }}">Configuration</a></li>
            </ul>
        </li>
    </ul>
</nav>

@endif


    
    <div class="titulos">
        {{ $slot }}
    </div>
    <footer>
        <p>
            <a href="#">Home</a> | 
            <a href="#">Rides</a> | 
            <a href="#">Bookings</a> | 
            <a href="#">Settings</a> | 
            <a href="#">Login</a> | 
            <a href="#">Register</a>
        </p>
        <p>© Aventones.com</p>
    </footer>
</body>
</html>