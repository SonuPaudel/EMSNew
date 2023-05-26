@extends('master')
@section('content')
<style>
    .form-background {
        background-image: url('/images/contact.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: fixed;

    }
</style>
<div class="flex">
    <div class="object-cover h-full relative">
        <img class="w-screen" src="{{asset('images/contact-background.jpg')}}" alt="">
        <h2 class="text-black font-bold text-5xl text-center mt-10">Contact Us </h2>
        <div class="grid grid-cols-2 gap-10 p-10 ml-48 w-11/12 h-5/6 mt-5">
            <form action="" method="POST" class="form-background ml-32">
                @csrf
                <div class="ml-10 mt-10">
                    <span>Name:
                        <input class=" w-4/6 h-10  border-black bg-transparent text-left text-sm text-white focus:outline-none border-t-0 border-r-0 border-l-0 border-b-2" type=" text" require>
                    </span>
                </div>
                <div class="ml-10 mt-5">
                    <span>Email:
                        <input class=" w-4/6 h-10  border-black bg-transparent text-left text-sm text-white focus:outline-none border-t-0 border-r-0 border-l-0 border-b-2" type=" text" require>
                    </span>
                </div>
                <div class="ml-10 mt-5">
                    <span>Subject:
                        <input class=" w-4/6 h-10  border-black bg-transparent text-left text-sm text-white focus:outline-none border-t-0 border-r-0 border-l-0 border-b-2" type=" text" require>
                    </span>
                </div>

                <div class="px-6 pt-4 pb-2">
                    <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 text-center">
                        Submit
                    </a>
                </div>
            </form>
            <div class=" px-6 py-4 text-lg">
                <div class="mt-5">
                    <i class='bx bx-location-plus'></i>
                    <span class="font-medium text-lg">Location</span>
                    <p>Gaindakot-2,Nawalpur</p>
                </div>
                <div class="mt-5">
                    <i class='bx bx-phone'></i>
                    <span class="font-medium text-lg">Phone</span>
                    <p>9807654321</p>
                    <p>9812345678</p>
                </div>

                <div class="mt-5">
                    <i class='bx bx-envelope'></i>
                    <span class="font-medium text-lg">Mail</span>
                    <p>infoeventgmail.com</p>
                </div>
            </div>
        </div>




    </div>
</div>
@endsection