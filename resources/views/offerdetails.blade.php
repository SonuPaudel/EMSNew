@extends('master')
@section('content')
<div class="object-cover h-full relative">
    <img class="w-screen" src="{{asset('images/home/eventdetails-background.jpg')}}" alt="">
    <h2 class="text-black font-bold text-5xl text-center mt-10">Package Details</h2>
    <div class="grid grid-cols-2 gap-10 p-10 ml-48 w-9/12 mt-5">
        <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
            <img class="w-full object-cover" src="{{asset('images/offer/'.$offerdetail->photopath) }}" alt="Card Image">
        </div>
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Name:
                <span class="font-bold text-xl ">{{$offerdetail->name}}</span>
            </div>

            <div class=" text-xl mb-2">Rate:
                <span class=" text-xl ">{{$offerdetail->rate}}</span>
            </div>
            <div class="text-xl mb-2">Capacity:
                <span class=" text-xl ">{{$offerdetail->capacity}}</span>
            </div>

            <div class="text-xl mb-2">Details:
                <span class=" text-xl ">{{$offerdetail->description}}</span>
            </div>


        </div>



    </div>
</div>
@endsection