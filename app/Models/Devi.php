<?php

namespace App\Models;

use App\Models\Ouvrage;
use Illuminate\Database\Eloquent\Model;
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
}