{{-- resources/views/pages/street-kids-christmas-2025.blade.php --}}
@extends('layouts.app')

@section('title', 'Street Kid Christmas 2025 — This Ride Tells a Story')

@section('content')
    <div>
        {{-- Hero --}}
        <header class="relative isolate overflow-hidden">
            <div class="rounded-xl bg-[#7A0E1B] text-white shadow">
                <div class="px-4 py-8 sm:px-10 sm:py-10 text-center">
                    <h1 class="text-balance text-2xl sm:text-4xl font-extrabold leading-tight tracking-tight">
                        STREET KID CHRISTMAS 2025 <span class="opacity-95">This Ride Tells a Story</span>
                    </h1>
                    <p class="mt-2 text-sm sm:text-base text-white/90">
                        Feeding Hope to Over 1,000 Children in Kampala, Uganda
                    </p>
                </div>
            </div>
            <p class="mt-2 text-center text-[13px] text-slate-500 dark:text-slate-400">
                ⚠️ <em>Personal Project, Not Affiliated with Uber</em>
            </p>
        </header>

        <main class="mx-auto mt-6 sm:mt-8 max-w-5xl px-4 sm:px-6">
            {{-- Intro pill --}}
            <div class="flex justify-center">
                <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-sm text-slate-800 shadow
                        dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100">
                    <span>🚗</span>
                    <span>Hi, I’m <strong>Jeff</strong> your driver today and founder of <strong>Street Kid Christmas Kampala</strong>.</span>
                </div>
            </div>

            {{-- Section: Purpose --}}
            <section class="mt-10" aria-labelledby="purpose">
                <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
                <h1 id="purpose"
                    class="mt-3 text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                    A Ride With a Purpose
                </h1>

                <div class="mt-5 grid grid-cols-1 gap-6 md:grid-cols-2 md:items-start">
                    <div class="text-lg leading-relaxed text-slate-700 dark:text-slate-300">
                        Every December, I travel home to Uganda to host a Christmas celebration for children who once called the
                        streets home a day filled with music, laughter, food, and the simple joy of being seen and loved.
                    </div>

                    <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50 p-2
                                text-center text-slate-500 grid place-content-center
                                dark:border-slate-700 dark:bg-slate-900/40">
                        <img src="/images/xmas party for street kids 2018_037.JPG" width="100%" height="100%"/>

                    </div>
                </div>
            </section>

            {{-- Section: How It All Started --}}
            <section class="mt-10" aria-labelledby="started">
                <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
                <h2 id="started"
                    class="mt-3 text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                    How It All Started
                </h2>

                <div class="mt-5 grid grid-cols-1 gap-6 md:grid-cols-2 md:items-start">
                    <figure class="order-last aspect-[4/3] rounded-xl border border-dashed border-slate-300 bg-slate-50 p-6
                                text-center text-slate-500 grid place-content-center
                                dark:order-first dark:border-slate-700 dark:bg-slate-900/40">
                        <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Celebration Scene ]</figcaption>
                    </figure>

                    <div class="space-y-4 text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                        <p>
                            It began on <strong>Christmas Day, 2011</strong>. The next year, I made a promise:
                            <em>no child should spend Christmas like that again.</em> What started with
                            <strong>250 children</strong> has grown to serving <strong>1,000+ children</strong> each Christmas.
                        </p>
                        <blockquote
                            class="rounded-xl border-l-4 border-[#7A0E1B] bg-[#7A0E1B]/5 p-4 italic text-slate-800 dark:text-slate-200">
                            “What began with 250 plates of food has become a celebration of love, faith, and community.”
                        </blockquote>
                    </div>
                </div>
            </section>

            {{-- Section: See the Smiles --}}
            <section class="mt-10" aria-labelledby="smiles">
                <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
                <h2 id="smiles"
                    class="mt-3 text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                    See the Smiles
                </h2>
                <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">
                    Every smile tells a story. Every meal shared plants a seed of hope.
                </p>

                <div class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3">
                    <div class="h-44 rounded-lg border border-dashed border-slate-300 bg-slate-50
                            grid place-content-center text-slate-500
                            dark:border-slate-700 dark:bg-slate-900/40">
                        [ Image ]
                    </div>
                    <div class="h-44 rounded-lg border border-dashed border-slate-300 bg-slate-50
                            grid place-content-center text-slate-500
                            dark:border-slate-700 dark:bg-slate-900/40">
                        [ Image ]
                    </div>
                    <div class="h-44 rounded-lg border border-dashed border-slate-300 bg-slate-50
                            grid place-content-center text-slate-500
                            dark:border-slate-700 dark:bg-slate-900/40">
                        [ Image ]
                    </div>
                </div>

                <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">
                    Through <strong>Help Kids Up Kampala</strong>, we’ve seen children return to school, reunite with family, and dream again.
                </p>
                <p class="text-sm text-slate-600 dark:text-slate-300">
                    ✨ <em>Your kindness today helps carry that story forward.</em>
                </p>
            </section>

            {{-- Section: CTA --}}
            <section class="mt-10" aria-labelledby="learn">
                <div class="h-0.5 w-24 mb-8 rounded bg-[#C6A669]"></div>
                <h2 id="learn"
                    class="sr-only">
                    Together, We Feed Hope
                </h2>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 sm:p-8 text-center shadow
                        dark:border-slate-700 dark:bg-slate-900">
                    <p class="text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                        Together, We Feed Hope
                    </p>
                    <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                        Informational only no donations collected during rides. All gifts are processed securely.
                    </p>
                    <div class="mt-5">
                        <a href="https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M"
                           target="_blank" rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 rounded-full border-2 border-[#7A0E1B] bg-[#7A0E1B] px-6 py-3
                              text-sm font-bold text-white transition hover:brightness-105 focus:outline-none
                              focus-visible:ring-4 focus-visible:ring-[#7A0E1B]/30"
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

            {{-- Footer --}}
            <footer class="mt-8 border-t border-slate-200 pt-4 text-center text-sm text-slate-600
                       dark:border-slate-700 dark:text-slate-300">
                <p class="text-xs text-slate-500 dark:text-slate-400">
                    Please use photos with consent and descriptive alt text. Avoid close-ups of minors without guardian consent.
                </p>
            </footer>
        </main>
    </div>
@endsection
