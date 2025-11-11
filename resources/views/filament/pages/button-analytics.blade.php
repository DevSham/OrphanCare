<x-filament-panels::page>
    <div class="space-y-8">
        {{-- Campaign Filter --}}
        <x-filament::section>
            <x-slot name="heading">Campaign Filter</x-slot>
            <div class="flex flex-wrap gap-3">
                <x-filament::button
                    wire:click="selectCampaign('all')"
                    :type="$selectedCampaign === 'all' ? 'primary' : 'secondary'">
                    All Campaigns ({{ array_sum($campaignStats) }})
                </x-filament::button>
                @foreach($campaignStats as $campaign => $count)
                    <x-filament::button
                        wire:click="selectCampaign('{{ $campaign }}')"
                        :type="$selectedCampaign === $campaign ? 'primary' : 'secondary'">
                        {{ \Illuminate\Support\Str::title(str_replace('-', ' ', $campaign)) }} ({{ $count }})
                    </x-filament::button>
                @endforeach
            </div>
        </x-filament::section>

        {{-- Stats Overview --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <x-filament::section class="flex flex-col h-full">
                <div class="text-center flex-1 flex flex-col justify-center">
                    <div class="text-3xl font-bold text-primary-600 mb-2">{{ number_format($totalClicks) }}</div>
                    <div class="text-sm text-gray-500">Total Clicks</div>
                </div>
            </x-filament::section>

            <x-filament::section class="flex flex-col h-full">
                <div class="text-center flex-1 flex flex-col justify-center">
                    <div class="text-3xl font-bold text-success-600 mb-2">{{ number_format($todayClicks) }}</div>
                    <div class="text-sm text-gray-500">Today</div>
                </div>
            </x-filament::section>

            <x-filament::section class="flex flex-col h-full">
                <div class="text-center flex-1 flex flex-col justify-center">
                    <div class="text-3xl font-bold text-info-600 mb-2">{{ number_format($weekClicks) }}</div>
                    <div class="text-sm text-gray-500">This Week</div>
                </div>
            </x-filament::section>

            <x-filament::section class="flex flex-col h-full">
                <div class="text-center flex-1 flex flex-col justify-center">
                    <div class="text-3xl font-bold text-warning-600 mb-2">{{ number_format($monthClicks) }}</div>
                    <div class="text-sm text-gray-500">This Month</div>
                </div>
            </x-filament::section>
        </div>

        {{-- Analytics Charts Row --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            {{-- Top Buttons --}}
            <x-filament::section>
                <x-slot name="heading" class="text-lg font-semibold">Top Buttons</x-slot>
                <div class="space-y-4">
                    @forelse($buttonStats as $key => $button)
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="font-medium" title="{{ $button['button_id'] }}">
                                    {{ \Illuminate\Support\Str::limit($button['button_text'], 40) }}
                                </span>
                                <span class="font-semibold">{{ $button['count'] }} ({{ round(($button['count'] / $totalClicks) * 100, 1) }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-primary-600 h-2.5 rounded-full transition-all duration-300"
                                     style="width: {{ ($button['count'] / $totalClicks) * 100 }}%"></div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 py-6">No button data available</div>
                    @endforelse
                </div>
            </x-filament::section>

            {{-- Top Pages --}}
            <x-filament::section>
                <x-slot name="heading" class="text-lg font-semibold">Top Pages</x-slot>
                <div class="space-y-4">
                    @forelse($pageStats as $page => $count)
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="font-medium" title="{{ $page }}">
                                    {{ \Illuminate\Support\Str::limit(basename($page), 40) }}
                                </span>
                                <span class="font-semibold">{{ $count }} ({{ round(($count / $totalClicks) * 100, 1) }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-success-600 h-2.5 rounded-full transition-all duration-300"
                                     style="width: {{ ($count / $totalClicks) * 100 }}%"></div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 py-6">No page data available</div>
                    @endforelse
                </div>
            </x-filament::section>
        </div>

        {{-- Additional Analytics --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Device Stats --}}
            <x-filament::section>
                <x-slot name="heading" class="text-lg font-semibold">Device Types</x-slot>
                <div class="space-y-4">
                    @forelse($deviceStats as $device => $count)
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="capitalize font-medium">{{ $device ?? 'Unknown' }}</span>
                                <span class="font-semibold">{{ $count }} ({{ round(($count / $totalClicks) * 100, 1) }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-info-600 h-2.5 rounded-full transition-all duration-300"
                                     style="width: {{ ($count / $totalClicks) * 100 }}%"></div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 py-6">No device data available</div>
                    @endforelse
                </div>
            </x-filament::section>

            {{-- Browser Stats --}}
            <x-filament::section>
                <x-slot name="heading" class="text-lg font-semibold">Top Browsers</x-slot>
                <div class="space-y-4">
                    @forelse($browserStats as $browser => $count)
                        <div>
                            <div class="flex justify-between text-sm mb-2">
                                <span class="font-medium">{{ $browser ?? 'Unknown' }}</span>
                                <span class="font-semibold">{{ $count }} ({{ round(($count / $totalClicks) * 100, 1) }}%)</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-warning-600 h-2.5 rounded-full transition-all duration-300"
                                     style="width: {{ ($count / $totalClicks) * 100 }}%"></div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-gray-500 py-6">No browser data available</div>
                    @endforelse
                </div>
            </x-filament::section>

            {{-- Campaign Breakdown --}}
            @if($selectedCampaign === 'all')
                <x-filament::section>
                    <x-slot name="heading" class="text-lg font-semibold">Campaign Breakdown</x-slot>
                    <div class="space-y-4">
                        @foreach($campaignStats as $campaign => $count)
                            <div>
                                <div class="flex justify-between text-sm mb-2">
                                    <span class="capitalize font-medium">{{ \Illuminate\Support\Str::title(str_replace('-', ' ', $campaign)) }}</span>
                                    <span class="font-semibold">{{ $count }} ({{ round(($count / $totalClicks) * 100, 1) }}%)</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-purple-600 h-2.5 rounded-full transition-all duration-300"
                                         style="width: {{ ($count / $totalClicks) * 100 }}%"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </x-filament::section>
            @endif
        </div>

        {{-- Daily Clicks Chart --}}
        <x-filament::section>
            <x-slot name="heading" class="text-lg font-semibold">
                Last 30 Days
                @if($selectedCampaign !== 'all')
                    - {{ \Illuminate\Support\Str::title(str_replace('-', ' ', $selectedCampaign)) }}
                @endif
            </x-slot>
            <div class="h-72">
                <canvas id="dailyClicksChart"></canvas>
            </div>
        </x-filament::section>

        {{-- Recent Clicks Table --}}
        <x-filament::section>
            <x-slot name="heading" class="text-lg font-semibold">
                Recent Clicks
                @if($selectedCampaign !== 'all')
                    - {{ \Illuminate\Support\Str::title(str_replace('-', ' ', $selectedCampaign)) }}
                @endif
            </x-slot>
            <div class="overflow-x-auto rounded-lg border border-gray-200">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50 border-b">
                    <tr class="text-left">
                        <th class="py-3 px-4 font-semibold">Time</th>
                        <th class="py-3 px-4 font-semibold">Campaign</th>
                        <th class="py-3 px-4 font-semibold">Button</th>
                        <th class="py-3 px-4 font-semibold">Page</th>
                        <th class="py-3 px-4 font-semibold">Device</th>
                        <th class="py-3 px-4 font-semibold">IP Address</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @forelse($recentClicks as $click)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-3 px-4">{{ $click->clicked_at->diffForHumans() }}</td>
                            <td class="py-3 px-4">
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-primary-100 text-primary-800 border border-primary-200">
                                    {{ \Illuminate\Support\Str::title(str_replace('-', ' ', $click->campaign)) }}
                                </span>
                            </td>
                            <td class="py-3 px-4" title="{{ $click->button_id }}">
                                <div class="max-w-xs truncate font-medium">{{ $click->button_text }}</div>
                            </td>
                            <td class="py-3 px-4">
                                <div class="max-w-xs truncate text-xs">{{ $click->page_url }}</div>
                            </td>
                            <td class="py-3 px-4 capitalize font-medium">{{ $click->device_type }}</td>
                            <td class="py-3 px-4 font-mono text-xs bg-gray-50 rounded">{{ $click->ip_address }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-8 text-center text-gray-500">No clicks found</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </x-filament::section>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('dailyClicksChart').getContext('2d');
            const dailyData = @json($dailyClicks);

            const borderColor = '{{ $selectedCampaign === "all" ? "rgb(59, 130, 246)" : "rgb(16, 185, 129)" }}';
            const backgroundColor = '{{ $selectedCampaign === "all" ? "rgba(59, 130, 246, 0.1)" : "rgba(16, 185, 129, 0.1)" }}';

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Object.keys(dailyData),
                    datasets: [{
                        label: 'Daily Clicks',
                        data: Object.values(dailyData),
                        borderColor: borderColor,
                        backgroundColor: backgroundColor,
                        tension: 0.4,
                        fill: true,
                        borderWidth: 2,
                        pointBackgroundColor: borderColor,
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        </script>
    @endpush
</x-filament-panels::page>
