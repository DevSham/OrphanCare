<?php

namespace App\Filament\Pages;

use App\Models\ButtonClick;
use Filament\Pages\Page;
use Illuminate\Support\Facades\DB;

class ButtonAnalytics extends Page
{
    protected static ?string $navigationLabel = 'Button Analytics';
    protected static ?string $title = 'Button Click Analytics';
    protected string $view = 'filament.pages.button-analytics';

    public $selectedCampaign = 'all';

    public function getViewData(): array
    {
        $baseQuery = ButtonClick::query();

        if ($this->selectedCampaign && $this->selectedCampaign !== 'all') {
            $baseQuery->forCampaign($this->selectedCampaign);
        }

        // Total clicks
        $totalClicks = (clone $baseQuery)->count();
        $todayClicks = (clone $baseQuery)->today()->count();
        $weekClicks = (clone $baseQuery)->thisWeek()->count();
        $monthClicks = (clone $baseQuery)->thisMonth()->count();

        // Campaign breakdown
        $campaignStats = ButtonClick::select('campaign', DB::raw('count(*) as count'))
            ->groupBy('campaign')
            ->orderByDesc('count')
            ->pluck('count', 'campaign')
            ->toArray();

        // Button breakdown
        $buttonStats = (clone $baseQuery)
            ->select('button_id', 'button_text', DB::raw('count(*) as count'))
            ->groupBy('button_id', 'button_text')
            ->orderByDesc('count')
            ->limit(10)
            ->get()
            ->mapWithKeys(fn($item) => [
                "{$item->button_id}|{$item->button_text}" => [
                    'button_id' => $item->button_id,
                    'button_text' => $item->button_text,
                    'count' => $item->count
                ]
            ])
            ->toArray();

        // Page breakdown
        $pageStats = (clone $baseQuery)
            ->select('page_url', DB::raw('count(*) as count'))
            ->groupBy('page_url')
            ->orderByDesc('count')
            ->limit(10)
            ->pluck('count', 'page_url')
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

        // Daily clicks for the last 30 days
        $dailyClicks = (clone $baseQuery)
            ->where('clicked_at', '>=', now()->subDays(30))
            ->select(DB::raw('DATE(clicked_at) as date'), DB::raw('count(*) as count'))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->mapWithKeys(fn($item) => [$item->date => $item->count])
            ->toArray();

        // Recent clicks
        $recentClicks = (clone $baseQuery)
            ->with('button')
            ->orderByDesc('clicked_at')
            ->limit(20)
            ->get();

        return [
            'selectedCampaign' => $this->selectedCampaign,
            'totalClicks' => $totalClicks,
            'todayClicks' => $todayClicks,
            'weekClicks' => $weekClicks,
            'monthClicks' => $monthClicks,
            'campaignStats' => $campaignStats,
            'buttonStats' => $buttonStats,
            'pageStats' => $pageStats,
            'deviceStats' => $deviceStats,
            'browserStats' => $browserStats,
            'dailyClicks' => $dailyClicks,
            'recentClicks' => $recentClicks,
        ];
    }

    public function selectCampaign($campaign)
    {
        $this->selectedCampaign = $campaign;
    }
}
