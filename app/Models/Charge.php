<?php

namespace App\Models;

use App\Models\Devi;
use App\Models\Matier;
use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charge extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "mod",
        "mp",
        "mode_paiement",
       "devi_id",
        "fournisseur_id",
        "matier_id",
        "montant_charges_matier",
        "montant_credit"
    ];

    public function matier()
    {
        return $this->belongsTo(Matier::class);
    }
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function devi()
    {
        return $this->belongsTo(Devi::class);
    }



}
