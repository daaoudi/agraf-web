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
        "chantier_id",
        "fournisseur_id",
        "date_r",
        "nmbr_piece_utiliser"

    ];

    public $timestamps = false;

    public function chantier(): BelongsTo
    {
        return $this->belongsTo(Chantier::class, 'chantier_id');
    }

    public function fournisseur(): BelongsTo
    {
        return $this->belongsTo(Fournisseur::class, 'foursnisseur_id');
    }

    public function unite(): HasMany
    {
        return $this->hasMany(Unite::class);
    }
}
