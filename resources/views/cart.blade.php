<h1>This is cart page</h1>
@if (session('carts'))
    < @foreach (session('carts') as $item)
    <div>
        <strong>Product ID: {{ $item['product_ID'] }}</strong><br>
        <strong>Quantity: {{ $item['product_quantity'] }}</strong><br>
    </div>
    
@endforeach

<form method="POST" action="{{ route('cart.checkout') }}">
    @csrf
    <button type="submit">Checkout</button>
</form>
@else
    <p>No items in the cart</p>
@endif