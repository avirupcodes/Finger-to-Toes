<section
    id="home"
    class="mx-auto flex max-w-6xl flex-col gap-14 px-6 pb-20 pt-6 md:flex-row md:items-center md:pb-28 md:pt-10"
>
    <!-- Left -->
    <div class="flex-1 space-y-8" data-aos="fade-right">
        <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <p class="inline-flex items-center gap-2 rounded-full border border-pink-400/40 bg-black/40 px-4 py-1 text-[11px] uppercase tracking-[0.25em] text-pink-100/80">
                <span class="h-1.5 w-1.5 rounded-full bg-pink-400 animate-pulse"></span>
                Luxury Nail Studio • Since 2024
            </p>
            <a
                href="{{ route('contact') }}#booking-form"
                class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 px-7 py-2.5 text-xs font-semibold text-white shadow-[0_14px_40px_rgba(244,114,182,0.7)]"
            >
                Home Service Available
            </a>
        </div>

        <div class="space-y-4">
            <h1 class="text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">
                <span class="text-pink-300">Charming nails</span><br />
                from finger to toes.
            </h1>
            <p class="max-w-xl text-sm text-pink-100/70 sm:text-base">
                Finger To Toes is a boutique nail studio where modern artistry meets gentle self‑care.
                From glossy classics to dreamy chrome, we design looks that turn everyday moments into a little celebration.
            </p>
        </div>

        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
            <a
                href="{{ route('contact') }}#booking-form"
                class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 px-7 py-3 text-sm font-medium text-white shadow-[0_18px_45px_rgba(244,114,182,0.55)] hover:brightness-110 transition-all"
                data-aos="zoom-in"
                data-aos-delay="150"
            >
                Reserve Your Seat
                <span class="inline-flex h-5 w-5 items-center justify-center rounded-full bg-white/15 text-[10px]">
                    →
                </span>
            </a>
            <a
                href="{{ route('services') }}"
                class="inline-flex items-center justify-center gap-2 rounded-full border border-pink-300/35 bg-black/30 px-5 py-3 text-xs font-medium text-pink-100 hover:bg-white/5 transition-colors"
                data-aos="fade-up"
                data-aos-delay="220"
            >
                View Style Menu
            </a>
        </div>

        <div class="flex flex-wrap items-center gap-6 pt-3 text-xs text-pink-100/70">
            <div class="flex items-center gap-3" data-aos="fade-up" data-aos-delay="260">
                <div class="flex -space-x-2">
                    <span class="h-7 w-7 rounded-full border border-pink-200/40 bg-pink-300/80"></span>
                    <span class="h-7 w-7 rounded-full border border-pink-200/40 bg-fuchsia-400/80"></span>
                    <span class="h-7 w-7 rounded-full border border-pink-200/40 bg-rose-400/80"></span>
                </div>
                <p><span class="font-semibold text-pink-50">400+</span> happy clients this year</p>
            </div>
            <div class="flex items-center gap-3" data-aos="fade-up" data-aos-delay="320">
                <div class="flex items-center gap-1">
                    @for ($i = 0; $i < 5; $i++)
                        <span class="h-3 w-3 text-pink-300">★</span>
                    @endfor
                </div>
                <p>4.9 / 5 average rating</p>
            </div>
        </div>
    </div>

    <!-- Right: card with hand & glassmorphism -->
    <div class="relative mt-4 flex-1 md:mt-0" data-aos="fade-left">
        <div class="relative mx-auto h-[360px] max-w-xs rounded-[32px] border border-pink-200/10 bg-white/5 p-[1px] shadow-[0_25px_60px_rgba(0,0,0,0.75)] backdrop-blur-xl sm:max-w-sm sm:h-[420px]">
            <div class="relative h-full w-full overflow-hidden rounded-[30px] bg-gradient-to-b from-black/80 via-[#1a0418] to-black">
                <!-- floating glow -->
                <div class="pointer-events-none absolute -top-16 left-1/2 h-40 w-40 -translate-x-1/2 rounded-full bg-pink-400/60 blur-[80px]"></div>

                <!-- mock photo area -->
                <div class="relative flex h-1/2 items-center justify-center">
                    <div class="h-40 w-40 rotate-6 rounded-[28px] bg-gradient-to-tr from-gray-900 via-slate-900 to-zinc-900 shadow-[0_18px_45px_rgba(0,0,0,0.85)]">
                        <div class="flex h-full flex-col justify-between p-4">
                            <div class="flex items-center justify-between text-[10px] text-pink-50/70">
                                <span class="uppercase tracking-[0.26em]">Signature Set</span>
                                <span class="rounded-full bg-pink-500/20 px-2 py-0.5 text-[9px] text-pink-100">
                                    New
                                </span>
                            </div>
                            <div class="space-y-1">
                                <p class="text-xs text-zinc-200/90">Chrome Aura Tips</p>
                                <p class="text-[10px] text-zinc-400">
                                    Soft-gel extensions • Mirror chrome • Cuticle care included
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- details -->
                <div class="relative flex h-1/2 flex-col justify-between px-5 pb-5 pt-4 text-xs">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-[11px] uppercase tracking-[0.24em] text-pink-200/80">
                                Today’s Highlights
                            </span>
                            <span class="rounded-full bg-pink-500/20 px-3 py-1 text-[10px] text-pink-100">
                                Walk‑ins welcome
                            </span>
                        </div>
                        <div class="grid grid-cols-3 gap-2 text-[11px]">
                            <div class="rounded-2xl bg-white/5 p-3">
                                <p class="mb-1 text-[9px] uppercase tracking-[0.18em] text-pink-200/80">Classic</p>
                                <p class="text-sm font-semibold text-pink-50">Gel Polish</p>
                                <p class="mt-1 text-[10px] text-pink-100/70">Neat, glossy, timeless.</p>
                            </div>
                            <div class="rounded-2xl bg-white/8 p-3 ring-1 ring-pink-400/30">
                                <p class="mb-1 text-[9px] uppercase tracking-[0.18em] text-pink-200/80">Artistry</p>
                                <p class="text-sm font-semibold text-pink-50">Nail Art</p>
                                <p class="mt-1 text-[10px] text-pink-100/70">From minimal to bold.</p>
                            </div>
                            <div class="rounded-2xl bg-white/5 p-3">
                                <p class="mb-1 text-[9px] uppercase tracking-[0.18em] text-pink-200/80">Spa</p>
                                <p class="text-sm font-semibold text-pink-50">Pedi Glow</p>
                                <p class="mt-1 text-[10px] text-pink-100/70">Soft, pampered toes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-3 text-[11px] text-pink-100/70">
                        <div class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <p>Next availability <span class="font-medium text-pink-50">Today, 4:30 PM</span></p>
                        </div>
                        <span>Tap to book</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

