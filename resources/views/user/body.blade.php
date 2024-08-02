@extends('layouts.master')
@extends('layouts.links')
@section('content')
 <div class="container mx-auto px-4 py-6 my-10">
     <h1 class="text-center text-4xl font-semibold mb-6 text-gray-900">Our Products</h1>

     <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
         {{-- Cards start here  --}}
         @foreach ($products as $product)
             <div
                 class="bg-white border border-gray-300 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                 <img class="w-full h-48 object-cover" src="{{ asset('images/product/' . $product->image_url) }}"
                     alt="Product Image">
                 <div class="p-4">
                     <h2 class="text-lg font-semibold mb-2 text-gray-800">{{ $product->product_name }}</h2>
                     <p class="text-gray-600 text-sm mb-2">{{ $product->description }}</p>
                     <p class="text-gray-900 font-bold text-lg">Rs {{ $product->price }}</p>
                 </div>
                 <div class="p-4 bg-gray-50">
                     <button
                         class="w-full bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-4 rounded shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                         Add to Cart
                     </button>
                 </div>
             </div>
             {{-- cards end here --}}
         @endforeach
     </div>
 </div>
@endsection
