@extends('layouts.master')
@extends('layouts.links')

@section('content')
    <div class="py-12">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg md:max-w-5xl">
            <div class="md:flex">
                <div class="w-full p-6 px-5 py-5">
                    <div class="md:grid md:grid-cols-3 gap-4">

                        {{-- Cart show component --}}
                        <livewire:user.cart.cart-show />

                        {{-- Cart items and checkout section --}}
                        <div class="col-span-2">
                            @if ($carts->isEmpty())
                                <div class="bg-red-500 border-t-4 border-red-700 text-white px-4 py-3 rounded-md shadow-lg" role="alert">
                                    <div class="flex items-center">
                                        <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m-1 0h-1m3 0h-1m-4 0h-1m-4 0h-1m4 0h1m1-4h2m-2-2a2 2 0 00-2 2h-2a2 2 0 00-2 2H5.5a1.5 1.5 0 00-1.5 1.5v4a1.5 1.5 0 001.5 1.5H6m1 0h8.5a2 2 0 002-2h-1m0 0H7m0 0H6m0 0h-1m8.5 0H7m8-2.5H6" />
                                        </svg>
                                        <p class="font-bold">Your cart is empty!</p>
                                    </div>
                                    <p class="mt-1 text-lg">Please add items to your cart for further features.</p>
                                </div>
                            @else
                                <div class="p-4 mt-4 border-t border-gray-300">
                                    <a href="{{ route('user.checkout') }}"
                                       class="block w-full py-3 px-4 bg-blue-600 text-white font-bold rounded-lg shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
                                        <i class="fas fa-shopping-cart mr-2"></i> Check Out
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
