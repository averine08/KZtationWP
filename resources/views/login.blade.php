<h1>login</h1>
<form action="{{ url('/login') }}" method="post">
    @csrf
    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="email" class="form-control @error('name') is-invalid @enderror" value="{{old('email')}}"><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="password" class="form-control @error('name') is-invalid @enderror" value="{{old("password")}}"><br>
    
    <button type="submit">Login</button>
    @if ($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
    @endif
    @if ($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
    @endif

    {{-- @if(session()->has('password_salah'))
        <div>True</div>
        <div class="alert alert-danger">
            {{ session('password_salah') }}
        </div>
    @endif
    @if(session()->has('password_kosong'))
        <div class="alert alert-danger">
            {{ session('password_kosong') }}
        </div>
    @endif
    @if(session()->has('user_kosong'))
        <div class="alert alert-danger">
            {{ session('user_kosong') }}
        </div>
    @endif
    @if(session()->has('email_kosong'))
        <div class="alert alert-danger">
            {{ session('email_kosong') }}
        </div>
    @endif --}}
    {{-- @error('email') --}}
    {{-- <div class="alert alert-danger">{{$login}}</div> --}}
     {{-- @enderror --}}
    {{-- @error('password') --}}
    {{-- <div class="alert alert-danger">{{$login}}</div> --}}
     {{-- @enderror --}}

</form>