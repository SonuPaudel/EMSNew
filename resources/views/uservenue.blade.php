@extends('master')
@section('content')
<div class="flex">
    <div class="object-cover h-full relative">
        <img class="w-screen" src="{{asset('images/venue/venue-background.jpg')}}" alt="">

        <h2 class="text-black- font-bold text-5xl text-center mt-10">Venue </h2>
        <div class="grid grid-cols-3 gap-20 p-10 ml-48 w-9/12 mt-5">
            @foreach ($venues as $venue)
            <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-64 object-center" src="{{asset('images/venue/'.$venue->photopath) }}" alt="Card Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Name:
                        <span class="font-bold text-xl ">{{$venue->name}}</span>
                    </div>

                    <div class=" text-xl mb-2">Location:
                        <span class=" text-xl ">{{$venue->location}}</span>
                    </div>

                </div>

            </div>
            @endforeach

        </div>
    </div>
    @endsection