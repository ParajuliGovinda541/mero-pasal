@extends('layouts.master')

@section('content')
    <section class="bg-[#2B2A30] py-2">
        <h1 class="font-bold text-center text-3xl text-white">{{ $blog->title }}Title</h1>
        <div class="grid lg:grid-cols-3 gap-10 px-20 my-10">

            <div class="lg:col-span-2 col-span-1 bg-white px-2">

                <img class="lg:h-[700px] md:h-[600px] rounded-md w-full object-cover bg-cover" src="{{ asset('images/blogs/' . $blog->image) }}" alt="">


                <div class=" px-3 pt-1 flex justify-between">
                    <i class="ri-calendar-2-line mr-12"> {{ $blog->blog_date }}</i>
                    <i class="ri-admin-fill"> {{ $blog->author }}</i>
                </div>
                <div class="p-5">
                    <h1 class="font-bold">{{ $blog->title }}Title</h1>
                    <p class="line-clamp-">{{ $blog->description }}
                    </p>
                </div>
            </div>
            <div>
                <h1 class=" rounded-md text-white text-xl text-center bg-blue-700  uppercase">recent blogs</h1>
                @foreach ($related as $relatedblog)
                <div class="flex items-center bg-white pt-5 hover:scale-105 duration-700 ">

                    <img class="h-28 rounded-md object-cover" src="{{ asset('images/blogs/' . $relatedblog->image) }}" alt="">

                    <div class="">
                        <div class="px-5">
                            <h1 class=" text-blue-600 font-bold">{{ $relatedblog->title }}Title</h1>
                            <p class=" text-sm line-clamp-2">{{ $relatedblog->description }}
                            </p>
                        </div>
                        <div class="text-blue-600 flex justify-between px-3">
                            <i class="ri-calendar-2-line"> {{ $relatedblog->blog_date }}</i>
                            <i class="ri-admin-fill"> {{ $relatedblog->author }}</i>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
