<?php

namespace App\Models;

use App\Models\Ouvrier;
use App\Models\Service;

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
        "article_unite",
        "description",
        "ouvrier_id",
        'service_id',
    ];

    public $timestamps = false;

        public function ouvrier()
    {
        return $this->belongsTo(Ouvrier::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
  
}
