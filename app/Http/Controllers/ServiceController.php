<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services=Service::all();
        return view('main.services.index')->with(['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('main.services.createService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_service'=>'required',
            'description'=>'required',
            'image'=>'required|image|mimes:png,jpg,lpeg,jfif|max:2048',
            'type_service'=>'required',
        ]);

        if($request->has('image')){
            $file=$request->image;
            $image_name=time(). '_'. $file->getClientOriginalName();
            $file->move(public_path('storage/images'),$image_name);
        }

        $service=new Service();
        $service->nom_service=$request->input('nom_service');
        $service->description=$request->input('description');
        $service->image=$image_name;
        $service->type_service=$request->input('type_service');

        $service->save();

        return redirect()->route('services.index')->with(['success'=>'service ajouter']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
        return view('main.services.showService')->with(['service'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        if (auth()->user()->is_admin) {
        return view('main.services.editService')->with(['service'=>$service]);
        }
        else{
            abort(code:403);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        
        $request->validate([
            'nom_service'=>'required',
            'description'=>'required',
            //'image'=>'required|image|mimes:png,jpg,lpeg,jfif|max:2048',
            'type_service'=>'required',
        ]);
        if($request->has('image')){
            $file=$request->image;
            $image_name=time(). '_'. $file->getClientOriginalName();
            $file->move(public_path('storage/images'),$image_name);
            unlink(public_path('storage/images'). '/'. $service->image );
            $service->image=$image_name;
        }
        $service->update([

            'nom_service'=>$request->nom_service,
            'description'=>$request->description,
            'image'=>$service->image,
            'type_service'=>$request->type_service,
        ]);
        return redirect()->route('services.index')->with(['success'=>'service modifier']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect()->route('services.index')->with(['success'=>'service supprimer']);
    }
}
