@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold  text-black ">Dashboard</h2>
<div class="grid grid-cols-2 gap-8 my-6 h-64 ">
    <div class="p-4 flex justify-between bg-green-600 text-white rounded-lg w-3/4">
        <span class="text-4xl font-semibold mt-5">Total Event</span>
        <span class="text-5xl font-normal mt-5">{{$totalevent}}</span>
    </div>
    <div class="p-4 flex justify-between bg-blue-600 text-white rounded-lg w-3/4">
        <span class="text-4xl font-semibold mt-5">Total Services</span>
        <span class="text-5xl font-normal mt-5">{{$totalservices}}</span>
    </div>
    <div class="p-4 flex justify-between bg-red-600 text-white rounded-lg w-3/4">
        <span class="text-4xl font-semibold mt-5">Total Venue</span>
        <span class="text-5xl font-normal mt-5">{{$totalvenue}}</span>
    </div>
    <div class="p-4 flex justify-between bg-red-600 text-white rounded-lg w-3/4 ">
        <span class="text-4xl font-semibold mt-5">Total Package</span>
        <span class="text-5xl font-normal mt-5">{{$totalpackage}}</span>
    </div>
</div>

@endsection