@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
        <img class="w-full h-56 object-cover" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $product->product_name }}</div>
            <p class="text-gray-700 text-base mb-2">{{ $product->description }}</p>
            <p class="text-gray-700 text-base">Price: Rs {{ $product->price }}</p>
        </div>
        <div class="px-6 py-4">
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="flex items-center mb-4">
                    <label for="qty" class="mr-4">Quantity:</label>
                    <input type="number" id="qty" name="qty" value="1" min="1" class="w-20 py-2 px-3 border border-gray-300 rounded @error('qty') border-red-500 @enderror">
                    <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                    <input type="hidden" name="image_url" value="{{ $product->image_url }}">
                    @if ($product->quantity > 0)
                        <span class="ml-4 px-2 py-1 text-green-800 bg-green-200 rounded">In Stock ({{ $product->quantity }} available)</span>
                    @else
                        <span class="ml-4 px-2 py-1 text-red-800 bg-red-200 rounded">Out of Stock</span>
                    @endif
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-opacity duration-300 @if ($product->quantity <= 0) cursor-not-allowed opacity-50 @endif" @if ($product->quantity <= 0) disabled @endif>
                    Add to Cart
                </button>
                @error('qty')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </form>
        </div>
    </div>

    <div class="my-8">
        <h1 class="text-center text-4xl font-bold mb-8">Related Products</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($relatedproducts as $relatedproduct)
                <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="option flex justify-center space-x-4 py-2">
                        <a href="{{ route('user.viewproduct', $relatedproduct->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">Product Details</a>
                    </div>
                    <img class="w-full h-56 object-cover" src="{{ asset('images/product/' . $relatedproduct->image_url) }}" alt="Product Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $relatedproduct->product_name }}</div>
                        <p class="text-gray-700 text-base">Price: Rs {{ $relatedproduct->price }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

    @endsection
