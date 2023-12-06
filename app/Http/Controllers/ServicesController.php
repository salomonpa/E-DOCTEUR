<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('services.liste', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'type_service'=>'required',
            'description'=>'required',
            

        ]);

        $services = new Services();
        $services->type_service = $request->service;
       

        $services->save();

        return redirect()->route('services.index')->with('status', 'Un service a  été ajoutée avec succes.');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $services = Services::find($id);
        return view('services.details',compact('services'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Services::find($id);
        return view('services.modifier',compact('services'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $specialites = Specialites::find($id);

        $specialites->update([
            'type_service' => $request->type_service,
            'description' => $request->description,
            
        ]);

        return redirect()->route('services.index')->with('status', 'Un service a  été modifiée avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $services = services::find($id);
        $services->delete();
        return redirect()->route('services.index')->with('status', 'Un service a  été supprimée avec succes.');
}
}
