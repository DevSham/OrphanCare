<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class SelfQRCodePage extends Page
{
//    protected static ?string $navigationIcon = 'heroicon-o-qr-code';
    protected static ?string $navigationLabel = 'Self QR Code';
    protected static ?string $title = 'Self QR Code';
    protected static ?string $slug = 'self-qr';
    protected  string $view = 'filament.pages.self-qrcode-page';

    // --- Editable content (you can later move these to DB/settings if you like) ---
    public string $headline      = 'STREET KID CHRISTMAS 2025';
    public string $subheadline   = 'This Ride Tells a Story';
    public string $tagline       = 'Feeding Hope to Over 1,000 Children in Kampala, Uganda';

    public string $body = "Each December, I travel home to Uganda to host a Christmas celebration for over 1,000 street children—sharing food, gifts, and love. This ride helps tell story";

    public string $hostName      = "Jeff “JeffSmileZ”";
    public string $hostSubtitle  = "A Ride With a Purpose";
    public string $footerNote    = "Informational only — no donations collected during rides";

    // Where the QR should point
    public string $qrUrl         = 'https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M';

    // Background photo you showed (place your file in /public/images)
    public string $photoPath     = '/images/street-kid-2025.png';

    protected function getHeaderActions(): array
    {
        return [
            Action::make('print')
                ->label('Print')
                ->icon('heroicon-o-printer')
                ->extraAttributes(['onclick' => 'window.print()']),

            Action::make('openLink')
                ->label('Open Link')
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->url(fn () => $this->qrUrl, shouldOpenInNewTab: true),
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
        ];
    }

    public static function canAccess(): bool
    {
        // Restrict if you want. For now, anyone who can access the panel.
        return auth()->check();
    }
}
