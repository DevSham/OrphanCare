<!doctype html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- No-flash theme (run before CSS) --}}
    <script>
        (function () {
            try {
                const KEY = 'theme'; // 'dark' | 'light'
                const stored = localStorage.getItem(KEY);
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                const theme = stored ?? (prefersDark ? 'dark' : 'light');

                document.documentElement.classList.toggle('dark', theme === 'dark');
                document.documentElement.style.colorScheme = theme; // native form controls
            } catch (_) {}
        })();
    </script>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @filamentStyles
    @filamentScripts
    @stack('styles')
</head>

<body class="min-h-screen bg-white text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
<header class="sticky top-0 z-30 border-b border-slate-200/50 dark:border-slate-800/60 bg-white/70 dark:bg-slate-950/70 backdrop-blur">
    <div class="mx-auto max-w-7xl px-4 py-3 flex items-center justify-between">
{{--        <a href="{{ url('/') }}" class="font-semibold">My Site</a>--}}<p>&nbsp&nbsp&nbsp</p>

        {{-- Theme Toggle --}}
        <button
            x-data
            x-on:click="
        const KEY = 'theme';
        const next = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
        localStorage.setItem(KEY, next);
        document.documentElement.classList.toggle('dark', next === 'dark');
        document.documentElement.style.colorScheme = next;
        window.dispatchEvent(new CustomEvent('theme-changed', { detail: { theme: next } }));
      "
            type="button"
            class="inline-flex items-center gap-2 rounded-xl border border-slate-300/50 dark:border-slate-700 px-3 py-1.5 text-sm hover:bg-slate-50 dark:hover:bg-slate-900"
            aria-label="Toggle theme"
        >
            <span class="dark:hidden" style="color:#7A0E1B;">🌙 Dark</span>
            <span class="hidden dark:inline">☀️ Light</span>
        </button>
    </div>
</header>

<main class="mx-auto max-w-7xl px-4 py-8">
    @yield('content')
</main>

@stack('scripts')
</body>
</html>

