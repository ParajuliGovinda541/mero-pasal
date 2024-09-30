@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center">
        <h1 class="text-5xl font-extrabold mb-12 text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600">
            About Us
        </h1>
    </div>
    <div class="flex justify-center items-center mb-12">
        <img class="w-56 h-56 mx-4 my-2 rounded-full shadow-xl transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/logo.png') }}" alt="Store Logo">
    </div>
    <div class="mt-8 mx-10 max-w-3xl text-center">
        <p class="text-xl text-gray-800 mb-12 leading-relaxed">We are a leading ecommerce store dedicated to providing high-quality
            products and exceptional customer service. With years of experience in the industry, we strive to be your
            go-to online destination for all your shopping needs.</p>
    </div>

    <div class="mt-8 mx-10 grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Our Mission</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-6">At our store, our mission is to deliver top-notch products that
                enhance your lifestyle and bring you joy. We carefully curate our collection to ensure that you find
                exactly what you're looking for, whether it's the latest fashion trends, home decor items, or unique
                gifts.</p>
        </div>
        <div class="flex justify-center">
            <img class="w-56 h-56 rounded-full shadow-xl transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/logo.png') }}" alt="Mission Image">
        </div>
    </div>

    <div class="mt-12 mx-10 grid md:grid-cols-2 gap-12 items-center">
        <div class="flex justify-center">
            <img class="w-56 h-56 rounded-full shadow-xl transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/logo.png') }}" alt="Team Photo 1">
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Why Choose Us?</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 leading-relaxed mb-6 space-y-3">
                <li>Wide selection of high-quality products</li>
                <li>Fast and reliable shipping</li>
                <li>Secure and convenient online shopping experience</li>
                <li>Exceptional customer support</li>
                <li>Competitive prices</li>
            </ul>
        </div>
    </div>

    <div class="flex flex-wrap items-center justify-center mt-12 mb-12 space-x-6">
        <img class="w-56 h-56 mx-4 my-2 rounded-full shadow-xl transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/product/1723001475.jpg') }}" alt="Team Photo 1">
        <img class="w-56 h-56 mx-4 my-2 rounded-full shadow-xl transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/product/1723313836.jpg') }}" alt="Team Photo 2">
        <img class="w-56 h-56 mx-4 my-2 rounded-full shadow-xl transform transition-transform duration-300 hover:scale-110" src="{{ asset('images/product/1723313696.jpg') }}" alt="Team Photo 3">
    </div>

    <div class="text-center">
        <p class="text-xl text-gray-800 leading-relaxed">Thank you for choosing our store. We look forward to serving you!</p>
    </div>
</div>

@endsection
