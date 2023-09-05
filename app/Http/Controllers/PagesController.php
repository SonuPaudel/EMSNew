<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Offer;
use App\Models\offers;
use App\Models\Services;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class PagesController extends Controller
{
    public function index()
    {
       
        $offers = offers::all();
        return view('welcome', compact('offers'));
    }
    public function userdashboard(){
       if (Auth::check()){
        return view('userdashboard');
    }
    else{
        return view('auth.login');
    }
    
        
    }

    public function userprofile()
    {   
        $profiledetails = Auth::user();
        return view('userprofile');
    }
    public function userbookings()
{
    // Load the service relationship for the authenticated user's bookings
    $bookings = Auth::user()->bookings->load('service');

    // Retrieve all services (if needed)
    $services = Services::all();

    return view('userbookings', compact('bookings', 'services'));
}

    
    public function about()
    {
        return view('aboutus');
    }
    public function contact()

    {
        return view('contactus');
    }

    public function events()
    {
        $events = Event::all();
        return view('userevent', compact('events'));
    }
    public function services()
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
   
    public function servicedetails($serviceid)
    {
        $service = Services::find($serviceid);
        $offers = offers::where('service_id', $serviceid)->get();
        
        return view('servicedetails', compact('service', 'offers'));
    }
    public function success(){
        return view('bookingsuccess'); 
    }
    

}
