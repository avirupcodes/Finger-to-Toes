<section id="gallery" class="mx-auto max-w-6xl px-6 pb-16">
    <div class="grid gap-10 md:grid-cols-2 md:items-center">
        <div data-aos="fade-right">
            <p class="text-xs uppercase tracking-[0.28em] text-pink-200/80">Gallery</p>
            <h2 class="mt-2 text-2xl font-semibold sm:text-3xl">A small peek at our work.</h2>
            <p class="mt-3 text-sm text-pink-100/70">
                Soft nudes, milky whites, chrome auras, velvet cat‑eye, glazed doughnut finishes,
                and everything in between – our artists love translating your mood into nails.
            </p>
            <p class="mt-3 text-xs text-pink-100/70">
                Follow our latest sets on
                <span class="font-medium text-pink-200">@fingertotoes.nails</span> on Instagram.
            </p>
        </div>

        <div class="grid grid-cols-3 gap-3" data-aos="fade-left">
            @foreach (($images ?? []) as $imagePath)
                <div class="relative overflow-hidden rounded-3xl border border-pink-200/10 bg-gradient-to-br from-zinc-900 via-slate-900 to-black p-3">
                    <div class="aspect-[3/4] overflow-hidden rounded-2xl">
                        <img
                            src="{{ asset('img-gallery/' . basename($imagePath)) }}"
                            alt="Nail art gallery image"
                            class="h-full w-full object-cover"
                            loading="lazy"
                        >
                    </div>
                    <div class="pointer-events-none absolute inset-0 rounded-3xl bg-[radial-gradient(circle_at_top,_rgba(248,250,252,0.16),transparent_55%)]"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>

