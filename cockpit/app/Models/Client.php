<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Client Model - Represents a company/mandant in the multi-tenant system
 *
 * @property int $id
 * @property string $company_name
 * @property string|null $contact_person
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 * @property bool $is_active
 */
class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company_name',
        'contact_person',
        'email',
        'phone',
        'address',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get all users for this client
     */
    public function clientUsers(): HasMany
    {
        return $this->hasMany(ClientUser::class);
    }

    /**
     * Get all services for this client
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get all API credentials for this client
     */
    public function apiCredentials(): HasMany
    {
        return $this->hasMany(ApiCredential::class);
    }

    /**
     * Get all KPI snapshots for this client
     */
    public function kpiSnapshots(): HasMany
    {
        return $this->hasMany(KpiSnapshot::class);
    }

    /**
     * Scope query to only active clients
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
