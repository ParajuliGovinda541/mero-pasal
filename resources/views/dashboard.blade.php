@extends('layouts.app')
@extends('layouts.links')
@extends('layouts.scripts')
@section('content')

@section('content')

<div class="container mx-auto px-6 py-8">
    <h2 class="text-4xl font-bold text-blue-800 mb-6">Dashboard</h2>
    <hr class="h-1 mb-6 bg-blue-300">

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mb-8">
        {{-- Total Products --}}
        <a href="{{ route('admin.product.index') }}" class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 hover:shadow-xl">
            <p class="text-blue-600 font-semibold text-lg mb-2">Total Products</p>
            <h1 class="text-3xl font-bold text-gray-800">{{ $products }}</h1>
        </a>

        {{-- Total Orders --}}
        <a href="{{ route('admin.order.index') }}" class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 hover:shadow-xl">
            <p class="text-blue-600 font-semibold text-lg mb-2">Total Orders</p>
            <h1 class="text-3xl font-bold text-gray-800">{{ $order }}</h1>
        </a>

        {{-- Total Categories --}}
        <a href="{{ route('admin.category.index') }}" class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 hover:shadow-xl">
            <p class="text-blue-600 font-semibold text-lg mb-2">Total Categories</p>
            <h1 class="text-3xl font-bold text-gray-800">{{ $categories }}</h1>
        </a>
                {{-- Total Brands --}}
                <a href="{{ route('admin.category.index') }}" class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 hover:shadow-xl">
                    <p class="text-blue-600 font-semibold text-lg mb-2">Total Brands</p>
                    <h1 class="text-3xl font-bold text-gray-800">{{ $brands }}</h1>
                </a>

        {{-- Total Feedback --}}
        <a href="{{ route('contact.index') }}" class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 hover:shadow-xl">
            <p class="text-blue-600 font-semibold text-lg mb-2">Total Feedback</p>
            <h1 class="text-3xl font-bold text-gray-800">{{ $contacts }}</h1>
        </a>

        {{-- Total Users --}}
        <a href="{{ route('registeruser.index') }}" class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 text-center transition-transform transform hover:scale-105 hover:shadow-xl">
            <p class="text-blue-600 font-semibold text-lg mb-2">Total Users</p>
            <h1 class="text-3xl font-bold text-gray-800">{{ $users }}</h1>
        </a>
    </div>

    <div class="flex items-center justify-between mb-8">
        <button type="button" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors" onclick="openPopup()">
            Show New Orders
        </button>
    </div>

    {{-- Include the pop-up form --}}
    @include('new_order_popup')

    <div class="container mx-auto px-4 py-8">
        <canvas id="myLineChart" class="w-full h-80 max-w-screen-lg mx-auto"></canvas>
    </div>

    <script>
        // Sample data for the line chart
        const labels = {!! json_encode($orderdates) !!};
        const totalSalesData = {!! json_encode($ordercounts) !!};

        const title = 'Monthly Sales';

        const options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    grid: { display: false },
                    ticks: { color: '#4B5563' }
                },
                y: {
                    grid: { borderColor: '#E5E7EB' },
                    ticks: { color: '#4B5563' }
                }
            }
        };

        const ctx = document.getElementById('myLineChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: title,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        data: totalSalesData,
                        fill: true,
                    }
                ]
            },
            options: options
        });

        function openPopup() {
            document.getElementById('newOrderPopup').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('newOrderPopup').classList.add('hidden');
        }
    </script>
@endsection
