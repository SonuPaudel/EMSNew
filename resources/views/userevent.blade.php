@extends('master')
@section('content')
<div class="flex">
    <div class="object-cover h-full relative">
        <img class="w-screen" src="{{asset('images/event/event-background.jpg')}}" alt="">
        <h2 class="text-black font-bold text-5xl text-center mt-10">Event Details</h2>
        <div class="grid grid-cols-3 gap-20 p-10 ml-48 w-9/12 mt-5">
            @foreach ($events as $event)
            <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-64 object-center" src="{{asset('images/event/'.$event->photopath) }}" alt="Card Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Name:
                        <span class="font-bold text-xl ">{{$event->name}}</span>
                    </div>

                    <div class=" text-xl mb-2">Rate:
                        <span class=" text-xl ">{{$event->rate}}</span>
                    </div>
                    <div class="text-xl mb-2">Capacity:
                        <span class=" text-xl ">{{$event->capacity}}</span>
                    </div>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="{{route('eventdetails',$event->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 text-center">
                        View Details
                    </a>
                </div>

            </div>
            @endforeach



        </div>

    </div>

</div>
@endsection