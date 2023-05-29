<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Devi;
use App\Models\Ouvrage;


class OuvrageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ouvrages= Ouvrage::with("devi")->get();
        return view('main.ouvrages.index',compact('ouvrages'));

    }
    

    public function getArticles()
    {
        $articles = Ouvrage::all();
        return response()->json($articles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $devis= Devi::all();
        return view('main.ouvrages.createOuvrage',compact('devis'));

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'designation_ouvrage' => 'required',
            'qte' => 'required',
            'unite' => 'required',
            'prix_unitaire' => 'required',
            'devi_id' => 'required|exists:devis,id',
        ]);

                //parsing double
                $parsed_prix_unitaire = floatval($request->input('prix_unitaire'));
                $parsed_qte = floatval($request->input('qte'));
                // Format the parsed value to keep two decimal places
                $prix_unitaire = number_format($parsed_prix_unitaire, 2);
                $qte = number_format($parsed_qte, 2);
        
                $ouvrage = new Ouvrage();
                $ouvrage->designation_ouvrage = $request->input('designation_ouvrage');
                $ouvrage->qte = $qte;
                $ouvrage->unite = $request->input('unite');
                $ouvrage->prix = $request->input('prix_unitaire');
                $ouvrage->devi_id = $request->input('devi_id');
                $ouvrage->save();

                return redirect()->route('ouvrages.index')->with(['success'=>'Ouvrage ajouté avec succées']);
        
    }


    
    public function show(Ouvrage $ouvrage)
    {
        return view('main.ouvrages.showOuvrage')->with(['ouvrage'=>$ouvrage]);
        }


    public function edit(Ouvrage $ouvrage)
    {
        $devis= Devi::all();
        return view('main.ouvrages.editOuvrage',compact('ouvrage','devis'));
    }

    
    public function update(Request $request, Ouvrage $ouvrage)
    {
        $request->validate([
            'designation_ouvrage' => 'required',
            'qte' => 'required',
            'unite' => 'required',
            'prix_unitaire' => 'required',
            'devi_id' => 'required|exists:devis,id',
        ]);
        

        $ouvrage->update([
            'designation_ouvrage' => $request->designation_ouvrage,
            'qte' => $request->qte,
            'unite' => $request->unite,
            'prix' => $request->prix_unitaire,
            'etat' =>$request->etat,
            'devi_id'=>$request->devi_id,
        ]);
        return redirect()->route('ouvrages.index')->with(['success' => 'devi modifié']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ouvrage $ouvrage)
    {
        //
        $ouvrage->delete();
        return redirect()->route('ouvrages.index')->with(['success' => 'devi supprimer']);

    }
}
