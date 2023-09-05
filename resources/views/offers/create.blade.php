@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold mt-5 pt-10 text-black">Create Offer</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Create a New Offer</h2>
    <form action="{{ route('offers.store') }}" method="POST" class="px-6 py-4">
        @csrf
        <div class="mb-4">
            <label for="service_id" class="block mt-2 text-gray-700 font-medium">Select Service</label>
            <select class="w-full p-2 rounded-lg mt-2" name="service_id" id="service_id">
                <option value="" selected>--Select Service--</option>
                @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
                @endforeach
            </select>
            @error('service_id')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="discounted_rate" class="block mt-2 text-gray-700 font-medium">Discounted Rate</label>
            <input type="text" class="w-full p-2 rounded-lg mt-2" id="discounted_rate" name="discounted_rate" placeholder="Enter Discounted Rate" value="{{ old('discounted_rate') }}">
            @error('discounted_rate')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mt-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-800">
            <a href="{{ route('offers.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg ml-4 cursor-pointer hover:bg-red-800">Exit</a>
        </div>
    </form>
</div>
@endsection