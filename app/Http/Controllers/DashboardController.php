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
    ->join('poste_ouvriers','devis.id','=','poste_ouvriers.devi_id')
    ->select('devis.nom_devi','devis.id','charges.prix','charges.qte','reglements.montant','poste_ouvriers.salaire','poste_ouvriers.date_debut','poste_ouvriers.date_fin')
    ->get();

    //MOD = SUM(salaire * nbr_jour)
    //MP = SUM(prix * qte)
    //MP (CHARGES) + MOD (POSTE OUVRIERS) = COUT TOTALE
    //Resultat = Montant Client - COUT TOTALE

   // dd($revenue);
   $credit = DB::table('fournisseurs')
   ->join('charges', 'fournisseurs.id', '=', 'charges.fournisseur_id')
   ->select(DB::raw('SUM(charges.montant_credit) as credit_sum'), 'fournisseurs.nom', 'fournisseurs.prenom','fournisseurs.id')
   ->groupBy('fournisseurs.nom', 'fournisseurs.prenom','fournisseurs.id')
   ->get();



//    dd($credit);



        
        return view('mainDashboard',compact('chantiersNbr','ouvriersNbr','clientNbr','fournisseursNbr','etat_global','ouvrages','revenue','credit'));

    }
}
