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
        <p class="text-center text-xs sm:text-sm text-slate-600 dark:text-slate-300 mt-2">
            ⚠️ <em>Personal Project — Not Affiliated with Uber</em>
        </p>
    </header>

    {{-- Section: A Ride With a Purpose --}}
    <section class="mt-10" aria-labelledby="purpose">
        <h2 id="purpose" class="text-[#5e0b15] text-xl font-extrabold tracking-tight">A Ride With a Purpose</h2>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <div class="space-y-3 text-sm sm:text-base">
                <p>Hi, I’m <strong>Jeff — founder of Street Kid Christmas Kampala.</strong></p>
                <p>Every December, I travel home to Uganda to host a Christmas celebration for street children and orphans — a day filled with food, laughter, music, and love for those who would otherwise go without.</p>

                <dl class="mt-4 grid grid-cols-2 gap-3 text-center">
                    <div class="rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-slate-900 p-4 shadow">
                        <dt class="text-[11px] uppercase tracking-wide text-slate-500">Children Served</dt>
                        <dd class="text-2xl font-extrabold">1,000–1,300</dd>
                    </div>
                    <div class="rounded-xl border border-slate-200 dark:border-white/10 bg-white dark:bg-slate-900 p-4 shadow">
                        <dt class="text-[11px] uppercase tracking-wide text-slate-500">Home Opened</dt>
                        <dd class="text-2xl font-extrabold">2014</dd>
                    </div>
                </dl>
            </div>

            <figure class="aspect-[4/3] rounded-xl border border-dashed border-slate-300 dark:border-slate-700
                     bg-slate-50 dark:bg-slate-900/40 grid place-content-center p-6 text-center text-slate-500">
                <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Jeff with Kids ]</figcaption>
            </figure>
        </div>
    </section>

    {{-- Section: How It All Started --}}
    <section class="mt-10" aria-labelledby="started">
        <h2 id="started" class="text-[#5e0b15] text-xl font-extrabold tracking-tight">How It All Started</h2>
        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <figure class="order-last md:order-first aspect-[4/3] rounded-xl border border-dashed border-slate-300 dark:border-slate-700
                     bg-slate-50 dark:bg-slate-900/40 grid place-content-center p-6 text-center text-slate-500">
                <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Celebration Scene ]</figcaption>
            </figure>

            <div class="space-y-4 text-sm sm:text-base">
                <p>It all started on <strong>Christmas Day, 2011</strong>, when I saw children digging through bins, trying to find something to eat. That sight broke my heart — children spending Christmas in trash, eating leftovers while others were celebrating.</p>
                <p>The next year, on <strong>25th December 2012</strong>, I made a promise that no child on the streets of Kampala should spend Christmas like that again. That’s how <strong>Street Kid Christmas</strong> began — with a small meal that fed <strong>250 street children</strong>.</p>
                <p>Ever since then, the celebration has grown each year. Today, between <strong>1,000 and 1,300 children</strong> come together for a full day of joy and hope — with music, dance, acrobatics, food, gifts, bouncing castles, and face painting.</p>
                <p>From these annual events, we were able to form a <strong>children’s home (opened in 2014)</strong>, which now cares for <strong>35 former street children</strong>. They go to school, receive medical care, and live a normal, happy life — full of dreams and second chances.</p>

                <blockquote class="rounded-xl border-l-4 border-[#7a0e1b]/80 bg-[#7a0e1b]/5 p-4 italic text-slate-800 dark:text-slate-200">
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
                <p>Your kindness can change a child’s Christmas — and their future.</p>
                <p>Join us by supporting meals, gifts, or school supplies for a child in Kampala.</p>
                <ul class="mt-3 grid gap-2">
                    <li class="flex items-start gap-3"><span class="mt-1 size-2 rounded-full" style="background:#C6A669"></span> Music, dance & acrobatics</li>
                    <li class="flex items-start gap-3"><span class="mt-1 size-2 rounded-full" style="background:#C6A669"></span> Warm meals & gifts</li>
                    <li class="flex items-start gap-3"><span class="mt-1 size-2 rounded-full" style="background:#C6A669"></span> Bouncing castles & face painting</li>
                </ul>
            </div>

            <figure class="aspect-[4/3] rounded-xl border border-dashed border-slate-300 dark:border-slate-700
                     bg-slate-50 dark:bg-slate-900/40 grid place-content-center p-6 text-center text-slate-500">
                <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Smiling Children ]</figcaption>
            </figure>
        </div>
    </section>

    {{-- CTA --}}
    <section class="mt-10" aria-labelledby="learn">
        <h2 id="learn" class="sr-only">Together, We Feed Hope</h2>
        <div class="rounded-2xl border border-slate-200 dark:border-white/10 bg-white dark:bg-slate-900 p-6 sm:p-8 text-center shadow">
            <p class="text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15]">Together, We Feed Hope</p>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                Informational only — no donations collected during rides. All gifts are processed securely and may be tax-deductible.
            </p>
            <div class="mt-5">
                <a href="https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M" target="_blank" rel="noopener noreferrer"
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

        <div class="text-center text-sm text-slate-600 dark:text-slate-300 mt-3">
            📧 <a class="font-semibold hover:underline" href="mailto:helpkidsupkampala@gmail.com">helpkidsupkampala@gmail.com</a>
            <span class="mx-2">•</span>
            🌍 <a class="font-semibold hover:underline" href="https://www.helpkidsup.org" target="_blank" rel="noopener">helpkidsup.org</a>
        </div>
    </section>
@endsection
