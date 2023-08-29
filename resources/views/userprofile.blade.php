@extends('userdashnav')

@section('content2')
<div class="bg-gray-200 rounded-lg shadow-lg p-4">
    <h2 class="text-3xl font-bold mb-4 text-center">Update Profile</h2>
    @if(session('success'))
    <p class="text-green-500 mt-4 text-center justify-center">{{ session('success') }}</p>
    @endif

    <form action="{{ route('updateuserProfile', auth()->user()->id) }}" method="POST" class="max-w-md mx-auto p-6">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name <span class="text-red-500">*</span></label>
            <input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" class="mt-1 p-2 border rounded w-full focus:outline-none focus:border-blue-500">
            @error('name')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email <span class="text-red-500">*</span></label>
            <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="mt-1 p-2 border rounded w-full focus:outline-none focus:border-blue-500">
            @error('email')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="mt-1 p-2 border rounded w-full focus:outline-none focus:border-blue-500">
            @error('password')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 p-2 border rounded w-full focus:outline-none focus:border-blue-500">
            @error('password')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Update Profile</button>
        </div>
    </form>

    

</div>
@endsection
