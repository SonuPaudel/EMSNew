@extends('master')
@section('content')
<div class="flex">
    <div class="object-cover h-full relative">
        <img class="w-screen" src="{{asset('images/about-background.jpg')}}" alt="">
        <h2 class="text-black font-bold text-5xl text-center mt-10">About Us </h2>
        <div class="grid grid-cols-2 gap-10 p-10 ml-48 w-9/12 mt-5">
            <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img class="w-full object-cover" src="{{asset('images/logo.png')}}" alt="Card Image">
            </div>
            <div class="px-6 py-4">
                We work and plan all kinds of events for small, medium, large organizations and companies.
                Our event offers the best and affordable customized package.
                We plan your event as your demand.
                We plan and execute Wedding, Birthday, Anniversary,Formal events and many more services in Nepal.
            </div>



        </div>
    </div>
</div>
@endsection