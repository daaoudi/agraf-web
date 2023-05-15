<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Chantier;

use App\Models\PosteOuvrier;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Ouvrier extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nom",
        "prenom",
        "telephone",
        "date_debut",
        "date_fin",
        "cin",
        "type",
        "salaire_par_semaine",
        "chantier_id"
    ];

    public $timestamps=false;


    public function chantier()
{
    return $this->belongsTo(Chantier::class);
}

public function posteOuvriers()
{
    return $this->hasMany(PosteOuvrier::class);
}


}
