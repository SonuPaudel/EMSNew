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
    public function dashboard2()
    {
        return view('layouts.apps');
    }
    public function about()
    {
        return view('aboutus');
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
    public function eventdetails()
    {
        return view('eventdetails');
    }
}
