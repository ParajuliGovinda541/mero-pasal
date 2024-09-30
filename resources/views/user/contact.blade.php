@extends('layouts.master')
@extends('layouts.links')

@section('content')
<div class="container mx-auto my-24 px-6">
    <!-- Section: Design Block -->
    <section class="text-gray-800 mb-32">
        <div class="flex justify-center mb-12">
            <div class="text-center max-w-3xl">
                <h2 class="text-4xl font-bold text-amber-500">Contact Us</h2>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3">


            <!-- Contact Information -->
            <div class="w-full lg:w-7/12 px-3">
                <div style="width:100%;height:0;padding-bottom:178%;position:relative;"><iframe src="https://giphy.com/embed/oorYRC3dAGB6tlgIze" width="100%" height="25%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
                </div>
                <p>
                    <a href="https://giphy.com/gifs/Rising-Gym-oorYRC3dAGB6tlgIze">via GIPHY</a>
                </p>
            </div>
             <!-- Contact Form -->
             <div class="w-full lg:w-5/12 px-3 mb-12 lg:mb-0">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name"
                            class="block w-full px-4 py-3 text-base bg-white border border-gray-300 rounded focus:border-amber-500 focus:ring-amber-500 focus:outline-none transition duration-150">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email"
                            class="block w-full px-4 py-3 text-base bg-white border border-gray-300 rounded focus:border-amber-500 focus:ring-amber-500 focus:outline-none transition duration-150">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4"
                            class="block w-full px-4 py-3 text-base bg-white border border-gray-300 rounded focus:border-amber-500 focus:ring-amber-500 focus:outline-none transition duration-150"></textarea>
                    </div>
                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="sendCopy" name="sendCopy"
                            class="h-4 w-4 text-amber-500 border-gray-300 rounded focus:ring-amber-500 cursor-pointer">
                        <label for="sendCopy" class="ml-2 text-sm text-gray-700 cursor-pointer">Send me a copy of this
                            message</label>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-amber-500 text-white rounded shadow-lg hover:bg-amber-600 transition duration-150">Send</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</div>
@endsection
