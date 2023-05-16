<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Client;
use App\Models\Reglement;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReglementRequest;
use App\Http\Requests\UpdateReglementRequest;

class ReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reglements=Reglement::with('devi','client')->get();
        return view('main.reglements.showReglements',compact('reglements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $devis=Devi::all();
        $clients=Client::all();
        return view('main.reglements.index',compact('devis','clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'montant'=>'required|numeric',
            'devi_id'=>'required|exists:devis,id',
            'client_id'=>'required|exists:clients,id',
            'mode_paiement'=>'required',
        ]);

        $reglement=new Reglement();
        $reglement->montant=$request->montant;
        $reglement->devi_id=$request->devi_id;
        $reglement->client_id=$request->client_id;
        $reglement->mode_paiement=$request->mode_paiement;
        $reglement->save();
        return redirect()->route('reglements.index')->with(['success'=>'reglement ajouter']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Reglement $reglement)
    {
        return view('main.reglements.showReglement',compact('reglement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reglement $reglement)
    {
        $devis=Devi::all();
        $clients=Client::all();
        return view('main.reglements.editReglement',compact('reglement','devis','clients'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reglement $reglement)
    {
        $request->validate([
            'montant'=>'required|numeric',
            'devi_id'=>'required|exists:devis,id',
            'client_id'=>'required|exists:clients,id',
            'mode_paiement'=>'required',
        ]);
        $reglement->update($request->all());
        return redirect()->route('reglements.index')->with(['success'=>'reglement modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reglement $reglement)
    {
        //
        $reglement->delete();
        return redirect()->route('reglements.index')->with(['success'=>'reglement supprimer']);
    }
}
