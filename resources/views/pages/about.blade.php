@extends('layouts.app')

@section('title', 'About ZyncWeb Solutions | Engineering Digital Excellence')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="section-pad zync-about-hero" style="position: relative; min-height: 70vh; display: flex; align-items: center; background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed; overflow: hidden; padding-top: 100px;">
    <!-- Dark Overlay for Readability -->
    <div style="position: absolute; inset: 0; background: rgba(11, 16, 38, 0.85);"></div>
    
    <!-- Background Layers -->
    <div class="hero-bg-system" style="position: absolute; inset: 0; pointer-events: none;">
        <!-- Dark Tech Gradient (Transparent) -->
        <div style="position: absolute; inset: 0; background: radial-gradient(circle at 70% 30%, rgba(26, 31, 53, 0.4), rgba(11, 16, 38, 0.6) 70%);"></div>
        <!-- Subtle Blue Glow -->
        <div style="position: absolute; top: -20%; right: -10%; width: 60%; height: 100%; background: radial-gradient(circle, rgba(37, 91, 169, 0.1), transparent 60%); filter: blur(80px);"></div>
        <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.1;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 2; text-align: center;">
        <h1 class="text-tech-heading fade-in" style="font-size: clamp(2.8rem, 5.5vw, 5rem); margin-bottom: 2rem; line-height: 1.1;">
            Engineering <span class="text-gradient-ai" style="background: linear-gradient(90deg, #fff, var(--accent-blue)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Digital Excellence</span> <br>
            With Strategy and Precision
        </h1>
        <p class="fade-in" style="max-width: 800px; margin: 0 auto; font-size: 1.25rem; color: var(--text-secondary); line-height: 1.7;">
            ZyncWeb Solutions is a performance-driven digital company focused on building scalable, secure, and future-ready platforms for modern enterprises.
        </p>
    </div>
</section>

<!-- ================= COMPANY OVERVIEW ================= -->
<section class="section-pad zync-overview" style="background: var(--bg-deep); padding: 6rem 0;">
    <div class="container">
        <div class="overview-content glass-panel glow-edge-subtle fade-in" style="padding: 4rem; border-radius: 24px; text-align: center; max-width: 1000px; margin: 0 auto; border: 1px solid rgba(255,255,255,0.05);">
            <h2 class="text-tech-heading" style="font-size: 2.5rem; margin-bottom: 2rem; color: #fff;">A Strategic Technology Partner</h2>
            <p style="font-size: 1.15rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 2rem;">
                At ZyncWeb Solutions, we combine modern engineering, experience design, and scalable infrastructure to deliver measurable digital outcomes. Our mission is to transform digital presence into strategic business advantage.
            </p>
        </div>
    </div>
</section>

<!-- ================= VISION & MISSION ================= -->
<section class="section-pad zync-vision-mission" style="background: var(--bg-deep); padding: 4rem 0 8rem; position: relative;">
     <div class="bg-digital-mesh" style="position: absolute; inset: 0; opacity: 0.1; pointer-events: none;"></div>
     
    <div class="container" style="position: relative; z-index: 2;">
        <div class="vision-mission-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 3rem;">
            
            <!-- Vision -->
            <div class="vm-card glass-panel hover-lift-3d fade-in" style="padding: 3rem; border-radius: 20px; border-left: 4px solid var(--accent-blue);">
                <div class="icon-box" style="margin-bottom: 1.5rem; font-size: 2rem; color: var(--accent-blue);">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-tech-heading" style="font-size: 1.8rem; margin-bottom: 1rem; color: #fff;">Our Vision</h3>
                <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6;">
                    To become a globally recognized digital infrastructure partner delivering enterprise-grade solutions built on performance and scalability.
                </p>
            </div>

            <!-- Mission -->
            <div class="vm-card glass-panel hover-lift-3d fade-in" style="padding: 3rem; border-radius: 20px; border-left: 4px solid var(--accent-teal); transition-delay: 0.1s;">
                 <div class="icon-box" style="margin-bottom: 1.5rem; font-size: 2rem; color: var(--accent-teal);">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-tech-heading" style="font-size: 1.8rem; margin-bottom: 1rem; color: #fff;">Our Mission</h3>
                <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6;">
                    To design, develop, and optimize digital platforms that empower organizations with clarity, efficiency, and growth.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ================= CORE VALUES ================= -->
