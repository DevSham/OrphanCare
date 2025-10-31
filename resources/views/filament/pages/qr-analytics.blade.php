<x-filament-panels::page>
    <div class="space-y-6">
        {{-- Stats Overview --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <x-filament::section>
                <div class="text-center">
                    <div class="text-3xl font-bold text-primary-600">{{ number_format($totalScans) }}</div>
                    <div class="text-sm text-gray-500 mt-1">Total Scans</div>
                </div>
            </x-filament::section>

            <x-filament::section>
                <div class="text-center">
                    <div class="text-3xl font-bold text-success-600">{{ number_format($todayScans) }}</div>
                    <div class="text-sm text-gray-500 mt-1">Today</div>
                </div>
            </x-filament::section>

            <x-filament::section>
                <div class="text-center">
                    <div class="text-3xl font-bold text-info-600">{{ number_format($weekScans) }}</div>
                    <div class="text-sm text-gray-500 mt-1">This Week</div>
                </div>
            </x-filament::section>

            <x-filament::section>
                <div class="text-center">
                    <div class="text-3xl font-bold text-warning-600">{{ number_format($monthScans) }}</div>
                    <div class="text-sm text-gray-500 mt-1">This Month</div>
                </div>
            </x-filament::section>
        </div>

        {{-- Charts Row --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            {{-- Device Stats --}}
            <x-filament::section>
                <x-slot name="heading">Device Types</x-slot>
                <div class="space-y-2">
                    @foreach($deviceStats as $device => $count)
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="capitalize">{{ $device ?? 'Unknown' }}</span>
                                <span class="font-semibold">{{ $count }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-primary-600 h-2 rounded-full"
                                     style="width: {{ ($count / $totalScans) * 100 }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-filament::section>

            {{-- Browser Stats --}}
            <x-filament::section>
                <x-slot name="heading">Top Browsers</x-slot>
                <div class="space-y-2">
                    @foreach($browserStats as $browser => $count)
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>{{ $browser ?? 'Unknown' }}</span>
                                <span class="font-semibold">{{ $count }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-success-600 h-2 rounded-full"
                                     style="width: {{ ($count / $totalScans) * 100 }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-filament::section>

            {{-- Platform Stats --}}
            <x-filament::section>
                <x-slot name="heading">Top Platforms</x-slot>
                <div class="space-y-2">
                    @foreach($platformStats as $platform => $count)
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span>{{ $platform ?? 'Unknown' }}</span>
                                <span class="font-semibold">{{ $count }}</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-info-600 h-2 rounded-full"
                                     style="width: {{ ($count / $totalScans) * 100 }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-filament::section>
        </div>

        {{-- Daily Scans Chart --}}
        <x-filament::section>
            <x-slot name="heading">Last 30 Days</x-slot>
            <div class="h-64">
                <canvas id="dailyScansChart"></canvas>
            </div>
        </x-filament::section>

        {{-- Recent Scans Table --}}
        <x-filament::section>
            <x-slot name="heading">Recent Scans</x-slot>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="border-b">
                    <tr class="text-left">
                        <th class="py-2">Time</th>
                        <th class="py-2">Device</th>
                        <th class="py-2">Browser</th>
                        <th class="py-2">Platform</th>
                        <th class="py-2">IP Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recentScans as $scan)
                        <tr class="border-b">
                            <td class="py-2">{{ $scan->scanned_at->diffForHumans() }}</td>
                            <td class="py-2 capitalize">{{ $scan->device_type }}</td>
                            <td class="py-2">{{ $scan->browser }}</td>
                            <td class="py-2">{{ $scan->platform }}</td>
                            <td class="py-2 font-mono text-xs">{{ $scan->ip_address }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </x-filament::section>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('dailyScansChart').getContext('2d');
            const dailyData = @json($dailyScans);

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Object.keys(dailyData),
                    datasets: [{
                        label: 'Daily Scans',
                        data: Object.values(dailyData),
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgba(59, 130, 246, 0.1)',
                        tension: 0.4,
                        fill: true
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
                            }
                        }
                    }
                }
            });
        </script>
    @endpush
</x-filament-panels::page>
