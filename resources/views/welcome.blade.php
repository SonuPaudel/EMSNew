@extends('header')
@section('content')
<div class="relative mb-12">
    <img class="w-full sm:h-[300px] md:h-[600px] lg:h-[800px] object-center" src="{{asset('images/home.jpg')}}" alt="">
    <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="lg:text-5xl sm:text-3xl text-left font-bold text-black">Welcome to Our Amazing Website</h2>
    </div>
</div>



<div class="mt-5 text-center">
    <h3 class="text-4xl font-bold text-gray-800 mt-5 mb-12">Top Picks for You</h3>
</div>



<!-- ✅ Grid Section - Starts Here 👇 -->
<section class="px-10 w-fit mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm-grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-7 mt-10 mb-32">

  <!--   ✅ Product card 1 - Starts Here 👇 -->
  @foreach ($offers as $offer)
  <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
    <a href="{{route('servicedetails',$offer->service->id)}}">
      <img src="{{asset('images/services/'.$offer->service->photopath)}}" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
      <div class="px-4 py-3 w-72">
        <span class="text-gray-400 mr-3 uppercase text-xs">{{$offer->service->event->name}}</span>
        <p class="text-lg font-bold text-black truncate block capitalize">{{$offer->service->name}}</p>
        <div class="flex items-center">
          <p class="text-lg font-semibold text-black cursor-auto my-3">{{$offer->discounted_rate}}</p>
          <del>
            <p class="text-sm text-gray-600 cursor-auto ml-2">{{$offer->service->rate}}</p>
          </del>
          
        </div>
      </div>
    </a>
  </div>
  @endforeach
</section>

@endsection