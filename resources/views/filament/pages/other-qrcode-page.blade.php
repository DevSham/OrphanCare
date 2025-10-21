<x-filament::page>

    <style>
        @page {
            size: A4 landscape;
            margin: 0;
        }


        /* PRINT OPTIMIZATION - Add these critical rules */
        * {
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
            color-adjust: exact !important;
            box-sizing: border-box;
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

        /* Street Kid Christmas 2025 Styling */
        .page {
            font-family: 'Arial', 'Helvetica', sans-serif;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
        }

        /* TOP MAROON BAND - Centered content */
        .page section:first-child {
            background-color: #7b2a23 !important;
            padding: 1rem 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex: 0 0 auto;
            min-height: 30vh;
        }

        .page section:first-child h1 {
            color: white !important;
            font-size: 3rem;
            font-weight: 900 !important;
            letter-spacing: 2px;
            line-height: 1.1;
            margin-bottom: 1rem;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            max-width: 800px;
        }

        .page section:first-child p:nth-of-type(1) {
            color: white !important;
            font-size: 1.6rem;
            font-weight: 800 !important;
            line-height: 1.2;
            margin-bottom: 0.5rem;
            max-width: 800px;
        }

        .page section:first-child p:nth-of-type(2) {
            color: white !important;
            font-size: 1.2rem;
            font-weight: 800;
            opacity: 0.95;
            max-width: 800px;
        }

        /* PHOTO SECTION - Centered content */
        .page section:nth-child(2) {
            position: relative !important;
            flex: 1 1 auto;
            min-height: 70vh;
            background-size: cover !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        /* Dark overlay for better text readability */
        .page section:nth-child(2)::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                to bottom,
                rgba(0,0,0,0.3) 0%,
                rgba(0,0,0,0.2) 20%,
                rgba(0,0,0,0.4) 70%,
                rgba(0,0,0,0.7) 100%
            );
            z-index: 1;
        }

        /* Content positioning - CENTERED */
        .page section:nth-child(2) > div:first-of-type {
            position: relative;
            z-index: 2;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex: 1;
        }

        /* Body text styling - CENTERED */
        .page section:nth-child(2) p {
            color: white !important;
            font-size: 1.3rem;
            line-height: 1.5;
            font-weight: 800;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);
            margin-bottom: 1.5rem;
            max-width: 700px;
            text-align: center;
        }

        /* QR Code styling - REDUCED BORDER & CENTERED */
        .page section:nth-child(2) .inline-flex {
            border: 2px solid white !important; /* Further reduced for printing */
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.5);
            background: white;
            padding: 0.25rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page section:nth-child(2) img {
            border-radius: 6px;
            max-width: 200px !important;
            height: auto !important;
        }

        /* Footer section with gradient - CENTERED */
        .page section:nth-child(2) > div:last-of-type {
            position: relative;
            z-index: 2;
            padding: 1.5rem;
            background: linear-gradient(
                to top,
                rgba(0,0,0,0.9) 0%,
                rgba(0,0,0,0.7) 50%,
                transparent 100%
            );
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex: 0 0 auto;
        }

        /* Host name styling */
        .page section:nth-child(2) h3 {
            color: white !important;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);
            text-align: center;
        }

        /* Host subtitle */
        .page section:nth-child(2) p:nth-of-type(2) {
            color: white !important;
            font-size: 1.1rem;
            font-weight: 500;
            opacity: 0.95;
            margin-bottom: 0.5rem;
            text-align: center;
        }

        /* Footer note */
        .page section:nth-child(2) p:nth-of-type(3) {
            color: white !important;
            font-size: 0.8rem;
            opacity: 0.8;
            margin-bottom: 0;
            font-style: italic;
            text-align: center;
            max-width: 500px;
        }

        /* Grid adjustments for centered layout */
        .page section:nth-child(2) .grid {
            display: flex !important;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
        }

        .page section:nth-child(2) .grid > * {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .page section:first-child {
                padding: 1.5rem 1rem;
                min-height: 25vh;
            }

            .page section:nth-child(2) img {
                border-radius: 6px;
                max-width: 100px !important;
                height: 80% !important;
            }

            .page section:first-child h1 {
                font-size: 2rem;
            }

            .page section:first-child p:nth-of-type(1) {
                font-size: 1.2rem;
            }

            .page section:first-child p:nth-of-type(2) {
                font-size: 1rem;
            }

            .page section:nth-child(2) p {
                font-size: 1rem;
            }

            .page section:nth-child(2) .inline-flex {
                border-width: 1px !important;
            }

            .page section:nth-child(2) img {
                max-width: 150px !important;
            }

            .page section:nth-child(2) h3 {
                font-size: 1.4rem;
            }

            .page section:nth-child(2) p:nth-of-type(2) {
                font-size: 0.9rem;
            }

            .page section:nth-child(2) p:nth-of-type(3) {
                font-size: 0.7rem;
            }
        }



    </style>

    <div class="page avoid-break-inside no-page-break ">

        {{-- 1) TOP MAROON BAND (force white for all children) --}}
        <section
            class=""
            style="background-color:#7b2a23"
        >
            <h1 class="!text-white text-4xl md:text-6xl font-extrabold tracking-tight uppercase">
                {{ $headline }}
            </h1>
            <p class="!text-white mt-3 text-2xl md:text-3xl font-semibold">
                {{ $subheadline }}
            </p>
            <p class="!text-white mt-4 text-lg md:text-2xl font-medium">
                {{ $tagline }}
            </p>
        </section>

        {{-- 2) PHOTO SECTION --}}
        <section
            class=""  {{-- isolate = new stacking context so z works predictably --}}
        style="background-image:url('{{ asset(ltrim($photoPath, '/')) }}'); background-size:cover; background-position:center; background-repeat:no-repeat;"
        >
            {{-- soft dark veil UNDER content --}}
            <div class="absolute inset-0 bg-black/25 z-0"></div>

            {{-- content grid (paragraph + QR) ABOVE overlay --}}
            <div class="px-6 py-8 md:px-10 md:py-10">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-12 items-center">
                    {{-- Paragraph --}}
                    <p class="">
                        {{ $body }}
                    </p>

                    {{-- QR to the right, with thick white border like poster --}}
                    <div class="md:col-span-5 ">
                        <div class="">
                            <p><caption>Scan Me!</caption></p>
                            <img src="{{ $qrDataUrl }}" alt="QR Code" class="h-56 w-56">
                        </div>
                    </div>
                </div>
            </div>

            {{-- heavy bottom gradient for name/subtitle/footer --}}

            {{-- footer text over the gradient --}}
            <div class="px-6 pb-8 md:px-10 text-center">
                <h3 class="!text-white text-3xl md:text-4xl">
                    {{ $hostName }}
                </h3>
                <p class="!text-white  text-xl md:text-2xl">
                    {{ $hostSubtitle }}
                </p>
                <p class="!text-white text-sm md:text-base drop-shadow">
                    {{ $footerNote }}
                </p>
            </div>
        </section>
    </div>
</x-filament::page>
