<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Charge;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use App\Http\Requests\StoreChargeRequest;
use App\Http\Requests\UpdateChargeRequest;

class ChargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $charges=Charge::with('devi','fournisseur')->get();
        return view('main.showCharges',compact('charges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $devis=Devi::all();
        $fournisseurs=Fournisseur::all();

        return view('main.createCharge',compact('devis','fournisseurs'));
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
            "devi_id" => "required",
            "fournisseur_id" => "required",
            "montant_charge_matier" => "required",
            "montant_credit" => "required",
            "mode_paiement" => "required",

        ]);
        
        $charge = Charge::create($request->all());
       // $charge->save();
        return redirect()->route('charges.index')->with('success','Charge ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Charge $charge)
    {
        return view('main.showCharge',compact('charge'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Charge $charge)
    {
        $devis=Devi::all();
        $fournisseurs=Fournisseur::all();
        return view('main.showCharge',compact('devis','fournisseurs'));
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Charge $charge)
    {
        $request->validate([
            "mod" => "required",
            "mp" => "required",
            "devi_id" => "required",
            "fournisseur_id" => "required",
            "montant_charge_matier" => "required",
            "montant_credit" => "required",
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
