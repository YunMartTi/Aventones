<x-app-layout>
    <p class="titles">Configuration</p>

    <form class="form-clean" method="POST" action="{{ route('bookings') }}">
        @csrf

        <div class="form-row">
            <div class="form-group full-width">
                <label for="name">Public Name</label>
                <input type="text" name="name" id="name" value="Bladimir" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group full-width">
                <label for="bio">Public Bio</label>
                <textarea name="bio" id="bio" rows="6"></textarea>
            </div>
        </div>

        <div class="form-footer">
            <a href="{{ route('bookings') }}">Cancel</a>
            <button type="submit" class="my-button">Save</button>
        </div>
    </form>
</x-app-layout>
