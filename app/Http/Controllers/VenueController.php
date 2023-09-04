<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::all();
        return view('venue.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('venue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photopath' => 'required|mimes:png,jpg',
            'location' => 'required',
            'capacity' => 'required'


        ]);
        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/venue/'), $photopath);
            $data['photopath'] = $photopath;
        }
        Venue::create($data);
        return redirect(route('venue.index'))->with('success', 'Venue Added Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venue $venue)
    {

        return view('venue.edit', compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venue $venue)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photopath' => 'nullable|mimes:png,jpg',
            'location' => 'required',
            'capacity' => 'required'
        ]);
        $data['photopath'] = $venue->photopath;
        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/venue/'), $photopath);
            File::delete(public_path('/images/venue/' . $venue->photopath));
            $data['photopath'] = $photopath;
        }
        $venue->update($data);
        return redirect(route('venue.index'))->with('success', 'Venue Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $venue = Venue::find($request->dataid);
        $venue->delete();
        return redirect(route('venue.index'))->with('success', 'Venue Deleted Successfully');
    }
}
