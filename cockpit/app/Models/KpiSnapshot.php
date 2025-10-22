<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * KpiSnapshot Model - Stores daily aggregated KPI data
 *
 * @property int $id
 * @property int $client_id
 * @property string $platform
 * @property string $snapshot_date
 * @property string $metric_name
 * @property float $metric_value
 * @property string|null $currency
 * @property array|null $metadata
 */
class KpiSnapshot extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'platform',
        'snapshot_date',
        'metric_name',
        'metric_value',
        'currency',
        'metadata',
    ];

    protected $casts = [
        'snapshot_date' => 'date',
        'metric_value' => 'decimal:2',
        'metadata' => 'array',
    ];

    /**
     * Get the client that owns this KPI snapshot
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Scope query to a specific platform
     */
    public function scopeForPlatform($query, string $platform)
    {
        return $query->where('platform', $platform);
    }

    /**
     * Scope query to a date range
     */
    public function scopeDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('snapshot_date', [$startDate, $endDate]);
    }

    /**
     * Scope query to a specific metric
     */
    public function scopeMetric($query, string $metricName)
    {
        return $query->where('metric_name', $metricName);
    }
}
