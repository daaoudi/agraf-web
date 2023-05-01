<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Ouvrage;
use App\Http\Requests\StoreOuvrageRequest;
use App\Http\Requests\UpdateOuvrageRequest;

class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ouvrages= Ouvrage::all();
        return view('main.showOuvrages',compact('ouvrages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devis= Devi::all();
        return view('main.createOuvrage',compact('devis'));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOuvrageRequest $request)
    {
        
        $request->validate([
            'designation' => 'required',
            'qte' => 'required',
            'unite' => 'required',
            'prix_unitaire' => 'required',
            'devi_id' => 'required',
        ]);

                //parsing double inputs
                $parsed_prix_unitaire = floatval($request->input('prix_unitaire'));
                $parsed_qte = floatval($request->input('qte'));
                // Format the parsed value to keep two decimal places
                $prix_unitaire = number_format($parsed_prix_unitaire, 2);
                $qte = number_format($parsed_qte, 2);
        
                $ouvrage = new Ouvrage();
                $ouvrage->designation_ouvrages = $request->input('designation');
                $ouvrage->qte = $qte;
                $ouvrage->unite = $request->input('unite');
                $ouvrage->prix_unitaire = $prix_unitaire;
                $ouvrage->devi_id = $request->input('devi_id');
        
                //auto generatted fields
                $ouvrage->taux_avancement = 0;

                $ouvrage->save();

                return redirect()->route('ouvrages.index')->with(['success'=>'devi ajouté avec succées']);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrage $ouvrage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOuvrageRequest $request, Ouvrage $ouvrage)
    {
        $request->validate([
            'designation' => 'required',
            'qte' => 'required',
            'unite' => 'required',
            'prix_unitaire' => 'required',
            'devi_id' => 'required',
        ]);
        

        $ouvrage->update([
            'designation_ouvrages' => $request->designation,
            'qte' => $request->qte,
            'unite' => $request->unite,
            'prix_unitaire' => $request->prix_unitaire,
            'taux_avancement' =>0
        ]);
        return redirect()->route('ouvrages.index')->with(['success' => 'devi modifié']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrage $ouvrage)
    {
        //
    }
}
