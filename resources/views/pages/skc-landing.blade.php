{{-- resources/views/pages/street-kids-christmas-2025.blade.php --}}
@extends('layouts.app')

@section('title', 'Street Kids Christmas 2025. This Ride Tells a Story')
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
    <div>
        {{-- Hero --}}
        <header class="relative isolate overflow-hidden">
            <div class="rounded-xl bg-[#7A0E1B] text-white shadow">
                <div class="px-4 py-8 sm:px-10 sm:py-10 text-center">
                    <h1 class="text-balance text-2xl sm:text-4xl font-extrabold leading-tight tracking-tight">
                        STREET KIDS CHRISTMAS 2025 <br class="opacity-95">This Ride Tells a Story</br>
                    </h1>
                    <p class="mt-2 text-sm sm:text-base text-white/90">
                        Feeding Hope to Over 1,000 Children in Kampala, Uganda
                    </p>
                </div>
            </div>
            <p class="mt-2 text-center text-[13px] text-slate-500 dark:text-slate-400">
                ⚠️ <em><strong>Personal Project, Not Affiliated with Uber</strong></em>
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

                        Every December, I travel to Kampala, Uganda to host a Street Kids Christmas Party — a day when children who
                        still live on the streets receive clothes, shoes, a warm meal, and a reason to smile again. For one day,
                        they feel seen, valued, and deeply loved.
                    </div>

                    <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50
                                text-center text-slate-500 grid place-content-center
                                dark:border-slate-700 dark:bg-slate-900/40">
                        <img src="/images/Jeff.JPG" width="100%" height="100%"/>

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

                    <div class="rounded-xl border border-dashed border-slate-300 bg-slate-50
                                text-center text-slate-500 grid place-content-center
                                dark:border-slate-700 dark:bg-slate-900/40">
                        <img src="/images/kidsFacepaint.JPG" width="100%" height="100%"/>

                    </div>

                    <div class="space-y-4 text-lg leading-relaxed text-slate-700 dark:text-slate-300">
                        <p class="opacity-90">It all started on <strong>Christmas Day, 2011</strong>, when I saw children digging through bins, trying to find something to eat. That sight broke my heart children spending Christmas in trash, eating leftovers while others were celebrating.</p>
                        <p class="opacity-90">The next year, on <strong>25th December 2012</strong>, I made a promise that no child on the streets of Kampala should spend Christmas like that again. That’s how <strong>Street Kid Christmas</strong> began with a small meal that fed <strong>250 street children</strong>.</p>
                        <p class="opacity-90">Ever since then, the celebration has grown each year. Today, between <strong>1,000 and 1,300 children</strong> come together for a full day of joy and hope with music, dance, acrobatics, food, gifts, bouncing castles, and face painting.</p>
                        <p class="opacity-90">From these annual events, we were able to form a <strong>children’s home (opened in 2014)</strong>, which now cares for <strong>35 former street children</strong>. They go to school, receive medical care, and live a normal, happy life full of dreams and second chances.</p>
                        <blockquote
                            class="rounded-xl border-l-4 border-[#7A0E1B] bg-[#7A0E1B]/5 p-4 italic text-slate-800 dark:text-slate-300">
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
                <p class="mt-1 text-lg text-slate-600 dark:text-slate-300">
                    Every smile tells a story. Every meal shared plants a seed of hope.
                    Your kindness can change a child’s Christmas and their future.

                    Join us by supporting meals, gifts, or school supplies for a child in Kampala
                </p>

                <div class="max-w-7xl mx-auto px-4 py-8">
                    <div class="slider-container relative overflow-hidden">
                        <div class="slider-track flex gap-6 transition-transform duration-700 ease-in-out px-2">
                            <!-- Slide 1 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/kids.JPG" class="w-full h-full object-cover" alt="Kids"/>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/qrpic.jpeg" class="w-full h-full object-cover" alt="Helping Kids"/>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/drinks.JPG" class="w-full h-full object-cover" alt="Drinks"/>
                                </div>
                            </div>

                            <!-- Slide 4 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/bread.JPG" class="w-full h-full object-cover" alt="Bread"/>
                                </div>
                            </div>

                            <!-- Slide 5 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/HELP UP  KIDS-49.JPG" class="w-full h-full object-cover" alt="Help Kids"/>
                                </div>
                            </div>

                            <!-- Slide 6 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/xmas party for street kids 2018_037.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>

                            <!-- Slide 7 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/cloths.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                            <!-- Slide 8 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/clothes.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                            <!-- Slide 9 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/facepaint.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                            <!-- Slide 10 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/facepainting.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                            <!-- Slide 11 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/food.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                            <!-- Slide 12 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/play.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                            <!-- Slide 12 -->
                            <div class="slide flex-shrink-0 w-full">
                                <div class="aspect-[16/9] md:aspect-[21/9] lg:aspect-[21/8] overflow-hidden bg-slate-100 rounded-2xl shadow-xl">
                                    <img src="/images/jump.JPG" class="w-full h-full object-cover" alt="Xmas Party"/>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <button class="slider-nav prev absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-3 shadow-lg transition-all hover:scale-110 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <button class="slider-nav next absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white rounded-full p-3 shadow-lg transition-all hover:scale-110 z-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <!-- Dots Navigation -->
                    <div class="slider-dots flex justify-center gap-2.5 mt-6">
                        <!-- Dots will be generated by JavaScript -->
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
                        <strong>Informational only no donations collected during rides. All gifts are processed securely.<strong>
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
                    📧 <a class="font-semibold hover:underline" href="mailto:Info@helpkidsup.org">Info@helpkidsup.org</a>
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
        const autoPlayDelay = 5000; // 5 seconds

        function getSlidesPerView() {
            if (window.innerWidth >= 1024) return 3;
            if (window.innerWidth >= 640) return 2;
            return 1;
        }

        function setSlideWidths() {
            const basis = (100 / slidesPerView) + '%';
            slides.forEach(s => {
                s.style.flex = `0 0 ${basis}`;
                s.style.maxWidth = basis;
            });
            track.style.display = 'flex';
            track.style.transition = 'transform 700ms ease-in-out';
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
                dot.className = 'slider-dot w-3 h-3 bg-slate-300 rounded-full cursor-pointer transition-all hover:scale-125';
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
            const shiftPct = -(100 / slidesPerView) * currentPage;
            track.style.transform = `translateX(${shiftPct}%)`;
            setActiveDot();
        }

        function nextPage() {
            if (currentPage < totalPages - 1) {
                currentPage++;
            } else {
                currentPage = 0;
            }
            updatePosition();
            resetAutoPlay(); // Reset timer on manual navigation
        }

        function prevPage() {
            if (currentPage > 0) {
                currentPage--;
            } else {
                currentPage = totalPages - 1;
            }
            updatePosition();
            resetAutoPlay(); // Reset timer on manual navigation
        }

        function goToPage(i) {
            if (i < 0) i = 0;
            if (i > totalPages - 1) i = totalPages - 1;
            currentPage = i;
            updatePosition();
            resetAutoPlay(); // Reset timer on manual navigation
        }

        // Auto-play functionality
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

        // Pause auto-play on hover
        if (sliderContainer) {
            sliderContainer.addEventListener('mouseenter', stopAutoPlay);
            sliderContainer.addEventListener('mouseleave', startAutoPlay);
        }

        function resizeAndReflow() {
            const prevSlidesPerView = slidesPerView;
            slidesPerView = getSlidesPerView();

            setSlideWidths();
            calcPages();

            if (currentPage > totalPages - 1) currentPage = Math.max(0, totalPages - 1);

            buildDots();
            updatePosition();
        }

        // Bind buttons
        prevBtn && prevBtn.addEventListener('click', prevPage);
        nextBtn && nextBtn.addEventListener('click', nextPage);

        // Initialize
        resizeAndReflow();
        startAutoPlay(); // Start auto-play on load

        window.addEventListener('resize', () => {
            clearTimeout(window.__sliderResizeTimer);
            window.__sliderResizeTimer = setTimeout(resizeAndReflow, 150);
        });

        // Swipe functionality
        let startX = 0, isDown = false;
        track.addEventListener('pointerdown', e => {
            isDown = true;
            startX = e.clientX;
            stopAutoPlay(); // Pause auto-play during interaction
        });

        window.addEventListener('pointerup', e => {
            if (!isDown) return;
            isDown = false;
            const dx = e.clientX - startX;
            if (Math.abs(dx) > 40) {
                (dx < 0 ? nextPage() : prevPage());
            }
            startAutoPlay(); // Resume auto-play after interaction
        });

        // Pause auto-play when window loses focus
        window.addEventListener('blur', stopAutoPlay);
        window.addEventListener('focus', startAutoPlay);
    });
</script>
