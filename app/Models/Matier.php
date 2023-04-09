<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Chantier;

use App\Models\Fournisseur;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        "article_id",
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
    public function article(){
        return $this->belongsTo(Article::class);
    }

  
}
