<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Psy\Readline\Hoa\EventSource;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $services = Services::all();
        return view('services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('services.create', compact('events'));
    }
    public function edit(Services $services)
    {
        $services->load('event');
        $events = Event::all();
        return view('services.edit', compact('services', 'events'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'event_id' => 'required',
            'photopath' => 'required|mimes:png,jpg',
            'description' => 'required',
            'rate' => 'required',
        ]);
        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/services/'), $photopath);
            $data['photopath'] = $photopath;
        }

        Services::create($data);
        return redirect(route('services.index'))->with('success', 'Services Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(services $sevices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Services $services)
    {

        $data = $request->validate([
            'name' => 'required',
            'event_id' => 'required',
            'description' => 'required',
            'photopath' => 'nullable|mimes:png,jpg',
            'rate' => 'required',

        ]);


        if ($request->hasFile('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/services/'), $photopath);
            if ($services->photopath != null) {
                File::delete(public_path('/images/services/' . $services->photopath));
            }

            $data['photopath'] = $photopath;
        }

        $services->update($data);
        return redirect(route('services.index'))->with('success', 'Services Update Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $services = Services::find($request->dataid);
        File::delete(public_path('/images/services/' . $services->photopath));
        $services->delete();
        
        return redirect(route('services.index'))->with('success', 'Services Deleted Successfully');
    }
}
