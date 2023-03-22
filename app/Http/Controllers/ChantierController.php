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
            'designation' => 'required',
            'prix' => 'required',
            'ville' => 'required',
            'mode_paiment' => 'required',
            'client_id' => 'required|exists:clients,id',
            
            
        ]);

        $chantier=new Chantier();
        $chantier->designation=$validated['designation'];
        $chantier->prix=$validated['prix'];
        $chantier->ville=$validated['ville'];
        $chantier->mode_paiment=$validated['mode_paiment'];
        $chantier->client_id=$validated['client_id'];

        return redirect()->route('dashboard')->with(['sucess'=>'chantier ajoute']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Chantier $chantier)
    {
        //
        return view('main.showChantier')->with(['ouvriers'=>$chantier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chantier $chantier)
    {
        //
        return view('main.editChantier')->with(['ouvriers'=>$chantier]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chantier $chantier)
    {
        //
        $chantier->update([
            'designation'=>$request->designation,
            'prix'=>$request->prix,
            'ville'=>$request->ville,
            'mode_paiment'=>$request->mode_paiment,
            'client_id'=>$request->client_id,
            
            
        ]);

        return redirect()->route('dashboard')->with(['sucess'=>'chantier modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chantier $chantier)
    {
        //
        $chantier->delete();
        return redirect()->route('dashboard')->with(['sucess'=>'chantier supprime']);
    }
}
