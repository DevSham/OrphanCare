{{-- resources/views/pages/street-kids-christmas-2025.blade.php --}}
@extends('layouts.app')

@section('title', 'Street Kids Christmas Party 2025 — A Community of Hope')
<style>
    .slider-container {
        overflow: hidden;
        position: relative;
        -webkit-overflow-scrolling: touch;
        width: 100%;
    }

    .slider-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        touch-action: pan-y pinch-zoom;
        will-change: transform;
    }

    .slide {
        flex: 0 0 auto; /* Changed from flex: 0 0 100% */
        min-width: 0;
        -webkit-text-size-adjust: 100%;
        position: relative;
    }

    /* Fix aspect ratio containers for iOS */
    .slide .aspect-\[4\/3\],
    .slide .aspect-\[16\/9\],
    .slide .aspect-\[21\/9\],
    .slide .aspect-\[21\/8\] {
        position: relative;
        width: 100%;
        height: 0;
        overflow: hidden;
    }

    /* Use padding-bottom for consistent aspect ratios on iOS */
    .slide .aspect-\[4\/3\] {
        padding-bottom: 75%; /* 4:3 = 75% */
    }

    @media (min-width: 640px) {
        .slide .aspect-\[16\/9\] {
            padding-bottom: 56.25%; /* 16:9 = 56.25% */
        }
    }

    @media (min-width: 768px) {
        .slide .aspect-\[21\/9\] {
            padding-bottom: 42.857%; /* 21:9 */
        }
    }

    @media (min-width: 1024px) {
        .slide .aspect-\[21\/8\] {
            padding-bottom: 38.095%; /* 21:8 */
        }
    }

    /* Position images absolutely within aspect ratio containers */
    .slide .aspect-\[4\/3\] img,
    .slide .aspect-\[16\/9\] img,
    .slide .aspect-\[21\/9\] img,
    .slide .aspect-\[21\/8\] img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }

    /* iPhone-specific adjustments */
    @media (max-width: 640px) {
        .slider-nav {
            width: 36px;
            height: 36px;
            padding: 8px;
        }

        .slider-nav svg {
            width: 16px;
            height: 16px;
        }
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
        z-index: 10;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 1);
    }

    .slider-nav.prev {
        left: 10px;
    }

    .slider-nav.next {
        right: 10px;
    }

    .slider-dots {
        display: flex;
        justify-content: center;
        margin-top: 15px;
    }

    .slider-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #cbd5e1;
        margin: 0 5px;
        cursor: pointer;
        transition: background 0.3s;
        -webkit-tap-highlight-color: transparent;
    }

    .slider-dot.active {
        background: #475569;
    }

    /* Prevent iOS zoom on double-tap */
    .slider-container * {
        touch-action: manipulation;
    }

    /* Fallback for older browsers */
    @supports not (padding-bottom: 75%) {
        .slide .aspect-\[4\/3\] {
            aspect-ratio: 4/3;
        }
        .slide .aspect-\[16\/9\] {
            aspect-ratio: 16/9;
        }
        .slide .aspect-\[21\/9\] {
            aspect-ratio: 21/9;
        }
        .slide .aspect-\[21\/8\] {
            aspect-ratio: 21/8;
        }
    }
