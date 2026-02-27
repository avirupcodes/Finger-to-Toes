<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Finger To Toes • Nail Studio')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600;playfair-display:500,700" rel="stylesheet" />
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-[#050108] text-white font-sans antialiased relative overflow-x-hidden">
        @yield('page-background')

        <!-- Soft gradient background orbs -->
        <div class="pointer-events-none fixed inset-0 -z-20">
            <div class="absolute -top-32 -left-24 h-80 w-80 rounded-full bg-pink-500/40 blur-[110px]"></div>
            <div class="absolute top-40 -right-16 h-72 w-72 rounded-full bg-fuchsia-500/40 blur-[120px]"></div>
            <div class="absolute bottom-[-6rem] left-1/2 h-80 w-80 -translate-x-1/2 rounded-full bg-pink-300/20 blur-[120px]"></div>
        </div>

        <!-- Loader -->
        <div
            id="ftt-loader"
            class="fixed inset-0 z-40 flex items-center justify-center bg-gradient-to-br from-black via-[#160312] to-black transition-opacity duration-500"
        >
            <div class="flex flex-col items-center gap-6">
                <div class="relative">
                    <div class="h-20 w-20 rounded-full border-2 border-pink-400/30 border-t-pink-400 animate-spin"></div>
                    <div class="absolute inset-2 rounded-full bg-gradient-to-br from-pink-500 via-fuchsia-500 to-rose-400 blur-[12px] opacity-70 animate-pulse"></div>
                </div>
                <div class="text-center space-y-2">
                    <p class="tracking-[0.25em] uppercase text-xs text-pink-200/80">Finger To Toes</p>
                    <p class="text-sm text-pink-100/70">Polishing your experience&hellip;</p>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <header class="relative z-20">
            <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-6">
                <a href="{{ route('home') }}" class="flex items-center gap-3" data-aos="fade-down" data-aos-delay="150">
                    <img
                        src="{{ asset('images/finger-to-toes-logo.png') }}"
                        alt="Finger To Toes Nail Studio logo"
                        class="h-30 w-auto"
                    >
                </a>

                <!-- Desktop nav -->
                <div class="hidden items-center gap-8 text-sm md:flex" data-aos="fade-down" data-aos-delay="250">
                    <a href="{{ route('home') }}" class="text-pink-100/70 hover:text-pink-200 transition-colors">Home</a>
                    <a href="{{ route('about') }}" class="text-pink-100/70 hover:text-pink-200 transition-colors">About</a>
                    <a href="{{ route('services') }}" class="text-pink-100/70 hover:text-pink-200 transition-colors">Services</a>
                    <a href="{{ route('gallery') }}" class="text-pink-100/70 hover:text-pink-200 transition-colors">Gallery</a>
                    <a href="{{ route('testimonials') }}" class="text-pink-100/70 hover:text-pink-200 transition-colors">Testimonials</a>
                    <a href="{{ route('contact') }}" class="text-pink-100/70 hover:text-pink-200 transition-colors">Contact</a>
                    <a
                        href="{{ route('contact') }}#booking-form"
                        class="rounded-full border border-pink-400/70 bg-pink-500/10 px-5 py-2 text-sm font-medium text-pink-100 shadow-[0_0_25px_rgba(244,114,182,0.35)] hover:bg-pink-500/25 hover:border-pink-300 transition-all"
                    >
                        Book Now
                    </a>
                </div>

                <!-- Mobile hamburger -->
                <button
                    id="mobile-nav-toggle"
                    class="inline-flex items-center justify-center rounded-full border border-pink-400/60 bg-black/40 px-3 py-2 text-pink-100 shadow-[0_0_18px_rgba(244,114,182,0.35)] hover:bg-pink-500/20 md:hidden"
                    aria-label="Open navigation menu"
                >
                    <i class="fa-solid fa-bars text-sm"></i>
                </button>
            </nav>

            <!-- Mobile sidebar menu -->
            <div
                id="mobile-nav-overlay"
                class="fixed inset-0 z-30 bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300 md:hidden"
            >
                <div
                    id="mobile-nav"
                    class="absolute inset-y-0 right-0 w-64 max-w-[80%] bg-[#050108] border-l border-pink-200/20 shadow-[0_0_40px_rgba(0,0,0,0.9)] translate-x-full transition-transform duration-300 flex flex-col"
                >
                    <div class="flex items-center justify-between px-5 py-4 border-b border-pink-200/15">
                        <span class="text-xs uppercase tracking-[0.28em] text-pink-200/80">Menu</span>
                        <button id="mobile-nav-close" class="text-pink-200 hover:text-pink-100">
                            <i class="fa-solid fa-xmark text-lg"></i>
                        </button>
                    </div>
                    <nav class="flex-1 px-5 py-4 space-y-3 text-sm">
                        <a href="{{ route('home') }}" data-mobile-nav-link class="block text-pink-100/80 hover:text-pink-50">Home</a>
                        <a href="{{ route('about') }}" data-mobile-nav-link class="block text-pink-100/80 hover:text-pink-50">About</a>
                        <a href="{{ route('services') }}" data-mobile-nav-link class="block text-pink-100/80 hover:text-pink-50">Services</a>
                        <a href="{{ route('gallery') }}" data-mobile-nav-link class="block text-pink-100/80 hover:text-pink-50">Gallery</a>
                        <a href="{{ route('testimonials') }}" data-mobile-nav-link class="block text-pink-100/80 hover:text-pink-50">Testimonials</a>
                        <a href="{{ route('contact') }}" data-mobile-nav-link class="block text-pink-100/80 hover:text-pink-50">Contact</a>
                    </nav>
                    <div class="border-t border-pink-200/15 px-5 py-4">
                        <a
                            href="{{ route('contact') }}#booking-form"
                            data-mobile-nav-link
                            class="flex w-full items-center justify-center rounded-full bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 px-5 py-2 text-xs font-medium text-white shadow-[0_14px_32px_rgba(244,114,182,0.55)]"
                        >
                            Book Now
                        </a>
                    </div>
                    <div class="border-t border-pink-200/15 px-5 py-4">
                        <a
                            href="{{ route('contact') }}#booking-form"
                            data-mobile-nav-link
                            class="flex w-full items-center justify-center rounded-full bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 px-5 py-2 text-xs font-medium text-white shadow-[0_14px_32px_rgba(244,114,182,0.55)]"
                        >
                            Home Service Available
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="relative z-10">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="border-t border-pink-100/10 bg-black/60 py-6 text-[11px] text-pink-100/60">
            <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-3 px-6 sm:flex-row">
                <p>&copy; {{ date('Y') }} Finger To Toes Nail Studio. All rights reserved.</p>
                <div class="flex flex-wrap items-center gap-3">
                    <span class="text-pink-200/80">Open Everyday • 11:00 AM – 8:00 PM</span>
                    <span class="hidden h-1 w-1 rounded-full bg-pink-300 sm:inline-block"></span>
                    <span>Designed with love by <a href="ranklays.com" class="text-pink-200/80">Ranklays</a>
                    </span>
                </div>
            </div>
        </footer>
    </body>
</html>

