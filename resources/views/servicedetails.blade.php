@extends('header')
@section('content')
<!-- component -->
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
    <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Book Service</button>
    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
        </svg>
    </button>
</div>

        
      </div>
    </div>
  </div>
</section>
@endsection