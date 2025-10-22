<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Service Model - Represents a booked service for a client
 *
 * @property int $id
 * @property int $client_id
 * @property string $service_type
 * @property string|null $service_name
 * @property string|null $description
 * @property bool $is_active
 * @property string|null $start_date
 * @property string|null $end_date
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'service_type',
        'service_name',
        'description',
        'is_active',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Get the client that owns this service
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Scope query to only active services
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope query to services of a specific type
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('service_type', $type);
    }
}
