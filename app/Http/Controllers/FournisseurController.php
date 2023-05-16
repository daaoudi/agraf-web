<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $fournisseurs=Fournisseur::all();
        return view('main.fournisseurs.showFournisseurs')->with(['fournisseurs'=>$fournisseurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('main.fournisseurs.createFournisseur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|max:10',
        ]);
        $fournisseur=new Fournisseur();
        $fournisseur->nom=$request->input('nom');
        $fournisseur->prenom=$request->input('prenom');
        $fournisseur->telephone=$request->input('telephone');


        $fournisseur->save();

        return redirect()->route('fournisseurs.index')->with(['success'=>'fournisseur ajouter']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Fournisseur $fournisseur)
    {
        //
        return view('main.fournisseurs.showFournisseur')->with(['fournisseur'=>$fournisseur]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fournisseur $fournisseur)
    {
        if (auth()->user()->is_admin) {

        return view('main.fournisseurs.editFournisseur')->with(['fournisseur'=>$fournisseur]);
        }
        else{
            abort(code:403);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fournisseur $fournisseur)
    {
        //

        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|max:10',

        ]);

        $fournisseur->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,

        ]);

        return redirect()->route('fournisseurs.index')->with(['success'=>'fournisseur modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fournisseur $fournisseur)
    {
        //
        $fournisseur->delete();
        return redirect()->route('fournisseurs.index')->with(['success'=>'fournisseur supprimer']);
    }
}
