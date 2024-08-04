@extends('layouts.master')
@extends('layouts.links')

@section('content')

    {{-- Swiper for Hero Section --}}
    <div class="swiper mySwiper bg-gradient-to-bl from-slate-500 to-slate-700">
        <div class="swiper-wrapper">
            @foreach (['left', 'right', 'left'] as $position)
                <div class="swiper-slide">
                    <div class="flex justify-between">
                        @if ($position === 'left')
                            <div class="w-1/2 pl-10 pt-10 text-justify">
                                <h2 class="text-3xl font-bold">
                                    Enhance Your Productivity with Our Sleek, High-Performance Laptop
                                </h2>
                                <p class="mt-5">
                                    "Discover our latest arrival, designed to elevate your computing experience.
                                    Featuring cutting-edge technology, exceptional performance, and a sleek design,
                                    this laptop is perfect for professionals, students, and creatives. Stay ahead of the curve
                                    with lightning-fast processing speeds, stunning visuals, and long-lasting battery life.
                                    Upgrade to the future of laptops today."
                                </p>
                                <div class="group relative ml-96 w-fit cursor-pointer">
                                    <p class="bg-green-500 w-fit px-5 py-2 rounded-md transition duration-500 group-hover:hidden">
                                        Shop <span>Now</span>
                                    </p>
                                    <p class="bg-yellow-500 w-fit px-5 py-2 rounded-md transition duration-500 hidden group-hover:block">
                                        Price <span>45000</span>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <img src="{{ asset('images/landingpage.jpg') }}" alt="Hero Image">
                            </div>
                        @else
                            <div>
                                <img src="{{ asset('images/landingpage.jpg') }}" alt="Hero Image">
                            </div>
                            <div class="w-1/2 pl-10 pt-10 text-justify">
                                <h2 class="text-3xl font-bold">
                                    Enhance Your Productivity with Our Sleek, High-Performance Laptop
                                </h2>
                                <p class="mt-5">
                                    "Discover our latest arrival, designed to elevate your computing experience.
                                    Featuring cutting-edge technology, exceptional performance, and a sleek design,
                                    this laptop is perfect for professionals, students, and creatives. Stay ahead of the curve
                                    with lightning-fast processing speeds, stunning visuals, and long-lasting battery life.
                                    Upgrade to the future of laptops today."
                                </p>
                                <div class="group relative ml-96 w-fit cursor-pointer">
                                    <p class="bg-green-500 w-fit px-5 py-2 rounded-md transition duration-500 group-hover:hidden">
                                        Shop <span>Now</span>
                                    </p>
                                    <p class="bg-yellow-500 w-fit px-5 py-2 rounded-md transition duration-500 hidden group-hover:block">
                                        Price <span>45000</span>
                                    </p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination and Navigation -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    {{-- Start of Categories --}}
    <div class="px-8 my-10">
        <h1 class="text-3xl font-semibold text-center mb-8">Our Categories</h1>
        <div class="swiper mySwiperCard">
            <div class="swiper-wrapper">
                @foreach ($categories as $category)
                    <a href="{{ route('user.viewcategory', $category->id) }}" class="swiper-slide">
                        <img src="{{ asset('images/category/' . $category->image_url) }}" class="w-full h-52 object-cover rounded-md mb-4" alt="{{ $category->categories_name }}">
                        <div class="text-center">
                            <p class="text-lg font-medium mb-1">{{ $category->categories_name }}</p>
                            <p class="text-sm text-gray-600">Category</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    {{-- End of Categories --}}

    {{-- Start of Latest Arrivals --}}
    <section class="px-10 my-10">
        <h1 class="my-5 text-center text-xl font-bold">Latest Arrivals</h1>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($categories as $category)
                <a href="{{ route('user.viewcategory', $category->id) }}" class="rounded-md shadow-lg bg-white border border-transparent hover:border-black hover:outline-0 cursor-pointer">
                    <img class="rounded-t-md mx-auto mt-2" src="{{ asset('images/landingpage.jpg') }}" alt="Latest Arrival">
                    <div class="flex justify-between p-2">
                        <p class="mt-2">Name</p>
                        <p class="mt-2">Price</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    {{-- End of Latest Arrivals --}}

    {{-- Start of Our Brands --}}
    <section class="px-14 my-12 py-10">
        <h1 class="my-5 text-center text-xl font-bold">Our Brands</h1>
        <div class="grid grid-cols-4 sm:grid-cols-6 lg:grid-cols-8 gap-4">
            @foreach ($brands as $brand)
                <a href="{{ route('user.viewbrand', $brand->id) }}" class="cursor-pointer shadow-2xl text-center">
                    <img class="mx-auto h-32 object-cover" src="{{ asset('images/brand/' . $brand->photo) }}" alt="Brand">
                    <p class="p-2 font-bold">{{$brand->name}}</p>
                </a>
            @endforeach
        </div>
    </section>
    {{-- End of Our Brands --}}

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
