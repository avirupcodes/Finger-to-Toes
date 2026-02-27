<section id="booking" class="mx-auto max-w-6xl px-6 pb-20">
    <div
        class="relative overflow-hidden rounded-[32px] border border-pink-200/15 bg-gradient-to-r from-black/80 via-[#160212] to-black p-7 shadow-[0_25px_60px_rgba(0,0,0,0.85)] backdrop-blur-xl md:p-9"
        data-aos="fade-up"
    >
        <div class="pointer-events-none absolute -right-10 top-[-4rem] h-60 w-60 rounded-full bg-pink-500/40 blur-[90px]"></div>
        <div class="pointer-events-none absolute -left-10 bottom-[-4rem] h-60 w-60 rounded-full bg-fuchsia-500/30 blur-[90px]"></div>

        <div class="relative flex flex-col gap-10 md:flex-row md:items-center">
            <div class="flex-1 space-y-3">
                <p class="text-xs uppercase tracking-[0.28em] text-pink-200/80">Book an appointment</p>
                <h2 class="text-2xl font-semibold sm:text-3xl">Ready for your next nail moment?</h2>
                <p class="max-w-md text-sm text-pink-100/75">
                    Tell us the vibe, length, and colour you love. We’ll confirm your slot via WhatsApp and help you
                    choose a look if you’re not sure yet.
                </p>
                <div class="mt-3 flex flex-wrap gap-2 text-[11px] text-pink-100/70">
                    <span class="rounded-full bg-white/5 px-3 py-1">Open Everyday</span>
                    <span class="rounded-full bg-white/5 px-3 py-1">Free consult before every set</span>
                    <span class="rounded-full bg-white/5 px-3 py-1">Hygienic • Sanitised • Relaxing</span>
                    <span class="rounded-full bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 px-7 py-2.5 text-xs font-semibold text-white shadow-[0_14px_40px_rgba(244,114,182,0.7)] px-3 py-1">Home Service Available</span>
                </div>
            </div>

            <div class="flex-1" id="booking-form">
                <form class="grid gap-3 text-xs text-pink-100/80">
                    <div class="grid gap-3 sm:grid-cols-2">
                        <label class="space-y-1">
                            <span>Full name</span>
                            <input
                                type="text"
                                placeholder="Your name"
                                class="w-full rounded-full border border-pink-200/25 bg-black/40 px-4 py-2.5 text-xs text-pink-50 placeholder:text-pink-200/40 outline-none focus:border-pink-300 focus:ring-1 focus:ring-pink-400/60"
                            >
                        </label>
                        <label class="space-y-1">
                            <span>WhatsApp number</span>
                            <input
                                type="tel"
                                placeholder="+91 ..."
                                class="w-full rounded-full border border-pink-200/25 bg-black/40 px-4 py-2.5 text-xs text-pink-50 placeholder:text-pink-200/40 outline-none focus:border-pink-300 focus:ring-1 focus:ring-pink-400/60"
                            >
                        </label>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-2">
                        <label class="space-y-1">
                            <span>Preferred date</span>
                            <input
                                type="date"
                                class="w-full rounded-full border border-pink-200/25 bg-black/40 px-4 py-2.5 text-xs text-pink-50 outline-none focus:border-pink-300 focus:ring-1 focus:ring-pink-400/60"
                            >
                        </label>
                        <label class="space-y-1">
                            <span>Service</span>
                            <select
                                class="w-full rounded-full border border-pink-200/25 bg-black/40 px-4 py-2.5 text-xs text-pink-50 outline-none focus:border-pink-300 focus:ring-1 focus:ring-pink-400/60"
                            >
                                <option class="bg-black">Manicure</option>
                                <option class="bg-black">Nail Art / Extensions</option>
                                <option class="bg-black">Pedicure</option>
                                <option class="bg-black">Combo (Mani + Pedi)</option>
                            </select>
                        </label>
                    </div>

                    <label class="space-y-1">
                        <span>Inspo or special notes</span>
                        <textarea
                            rows="3"
                            placeholder="Share colours, mood, or a link to inspo nails you love."
                            class="w-full rounded-2xl border border-pink-200/25 bg-black/40 px-4 py-2.5 text-xs text-pink-50 placeholder:text-pink-200/40 outline-none focus:border-pink-300 focus:ring-1 focus:ring-pink-400/60"
                        ></textarea>
                    </label>

                    <div class="mt-1 flex flex-wrap items-center justify-between gap-3">
                        <button
                            type="button"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-pink-500 via-fuchsia-500 to-rose-400 px-7 py-2.5 text-xs font-semibold text-white shadow-[0_14px_40px_rgba(244,114,182,0.7)] hover:brightness-110 transition-all"
                        >
                            Send request on WhatsApp
                        </button>
                        <p class="text-[10px] text-pink-100/60">
                            We’ll reply within <span class="font-medium text-pink-100">30 minutes</span> during studio hours.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

