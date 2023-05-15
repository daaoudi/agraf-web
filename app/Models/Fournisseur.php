<?php

namespace App\Models;

use App\Models\Charge;
use App\Models\Matier;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nom",
        "prenom",
        "telephone",
        
        
        
    ];

    public $timestamps=false;


    public function charges()
    {
        return $this->hasMany(Charge::class);
    }
}
