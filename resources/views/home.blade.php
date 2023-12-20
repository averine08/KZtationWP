<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>home</h1>

{{-- @auth
    <p>User ID: {{ session('sessionId') }}</p>
@else
    <p>User is not authenticated. Welcome, guest!</p>
@endauth --}}

{{-- @if (auth()->check())
    <p>Welcome, {{ auth()->user()->name }}</p>
@else
    <p>Please log in</p>
    <a href="{{ route('/login') }}">Login</a>
@endif --}}

<div class="container">
    <h1>Home</h1>
    <p>{{ $welcomeMessage }}</p>

    @auth
</form>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <a href="{{ route('cart')}}">Cart</a>
    <a href="{{ route('payment')}}">Payment</a>
    <a href="{{ route('transactionhistory')}}">Transaction History</a>
    @else
    
    <a href="{{ route('login') }}">Login</a>
    @endauth
</div>



</body>
</html>
