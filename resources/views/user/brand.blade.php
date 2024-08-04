@extends('layouts.master')
@extends('layouts.links')

@section('content')


        {{-- start of our  brands --}}
        <section class="px-14 my-10">

            <div>
                <h1 class="my-5 text-center text-xl font-bold">Our Brands</h1>
            </div>
            <div class="grid grid-cols-10">
                @foreach ($brands as $brand)
                <a href="{{ route('user.viewbrand', $brand->id) }}" class="cursor-pointer shadow-2xl text-center">
                    <img class="mx-auto h-32 object-cover" src="{{ asset('images/brand/' . $brand->photo) }}" alt="Brand">
                    <p class="p-2 font-bold">{{$brand->name}}</p>
                </a>
            @endforeach
            </div>
        </section>

        {{-- end of our brands --}}


@endsection
