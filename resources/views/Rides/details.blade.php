<x-app-layout>
    <div class="ride-details-container">
        <h2 class="titles">Ride Details</h2>

        <div class="profile-section">
            <img src="{{ asset('imagenes/user-icon.png') }}" alt="User" class="user-icon">
            <p class="username">YunMarTi</p>
        </div>

        <form action="{{ route('myRides') }}" method="GET">
            @csrf

            <div class="location-row">
                <div>
                    <label>Departure from</label>
                    <strong>Quesada</strong>
                </div>
                <div>
                    <label>Arrive To</label>
                    <strong>Zarcero</strong>
                </div>
            </div>

            <div class="days-row">
                <label>Days</label>
                @foreach (['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] as $day)
                    <label><input type="checkbox" name="days[]" value="{{ $day }}" checked>
                        {{ $day }}</label>
                @endforeach
            </div>

            <div class="inputs-row">
                <div>
                    <label>Time</label>
                    <input type="time" name="time" value="10:00">
                </div>
                <div>
                    <label>Seats</label>
                    <input type="number" name="seats" min="1" value="2">
                </div>
                <div>
                    <label>Fee</label>
                    <input type="number" name="fee" min="0" value="15">
                </div>
            </div>

            <div class="vehicle-box">
                <label>Vehicle Details</label>
                <div class="vehicle-row">
                    <div>
                        <label>Make</label>
                        <input list="car-makes" name="make" value="Nissan">
                        <datalist id="car-makes">
                            <option value="Nissan">
                            <option value="Toyota">
                            <option value="Hyundai">
                            <option value="Kia">
                        </datalist>
                    </div>

                    <div>
                        <label>Model</label>
                        <input type="text" name="model" value="March">
                    </div>

                    <div>
                        <label>Year</label>
                        <input type="number" name="year" value="2020">
                    </div>
                </div>
            </div>

            <div class="buttons-row">
                <a href="{{ route('home') }}" class="cancel-link">Cancel</a>
                <button class="my-button">Request</button>
            </div>
        </form>
    </div>
</x-app-layout>
