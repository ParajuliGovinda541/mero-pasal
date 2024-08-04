@extends('layouts.app')

@section('content')
    <form action="{{ route('product.store') }}" method="POST"
        class="w-1/2 grid grid-cols-2 gap-10 mx-auto max-w-lg p-6 bg-gradient-to-r from-yellow-50 via-pink-100 to-orange-200 shadow-lg rounded-lg"
        enctype="multipart/form-data">
        @csrf
        <div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="product_name">
                    Product Name
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    type="text" name="product_name" id="product_name" value="{{ old('product_name') }}"
                    placeholder="Clothes">
                @error('product_name')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    name="description" id="description"
                    placeholder="Clothing (also known as clothes, garments, dress, apparel, or attire) is any item worn on the body. Typically, clothing is made of fabrics or textiles, but over time it has included garments made from animal skin and other thin sheets of materials and natural products found in the environment">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="price">
                    Price
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    type="text" name="price" id="price" value="{{ old('price') }}" placeholder="1000">
                @error('price')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="categories_id">
                    Brand
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    name="brand_id" id="brand_id">
                    <option value="">Select Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
                @error('brand_id')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="image_url">
                    Image
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    type="file" name="image_url" id="image_url">
                @error('image_url')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="quantity">
                    Quantity
                </label>
                <input
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    type="text" name="quantity" id="quantity" value="{{ old('quantity') }}" placeholder="10">
                @error('quantity')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block uppercase tracking-wide text-purple-700 text-xs font-bold mb-2" for="categories_id">
                    Category
                </label>
                <select
                    class="appearance-none block w-full bg-white text-gray-700 border border-purple-500 rounded-lg py-3 px-4 mb-3 leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500"
                    name="categories_id" id="categories_id">
                    <option value="">Select Category</option>
                    @foreach ($allcategory as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->categories_name }}</option>
                    @endforeach
                </select>
                @error('categories_id')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-between">
                <input
                    class="bg-purple-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-purple-600 transition-colors duration-200"
                    type="submit" value="Add Product">
                <a class="bg-red-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-red-600 transition-colors duration-200"
                    href="{{ route('admin.product.index') }}">
                    Cancel
                </a>
            </div>
        </div>


    </form>
@endsection
