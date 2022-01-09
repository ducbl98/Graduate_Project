<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SeekerApplication extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'seeker_applications';

    protected $fillable = [
        'seeker_name',
        'email',
        'phone_number',
        'introduction',
        'resume',
        'job_id',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function response(): HasOne
    {
        return $this->hasOne(CompanyResponse::class);
    }
}
