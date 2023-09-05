@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-5xl font-bold mt-5  pt-10 text-black">Offer </h2>
<div class=" mt-10 border-2 border-slate-300 w-full">
    <div class="mb-4 p-3  bg-slate-300 ">
        <span class="text-black text-xl font-bold">Offer List</span>
    </div>
    <div class="my-4 text-right">
        <a href="{{ route('offers.create') }}" class="bg-blue-600 text-white rounded-lg p-2 mr-4 hover:p-2.5 hover:bg-blue-800">Add Offer</a>
    </div>
    <table id="example" class="display">
        <thead>
            <th>ID</th>
            <th>Service-Name</th>
            <th>Rate</th>
            <th>Discounted Rate</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($offers as $offer)
            <tr>
                <td>{{$offer->id}}</td>
                <td>{{$offer->service->name}}</td>
                <td>{{$offer->service->rate}}</td>
                <td>{{$offer->discounted_rate}}</td>
                <td>
                    <a href="{{ route('offers.edit',$offer->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-blue-800">Edit</a>
                    <a onclick="showDelete('{{$offer->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-red-800">Delete</a>
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

            <form action="{{route('offers.delete')}}" method="POST">
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
            responsive: true
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