@extends('layouts.app')
@section('content')
<h2 class="text-5xl font-bold mt-5 pt-10 text-black ">Add Event</h2>
<div class=" my-10 w-9/12 h-8/12 border-spacing-2 border-2 bg-slate-200">
    <h2 class="text-xl font-bold  text-black p-2 bg-slate-300">Event Add Table</h2>
    <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data" class=" ml-5 mr-5 mt-2">
        @csrf
        <label for="name" class="-mb-2 text-grey-800">Enter Event Name</label>
        <input type="text" id="name" class="w-full p-2 rounded-lg mb-2" name="name" placeholder="Enter Name" value="{{$event->name}}">
        @error('name')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror
        <label for="rate" class="-mb-2 text-grey-800">Rate</label>

        <input type="text" id="rate" class="w-full p-2 rounded-lg mt-2" name="rate" placeholder="Enter Rate" value="{{$event->rate}}">
        @error('rate')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror
        <input type="text" class="w-full p-2 rounded-lg mt-2" name="capacity" placeholder="Enter Capacity" value="{{$event->capacity}}">
        @error('capacity')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <select class="w-full p-2 rounded-lg mt-2" name="services_id" id="">
            @foreach($services as $services)
            <option value="{{$services->id}}"> {{$services->type}}</option>
            @endforeach
        </select>

        <textarea id="mytextarea" type="text" class="w-full p-2 rounded-lg mt-2" name="description" placeholder="Description" value="">{{$event->description}}</textarea>
        @error('description')
        <span class="text-red-500 -mt-4">* {{$message}}</span>
        @enderror

        <p>Current Images</p>
        <img class="w-20" src="{{asset('images/event/'.$event->photopath)}}" alt="">
        <input type="file" class="mt-2" name="photopath">
        @error('photopath')
        <span class="text-red-500 -mt-4">*{{$message}}</span>
        @enderror

        <br>
        <div class=" mt-10  mb-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-2 py-1  rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{ route('event.index') }}" class="bg-red-600 text-white px-4 py-1.5 rounded-lg cursor-pointer hover:bg-red-800">Exit</a>
        </div>

    </form>
</div>
@endsection