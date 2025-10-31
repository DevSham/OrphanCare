<?php

namespace App\Filament\Pages;

use App\Models\QrScan;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;

class QrAnalytics extends Page
{
    protected static ?string $navigationLabel = 'QR Analytics';
    protected static ?string $title = 'QR Code Scan Analytics';
    protected string $view = 'filament.pages.qr-analytics';

    public $selectedCampaign = 'all';

    public function getViewData(): array
    {
        $baseQuery = QrScan::query();

        // Apply campaign filter if not "all"
        if ($this->selectedCampaign && $this->selectedCampaign !== 'all') {
            $baseQuery->forCampaign($this->selectedCampaign);
        }

        // Total scans
        $totalScans = (clone $baseQuery)->count();
        $todayScans = (clone $baseQuery)->today()->count();
        $weekScans = (clone $baseQuery)->thisWeek()->count();
        $monthScans = (clone $baseQuery)->thisMonth()->count();

        // Campaign breakdown (for all campaigns)
        $campaignStats = QrScan::select('campaign', DB::raw('count(*) as count'))
            ->groupBy('campaign')
            ->orderByDesc('count')
            ->pluck('count', 'campaign')
            ->toArray();

        // Device breakdown
        $deviceStats = (clone $baseQuery)
            ->select('device_type', DB::raw('count(*) as count'))
            ->groupBy('device_type')
            ->pluck('count', 'device_type')
            ->toArray();

        // Browser breakdown
        $browserStats = (clone $baseQuery)
            ->select('browser', DB::raw('count(*) as count'))
            ->groupBy('browser')
            ->orderByDesc('count')
            ->limit(5)
            ->pluck('count', 'browser')
            ->toArray();

        // Platform breakdown
        $platformStats = (clone $baseQuery)
            ->select('platform', DB::raw('count(*) as count'))
            ->groupBy('platform')
            ->orderByDesc('count')
            ->limit(5)
            ->pluck('count', 'platform')
            ->toArray();

        // Daily scans for the last 30 days
        $dailyScans = (clone $baseQuery)
            ->where('scanned_at', '>=', now()->subDays(30))
            ->select(DB::raw('DATE(scanned_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->mapWithKeys(fn($item) => [$item->date => $item->count])
            ->toArray();

        // Recent scans
        $recentScans = (clone $baseQuery)
            ->orderByDesc('scanned_at')
            ->limit(20)
            ->get();

        return [
            'selectedCampaign' => $this->selectedCampaign,
            'totalScans' => $totalScans,
            'todayScans' => $todayScans,
            'weekScans' => $weekScans,
            'monthScans' => $monthScans,
            'campaignStats' => $campaignStats,
            'deviceStats' => $deviceStats,
            'browserStats' => $browserStats,
            'platformStats' => $platformStats,
            'dailyScans' => $dailyScans,
            'recentScans' => $recentScans,
        ];
    }

    // Method to handle campaign selection
    public function selectCampaign($campaign)
    {
        $this->selectedCampaign = $campaign;
        $this->getViewData(); // Refresh the data
    }
}
