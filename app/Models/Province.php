<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = [
        'name',
    ];

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}
