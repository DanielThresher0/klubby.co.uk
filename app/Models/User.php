<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'referral_code',
        'referred_by',
        'draw_entries',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'stripe_id',
        'pm_type',
        'pm_last_four',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'trial_ends_at' => 'datetime',
            'draw_entries' => 'integer',
        ];
    }

    /**
     * Get the user's subscription tier.
     */
    public function subscriptionTier(): string
    {
        if ($this->subscribed('premium')) {
            return 'Premium';
        } elseif ($this->subscribed('essentials')) {
            return 'Essentials';
        } elseif ($this->subscribed('starter')) {
            return 'Starter';
        }
        
        return 'None';
    }

    /**
     * Get draw entries based on subscription tier.
     */
    public function getDrawEntriesAttribute(): int
    {
        $baseEntries = $this->attributes['draw_entries'] ?? 0;
        
        // Add subscription-based entries
        switch ($this->subscriptionTier()) {
            case 'Premium':
                return $baseEntries + 10;
            case 'Essentials':
                return $baseEntries + 4;
            case 'Starter':
                return $baseEntries + 1;
            default:
                return $baseEntries;
        }
    }

    /**
     * Generate unique referral code.
     */
    public static function generateReferralCode(): string
    {
        do {
            $code = 'KLB' . strtoupper(substr(md5(uniqid()), 0, 6));
        } while (self::where('referral_code', $code)->exists());
        
        return $code;
    }
}
