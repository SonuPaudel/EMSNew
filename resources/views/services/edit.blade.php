@extends('layouts.app')
@section('content')
<h2 class="text-5xl font-bold mt-5 pt-10 text-black ">Edit Service</h2>
<div class=" my-10  w-9/12 h-8/12 border-spacing-2 border-2 bg-slate-200">
    <h2 class="text-xl font-bold  text-black p-2 bg-slate-300">Service Add Table</h2>
    <form action="{{ route('services.update',$services->id) }}" method="POST" enctype="multipart/form-data" class="ml-5 mr-5 mt-2">
        @csrf
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Enter Name" value="{{$services->name}}">
        @error('name')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <input type="text" class="w-full p-2 rounded-lg mt-2" name="type" placeholder="Enter Type" value="{{$services->type}}">
        @error('type')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <textarea id="mytextarea" type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="">{{$services->description}}</textarea>
        @error('description')
        <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror
        <div class="h-24 w-36 mb-4 mt-3">
            <img src="{{asset('images/services/'.$services->photopath)}}">
        </div>
        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <div class="mt-10 mb-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{ route('services.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer hover:bg-red-800">Exit</a>
        </div>

    </form>
</div>
@endsection