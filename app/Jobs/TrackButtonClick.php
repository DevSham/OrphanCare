<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

use App\Models\ButtonClick;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class TrackButtonClick implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $campaign,
        public string $buttonId,
        public string $buttonText,
        public string $pageUrl,
        public ?string $ipAddress = null,
        public ?string $userAgent = null,
        public ?string $referer = null
    )
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        try {
            $userAgentData = ButtonClick::parseUserAgent($this->userAgent);

            ButtonClick::create([
                'campaign' => $this->campaign,
                'button_id' => $this->buttonId,
                'button_text' => $this->buttonText,
                'page_url' => $this->pageUrl,
                'ip_address' => $this->ipAddress,
                'user_agent' => $this->userAgent,
                'referer' => $this->referer,
                'browser' => $userAgentData['browser'],
                'platform' => $userAgentData['platform'],
                'device_type' => $userAgentData['device_type'],
                'clicked_at' => now(),
            ]);
        } catch (\Exception $e) {
            Log::error('Failed to track button click: ' . $e->getMessage());
        }
    }
}
