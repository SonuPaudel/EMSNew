@extends('layouts.app')
@section('content')
<h2 class="text-4xl font-bold mt-5 pt-10 text-black">Edit User</h2>
<div class="my-10 w-11/12 md:w-9/12 lg:w-8/12 mx-auto border-2 bg-slate-200 rounded-lg">
    <h2 class="text-xl font-bold text-black p-2 bg-slate-300">Edit User Information</h2>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="px-6 py-4">
        @csrf
        

        <div class="mb-4">
            <label for="name" class="text-gray-800">User Name</label>
            <input type="text" id="name" class="w-full p-2 rounded-lg mt-2" name="name" placeholder="User Name" value="{{ old('name', $user->name) }}">
            @error('name')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="text-gray-800">Email</label>
            <input type="email" class="w-full p-2 rounded-lg mt-2" name="email" placeholder="Enter Email" value="{{ old('email', $user->email) }}">
            @error('email')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="text-gray-800">New Password (Leave blank to keep the same)</label>
            <input type="password" class="w-full p-2 rounded-lg mt-2" name="password" placeholder="Enter New Password">
            @error('password')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_confirmation" class="text-gray-800">Confirm New Password</label>
            <input type="password" class="w-full p-2 rounded-lg mt-2" name="password_confirmation" placeholder="Confirm New Password">
        </div>

        <div class="mb-4">
            <label for="user_type" class="text-gray-800">Role</label>
            <select class="w-full p-2 rounded-lg mt-2" name="user_type" id="user_type">
                <option value="user" {{ $user->user_type === 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ $user->user_type === 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            @error('user_type')
            <span class="text-red-500 mt-1">* {{ $message }}</span>
            @enderror
        </div>

        <div class="mt-10 text-center">
            <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-800" value="Update">
            <a href="{{ route('user.index') }}" class="bg-red-600 text-white px-4 py-2 rounded-lg ml-4 cursor-pointer hover:bg-red-800">Exit</a>
        </div>
    </form>
</div>
@endsection
