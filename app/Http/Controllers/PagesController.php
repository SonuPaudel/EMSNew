<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Gallery;
use App\Models\Offer;
use App\Models\Services;
use App\Models\Venue;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        return view('welcome', compact('offers'));
    }

    public function about()
    {
        return view('aboutus');
    }
    public function contact(Request $request)

    {
        return view('contactus');
    }
    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    }
    public function event()
    {
        $events = Event::all();
        return view('userevent', compact('events'));
    }
    public function service()
    {
        $services = Services::all();
        return view('userservices', compact('services'));
    }
    public function venue()
    {
        $venues = Venue::all();
        return view('uservenue', compact('venues'));
    }
    public function gallery()
    {
        $galleries = Gallery::all();
        return view('usergallery', compact('galleries'));
    }
    public function eventdetails($eventid)
    {
        $eventdetail = Event::find($eventid);
        return view('eventdetails', compact('eventdetail'));
    }
    public function offerdetails($offerid)
    {
        $offerdetail = Offer::find($offerid);
        return view('offerdetails', compact('offerdetail'));
    }
    public function servicedetails($serviceid)
    {
        $servicedetail = Services::find($serviceid);
        return view('servicedetails', compact('servicedetail'));
    }
}
