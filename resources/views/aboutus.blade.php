@extends('header')
@section('content')
<div class="relative mb-12">
    <img class="w-full sm:h-[300px] md:h-[600px] lg:h-[800px] object-center" src="{{asset('images/about-bg.png')}}" alt="">
    <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="lg:text-5xl sm:text-3xl text-left font-bold text-black">Welcome to Our Amazing Website</h2>
    </div>
</div>
<div class="mt-5 text-center">
    <h3 class="text-4xl font-bold text-gray-800 mt-5 mb-12">Explore About Us</h3>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 px-5 sm:w-9/12 mx-auto">
    <div class="max-w-sm rounded overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 mb-10">
        <img class="w-full h-96 object-cover" src="{{asset('images/logo.png')}}" alt="Card Image">
    </div>
    <div class="px-16 py-12">
        <div class=" lg:text-xl font-semibold text-center">About Us</div>
        <div class=" font-normal sm:text-l text-left sm:text-l">
            We work and paln all kind of events for small, medium, large organizationand companies.
            Our event offer the best and affordable customized package.
            We plan your event as your demand.
            We plan and execute Weding, Birthday, Anniversary, Formal Program events and many more services in NEPAL.
        </div>
    </div>
</div>


@endsection