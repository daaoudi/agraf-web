<?php

namespace App\Models;

use App\Models\Devi;
use App\Models\Ouvrier;
use App\Models\PosteOuvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ouvrage extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "designation_ouvrage",
        "prix",
        "qte",
        "etat",
        "unite",
        "poste_ouvrier_id",
        "devi_id"
    ];

    public function devi()
    {
        return $this->belongsTo(Devi::class);
    }
    public function poste_ouvrier()
    {
        return $this->belongsTo(PosteOuvrier::class);
    }
}
