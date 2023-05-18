@extends('master')
@section('content')
<div>
    <div class="object-cover h-full relative">
        <img class="w-screen" src="{{asset('images/home2.jpg')}}" alt="">

        <h2 class="text-black- font-bold text-5xl text-center mt-10">Welcome </h2>
    </div>

    <div class="w-full bg-white mt-24 h-full float-left">
        <div class="text-black text-5xl font-bold text-center mt-5">
            Package
        </div>
        <div class="grid grid-cols-2 gap-20 p-10 ml-auto mr-auto w-9/12 mt-5">
            @foreach ($offers as $offer)
            <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-56 object-center" src="{{asset('images/offer/'.$offer->photopath) }}" alt="Card Image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Name:
                        <span class="font-bold text-xl ">{{$offer->name}}</span>
                    </div>

                    <div class=" text-xl mb-2">Rate:
                        <span class=" text-xl ">{{$offer->rate}}</span>
                    </div>

                </div>
                <div class="px-6 pt-4 pb-2">
                    <button href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 pb-4 rounded transition-colors duration-300 text-center">
                        View Details
                    </button>
                </div>
            </div>
            @endforeach

        </div>
    </div>



    <div>
        Booking Form
    </div>





</div>

</div>
@endsection