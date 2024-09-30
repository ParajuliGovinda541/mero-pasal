<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mero-Pasal') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">
    @include('layouts.navigation')

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white shadow-lg">
            <div class="flex flex-col justify-between h-full p-5">
                <div>
                    <h2 class="text-xl font-semibold mb-5">Menu</h2>
                    <nav class="flex flex-col gap-2">
                        <a href="{{ route('dashboard') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800 active:bg-teal-500">Dashboard</a>
                        <a href="{{ route('admin.product.index') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Products</a>
                        <a href="{{ route('admin.category.index') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Category</a>
                        <a href="{{ route('admin.brand.index') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Brand</a>
                        <a href="{{ route('admin.order.index') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Order</a>
                        <a href="{{ route('admin.blogs.index') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Blogs</a>

                        <a href="{{ route('contact.index') }}" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Feedback</a>
                        <a href="#" class="p-2 rounded-lg transition-colors duration-300 hover:bg-gray-800">Settings</a>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-10 bg-white rounded-lg shadow-md ml-5">
            <h1 class="text-2xl font-semibold mb-6">Welcome to the Dashboard</h1>
            @yield('content')
        </div>
    </div>

</body>

</html>
