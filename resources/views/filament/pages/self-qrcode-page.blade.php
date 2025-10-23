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
        /* Add to your existing CSS */
        .middle-section {
            min-height: 400px;
            position: relative;
        }

        @media (max-width: 768px) {
            .middle-section {
                min-height: 500px;
            }
        }

        /*!* Print styles for the middle section *!*/
        /*    .middle-section {*/
        /*        flex: 0 0 140mm;*/
        /*        display: flex;*/
        /*        align-items: center;*/
        /*        justify-content: center;*/
        /*        position: relative;*/
        /*        color: #ffffff !important;*/
        /*    }*/

        /*    .middle-section p {*/
        /*        font-weight: 700 !important;*/
        /*        color: #ffffff !important;*/
        /*        font-size: 4mm !important;*/
        /*        text-align: center;*/
        /*    }*/

        /*    .middle-section .grid {*/
        /*        display: grid;*/
        /*        grid-template-columns: 1fr auto;*/
        /*        gap: 8mm;*/
        /*        align-items: center;*/
        /*        width: 100%;*/
        /*    }*/

        /*    .middle-section .bg-white\\/90 {*/
        /*    background: rgba(255, 255, 255, 0.95) !important;*/
        /*    padding: 3mm !important;*/
        /*    border-radius: 2mm;*/
        /*}*/

        /*    .middle-section caption {*/
        /*        color: #000000 !important;*/
        /*        font-weight: 600;*/
        /*        font-size: 3mm;*/
        /*    }*/
        /*    */
        .middle-section {
            flex: 0 0 180mm;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: #ffffff !important;
        }

        .middle-section .max-w-4xl {
            max-width: 180mm !important;
        }

        .middle-section .font-bold {
            font-weight: 700 !important;
            color: #ffffff !important;
            font-size: 5mm !important;
            text-align: left;
            margin-bottom: 8mm !important;
        }

        .middle-section .bg-white\\/90 {
            background: rgba(255, 255, 255, 0.95) !important;
            padding: 4mm !important;
            border-radius: 3mm;
        }

        .middle-section caption {
            color: #000000 !important;
            font-weight: 600;
            font-size: 3.5mm;
            margin-bottom: 2mm !important;
        }

        .middle-section img {
            height: 45mm !important;
            width: 45mm !important;
        }
        /* --- Bottom-right QR positioning --- */
        .qr-float{
            position: absolute;
            right: clamp(12px,3vw,24px);
            bottom: clamp(12px,3vw,24px);
            z-index: 10;              /* above the dark veil */
        }

        /* Keep QR readable on small screens: lift it a bit and shrink */
        @media (max-width: 640px){
            .qr-float{ right: 12px; bottom: 12px; }
            .qr-float img{ width: 160px !important; height: 160px !important; }
        }

        /* Print placement with millimeter precision */
        @media print{
            .qr-float{ right: 10mm; bottom: 10mm; }
        }
        /* --- A4 layout on WEB (same grid as print) --- */
        .use-print-on-web{
            /* exact A4 dimensions */
            width: 210mm;
            height: 297mm;

            /* center on page with a nice shadow */
            margin: 20px auto;
            box-shadow: 0 10px 30px rgba(0,0,0,.10);

            /* same structure as print */
            display: grid;
            grid-template-rows: 62mm 175mm 60mm; /* top / middle / footer */
            border-radius: 0; /* match print */
            max-width: none;  /* override --max */
        }

        /* Scale down intelligently on small screens instead of squeezing */
        @media (max-width: 900px){
            .use-print-on-web{
                transform: scale(calc(100vw / 210mm));
                transform-origin: top center;
                height: calc(297mm * (100vw / 210mm)); /* keep A4 aspect */
                margin: 0 auto 24px;
            }
        }

        /* Middle section readability: darker overlay + text shadow */
        .middle-section{ position: relative; }
        .middle-section::before{
            content:"";
            position:absolute; inset:0;
            /* deeper veil so text always pops */
            background: linear-gradient(to bottom, rgba(0,0,0,.40), rgba(0,0,0,.28));
            z-index: 0;
        }
        /* remove the old light veil div from HTML (see step 3) */
        .middle-section p{
            text-shadow: 0 2px 4px rgba(0,0,0,.60);
        }

        /* Bottom-right QR stays pinned */
        .qr-float{
            position: absolute;
            right: 10mm;
            bottom: 10mm;
            z-index: 10;
        }
        @media (max-width: 900px){
            .qr-float{ right: clamp(12px,3vw,20px); bottom: clamp(12px,3vw,20px); }
            .qr-float img{ width: 160px !important; height: 160px !important; }
        }
        /* --- Make middle text bright and glowing --- */
        .middle-section p {
            padding: 20px;
            color: #ffffff !important;                 /* pure white text */
            font-weight: 800 !important;               /* bold and clear */
            text-shadow:
                0 2px 6px rgba(0, 0, 0, 0.9),         /* strong dark glow behind */
                0 0 10px rgba(255, 255, 255, 0.3);    /* faint white aura for contrast */
            filter: brightness(115%);                  /* slightly enhances white intensity */
        }



    </style>

    <main class="poster use-print-on-web">
        <section class="top">
            <h1>
                {{ $headline }}<br>
                {{ $subheadline }}<br>
                {{ $tagline }}
            </h1>
            <p>{{ $mission }}</p>
        </section>
        <section
            class="middle-section relative text-white"
            style="background-image:url('{{ asset(ltrim($photoPath, '/')) }}'); background-size:cover; background-position:center; background-repeat:no-repeat;"
        >
            {{-- soft dark veil UNDER content --}}
{{--            <div class="absolute inset-0 bg-black/25 z-0"></div>--}}

            {{-- paragraph (flows normally) --}}
            <div class="relative z-10 w-full px-6 py-10 md:px-10 md:py-12">
                <p class="font-bold text-white text-lg md:text-xl leading-relaxed max-w-3xl">
                    {{ $donationText }}
                </p>
            </div>

            {{-- QR fixed to bottom-right --}}
            <div class="qr-float">
                <div class="bg-white/90 p-4 rounded-lg shadow-lg grid justify-items-center gap-2">
                    <p class="text-black font-semibold text-xs uppercase tracking-wide m-0">Scan Me!</p>
                    <img src="{{ $qrDataUrl }}" alt="QR Code" class="h-56 w-56 md:h-56 md:w-56">
                </div>
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
