@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-5xl font-bold mt-5 pt-10 text-black">Services</h2>
<div class=" mt-10 border-2 border-slate-300 ">
    <div class="mb-4 p-3  bg-slate-300 ">
        <span class="text-black text-xl font-bold">Services List</span>
    </div>
    <div class="my-4 text-right">
        <a href="{{ route('services.create') }}" class="bg-blue-600 text-white rounded-lg mr-4 p-2 hover:p-2.5 hover:bg-blue-800">Add Services</a>
    </div>

    <table id="example" class="display">
        <thead>
            <th>ID</th>
            <th>Services-Name</th>
            <th>Event-Type</th>
            <th>Rate</th>
            <th>Photo</th>

            <th>Action</th>
        </thead>

        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{{$service->id}}</td>
                <td>{{$service->name}}</td>
                <td>{{$service->event->name}}</td>
                <td>{{$service->rate}}</td>
                <td><img class="w-20" src="{{asset('images/services/'.$service->photopath)}}" alt=""></td>
                <td>
                    <a href="{{ route('services.edit',$service->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-blue-800">Edit</a>
                    <a onclick="showDelete('{{$service->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-red-800">Delete</a>
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

            <form action="{{route('services.delete')}}" method="POST">
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