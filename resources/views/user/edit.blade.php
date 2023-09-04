@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold text-center text-black mb-8">Edit User</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Edit User</h2>
    <form action="{{ route('user.update',$gallery->id) }}" method="POST" enctype="multipart/form-data" class="px-6 py-4>
        @csrf
        <input type=" text" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Enter Name" value="{{$gallery->name}}">
        @error('name')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <textarea id="mytextarea" type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="{{old('description')}}">{{$gallery->description}}</textarea>
        @error('description')
        <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror
        <p>Current Images</p>
        <img class="w-20" src="{{asset('images/gallery/'.$gallery->photopath)}}" alt="">
        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror
        <div class="mt-10 mb-10 text-center">
            <input type="submit" value="Update" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{ route('gallery.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer hover:bg-red-800">Exit</a>
        </div>

    </form>
</div>
@endsection