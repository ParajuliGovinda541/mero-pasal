@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-semibold mb-4 text-purple-800">Add Category</h2>
<hr class="h-1 mb-6 bg-purple-300">

<form action="{{ route('admin.category.store') }}" method="POST" class="mt-5 w-1/2 mx-auto p-6 bg-gradient-to-r from-yellow-50 via-pink-100 to-orange-200 shadow-lg rounded-lg" enctype="multipart/form-data">
    @csrf

    <div class="mb-6">
        <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="categories_name">
            Category Name
        </label>
        <input class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
               type="text"
               name="categories_name"
               id="categories_name"
               value="{{ old('categories_name') }}"
               placeholder="Clothes">
        @error('categories_name')
            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="image_url">
            Image
        </label>
        <input class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
               name="image_url"
               id="image_url"
               type="file">
        @error('image_url')
            <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="flex justify-between">
        <input class="bg-purple-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-purple-600 transition-colors duration-200"
               type="submit"
               value="Add Category">
        <a class="bg-orange-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-orange-600 transition-colors duration-200"
           href="{{ route('admin.category.index') }}">
           Cancel
        </a>
    </div>
</form>

@endsection
