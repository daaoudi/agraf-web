<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Ouvrier;
use App\Models\Service;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $requests=Article::with('ouvrier','service')->get();
        return view('main.showArticles',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
      $ouvriers=Ouvrier::all();
      $services=Service::all();
        return view('main.createArticle')->with(['ouvriers'=>$ouvriers ,'services'=>$services]);
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
            'article_unite'=>"required",
            'ouvrier_id' => 'required|exists:ouvriers,id',
            'service_id' => 'required|exists:services,id',
            
            
        ]);

       

        $article=new Article();
        $article->designation=$request->input('designation');
        $article->description=$request->input('description');
        $article->article_unite=$request->input('article_unite');
        $article->ouvrier_id=$request->input('ouvrier_id');
        $article->service_id=$request->input('service_id');

        $article->save();

        return redirect()->route('articles.index')->with(['success'=>'article ajoute']);
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

      

       

        return redirect()->route('articles.index')->with(['success'=>'article modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
        
        $article->delete();
        return redirect()->route('articles.index')->with(['success'=>'article supprime']);
    }
}
