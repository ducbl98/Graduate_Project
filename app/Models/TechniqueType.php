<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TechniqueType extends Model
{
    protected $table = 'technique_types';
    protected $fillable=[
        'name'
    ];

    use HasFactory;

    public function techniques(): HasMany
    {
        return $this->hasMany(Technique::class,'type_id');
    }}
