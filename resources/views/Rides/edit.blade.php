<x-app-layout>
    <p class="titles">New Ride</p>
    <form action="{{ route('bookings') }}" method="GET" class="form-container">
        @csrf
        <div class="form-row">
            <div class="form-group">
                <label>Departure from</label>
                <input type="text" name="origin" id="origin" value="Quesada" required>
            </div>
            <div class="form-group">
                <label>Arrive to</label>
                <input type="text" name="destination" id="destination" value="Zarcero" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Days</label>
                <div class="form-row">
                    <input type="checkbox" name="days[]" value="Monday" checked> Mon <!-- "checked" para que se carguen marcados -->
                    <input type="checkbox" name="days[]" value="Tuesday" checked> Tue
                    <input type="checkbox" name="days[]" value="Wednesday" checked> Wed
                    <input type="checkbox" name="days[]" value="Thursday" checked> Thu
                    <input type="checkbox" name="days[]" value="Friday" checked> Fri
                    <input type="checkbox" name="days[]" value="Saturday" checked> Sat
                    <input type="checkbox" name="days[]" value="Sunday" checked> Sun
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Time</label>
                <input type="time" name="time" id="time" value="10:00" required> <!-- "required" Requerido -->
            </div>
            <div class="form-group">
                <label>Seats</label>
                <input type="number" name="seats" id="seats" min="1" max="6" value="2"
                    required>
            </div>
            <div class="form-group">
                <label>Fee</label>
                <input type="number" name="fee" id="fee" min="0" step="0.01" value="15.00"
                    required>
            </div>
        </div>
        <div class="form-group">
            <label>Vehicle Details</label>
            <div class="container">
                <div class="form-row">
                    <div class="form-group">
                        <label>Make</label>
                        <input list="lista-marcas" id="marcas" name="marcas" value="Nissan">
                        <datalist id="lista-marcas">
                            <option value="Nissan">
                            <option value="Toyota">
                            <option value="Hyundai">
                            <option value="Isuzu">
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <input type="text" name="model" id="model" value="Pathfinder" required>
                    </div>
                    <div class="form-group">
                        <label>Year</label>
                        <input type="number" name="year" id="year" value="2015" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <a href="{{ route('myRides') }}">Cancel</a>
            <button class="my-button">Save</button>
        </div>
    </form>
</x-app-layout>
