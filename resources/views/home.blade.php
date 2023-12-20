<h1>home</h1>

@auth
    <p>User ID: {{ session('loginId') }}</p>
@else
    <p>User is not authenticated. Welcome, guest!</p>
@endauth