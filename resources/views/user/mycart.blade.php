@extends('layouts.master')
@extends('layouts.links')

@section('content')

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg md:max-w-5xl">
            <div class="md:flex">
                <div class="w-full p-4 px-5 py-5">
                    <div class="md:grid md:grid-cols-3 gap-4">

                        {{-- Cart show component --}}
                        <livewire:user.cart.cart-show />

                        {{-- Cart items and checkout section --}}
                        <div class="col-span-2">
                            @if ($carts->isEmpty())
                            <div class="bg-red-500 border-t border-b border-blue-500 text-white px-4 py-3 rounded-t-md rounded-b-md"
                                role="alert">
                                <p class="font-bold">Informational message</p>
                                <p class="text-xl font-mono">Please Add Items For Further Features.</p>
                            </div>
                            @else
                            {{-- <div class="p-4">
                                <h2 class="text-xl font-bold mb-4">Your Cart Items</h2>
                                {{-- Display cart items here --}}
                            {{-- </div> --}}
                            <div class="p-4 mt-4 border-t border-gray-300">
                                <a href="{{ route('user.checkout') }}"
                                    class="block w-full py-3 px-4 bg-blue-500 text-white font-bold rounded focus:outline-none hover:bg-blue-600">
                                    Check Out
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
