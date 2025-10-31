<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrScan extends Model
{
    protected $fillable = [
        'campaign',
        'ip_address',
        'user_agent',
        'referer',
        'country',
        'city',
        'device_type',
        'browser',
        'platform',
        'scanned_at',
    ];

    protected $casts = [
        'scanned_at' => 'datetime',
    ];

    public function scopeForCampaign($query, string $campaign)
    {
        return $query->where('campaign', $campaign);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('scanned_at', today());
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('scanned_at', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('scanned_at', now()->month)
            ->whereYear('scanned_at', now()->year);
    }
}
