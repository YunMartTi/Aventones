<x-app-layout>
    <p class="titles">Bookings</p>
    <div class="content-wrapper">
        <table class="bookings">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Ride</th>
                    <th>Aceept / Reject</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Yunior Martinez</td>
                    <td>Pital - Ciudad Quesada</td>
                    <td><a href="{{ route('editRide') }}">Accept</a> | <a href="#">Reject</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-app-layout>
