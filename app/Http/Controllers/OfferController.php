<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Offer;
use App\Models\Services;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::all();
        return view('offer.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Services::all();
        $venue = Venue::all();
        $event = Event::all();
        return view('offer.create', compact('services', 'venue', 'event'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'photopath' => 'required',
            'description' => 'required',
            'capacity' => 'required|numeric',
            'rate' => 'required|numeric',
            'events_id' => 'required',
            'venues_id' => 'required',
            'services_id' => 'required',
        ]);
        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/offer/'), $photopath);
            $data['photopath'] = $photopath;
        }
        Offer::create($data);
        return redirect(route('offer.index'))->with('success', 'Offer Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        $services = Services::all();
        $venue = Venue::all();
        $event = Event::all();

        return view('offer.edit', compact('event', 'services', 'venue', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $offer = Offer::find($id);
        $data = $request->validate([
            'name' => 'required',
            'photopath' => 'nullable',
            'description' => 'required',
            'capacity' => 'required|numeric',
            'rate' => 'required|numeric',
            'events_id' => 'required',
            'venues_id' => 'required',
            'services_id' => 'required',
        ]);
        $data['photopath'] = $offer->photopath;

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/offer/'), $photopath);
            File::delete(public_path('/images/offer/' . $offer->photopath));
            $data['photopath'] = $photopath;
        }
        $offer = Offer::find($id);
        $offer->update($data);
        return redirect(route('offer.index'))->with('success', 'Offer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $offer = Offer::find($request->dataid);
        $offer->delete();
        return redirect(route('offer.index'))->with('success', 'Offer Deleted Successfully');
    }
}
