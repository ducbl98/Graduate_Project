<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Technique extends Model
{
    protected $table = 'techniques';

    use HasFactory;

    public function techniqueType(): BelongsTo
    {
        return $this->belongsTo(TechniqueType::class,'type_id');
    }
}
