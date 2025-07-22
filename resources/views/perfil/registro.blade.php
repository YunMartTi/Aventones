<x-app-layout> <!-- Vista  de registro de usuario -->
    <p class="titles">User Registration</p>
    <form class="form-container">
        <div class="form-row">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" />
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" />
            </div>
        </div>

        <div class="form-group full-width">
            <label>Email</label>
            <input type="email" />
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
            <input type="text" />
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Country</label>
                <select>
                    <option>-- Select --</option>
                    <option>USA</option>
                    <option>Costa Rica</option>
                </select>
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>City</label>
                <input type="text" />
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" />
            </div>
        </div>

        <div class="form-footer">
            <p>Already a user? <a href="#">Login here</a></p>
            <p>Register as driver? <a href="#">Click here</a></p>
        </div>
    </form>
</x-app-layout>
