@extends('header')
@section('content')
<!-- component -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<div class="justify-center text-center text-5xl font-bold mt-10 text-indigo-500">Service Details</div>

<div class="flex mt-6 items-center pb-5 border-b-2 border-gray-300 mb-5">
    <div class="flex ml-6 items-center">
        <div class="relative">
        </div>
    </div>
</div>

<section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ asset('images/services/' . $service->photopath) }}">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$service->event->name}}</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$service->name}}</h1>
                <h2 class="text-gray-900 text-xl title-font font-medium mb-1">Description:</h2>
                <p class="leading-relaxed">{{$service->description}}</p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-300 mb-5">
                    <div class="flex ml-6 items-center">
                        <div class="relative">
                        </div>
                    </div>
                </div>
                <div class="flex">
                    @if($offers->isNotEmpty())
                    <span class="title-font font-medium text-2xl text-gray-900">Price: Rs.{{ $offers[0]->discounted_rate }}</span>
                    <del>
                        <p class="title-font font-medium mt-1 text-gray-600 cursor-auto ml-2">{{$service->rate}}</p>
                    </del>
                    @else
                    <span class="title-font font-medium text-2xl text-gray-900">Price: Rs.{{ $service->rate }}</span>
                    @endif
                </div>

                <!-- Booking Form -->
                <form action="{{ route('bookings.store', $service->id) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-4">
                        <label for="booking_date" class="text-gray-800">Booking Date</label>
                        <input type="date" id="booking_date" class="w-full p-2 rounded-lg mt-2 border border-gray-300" name="booking_date" value="{{ old('booking_date') }}">
                        @error('booking_date')
                        <span class="text-red-500 mt-1">* {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="booking_time" class="text-gray-800">Booking Time</label>
                        <input type="time" id="booking_time" class="w-full p-2 rounded-lg mt-2 border border-gray-300" name="booking_time" value="{{ old('booking_time') }}">
                        @error('booking_time')
                        <span class="text-red-500 mt-1">* {{ $message }}</span>
                        @enderror
                    </div>
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    @auth
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    @endauth
                    @if (Auth::check()) 
                    <button type="submit" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded mt-4">
                        Book Service
                    </button>
                    
                    @else
                    <button type="" class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded mt-4">
    <a href="{{ route('login') }}" class="text-white">
        Book Service
    </a>
</button>

                    
                    @endif
                    
                </form>
                <!-- End Booking Form -->
            </div>
        </div>
    </div>
</section>





@endsection