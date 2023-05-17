@extends('master')
@section('content')
<div class="flex">
    <style>
        body {
            background: url('images/event.jpg');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
    </style>
    <div class="w-full bg-white mt-72 h-full float-left">
        <div class="text-black text-5xl font-bold text-center mt-5">
            Events
        </div>
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
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 text-center">
                        View Details
                    </button>
                </div>
            </div>
            @endforeach



        </div>

    </div>

</div>
@endsection