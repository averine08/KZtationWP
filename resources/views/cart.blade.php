<h1>This is cart</h1>
@if ($carts!=null)
        @foreach ($carts as $cart_data)
            <strong>{{ $cart_data->product_ID }}</strong>
            <strong>{{ $cart_data->product_quantity }}</strong>
        @endforeach
        
@else
    <p>No carts.</p>
@endif
