<?php

namespace App\Models;

use App\Models\Ouvrage;
use App\Models\Ouvrier;
use App\Models\Service;
use App\Models\Chantier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PosteOuvrier extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "salaire",
        "date_debut",
        "date_fin",
        "poste_ouvrier",
        "ouvrier_id",
        "service_id",
        "ouvrage_id",
    ];

    public function devi()
    {
        return $this->belongsTo(Devi::class);
    }

    public function ouvrier()
    {
        return $this->belongsTo(Ouvrier::class);
    }
    
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function ouvrages()
    {
        return $this->hasMany(Ouvrage::class);
    }

}
