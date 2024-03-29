<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devis = Devi::all();
    
        $dev = DB::table('devis')
            ->join('ouvrages', 'devis.id', '=', 'ouvrages.devi_id')
            ->select('devis.*', 'ouvrages.designation_ouvrage', 'ouvrages.prix', 'ouvrages.qte')
            ->get();
    
        $groupedDevis = $dev->groupBy('id');
    
        return view('main.devis.index', compact('devis', 'groupedDevis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.devis.createDevis');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_devi' => 'required',
            'date_devi' => 'required',
            'numero_devi' => 'required',
            
        ]);


        $devi = new Devi();
        $devi->nom_devi = $request->input('nom_devi');
        $devi->date_devi = $request->input('date_devi');
        $devi->numero_devi = $request->input('numero_devi');
      

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
        return view('main.devis.showDevi', compact('devi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devi $devi)
    {
        if (auth()->user()->is_admin) {

            return view('main.devis.editDevi', compact('devi'));
        } else {
            abort(code: 403);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devi $devi)
    {
        $request->validate([
            'nom_devi' => 'required',
            'date_devi' => 'required',
            'numero_devi' => 'required',
           
        ]);

        //Document treatments
        if ($request->hasFile('doc')) {
            $Docfile = $request->file('doc');
            $Docextension = $Docfile->getClientOriginalExtension();
            $Docfilename = time() . "." . $Docextension;
            $Docfile->move('uploads/devis_docs', $Docfilename);
            if (!empty($devi->document)) {
                unlink(public_path('uploads/devis_docs') . '/' . $devi->document);
            }
            $devi->document = $Docfilename;

        }
        $devi->update([
            'nom_devi' => $request->input('nom_devi'),
            'date_devi' => $request->input('date_devi'),
            'numero_devi' => $request->input('numero_devi'),
            
            'document' => $devi->document
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