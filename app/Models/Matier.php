<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Chantier;

class Matier extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "type",
        "qte",
        "prix",
        "designation",
        "matiere_unite",
        "chantier_id",
        "fournisseur_id",
        "date_r",
        "nmbr_piece_utiliser"

    ];

    public $timestamps = false;

    public function chantier()
    {
        return $this->belongsTo(Chantier::class);
    }

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }

  
}
