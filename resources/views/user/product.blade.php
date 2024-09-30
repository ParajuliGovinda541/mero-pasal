@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto px-4 py-6 my-10">
    <h1 class="text-center text-4xl font-bold mb-6 text-gray-900">Our Products</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- Cards start here --}}
        @foreach ($products as $product)
            <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <a href="{{ route('user.viewproduct', $product->id) }}">
                    <img class="w-full h-64 object-cover" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->product_name }}</h2>
                        <p class="text-gray-600 text-sm mb-2">Price: Rs {{ $product->price }}</p>
                        <div class="flex items-center justify-between mt-2">
                            <span class="text-white font-semibold bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">View Details</span>
                            <form action="{{ route('wishlist.store', $product->id) }}" method="POST" class="flex items-center">
                                @csrf
                                <button type="submit" class="text-gray-600 hover:text-red-500">
                                    <i class="far fa-heart"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        {{-- Cards end here --}}
           {{-- Cards start here --}}
           @foreach ($products as $product)
           <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
               <a href="{{ route('user.viewproduct', $product->id) }}">
                   <img class="w-full h-64 object-cover" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                   <div class="p-4">
                       <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->product_name }}</h2>
                       <p class="text-gray-600 text-sm mb-2">Price: Rs {{ $product->price }}</p>
                       <div class="flex items-center justify-between mt-2">
                           <span class="text-white font-semibold bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">View Details</span>
                           <form action="{{ route('wishlist.store', $product->id) }}" method="POST" class="flex items-center">
                               @csrf
                               <button type="submit" class="text-gray-600 hover:text-red-500">
                                   <i class="far fa-heart"></i>
                               </button>
                           </form>
                       </div>
                   </div>
               </a>
           </div>
       @endforeach
       {{-- Cards end here --}}
          {{-- Cards start here --}}
          @foreach ($products as $product)
          <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
              <a href="{{ route('user.viewproduct', $product->id) }}">
                  <img class="w-full h-64 object-cover" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                  <div class="p-4">
                      <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->product_name }}</h2>
                      <p class="text-gray-600 text-sm mb-2">Price: Rs {{ $product->price }}</p>
                      <div class="flex items-center justify-between mt-2">
                          <span class="text-white font-semibold bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">View Details</span>
                          <form action="{{ route('wishlist.store', $product->id) }}" method="POST" class="flex items-center">
                              @csrf
                              <button type="submit" class="text-gray-600 hover:text-red-500">
                                  <i class="far fa-heart"></i>
                              </button>
                          </form>
                      </div>
                  </div>
              </a>
          </div>
      @endforeach
      {{-- Cards end here --}}
         {{-- Cards start here --}}
         @foreach ($products as $product)
         <div class="bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
             <a href="{{ route('user.viewproduct', $product->id) }}">
                 <img class="w-full h-64 object-cover" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
                 <div class="p-4">
                     <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->product_name }}</h2>
                     <p class="text-gray-600 text-sm mb-2">Price: Rs {{ $product->price }}</p>
                     <div class="flex items-center justify-between mt-2">
                         <span class="text-white font-semibold bg-blue-500 hover:bg-blue-600 px-3 py-1 rounded">View Details</span>
                         <form action="{{ route('wishlist.store', $product->id) }}" method="POST" class="flex items-center">
                             @csrf
                             <button type="submit" class="text-gray-600 hover:text-red-500">
                                 <i class="far fa-heart"></i>
                             </button>
                         </form>
                     </div>
                 </div>
             </a>
         </div>
     @endforeach
     {{-- Cards end here --}}
    </div>
</div>
@endsection
