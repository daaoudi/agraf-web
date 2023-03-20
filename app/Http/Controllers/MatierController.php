<?php

namespace App\Http\Controllers;

use App\Models\Matier;
use Illuminate\Http\Request;

class MatierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $requests=Matier::with('chantier','fournisseur')->get();
        return view('dashboard',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(Matier $matier)
    {
        //
        return view('main.showMatiere')->with(['post'=>$matier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matier $matier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matier $matier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matier $matier)
    {
        //
    }
}