<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    nav {
        background-color: rgb(0, 0, 0, 0.718);
    }
</style>

<body>

    <nav class="p-4 px-16 flex justify-between items-center text-white  text-center ">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="tag" class=" w-24 h-42">
        </div>
        <div class="">
            <a href="/" class="font-bold text-xl px-4">Home</a>
            <a href="/about" class="font-bold text-xl px-4">About Us</a>
            <a href="/event" class="font-bold text-xl px-4">Event</a>
            <a href="/service" class="font-bold text-xl px-4">Services</a>
            <a href="/venue" class="font-bold text-xl px-4">Venue</a>
            <a href="/gallery" class="font-bold text-xl px-4">Gallery</a>
            <a href="/contact" class="font-bold text-xl px-4">Contact Us</a>
            <a href="/login" class="font-bold text-xl px-4">Login</a>
        </div>
    </nav>
    <div class="">
        @yield('content')
    </div>
    <style>
        footer {
            background-color: rgb(0, 0, 0, 0.4);
        }
    </style>
    <footer class=" h-80">
        <div class=" p-5 px-10 grid grid-cols-3 gap-10  w-3.5/12 mt-2">
            <div class="font-semibold text-xl text-white">
                About Us
                <div class="text-white text-sm font-thin">
                    We work and plan all kinds of events for small, medium, large organizations and companies.
                    Our event offers the best and affordable customized package.
                    We plan your event as your demand.
                    We plan and execute Wedding, Birthday, Anniversary,Formal events and many more services in Nepal.
                </div>
            </div>
            <div class="font-semibold text-xl text-white">
                Be in Touch Through
                <div class="text-white text-sm font-thin ">
                    <div class="mt-2">
                        <i class='bx bx-location-plus'></i>
                        <span class="font-medium text-sm">Location</span>
                        <p>Gaindakot-2,Nawalpur</p>
                    </div>
                    <div class="mt-2">
                        <i class='bx bx-phone'></i>
                        <span class="font-medium text-sm">Phone</span>
                        <p>9807654321</p>
                        <p>9812345678</p>
                    </div>

                    <div class="mt-2">
                        <i class='bx bx-envelope'></i>
                        <span class="font-medium text-sm">Mail</span>
                        <p>infoeventgamil.com</p>
                    </div>
                </div>
            </div>

            <div class="font-semibold text-xl text-white">
                Recent Events
                <div class=" grid grid-cols-2">
                    <img src="{{asset('images/about.png')}}" class=" mt-2 w-20 h-20">
                    <img src="{{asset('images/about.png')}}" class=" mt-2 w-20 h-20">
                    <img src="{{asset('images/about.png')}}" class=" mt-2 w-20 h-20">
                    <img src="{{asset('images/about.png')}}" class=" mt-2 w-20 h-20">
                </div>
            </div>
        </div>
        <div class="bg-neutral-400 w-full mt-5 mb-0 h-16 text-white text-center text-sm font-medium">
            <i class='bx bx-copyright'></i><span>CopyRight 2023</span>

        </div>
    </footer>
</body>

</html>