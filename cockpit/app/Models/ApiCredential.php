<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Casts\Attribute;

/**
 * ApiCredential Model - Stores encrypted API credentials per client
 *
 * @property int $id
 * @property int $client_id
 * @property string $platform
 * @property string $credential_key
 * @property string $credential_value
 * @property array|null $metadata
 * @property string|null $expires_at
 */
class ApiCredential extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'platform',
        'credential_key',
        'credential_value',
        'metadata',
        'expires_at',
    ];

    protected $casts = [
        'metadata' => 'array',
        'expires_at' => 'datetime',
    ];

    /**
     * Get the client that owns this API credential
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Encrypt credential value when setting
     */
    protected function credentialValue(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => decrypt($value),
            set: fn ($value) => encrypt($value),
        );
    }

    /**
     * Scope query to a specific platform
     */
    public function scopeForPlatform($query, string $platform)
    {
        return $query->where('platform', $platform);
    }

    /**
     * Check if credential is expired
     */
    public function isExpired(): bool
    {
        if (!$this->expires_at) {
            return false;
        }

        return $this->expires_at->isPast();
    }
}
