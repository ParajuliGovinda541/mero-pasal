@extends('layouts.app')

@section('heading')
    Create Blog
@endsection

@section('content')
    {{-- @include('layouts.message') --}}
    <div>
        <h1 class="text-5xl text-center font-bold mb-10">Create Blog</h1>
    </div>

    <div class="max-w-4xl mx-auto bg-white p-10 rounded-lg shadow-lg">
        <form action="{{route('admin.blogs.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Blog Title</label>
                    <input id="title" name="title" type="text" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Blog Title">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="image" class="block text-gray-700 font-semibold mb-2">Blog Image</label>
                    <input id="image" name="image" type="file" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="priority" class="block text-gray-700 font-semibold mb-2">Priority</label>
                    <input id="priority" name="priority" type="text" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Priority">
                    @error('priority')
                        <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
                    <input id="description" name="description" type="text" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Description">
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="links" class="block text-gray-700 font-semibold mb-2">Blog Links</label>
                    <input id="links" name="links" type="text" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Links">
                    @error('links')
                        <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="blog_date" class="block text-gray-700 font-semibold mb-2">Blog Date</label>
                    <input id="blog_date" name="blog_date" type="date" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    @error('blog_date')
                        <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="author" class="block text-gray-700 font-semibold mb-2">Blog Author</label>
                <input id="author" name="author" type="text" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Enter Author">
                @error('author')
                    <p class="text-red-500 text-sm mt-1">* {{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-center gap-4">
                <button type="submit" class="bg-green-600 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-green-700 transition duration-200">Submit</button>
                <a href="{{ route('admin.blogs.index') }}" class="bg-red-600 text-white font-semibold py-2 px-4 rounded-md shadow-md hover:bg-red-700 transition duration-200">Cancel</a>
            </div>
        </form>
    </div>
@endsection
