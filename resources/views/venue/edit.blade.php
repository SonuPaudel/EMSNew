@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold mt-5 pt-10 text-black">Edit Venue</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Edit Details</h2>
    <form action="{{ route('venue.update', $venue->id) }}" method="POST" enctype="multipart/form-data" class="px-6 py-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 rounded-lg mt-2" placeholder="Enter Venue-name" value="{{ $venue->name }}">
            @error('name')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="location" class="text-gray-600">Location</label>
            <input type="text" id="location" name="location" class="w-full p-2 rounded-lg mt-2" placeholder="Enter location" value="{{ $venue->location }}">
            @error('location')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="capacity" class="text-gray-600">Capacity</label>
            <input type="text" id="capacity" name="capacity" class="w-full p-2 rounded-lg mt-2" placeholder="Enter Capacity" value="{{ $venue->capacity }}">
            @error('capacity')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="text-gray-600">Description</label>
            <textarea id="description" name="description" class="w-full p-2 rounded-lg mt-2" placeholder="Description">{{ $venue->description }}</textarea>
            @error('description')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <p>Current Image:</p>
            <img class="w-20 mt-2" src="{{ asset('images/venue/' . $venue->photopath) }}" alt="">
            <input type="file" id="photopath" name="photopath" class="mt-2">
            @error('photopath')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-center items-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800">Update</button>
            <a href="{{ route('venue.index') }}" class="bg-red-600 text-white ml-4 px-4 py-2 rounded-lg hover:bg-red-800">Exit</a>
        </div>
    </form>
</div>

@endsection