<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Chantier;
use App\Models\Article;



class Ouvrier extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nom",
        "prenom",
        "telephone",
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

public function articles()
{
    return $this->hasMany(Article::class);
}


}
