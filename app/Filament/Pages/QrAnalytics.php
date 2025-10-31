<?php

namespace App\Filament\Pages;

use App\Models\QrScan;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;

class QrAnalytics extends Page
{
//    protected string $view = 'filament.pages.qr-analytics';
    protected static ?string $navigationLabel = 'QR Analytics';
    protected static ?string $title = 'QR Code Scan Analytics';
    protected  string $view = 'filament.pages.qr-analytics';

    public function getViewData(): array
    {
        $campaign = 'street-kids-christmas';

        // Total scans
        $totalScans = QrScan::forCampaign($campaign)->count();
        $todayScans = QrScan::forCampaign($campaign)->today()->count();
        $weekScans = QrScan::forCampaign($campaign)->thisWeek()->count();
        $monthScans = QrScan::forCampaign($campaign)->thisMonth()->count();

        // Device breakdown
        $deviceStats = QrScan::forCampaign($campaign)
            ->select('device_type', DB::raw('count(*) as count'))
            ->groupBy('device_type')
            ->pluck('count', 'device_type')
            ->toArray();

        // Browser breakdown
        $browserStats = QrScan::forCampaign($campaign)
            ->select('browser', DB::raw('count(*) as count'))
            ->groupBy('browser')
            ->orderByDesc('count')
            ->limit(5)
            ->pluck('count', 'browser')
            ->toArray();

        // Platform breakdown
        $platformStats = QrScan::forCampaign($campaign)
            ->select('platform', DB::raw('count(*) as count'))
            ->groupBy('platform')
            ->orderByDesc('count')
            ->limit(5)
            ->pluck('count', 'platform')
            ->toArray();

        // Daily scans for the last 30 days
        $dailyScans = QrScan::forCampaign($campaign)
            ->where('scanned_at', '>=', now()->subDays(30))
            ->select(DB::raw('DATE(scanned_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->mapWithKeys(fn($item) => [$item->date => $item->count])
            ->toArray();

        // Recent scans
        $recentScans = QrScan::forCampaign($campaign)
            ->orderByDesc('scanned_at')
            ->limit(20)
            ->get();

        return [
            'totalScans' => $totalScans,
            'todayScans' => $todayScans,
            'weekScans' => $weekScans,
            'monthScans' => $monthScans,
            'deviceStats' => $deviceStats,
            'browserStats' => $browserStats,
            'platformStats' => $platformStats,
            'dailyScans' => $dailyScans,
            'recentScans' => $recentScans,
        ];
    }
}
