<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Charge;
use App\Models\Fournisseur;
use App\Models\Ouvrage;
use Illuminate\Http\Request;


class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $charges=Charge::with('devi','fournisseur','ouvrage')->get();
        return view('main.charges.index',compact('charges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $devis=Devi::all();
        $fournisseurs=Fournisseur::all();
        $ouvrages=Ouvrage::all();

        return view('main.charges.createCharges',compact('devis','fournisseurs','ouvrages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "designation" => "required",
            "prix" => "required",
            "qte" => "required",
            "unite" => "required",
            "ouvrage_id" => "required|exists:ouvrages,id",
            "fournisseur_id" => "required|exists:fournisseurs,id",
            "devi_id" => "required|exists:devis,id",
            "mode_paiement" => "required",
            "date" => "required",

        ]);
        //$charge=Charge::create($request->all());
        $charge = new Charge();
        $charge->devi_id=$request->input('devi_id');
        $charge->prix=$request->input('prix');
        $charge->qte=$request->input('qte');
        $charge->designation=$request->input('designation');
        $charge->fournisseur_id=$request->input('fournisseur_id');
        $charge->ouvrage_id=$request->input('ouvrage_id');
        $charge->mode_paiement=$request->input('mode_paiement');
        $charge->date=$request->input('date');

        if($request->mode_paiement === "crédit"){
            $charge->montant_credit =  floatval($request->prix) *  floatval($request->qte);
        }
        else{
            $charge->montant_credit =  0;
  
        }


        $charge->save();
        return redirect()->route('charges.index')->with('success','Charge ajouté avec succès');
    }


    public function show(Charge $charge)
    {
        return view('main.charges.showCharge',compact('charge'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Charge $charge)
    {
        $devis=Devi::all();
        $fournisseurs=Fournisseur::all();
        return view('main.charges.editCharge',compact('charge','devis','fournisseurs'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Charge $charge)
    {
        $request->validate([
            "mod" => "required",
            "mp" => "required",
            "devi_id" => "required|exists:devis,id",
            "fournisseur_id" => "required|exists:fournisseurs,id",
            "matier_id"=>"required|exists:matiers,id",
            "montant_charges_matier" => "required",
            //"montant_credit" => "required",
            "mode_paiement" => "required",
            "date_charge" => "required",


        ]);
        if($request->mode_paiement === "crédit"){
            $charge->montant_credit =  $request->montant_charges_matier;
        }
        else{
            $charge->montant_credit =  0;
  
        }
        $charge->update($request->all());
        return redirect()->route('charges.index')->with('success','Charge modifié avec succès');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Charge $charge)
    {
        $charge->delete();
        return redirect()->route('charges.index')->with('success','Charge supprimé avec succès');
    }
}
