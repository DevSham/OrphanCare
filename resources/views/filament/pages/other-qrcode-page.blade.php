<x-filament::page>
    <style>
        /* --- Screen defaults (unchanged behavior) --- */
        *{ box-sizing: border-box; -webkit-print-color-adjust: exact !important; print-color-adjust: exact !important; }
        :root{ --maroon:#7b2a23; }
        .page{
            font-family: Arial, Helvetica, sans-serif;
            background:#fff;
            display:flex; flex-direction:column;
            min-height:100vh; overflow:hidden;
        }
        .hero{
            background-color: var(--maroon);
            padding: 1rem; display:grid; place-items:center; text-align:center;
            min-height: 30vh;
        }
        .hero h1{ color:#fff; font-size:3rem; font-weight:900; letter-spacing:2px; line-height:1.1; margin:0 0 1rem; text-transform:uppercase; }
        .hero .lead{ color:#fff; font-size:1.6rem; font-weight:800; line-height:1.2; margin:0 0 .5rem; }
        .hero .sub{ color:#fff; font-size:1.2rem; font-weight:800; margin:0; }

        .photo{
            position:relative; flex:1 1 auto; min-height:60vh;
            background-size:cover; background-position:center; background-repeat:no-repeat;
            display:flex; flex-direction:column; justify-content:space-between;
        }
        /* keep the overlay for screen */
        .photo::before{
            content:''; position:absolute; inset:0; z-index:1;
            background: linear-gradient(to bottom, rgba(0,0,0,.3) 0%, rgba(0,0,0,.2) 20%, rgba(0,0,0,.4) 70%, rgba(0,0,0,.7) 100%);
        }
        .photo .content{ position:relative; z-index:2; padding:2rem; }
        .photo .grid{ display:grid; gap:2rem; }
        @media (min-width: 768px){ .photo .grid{ grid-template-columns:2fr 1fr; } }

        .photo .body{
            color:#fff; font-size:1.3rem; line-height:1.5; font-weight:800;
            text-shadow: 1px 1px 3px rgba(0,0,0,.8);
            margin:0 0 2rem; max-width:70ch; text-align:left;
        }

        .qr{ justify-self:end; align-self:center; position:relative; top:-1rem; }
        .qr figure{ margin:0; background:#fff; padding:.25rem; border:2px solid #fff; border-radius:8px; box-shadow:0 4px 15px rgba(0,0,0,.5); text-align:left; }
        .qr figcaption{ color:#000; font-weight:700; margin:.25rem 0 .5rem; }
        .qr img{ display:block; width:224px; height:224px; border-radius:8px; border:3px solid #fff; box-shadow:0 4px 10px rgba(0,0,0,.4); }

        .photo .footer{
            position:relative; z-index:2; padding:1.5rem; text-align:center;
            background: linear-gradient(to top, rgba(0,0,0,.9) 0%, rgba(0,0,0,.7) 50%, transparent 100%);
        }
        .photo .footer h3{ color:#fff; font-size:1.8rem; font-weight:700; margin:0 0 .5rem; }
        .photo .footer .sub{ color:#fff; font-size:1.1rem; margin:.25rem 0; }
        .photo .footer .note{ color:#fff; font-size:.85rem; opacity:.85; margin:.25rem auto 0; font-style:italic; max-width:500px; }

        @media (max-width:768px){
            .hero{ min-height:25vh; padding:1.5rem 1rem; }
            .hero h1{ font-size:2rem; }
            .hero .lead{ font-size:1.2rem; }
            .hero .sub{ font-size:1rem; }
            .photo .body{ font-size:1rem; }
            .qr img{ width:150px; height:150px; }
            .photo .footer h3{ font-size:1.4rem; }
            .photo .footer .sub{ font-size:.95rem; }
            .photo .footer .note{ font-size:.75rem; }
            .qr{ justify-self:start; top:0; }
            .photo .grid{ grid-template-columns:1fr; }
        }

        /* --- Print: make it behave like the crisp first poster --- */
        @page { size:A4; margin:0; }

        @media print{
            /* show only the poster page content */
            body *{ visibility: hidden; }
            .fi-sidebar, .fi-header, .no-print{ display:none !important; }

            html, body{
                margin:0 !important; padding:0 !important; width:210mm !important; height:297mm !important;
                background:#fff !important;
            }

            .page, .page *{ visibility: visible; }
            .page{
                position:absolute; top:0; left:0;
                width:210mm; height:297mm; max-width:none;
                margin:0; border:0; border-radius:0; box-shadow:none !important; overflow:hidden;
                display:flex; flex-direction:column;
            }

            /* Replace vh with fixed mm and remove transparency/shadows */
            .hero{
                background:#7b2a23 !important;
                color:#ffffff !important;
                padding: 8mm 10mm 6mm !important;
                min-height:unset; flex:0 0 65mm; display:flex; flex-direction:column; justify-content:center;
                box-shadow:none !important;
            }
            .hero h1{
                color:#ffffff !important; font-size:6.5mm !important; margin:0 0 2mm !important; text-shadow:none !important;
            }
            .hero .lead, .hero .sub{
                color:#ffffff !important; opacity:1 !important; text-shadow:none !important; margin:1.5mm 0 0 !important; font-size:3.8mm !important;
            }

            .photo{
                flex:0 0 190mm;   /* photo + footer combined; we’ll size footer below */
                background-color:#000 !important; /* safety fill under image */
            }
            .photo::before{
                /* stronger, non-fading veil; avoid semi-transparent stacking quirks */
                background: rgba(0,0,0,.55) !important;
            }

            .photo .content{ padding:10mm !important; }
            .photo .body{
                color:#ffffff !important; text-shadow:none !important; font-size:4.2mm !important; max-width:170mm !important;
            }

            .qr{ top:0 !important; }
            .qr figure{
                box-shadow:none !important; border:2px solid #ffffff !important; background:#ffffff !important;
            }
            .qr img{
                width:45mm !important; height:45mm !important; box-shadow:none !important; border:2px solid #ffffff !important;
            }
            .qr figcaption{ color:#000000 !important; font-size:3mm !important; }

            .photo .footer{
                background:#000000 !important; /* solid instead of gradient for consistent ink */
                padding: 6mm 10mm !important;
                flex:0 0 42mm; position:absolute; left:0; right:0; bottom:0; /* pin to bottom */
            }
            .photo .footer h3{ color:#ffffff !important; font-size:5mm !important; margin:0 0 2mm !important; }
            .photo .footer .sub{ color:#ffffff !important; opacity:1 !important; font-size:3.8mm !important; }
            .photo .footer .note{ color:#f0f0f0 !important; opacity:1 !important; font-size:3.2mm !important; text-shadow:none !important; }

            /* No breaks/shadows/radius anywhere */
            .page, .hero, .photo, .footer, .qr, .qr *, .photo *{
                page-break-inside: avoid; break-inside: avoid;
                box-shadow:none !important; border-radius:0 !important;
            }
        }
        /* already present, keep it */
        @page { size: A4; margin: 0; }

        @media print {
            /* Ensure ONLY the poster prints */
            body * { visibility: hidden; }
            .fi-sidebar, .fi-header, .no-print { display: none !important; }

            html, body {
                margin: 0 !important;
                padding: 0 !important;
                width: 210mm !important;
                height: 297mm !important;
                background: #fff !important;
            }

            .page, .page * { visibility: visible; }
            .page {
                position: absolute; top: 0; left: 0;
                width: 210mm; height: 297mm;
                overflow: hidden;                    /* hard stop: never spill onto page 2 */
                border: 0; border-radius: 0; box-shadow: none !important;
                display: flex; flex-direction: column;
            }

            /* --- Fixed layout math: 65 + 190 + 42 = 297 mm --- */
            .hero {
                flex: 0 0 65mm;
                padding: 8mm 10mm 6mm !important;
                background: #7b2a23 !important;
                color: #fff !important;
                box-shadow: none !important;
                display: flex; flex-direction: column; justify-content: center;
            }
            .hero h1,
            .hero .lead,
            .hero .sub { margin: 0 !important; }

            .hero h1 { font-size: 6.2mm !important; line-height: 1.1 !important; text-shadow: none !important; }
            .hero .lead { font-size: 3.6mm !important; line-height: 1.25 !important; }
            .hero .sub  { font-size: 3.4mm !important; line-height: 1.25 !important; }

            .photo {
                flex: 0 0 190mm;                     /* total block for middle + footer */
                position: relative;
                background-color: #000 !important;   /* safety fill under image */
            }
            .photo::before { background: rgba(0,0,0,.55) !important; } /* solid veil for print */

            /* Reserve space for footer so content never sits under it */
            .photo .content {
                padding: 10mm !important;
                /* 190mm - 42mm footer - 10mm top/bottom padding ≈ 138mm content window */
                max-height: 138mm;
                overflow: hidden;                    /* trims long body text safely */
            }

            .photo .grid {
                gap: 8mm !important;
                grid-template-columns: 1fr auto !important; /* stable for print */
            }

            .photo .body {
                font-size: 4.0mm !important;
                line-height: 1.35 !important;
                max-width: 170mm !important;
                margin: 0 !important;
                color: #fff !important;
                text-shadow: none !important;
                /* keep paragraph from pushing layout */
                max-height: 120mm;                   /* extra guard; trims overflow */
                overflow: hidden;
            }

            .qr { position: relative; top: 0 !important; justify-self: end; align-self: start; }
            .qr figure {
                background: #fff !important;
                border: 2px solid #fff !important;
                border-radius: 2mm !important;
                box-shadow: none !important;
                margin: 0 !important;
                padding: 2mm !important;
            }
            .qr img {
                width: 45mm !important; height: 45mm !important;
                border: 2px solid #fff !important;
                box-shadow: none !important;
            }
            .qr figcaption {
                color: #000 !important;
                font-size: 3mm !important;
                margin: 1mm 0 0 !important;
            }

            /* Footer is pinned and sized */
            .photo .footer {
                position: absolute; left: 0; right: 0; bottom: 0;
                flex: 0 0 42mm;
                height: 42mm;                        /* explicit height to match math */
                padding: 6mm 10mm !important;
                background: #000 !important;         /* solid (no gradient) to avoid fade */
                text-align: center;
            }
            .photo .footer h3   { font-size: 5mm !important; margin: 0 0 2mm !important; color: #fff !important; }
            .photo .footer .sub { font-size: 3.8mm !important; margin: 0 !important; color: #fff !important; }
            .photo .footer .note{
                font-size: 3.1mm !important; margin: 2mm auto 0 !important;
                color: #f0f0f0 !important; max-width: 170mm !important; text-shadow: none !important;
            }

            /* Remove any rounding/shadows & forbid breaks */
            .page, .hero, .photo, .footer, .qr, .qr *, .photo *{
                page-break-inside: avoid; break-inside: avoid;
                border-radius: 0 !important; box-shadow: none !important;
            }
        }
    </style>

    <div class="page">
        <!-- HERO -->
        <section class="hero">
            <h1>{{ $headline }}</h1>
            <p class="lead">{{ $subheadline }}</p>
            <p class="sub">{{ $tagline }}</p>
        </section>

        <!-- PHOTO SECTION -->
        <section class="photo" style="background-image:url('{{ asset(ltrim($photoPath, '/')) }}');">
            <div class="content">
                <div class="grid">
                    <p class="body">{{ $body }}</p>
                    <div class="qr">
                        <figure>
                            <figcaption>Scan Me!</figcaption>
                            <img src="{{ $qrDataUrl }}" alt="QR code linking to event page">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="footer">
                <h3>{{ $hostName }}</h3>
                <p class="sub">{{ $hostSubtitle }}</p>
                <p class="note">{{ $footerNote }}</p>
            </div>
        </section>
    </div>
</x-filament::page>
