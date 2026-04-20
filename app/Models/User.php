<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'is_admin',
        'name',
        'username',
        'email',
        'password',
        'fbr_access_token',
        'use_sandbox',
        'cinc_ntn',
        'address',
        'business_name',
        'province',
        'c_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
        'use_sandbox' => 'boolean',
    ];

    // Example relation
    public function buyers(): HasMany
    {
        return $this->hasMany(Buyer::class);
    }
}