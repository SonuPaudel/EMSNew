@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold text-center text-black mb-8">Add Venue</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Create a New Venue</h2>
    <form action="{{ route('venue.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full p-2 rounded-lg mt-2" placeholder="Enter Venue-name" value="{{ old('name') }}">
            @error('name')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="location" class="text-gray-600">Location</label>
            <input type="text" id="location" name="location" class="w-full p-2 rounded-lg mt-2" placeholder="Enter location" value="{{ old('location') }}">
            @error('location')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="capacity" class="text-gray-600">Capacity</label>
            <input type="text" id="capacity" name="capacity" class="w-full p-2 rounded-lg mt-2" placeholder="Enter Capacity" value="{{ old('capacity') }}">
            @error('capacity')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="text-gray-600">Description</label>
            <textarea id="description" name="description" class="w-full p-2 rounded-lg mt-2" placeholder="Description">{{ old('description') }}</textarea>
            @error('description')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="photopath" class="text-gray-600">Image</label>
            <input type="file" id="photopath" name="photopath" class="mt-2">
            @error('photopath')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-center items-center mt-6">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800">Submit</button>
            <a href="{{ route('venue.index') }}" class="bg-red-600 text-white ml-4 px-4 py-2 rounded-lg hover:bg-red-800">Exit</a>
        </div>
    </form>
</div>
@endsection