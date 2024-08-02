@extends('layouts.master')
@extends('layouts.links')

@section('content')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white dark:bg-gray-800">

        <div style="height: 455px; overflow: auto;">
            @if (count($orders) > 0)
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white sticky top-0  uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">S.N</th>
                            <th scope="col" class="px-6 py-3">Product Image</th>
                            <th scope="col" class="px-6 py-3">Product Name</th>
                            <th scope="col" class="px-6 py-3">Amount</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Ordered Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < count($orders); $i++)
                            @php
                                $order = $orders[$i];
                                $cart = $order->carts[0] ?? null; // Use null if $order->carts is empty
                            @endphp
                            @if ($cart)
                                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-6 py-4">{{ $order->id }}</td>
                                    <td>
                                        <img class="w-16 rounded"
                                            src="{{ asset('images/product/' . $cart->product->image_url) }}" alt="">
                                    </td>
                                    <td class="px-6 py-4">{{ $cart->product->product_name }}</td>
                                    <td class="px-6 py-4">{{ $cart->product->price }}</td>
                                    <td class="px-6 py-4">
                                        @php
                                            $statusClass = '';
                                            switch ($order->status) {
                                                case 'pending':
                                                    $statusClass = 'bg-yellow-200 text-yellow-800';
                                                    break;
                                                case 'verified':
                                                    $statusClass = 'bg-green-200 text-green-800';
                                                    break;
                                                case 'shipped':
                                                    $statusClass = 'bg-blue-200 text-blue-800';
                                                    break;
                                                case 'delivered':
                                                    $statusClass = 'bg-green-200 text-green-800';
                                                    break;
                                                case 'cancelled':
                                                    $statusClass = 'bg-red-200 text-red-800';
                                                    break;
                                                default:
                                                    $statusClass = 'bg-gray-200 text-gray-800';
                                                    break;
                                            }
                                        @endphp
                                        <span class="px-2 py-1 rounded {{ $statusClass }}">{{ $order->status }}</span>
                                    </td>
                                    <td class="px-6 py-4">{{ $order->date }}</td>
                                </tr>
                            @endif
                        @endfor
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                    <div class="text-2xl font-bold text-red-600 dark:text-red-400">
                        No order has been done
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-300">
                        Please check back later or contact support if you believe this is an error.
                    </p>
                </div>
            @endif
        </div>
    </div>

    <script>
        // Dropdown toggle script (if needed)
        document.getElementById('dropdownRadio').addEventListener('click', function() {
            this.classList.toggle('hidden');
        });

        // Handling radio input changes (if needed)
        document.querySelectorAll('#dropdownRadio input[type="radio"]').forEach((input) => {
            input.addEventListener('change', () => {
                console.log(`Selected value: ${input.value}`);
            });
        });
    </script>

@endsection
