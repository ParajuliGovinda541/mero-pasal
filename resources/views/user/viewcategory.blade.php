@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="grid grid-cols-4">

    {{-- Cards start here --}}
    @foreach ($products as $product)
        <div class="mt-5 ml-10 max-w-sm rounded overflow-hidden shadow-lg">
            <a href="{{ route('user.viewproduct', $product->id) }}">
                <img class="w-full" src="{{ asset('images/product/' . $product->image_url) }}" alt="Product Image">
            </a>
            <div class="px-5 py-3">
                <div class="font-bold text-xl mb-2">{{ $product->product_name }}</div>
                <p class="text-gray-700 text-base">Price: Rs {{ $product->price }}</p>
            </div>
            <div class="px-6 py-4">

            </div>
        </div>
        {{-- cards end here --}}
    @endforeach
</div>
<div class="flex items-center justify-between p-4">
    <div class="mx-24 my-10">
        {{ $products->links() }}
    </div>
</div>
@endsection