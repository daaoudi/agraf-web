<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Matier;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unite extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "unite"
    ];

    public $timestamps = false;



    public function matiers():HasMany
    {
        return $this->hasMany(Matier::class);
    }
}
