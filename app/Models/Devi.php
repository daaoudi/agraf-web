<?php

namespace App\Models;

use App\Models\Charge;
use App\Models\Ouvrage;
use App\Models\Reglement;
use App\Models\PosteOuvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devi extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "nom_devi",
        "date_devi",
        "devi_numero",
       "totale",
        "document",
    ];

    public function ouvrages(): HasMany
    {
        return $this->hasMany(Ouvrage::class);
    }

    public function poste_ouvriers(): HasMany
    {
        return $this->hasMany(PosteOuvrier::class);
    }

    public function reglements()
    {
        return $this->hasMany(Reglement::class);
    }
    public function charges(): HasMany
    {
        return $this->hasMany(Charge::class);
    }


}