{{-- resources/views/pages/street-kids-christmas-2025.blade.php --}}
@extends('layouts.app')

@section('title', 'Street Kids Christmas Party 2025 — A Community of Hope')
<style>
    .slider-container {
        overflow: hidden;
        position: relative;
    }

    .slider-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        flex: 0 0 100%;
        min-width: 0;
    }

    @media (min-width: 640px) {
        .slide {
            flex: 0 0 50%;
        }
    }

    @media (min-width: 768px) {
        .slide {
            flex: 0 0 33.333333%;
        }
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.7);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s;
        z-index: 10;
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 0.9);
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
    }

    .slider-dot.active {
        background: #475569;
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
                    clothes and shoes — simple gifts that bring dignity, comfort, and lasting smiles.
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
                class="mt-3 text-xl sm:text-xl font-extrabold tracking-tight text-[#5e0b15] dark:text-[#C6A669]">
                See the Smiles
            </h2>
            <p class="mt-1 text-lg text-slate-600 dark:text-slate-300">
                Every smile tells a story. Every meal shared plants a seed of hope.
            </p>

            <div class="max-w-7xl mx-auto px-4"> <!-- widened to max-w-7xl + padding -->

                <div class="slider-container relative overflow-hidden rounded-xl">
                    <div class="slider-track flex transition-transform duration-700 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="slide flex-shrink-0 w-full p-2">
                            <div class="h-[450px] md:h-[550px] lg:h-[650px] rounded-xl border border-dashed border-slate-300 bg-slate-50 overflow-hidden">
                                <img src="/images/kids.JPG" class="w-full h-full object-cover" alt="Kids"/>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="slide flex-shrink-0 w-full p-2">
                            <div class="h-[450px] md:h-[550px] lg:h-[650px] rounded-xl border border-dashed border-slate-300 bg-slate-50 overflow-hidden">
                                <img src="/images/qrpic.jpeg" class="w-full h-full object-cover" alt="Helping Kids"/>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="slide flex-shrink-0 w-full p-2">
                            <div class="h-[450px] md:h-[550px] lg:h-[650px] rounded-xl border border-dashed border-slate-300 bg-slate-50 overflow-hidden">
                                <img src="/images/drinks.JPG" class="w-full h-full object-cover" alt="Drinks"/>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="slide flex-shrink-0 w-full p-2">
                            <div class="h-[450px] md:h-[550px] lg:h-[650px] rounded-xl border border-dashed border-slate-300 bg-slate-50 overflow-hidden">
                                <img src="/images/bread.JPG" class="w-full h-full object-cover" alt="Bread"/>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="slide flex-shrink-0 w-full p-2">
                            <div class="h-[450px] md:h-[550px] lg:h-[650px] rounded-xl border border-dashed border-slate-300 bg-slate-50 overflow-hidden">
                                <img src="/images/HELP UP  KIDS-49.JPG" class="w-full h-full object-cover" alt="Bread"/>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="slide flex-shrink-0 w-full p-2">
                            <div class="h-[450px] md:h-[550px] lg:h-[650px] rounded-xl border border-dashed border-slate-300 bg-slate-50 overflow-hidden">
                                <img src="/images/xmas party for street kids 2018_037.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <button class="slider-nav prev absolute left-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <button class="slider-nav next absolute right-3 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white rounded-full p-2 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Dots -->
                <div class="slider-dots flex justify-center gap-2 mt-4">
                    <span class="slider-dot active w-3 h-3 bg-slate-400 rounded-full cursor-pointer" data-index="0"></span>
                    <span class="slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer" data-index="1"></span>
                    <span class="slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer" data-index="2"></span>
                    <span class="slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer" data-index="3"></span>
                    <span class="slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer" data-index="4"></span>
                    <span class="slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer" data-index="5"></span>
                    <span class="slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer" data-index="6"></span>
                </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.slider-track');
        const slides = Array.from(document.querySelectorAll('.slide'));
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');
        const dotsWrap = document.querySelector('.slider-dots');

        if (!track || !slides.length) return;

        let currentPage = 0;           // "page" = a viewport of N slides
        let slidesPerView = 1;
        let totalSlides = slides.length;
        let totalPages = 1;

        function getSlidesPerView() {
            // Match your breakpoints (can tweak as needed)
            if (window.innerWidth >= 1024) return 3; // lg+
            if (window.innerWidth >= 640)  return 2; // sm+
            return 1;                                  // xs
        }

        function setSlideWidths() {
            const basis = (100 / slidesPerView) + '%';
            slides.forEach(s => {
                s.style.flex = `0 0 ${basis}`;   // width per slide
                s.style.maxWidth = basis;        // keep from stretching
            });
            track.style.display = 'flex';
            track.style.transition = 'transform 700ms ease-in-out';
        }

        function calcPages() {
            // If fewer slides than viewport, clamp to single page
            if (totalSlides <= slidesPerView) {
                totalPages = 1;
            } else {
                totalPages = totalSlides - slidesPerView + 1; // number of left-most positions
            }
        }

        function buildDots() {
            if (!dotsWrap) return;
            dotsWrap.innerHTML = ''; // rebuild
            for (let i = 0; i < totalPages; i++) {
                const dot = document.createElement('span');
                dot.className = 'slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer';
                dot.dataset.index = String(i);
                dot.addEventListener('click', () => goToPage(i));
                dotsWrap.appendChild(dot);
            }
        }

        function setActiveDot() {
            if (!dotsWrap) return;
            const dots = dotsWrap.querySelectorAll('.slider-dot');
            dots.forEach((d, i) => d.classList.toggle('active', i === currentPage));
            dots.forEach((d) => {
                // optional: stronger style for active
                d.style.opacity = d.classList.contains('active') ? '1' : '0.5';
            });
        }

        function updatePosition() {
            const shiftPct = -(100 / slidesPerView) * currentPage;
            track.style.transform = `translateX(${shiftPct}%)`;
            setActiveDot();
        }

        function nextPage() {
            if (currentPage < totalPages - 1) {
                currentPage++;
            } else {
                currentPage = 0; // loop
            }
            updatePosition();
        }

        function prevPage() {
            if (currentPage > 0) {
                currentPage--;
            } else {
                currentPage = totalPages - 1; // loop
            }
            updatePosition();
        }

        function goToPage(i) {
            if (i < 0) i = 0;
            if (i > totalPages - 1) i = totalPages - 1;
            currentPage = i;
            updatePosition();
        }

        function resizeAndReflow() {
            const prevSlidesPerView = slidesPerView;
            slidesPerView = getSlidesPerView();

            setSlideWidths();
            calcPages();

            // If slides-per-view changed, ensure current page is still valid
            if (currentPage > totalPages - 1) currentPage = Math.max(0, totalPages - 1);

            buildDots();
            updatePosition();
        }

        // Bind buttons if present
        prevBtn && prevBtn.addEventListener('click', prevPage);
        nextBtn && nextBtn.addEventListener('click', nextPage);

        // Init
        resizeAndReflow();
        window.addEventListener('resize', () => {
            // Debounce a bit to avoid jitter on mobile address bar show/hide
            clearTimeout(window.__sliderResizeTimer);
            window.__sliderResizeTimer = setTimeout(resizeAndReflow, 150);
        });

        // OPTIONAL: enable swipe (mobile)
        let startX = 0, isDown = false;
        track.addEventListener('pointerdown', e => { isDown = true; startX = e.clientX; });
        window.addEventListener('pointerup', e => {
            if (!isDown) return;
            isDown = false;
            const dx = e.clientX - startX;
            if (Math.abs(dx) > 40) (dx < 0 ? nextPage() : prevPage());
        });
    });
</script>
