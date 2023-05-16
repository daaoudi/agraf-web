<?php

namespace App\Http\Controllers;

use App\Models\Ouvrier;
use App\Models\Chantier;
use Illuminate\Http\Request;

class OuvrierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Ouvrier $ouvrier)
    {
        //
        $ouvriers=Ouvrier::all();
        $ouvrier=Ouvrier::find($ouvrier)->posteOuvriers;
        return view('main.ouvriers.index',compact('ouvriers','ouvrier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      
        return view('main.ouvriers.createOuvrier');
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
            'cin' => 'required'           
        ]);


      
    
        $ouvrier = new Ouvrier();
        $ouvrier->nom = $request->input('nom');
        $ouvrier->prenom = $request->input('prenom');
        $ouvrier->telephone = $request->input('telephone');
        $ouvrier->cin = $request->input('cin');
        $ouvrier->save();

        return redirect()->route('ouvriers.index')->with(['success'=>'ouvrier ajoute']);
    
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Ouvrier $ouvrier)
    {
        // 
        return view('main.ouvriers.showOuvrier')->with(['ouvrier'=>$ouvrier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ouvrier $ouvrier)
    {
        if (auth()->user()->is_admin) {

        return view('main.ouvriers.editOuvrier')->with(['ouvrier'=>$ouvrier]);
        }
        else{
            abort(code:403);
       }
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
            'telephone' => 'required|max:10',
            'cin' => 'required'
        ]);


        $ouvrier->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'cin'=>$request->cin,
        ]);


        

        return redirect()->route('ouvriers.index')->with(['success'=>'ouvrier modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrier $ouvrier)
    {
        $ouvrier->delete();
        return redirect()->route('ouvriers.index')->with(['success'=>'ouvrier supprime']);
    }
}
