<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $requests=Article::with('ouvrier')->get();
        return view('dashboard',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      
        return view('main.createOuvrier');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'designation' => 'required',
            'description' => 'required',
            
            'ouvrier_id' => 'required|exists:ouvriers,id',
        ]);

        $article=new Article();
        $article->designation=$validated['designation'];
        $article->description=$validated['description'];
        $article->ouvrier_id=$validated['ouvrier_id'];

        return redirect()->route('dashboard')->with(['sucess'=>'article ajoute']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
        return view('main.showArticle')->with(['ouvrier'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
        return view('main.editArticle')->with(['ouvrier'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
        $article->update([
            'designation'=>$request->designation,
            'description'=>$request->description,
            
            'ouvrier_id'=>$request->ouvrier_id
        ]);

        return redirect()->route('dashboard')->with(['sucess'=>'article modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        return redirect()->route('dashboard')->with(['sucess'=>'article supprime']);
    }
}
