@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-4xl font-bold mt-5 pt-10 text-black">View Booking</h2>
    <div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
        <h2 class="text-xl font-bold text-black p-4 bg-slate-300">Booking Details</h2>
        <div class="px-6 py-4">
            <div class="font-semibold text-lg mb-2">Booking Details</div>
            <div class="text-gray-800 mb-2"><strong>Booking ID:</strong> {{ $booking->id }}</div>
            <div class="text-gray-800 mb-2"><strong>Customer Name:</strong> {{ $booking->user->name }}</div>
            <div class="text-gray-800 mb-2"><strong>Service:</strong> {{ $booking->service->name }}</div>
            <div class="text-gray-800 mb-2"><strong>Booking Date:</strong> {{ $booking->booking_date }}</div>
            <div class="text-gray-800 mb-2"><strong>Booking Time:</strong> {{ $booking->booking_time }}</div>
            <div class="text-gray-800 mb-2"><strong>Current Status:</strong> {{ $booking->booking_status }}</div>
        </div>

        <div class="px-6 py-4">
            <div class="font-semibold text-lg mb-2">Update Booking Status</div>
            <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="booking_status" class="text-gray-800">Select Status:</label>
                    <select name="booking_status" id="booking_status" class="w-full p-3 rounded-lg mt-2 border focus:outline-none focus:border-blue-500">
                    <option value="pending" {{ $booking->booking_status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ $booking->booking_status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                        <option value="canceled" {{ $booking->booking_status == 'canceled' ? 'selected' : '' }}>Canceled</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-800 focus:outline-none focus:bg-blue-800">Update Status</button>
                    <a href="{{ route('bookings.index') }}" class="bg-red-500 text-white px-4 py-2 rounded ml-4 hover:bg-red-600 focus:outline-none focus:bg-red-600">Exit</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
