<x-app-layout> <!-- Vista para agregar un nuevo viaje -->
    <p class="titles">New Ride</p>

    <form action="{{ route('bookings') }}" method="GET" class="form-container">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label>Departure from</label>
                <input type="text" name="origin" id="origin" required>
            </div>
            <div class="form-group">
                <label>Arrive to</label>
                <input type="text" name="destination" id="destination" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Days</label>
                <div class="form-row">
                    <input type="checkbox" name="days[]" value="Monday"> Mon
                    <input type="checkbox" name="days[]" value="Tuesday"> Tue
                    <input type="checkbox" name="days[]" value="Wednesday"> Wed
                    <input type="checkbox" name="days[]" value="Thursday"> Thu
                    <input type="checkbox" name="days[]" value="Friday"> Fri
                    <input type="checkbox" name="days[]" value="Saturday"> Sat
                    <input type="checkbox" name="days[]" value="Sunday"> Sun
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Time</label>
                <input type="time" name="time" id="time" required>
            </div>
            <div class="form-group">
                <label>Seats</label>
                <input type="number" name="seats" id="seats" min="1" max="6" required>
            </div>
            <div class="form-group">
                <label>Fee</label>
                <input type="number" name="fee" id="fee" min="0" step="0.01" required>
            </div>
        </div>
        <div class="form-group">
            <label>Vehicle Details</label>
            <div class="container">
                <div class="form-row">
                    <div class="form-group">
                        <label>Make</label>
                        <input list="lista-marcas" id="marcas" name="marcas"> 
                        <datalist id="lista-marcas">  <!-- Combo box de marcas -->
                            <option value="Nissan">
                            <option value="Toyota">
                            <option value="Hyundai">
                            <option value="Isuzu">
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" id="model" required>
                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" name="year" id="year" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <a href="{{ route('myRides') }}">Cancel</a>
            <button type="submit" class="my-button">Create</button>
        </div>
    </form>
</x-app-layout>
