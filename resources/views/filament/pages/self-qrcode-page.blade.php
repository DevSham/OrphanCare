<x-filament::page>
    <style>
        :root{
            --maroon:#7A0E1B;
            --maroon-ink:#5e0b15;
            --gold:#C6A669;
            --sand:#F6E9D5;
            --ink:#1a1a1a;
            --muted:#6b7280;
            --radius:16px;
            --max:880px;
        }
        @media print {
            body, html {
                margin: 0 !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
            }

            aside, header, nav, .no-print {
                display: none !important;
            }

            .page {
                box-shadow: none !important;
                border: none !important;
                margin: 0 !important;
                padding: 0 !important;
                width: 100% !important;
                max-height: 92vh !important;
                min-height: 92vh !important;
                page-break-inside: avoid !important;
                break-inside: avoid !important;
            }

            /* Prevent any element from creating page breaks */
            * {
                page-break-inside: avoid !important;
                break-inside: avoid !important;
                page-break-after: avoid !important;
                break-after: avoid !important;
                page-break-before: avoid !important;
                break-before: avoid !important;
            }
        }

        /* Screen defaults */
        *{ box-sizing:border-box; -webkit-print-color-adjust:exact !important; print-color-adjust:exact !important; }
        html,body{ height:100%; }
        body{ margin:0; background:#faf9f7; font-family:system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif; color:var(--ink); }

        .poster{
            max-width:var(--max);
            margin:auto;
            background:#fff;
            border-radius:clamp(0px,1vw,var(--radius));
            overflow:hidden;
            box-shadow:0 10px 30px rgba(0,0,0,.08);
            break-inside: avoid;
            page-break-inside: avoid;
        }

        .top{
            background:var(--maroon);
            color:#fff;
            padding:clamp(18px,3vw,28px) clamp(16px,3vw,28px);
            text-align:center;
        }
        .top h1{
            margin:0 0 6px;
            font-size:clamp(26px,5.2vw,44px);
            font-weight:900;
            letter-spacing:.4px;
            line-height:1.1;
        }
        .top p{
            margin:clamp(10px,1.8vw,14px) auto 0;
            max-width:40ch;
            font-size:clamp(13px,2.2vw,18px);
            opacity:.95;
        }

        .photo-wrap{
            position:relative;
            background:#ddd;
            overflow:hidden;
            aspect-ratio:16/9;
        }
        .photo-wrap img{ width:100%; height:100%; object-fit:cover; display:block; }

        .band{
            background:var(--maroon);
            color:#fff;
            display:grid;
            grid-template-columns:1fr auto;
            gap:clamp(12px,2.5vw,20px);
            align-items:center;
            padding:clamp(14px,3vw,20px);
        }
        .band p{ margin:0; font-size:clamp(14px,2.4vw,22px); font-weight:700; line-height:1.25; }
        .qr{ background:#f7f1e6; border-radius:12px; padding:8px; box-shadow:0 2px 0 rgba(0,0,0,.06) inset; width:clamp(96px,22vw,152px); }
        .qr img{ width:100%; height:auto; display:block; }

        .footer{
            background:var(--sand);
            display:grid;
            grid-template-columns:auto 1fr;
            gap:clamp(10px,2.5vw,20px);
            align-items:center;
            padding:clamp(12px,3vw,22px);
        }
        .logo{ width:clamp(70px,18vw,110px); aspect-ratio:1/1; border-radius:10px; background:#fff; display:grid; place-items:center; box-shadow:0 1px 0 rgba(0,0,0,.06); overflow:hidden; }
        .logo img{ width:88%; height:auto; display:block; }
        .tagline{ color:var(--maroon-ink); font-weight:800; font-size:clamp(16px,3.2vw,28px); line-height:1.3; }
        .subnote{ color:var(--muted); font-size:clamp(11px,1.8vw,13px); margin-top:4px; }

        @media (max-width:560px){
            .band{ grid-template-columns:1fr; justify-items:center; text-align:center; }
            .footer{ grid-template-columns:1fr; justify-items:center; text-align:center; }
        }

        /* ---------- PRINT: Fit exactly on one A4 page ---------- */
        @page {
            size: A4;
            margin: 0;
        }

        @media print{
            /* Hide everything except the poster */
            body * { visibility: hidden; }
            .fi-sidebar, .fi-header, .no-print { display:none !important; }

            body{
                background:#fff;
                margin: 0;
                padding: 0;
                width: 210mm;
                height: 300mm;
                display: block;
            }

            .poster, .poster * {
                visibility: visible;
            }

            .poster{
                position: absolute;
                top: 0;
                left: 0;
                width: 210mm;
                height: 300mm;
                max-width: none;
                margin: 0;
                border-radius: 0;
                box-shadow: none;
                overflow: hidden;
                display: flex;
                flex-direction: column;
            }

            /* Fixed height distribution to fit exactly 297mm */
            .top{
                padding: 8mm 10mm 6mm !important;
                background: var(--maroon) !important;
                text-align: center;
                flex: 0 0 65mm; /* Fixed height for top section */
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
            .top h1{
                font-size: 6.5mm !important;
                margin: 0 0 2mm !important;
                font-weight: 900;
                color: #ffffff !important;
                line-height: 1.1;
            }
            .top p{
                font-size: 3.8mm !important;
                color: #ffffff !important;
                opacity: 0.95 !important;
                margin: 2mm auto 0 !important;
                max-width: 38ch;
            }

            /* Photo - fixed height */
            .photo-wrap{
                aspect-ratio: auto;
                flex: 0 0 140mm; /* Fixed height for photo */
                overflow: hidden;
            }
            .photo-wrap img{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Band - fixed height */
            .band{
                padding: 5mm 10mm !important;
                gap: 6mm;
                background: var(--maroon) !important;
                display: grid;
                grid-template-columns: 1fr auto;
                align-items: center;
                flex: 0 0 40mm; /* Fixed height for band */
            }
            .band p{
                font-size: 4.5mm !important;
                color: #ffffff !important;
                font-weight: 700;
                margin: 0;
                line-height: 1.2;
            }
            .qr{
                width: 32mm;
                padding: 2.5mm !important;
                border-radius: 2.5mm;
                background: #f7f1e6 !important;
            }
            .qr img{
                width: 100%;
                height: auto;
            }

            /* Footer - fixed height */
            .footer{
                padding: 5mm 10mm !important;
                gap: 6mm;
                background: var(--sand) !important;
                display: grid;
                grid-template-columns: auto 1fr;
                align-items: center;
                flex: 0 0 42mm; /* Fixed height for footer */
            }
            .logo{
                width: 38mm;
                border-radius: 2.5mm;
                background: #fff !important;
            }
            .tagline{
                font-size: 4.5mm !important;
                font-weight: 800;
                color: var(--maroon-ink) !important;
                margin: 0;
                line-height: 1.2;
            }
            .subnote{
                font-size: 3mm !important;
                color: #666666 !important;
                margin-top: 1mm;
            }

            /* Prevent any page breaks */
            .poster,
            .top,
            .photo-wrap,
            .band,
            .footer,
            .top *,
            .band *,
            .footer * {
                break-inside: avoid !important;
                page-break-inside: avoid !important;
                page-break-after: avoid !important;
                page-break-before: avoid !important;
            }
        }
    </style>

    <main class="poster">
        <section class="top">
            <h1>
                {{ $headline }}<br>
                {{ $subheadline }}<br>
                {{ $tagline }}
            </h1>
            <p>{{ $mission }}</p>
        </section>

        <figure class="photo-wrap" aria-label="Serving food to children">
            <img src="{{ asset(ltrim($photoPath,'/')) }}"
                 alt="Volunteers serving a smiling child during the Christmas party">
        </figure>

        <section class="band" aria-label="Donation prompt and QR">
            <p>{{ $donationText }}</p>
            <div class="qr" aria-label="QR to donation or info page">
                <img src="{{ $qrDataUrl }}" alt="Scan to donate or learn more">
            </div>
        </section>

        <footer class="footer">
            @if(!empty($logoPath))
                <div class="logo" aria-hidden="true">
                    <img src="{{ asset(ltrim($logoPath,'/')) }}" alt="Help Kids Up logo">
                </div>
            @endif
            <div>
                <div class="tagline">{{ $qrCaption }} — {{ $scanText }}</div>
                <div class="subnote">Thank you for spreading hope this Christmas.</div>
            </div>
        </footer>
    </main>
</x-filament::page>
