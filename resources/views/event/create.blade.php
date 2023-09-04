@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold mt-5 pt-10 text-black">Add Event</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Create a New Event</h2>
    <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data" class="px-6 py-4">
        @csrf
        <div class="mb-4">
            <label for="name" class="text-gray-800">Event Name</label>
            <input type="text" id="name" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Event Name" value="{{ old('name') }}">
            @error('name')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="text-gray-800">Description</label>
            <textarea id="mytextarea" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description">{{ old('description') }}</textarea>
            @error('description')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="photopath" class="text-gray-800">Image</label>
            <input type="file" id="photopath" class="mt-2" name="photopath">
            @error('photopath')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mt-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{ route('event.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg ml-4 cursor-pointer hover:bg-red-800">Exit</a>
        </div>
    </form>
</div>
@endsection