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
        "prix",
        "qte",
        "unite",
        "designation",
        "mode_paiement",
        "devi_id",
        "fournisseur_id",
        "montant_credit",
        "date_charge",
        "ouvrage_id"
    ];


    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

    public function devi()
    {
        return $this->belongsTo(Devi::class);
    }



}
