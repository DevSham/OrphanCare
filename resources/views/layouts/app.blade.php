<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{
          dark: $persist(false).as('dark-mode'),
          mobileNav: false
      }"
      x-init="
          // Check system preference on initial load if no stored preference
          if (typeof dark === 'boolean' && !dark) {
              dark = window.matchMedia('(prefers-color-scheme: dark)').matches;
          }
      "
      :class="{ 'dark': dark }" class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="h-full bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">

{{-- Top Bar --}}
<header class="sticky top-0 z-30 border-b border-slate-200/80 dark:border-slate-700/60 bg-white/80 dark:bg-slate-900/80 backdrop-blur">
    <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 h-14 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <button class="md:hidden p-2 rounded hover:bg-slate-100 dark:hover:bg-slate-800"
                    @click="mobileNav = !mobileNav" aria-label="Toggle navigation">☰</button>
            <a href="{{ url('/') }}" class="font-extrabold tracking-tight">Street Kid Christmas</a>
        </div>
        <div class="flex items-center gap-2">
            <button class="p-2 rounded hover:bg-slate-100 dark:hover:bg-slate-800"
                    @click="dark = !dark" :aria-pressed="dark" aria-label="Toggle dark mode">
                <template x-if="!dark">🌙</template>
                <template x-if="dark">☀️</template>
            </button>
        </div>
    </div>
</header>

{{-- Mobile drawer (optional) --}}
<nav class="md:hidden fixed inset-0 z-20 bg-black/40" x-show="mobileNav" @click="mobileNav = false"></nav>

{{-- Page content --}}
<main class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-8">
    @yield('content')
</main>

<footer class="border-t border-slate-200 dark:border-slate-700 py-6 text-center text-sm text-slate-600 dark:text-slate-300">
    © {{ date('Y') }} {{ config('app.name') }} · Kampala, Uganda
</footer>
</body>
</html>
