@extends('layouts.master')
@extends('layouts.links')

@section('content')

    {{-- Swiper for Hero Section --}}
    <div class="swiper mySwiper bg-gradient-to-bl from-slate-500 to-slate-700">
        <div class="swiper-wrapper">
            @foreach (['left', 'right', 'left'] as $position)
                <div class="swiper-slide">
                    <div class="relative">
                        <!-- Background Overlay -->
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative flex flex-col md:flex-row justify-between items-center p-10">
                            @if ($position === 'left')
                                <div class="w-full md:w-1/2 text-left md:text-justify z-10">
                                    <h2 class="text-4xl font-extrabold text-white leading-tight text-shadow-lg">
                                        Elevate Your Productivity with Our High-Performance Laptop
                                    </h2>
                                    <p class="mt-5 text-lg text-gray-200 leading-relaxed">
                                        "Discover the latest in cutting-edge technology designed for professionals, students, and creatives.
                                        Enjoy stunning visuals, high-speed performance, and long-lasting battery life."
                                    </p>
                                    <div class="flex mt-8">
                                        <a href="#" class="bg-green-500 text-white px-5 py-2 rounded-md hover:bg-green-600 transition duration-300">
                                            Shop Now
                                        </a>
                                        <a href="#" class="ml-5 bg-yellow-500 text-black px-5 py-2 rounded-md hover:bg-yellow-600 transition duration-300">
                                            Price: 45000
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 z-10">
                                    <img src="{{ asset('images/image-comp.jpg') }}" height="" alt="Hero Image" class="rounded-lg shadow-lg">
                                </div>
                            @else
                                <div class="w-full md:w-1/2 z-10">
                                    <img src="{{ asset('images/images-iphone.jpg') }}" alt="Hero Image" class="rounded-lg shadow-lg">
                                </div>
                                <div class="w-full md:w-1/2 text-left md:text-justify z-10">
                                    <h2 class="text-4xl font-extrabold text-white leading-tight text-shadow-lg">
                                        Elevate Your Productivity with Our High-Performance Laptop
                                    </h2>
                                    <p class="mt-5 text-lg text-gray-200 leading-relaxed">
                                        "Experience seamless computing with cutting-edge design and superior performance tailored for professionals and students."
                                    </p>
                                    <div class="flex mt-8">
                                        <a href="#" class="bg-green-500 text-white px-5 py-2 rounded-md hover:bg-green-600 transition duration-300">
                                            Shop Now
                                        </a>
                                        <a href="#" class="ml-5 bg-yellow-500 text-black px-5 py-2 rounded-md hover:bg-yellow-600 transition duration-300">
                                            Price: 45000
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination and Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Add the text-shadow class in your CSS or Tailwind config -->
    <style>
        .text-shadow-lg {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>


    {{-- Categories Section --}}
    <div class="px-8 mt-16">
        <h1 class="text-3xl font-bold text-center mb-10">Our Categories</h1>
        <div class="swiper mySwiperCard">
            <div class="swiper-wrapper">
                @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <a href="{{ route('user.viewcategory', $category->id) }}" class="block text-center hover:shadow-lg transition duration-300">
                            <img src="{{ asset('images/category/' . $category->image_url) }}" class="w-full h-52 object-cover rounded-md mb-4" alt="{{ $category->categories_name }}">
                            <h3 class="text-xl font-semibold">{{ $category->categories_name }}</h3>
                            <p class="text-gray-600">Explore Now</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    {{-- Latest Arrivals Section --}}
    <section class="px-10 my-16">
        <h1 class="text-3xl font-bold text-center mb-8">Latest Arrivals</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $arrival)
                <a href="{{ route('user.viewproduct', $arrival->id) }}" class="block border border-gray-300 rounded-lg hover:shadow-lg transition duration-300">
                    <img class="rounded-t-md w-full h-48 object-cover" src="{{ asset('images/product/' . $arrival->image_url) }}" alt="{{ $arrival->name }}">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $arrival->name }}</h3>
                        <p class="text-sm text-gray-500">Price: {{ $arrival->price }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>

    {{-- Brands Section --}}
    <section class="px-14 my-16 py-10 bg-gray-100 rounded-lg">
        <h1 class="text-3xl font-bold text-center mb-10">Our Brands</h1>
        <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-8">
            @foreach ($brands as $brand)
                <a href="{{ route('user.viewbrand', $brand->id) }}" class="block text-center hover:shadow-lg transition duration-300">
                    <img class="mx-auto h-20 w-20 object-contain" src="{{ asset('images/brand/' . $brand->photo) }}" alt="{{ $brand->name }}">
                    <h3 class="text-lg font-semibold mt-4">{{ $brand->name }}</h3>
                </a>
            @endforeach
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 5000,
            },
            loop: true,
        });

        var swiperCard = new Swiper(".mySwiperCard", {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
            },
        });
    </script>

@endsection
