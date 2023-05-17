@extends('master')
@section('content')
<div>
    <div class="  mt-10 ml-5">
        <h1 class="text-white font-bold text-5xl ml-10">Welcome You !</h1>
        <h1 class="text-white font-bold text-5xl ml-10">To Our </h1>
        <h1 class="text-white font-bold text-5xl ml-10">EVENT Page </h1>

        <h1 class="text-white font-bold text-6xl mt-56 text-center">MAKE YOUR DAY</h1>
    </div>
    <style>
        body {
            background: url('images/home2.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
    </style>
    <div class="w-full bg-white mt-36 h-full float-left">
        <div class="text-black text-5xl font-bold text-center mt-5">
            Welcome
            <p class="text-sm font-normal mt-9">hjvhvhygcfdzesZSDfdxcxsasazxfctyuyfgadwygaufhfjshfjsguudghuyg<br>
                yufguhbcfjhdbfshdvbygsvfbysxdshfgdfhsfgf<br>
                sajfhvbh<br>
            </p>
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