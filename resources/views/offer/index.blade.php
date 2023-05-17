@extends('layouts.app')
@section('content')
@include('layouts.message')
<div class="my-8 text-left">
    <a href="{{ route('offer.create') }}" class="bg-blue-600 text-white rounded-lg p-2 hover:p-2.5 hover:bg-blue-800">Add Offer</a>
</div>
<div class="mt-10 border-2 border-slate-300 max-w-5xl">
    <div class="mb-4 p-3  bg-slate-300 ">
        <span class="text-black text-xl font-bold">Offer List</span>
    </div>


    <table id="example" class="display">
        <thead>
            <th>ID</th>
            <th>Offer-Name</th>
            <th>Rate</th>
            <th>Capacity</th>
            <th>Images</th>
            <th>Description</th>
            <th>Action</th>
        </thead>

        <tbody>
            @foreach($offers as $offer)
            <tr>
                <td>{{$offer->id}}</td>
                <td>{{$offer->name}}</td>
                <td>{{$offer->rate}}</td>
                <td>{{$offer->capacity}}</td>
                <td>
                    <div class="h-20 overflow-auto">{!!$offer->description!!}</div>
                </td>
                <td><img class="w-20" src="{{asset('images/offer/'.$offer->photopath)}}" alt=""></td>
                <td>
                    <a href="{{ route('offer.edit',$offer->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-blue-800">Edit</a>
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

            <form action="{{route('offer.delete')}}" method="POST">
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
        $('#example').DataTable();
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