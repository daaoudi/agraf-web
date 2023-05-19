<?php

namespace App\Http\Controllers;

use App\Models\Devi;
use App\Models\Client;
use App\Models\Ouvrier;
use App\Models\Service;
use App\Models\Chantier;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){

        $chantiersNbr = Devi::count();
        $ouvriersNbr = Ouvrier::count();
        $clientNbr = Client::count();
        $fournisseursNbr = Fournisseur::count();
        $data = [];
        $etat_global = null;


$ouvrages = DB::table('ouvrages')
    ->join('devis', 'ouvrages.devi_id', '=', 'devis.id')
    ->select('devis.totale', 'devis.nom_devi', 'ouvrages.designation_ouvrage', 'ouvrages.etat', 'ouvrages.prix', 'ouvrages.qte','ouvrages.unite','ouvrages.id')
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
                'id' => $item->id
            ]
        ];
    });


    $revenue = DB::table('devis')
    ->join('reglements','devis.id','=','reglements.devi_id')
    ->join('charges','devis.id','=','charges.devi_id')
    ->select('devis.nom_devi','charges.mod','charges.mp','reglements.montant')
    ->get();

   // dd($revenue);
   $credit = DB::table('fournisseurs')
   ->join('charges', 'fournisseurs.id', '=', 'charges.fournisseur_id')
   ->select(DB::raw('SUM(charges.montant_credit) as credit_sum'), 'fournisseurs.nom', 'fournisseurs.prenom')
   ->groupBy('fournisseurs.nom', 'fournisseurs.prenom')
   ->get();



//    dd($credit);



        
        return view('mainDashboard',compact('data','chantiersNbr','ouvriersNbr','clientNbr','fournisseursNbr','etat_global','ouvrages','revenue','credit'));

    }
}
