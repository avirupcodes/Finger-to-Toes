@extends('layouts.app')

@section('title', 'Finger To Toes • Nail Studio')

@section('page-background')
    <div class="absolute inset-x-0 top-0 h-screen -z-10">
        <div
            class="h-full w-full bg-cover bg-center"
            style="background-image: url('{{ asset('img-gallery/2025-05-13.webp') }}');"
        ></div>
        <div class="absolute inset-0 bg-black/60"></div>
    </div>
@endsection

@section('content')
    @php
        // Get all images from the public/img-gallery folder and limit to 6 for the home page
        $allGalleryImages = glob(public_path('img-gallery/*'));
        $homeGalleryImages = array_slice($allGalleryImages, 0, 6);
    @endphp

    @include('sections.hero')
    @include('sections.why-choose')
    @include('sections.about-studio')
    @include('sections.services')
    @include('sections.gallery', ['images' => $homeGalleryImages])
    @include('sections.contact-details')
    @include('sections.booking')
@endsection

