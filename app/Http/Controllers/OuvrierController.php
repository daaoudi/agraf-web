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
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'cin' => 'required',
            'type' => 'required',
            'salaire_par_semaine' => 'required',
            
            
            'chantier_id' => 'required|exists:chantiers,id',
            
            
        ]);


      
    
        $ouvrier = new Ouvrier();
        $ouvrier->nom = $request->input('nom');
        $ouvrier->prenom = $request->input('nom');
        $ouvrier->telephone = $request->input('nom');
        $ouvrier->cin = $request->input('nom');
        $ouvrier->type = $request->input('nom');
        $ouvrier->salaire_par_semaine = $request->input('nom');
        $ouvrier->chantier_id = $request->input('nom');
        $ouvrier->save();

        return redirect()->route('dashboard')->with(['success'=>'ouvrier ajoute']);
    
       
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
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'cin' => 'required',
            'type' => 'required',
            'salaire_par_semaine' => 'required',
            
            
            'chantier_id' => 'required|exists:chantiers,id',
            
            
        ]);

        $ouvrier1=Ouvrier::findOrFail($ouvrier);

        $ouvrier1->nom=$request->get('nom');
        $ouvrier1->prenom=$request->get('prenom');
        $ouvrier1->telephone=$request->get('telephone');
        $ouvrier1->cin=$request->get('cin');
        $ouvrier1->type=$request->get('type');
        $ouvrier1->salaire_par_semaine=$request->get('salaire_par_semaine');
        $ouvrier1->chantier_id=$request->get('chantier_id');

        $ouvrier1->update();

        

        return redirect()->route('dashboard')->with(['success'=>'ouvrier modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrier $ouvrier)
    {
        //
        $ouvrier1=Ouvrier::findOrFail($ouvrier);
        $ouvrier1->delete();
        return redirect()->route('dashboard')->with(['sucess'=>'ouvrier supprime']);
    }
}
