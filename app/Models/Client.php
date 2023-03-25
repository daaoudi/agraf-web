<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Chantier;

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

    public function chantiers()
    {
        return $this->hasMany(Chantier::class);
    }

}
