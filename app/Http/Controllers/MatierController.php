<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Charge;
use App\Models\Matier;

use App\Models\Chantier;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class MatierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $matiers=Matier::with('charge')->get();
        return view('main.matiers.index',compact('matiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        $charges=Charge::all();
        return view('main.matiers.createMatier')->with(['charges'=>$charges]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'type'=>'required',
            'designation'=>'required',
            'matiere_unite'=>'required',
            'qte'=>'required',
            'prix'=>'required',
            
        ]);

        $matier=new Matier();
        $matier->type=$request->input('type');
        $matier->designation=$request->input('designation');
        $matier->matiere_unite=$request->input('matiere_unite');
        $matier->qte=$request->input('qte');
        $matier->prix=$request->input('prix');
        
       

        $matier->save();

        return redirect()->route('matiers.index')->with(['success'=>'matier ajouté']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Matier $matier)
    {
        //
        return view('main.matiers.showMatier')->with(['matier'=>$matier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matier $matier)
    {
        if (auth()->user()->is_admin) {

        return view('main.matiers.editMatier')->with(['matier'=>$matier]);
        }
        else{
            abort(code:403);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matier $matier)
    {
        //
        $request->validate([
            'type'=>'required',
            'designation'=>'required',
            'matiere_unite'=>'required',
            'qte'=>'required',
            'prix'=>'required',
           
        ]);

        $matier->update([
            'type'=>$request->type,
            'designation'=>$request->designation,
            'matiere_unite'=>$request->matiere_unite,
            'qte'=>$request->qte,
            'prix'=>$request->prix,
        ]);

        return redirect()->route('matiers.index')->with(['success'=>'matier modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matier $matier)
    {
        //
        $matier->delete();
        return redirect()->route('matiers.index')->with(['success'=>'matier supprimer']);
    }
}
