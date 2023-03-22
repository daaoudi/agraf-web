<?php

namespace App\Http\Controllers;

use App\Models\Chantier;
use Illuminate\Http\Request;

class ChantierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $requests=Chantier::with('client')->get();
        return view('dashboard',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('main.createChantier');
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
            'telephone' => 'required',
            'montant' => 'required',
            'email' => 'required',
            
            
        ]);

        $chantier=new Chantier();
        $chantier->nom=$validated['nom'];
        $chantier->prenom=$validated['prenom'];
        $chantier->telephone=$validated['telephone'];
        $chantier->montant=$validated['montant'];
        $chantier->email=$validated['email'];

        return redirect()->route('main.showChantier')->with(['sucess'=>'chantier ajoute']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chantier $chantier)
    {
        //
        return view('main.showChantier')->with(['ouvrier'=>$chantier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chantier $chantier)
    {
        //
        return view('main.editChantier')->with(['ouvrier'=>$chantier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chantier $chantier)
    {
        //
        $chantier->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'montant'=>$request->montant,
            'email'=>$request->email,
            
            
        ]);

        return redirect()->route('main.showChantier')->with(['sucess'=>'chantier modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chantier $chantier)
    {
        //
        $chantier->delete();
        return redirect()->route('main.showChantier')->with(['sucess'=>'chantier supprime']);
    }
}
