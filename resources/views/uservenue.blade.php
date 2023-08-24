@extends('header')
@section('content')
<div class="relative mb-12">
    <img class="w-full sm:h-[300px] md:h-[600px] lg:h-[800px] object-center" src="{{asset('images/venue/venue-bg.png')}}" alt="">
    <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="lg:text-5xl sm:text-3xl text-left font-bold text-white">Welcome to Our Amazing Website</h2>
    </div>
</div>



<div class="mt-5 text-center">
    <h3 class="text-4xl font-bold text-gray-800 mt-5 mb-12">Explore Our Venue</h3>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-5 sm:w-9/12 mx-auto">
    @foreach ($venues as $venue)
    <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 mb-10">
        <img class="w-full h-56 object-cover" src="{{asset('images/venue/'.$venue->photopath)}}" alt="Card Image">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Name:
                <span class="text-xl">{{$venue->name}}</span>
            </div>
            <div class="text-xl mb-2">Location:
                <span class="text-xl">{{$venue->location}}</span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection