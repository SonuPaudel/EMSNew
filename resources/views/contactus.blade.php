@extends('header')
@section('content')
<style>
    .bg {
        width: 400px;
        height: 450px;
        background-image: url('images/contact.png');
        background-size: cover;
        background-position: center center;
    }

    .form-control {
        border-top: 0px;
        border-left: 0px;
        border-right: 0px;
    }

    .custom-input {
        background: transparent;
        /* Set background to transparent */
        padding: 10px;
    }
</style>
<div class="relative mb-12">
    <img class="w-full sm:h-[300px] md:h-[600px] lg:h-[800px] object-center" src="{{asset('images/contact-background.jpg')}}" alt="">
    <div class="absolute inset-0 flex items-center justify-center">
        <h2 class="lg:text-5xl sm:text-3xl text-left font-bold text-black">Welcome to Our Amazing Website</h2>
    </div>
</div>
<div class="mt-5 text-center">
    <h3 class="text-4xl font-bold text-gray-800 mt-5 mb-12">Explore Our Contact</h3>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 px-10 sm:w-9/12 mx-auto">
    <form method="POST" class="bg" action="{{ route('contact') }}">
        @csrf
        <h2 class="text-2xl text-center font-semibold text-gray-800 pb-4 pt-2 ">Form</h2>
        <div class="pt-15">
            <div class="mt-4">
                <label for="name" class=" ml-2">Name:</label>
                <input type="text" name="name" class="form-control w-4/6 ml-3 custom-input" required>
            </div>
            <div class="mt-4">
                <label for="email" class=" ml-2">Email:</label>
                <input type="email" name="email" class="form-control w-4/6 ml-3 custom-input" required>
            </div>
            <div class="mt-4">
                <label for="message" class=" ml-2">Message:</label>
                <textarea name="message" rows="5" class="form-control w-4/6  ml-2 custom-input" required></textarea>
            </div>
            <div class="mt-10 text-center">
                <input type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg cursor-pointer hover:bg-blue-800">
            </div>
        </div>
    </form>
    <div class="pl-24">
        <h6 class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
            Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 h-5 w-5">
                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
            Gaindakot-2, Nawalpur, Nepal
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 h-5 w-5">
                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
            info@example.com
        </p>
        <p class="mb-4 flex items-center justify-center md:justify-start">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 h-5 w-5">
                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
            </svg>
            +977 9812345670
        </p>
    </div>
</div>

@endsection