<section class="section-pad zync-values" style="background: var(--bg-deep); padding: 4rem 0;">
    <div class="container">
        <h2 class="text-center text-tech-heading fade-in" style="margin-bottom: 4rem;">Core Values</h2>
        
        <div class="values-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 2rem;">
            @foreach(['Strategic Thinking' => 'fa-chess', 'Performance First' => 'fa-tachometer-alt', 'Scalable Architecture' => 'fa-layer-group', 'Long-Term Partners' => 'fa-handshake'] as $value => $icon)
            <div class="value-card glass-panel-light hover-lift-3d fade-in" style="padding: 2.5rem 1.5rem; border-radius: 16px; text-align: center; border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease;">
                <div class="icon-3d" style="font-size: 2.5rem; color: var(--accent-blue); margin-bottom: 1.5rem; text-shadow: 0 0 20px rgba(37, 91, 169, 0.4);">
                    <i class="fas {{ $icon }}"></i>
                </div>
                <h4 style="font-family: 'Outfit', sans-serif; color: #fff; font-size: 1.1rem; font-weight: 600;">{{ $value }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="section-pad zync-why" style="background: var(--bg-deep); padding: 6rem 0; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <div class="glass-panel glow-edge-subtle fade-in" style="padding: 4rem; border-radius: 30px; display: flex; flex-direction: column; align-items: center; border: 1px solid rgba(255,255,255,0.05);">
            <h2 class="text-tech-heading" style="margin-bottom: 3rem; text-align: center;">Why Organizations Choose ZyncWeb</h2>
            
            <ul class="why-list" style="list-style: none; padding: 0; display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; width: 100%;">
                @foreach([
                    'Enterprise-level architecture standards',
                    'Performance-optimized development',
                    'Transparent communication',
                    'Secure and scalable infrastructure',
                    'Modern UI/UX systems'
                ] as $point)
                <li style="display: flex; align-items: center; gap: 1rem; color: var(--text-secondary); font-size: 1.1rem;">
                    <i class="fas fa-check-circle" style="color: var(--accent-teal);"></i>
                    {{ $point }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="section-pad zync-cta-about" style="background: var(--bg-deep); border-top: 1px solid rgba(255,255,255,0.05); padding: 8rem 0; position: relative; overflow: hidden;">
    <div class="bg-digital-mesh" style="position: absolute; inset: 0; opacity: 0.15; pointer-events: none;"></div>
    <!-- Blue Glow -->
    <div style="position: absolute; top: -50%; right: 0; width: 100%; height: 100%; background: radial-gradient(circle, rgba(37, 91, 169, 0.15), transparent 70%); filter: blur(60px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 2; text-align: center;">
         <div class="glass-panel-heavy fade-in hover-lift-3d" style="padding: 5rem 3rem; border-radius: 40px; border: 1px solid rgba(37, 91, 169, 0.3); max-width: 900px; margin: 0 auto;">
            <h2 class="text-tech-heading" style="color: #fff; font-size: clamp(2.2rem, 4vw, 3.5rem); margin-bottom: 2rem;">
                Let’s Build a <span style="color: var(--accent-blue);">Future-Ready</span> Digital Platform
            </h2>
             <a href="{{ route('contact') }}" class="btn-tech-primary" style="background: var(--accent-blue); color: #fff; padding: 1.2rem 3rem; border: none; font-size: 1.1rem;">
                Schedule Consultation
            </a>
         </div>
    </div>
</section>

@endsection
