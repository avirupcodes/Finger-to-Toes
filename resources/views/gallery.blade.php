@extends('layouts.app')

@section('title', 'Gallery • Finger To Toes')

@section('content')
    @php
        // Use all images from the public/img-gallery folder for the full gallery page
        $photoGalleryImages = glob(public_path('img-gallery/*'));
        $videoGalleryFiles = array_merge(
            glob(public_path('video-gallery/*.mp4')) ?: [],
            glob(public_path('video-gallery/*.webm')) ?: []
        );
    @endphp

    <section class="mx-auto max-w-6xl px-6 pb-20 pt-10">
        <div class="mb-8 text-center">
            <p class="text-xs uppercase tracking-[0.28em] text-pink-200/80">Gallery</p>
            <h1 class="mt-2 text-3xl font-semibold sm:text-4xl">Every set tells a story</h1>
            <p class="mt-3 text-sm text-pink-100/70 max-w-2xl mx-auto">
                Browse our full collection of nail art – from minimal milky manis to bold, chrome‑heavy looks.
                Save your favourites and bring them to your appointment.
            </p>
        </div>

        <!-- Toggle buttons -->
        <div class="mb-6 flex items-center justify-center gap-3 text-xs">
            <button
                type="button"
                class="gallery-tab inline-flex items-center gap-2 rounded-full border border-pink-300/70 bg-pink-500/20 px-4 py-2 font-medium text-pink-50 shadow-[0_0_18px_rgba(244,114,182,0.45)] data-[active=false]:border-pink-200/20 data-[active=false]:bg-black/40 data-[active=false]:text-pink-100/70"
                data-gallery-tab="photos"
                data-active="true"
            >
                <i class="fa-solid fa-image text-xs"></i>
                Photo Gallery
            </button>
            <button
                type="button"
                class="gallery-tab inline-flex items-center gap-2 rounded-full border border-pink-200/20 bg-black/40 px-4 py-2 font-medium text-pink-100/70 hover:border-pink-300/60 hover:text-pink-50"
                data-gallery-tab="videos"
                data-active="false"
            >
                <i class="fa-solid fa-play text-xs"></i>
                Video Gallery
            </button>
        </div>

        <!-- Photo gallery -->
        <div
            id="photo-gallery-panel"
            data-gallery-panel="photos"
            class="rounded-3xl border border-pink-200/10 bg-gradient-to-b from-zinc-950/80 via-slate-950/80 to-black/90 p-4 sm:p-6"
        >
            <div class="grid gap-3 sm:gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($photoGalleryImages as $imagePath)
                    <div class="group relative overflow-hidden rounded-2xl bg-zinc-900/60">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img
                                src="{{ asset('img-gallery/' . basename($imagePath)) }}"
                                alt="Nail art gallery image"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105 group-hover:brightness-110"
                                loading="lazy"
                            >
                        </div>

                        <div class="pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition bg-gradient-to-t from-black/60 via-black/0 to-transparent"></div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Video gallery -->
        <div
            id="video-gallery-panel"
            data-gallery-panel="videos"
            class="mt-4 rounded-3xl border border-pink-200/10 bg-gradient-to-b from-zinc-950/80 via-slate-950/80 to-black/90 p-4 sm:p-6 hidden"
        >
            @if (count($videoGalleryFiles))
                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($videoGalleryFiles as $videoPath)
                        <div class="overflow-hidden rounded-2xl bg-black/60">
                            <div class="aspect-[9/16]">
                                <video
                                    class="h-full w-full object-cover"
                                    controls
                                    preload="metadata"
                                >
                                    <source src="{{ asset('video-gallery/' . basename($videoPath)) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-xs text-pink-100/70">
                    Video reviews coming soon. Follow us on Instagram to see the latest looks in motion.
                </p>
            @endif
        </div>
    </section>
@endsection

