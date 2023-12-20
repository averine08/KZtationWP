<h1>{{ $product->ProductName }}</h1>

@if ($product->ProductPhoto)
    <img src="{{ $product->ProductPhoto }}" alt="{{ $product->ProductName }} Photo">
@else
    <p>No photo available</p>
@endif

<p>Category: {{ $product->ProductCat }}</p>
<p>Price: {{ $product->ProductPrice }}</p>
<p>Release Date: {{ $product->ProductReleaseDate }}</p>
<p>Region: {{ $product->ProductRegion }}</p>
<p>Manufacturer: {{ $product->ProductManufacturer }}</p>
<p>Content: {{ $product->ProductContent }}</p>
<p>Link to YouTube: {{ $product->ProductLinkYoutube }}</p>
<p>Stock: {{ $product->ProductStock }}</p>