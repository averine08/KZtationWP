<h1>Products for {{ $artist->artist_name }}</h1>

@if (count($products) > 0)
        @foreach ($products as $product)
                <strong>{{ $product->ProductName }}</strong>
                @if ($product->ProductPhoto)
                    <img src="{{$product->ProductPhoto}}" alt="{{ $product->ProductName}} Photo">
                @else
                    <p>No photo available</p>
                @endif
                <a href="{{ route('detail', ['id' => $product->id]) }}">View Product Detail</a>
        @endforeach
@else
    <p>No products available for this artist.</p>
@endif
