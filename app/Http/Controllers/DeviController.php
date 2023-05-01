<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use Illuminate\Http\Request;

class DeviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devis = Devi::all();
        return view('main.showDevis', compact('devis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.createDevis');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_devi' => 'required',
            'date_devi' => 'required',
            'numero_devi' => 'required',
            'totale' => 'required',
        ]);


        $devi = new Devi();
        $devi->nom_devi = $request->input('nom_devi');
        $devi->date_devi = $request->input('date_devi');
        $devi->numero_devi = $request->input('numero_devi');
        $devi->totale = $request->input('totale');

        //Document treatments
        if ($request->hasFile('doc')) {
            $Docfile = $request->file('doc');
            $Docextension = $Docfile->getClientOriginalExtension();
            $Docfilename = time() . "." . $Docextension;
            $Docfile->move('uploads/devis_docs', $Docfilename);
            $devi->document = $Docfilename;
        } else {
            // return $request;
            $devi->document = "";
        }


        $devi->save();

        return redirect()->route('devis.index')->with(['success' => 'Devi ajouté avec success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Devi $devi)
    {
        return view('main.showDevi', compact('devi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devi $devi)
    {
        if (auth()->user()->is_admin) {

            return view('main.editDevi',compact('devi'));
            }
            else{
                abort(code:403);
           }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devi $devi)
    {
        $request->validate([
            'designation' => 'required',
            'qte' => 'required',
            'unite' => 'required',
            'prix_unitaire' => 'required',
            'totale' => 'required',
        ]);

        //parsing double inputs
        $parsed_prix_unitaire = floatval($request->input('prix_unitaire'));
        $parsed_qte = floatval($request->input('qte'));

        // Format the parsed value to keep two decimal places
        $prix_unitaire = number_format($parsed_prix_unitaire, 2);
        $qte = number_format($parsed_qte, 2);

        $devi->update([
            'designation_ouvrages' => $request->designation,
            'qte' => $request->qte,
            'unite' => $request->unite,
            'prix_unitaire' => $request->prix_unitaire,
            'taux_avancement' =>0
        ]);

        return redirect()->route('devis.index')->with(['success' => 'devi modifié']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devi $devi)
    {
        //
        $devi->delete();
        return redirect()->route('devis.index')->with(['success' => 'devis supprimé en success']);
    }
}