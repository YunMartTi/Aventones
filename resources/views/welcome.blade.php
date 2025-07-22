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
    <div class="login-container">
        <img src="{{ asset('imagenes/logoAventones.png') }}" alt="Logo" class="logo logo-login">
        <section class="titulos">
            <img src="{{ asset('imagenes/googleIcon.png') }}" alt="User" class="google-icon">
            <strong><a href="https://google.com">Sign in with Google</a></strong>
            <strong>
                <p>Or</p>
            </strong>
        </section>

        <form action="{{ route('bookings') }}" method="GET">
            @csrf
            <p class="labels">Username</p>
            <input type="text" name="username" id="username">
            <p class="labels">Password</p>
            <input type="password" name="password" id="password">
            <br>
            <p>Not a user? <a href="{{ route('register') }}">Register Now</a></p>
            <button class="my-button">Login</button>
        </form>
    </div>
</body>

</html>
