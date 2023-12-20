<h1>All Artists</h1>

    @foreach($data as $artist)
        <p>{{ $artist->artist_name }}</p>
        @if($artist->artist_photo)
            <img src="{{ $artist->artist_photo }}" alt="{{ $artist->artist_name }} Photo">
        @else
            <p>No photo available</p>
        @endif
        {{-- <a href="{{ route('products', ['artist_name' => $artist->artist_name]) }}">View Products</a> --}}
        <a href="{{ route('products', ['id' => $artist->id]) }}">View Products</a>
    @endforeach