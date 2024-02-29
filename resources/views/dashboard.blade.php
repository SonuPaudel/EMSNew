@extends('layouts.app')
@section('content')
<main>
    <div class="head-title">
        <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Home</a>
                </li>
            </ul>
        </div>

    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3>Events</h3>
                <p>{{$totalevent}}</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3>Services</h3>
                <p>{{$totalservices}}</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3>Bookings</h3>
                <p>{{$totalbookings}}</p>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Recent Bookings</h3>
                <!-- <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i> -->
            </div>
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Service</th>
                        <th>Booking Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>
                            <img src="{{ asset('images/users/' . $booking->user->photopath) }}" alt="{{ $booking->user->name }}'s Image">
                            <p>{{$booking->user->name}}</p>
                        </td>
                        <td>{{$booking->service->name}}</td>
                        <td>{{$booking->booking_date}}</td>
                        <td><span class="status {{strtolower($booking->booking_status)}}">{{$booking->booking_status}}</span></td>
                        <td>
                            <a href="{{route('bookings.edit',$booking->id)}}" class="bg-blue-600 text-white px-4 py-1 rounded-lg mx-1 cursor-pointer hover:bg-blue-800">View</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- <div class="todo">
            <div class="head">
                <h3>Todos</h3>
                <i class='bx bx-plus'></i>
                <i class='bx bx-filter'></i>
            </div>
            <ul class="todo-list">
                <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
            </ul>
        </div> -->
    </div>
</main>
@endsection