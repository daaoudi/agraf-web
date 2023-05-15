<?php

namespace App\Models;

use App\Models\Charge;

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
        "date_r",
    ];

    public $timestamps = false;



    public function charge()
    {
        return $this->hasOne(Charge::class);
    }  
}
