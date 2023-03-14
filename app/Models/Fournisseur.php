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
        "email"
    ];

    public $timestamps=false;


    public function matiers():HasMany
    {
        return $this->hasMany(Matier::class);
    }
}
