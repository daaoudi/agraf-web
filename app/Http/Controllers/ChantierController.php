<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Chantier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChantierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chantiers=DB::table('chantiers')->join('clients',' chantiers.client_id','=','clients.id')
        ->select('chantiers.*','clients.nom')
        ->get();
        //dd($chantiers);
        //$chantiers=Chantier::with('client')->get();
        //$chantiers=Chantier::all();
        //return view('dashboard')->with(['chantiers'=>$chantiers]);
        return view('dashboard',['chantiers'=>$chantiers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $requests=Client::all();
       
        return view('main.createChantier')->with(['clients'=>$requests]);
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
            'ville' => 'required',
            'mode_paiement' => 'required',
            'client_id' => 'required|exists:clients,id',
            
            
        ]);

        $chantier=new Chantier();
        $chantier->designation=$request->input('designation');
        $chantier->prix=$request->input('prix');
        $chantier->ville=$request->input('ville');
        $chantier->mode_paiement=$request->input('mode_paiement');
        $chantier->client_id=$request->input('client_id');
        $chantier->save();

        return redirect()->route('dashboard')->with(['success'=>'chantier ajoute']);
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
            'ville' => 'required',
            'mode_paiement' => 'required',
            'client_id' => 'required|exists:clients,id',
            
            
        ]);

            $chantier->update([
                'designation'=>$request->designation,
                'prix'=>$request->prix,
                'ville'=>$request->ville,
                'mode_paiement'=>$request->mode_paiement,
                'client_id'=>$request->client_id,
            ]);
       

        

        return redirect()->route('dashboard')->with(['success'=>'chantier modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chantier $chantier)
    {
        //
        
        $chantier->delete();
        return redirect()->route('dashboard')->with(['success'=>'chantier supprime']);
    }
}
