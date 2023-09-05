<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Bookings;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('bookings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'user_id' => 'required',
            
            'service_id' => 'required',
            
            'booking_date' => 'required|date',
            'booking_time' => 'required|date_format:H:i',
            'booking_status' => 'nullable',
        ], [
            'booking_date.required' => 'The booking date is required.',
            'booking_date.date' => 'The booking date must be a valid date.',
            'booking_time.required' => 'The booking time is required.',
            'booking_time.date_format' => 'The booking time must be in the format HH:MM.',
        ]);
        
        Bookings::create($data);
        return redirect()->route('bookings.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookings $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookings $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookings $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookings $booking)
    {
        //
    }
    
}
