@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-8">About Us</h1>
    </div>
    <div class="flex flex-wrap items-center justify-center mb-8">
        <img class="w-48 h-48 mx-4 my-2 rounded-full shadow-lg" src="{{ asset('images/logo.png') }}" alt="Store Logo">
    </div>
    <div class="mt-5 mx-10 max-w-2xl text-center">
        <p class="text-lg text-gray-700 mb-8">We are a leading ecommerce store dedicated to providing high-quality
            products and exceptional customer service. With years of experience in the industry, we strive to be your
            go-to online destination for all your shopping needs.</p>
    </div>

    <div class="mt-5 mx-10 grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-2xl font-bold mb-4">Our Mission</h2>
            <p class="text-lg text-gray-700 mb-8">At our store, our mission is to deliver top-notch products that
                enhance your lifestyle and bring you joy. We carefully curate our collection to ensure that you find
                exactly what you're looking for, whether it's the latest fashion trends, home decor items, or unique
                gifts.</p>
        </div>
        <div class="flex justify-center">
            <img class="w-48 h-48 rounded-full shadow-lg" src="{{ asset('images/logo.png') }}" alt="Mission Image">
        </div>
    </div>

    <div class="mt-5 mx-10 grid md:grid-cols-2 gap-8 items-center">
        <div class="flex justify-center">
            <img class="w-48 h-48 rounded-full shadow-lg" src="{{ asset('images/logo.png') }}" alt="Team Photo 1">
        </div>
        <div>
            <h2 class="text-2xl font-bold mb-4">Why Choose Us?</h2>
            <ul class="list-disc list-inside text-lg text-gray-700 mb-8 space-y-2">
                <li>Wide selection of high-quality products</li>
                <li>Fast and reliable shipping</li>
                <li>Secure and convenient online shopping experience</li>
                <li>Exceptional customer support</li>
                <li>Competitive prices</li>
            </ul>
        </div>
    </div>

    <div class="flex flex-wrap items-center justify-center mb-8">
        <img class="w-48 h-48 mx-4 my-2 rounded-full shadow-lg" src="{{ asset('images/product/1690962612.jpg') }}"
            alt="Team Photo 1">
        <img class="w-48 h-48 mx-4 my-2 rounded-full shadow-lg" src="{{ asset('images/product/1690966242.png') }}"
            alt="Team Photo 2">
        <img class="w-48 h-48 mx-4 my-2 rounded-full shadow-lg" src="{{ asset('images/product/1689655214.jpg') }}"
            alt="Team Photo 3">
    </div>

    <div class="text-center">
        <p class="text-lg text-gray-700">Thank you for choosing our store. We look forward to serving you!</p>
    </div>
</div>

@endsection






