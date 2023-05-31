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
            <div>
                <form action="" method="POST" class="form-background">
                    @csrf
                    <div class="section-heading">
                        <h4 class="font-bold text-lg text-center text-black">Contact Form</h4>
                    </div>
                    <div class="ml-10 mt-10">
                        <span>Name
                            <input type="text" name="name" class="w-4/6 h-10 border-black bg-transparent" required>
                        </span>
                    </div>
                    <div class="ml-10 mt-10">
                        <span>Email
                            <input type="email" name="email" class="w-4/6 h-10 border-black bg-transparent" required>
                        </span>
                    </div>
                    <div class="ml-10 mt-10">
                        <span>Subject
                            <input type="email" name="name" class="w-4/6 h-10 border-black bg-transparent " required>
                        </span>
                    </div>
                    <div class="ml-10 mt-10">
                        <span>Message
                            <textarea name="message" id="message" class="w-3/4 h-10 border-black bg-transparent"></textarea>
                        </span>
                    </div>
                    <button type="submit" id="form-submit" class=" ml-60 mt-10 mb-5 border-2 border-slate-400 bg-slate-400 cursor-pointer rounded-lg p-2 text-center hover:bg-slate-600" disabled>Send a message</button>
                </form>
            </div>
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