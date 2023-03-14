<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Client;
use App\Models\Ouvrier;
use App\Models\Matier;

class Chantier extends Model
{

    use HasFactory;


    protected $fillable=[
        "id",
        "designation",
        "client_id",
        "prix",
        "ville",
        "mode_paiement",
    ];

    public $timestamps = false;




    public function matiers():HasMany
    {
        return $this->hasMany(Matier::class);
    }


    public function ouvriers():HasMany
    {
        return $this->hasMany(Ouvrier::class);
    }

    public function client(): BelongsTo
{
    return $this->belongsTo(Client::class, 'client_id');
}
}
