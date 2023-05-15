<?php

namespace App\Models;

use App\Models\Devi;
use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reglement extends Model
{

    protected $fillable = [
        "id",
        "numero_cheque",
        "montant",
        "banque",
        "client_id",
        "projet_id",
        "mode_paiement"
    ];

    public function devi(){
        return $this->belongsTo(Devi::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }

    use HasFactory;
}
