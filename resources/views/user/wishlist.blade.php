@extends('layouts.master')
@extends('layouts.links')

@section('content')

<div class="container mx-auto py-8">
    <h1 class="text-center text-4xl font-bold text-blue-900 mb-6">Wishlist Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- Cards start here --}}
        @foreach ($wishlistproducts as $wishlistproduct)
        @php
            $product = $wishlistproduct->product;
        @endphp
            <div class="relative bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl">
                <img class="w-full h-56 object-cover" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2 text-gray-800">{{ $product->product_name }}</div>
                    <p class="text-gray-600 text-base">Price: Rs {{ $product->price }}</p>
                    <div class="flex justify-between mt-4">
                        <a href="{{ route('user.viewproduct', $product->id) }}" class="btn-blue">Product Details</a>
                        <a href="{{ route('user.viewproduct', $product->id) }}" class="btn-green">Buy Now</a>
                    </div>
                </div>
                <div class="absolute top-2 right-2 p-2 bg-white border border-gray-300 rounded-full shadow-md transition-opacity opacity-0 group-hover:opacity-100">
                    <a href="{{ route('user.wishlist.destroy', $wishlistproduct->id) }}" class="text-red-500 hover:text-red-700">
                        <i class="fas fa-times"></i> <!-- Font Awesome delete icon -->
                    </a>
                </div>
            </div>
        @endforeach
        {{-- Cards end here --}}
    </div>
</div>

<style>
    .btn-blue {
        @apply bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 transition-colors;
    }

    .btn-green {
        @apply bg-green-600 text-white py-2 px-4 rounded-lg shadow-md hover:bg-green-700 transition-colors;
    }

    .btn-red {
        @apply text-red-500 hover:text-red-700 text-lg;
    }

    /* Ensure buttons are displayed properly */
    .btn-blue, .btn-green {
        @apply inline-block;
    }

    /* Hover effect for the card */
    .relative:hover .absolute {
        @apply opacity-100;
    }
</style>


@endsection
