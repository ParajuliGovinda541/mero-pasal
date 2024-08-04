@extends('layouts.app')
@extends('layouts.links')
@extends('layouts.scripts')
@section('content')

@include('layouts.message')

<h2 class="font-bold text-4xl text-blue-800 mb-4">Products</h2>
<hr class="h-1 bg-blue-300 mb-6">

<div class="mb-4 text-right px-10">
    <a class="bg-yellow-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-yellow-600 transition duration-300" href="{{ route('admin.product.create') }}">Add Product</a>
</div>

<div class="overflow-x-auto">
    <table id="mytable" class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead class="bg-blue-700 text-white">
            <tr>
                <th class="py-3 px-4 border-b border-gray-300 text-left">S.N</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Product</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Description</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Price</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Image</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Brand</th>

                <th class="py-3 px-4 border-b border-gray-300 text-left">Quantity</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Category</th>
                <th class="py-3 px-4 border-b border-gray-300 text-left">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class>
                <td class="py-3 px-4 border-b border-gray-300">{{ $loop->iteration }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $product->product_name }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $product->description }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $product->price }}</td>
                <td class="py-3 px-4 border-b border-gray-300">
                    <img class="w-24 h-16 object-cover rounded" src="{{ asset('images/product/'.$product->image_url) }}" alt="{{ $product->product_name }}">
                </td>
                <td class="py-3 px-4 border-b border-gray-300">
                    <img class="w-24 h-16 object-cover rounded" src="{{ asset('images/brand/'.$product->photo) }}" alt="{{ $product->name }}">
                </td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $product->quantity }}</td>
                <td class="py-3 px-4 border-b border-gray-300">{{ $product->categories_name }}</td>
                <td class="py-3 px-4 border-b border-gray-300 flex items-center space-x-2">
                    <a href="{{ route('admin.product.edit', $product->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-blue-700 transition duration-300 text-center">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete?')" href="{{ route('admin.product.destroy', $product->id) }}" class="bg-red-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-red-700 transition duration-300 text-center">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>

<script>
    let table = new DataTable('#mytable');
</script>

@endsection