</style>
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
                class="mt-3 text-xl sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                A Mission With a Purpose
            </h2>

            <div class="mt-5 grid grid-cols-1 gap-6 md:grid-cols-2 md:items-start">
                <div class="text-lg leading-relaxed text-slate-700 dark:text-slate-300">
                    Every December, I travel to Uganda to host a Christmas celebration for children living on the streets of
                    Kampala, a day filled with laughter, music, food, and the joy of being seen and loved.
                    The celebration brings together hundreds of street kids from across Kampala for a vibrant day of fun and
                    hope. They enjoy games, dancing, a warm meal, and the chance to share their talents. Each child receives
                    clothes and shoes, simple gifts that bring dignity, comfort, and lasting smiles.
                </div>

                <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50
                                text-center text-slate-500 grid place-content-center
                                dark:border-slate-700 dark:bg-slate-900/40">
                    <img src="/images/Jeff.JPG" width="100%" height="100%"/>

                </div>
            </div>
        </section>

        {{-- How It All Started --}}
        <section class="mt-10" aria-labelledby="started">
            <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
            <h2 id="started"
                class="mt-3 text-xl sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                How It All Started
            </h2>

            <div class="mt-5 grid grid-cols-1 gap-6 md:grid-cols-2 md:items-start">
                <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50
                                text-center text-slate-500 grid place-content-center
                                dark:border-slate-700 dark:bg-slate-900/40">
                    <img src="/images/kidsFacepaint.JPG" width="100%" height="100%"/>

                </div>

                <div class="space-y-4 text-lg leading-relaxed text-slate-700 dark:text-slate-300">

                    <p class="opacity-90">It all started on <strong>Christmas Day, 2011</strong>, when I saw children digging through bins, trying to find something to eat. That sight broke my heart children spending Christmas in trash, eating leftovers while others were celebrating.</p>
                    <p class="opacity-90">The next year, on <strong>25th December 2012</strong>, I made a promise that no child on the streets of Kampala should spend Christmas like that again. That’s how our<strong>Street Kids Christmas Party</strong> began, with a small meal that fed <strong>250 street children</strong>.</p>
                    <p class="opacity-90">Ever since then, the celebration has grown each year. Today, between <strong>1,000 and 1,300 street children</strong> come together for a full day of joy and hope with music, dance, acrobatics, food, gifts, bouncing castles, and face painting.</p>
                    <p class="opacity-90">From these annual events, we were able to form a <strong>children’s home (opened in 2014)</strong>, which now cares for <strong>35 former street children</strong>. They go to school, receive medical care, and live a normal, happy life full of dreams and second chances.</p>
                    <div class="quote">What began with 250 plates of food has grown into a movement of love, faith, and hope feeding over 1,000 street children every Christmas and changing lives every single year.</div>


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
                class="mt-3 text-xl sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                See the Smiles
            </h2>
            <p class="mt-1 text-lg text-slate-600 dark:text-slate-300">
                Every smile tells a story. Every meal shared plants a seed of hope.
                Your kindness can change a child’s Christmas and their future.

                Join us by supporting meals, gifts, or school supplies for a child in Kampala            </p>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <div class="slider-container relative overflow-hidden">
                    <div class="slider-track flex gap-3 sm:gap-4 md:gap-6 transition-transform duration-700 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/kids.JPG" class="w-full h-full object-cover" alt="Kids"/>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/qrpic.jpeg" class="w-full h-full object-cover" alt="Helping Kids"/>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/drinks.JPG" class="w-full h-full object-cover" alt="Drinks"/>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/bread.JPG" class="w-full h-full object-cover" alt="Bread"/>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/HELP UP  KIDS-49.JPG" class="w-full h-full object-cover" alt="Help Kids"/>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/xmas party for street kids 2018_037.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                            </div>
                        </div>

                        <!-- Slide 7 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/cloths.JPG" class="w-full h-full object-cover" alt="Clothes"/>
                            </div>
                        </div>

                        <!-- Slide 8 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/clothes.JPG" class="w-full h-full object-cover" alt="Clothes"/>
                            </div>
                        </div>

                        <!-- Slide 9 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/facepaint.JPG" class="w-full h-full object-cover" alt="Face Paint"/>
                            </div>
                        </div>

                        <!-- Slide 10 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/facepainting.JPG" class="w-full h-full object-cover" alt="Face Painting"/>
                            </div>
                        </div>

                        <!-- Slide 11 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/food.JPG" class="w-full h-full object-cover" alt="Food"/>
                            </div>
                        </div>

                        <!-- Slide 12 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/play.JPG" class="w-full h-full object-cover" alt="Play"/>
                            </div>
                        </div>

                        <!-- Slide 13 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/jump.JPG" class="w-full h-full object-cover" alt="Jump"/>
                            </div>
                        </div>

                        <!-- Slide 14 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/blues.JPG" class="w-full h-full object-cover" alt="Jump"/>
                            </div>
                        </div>

                        <!-- Slide 15 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/uniform1.JPG" class="w-full h-full object-cover" alt="Jump"/>
                            </div>
                        </div>

                        <!-- Slide 15 -->
                        <div class="slide flex-shrink-0">
                            <div class="aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-xl sm:rounded-2xl shadow-xl">
                                <img src="/images/uniform2.JPG" class="w-full h-full object-cover" alt="Jump"/>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <button class="slider-nav prev absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-2 sm:p-3 shadow-lg transition-all hover:scale-110 z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <button class="slider-nav next absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-2 sm:p-3 shadow-lg transition-all hover:scale-110 z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Dots Navigation -->
                <div class="slider-dots flex justify-center gap-2 sm:gap-2.5 mt-4 sm:mt-6"></div>
            </div>


            <p class="mt-3 text-lg text-slate-600 dark:text-slate-300">
                Through <strong>Help Kids Up Kampala</strong>, children return to school, reunite with family, and dream again.
            </p>
        </section>

        {{-- Vision / Home --}}
        <section class="mt-10" aria-labelledby="home">
            <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
            <h2 id="home"
                class="mt-3 text-xl sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                From One Day to Everyday Care
            </h2>
            <p class="mt-2 text-lg text-slate-600 dark:text-slate-300">
                Out of these Christmas outreaches, we launched a <strong>children’s home</strong> that now cares for
                <strong>35 children</strong>. Looking ahead to <strong>2026–2027</strong>, our vision is to establish a
                permanent home so more children can live, learn, and grow in safety.
            </p>
        </section>

        {{-- Fundraising Goal --}}
        <section class="mt-10" aria-labelledby="goal">
            <div class="h-0.5 w-24 rounded bg-[#C6A669]"></div>
            <h2 id="goal"
                class="mt-3 text-xl sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                Our 2025 Goal — $12,000
            </h2>

            <div class="space-y-3 text-lg text-slate-700 dark:text-slate-300">
                <p>
                    This Christmas, our goal is to raise <strong>$12,000</strong> to make the
                    <strong>Street Kids Christmas Party</strong> possible. Your generosity will help us provide
                    <strong>hot meals, clothes, shoes, and gifts</strong> for over <strong>1,000 children still living on
                        the streets of Kampala</strong> giving them a full day of laughter, dignity, and love.
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

                    <a href="https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M"
                       target="_blank"
                       rel="noopener noreferrer"
                       data-track-button
                       data-campaign="street-kids-christmas"
                       data-button-id="sponsor_christmas_party_10"
                       data-button-text="Sponsor the Christmas Party $10"
                       class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#7A0E1B] bg-[#7A0E1B] px-6 py-3 text-sm font-bold text-white transition hover:brightness-105 focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7A0E1B]/30">
                        🎁 Sponsor the Christmas Party $10
                    </a>
                </div>
                <div class="flex-col">
                    <a href="https://donate.stripe.com/eVq4gz5fJe1Tg2J5SBenS0M"
                       target="_blank"
                       rel="noopener noreferrer"
                       data-track-button
                       data-campaign="street-kids-christmas"
                       data-button-id="monthly_supporter_35"
                       data-button-text="Become a Monthly Supporter — $35/month"
                       class="inline-flex items-center justify-center gap-2 rounded-full border-2 border-[#7A0E1B] bg-[#7A0E1B] px-6 py-3 text-sm font-bold text-white transition hover:brightness-105 focus:outline-none focus-visible:ring-4 focus-visible:ring-[#7A0E1B]/30">
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
                    <a href="mailto:Info@helpkidsup.org"
                       class="font-semibold underline-offset-4 hover:underline text-[#5e0b15] dark:text-[#C6A669]">
                        Info@helpkidsup.org
                    </a>
                </p>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="mt-8 border-t border-slate-200 pt-4 text-center text-sm text-slate-600
                       dark:border-slate-700 dark:text-slate-300">
            <p>
                📧 <a class="font-semibold hover:underline" href="mailto:Info@helpkidsup.org">Info@helpkidsup.org</a>
                <span class="mx-2">•</span>
                🌍 <a class="font-semibold hover:underline" href="https://www.helpkidsup.org" target="_blank" rel="noopener">www.helpkidsup.org</a>
            </p>

        </footer>
    </main>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.slider-track');
        const slides = Array.from(document.querySelectorAll('.slide'));
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');
        const dotsWrap = document.querySelector('.slider-dots');
        const sliderContainer = document.querySelector('.slider-container');

        if (!track || !slides.length) return;

        let currentPage = 0;
        let slidesPerView = 1;
        let totalSlides = slides.length;
        let totalPages = 1;
        let autoPlayInterval;
        const autoPlayDelay = 3000; // Increased from 10000 to 13000 (13 seconds)

        function getSlidesPerView() {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function getSlidesToShift() {
            if (window.innerWidth >= 1024) return 1; // Desktop: shift 3 slides
            if (window.innerWidth >= 640) return 1;  // Tablet: shift 2 slides
            return 1;                                // Mobile: shift 1 slide
        }

        function setSlideWidths() {
            const container = sliderContainer.getBoundingClientRect();
            const gap = window.innerWidth >= 768 ? 24 : (window.innerWidth >= 640 ? 16 : 12);
            const totalGaps = (slidesPerView - 1) * gap;
            const availableWidth = container.width - totalGaps;
            const slideWidth = availableWidth / slidesPerView;

            slides.forEach(s => {
                s.style.width = `${slideWidth}px`;
                s.style.flexShrink = '0';
            });
        }

        function calcPages() {
            if (totalSlides <= slidesPerView) {
                totalPages = 1;
            } else {
                totalPages = totalSlides - slidesPerView + 1;
            }
        }

        function buildDots() {
            if (!dotsWrap) return;
            dotsWrap.innerHTML = '';
            for (let i = 0; i < totalPages; i++) {
                const dot = document.createElement('span');
                dot.className = 'slider-dot w-2.5 h-2.5 sm:w-3 sm:h-3 bg-slate-300 rounded-full cursor-pointer transition-all hover:scale-125';
                dot.dataset.index = String(i);
                dot.addEventListener('click', () => goToPage(i));
                dotsWrap.appendChild(dot);
            }
        }

        function setActiveDot() {
            if (!dotsWrap) return;
            const dots = dotsWrap.querySelectorAll('.slider-dot');
            dots.forEach((d, i) => {
                d.classList.toggle('bg-slate-600', i === currentPage);
                d.classList.toggle('bg-slate-300', i !== currentPage);
                d.style.opacity = d.classList.contains('bg-slate-600') ? '1' : '0.5';
            });
        }

        function updatePosition() {
            const gap = window.innerWidth >= 768 ? 24 : (window.innerWidth >= 640 ? 16 : 12);
            const slideWidth = slides[0].getBoundingClientRect().width;
            const shift = currentPage * (slideWidth + gap);
            track.style.transform = `translateX(-${shift}px)`;
            setActiveDot();
        }

        function nextPage() {
            const slidesToShift = getSlidesToShift();
            if (currentPage < totalPages - slidesToShift) {
                currentPage += slidesToShift;
            } else {
                currentPage = 0; // Loop back to start
            }
            updatePosition();
            resetAutoPlay();
        }

        function prevPage() {
            const slidesToShift = getSlidesToShift();
            if (currentPage >= slidesToShift) {
                currentPage -= slidesToShift;
            } else {
                // Go to the last possible page that shows complete slides
                currentPage = Math.max(0, totalPages - slidesPerView);
            }
            updatePosition();
            resetAutoPlay();
        }

        function goToPage(i) {
            if (i < 0) i = 0;
            if (i > totalPages - 1) i = totalPages - 1;
            currentPage = i;
            updatePosition();
            resetAutoPlay();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextPage, autoPlayDelay);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        function resetAutoPlay() {
            stopAutoPlay();
            startAutoPlay();
        }

        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', stopAutoPlay);
            sliderContainer.addEventListener('mouseleave', startAutoPlay);
        }

        function resizeAndReflow() {
            slidesPerView = getSlidesPerView();
            setSlideWidths();
            calcPages();
            if (currentPage > totalPages - 1) currentPage = Math.max(0, totalPages - 1);
            buildDots();
            updatePosition();
        }

        prevBtn && prevBtn.addEventListener('click', prevPage);
        nextBtn && nextBtn.addEventListener('click', nextPage);

        resizeAndReflow();
        startAutoPlay();

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(resizeAndReflow, 150);
        });

        // Touch swipe support
        let startX = 0, currentX = 0, isDown = false;

        track.addEventListener('touchstart', e => {
            isDown = true;
            startX = e.touches[0].clientX;
            stopAutoPlay();
        }, { passive: true });

        track.addEventListener('touchmove', e => {
            if (!isDown) return;
            currentX = e.touches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchend', () => {
            if (!isDown) return;
            isDown = false;
            const dx = currentX - startX;
            if (Math.abs(dx) > 50) {
                dx < 0 ? nextPage() : prevPage();
            }
            startAutoPlay();
        });

        window.addEventListener('blur', stopAutoPlay);
        window.addEventListener('focus', startAutoPlay);
    });
</script>
