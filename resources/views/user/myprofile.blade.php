@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 gap-4 min-h-screen bg-gray-100 p-6  mx-auto">
    <div class="flex flex-col items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-3xl font-bold text-center mb-8">Edit Profile</h1>
            <form action="" method="" enctype="multipart/form-data">


                <div class="mb-6 text-center">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="image_url">Profile Image</label>
                    <img class="w-20 h-20 rounded-full mx-auto mb-4  object-cover" src="{{ asset('images/user/' . auth()->user()->image_url) }}" alt="Profile Image">
                    {{-- <input type="file" name="image_url" id="image_url" value=""
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg p-2"> --}}
                    @error('image_url')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Full Name</label>
                    <input type="text" name="name" id="name"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Full Name" value="{{ auth()->user()->name }}">
                    @error('name')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                    <input type="text" name="phone" id="phone"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Phone" value="{{ auth()->user()->phone }}">
                    @error('phone')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                    <input type="text" name="address" id="address"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Address" value="{{ auth()->user()->address }}">
                    @error('address')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input type="email" name="email" id="email"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Email" value="{{ auth()->user()->email }}">
                    @error('email')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <a href="{{route('user.profileedit', auth()->user()->id)}}" type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline">
                    Edit Profile
                </a>
            </form>
        </div>
    </div>
</div>
@endsection
