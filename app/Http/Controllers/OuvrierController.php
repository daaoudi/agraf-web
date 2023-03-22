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
        $ouvrier->nom = $validated['nom'];
        $ouvrier->prenom = $validated['prenom'];
        $ouvrier->telephone = $validated['telephone'];
        $ouvrier->cin = $validated['cin'];
        $ouvrier->type = $validated['type'];
        $ouvrier->salaire_par_semaine = $validated['salaire_par_semaine'];
        $ouvrier->chantier_id = $validated['chantier_id'];
        $ouvrier->save();

        return redirect()->route('main.showOuvrier')->with(['sucess'=>'ouvrier ajoute']);
    
       
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
        $ouvrier->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'cin'=>$request->cin,
            'type'=>$request->type,
            'salaire_par_semaine'=>$request->salaire_par_semaine,
            'chantier_id'=>$request->chantier_id
        ]);

        return redirect()->route('main.showOuvrier')->with(['sucess'=>'ouvrier modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrier $ouvrier)
    {
        //
        $ouvrier->delete();
        return redirect()->route('main.showOuvrier')->with(['sucess'=>'ouvrier supprime']);
    }
}
