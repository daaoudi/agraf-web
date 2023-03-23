<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients=Client::all();
        return view('main.showClients')->with(['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
       
        return view('main.createClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|max:10',
            'montant' => 'required',
            'email' => 'required',
            
            
        ]);

        $client=new Client();
        $client->nom=$validated['nom'];
        $client->prenom=$validated['prenom'];
        $client->telephone=$validated['telephone'];
        $client->montant=$validated['montant'];
        $client->email=$validated['email'];

        return redirect()->route('main.home');
        /*return redirect()->route('main.showClient')->with(['success'=>'client ajouter'])*/ 
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
        return view('main.showClient')->with(['clients'=>$client]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
        return view('main.editClient')->with(['clients'=>$client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
        $client->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'montant'=>$request->montant,
            'email'=>$request->email,
            
            
        ]);

        return redirect()->route('main.showClients')->with(['sucess'=>'client modifie']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
        $client->delete();
        return redirect()->route('main.showClients')->with(['sucess'=>'client supprime']);
    }
}
