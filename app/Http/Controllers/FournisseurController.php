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
        return view('main.showFournisseurs')->with(['fournisseurs'=>$fournisseurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('main.createFournisseur');
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
            'montant'=>'required',
            'montant_en_avance'=>'required',
        ]);
        $fournisseur=new Fournisseur();
        $fournisseur->nom=$request->input('nom');
        $fournisseur->prenom=$request->input('prenom');
        $fournisseur->telephone=$request->input('telephone');
        $fournisseur->montant=$request->input('montant');
        $fournisseur->montant_en_avance=$request->input('montant_en_avance');

        $fournisseur->save();

        return redirect()->route('fournisseurs.index')->with(['success'=>'fournisseur ajouter']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Fournisseur $fournisseur)
    {
        //
        return view('main.showFournisseur')->with(['fournisseur'=>$fournisseur]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fournisseur $fournisseur)
    {
        if (auth()->user()->is_admin) {

        return view('main.editFournisseur')->with(['fournisseur'=>$fournisseur]);
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
            'montant'=>'required',
            'montant_en_avance'=>'required',
        ]);

        $fournisseur->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'montant'=>$request->montant,
            'montant_en_avance'=>$request->montant_en_avance,
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
