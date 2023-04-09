<?php

namespace App\Models;

use App\Models\Matier;
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
    
    public function matiers(){
        return $this->hasMany(Matier::class);
    }

    public function chantier(){
        return $this->belongsTo(Chantier::class);
    }
  
}
