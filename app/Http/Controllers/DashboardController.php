<?php

namespace App\Http\Controllers;

use App\Models\Chantier;
use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Ouvrier;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){

        $chantiers = Chantier::all();
        $chantiersNbr = count($chantiers);

        $ouvriers = Ouvrier::all();
        $ouvriersNbr = count($ouvriers);

        
        $client = Client::all();
        $clientNbr = count($client);
        
        $fournisseurs = Fournisseur::all();
        $fournisseursNbr = count($fournisseurs);



        $data = DB::table('chantiers')
        ->join('ouvriers', "chantiers.id", "=", "ouvriers.chantier_id")
        ->join('articles', "articles.ouvrier_id", "=", "ouvriers.id")
        ->join('services', "articles.service_id","=","services.id")->select("chantiers.designation AS des","chantiers.*","services.*","articles.*","ouvriers.*")
        ->get();
        
        return view('mainDashboard',compact('data','chantiersNbr','ouvriersNbr','clientNbr','fournisseursNbr'));

    }
}
