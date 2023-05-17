@extends('master')
@section('content')
<div class="flex">
    <style>
        body {
            background: url('images/gallery1.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
    </style>
    <div class="w-full bg-white mt-72 h-full float-left">
        <div class="text-black text-5xl font-bold text-center mt-5">
            Gallery
        </div>
        <div class="grid grid-cols-3 gap-20 p-10 ml-48 w-9/12 mt-5">

            @foreach ($galleries as $gallery)
            <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-64 object-center" src="{{asset('images/gallery/'.$gallery->photopath) }}" alt="Card Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Name:
                        <span class="font-bold text-xl ">{{$gallery->name}}</span>
                    </div>


                </div>

            </div>
            @endforeach

        </div>

    </div>

</div>
@endsection