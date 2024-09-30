@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto px-4 py-6 my-10">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0">
                    <img class="h-96 w-full object-cover md:w-96 transition-transform transform hover:scale-105" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-600 font-semibold">{{ $product->category }}</div>
                    <h1 class="mt-1 text-3xl font-semibold text-gray-900">{{ $product->product_name }}</h1>
                    <p class="mt-2 text-gray-600 leading-relaxed">{{ $product->description }}</p>
                    <div class="mt-4">
                        <span class="text-3xl font-bold text-gray-900">Rs {{ $product->price }}</span>
                        @if ($product->quantity > 0)
                            <span class="ml-3 inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                In Stock ({{ $product->quantity }} available)
                            </span>
                        @else
                            <span class="ml-3 inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                Out of Stock
                            </span>
                        @endif
                    </div>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data" class="mt-6">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_name" value="{{ $product->product_name }}">
                        <input type="hidden" name="image_url" value="{{ $product->image_url }}">
                        <div class="flex items-center mt-4">
                            <label for="qty" class="mr-3 text-sm font-medium text-gray-700">Quantity:</label>
                            <input type="number" id="qty" name="qty" value="1" min="1" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-20 sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <button type="submit" class="mt-4 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-opacity duration-300 ease-in-out {{ $product->quantity <= 0 ? 'opacity-50 cursor-not-allowed' : '' }}" {{ $product->quantity <= 0 ? 'disabled' : '' }}>
                            Add to Cart
                        </button>
                        @error('qty')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-16">
        <h2 class="text-2xl font-semibold text-gray-900 mb-6">Related Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($relatedproducts as $relatedproduct)
                <div class="relative bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden group transition-transform transform hover:scale-105">
                    <a href="{{ route('user.viewproduct', $relatedproduct->id) }}">
                        <img class="w-full h-64 object-cover transition-transform transform group-hover:scale-105" src="{{ asset('images/product/' . $relatedproduct->image_url) }}" alt="Product Image">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $relatedproduct->product_name }}</h2>
                            <p class="text-gray-600 text-sm mb-2">Price: Rs {{ $relatedproduct->price }}</p>
                        </div>
                    </a>
                    <div class="absolute inset-0 flex flex-col justify-between p-4 opacity-0 group-hover:opacity-100 bg-gray-900 bg-opacity-40 transition-opacity duration-300 ease-in-out">
                        <div>
                            <h2 class="text-lg font-semibold text-white mb-2">{{ $relatedproduct->product_name }}</h2>
                            <p class="text-red-500 font-bold">Rs {{ $relatedproduct->price }}</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="{{ route('user.viewproduct', $relatedproduct->id) }}" class="text-white font-semibold hover:text-red-500">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
