{{--<x-filament::page>--}}

{{--    <style>--}}
{{--        @page {--}}
{{--            size: A4 landscape;--}}
{{--            margin: 0;--}}
{{--        }--}}
{{--        * {--}}
{{--            -webkit-print-color-adjust: exact !important;--}}
{{--            print-color-adjust: exact !important;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}

{{--        /* PRINT OPTIMIZATION - Add these critical rules */--}}
{{--        * {--}}
{{--            -webkit-print-color-adjust: exact !important;--}}
{{--            print-color-adjust: exact !important;--}}
{{--            color-adjust: exact !important;--}}
{{--            box-sizing: border-box;--}}
{{--        }--}}

{{--        @media print {--}}
{{--            body, html {--}}
{{--                margin: 0 !important;--}}
{{--                padding: 0 !important;--}}
{{--                height: 100% !important;--}}
{{--                width: 100% !important;--}}
{{--            }--}}

{{--            aside, header, nav, .no-print {--}}
{{--                display: none !important;--}}
{{--            }--}}

{{--            .page {--}}
{{--                box-shadow: none !important;--}}
{{--                border: none !important;--}}
{{--                margin: 0 !important;--}}
{{--                padding: 0 !important;--}}
{{--                width: 100% !important;--}}
{{--                max-height: 92vh !important;--}}
{{--                min-height: 92vh !important;--}}
{{--                page-break-inside: avoid !important;--}}
{{--                break-inside: avoid !important;--}}
{{--            }--}}

{{--            /* Prevent any element from creating page breaks */--}}
{{--            * {--}}
{{--                page-break-inside: avoid !important;--}}
{{--                break-inside: avoid !important;--}}
{{--                page-break-after: avoid !important;--}}
{{--                break-after: avoid !important;--}}
{{--                page-break-before: avoid !important;--}}
{{--                break-before: avoid !important;--}}
{{--            }--}}
{{--        }--}}

{{--        /* Street Kid Christmas 2025 Styling */--}}
{{--        .page {--}}
{{--            font-family: 'Arial', 'Helvetica', sans-serif;--}}
{{--            background: white;--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            justify-content: center;--}}
{{--            height: 100vh;--}}
{{--            overflow: hidden;--}}
{{--        }--}}

{{--        /* TOP MAROON BAND - Centered content */--}}
{{--        .page section:first-child {--}}
{{--            background-color: #7b2a23 !important;--}}
{{--            padding: 1rem 1rem;--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--            text-align: center;--}}
{{--            flex: 0 0 auto;--}}
{{--            min-height: 30vh;--}}
{{--        }--}}

{{--        .page section:first-child h1 {--}}
{{--            color: white !important;--}}
{{--            font-size: 3rem;--}}
{{--            font-weight: 900;--}}
{{--            letter-spacing: 2px;--}}
{{--            line-height: 1.1;--}}
{{--            margin-bottom: 1rem;--}}
{{--            text-transform: uppercase;--}}
{{--            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);--}}
{{--            max-width: 800px;--}}
{{--        }--}}

{{--        .page section:first-child p:nth-of-type(1) {--}}
{{--            color: white !important;--}}
{{--            font-size: 1.6rem;--}}
{{--            font-weight: 800;--}}
{{--            line-height: 1.2;--}}
{{--            margin-bottom: 0.5rem;--}}
{{--            max-width: 800px;--}}
{{--        }--}}

{{--        .page section:first-child p:nth-of-type(2) {--}}
{{--            color: white !important;--}}
{{--            font-size: 1.2rem;--}}
{{--            font-weight: 800;--}}
{{--            opacity: 0.95;--}}
{{--            max-width: 800px;--}}
{{--        }--}}

{{--        /* PHOTO SECTION - Centered content */--}}
{{--        .page section:nth-child(2) {--}}
{{--            position: relative;--}}
{{--            flex: 1 1 auto;--}}
{{--            min-height: 70vh;--}}
{{--            background-size: cover !important;--}}
{{--            background-position: center !important;--}}
{{--            background-repeat: no-repeat !important;--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            justify-content: space-between;--}}
{{--            overflow: hidden;--}}
{{--        }--}}

{{--        /* Dark overlay for better text readability */--}}
{{--        .page section:nth-child(2)::before {--}}
{{--            content: '';--}}
{{--            position: absolute;--}}
{{--            top: 0;--}}
{{--            left: 0;--}}
{{--            right: 0;--}}
{{--            bottom: 0;--}}
{{--            background: linear-gradient(--}}
{{--                to bottom,--}}
{{--                rgba(0,0,0,0.3) 0%,--}}
{{--                rgba(0,0,0,0.2) 20%,--}}
{{--                rgba(0,0,0,0.4) 70%,--}}
{{--                rgba(0,0,0,0.7) 100%--}}
{{--            );--}}
{{--            z-index: 1;--}}
{{--        }--}}

{{--        /* Content positioning - CENTERED */--}}
{{--        .page section:nth-child(2) > div:first-of-type {--}}
{{--            position: relative;--}}
{{--            z-index: 2;--}}
{{--            padding: 2rem;--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--            text-align: center;--}}
{{--            flex: 1;--}}
{{--        }--}}

{{--        /* Body text styling - CENTERED */--}}
{{--        .page section:nth-child(2) p {--}}
{{--            color: white !important;--}}
{{--            font-size: 1.3rem;--}}
{{--            line-height: 1.5;--}}
{{--            font-weight: 800;--}}
{{--            text-shadow: 1px 1px 3px rgba(0,0,0,0.8);--}}
{{--            margin-bottom: 1.5rem;--}}
{{--            max-width: 700px;--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        /* QR Code styling - REDUCED BORDER & CENTERED */--}}
{{--        .page section:nth-child(2) .inline-flex {--}}
{{--            border: 2px solid white !important; /* Further reduced for printing */--}}
{{--            border-radius: 8px;--}}
{{--            box-shadow: 0 4px 15px rgba(0,0,0,0.5);--}}
{{--            background: white;--}}
{{--            padding: 0.25rem;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--        }--}}

{{--        .page section:nth-child(2) img {--}}
{{--            border-radius: 6px;--}}
{{--            max-width: 200px !important;--}}
{{--            height: auto !important;--}}
{{--        }--}}

{{--        /* Footer section with gradient - CENTERED */--}}
{{--        .page section:nth-child(2) > div:last-of-type {--}}
{{--            position: relative;--}}
{{--            z-index: 2;--}}
{{--            padding: 1.5rem;--}}
{{--            background: linear-gradient(--}}
{{--                to top,--}}
{{--                rgba(0,0,0,0.9) 0%,--}}
{{--                rgba(0,0,0,0.7) 50%,--}}
{{--                transparent 100%--}}
{{--            );--}}
{{--            display: flex;--}}
{{--            flex-direction: column;--}}
{{--            justify-content: center;--}}
{{--            align-items: center;--}}
{{--            text-align: center;--}}
{{--            flex: 0 0 auto;--}}
{{--        }--}}

{{--        /* Host name styling */--}}
{{--        .page section:nth-child(2) h3 {--}}
{{--            color: white !important;--}}
{{--            font-size: 1.8rem;--}}
{{--            font-weight: 700;--}}
{{--            margin-bottom: 0.5rem;--}}
{{--            text-shadow: 2px 2px 4px rgba(0,0,0,0.8);--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        /* Host subtitle */--}}
{{--        .page section:nth-child(2) p:nth-of-type(2) {--}}
{{--            color: white !important;--}}
{{--            font-size: 1.1rem;--}}
{{--            font-weight: 500;--}}
{{--            opacity: 0.95;--}}
{{--            margin-bottom: 0.5rem;--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        /* Footer note */--}}
{{--        .page section:nth-child(2) p:nth-of-type(3) {--}}
{{--            color: white !important;--}}
{{--            font-size: 0.8rem;--}}
{{--            opacity: 0.8;--}}
{{--            margin-bottom: 0;--}}
{{--            font-style: italic;--}}
{{--            text-align: center;--}}
{{--            max-width: 500px;--}}
{{--        }--}}

{{--        /* Grid adjustments for centered layout */--}}
{{--        .page section:nth-child(2) .grid {--}}
{{--            display: flex !important;--}}
{{--            flex-direction: column;--}}
{{--            align-items: center;--}}
{{--            justify-content: center;--}}
{{--            gap: 1.5rem;--}}
{{--        }--}}

{{--        .page section:nth-child(2) .grid > * {--}}
{{--            width: 100%;--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--        }--}}

{{--        /* Mobile responsive */--}}
{{--        @media (max-width: 768px) {--}}
{{--            .page section:first-child {--}}
{{--                padding: 1.5rem 1rem;--}}
{{--                min-height: 25vh;--}}
{{--            }--}}

{{--            .page section:nth-child(2) img {--}}
{{--                border-radius: 6px;--}}
{{--                max-width: 100px !important;--}}
{{--                height: 80% !important;--}}
{{--            }--}}

{{--            .page section:first-child h1 {--}}
{{--                font-size: 2rem;--}}
{{--            }--}}

{{--            .page section:first-child p:nth-of-type(1) {--}}
{{--                font-size: 1.2rem;--}}
{{--            }--}}

{{--            .page section:first-child p:nth-of-type(2) {--}}
{{--                font-size: 1rem;--}}
{{--            }--}}

{{--            .page section:nth-child(2) p {--}}
{{--                font-size: 1rem;--}}
{{--            }--}}

{{--            .page section:nth-child(2) .inline-flex {--}}
{{--                border-width: 1px !important;--}}
{{--            }--}}

{{--            .page section:nth-child(2) img {--}}
{{--                max-width: 150px !important;--}}
{{--            }--}}

{{--            .page section:nth-child(2) h3 {--}}
{{--                font-size: 1.4rem;--}}
{{--            }--}}

{{--            .page section:nth-child(2) p:nth-of-type(2) {--}}
{{--                font-size: 0.9rem;--}}
{{--            }--}}

{{--            .page section:nth-child(2) p:nth-of-type(3) {--}}
{{--                font-size: 0.7rem;--}}
{{--            }--}}
{{--        }--}}


{{--        /* Force solid colors in print */--}}
{{--        * {--}}
{{--            -webkit-print-color-adjust: exact !important;--}}
{{--            color-adjust: exact !important;--}}
{{--        }--}}
{{--    </style>--}}

{{--    <div class="page avoid-break-inside no-page-break ">--}}

{{--        --}}{{-- 1) TOP MAROON BAND (force white for all children) --}}
{{--        <section--}}
{{--            class=""--}}
{{--            style="background-color:#7b2a23"--}}
{{--        >--}}
{{--            <h1 class="!text-white text-4xl md:text-6xl font-extrabold tracking-tight uppercase">--}}
{{--                {{ $headline }}--}}
{{--            </h1>--}}
{{--            <p class="!text-white mt-3 text-2xl md:text-3xl font-semibold">--}}
{{--                {{ $subheadline }}--}}
{{--            </p>--}}
{{--            <p class="!text-white mt-4 text-lg md:text-2xl font-medium">--}}
{{--                {{ $tagline }}--}}
{{--            </p>--}}
{{--        </section>--}}

{{--        --}}{{-- 2) PHOTO SECTION --}}
{{--        <section--}}
{{--            class=""  --}}{{-- isolate = new stacking context so z works predictably --}}
{{--        style="background-image:url('{{ asset(ltrim($photoPath, '/')) }}'); background-size:cover; background-position:center; background-repeat:no-repeat;"--}}
{{--        >--}}
{{--            --}}{{-- soft dark veil UNDER content --}}
{{--            <div class="absolute inset-0 bg-black/25 z-0"></div>--}}

{{--            --}}{{-- content grid (paragraph + QR) ABOVE overlay --}}
{{--            <div class="px-6 py-8 md:px-10 md:py-10">--}}
{{--                <div class="grid grid-cols-1 gap-8 md:grid-cols-12 items-center">--}}
{{--                    --}}{{-- Paragraph --}}
{{--                    <p class="">--}}
{{--                        {{ $body }}--}}
{{--                    </p>--}}

{{--                    --}}{{-- QR to the right, with thick white border like poster --}}
{{--                    <div class="md:col-span-5 ">--}}
{{--                        <div class="">--}}
{{--                            <p><caption>Scan Me!</caption></p>--}}
{{--                            <img src="{{ $qrDataUrl }}" alt="QR Code" class="h-56 w-56">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            --}}{{-- heavy bottom gradient for name/subtitle/footer --}}

{{--            --}}{{-- footer text over the gradient --}}
{{--            <div class="px-6 pb-8 md:px-10 text-center">--}}
{{--                <h3 class="!text-white text-3xl md:text-4xl">--}}
{{--                    {{ $hostName }}--}}
{{--                </h3>--}}
{{--                <p class="!text-white  text-xl md:text-2xl">--}}
{{--                    {{ $hostSubtitle }}--}}
{{--                </p>--}}
{{--                <p class="!text-white text-sm md:text-base drop-shadow">--}}
{{--                    {{ $footerNote }}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
{{--</x-filament::page>--}}

@extends('layouts.app')

@section('title', 'Street Kid Christmas 2025 — This Ride Tells a Story')

@section('content')
    {{-- Hero --}}
    <header class="relative isolate overflow-hidden">
        <div class="rounded-xl bg-gradient-to-b from-[#5e0b15] to-[#7a0e1b] text-white shadow">
            <div class="px-6 py-10 sm:px-10 text-center">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1
                     text-[11px] font-semibold tracking-wide">
                    <span class="size-1.5 rounded-full" style="background:#C6A669"></span>
                    Kampala • Since 2012
                </span>
                <h1 class="mt-3 text-balance text-3xl sm:text-4xl font-extrabold leading-tight">
                    STREET KID CHRISTMAS 2025 — <span class="opacity-95">This Ride Tells a Story</span>
                </h1>
                <p class="mt-2 text-sm sm:text-base text-white/90">
                    Feeding Hope to Over 1,000 Children in Kampala, Uganda
                </p>
            </div>
        </div>
        <p class="text-center text-xs sm:text-sm text-slate-600 mt-2">
            ⚠️ <em>Personal Project — Not Affiliated with Uber</em>
        </p>
    </header>

    {{-- Section: A Ride With a Purpose --}}
    <section class="mt-10" aria-labelledby="purpose">
        <h2 id="purpose" class="text-[#5e0b15] text-xl font-extrabold tracking-tight">A Ride With a Purpose</h2>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div class="space-y-3 text-sm sm:text-base">
                <p>Hi, I'm <strong>Jeff — founder of Street Kid Christmas Kampala.</strong></p>
                <p>Every December, I travel home to Uganda to host a Christmas celebration for street children and orphans — a day filled with food, laughter, music, and love for those who would otherwise go without.</p>

                <dl class="mt-4 grid grid-cols-2 gap-3 text-center">
                    <div class="rounded-xl border border-slate-200 bg-white p-4 shadow">
                        <dt class="text-[11px] uppercase tracking-wide text-slate-500">Children Served</dt>
                        <dd class="text-2xl font-extrabold">1,000–1,300</dd>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4 shadow">
                        <dt class="text-[11px] uppercase tracking-wide text-slate-500">Home Opened</dt>
                        <dd class="text-2xl font-extrabold">2014</dd>
                    </div>
                </dl>
            </div>

            <figure class="aspect-[4/3] rounded-xl border border-dashed border-slate-300
                     bg-slate-50 grid place-content-center p-6 text-center text-slate-500">
                <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Jeff with Kids ]</figcaption>
            </figure>
        </div>
    </section>

    {{-- Section: How It All Started --}}
    <section class="mt-10" aria-labelledby="started">
        <h2 id="started" class="text-[#5e0b15] text-xl font-extrabold tracking-tight">How It All Started</h2>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <figure class="order-last md:order-first aspect-[4/3] rounded-xl border border-dashed border-slate-300
                     bg-slate-50 grid place-content-center p-6 text-center text-slate-500">
                <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Celebration Scene ]</figcaption>
            </figure>

            <div class="space-y-4 text-sm sm:text-base">
                <p>It all started on <strong>Christmas Day, 2011</strong>, when I saw children digging through bins, trying to find something to eat. That sight broke my heart — children spending Christmas in trash, eating leftovers while others were celebrating.</p>
                <p>The next year, on <strong>25th December 2012</strong>, I made a promise that no child on the streets of Kampala should spend Christmas like that again. That's how <strong>Street Kid Christmas</strong> began — with a small meal that fed <strong>250 street children</strong>.</p>
                <p>Ever since then, the celebration has grown each year. Today, between <strong>1,000 and 1,300 children</strong> come together for a full day of joy and hope — with music, dance, acrobatics, food, gifts, bouncing castles, and face painting.</p>
                <p>From these annual events, we were able to form a <strong>children's home (opened in 2014)</strong>, which now cares for <strong>35 former street children</strong>. They go to school, receive medical care, and live a normal, happy life — full of dreams and second chances.</p>

                <blockquote class="rounded-xl border-l-4 border-[#7a0e1b]/80 bg-[#7a0e1b]/5 p-4 italic text-slate-800">
                    What began with 250 plates of food has grown into a movement of love, faith, and hope — feeding over 1,000 children every Christmas and changing lives every single year.
                </blockquote>
            </div>
        </div>
    </section>

    {{-- Section: See the Smiles --}}
    <section class="mt-10" aria-labelledby="smiles">
        <h2 id="smiles" class="text-[#5e0b15] text-xl font-extrabold tracking-tight">See the Smiles</h2>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div class="space-y-3 text-sm sm:text-base">
                <p>Your kindness can change a child's Christmas — and their future.</p>
                <p>Join us by supporting meals, gifts, or school supplies for a child in Kampala.</p>
                <ul class="mt-3 grid gap-2">
                    <li class="flex items-start gap-3"><span class="mt-1 size-2 rounded-full" style="background:#C6A669"></span> Music, dance & acrobatics</li>
                    <li class="flex items-start gap-3"><span class="mt-1 size-2 rounded-full" style="background:#C6A669"></span> Warm meals & gifts</li>
                    <li class="flex items-start gap-3"><span class="mt-1 size-2 rounded-full" style="background:#C6A669"></span> Bouncing castles & face painting</li>
                </ul>
            </div>

            <figure class="aspect-[4/3] rounded-xl border border-dashed border-slate-300
                     bg-slate-50 grid place-content-center p-6 text-center text-slate-500">
                <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Smiling Children ]</figcaption>
            </figure>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mt-10" aria-labelledby="learn">
        <h2 id="learn" class="sr-only">Together, We Feed Hope</h2>
        <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 text-center shadow">
            <p class="text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15]">Together, We Feed Hope</p>
            <p class="mt-2 text-sm text-slate-600">
                Informational only — no donations collected during rides. All gifts are processed securely and may be tax-deductible.
            </p>
            <div class="mt-5">
                <a href="https://www.helpkidsup.org/donate" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center gap-2 rounded-full border-2 border-[#7a0e1b] bg-[#7a0e1b] px-6 py-3
                  text-sm font-bold text-white transition hover:brightness-105 focus:outline-none
                  focus-visible:ring-4 focus-visible:ring-[#7a0e1b]/30"
                   aria-label="Learn more and support this mission on our secure site">
                    LEARN MORE / SUPPORT THIS MISSION
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12.293 4.293a1 1 0 0 1 1.414 0l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1-1.414-1.414L16.586 12H5a1 1 0 1 1 0-2h11.586l-4.293-4.293a1 1 0 0 1 0-1.414Z"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="text-center text-sm text-slate-600 mt-3">
            📧 <a class="font-semibold hover:underline" href="mailto:helpkidsupkampala@gmail.com">helpkidsupkampala@gmail.com</a>
            <span class="mx-2">•</span>
            🌍 <a class="font-semibold hover:underline" href="https://www.helpkidsup.org" target="_blank" rel="noopener">helpkidsup.org</a>
        </div>
    </section>
@endsection
