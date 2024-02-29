<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <title>{{ config('app.name', 'Event') }}</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('datatable/datatables.css') }}">
    <script src="{{ asset('datatable/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('datatable/datatables.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">

        <a href="#" class="brand">
            <i class='bx bx-sm bxs-smile'></i>
            <span class="text">EMS</span>
        </a>
        <ul class="side-menu top">
            <li @if(request()->routeIs('dashboard')) class="active" @endif>
                <a href="{{route('dashboard')}}">
                    <i class='bx bx-sm bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li @if(request()->routeIs('bookings.*')) class="active" @endif>
                <a href="{{route('bookings.index')}}">
                    <i class='bx bx-sm bx-bookmark-heart'></i>
                    <span class="text">Booking</span>
                </a>
            </li>
            <li @if(request()->routeIs('event.*')) class="active" @endif>
                <a href="{{route('event.index')}}">
                    <i class='bx bx-sm bx-calendar-event'></i>
                    <span class="text">Events</span>
                </a>
            </li>
            <li @if(request()->routeIs('services.*')) class="active" @endif>
                <a href="{{route('services.index')}}">
                    <i class='bx bx-sm bxs-briefcase'></i>
                    <span class="text">Services</span>
                </a>
            </li>
            <li @if(request()->routeIs('venue.*')) class="active" @endif>
                <a href="{{route('venue.index')}}">
                    <i class='bx bx-sm bx-current-location'></i>
                    <span class="text">Venue</span>
                </a>
            </li>
            <li @if(request()->routeIs('offers.*')) class="active" @endif>
                <a href="{{route('offers.index')}}">
                    <i class='bx bx-sm bx-package'></i>
                    <span class="text">Offers</span>
                </a>
            </li>
            <li @if(request()->routeIs('gallery.*')) class="active" @endif>
                <a href="{{route('gallery.index')}}">
                    <i class='bx bx-sm bx-images'></i>
                    <span class="text">Gallery</span>
                </a>
            </li>


            <li>
                <a href="{{route('user.index')}}">
                    <i class='bx bx-sm bxs-group'></i>
                    <span class="text">Users</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu">
            <!-- <li>
                <a href="#">
                    <i class='bx bx-sm bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li> -->
            <li>
                <form action="{{route('logout')}}" method="post" class="ml-3">
                    @csrf
                    <i class='bx bx-sm bxs-log-out-circle'></i>
                    <button type="submit">Logout</button>
                    </a>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-md bx-menu'></i>

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <div class="ml-8">
            @yield('content')
        </div>

        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="{{asset('js/admin.js')}}"></script>
</body>

</html>