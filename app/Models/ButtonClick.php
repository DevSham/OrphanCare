<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ButtonClick extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign',
        'button_id',
        'button_text',
        'page_url',
        'ip_address',
        'user_agent',
        'referer',
        'country',
        'city',
        'device_type',
        'browser',
        'platform',
        'clicked_at',
    ];

    protected $casts = [
        'clicked_at' => 'datetime',
    ];

    // Scopes - Fixed type hints to use Eloquent Builder
    public function scopeForCampaign(Builder $query, string $campaign): Builder
    {
        return $query->where('campaign', $campaign);
    }

    public function scopeToday(Builder $query): Builder
    {
        return $query->whereDate('clicked_at', today());
    }

    public function scopeForButton(Builder $query, string $buttonId): Builder
    {
        return $query->where('button_id', $buttonId);
    }

    public function scopeThisWeek(Builder $query): Builder
    {
        return $query->whereBetween('clicked_at', [now()->startOfWeek(), now()->endOfWeek()]);
    }

    public function scopeThisMonth(Builder $query): Builder
    {
        return $query->whereBetween('clicked_at', [now()->startOfMonth(), now()->endOfMonth()]);
    }

    // Helper method to parse user agent
    public static function parseUserAgent(?string $userAgent): array
    {
        if (empty($userAgent)) {
            return [
                'browser' => 'Unknown',
                'platform' => 'Unknown',
                'device_type' => 'desktop',
            ];
        }

        $browser = 'Unknown';
        $platform = 'Unknown';
        $deviceType = 'desktop';

        if (preg_match('/Linux|Windows|Mac|iPhone|Android/i', $userAgent, $matches)) {
            $platform = $matches[0];
        }

        if (preg_match('/Chrome|Firefox|Safari|Edge|Opera/i', $userAgent, $matches)) {
            $browser = $matches[0];
        }

        if (preg_match('/Mobile|Android|iPhone|iPad/i', $userAgent)) {
            $deviceType = 'mobile';
        } elseif (preg_match('/Tablet|iPad/i', $userAgent)) {
            $deviceType = 'tablet';
        }

        return [
            'browser' => $browser,
            'platform' => $platform,
            'device_type' => $deviceType,
        ];
    }
}
