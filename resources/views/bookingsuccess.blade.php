@extends('header')
@section('content')
<div class="container mx-auto -mt-2 flex flex-col justify-center items-center h-screen">
    <div class="text-center">
        <h2 class="text-5xl font-bold text-indigo-500 mb-4">Booking Successful</h2>
        <p class="text-xl text-gray-700">Thank you for booking our service!</p>
    </div>
    <div class="mt-6 text-center">
        <a href="{{ route('index') }}" class="text-blue-500 hover:underline">Back to Home</a>
    </div>
</div>
@endsection
