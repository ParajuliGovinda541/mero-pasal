@extends('layouts.app')
@extends('layouts.links')
@extends('layouts.scripts')

@section('content')

@include('layouts.message')

<h2 class="text-2xl font-semibold mb-4 text-blue-700">Brands</h2>
<hr class="h-1 mb-6 bg-blue-200">

<div class="my-4 text-right px-10">
    <a class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-blue-600 transition-colors duration-200"
       href="{{ route('admin.brand.create') }}">Add Brand</a>
</div>

<div class="overflow-x-auto">
    <table id="mytable" class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
        <thead class="bg-blue-500 text-white">
            <tr class="text-center">
                <th class="py-2 px-4">S.N</th>
                <th class="py-2 px-4">Brand</th>
                <th class="py-2 px-4">Image</th>
                <th class="py-2 px-4">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr class="border-b border-gray-200 hover:bg-gray-100 transition-colors duration-150">
                <td class="py-2 px-4 ">{{ $loop->iteration }}</td>
                <td class="py-2 px-4 ">{{ $brand->name }}</td>
                <td class="py-2 px-4 text-center"><img class="w-20 h-auto rounded-lg" src="{{ asset('images/brand/' . $brand->photo) }}" alt=""></td>
                <td class="py-2 px-4 ">
                    <a href="{{ route('admin.brand.edit', $brand->id) }}" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600 transition-colors duration-200">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this brand?')" href="{{ route('admin.brand.destroy', $brand->id) }}" class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition-colors duration-200">Delete</a>
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
