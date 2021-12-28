<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Technique extends Model
{
    use HasFactory;

    protected $table = 'techniques';

    protected $fillable = [
        'name',
        'type_id'
    ];

    public function techniqueType(): BelongsTo
    {
        return $this->belongsTo(TechniqueType::class,'type_id');
    }

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class, 'job_technique', 'technique_id', 'job_id');
    }
}
