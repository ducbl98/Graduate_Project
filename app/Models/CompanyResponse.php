<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CompanyResponse extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'company_responses';

    protected $fillable = [
        'header',
        'content',
        'attachment',
        'seeker_application_id',
    ];

    public function seeker_application(): BelongsTo
    {
        return $this->belongsTo(SeekerApplication::class);
    }

}
