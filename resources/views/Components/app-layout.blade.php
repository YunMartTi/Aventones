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
        <ul style="list-style:none; display:flex; gap: 10px;">
            <li><a href="{{ route('bookings') }}">Home</a></li>
            <li><a href="{{ route('myRides') }}">Rides</a></li>
            <li><a href="{{ route('bookings') }}">Bookings</a></li>
            <li><input type="text" placeholder="Search..." class="search-bar"></li>
        </ul>
    </nav>
@endif


    
    <div class="titulos">
        {{ $slot }}
    </div>
</body>
</html>