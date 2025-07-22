<x-app-layout> <!-- Vista  de edición de perfil -->
    <p class="titles">Edit Profile</p>
    <form class="form-container" method="POST" action="{{ route('editProfile') }}">
        <div class="form-row">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" value="Yunior" />
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" value="Martínez" />
            </div>
        </div>

        <div class="form-group full-width">
            <label>Email</label>
            <input type="email" value="mrtn1806@gmail.com" />
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Password</label>
                <input type="password" />
            </div>
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" />
            </div>
        </div>

        <div class="form-group full-width">
            <label>Address</label>
            <input type="text" value="NA" />
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Country</label>
                <select>
                    <option>-- Select --</option>
                    <option>USA</option>
                    <option selected>Costa Rica</option>
                </select>
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" value="Alajuela" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>City</label>
                <input type="text" value="Quesada" />
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" value="61065116" />
            </div>
        </div>
        <div class="form-footer">
            <a href="{{ route('myRides') }}">Cancel</a>
            <button class="my-button">Save</button>
        </div>
    </form>
</x-app-layout>
