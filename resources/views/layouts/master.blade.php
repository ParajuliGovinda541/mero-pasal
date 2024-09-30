<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>
<body class="bg-gray-100 text-gray-900">
<!-- Top Navbar -->
<nav class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white py-2 sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between px-4">
        <span class="text-sm">Ph: 9865255027</span>
        <span class="flex items-center space-x-2">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <a href="mailto:info@example.com" class="hover:text-gray-300">Mail Us</a>
        </span>
        @if (auth()->user())
        <div class="flex items-center space-x-4">
            <!-- User Profile Image and Status -->
            <div class="flex items-center space-x-2">
                <button type="button" class="relative">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('images/user/' . auth()->user()->image_url) }}" alt="User Image">
                    <span class="absolute bottom-0 right-0 block h-2 w-2 bg-green-400 rounded-full ring-2 ring-white"></span>
                </button>
                <a href="{{ route('user.myprofile') }}" class="hover:text-gray-300">{{ auth()->user()->name }}</a>
            </div>

            <!-- Logout Button -->
            <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                @csrf
                <button type="submit" class="hover:text-gray-300 flex items-center">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                </button>
            </form>

            <!-- Cart and Wishlist Links -->
            <a href="{{ route('user.mycart') }}" class="hover:text-gray-300">
                <i class="fas fa-shopping-cart"></i> [{{ $itemsincart }}]
            </a>
            <a href="{{ route('user.wishlist') }}" class="hover:text-gray-300">
                <i class="fa fa-heart" aria-hidden="true"></i> [{{ $wishcounts }}]
            </a>
            <a href="{{ route('user.orderedproduct') }}" class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md">My Orders</a>
        </div>

        @else
            <a href="{{ route('userlogin') }}" class="hover:text-gray-300">Login/Register</a>
        @endif
    </div>
</nav>

<!-- Main Navbar -->
<nav class="bg-gradient-to-r from-green-800 to-teal-500 text-white sticky top-10 z-50">
    <div class="container mx-auto flex items-center justify-between h-16 px-4">
        <div class="flex items-center">
            <a href="{{ '/' }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="h-10">
            </a>
        </div>
        <div class="hidden md:flex space-x-6">
            <a href="{{ route('user.about') }}" class="hover:bg-teal-700 px-3 py-2 rounded-md">About Us</a>
            <a href="{{ route('user.product') }}" class="hover:bg-teal-700 px-3 py-2 rounded-md">Products</a>
            <a href="{{ route('user.brand') }}" class="hover:bg-teal-700 px-3 py-2 rounded-md">Brands</a>
            <a href="{{ route('user.contact') }}" class="hover:bg-teal-700 px-3 py-2 rounded-md">Contacts</a>
            <a href="{{ route('user.blog') }}" class="hover:bg-teal-700 px-3 py-2 rounded-md">Blogs</a>



        </div>
        <div class="relative md:flex items-center space-x-4 hidden">
            <form action="{{ route('user.search') }}" method="GET" role="search">
                <input type="text" name="search" value="{{ Request::get('search') }}" placeholder="Search"
                       class="block w-64 pl-10 pr-4 py-2 border border-gray-500 rounded-md bg-gray-800 text-white focus:outline-none focus:border-blue-500">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                    <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M14.707 13.293a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414l3-3a1 1 0 011.414 0zm-2.93-.707a4 4 0 111.414-1.414 4 4 0 01-1.414 1.414z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
            </form>
        </div>
        <button data-drawer-toggle="default-sidebar" type="button" class="inline-flex items-center p-2 text-gray-400 hover:bg-teal-700 hover:text-white md:hidden">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </button>
    </div>
</nav>

<div>
    @yield('content')
</div>

<!-- Footer -->
<footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-gradient-to-r from-gray-800 to-gray-900 text-white">
    <div class="container mx-auto flex items-center justify-between">
        <ul class="flex items-center space-x-4 text-xs">
            <li><a href="#" class="hover:underline">About</a></li>
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Licensing</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
        <div class="text-xs">
            <span>Designed By Govinda Parauli & Bijay Thapa</span> |
            <span>© 2024 <a href="https://govindaparajuli.com.np" class="hover:underline">MeroPasal™</a>. All Rights Reserved.</span>
        </div>
    </div>
</footer>

</body>
</html>
