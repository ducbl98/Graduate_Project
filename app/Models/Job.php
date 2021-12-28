<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = [
        'title',
        'application_email',
        'image',
        'amount',
        'work_time',
        'experience',
        'salary_min',
        'salary_max',
        'salary_unit',
        'address',
        'expire',
        'details',
        'province_id',
        'created_by',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class,'job_category','job_id','category_id');
    }

    public function techniques(): BelongsToMany
    {
        return $this->belongsToMany(Technique::class,'job_technique','job_id','technique_id');
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class,'created_by','id');
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
