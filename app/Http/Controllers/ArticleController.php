<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Ouvrier;
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
      $requests=Ouvrier::all();
        return view('main.createOuvrier')->with(['ouvriers'=>$requests]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'designation' => 'required',
            'description' => 'required',
            
            'ouvrier_id' => 'required|exists:ouvriers,id',
            
            
        ]);

       

        $article=new Article();
        $article->designation=$request->input('designation');
        $article->description=$request->input('description');
        $article->ouvrier_id=$request->input('ouvrier_id');

        $article->save();

        return redirect()->route('dashboard')->with(['success'=>'article ajoute']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
        return view('main.showArticle')->with(['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
        return view('main.editArticle')->with(['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
        $request->validate([
            'designation' => 'required',
            'description' => 'required',
            
            //'ouvrier_id' => 'required|exists:ouvriers,id',
            
            
        ]);

        $article->update([
            'designation'=>$request->designation,
            'description'=>$request->description,
        ]);

      

       

        return redirect()->route('dashboard')->with(['success'=>'article modifie']);
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
