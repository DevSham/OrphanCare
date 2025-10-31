<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class OtherQRCodePage extends Page
{
    protected string $view = 'filament.pages.other-qrcode-page';
    protected static ?string $navigationLabel = 'Uber Ride QR Code';
    protected static ?string $title = 'Street Kids Christmas 2025';
    protected static ?string $slug = 'street-kids-christmas-ride';

    public string $headline      = 'STREET KIDS CHRISTMAS 2025';
    public string $subheadline   = 'This Ride Tells a Story';
    public string $tagline       = 'Feeding Hope to Over 1000 Street Children in Kampala, Uganda';
    public string $qrCaption     = 'A Ride With a Purpose';
    public string $body = "Each December, I travel to Kampala Uganda to host the Street Kids Christmas Party, sharing food, clothing, shoes, music, bouncing castles, face painting, and unforgettable fun.";
    public string $hostName      = "Jeff! Your Rider Today.";
    public string $hostSubtitle  = "A Ride With a Purpose";
    public string $footerNote    = "Informational only — no donations collected during rides";

    // CHANGED: QR now points to tracking URL instead of direct URL
    public string $campaignSlug  = 'street-kids-christmas-ride';
    public string $landingUrl    = 'https://helpkidsup.org';
    public string $photoPath     = '/images/qrpic.jpeg';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('print')
                ->label('Print')
                ->icon('heroicon-o-printer')
                ->extraAttributes(['onclick' => 'window.print()']),

            Action::make('view_analytics')
                ->label('View Analytics')
                ->icon('heroicon-o-chart-bar')
                ->url(fn () => QrAnalytics::getUrl()),

            Action::make('donation_link')
                ->label('Donate')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->url(fn () => $this->landingUrl, shouldOpenInNewTab: true),

            Action::make('test_qr')
                ->label('Test QR')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->url(fn () => route('qr.track', $this->campaignSlug), shouldOpenInNewTab: true),
        ];
    }

    public function getViewData(): array
    {
        // Build tracking URL for QR code
        $trackingUrl = route('qr.track', $this->campaignSlug);

        $qrPng = base64_encode(
            QrCode::format('png')->size(280)->margin(1)->generate($trackingUrl)
        );

        return [
            'headline'     => $this->headline,
            'subheadline'  => $this->subheadline,
            'tagline'      => $this->tagline,
            'body'         => $this->body,
            'hostName'     => $this->hostName,
            'hostSubtitle' => $this->hostSubtitle,
            'footerNote'   => $this->footerNote,
            'photoPath'    => $this->photoPath,
            'qrDataUrl'    => "data:image/png;base64,{$qrPng}",
            'qrCaption'    => $this->qrCaption,
        ];
    }

    public static function canAccess(): bool
    {
        return auth()->check();
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }
}
