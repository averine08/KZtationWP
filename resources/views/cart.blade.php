<h1>This is cart</h1>
@if ($carts->count()!=0)
        @foreach ($carts as $cart_data)
            <strong>{{ $cart_data->product_ID }}</strong>
            <strong>{{ $cart_data->product_quantity }}</strong>
        @endforeach
        <form method="POST" action="{{ route('cart.adds', ['id' => auth()->user()->id]) }}">
            @csrf
            <button type="submit">Checkout</button>
        </form>
        
@else
    <p>No carts.</p>
@endif
