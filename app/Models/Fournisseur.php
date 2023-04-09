<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Matier;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nom",
        "prenom",
        "telephone",
        "montant",
        "montant_en_avance",
        
    ];

    public $timestamps=false;


    public function matiers()
    {
        return $this->hasMany(Matier::class);
    }
}
