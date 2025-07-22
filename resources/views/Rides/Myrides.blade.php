<x-app-layout>
    <p class="titles">My Rides</p>
    <br>
    <a href="{{ route('addRide') }}" class="my-button margin-left-60">New Ride</a>

    <br>
    <br>
    <div class="content-wrapper">

        <table class="bookings">
            <thead>
                <tr>
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
                    <td><a href=" {{ route('rideDetails') }}">Pital</a></td>
                    <td>Ciudad Quesada</td>
                    <td>3</td>
                    <td>Toyota Corolla</td>
                    <td>$5.00</td>
                    <td>
                        <p><a href="{{ route('editRide') }}">Edit</a> | <a href="#">Delete</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
    