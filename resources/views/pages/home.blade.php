@extends('layouts.app')

@section('title', 'ZyncWeb Solutions | Digital Transformation')



@section('content')
@include('components.hero')
@include('components.stats')
@include('components.about')
@include('components.services')
@include('components.projects')
@include('components.testimonials')
@include('components.cta')
@endsection

@section('scripts')
<script>
    // Parallax for project images
    document.addEventListener('DOMContentLoaded', () => {
        gsap.utils.toArray('.scroll-parallax').forEach((img) => {
            gsap.to(img, {
                yPercent: 20,
                ease: "none",
                scrollTrigger: {
                    trigger: img.parentElement,
                    start: "top bottom", // when top of section hits bottom of viewport
                    end: "bottom top",
                    scrub: true
                }
            });
        });
    });
</script>
@endsection
