<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'photopath' => 'required|mimes:png,jpg',
            'description' => 'required',
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
    public function edit($id)
    {
        $services = Services::find($id);
        return view('services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $services = Services::find($id);
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'photopath' => 'nullable|mimes:png,jpg',
            'description' => 'required',
        ]);
        $data['photopath'] = $services->photopath;

        if ($request->file('photopath')) {
            $file = $request->file('photopath');
            $filename = $file->getClientOriginalName();
            $photopath = time() . '_' . $filename;
            $file->move(public_path('/images/services/'), $photopath);
            File::delete(public_path('/images/services/' . $services->photopath));
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
        $services->delete();
        return redirect(route('services.index'))->with('success', 'Services Deleted Successfully');
    }
}
