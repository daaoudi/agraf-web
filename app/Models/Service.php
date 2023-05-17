<?php

namespace App\Models;

use App\Models\Ouvrage;
use App\Models\PosteOuvrier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nom_service",
        "description",
        "image",
        "type_service"
        
    ];

    public function posteOuvriers()
    {
        return $this->hasMany(PosteOuvrier::class);
    }
    
    
}
