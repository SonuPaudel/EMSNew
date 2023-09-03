@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold mt-5 pt-10 text-black">Edit Service</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Service Edit Table</h2>
    <form action="{{ route('services.update', $services->id) }}" method="POST" enctype="multipart/form-data" class="px-6 py-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block mt-2 text-gray-700 font-medium">Service Name</label>
            <input type="text" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="Service Name" value="{{ $services->name }}">
            @error('name')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="event_id" class="block mt-2 text-gray-700 font-medium">Choose Event Type</label>
            <select class="w-full p-2 rounded-lg mt-2" name="event_id" id="event_id">
                <option value="{{ $services->event->id }}" selected>{{ $services->event->name }}</option>
            </select>
            @error('event_id')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block mt-2 text-gray-700 font-medium">Description</label>
            <textarea id="mytextarea" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description">{{ $services->description }}</textarea>
            @error('description')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="rate" class="block mt-2 text-gray-700 font-medium">Service Price</label>
            <input type="text" class="w-full p-2 rounded-lg mt-2" id="rate" name="rate" placeholder="Price" value="{{ $services->rate }}">
            @error('rate')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <p>Current Images</p>
            <img class="w-20 mt-2" src="{{ asset('images/services/' . $services->photopath) }}" alt="">
            <input type="file" id="photopath" class="mt-2" name="photopath">
            @error('photopath')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mt-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{ route('services.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg ml-4 cursor-pointer hover:bg-red-800">Exit</a>
        </div>
    </form>
</div>
@endsection
