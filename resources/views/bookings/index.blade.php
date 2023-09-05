@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-5xl font-bold mt-5  pt-10 text-black">Bookings </h2>
<div class=" mt-10 border-2 border-slate-300 w-full">
    <div class="mb-4 p-3  bg-slate-300 ">
        <span class="text-black text-xl font-bold">Bookings List</span>
    </div>
    
    <table id="example" class="display">
        <thead>
            <th>Booking ID</th>
            <th>Customer-Name</th>
            <th>Service Name</th>
            <th>Bookings Date</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->user->name}}</td>
                <td>{{$booking->service->name}}</td>
                <td>{{$booking->booking_date}}</td>
                <td>{{$booking->booking_status}}</td>
                <td>
                    <a href="{{route('bookings.edit',$booking->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-blue-800">View</a>
                    <a onclick="showDelete('{{$booking->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-red-800">Delete</a>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
<div id="deletebox" class=" hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 ">
            <p class="font-bold text-2xl">Are you sure to delete?</p>

            <form action="{{route('bookings.delete')}}" method="POST">
                @csrf
                <input type="hidden" name="dataid" id="dataid" value="">
                <div class="flex mt-10 justify-center ">
                    <input type="submit" value="Yes! Delete" class="bg-blue-600 text-white px-3 py-2 rounded-lg cursor-pointer mx-2">
                    <a onclick="hideDelete()" class="bg-red-600 text-white px-6 py-2 rounded-lg cursor-pointer mx-2">Exit</a>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            columnDefs: [{
                    width: 250,
                    targets: 4
                },


            ],
            
        });

    });
</script>
<script>
    function showDelete(id) {
        $('#deletebox').removeClass('hidden');
        $('#dataid').val(id);
    }

    function hideDelete() {
        $('#deletebox').addClass('hidden');
    }
</script>

@endsection