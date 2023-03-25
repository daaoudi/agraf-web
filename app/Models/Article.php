<?php

namespace App\Models;

use App\Models\Ouvrier;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "designation",
        "description",
        "ouvrier_id"
    ];

    public $timestamps = false;

        public function ouvrier()
    {
        return $this->belongsTo(Ouvrier::class);
    }
    public function unites()
    {
        return $this->hasMany(Unite::class);
    }
}
