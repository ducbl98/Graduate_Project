<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function seeker(): HasOne
    {
        return $this->hasOne(Seeker::class);
    }
    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
    public function userVerify(): HasOne
    {
        return $this->hasOne(UserVerify::class);
    }

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class,'created_by','id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(SeekerApplication::class);
    }

    public function applyApplications(): HasManyThrough
    {
        return $this->hasManyThrough(SeekerApplication::class,Job::class,'created_by','job_id');
    }

    public function saveJobs(): HasMany
    {
        return $this->hasMany(SavedJob::class);
    }

}
