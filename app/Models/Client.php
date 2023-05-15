<?php

namespace App\Models;

use App\Models\Chantier;
use App\Models\Reglement;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'nom',
        'prenom',
        'telephone',
        'montant',
        'email'
    ];

    public $timestamps = false;

  
    public function reglement()
    {
        return $this->hasOne(Reglement::class);
    }

}
