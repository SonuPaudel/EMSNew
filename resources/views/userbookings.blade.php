@extends('userdashboard')

@section('content2')
<div class="bg-gray-200 rounded-lg shadow-lg p-4 overflow-x-auto">
    <h2 class="text-3xl font-bold mb-4 text-center">My Bookings</h2>
    @if(session('success'))
    <p class="text-green-500 mt-4 text-center">{{ session('success') }}</p>
    @endif
    @if($bookings && count($bookings) > 0)
    <table class="w-full border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="p-2 bg-gray-200 border border-gray-400">Booking ID</th>
                <th class="p-2 bg-gray-200 border border-gray-400">Vehicle</th>
                <th class="p-2 bg-gray-200 border border-gray-400">Booking Date</th>
                <th class="p-2 bg-gray-200 border border-gray-400">Booking Time</th>
                <th class="p-2 bg-gray-200 border border-gray-400">Status</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
    @foreach($bookings as $booking)
    <tr>
        <td class="p-2 border border-gray-400">{{ $booking->id }}</td>
        <td class="p-2 border border-gray-400">{{ $booking->service->name }}</td>
        <td class="p-2 border border-gray-400">{{ $booking->booking_date }}</td>
        <td class="p-2 border border-gray-400">{{ $booking->booking_time }}</td>
        <td class="p-2 border border-gray-400">{{ $booking->booking_status }}</td>
        <!-- Add more table data cells as needed -->
    </tr>
    @endforeach
</tbody>

    </table>
    @else
    <p class="text-center">No bookings available.</p>
    @endif
</div>
@endsection