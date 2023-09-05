@extends('header')
@section('content')
<div class="h-56 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex flex-col items-center justify-center">
    <h2 class="text-white font-bold text-5xl mb-2">My Dashboard</h2>
    <h3 class="text-white font-semibold">Client Area</h3>
</div>
<div class="h-screen bg-gray-50">
    <!-- Navigation Menu and Main Content Area -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-8 mx-4 md:mx-0">
        
        <!-- Navigation Menu -->
        <div class="lg:col-start-4 lg:col-span-2 md:col-start-2 md:col-span-3 p-4 mt-6 md:mt-12 rounded-lg bg-gray-200 h-auto shadow-lg text-center">
    <!-- User Image -->
    <div class="mb-4">
        <img src="{{ asset('images/users/' . auth()->user()->photopath) }}" alt="User Image" class="mx-auto w-32 h-32 rounded-full">
    </div>

    <!-- User Name -->
    <h2 class="text-black font-bold text-3xl mb-4">Hi, {{ auth()->user()->name }}</h2>

    <!-- User Menu -->
    <ul class="space-y-2">
        <li @if(request()->routeIs('userdashboard')) class="bg-green-400 rounded transition duration-300" @endif>
            <a href="{{ route('userdashboard') }}" class="text-black font-bold hover:text-gray-200 hover:bg-green-600 block py-2 px-4 rounded transition duration-300">Dashboard</a>
        </li>
        <li @if(request()->routeIs('userbookings')) class="bg-green-400 rounded transition duration-300" @endif>
            <a href="{{ route('userbookings') }}" class="text-black font-bold hover:text-gray-200 hover:bg-green-600 block py-2 px-4 rounded transition duration-300">View My Booking</a>
        </li>
        <li @if(request()->routeIs('userprofile')) class="bg-green-400 rounded transition duration-300" @endif>
            <a href="{{ route('userprofile') }}" class="text-black font-bold hover:text-gray-200 hover:bg-green-600 block py-2 px-4 rounded transition duration-300">Update Profile</a>
        </li>
        <!-- Add more menu items here -->
    </ul>
</div>


        <!-- Main Content Area -->
        <div class="lg:col-start-6 lg:col-span-5 mt-6 md:mt-12 p-4">
            @yield('content2')
        </div>
        
    </div>
</div>
@endsection
