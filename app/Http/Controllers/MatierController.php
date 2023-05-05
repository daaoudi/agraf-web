<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
        $matiers=Matier::with('chantier','fournisseur','article')->get();
        return view('main.showMatiers',compact('matiers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $chantiers=Chantier::all();
        $fournisseurs=Fournisseur::all();
        $articles=Article::all();
        return view('main.createMatier')->with(['chantiers'=>$chantiers,'fournisseurs'=>$fournisseurs,'articles'=>$articles]);
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
            'date_r'=>'required',
            'nmbr_piece_utiliser'=>'required',
            'chantier_id'=>'required|exists:chantiers,id',
            'article_id'=>'required|exists:articles,id',
            'fournisseur_id'=>'required|exists:fournisseurs,id',


        ]);

        $matier=new Matier();
        $matier->type=$request->input('type');
        $matier->designation=$request->input('designation');
        $matier->matiere_unite=$request->input('matiere_unite');
        $matier->qte=$request->input('qte');
        $matier->prix=$request->input('prix');
        $matier->date_r=$request->input('date_r');
        $matier->nmbr_piece_utiliser=$request->input('nmbr_piece_utiliser');
        $matier->chantier_id=$request->input('chantier_id');
        $matier->article_id=$request->input('article_id');
        $matier->fournisseur_id=$request->input('fournisseur_id');

        $matier->save();

        return redirect()->route('matiers.index')->with(['success'=>'matier ajouté']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Matier $matier)
    {
        //
        return view('main.showMatier')->with(['matier'=>$matier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matier $matier)
    {
        if (auth()->user()->is_admin) {

        return view('main.editMatier')->with(['matier'=>$matier]);
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
            'date_r'=>'required',
            'nmbr_piece_utiliser'=>'required',
           // 'chantier_id'=>'required|exists:chantiers,id',
            //'fournisseur_id'=>'required|exists:fournisseurs,id',


        ]);

        $matier->update([
            'type'=>$request->type,
            'designation'=>$request->designation,
            'matiere_unite'=>$request->matiere_unite,
            'qte'=>$request->qte,
            'prix'=>$request->prix,
            'date_r'=>$request->date_r,
            'nmbr_piece_utiliser'=>$request->nmbr_piece_utiliser,
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
