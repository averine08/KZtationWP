<h1>Register</h1>

<form action="{{ url('/register') }}" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="name" class="form-control @error('name') is-invalid @enderror"><br>
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="email" class="form-control @error('name') is-invalid @enderror"><br>

    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="password"
        class="form-control @error('name') is-invalid @enderror"><br>

    <label for="phonenumber">Phone:</label>
    <input type="text" name="phonenumber"  class="form-control @error('phonenumber') is-invalid @enderror"><br>
    <label for="country">Country:</label>
    <input type="text" name="country" class="form-control @error('country') is-invalid @enderror"><br>
    <label for="city">City:</label>
    <input type="text" name="city" class="form-control @error('city') is-invalid @enderror"><br>
    <label for="address">Address:</label>
    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"><br>
    <label for="postalcode">Postal Code:</label>
    <input type="text" name="postalcode" class="form-control @error('postalcode') is-invalid @enderror"><br>
    <button type="submit">Register</button>
</form>
