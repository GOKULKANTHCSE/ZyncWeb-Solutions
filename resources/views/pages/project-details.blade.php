@extends('layouts.app')

@section('title', $project['title'] . ' | ZyncWeb Solutions')

@section('styles')
<style>
    /* Hero Section */
    .project-detail-hero {
        background-color: #231F20;
        padding: 12rem 0 0;
        color: white;
        position: relative;
        overflow: hidden;
    }
    .hero-container {
        padding-bottom: 5rem;
    }
    .project-detail-hero h1 {
        font-size: 4rem;
        font-weight: 800;
        margin-bottom: 1rem;
        line-height: 1.1;
    }
    .project-detail-hero .category {
        font-size: 1rem;
        font-weight: 700;
        color: var(--accent-blue);
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 2rem;
        display: block;
    }
    .hero-banner-box {
        position: relative;
        border-radius: 32px 32px 0 0;
        overflow: hidden;
        box-shadow: 0 -20px 60px rgba(0,0,0,0.3);
        max-width: 1200px;
        margin: 0 auto;
    }
    .hero-banner-box img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 1s ease;
    }
    .project-detail-hero:hover .hero-banner-box img {
        transform: scale(1.03);
    }

    /* Content Sections */
    .project-content-section {
        padding: 8rem 0;
    }
    .section-label {
        color: var(--accent-blue);
        font-weight: 800;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        margin-bottom: 1.5rem;
        display: block;
    }
    .project-content-section h2 {
        font-size: 2.8rem;
        margin-bottom: 2.5rem;
        color: #231F20;
    }
    .project-content-section p {
        font-size: 1.25rem;
        line-height: 1.8;
        color: var(--text-main);
    }

    /* Alternating backgrounds */
    .bg-light {
        background-color: #f8fafd;
    }

    /* CTA Section */
    .cta-project-detail {
        background-color: #231F20;
        padding: 10rem 0;
        text-align: center;
        color: white;
    }
    .cta-project-detail h2 {
        font-size: 3.5rem;
        margin-bottom: 2rem;
        color: white;
    }

    @media (max-width: 992px) {
        .project-detail-hero h1 { font-size: 3rem; }
        .project-content-section h2 { font-size: 2.2rem; }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section class="project-detail-hero">
    <div class="container hero-container">
        <div class="fade-in">
            <span class="category">{{ $project['category'] }}</span>
            <h1>{{ $project['title'] }}</h1>
        </div>
    </div>
    <div class="hero-banner-box fade-in" style="transition-delay: 0.2s;">
        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
    </div>
</section>

<!-- Overview Section -->
<section class="project-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <span class="section-label">Overview</span>
                <h2>The Challenge</h2>
                <p>{{ $project['overview'] }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section -->
<section class="project-content-section bg-light">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-8 fade-in">
                <span class="section-label">Solution</span>
                <h2>How We Built It</h2>
                <p>{{ $project['solution'] }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Result Section -->
<section class="project-content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 fade-in">
                <span class="section-label">Impact</span>
                <h2>The Result</h2>
                <p>{{ $project['results'] }}</p>
            </div>
        </div>
    </div>
</section>

@endsection
