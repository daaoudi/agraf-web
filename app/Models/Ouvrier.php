<?php

namespace App\Models;

use App\Models\Article;

use App\Models\PosteOuvrier;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Ouvrier extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "nom",
        "prenom",
        "telephone",
        "cin",
    ];

    public $timestamps=false;




public function posteOuvriers()
{
    return $this->hasMany(PosteOuvrier::class);
}


}
