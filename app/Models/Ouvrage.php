<?php

namespace App\Models;

use App\Models\Devi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ouvrage extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "designation_ouvrage",
        "prix_unitaire",
        "qte",
        "etat",
        "unite",
        "devi_id"
    ];

    public function devi()
    {
        return $this->belongsTo(Devi::class);
    }
}
