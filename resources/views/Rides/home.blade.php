<x-app-layout> <!-- Vista de inicio de Rides -->
    <section class="titulos">
        <h2 class="titles">Search rides</h2>
    </section>

    <div class="search-box">
        <form action="{{ route('myRides') }}" method="GET" class="form-inline">
            <div class="form-row">
                <label>From</label>
                <select name="from">
                    <option>Quesada</option>
                    <option>Aguas Zarcas</option>
                </select>

                <label>To</label>
                <select name="to">
                    <option>Zarcero</option>
                    <option>Alajuela</option>
                </select>

                <button class="my-button">Find rides</button>
            </div>
            <div class="form-row">
                <label>Days</label>
                @foreach (['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] as $day)
                    <label><input type="checkbox" name="days[]" value="{{ $day }}" checked>
                        {{ $day }}</label>
                @endforeach
            </div>
        </form>
    </div>

    <div class="results">
        <p>
            Rides found from <strong><em>Quesada</em></strong> to <strong><em>Zarcero</em></strong>
        </p>

        <table>
            <thead>
                <tr>
                    <th>Driver</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Seats</th>
                    <th>Car</th>
                    <th>Fee</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{ asset('imagenes/user-icon.png') }}" class="user-icon"> YunMarti</td>
                    <td><a href="#">Quesada</a></td>
                    <td>Alajuela</td>
                    <td>2</td>
                    <td>Nissan Pathfinder 2015</td>
                    <td>$5</td>
                    <td><a href="{{ route('rideDetails') }}">Request</a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('imagenes/user-icon.png') }}" class="user-icon"> Nabarca</td>
                    <td><a href="#">Quesada</a></td>
                    <td>Naranjo</td>
                    <td>1</td>
                    <td>Toyota Corolla 2020</td>
                    <td>$10</td>
                    <td><a href="{{ route('rideDetails') }}">Request</a></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('imagenes/user-icon.png') }}" class="user-icon"> Maricu</td>
                    <td><a href="#">Aguas Zarcas</a></td>
                    <td>Naranjo</td>
                    <td>1</td>
                    <td>Ford Festiva 1990</td>
                    <td>--</td>
                    <td><a href="{{ route('rideDetails') }}">Request</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="map-box">
        <img src="{{ asset('imagenes/imgMapa.png') }}" alt="Map" class="map-img">
    </div>
</x-app-layout>
