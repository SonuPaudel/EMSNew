@extends('layouts.app')
@section('content')
@include('layouts.message')
<h2 class="text-5xl font-bold mt-5  pt-10 text-black">User </h2>
<div class=" mt-10 border-2 border-slate-300 w-full">
    <div class="mb-4 p-3  bg-slate-300 ">
        <span class="text-black text-xl font-bold">User List</span>
    </div>
    <div class="my-4 text-right">
        <a href="{{ route('user.create') }}" class="bg-blue-600 text-white rounded-lg p-2 mr-4 hover:p-2.5 hover:bg-blue-800">Add User</a>
    </div>
    <table id="example" class="display">
        <thead>
            <th>S.N.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($users as $user)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->user_type}}</td>
                <td>
                    <a href="{{route('user.edit',$user->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1">Edit</a>
                    <a onclick="showDelete('{{$user->id}}')" class="bg-red-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer">Delete</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
<div id="deletebox" class="hidden fixed inset-0 bg-blue-500 bg-opacity-40 backdrop-blur-sm ">
    <div class="flex h-full justify-center items-center">
        <div class="bg-white p-10 rounded-lg">
            <p class="font-bold text-2xl">Are you sure to delete?</p>
            <form action="{{route('user.delete')}}" method="POST">
                @csrf
                <input type="hidden" id="dataid" name="dataid" value="">

                <div class="flex mt-10 justify-center">
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