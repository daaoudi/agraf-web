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

        $chantiersNbr = Chantier::count();
        $ouvriersNbr = Ouvrier::count();
        $clientNbr = Client::count();
        $fournisseursNbr = Fournisseur::count();


        $data = DB::table('chantiers')
        ->join('ouvriers', "chantiers.id", "=", "ouvriers.chantier_id")
        ->join('articles', "articles.ouvrier_id", "=", "ouvriers.id")
        ->join('services', "articles.service_id","=","services.id")
        ->select("chantiers.designation AS des","chantiers.*","services.*","articles.*","ouvriers.*")
        ->get();

        $etat_global = DB::table("ouvrages")
        ->join('devis','ouvrages.devi_id','=','devis.id')
        ->get();

$ouvrages = DB::table('ouvrages')
    ->join('devis', 'ouvrages.devi_id', '=', 'devis.id')
    ->select('devis.totale', 'devis.nom_devi', 'ouvrages.designation_ouvrage', 'ouvrages.etat', 'ouvrages.prix', 'ouvrages.qte','ouvrages.unite')
    ->get()
    ->mapToGroups(function ($item) {
        return [
            $item->nom_devi => [
                'designation_ouvrage' => $item->designation_ouvrage,
                'etat' => $item->etat,
                'prix' => $item->prix,
                'qte' => $item->qte,
                'totale' => $item->totale,
                'unite' => $item->unite,
            ]
        ];
    });

        // foreach($ouvrages as $o)
        // {
        //     dd($o);
        // };
        // dd($ouvrages);

        
        return view('mainDashboard',compact('data','chantiersNbr','ouvriersNbr','clientNbr','fournisseursNbr','etat_global','ouvrages'));

    }
}
