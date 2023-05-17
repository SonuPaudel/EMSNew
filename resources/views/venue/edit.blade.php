@extends('layouts.app')

@section('content')
<h2 class="text-5xl font-bold mt-5  pt-10 text-black ">Add Venue</h2>
<div class=" my-10  w-9/12 h-8/12 border-spacing-2 border-2 bg-slate-200">
    <h2 class="text-xl font-bold  text-black p-2 bg-slate-300">Venue Add Table</h2>
    <form action="{{route('venue.update', $venue ->id)}}" method="POST" class=" ml-5 mr-5 mt-2" enctype="multipart/form-data">
        @csrf

        <input type="text" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Enter Venue-name" value="{{$venue->name}}">
        @error('name')
        <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <input type="text" class="w-full p-2 rounded-lg mt-2" name="location" placeholder="Enter location" value="{{$venue->location}}">
        @error('location')
        <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <textarea id="mytextarea" type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="">{{$venue->description}}</textarea>
        @error('description')
        <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <div class="h-24 w-36 mb-4 mt-3">
            <img src="{{asset('images/venue/'.$venue->photopath)}}">
        </div>

        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <div class="mt-10 mb-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1 rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{route('venue.index')}}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer hover:bg-red-800">Exit</a>
        </div>
    </form>

    @endsection