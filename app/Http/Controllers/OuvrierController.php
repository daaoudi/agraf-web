<?php

namespace App\Http\Controllers;

use App\Models\Ouvrier;
use Illuminate\Http\Request;

class OuvrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $requests=Ouvrier::with('chantier')->get();
        return view('dashboard',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('main.createOuvrier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|max:10',
            'cin' => 'required|max:10',
            'type' => 'required',
            'salaire_par_semaine' => 'required',
            'chantier_id' => 'required|exists:chantiers,id',
        ]);
    
        $ouvrier = new Ouvrier();
        $ouvrier->title = $validated['title'];
        $ouvrier->body = $validated['body'];
        $ouvrier->user_id = $validated['user_id'];
        $ouvrier->save();
    
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrier $ouvrier)
    {
        // 
        return view('main.showOuvrier')->with(['ouvrier'=>$ouvrier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrier $ouvrier)
    {
        //
        return view('main.editOuvrier')->with(['ouvrier'=>$ouvrier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ouvrier $ouvrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrier $ouvrier)
    {
        //
    }
}
