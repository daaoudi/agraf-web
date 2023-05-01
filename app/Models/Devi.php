<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devi extends Model
{
    use HasFactory;

    protected $fillable=[
        "designation_ouvrages",
        "qte",
        "unite",
        "prix_unitaire",
        "taux_avancement",
        "document",
        "totale_HT"
    ];
}
