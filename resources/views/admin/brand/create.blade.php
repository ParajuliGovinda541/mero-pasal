@extends('layouts.app')

@section('content')


<h2 class="">Add brand</h2>
<hr class="h-1 mb-4 bg-blue-200">



<form action="{{ route('admin.brand.store')}}" method="POST" class="mt-5" enctype="multipart/form-data">
@csrf
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >
      brand Name
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" name="name" value="{{old('name')}}"placeholder="Guchhi">
      @error('name')
      <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
  @enderror
    </div>

    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Image
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="photo" value="{{old('photo')}}" id="grid-last-name" type="file" placeholder="">
      @error('photo')
      <p class="text-red-600 text-xs -mt-2">{{$message}}</p>
  @enderror
    </div>


{{-- <input type="text" placeholder="brand Name" name="categories_name" class="w-full rounded-lg border-gray-300 my-2" value="{{old('categories_name')}}">
 --}}

<div class="flex">
<input class="bg-amber-400 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300" type="submit" value="Add brand">
<a class="bg-red-600 text-black px-4 py-2 rounded-lg shadow-md hover:shadow-amber-300"href="{{route('admin.brand.index')}}">Cancel</a>



</div>

</form>


@endsection
