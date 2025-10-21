{{-- resources/views/pages/street-kids-christmas-2025.blade.php --}}
@extends('layouts.app')

@section('title', 'Street Kids Christmas Party 2025 — A Community of Hope')

@section('content')
    {{-- Top Bar / Hero --}}
    <header class="relative isolate overflow-hidden">
        <div class="rounded-xl bg-[#7A0E1B] text-white shadow">
            <div class="px-6 py-10 sm:px-10 text-center">
                <h1 class="text-balance text-3xl sm:text-4xl font-extrabold leading-tight tracking-tight">
                    STREET KIDS CHRISTMAS PARTY 2025 — <span class="opacity-95">A COMMUNITY OF HOPE</span>
                </h1>
                <p class="mt-2 text-sm sm:text-base text-white/90">
                    Feeding Hope Together — Join Us This Christmas
                </p>
            </div>
        </div>
    </header>

    {{-- Intro pill --}}
    <div class="mt-5 flex justify-center">
        <div class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-sm shadow
                    dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100">
            <span>👋</span>
            <span>Hi, I’m <strong>Jeff</strong> — founder of <strong>Help Kids Up</strong> and organizer of the
                <strong>Street Kids Christmas Party</strong> in Kampala.</span>
        </div>
    </div>

    <main class="mx-auto mt-8 max-w-5xl px-4 sm:px-6">

        {{-- Mission / Purpose --}}
        <section class="mt-8" aria-labelledby="purpose">
            <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
            <h2 id="purpose"
                class="mt-3 text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                A Mission With a Purpose
            </h2>

            <div class="mt-5 grid grid-cols-1 gap-6 md:grid-cols-2 md:items-start">
                <div class="text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                    Every December, I travel to Uganda to host a Christmas celebration for children living on the streets of
                    Kampala — a day filled with laughter, music, food, and the joy of being seen and loved.
                    The celebration brings together hundreds of street kids from across Kampala for a vibrant day of fun and
                    hope. They enjoy games, dancing, a warm meal, and the chance to share their talents. Each child receives
                    clothes and shoes — simple gifts that bring dignity, comfort, and lasting smiles.
                </div>

                <figure class="aspect-[4/3] rounded-xl border border-dashed border-slate-300 bg-slate-50 p-6
                                text-center text-slate-500 grid place-content-center
                                dark:border-slate-700 dark:bg-slate-900/40">
                    <figcaption class="text-xs sm:text-sm">[ PHOTO PLACEHOLDER — Jeff with Kids ]</figcaption>
                </figure>
            </div>
        </section>

        {{-- How It All Started --}}
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
                    <p class="opacity-90">
                        It began on <strong>Christmas Day, 2011</strong>. The following year — on
                        <strong>25 December 2012</strong> — we hosted our first party with <strong>250 children</strong>.
                        Today, by God’s grace and your help, we serve <strong>1,000+ children</strong> every Christmas.
                    </p>

                    <blockquote class="rounded-xl border-l-4 border-[#7A0E1B] bg-[#7A0E1B]/5 p-4 italic
                                        text-slate-800 dark:text-slate-200">
                        “What began with 250 plates of food has become a celebration of love, faith, and community.”
                    </blockquote>
                </div>
            </div>
        </section>

        {{-- Smiles / Gallery --}}
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
                <div class="grid h-44 place-content-center rounded-lg border border-dashed border-slate-300 bg-slate-50
                            text-slate-500 dark:border-slate-700 dark:bg-slate-900/40">
                    [ Image ]
                </div>
                <div class="grid h-44 place-content-center rounded-lg border border-dashed border-slate-300 bg-slate-50
                            text-slate-500 dark:border-slate-700 dark:bg-slate-900/40">
                    [ Image ]
                </div>
                <div class="grid h-44 place-content-center rounded-lg border border-dashed border-slate-300 bg-slate-50
                            text-slate-500 dark:border-slate-700 dark:bg-slate-900/40">
                    [ Image ]
                </div>
            </div>

            <p class="mt-3 text-sm text-slate-600 dark:text-slate-300">
                Through <strong>Help Kids Up Kampala</strong>, children return to school, reunite with family, and dream again.
            </p>
        </section>

        {{-- Vision / Home --}}
        <section class="mt-10" aria-labelledby="home">
            <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
            <h2 id="home"
                class="mt-3 text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                From One Day to Everyday Care
            </h2>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">
                Out of these Christmas outreaches, we launched a <strong>children’s home</strong> that now cares for
                <strong>35 children</strong>. Looking ahead to <strong>2026–2027</strong>, our vision is to establish a
                permanent home so more children can live, learn, and grow in safety.
            </p>
        </section>

        {{-- Fundraising Goal --}}
        <section class="mt-10" aria-labelledby="goal">
            <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
            <h2 id="goal"
                class="mt-3 text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                Our 2025 Goal — $12,000
            </h2>

            <div class="space-y-3 text-sm text-slate-700 dark:text-slate-300">
                <p>
                    This Christmas, our goal is to raise <strong>$12,000</strong> to make the
                    <strong>Street Kids Christmas Party</strong> possible. Your generosity will help us provide
                    <strong>hot meals, clothes, shoes, and gifts</strong> for over <strong>1,000 children still living on
                        the streets of Kampala</strong> — giving them a full day of laughter, dignity, and love.
                </p>
                <p>
                    While this campaign focuses on the Christmas celebration, we also carry a <strong>bigger vision</strong>
                    for the years ahead. By <strong>2026–2027</strong>, we hope to establish a
                    <strong>permanent children’s home</strong>. Those who wish to walk with us beyond Christmas can join as
                    <strong>monthly supporters</strong>, starting at <strong>$35 a month per child</strong>, helping us
                    build something that lasts.
                </p>
            </div>

            <div class="mt-5 flex flex-col gap-2 sm:flex-row items-center text-center">
                <div class="flex-col">
                    <a href="https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#7A0E1B] bg-[#7A0E1B] px-6 py-3
                              text-sm font-bold text-white transition hover:brightness-105 focus:outline-none
                              focus-visible:ring-4 focus-visible:ring-[#7A0E1B]/30"
                       aria-label="Sponsor the Christmas Party via our secure donation page">
                        🎁 Sponsor the Christmas Party $10
                    </a>
                </div>
                <div class="flex-col">
                    <a href="https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M" target="_blank" rel="noopener noreferrer"
                       class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#7A0E1B] bg-[#7A0E1B] px-6 py-3
                          text-sm font-bold text-white transition hover:brightness-105 focus:outline-none
                          focus-visible:ring-4 focus-visible:ring-[#7A0E1B]/30"
                       aria-label="Become a monthly supporter via our secure donation page">
                        💛 Become a Monthly Supporter — $35/month
                    </a>
                </div>
            </div>
        </section>

        {{-- Invite / Community --}}
        <section class="mt-10" aria-labelledby="invite">
            <div class="h-0.5 w-24 mb-4 rounded bg-[#C6A669]"></div>


            <div class="rounded-2xl border items-center text-center border-slate-200 bg-white p-5 text-sm shadow
                        dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100">
                <h2 id="invite"
                    class="text-lg sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                    Together, We Feed Hope
                </h2>

                <ul class="mt-4 space-y-2 text-slate-700 dark:text-slate-300 list-none">
                    <li>🌟 Share the page</li>
                    <li>🤝 Invite 3 friends</li>
                    <li>🎯 Set a mini-goal (e.g., “Sponsor 20 children”)</li>
                    <li>🎁 Volunteer packing gifts, serving meals, music & games</li>
                </ul>

                <p class="mt-5 text-slate-600 dark:text-slate-300">
                    Questions? Email
                    <a href="mailto:info@helpkidsup.org"
                       class="font-semibold underline-offset-4 hover:underline text-[#5e0b15] dark:text-[#C6A669]">
                        info@helpkidsup.org
                    </a>
                </p>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="mt-8 border-t border-slate-200 pt-4 text-center text-sm text-slate-600
                       dark:border-slate-700 dark:text-slate-300">
            <p>
                📧 <a class="font-semibold hover:underline" href="mailto:info@helpkidsup.org">info@helpkidsup.org</a>
                <span class="mx-2">•</span>
                🌍 <a class="font-semibold hover:underline" href="https://www.helpkidsup.org" target="_blank" rel="noopener">www.helpkidsup.org</a>
            </p>
            <p class="mt-2 text-xs text-slate-500 dark:text-slate-400">
                Please use photos with consent and descriptive alt text. Avoid close-ups of minors without guardian consent.
            </p>
        </footer>
    </main>
@endsection
