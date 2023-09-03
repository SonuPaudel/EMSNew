<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Services;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', compact('events'));
    }
    public function create()
    {
        
        return view('event.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'photopath' => 'required',
            'description' => 'required',
            
        ]);

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/event/'), $photopath);
            $data['photopath'] = $photopath;
        }
        Event::create($data);
        return redirect(route('event.index'))->with('success', 'Event Added Successfully');
    }
    public function edit($id)
    {
        $event = Event::find($id);
       

        return view('event.edit', compact('event'));
    }
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $data = $request->validate([
            'name' => 'required',
            'photopath' => 'nullable',
            'description' => 'required',
            
        ]);
        $data['photopath'] = $event->photopath;

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/event/'), $photopath);
            File::delete(public_path('/images/event/' . $event->photopath));
            $data['photopath'] = $photopath;
        }
        $event = Event::find($id);
        $event->update($data);
        return redirect(route('event.index'))->with('success', 'Event Updated Successfully');
    }
    public function delete(Request $request)
    {
        $event = Event::find($request->dataid);
        $event->delete();
        return redirect(route('event.index'))->with('success', 'Event Deleted Successfully');
    }
}
