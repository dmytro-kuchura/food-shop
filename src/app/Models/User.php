<?php

namespace App\Models;

use App\Models\Enum\UserConstants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $last_name
 * @property string $middle_name
 * @property string $phone
 * @property string $remember_token
 * @property string $role
 * @property string $status
 * @property string $user_lang
 * @property string email_verified_at
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password', 'last_name', 'phone', 'remember_token', 'role', 'status'
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
        'password' => 'hashed',
    ];

    public function isAdmin(): bool
    {
        return $this->role && $this->role == UserConstants::IS_ADMIN;
    }

    public function isActive(): bool
    {
        return $this->status && $this->status == UserConstants::STATUS_ACTIVE;
    }
}
