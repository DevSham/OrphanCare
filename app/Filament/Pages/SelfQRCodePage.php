<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SelfQRCodePage extends Page
{
    protected static ?string $navigationLabel = 'Self QR Code';
    protected static ?string $title = 'Self QR Code';
    protected static ?string $slug = 'self-qr';
    protected string $view = 'filament.pages.self-qrcode-page';

    // ===== Poster text (mapped to the HTML) =====
    public string $headline      = 'HELP KIDS UP';
    public string $subheadline   = 'STREET KIDS';
    public string $tagline       = 'CHRISTMAS PARTY 2025';
    public string $mission       = 'Feeding Hope to Over 1,000 Children in Kampala, Uganda';

    public string $donationText  = 'With just $10 you can feed a child this Christmas With just $10 you can feed a child this Christmas With just $10 you can feed a child this Christmas With just $10 you can feed a child this Christmas';
    public string $qrCaption     = 'Every Smile Has a Story';
    public string $scanText      = 'Scan to Hear It';

    // Assets / links
    public string $qrUrl      = 'https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M';
    public string $landingUrl = 'http://127.0.0.1:8000/support';
    public string $photoPath  = '/images/qrpic.jpeg';          // put your hero image in /public/images
    public ?string $logoPath  = '/images/logo.jpeg';        // optional; set to null to hide


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
        // Inline QR as base64 PNG so the view can <img src="...">
        $qrPng = base64_encode(
            QrCode::format('png')->size(280)->margin(1)->generate($this->qrUrl)
        );

        return [
            'headline'      => $this->headline,
            'subheadline'   => $this->subheadline,
            'tagline'       => $this->tagline,
            'mission'       => $this->mission,
            'donationText'  => $this->donationText,
            'qrCaption'     => $this->qrCaption,
            'scanText'      => $this->scanText,
            'photoPath'     => $this->photoPath,
            'logoPath'      => $this->logoPath,
            'qrDataUrl'     => "data:image/png;base64,{$qrPng}",

        ];
    }

    public static function canAccess(): bool
    {
        return auth()->check();
    }
}
