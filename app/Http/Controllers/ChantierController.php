<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Chantier;
use App\Models\Devi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChantierController extends Controller
{

    public function index()
    {
        $chantiers=Chantier::with('client')->get();

        return view('main.showChantiers',compact('chantiers'));

    }


    public function create()
    {
        //
$devis=Devi::all();
        $requests=Client::all();

        return view('main.createChantier')->with(['clients'=>$requests,'devis'=>$devis]);
    }

    public function store(Request $request)
    {
  $request->validate([
            'designation' => 'required',
            'prix' => 'required',
            'ville' => 'required',
            'mode_paiement' => 'required',
            'client_id' => 'required|exists:clients,id',
            'devi_id'=>'required|exists:devis,id'
        ]);

        $chantier=new Chantier();
        $chantier->designation=$request->input('designation');
        $chantier->prix=$request->input('prix');
        $chantier->ville=$request->input('ville');
        $chantier->mode_paiement=$request->input('mode_paiement');
        $chantier->client_id=$request->input('client_id');
        $chantier->devi_id=$request->input('devi_id');
        $chantier->save();

        return redirect()->route('chantiers.index')->with(['success'=>'chantier ajouter avec sucées']);
    }


    public function show(Chantier $chantier)
    {
        return view('main.showChantier')->with(['chantiers'=>$chantier]);
    }


    public function edit(Chantier $chantier)
    {
        if (auth()->user()->is_admin) {
        return view('main.editChantier')->with(['chantiers'=>$chantier]);
        }
        else{
            abort(code:403);
            }
    }

    public function update(Request $request, Chantier $chantier)
    {
        $request->validate([
            'designation' => 'required',
            'prix' => 'required',
            'ville' => 'required',
            'mode_paiement' => 'required'
        ]);

            $chantier->update([
                'designation'=>$request->designation,
                'prix'=>$request->prix,
                'ville'=>$request->ville,
                'mode_paiement'=>$request->mode_paiement,
            ]);




        return redirect()->route('chantiers.index')->with(['success'=>'chantier modifie']);
    }


    public function destroy(Chantier $chantier)
    {
        $chantier->delete();
        return redirect()->route('chantiers.index')->with(['success'=>'chantier supprime']);
    }
}
