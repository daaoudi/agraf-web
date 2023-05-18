<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Charge;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChargeRequest;
use App\Http\Requests\UpdateChargeRequest;
use App\Models\Matier;

class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $charges=Charge::with('devi','fournisseur')->get();
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
        $matiers=Matier::all();

        return view('main.charges.createCharges',compact('devis','fournisseurs','matiers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "mod" => "required",
            "mp" => "required",
            "devi_id" => "required|exists:devis,id",
            "fournisseur_id" => "required|exists:fournisseurs,id",
            "matier_id"=>"required|exists:matiers,id",
            "montant_charges_matier" => "required",
            //"montant_credit" => "required",
            "mode_paiement" => "required",

        ]);
        //$charge=Charge::create($request->all());
        $charge = new Charge();
        $charge->mod=$request->input('mod');
        $charge->mp=$request->input('mp');
        $charge->devi_id=$request->input('devi_id');
        $charge->fournisseur_id=$request->input('fournisseur_id');
        $charge->matier_id=$request->input('matier_id');
        $charge->montant_charges_matier=$request->input('montant_charges_matier');
        $charge->montant_credit=$request->input('montant_credit');
        $charge->mode_paiement=$request->input('mode_paiement');
        $charge->save();
        return redirect()->route('charges.index')->with('success','Charge ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
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
        $matiers=Matier::all();
        return view('main.showCharge',compact('charge','devis','fournisseurs','matiers'));
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
            "montant_charge_matier" => "required",
            //"montant_credit" => "required",
            "mode_paiement" => "required",

        ]);
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
