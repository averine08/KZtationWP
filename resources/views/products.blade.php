<h1>Products for {{ $artist->artist_name }}</h1>

@if (count($products) > 0)
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->ProductName }}</strong>
                @if ($product->ProductPhoto)
                    <img src="{{$product->ProductPhoto}}" alt="{{ $product->ProductName}} Photo">
                @else
                    <p>No photo available</p>
                @endif
            </li>
        @endforeach
    </ul>
@else
    <p>No products available for this artist.</p>
@endif
