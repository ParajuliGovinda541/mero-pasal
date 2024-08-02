@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto px-4 py-6 my-10">
    <h1 class="text-center text-4xl font-bold mb-6 text-gray-900">Our Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- Cards start here --}}
        @foreach ($products as $product)
            <div class="relative bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden group transition-transform transform hover:scale-105">
                <a href="{{ route('user.viewproduct', $product->id) }}">
                    <img class="w-full h-64 object-cover transition-transform transform group-hover:scale-105" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->product_name }}</h2>
                        <p class="text-gray-600 text-sm mb-2">Price: Rs {{ $product->price }}</p>
                    </div>
                </a>
                <div class="absolute inset-0 flex flex-col justify-between p-4 opacity-0 group-hover:opacity-100 bg-gray-900 bg-opacity-40 transition-opacity">
                    <div>
                        <h2 class="text-lg font-semibold text-white mb-2">{{ $product->product_name }}</h2>
                        <p class="text-red-500 font-bold">Rs {{ $product->price }}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <a href="{{ route('user.viewproduct', $product->id) }}" class="text-white font-semibold hover:text-red-500">View Details</a>
                        <form action="{{ route('wishlist.store', $product->id) }}" method="POST" class="flex items-center">
                            @csrf
                            <button type="submit" class="text-white hover:text-red-500">
                                <i class="far fa-heart"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- Cards end here --}}
    </div>


</div>
@endsection
