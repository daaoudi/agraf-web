<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Ouvrier;
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
    return $this->belongsTo(Ouvrier::class, 'ouvrier_id');
}
}
