@extends('layouts.master')
@extends('layouts.links')

@section('content')
<section class="bg-[#2B2A30]">
    <section>
        <h1 class="text-center text-white text-4xl font-bold">Our Blogs</h1>
    </section>
    <section>
        <div class="">
            <div class="grid grid-cols-3 gap-10 px-20">
                @foreach ($blogs as $blog)
                <div class="rounded-md my-2 shadow overflow-hidden bg-white ">
                    <a href="{{route('user.viewblogs',$blog->id)}}">
                            <div class="h-60 object-cover w-full">
                                <img class=" h-60 w-full object-cover hover:scale-105 duration-700  rounded-t-md"
                                    src="{{ asset('images/blogs/' . $blog->image) }}" alt="">
                            </div>
                            <div class="flex justify-between px-3 pt-1">
                                <i class="ri-calendar-2-line"> {{ $blog->blog_date }}</i>
                                <i class="ri-admin-fill"> {{ $blog->author }}</i>
                            </div>
                            <div class="p-5">
                                <h1 class="font-bold">{{ $blog->title }}Title</h1>
                                <p class="line-clamp-2">{{ $blog->description }}
                                </p>
                            </div>
                        {{$blog->links}} </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>

@endsection
