@extends('layouts.app')

@section('title', 'About • Finger To Toes')

@section('content')
    <section class="mx-auto max-w-5xl px-6 pt-16 pb-20">
        <div class="max-w-3xl" data-aos="fade-right">
            <p class="text-xs uppercase tracking-[0.28em] text-pink-200/80">About the studio</p>
            <h1 class="mt-3 text-3xl font-semibold sm:text-4xl">Where nail care feels like a little escape.</h1>
            <p class="mt-4 text-sm text-pink-100/75">
                Finger To Toes is a cosy, appointment‑only nail studio created for people who love beautiful details.
                We specialise in clean, precise work, modern designs and products that are kind to your natural nails.
            </p>
            <p class="mt-3 text-sm text-pink-100/75">
                From quick tidy‑ups to full glam sets, every appointment is unhurried and personalised. We chat through
                your lifestyle, inspo photos and comfort level before we start, so your nails feel like a natural
                extension of your style.
            </p>
        </div>

        <div class="mt-10 grid gap-6 text-sm text-pink-100/75 md:grid-cols-3">
            <div class="rounded-3xl border border-pink-200/15 bg-white/5 p-5 backdrop-blur-xl" data-aos="fade-up">
                <p class="text-xs uppercase tracking-[0.22em] text-pink-200/80">Philosophy</p>
                <p class="mt-2">
                    Healthy nails first. We prep gently, respect your natural nail, and choose products that prioritise
                    comfort and longevity over harsh shortcuts.
                </p>
            </div>
            <div class="rounded-3xl border border-pink-300/35 bg-gradient-to-b from-pink-500/25 via-fuchsia-600/20 to-black p-5 backdrop-blur-xl" data-aos="fade-up" data-aos-delay="80">
                <p class="text-xs uppercase tracking-[0.22em] text-pink-100/85">Experience</p>
                <p class="mt-2 text-pink-50/90">
                    Scented soaks, soft music, curated colour palettes and a calm, one‑on‑one setting that lets you switch off
                    while we work on the details.
                </p>
            </div>
            <div class="rounded-3xl border border-pink-200/15 bg-white/5 p-5 backdrop-blur-xl" data-aos="fade-up" data-aos-delay="140">
                <p class="text-xs uppercase tracking-[0.22em] text-pink-200/80">Hygiene</p>
                <p class="mt-2">
                    Tools are disinfected and sterilised between every client, and single‑use files and buffers are used where possible.
                </p>
            </div>
        </div>
    </section>
@endsection

