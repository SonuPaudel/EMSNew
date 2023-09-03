<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Offer;
use App\Models\offers;
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
        
        $offers = offers::all();
        return view('offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Services::all();
        return view('offers.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $data=$request->validate([
            'service_id'=>'required',
            'discounted_rate'=>'required',
        ]);
        $offer=offers::create($data);
        return redirect(route('offers.index'))->with('success','Offer Created Successfully');
        
    }

    /**
     * Display the specified resource.
     */ 
    public function show(Offers $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $offer = Offers::find($id);
        $services = Services::all();
       
        $event = Event::all();

        return view('offers.edit', compact('event', 'services', 'offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $data=$request->validate([
            'service_id'=>'required',
            'discounted_rate'=>'required',
        ]);
        $offer=offers::find($id);
        $offer->update($data);
        return redirect(route('offers.index'))->with('success','Offer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request){
        $offer=offers::find($request->dataid);
        $offer->delete();
        return redirect(route('offers.index'))->with('success','Offer Deleted Successfully');
    }
}
