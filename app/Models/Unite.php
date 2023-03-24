<?php

namespace App\Models;

use App\Models\Matier;
use App\Models\Article;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unite extends Model
{
    use HasFactory;

    protected $fillable=[
        "id",
        "unite",
        "matiere_id",
        "article_id",
    ];

    public $timestamps = false;



    public function matier():BelongsTo
    {
        return $this->belongsTo(Matier::class,'matiere_id');
    }

    public function article():BelongsTo
    {
        return $this->belongsTo(Article::class,'article_id');
    }
}
