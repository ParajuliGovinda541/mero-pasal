    @extends('layouts.links')
    <div class="min-h-screen bg-gray-100 flex items-center justify-center py-6">
        <div class="container max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-bold text-center mb-6">Edit Profile</h1>
            <form action="{{ route('user.profileedit.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="image_url" class="block text-sm font-medium text-gray-700 mb-2">Profile Image</label>
                    <div class="flex items-center justify-center mb-4">
                        <img class="w-20 h-20 rounded-full" src="{{ asset('images/user/' . auth()->user()->image_url) }}" alt="Profile Picture">
                    </div>
                    <input type="file" name="image_url" id="image_url"
                        class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg p-2">
                    @error('image_url')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" id="name"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Full Name" value="{{ auth()->user()->name }}">
                    @error('name')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                    <input type="text" name="phone" id="phone"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Phone" value="{{ auth()->user()->phone }}">
                    @error('phone')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                    <input type="text" name="address" id="address"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Address" value="{{ auth()->user()->address }}">
                    @error('address')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" id="email"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Email" value="{{ auth()->user()->email }}">
                    @error('email')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" id="password"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Password">
                    @error('password')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="block w-full p-3 border border-gray-300 rounded-lg"
                        placeholder="Confirm Password">
                    @error('password_confirmation')
                        <p class="text-red-600 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded focus:outline-none focus:shadow-outline">
                        Update Account
                    </button>
                </div>
            </form>
        </div>
    </div>

