@extends('layouts.app')

@section('title', 'Testimonials • Finger To Toes')

@section('content')
    <section class="mx-auto max-w-5xl px-6 pt-16 pb-20">
        <div class="max-w-3xl" data-aos="fade-right">
            <p class="text-xs uppercase tracking-[0.28em] text-pink-200/80">Testimonials</p>
            <h1 class="mt-3 text-3xl font-semibold sm:text-4xl">What our clients are saying.</h1>
            <p class="mt-4 text-sm text-pink-100/75">
                Every set is a collaboration. Here are a few words from clients who trusted us with their hands and feet.
            </p>
        </div>

        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <article class="rounded-3xl border border-pink-200/15 bg-white/5 p-6 backdrop-blur-xl" data-aos="fade-up">
                <p class="text-sm text-pink-50/90">
                    “The attention to detail is insane. My cuticles have never looked this neat and the gel lasts
                    over three weeks without lifting.”
                </p>
                <p class="mt-4 text-xs text-pink-200/80">— Aishwarya, soft‑gel extensions</p>
            </article>

            <article class="rounded-3xl border border-pink-300/35 bg-gradient-to-b from-pink-500/25 via-fuchsia-600/20 to-black p-6 backdrop-blur-xl" data-aos="fade-up" data-aos-delay="80">
                <p class="text-sm text-pink-50/95">
                    “I just show a moodboard and somehow they translate it perfectly. The chrome aura set we did for my
                    birthday was a total hit.”
                </p>
                <p class="mt-4 text-xs text-pink-100/85">— Rhea, birthday nails</p>
            </article>

            <article class="rounded-3xl border border-pink-200/15 bg-white/5 p-6 backdrop-blur-xl" data-aos="fade-up" data-aos-delay="120">
                <p class="text-sm text-pink-50/90">
                    “The pedicure was so relaxing, and the studio is spotless. I love that everything is sanitised in front of you.”
                </p>
                <p class="mt-4 text-xs text-pink-200/80">— Meera, spa pedicure</p>
            </article>

            <article class="rounded-3xl border border-pink-200/15 bg-white/5 p-6 backdrop-blur-xl" data-aos="fade-up" data-aos-delay="180">
                <p class="text-sm text-pink-50/90">
                    “Perfect for minimal nails. We did a milky nude with tiny chrome accents and it matched all my outfits.”
                </p>
                <p class="mt-4 text-xs text-pink-200/80">— Nidhi, office‑friendly mani</p>
            </article>
        </div>
    </section>
@endsection

