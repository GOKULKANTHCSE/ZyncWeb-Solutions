@extends('layouts.app')

@section('title', $service['title'] . ' | ZyncWeb Solutions')

@section('content')
<!-- Hero Section: Apple-style 3D -->
<section class="section-pad zync-3d-hero" style="min-height: 85vh; align-items: center; position: relative; overflow: hidden;">
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.15; pointer-events: none;"></div>
    <!-- Ambient Orbs -->
    <div class="shape-1" style="position: absolute; top: -10%; right: -10%; width: 600px; height: 600px; background: radial-gradient(circle, var(--accent-blue), transparent 60%); opacity: 0.08; filter: blur(80px);"></div>
    <div class="shape-2" style="position: absolute; bottom: 10%; left: -10%; width: 500px; height: 500px; background: radial-gradient(circle, var(--accent-teal), transparent 60%); opacity: 0.08; filter: blur(80px);"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-6 fade-in">
                <span class="text-tech-mono" style="display: block; margin-bottom: 1.5rem; color: var(--accent-teal); letter-spacing: 2px;">ENTERPRISE GRADE</span>
                <h1 class="text-tech-heading" style="font-size: clamp(3.5rem, 6vw, 5.5rem); line-height: 1.05; margin-bottom: 2rem;">
                    {{ $service['title'] }}
                </h1>
                <p style="font-size: 1.4rem; color: var(--text-muted); line-height: 1.6; max-width: 500px;">
                    Custom-built solutions engineered for speed, scalability, and impact.
                </p>
            </div>
            <div class="col-lg-6 hide-on-mobile fade-in" style="transition-delay: 0.2s;">
                <div class="floating-mockup-container" style="perspective: 1000px; transform-style: preserve-3d;">
                    <div class="glass-panel" style="border-radius: 24px; padding: 1rem; transform: rotateY(-10deg) rotateX(5deg); box-shadow: 20px 20px 60px rgba(0,0,0,0.2); animation: float-3d 6s ease-in-out infinite;">
                        <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" style="width: 100%; border-radius: 16px; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section: Big Typography -->
<section class="section-pad" style="background: #0b0b0b; position: relative;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center fade-in">
                <h2 class="text-tech-heading" style="font-size: clamp(2.5rem, 4vw, 3.5rem); margin-bottom: 3rem; color: #fff;">
                    Designed for <span class="text-gradient-ai">The Future</span>
                </h2>
                <p style="font-size: 1.5rem; line-height: 1.6; color: rgba(255,255,255,0.8); font-weight: 300;">
                    {!! nl2br(e($service['long_description'])) !!}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section: Bento Grid -->
<section class="section-pad" style="background: var(--bg-light); padding-top: 6rem;">
    <div class="container">
        <div class="text-center fade-in" style="margin-bottom: 4rem;">
            <span class="text-tech-mono" style="color: var(--accent-blue);">CAPABILITIES</span>
            <h2 class="text-tech-heading" style="font-size: 3rem; margin-top: 1rem; color: var(--text-main);">Power In Every Pixel</h2>
        </div>
        
        <div class="bento-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @foreach($service['benefits'] as $index => $benefit)
                <div class="glass-panel hover-lift-3d fade-in" style="padding: 2.5rem; border-radius: 24px; display: flex; flex-direction: column; justify-content: space-between; min-height: 280px; transition-delay: {{ $index * 0.1 }}s;">
                    <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; color: var(--accent-teal); margin-bottom: 2rem;">
                        <i class="fas fa-layer-group tech-glow-text"></i>
                    </div>
                    <div>
                        <h4 class="text-tech-heading" style="font-size: 1.5rem; margin-bottom: 1rem; color: var(--text-main);">{{ $benefit }}</h4>
                        <p style="color: var(--text-muted); font-size: 1rem;">Engineered to define the standard of excellence in digital infrastructure.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Process Section: 3D Visualization (Simplified) -->
<section class="section-pad" style="background: #0b0b0b; padding: 6rem 0; position: relative; overflow: hidden;">
    <div class="bg-digital-mesh" style="position: absolute; inset: 0; opacity: 0.1; pointer-events: none;"></div>
    <div class="container">
        <div class="row align-items-center">
             <div class="col-lg-5 fade-in">
                 <h2 class="text-tech-heading" style="color: white; font-size: 3rem; margin-bottom: 2rem;">Seamless <br>Execution</h2>
                 <p style="color: rgba(255,255,255,0.7); font-size: 1.2rem; margin-bottom: 3rem;">From concept to deployment, our process is designed for transparency and velocity.</p>
                 <a href="{{ route('contact') }}" class="btn btn-primary btn-magnetic hover-lift-3d">
                    Start Your Project <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                 </a>
             </div>
             <div class="col-lg-7 fade-in">
                 <div class="process-3d-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                    <div class="glass-panel-light" style="padding: 2rem; border-radius: 20px; text-align: center;">
                        <div class="text-gradient-ai" style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">01</div>
                        <h4 style="color: white;">Discovery</h4>
                    </div>
                    <div class="glass-panel-light" style="padding: 2rem; border-radius: 20px; text-align: center; margin-top: 3rem;">
                        <div class="text-gradient-ai" style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">02</div>
                        <h4 style="color: white;">Design</h4>
                    </div>
                    <div class="glass-panel-light" style="padding: 2rem; border-radius: 20px; text-align: center;">
                        <div class="text-gradient-ai" style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">03</div>
                        <h4 style="color: white;">Build</h4>
                    </div>
                    <div class="glass-panel-light" style="padding: 2rem; border-radius: 20px; text-align: center; margin-top: 3rem;">
                        <div class="text-gradient-ai" style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">04</div>
                        <h4 style="color: white;">Launch</h4>
                    </div>
                 </div>
             </div>
        </div>
    </div>
</section>

<!-- Footer Note -->
<div class="container text-center" style="padding: 4rem 0;">
    <p style="color: var(--text-muted); font-style: italic;">Elevating brands through technology.</p>
</div>

<style>
@keyframes float-3d {
    0%, 100% { transform: rotateY(-10deg) rotateX(5deg) translateY(0); }
    50% { transform: rotateY(-10deg) rotateX(5deg) translateY(-20px); }
}
@media (max-width: 992px) {
    .process-3d-grid { margin-top: 3rem; }
    .process-3d-grid > div { margin-top: 0 !important; }
}
</style>
@endsection
