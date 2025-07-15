<x-app-layout>
    <br>
    <br>
    <div class="login-container">
        <section class="titulos">
            <img src="{{ asset('imagenes/googleIcon.png') }}" alt="User" class="google-icon">
            <strong><a href="https://google.com">Sign in with Google</a></strong>
            <strong>
                <p>Or</p>
            </strong>
        </section>

        <form action="{{ route('bookings') }}" method="GET">
            @csrf
            <div class="form">
                <p>Username</p>
                <input type="text" name="username" id="username">
                <p>Password</p>
                <input type="password" name="password" id="password">
            </div>
            <br>
            <p>Not a user? <a href="{{ route('register') }}">Register Now</a></p>
            <button class="my-button">Login</button>
        </form>
    </div>
</x-app-layout>
