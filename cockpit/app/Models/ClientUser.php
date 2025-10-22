<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * ClientUser Model - Represents a customer login user (client-side users)
 *
 * @property int $id
 * @property int $client_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $position
 * @property bool $is_active
 */
class ClientUser extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'client_id',
        'name',
        'email',
        'password',
        'position',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];

    /**
     * Get the client that owns this user
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Scope query to only active client users
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
