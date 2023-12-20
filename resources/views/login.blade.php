<h1>login</h1>
<form action="{{ url('/login') }}" method="post">
    @csrf
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="password" value="{{old("password")}}"><br>
    
    <button type="submit">Login</button>
    @if($errors->has('login'))
    <p>{{ $errors->first('login') }}</p>
@endif
</form>