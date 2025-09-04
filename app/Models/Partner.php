<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class Partner extends Authenticatable
{
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'business_name',
        'email',
        'password',
        'contact_name',
        'phone',
        'website',
        'description',
        'logo',
        'category',
        'status',
        'approved_at',
        'stripe_customer_id',
        'subscription_status',
        'subscription_ends_at',
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
        'approved_at' => 'datetime',
        'subscription_ends_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the locations for the partner.
     */
    public function locations()
    {
        return $this->hasMany(PartnerLocation::class);
    }

    /**
     * Get the deals for the partner.
     */
    public function deals()
    {
        return $this->hasMany(Deal::class);
    }

    /**
     * Check if partner is approved
     */
    public function isApproved()
    {
        return $this->status === 'approved';
    }

    /**
     * Check if partner has active subscription
     */
    public function hasActiveSubscription()
    {
        return $this->subscription_status === 'active' && 
               ($this->subscription_ends_at === null || $this->subscription_ends_at->isFuture());
    }
}