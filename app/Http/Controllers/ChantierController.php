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
       

        $request->validate([
            'designation' => 'required',
            'prix' => 'required',
            'ville' => 'required|max:10',
            'mode_paiment' => 'required',
            'client_id' => 'required|exists:clients,id',
            
            
        ]);

        $chantier=new Chantier();
        $chantier->designation=$request->input('designation');
        $chantier->prix=$request->input('prix');
        $chantier->ville=$request->input('ville');
        $chantier->mode_paiment=$request->input('mode_paiment');
        $chantier->client_id=$request->input('client_id');
        $chantier->save();

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
        $request->validate([
            'designation' => 'required',
            'prix' => 'required',
            'ville' => 'required|max:10',
            'mode_paiment' => 'required',
            'client_id' => 'required|exists:clients,id',
            
            
        ]);

        $chantier1=Chantier::findOrFail($chantier);

        $chantier1->designation=$request->get('designation');
        $chantier1->prix=$request->get('prix');
        $chantier1->ville=$request->get('ville');
        $chantier1->mode_paiment=$request->get('mode_paiment');
        $chantier1->client_id=$request->get('client_id');
        $chantier1->update();

        

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
