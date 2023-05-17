<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<style>
    nav {
        background-color: rgb(0, 0, 0, 0.718);
        /* background: url('images/logo.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 24px;
        width: 24px; */
    }
</style>

<body>

    <nav class="p-4  text-white  text-center ">
        <!-- <img src="{{ asset('images/logo.png') }}" alt="tag" class="w-24 h-24"> -->
        <a href="/" class="font-bold text-xl px-4">Home</a>
        <a href="/about" class="font-bold text-xl px-4">About Us</a>
        <a href="/event" class="font-bold text-xl px-4">Event</a>
        <a href="/service" class="font-bold text-xl px-4">Services</a>
        <a href="/venue" class="font-bold text-xl px-4">Venue</a>
        <a href="/gallery" class="font-bold text-xl px-4">Gallery</a>
        <a href="/contact" class="font-bold text-xl px-4">Contact Us</a>
        <a href="/login" class="font-bold text-xl px-4">Login</a>
    </nav>
    <div class="">
        @yield('content')
    </div>
</body>

</html>