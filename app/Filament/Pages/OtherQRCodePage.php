<?php

namespace App\Filament\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class OtherQRCodePage extends Page
{
    protected string $view = 'filament.pages.other-qrcode-page';
//    protected static ?string $navigationIcon = 'heroicon-o-qr-code';

    protected static ?string $navigationLabel = 'Other QR Code';

    protected static ?string $title = 'Street Kids Christmas 2025';

    protected static ?string $slug = 'street-kid-christmas';

    public string $headline      = 'STREET KIDS CHRISTMAS 2025';
    public string $subheadline   = 'This Ride Tells a Story';
    public string $tagline       = 'Feeding Hope to Over 1,000 Children in Kampala, Uganda';

    public string $qrCaption     = 'Every Smile Has a Story';
    public string $scanText      = 'Scan to Hear It';

    public string $body = "Each December, I travel home to Uganda to host a Christmas celebration for over 1,000 street children—sharing food, gifts, and love. This ride helps tell story";

    public string $hostName      = "Jeff! Your Rider Today.";
    public string $hostSubtitle  = "A Ride With a Purpose";
    public string $footerNote    = "Informational only — no donations collected during rides";

    // Where the QR should point
    public string $qrUrl         = 'https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M';
    public string $landingUrl         = 'http://127.0.0.1:8000';

    // Background photo you showed (place your file in /public/images)
    public string $photoPath     = '/images/qrpic.jpeg';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('print')
                ->label('Print')
                ->icon('heroicon-o-printer')
                ->extraAttributes(['onclick' => 'window.print()']),

            Action::make('Donation Link')
                ->label('Donate')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->url(fn () => $this->qrUrl, shouldOpenInNewTab: true),

            Action::make('Landing Page')
                ->label('Landing Page')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->url(fn () => $this->landingUrl, shouldOpenInNewTab: true),
        ];
    }

    public function getViewData(): array
    {
        // build a base64 PNG QR so the Blade can just <img src="...">
        $qrPng = base64_encode(
            QrCode::format('png')->size(280)->margin(1)->generate($this->qrUrl)
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
            'qrCaption' => $this->qrCaption,
            'scanText' => $this->scanText,
        ];
    }

    public static function canAccess(): bool
    {
        // Restrict if you want. For now, anyone who can access the panel.
        return auth()->check();
    }


    public static function shouldRegisterNavigation(): bool
    {
        return true; // Set to false if you don't want it in navigation
    }
}
