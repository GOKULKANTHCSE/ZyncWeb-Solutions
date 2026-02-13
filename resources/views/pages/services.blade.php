@extends('layouts.app')

@section('title', 'Our Services | ZyncWeb Solutions')

@section('content')
<!-- Hero Section: Minimal 3D -->
<section class="section-pad zync-3d-hero" style="min-height: 60vh; align-items: center; justify-content: center; text-align: center; position: relative; background: url('https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed; overflow: hidden;">
    <!-- Dark Overlay -->
    <div style="position: absolute; inset: 0; background: rgba(11, 16, 38, 0.6);"></div>
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.2; pointer-events: none;"></div>
    <!-- Floating Shapes -->
    <div class="shape-1" style="position: absolute; top: 10%; left: 10%; width: 100px; height: 100px; background: radial-gradient(circle, var(--accent-teal), transparent); opacity: 0.1; filter: blur(40px);"></div>
    <div class="shape-2" style="position: absolute; bottom: 20%; right: 10%; width: 150px; height: 150px; background: radial-gradient(circle, var(--accent-blue), transparent); opacity: 0.1; filter: blur(50px);"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <span class="text-tech-mono fade-in" style="display: block; margin-bottom: 1.5rem; text-transform: uppercase;">Enterprise Infrastructure</span>
        <h1 class="text-tech-heading fade-in" style="font-size: clamp(3rem, 5vw, 4.5rem); margin-bottom: 1.5rem;">
            Comprehensive <span class="text-gradient-ai">Digital Capabilities</span>
        </h1>
        <p class="fade-in" style="font-size: 1.25rem; max-width: 700px; margin: 0 auto; color: var(--text-muted); line-height: 1.6;">
            Structured digital services designed to support organizations at every stage of transformation.
        </p>
    </div>
</section>

<!-- Services Grid (Existing) -->
<section class="section-pad" style="background: var(--bg-deep); padding-top: 4rem; padding-bottom: 6rem;">
    <div class="container">
        <div class="services-3d-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
            @foreach($services as $slug => $service)
            <a href="{{ route('services.show', $slug) }}" class="glass-panel hover-lift-3d fade-in" style="display: flex; flex-direction: column; padding: 3rem 2.5rem; border-radius: 24px; text-decoration: none; color: inherit; height: 100%; position: relative; overflow: hidden; border: 1px solid rgba(255,255,255,0.05);">
                 <div class="bg-digital-mesh" style="position: absolute; inset: 0; opacity: 0.05; pointer-events: none;"></div>
                 
                 <div class="service-icon-3d" style="width: 70px; height: 70px; background: rgba(255,255,255,0.05); border-radius: 16px; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; color: var(--accent-teal); margin-bottom: 2rem; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <i class="{{ $service['icon'] ?? 'fas fa-rocket' }} tech-glow-text"></i>
                 </div>
                 
                 <h3 class="text-tech-heading" style="font-size: 1.5rem; margin-bottom: 1rem; color: #fff;">{{ $service['title'] }}</h3>
                 <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 2rem; flex-grow: 1;">{{ $service['description'] }}</p>
                 
                 <div style="display: flex; align-items: center; color: var(--accent-teal); font-weight: 700; font-size: 0.9rem; letter-spacing: 0.5px;">
                     Learn More <i class="fas fa-arrow-right" style="margin-left: 10px; transition: transform 0.3s;"></i>
                 </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= ENTERPRISE DETAIL SECTION ================= -->
<section class="section-pad zync-enterprise-standards" style="background: var(--bg-deep); padding: 6rem 0; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <h2 class="text-tech-heading fade-in" style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 1.5rem;">Built on Structured Digital Architecture</h2>
            <p class="fade-in" style="max-width: 800px; margin: 0 auto; color: var(--text-secondary); font-size: 1.15rem; line-height: 1.7;">
                Every solution is engineered using scalable architecture, performance optimization frameworks, and enterprise security standards.
            </p>
        </div>

        <div class="standards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            @foreach(['Scalable Backend Systems', 'Secure Authentication & Data Protection', 'Modular Development Framework', 'API-Ready Architecture', 'Global Traffic Optimization'] as $point)
            <div class="glass-panel glow-edge-subtle hover-lift-3d fade-in" style="padding: 2.5rem; border-radius: 20px; border: 1px solid rgba(37, 91, 169, 0.2); display: flex; align-items: flex-start; gap: 1.5rem;">
                <div style="color: var(--accent-blue); font-size: 1.5rem; margin-top: 5px;">
                    <i class="fas fa-cubes"></i>
                </div>
                <div>
                    <h4 style="color: #fff; font-size: 1.2rem; margin-bottom: 0.5rem; font-weight: 600;">{{ $point }}</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6;">Engineered for resilience and high-performance execution.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= VALUE DELIVERY SECTION ================= -->
<section class="section-pad zync-outcomes" style="background: var(--bg-deep); padding: 6rem 0; position: relative;">
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.1; pointer-events: none;"></div>
    
    <div class="container">
        <h2 class="text-center text-tech-heading fade-in" style="margin-bottom: 4rem;">Measurable Business Impact</h2>
        
        <div class="outcomes-grid" style="display: flex; gap: 1.5rem; justify-content: space-between; flex-wrap: wrap;">
            @php
                $outcomes = [
                    'Faster Page Load' => ['sub' => 'Performance', 'icon' => 'fa-tachometer-alt'],
                    'Improved Conversion' => ['sub' => 'Flow', 'icon' => 'fa-hand-holding-usd'],
                    'Higher Visibility' => ['sub' => 'SEO', 'icon' => 'fa-globe'],
                    'Enhanced Engagement' => ['sub' => 'UX', 'icon' => 'fa-heart'],
                    'Operational Efficiency' => ['sub' => 'Scale', 'icon' => 'fa-server']
                ];
            @endphp
            @foreach($outcomes as $title => $data)
            <div class="glass-panel hover-lift-3d fade-in" style="flex: 1; min-width: 180px; padding: 2rem 1.5rem; border-radius: 20px; text-align: center; border-top: 4px solid var(--accent-teal);">
                <div style="color: var(--accent-teal); font-size: 2rem; font-weight: 700; margin-bottom: 0.8rem; text-shadow: 0 0 20px rgba(63, 191, 184, 0.3);">
                    <i class="fas {{ $data['icon'] }}"></i>
                </div>
                <h3 style="color: #fff; font-size: 1.1rem; margin-bottom: 0.3rem;">{{ $title }}</h3>
                <span style="color: var(--text-secondary); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">{{ $data['sub'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= PROCESS SECTION (Updated) ================= -->
<section class="section-pad zync-process" style="background: var(--bg-deep); padding: 6rem 0; border-top: 1px solid rgba(255,255,255,0.05); overflow: hidden;">
    <div class="container">
        <div class="text-center fade-in" style="margin-bottom: 4rem;">
            <span class="text-tech-mono" style="display: block; margin-bottom: 1rem; text-transform: uppercase;">Our Methodology</span>
            <h2 class="text-tech-heading">Our Structured <span class="text-gradient-ai">Execution Framework</span></h2>
        </div>
        
        <!-- Horizontal Scroll Container -->
        <div class="process-timeline-horizontal" style="position: relative; padding: 2rem 0;">
            <!-- Subtle Guide Line behind -->
            <div class="process-line pc-only" style="position: absolute; top: 35px; left: 0; width: 100%; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-blue), transparent); opacity: 0.3;"></div>
            
            <div id="methodology-container" class="process-flex" style="display: flex; gap: 2rem; overflow-x: hidden; padding-bottom: 2rem;">
                @php
                    $steps = [
                        '01' => 'Strategic Discovery & Consultation',
                        '02' => 'Technical Planning & Architecture',
                        '03' => 'Experience Design & Structuring',
                        '04' => 'Development & System Integration',
                        '05' => 'Testing, Optimization & Security',
                        '06' => 'Deployment & Ongoing Support'
                    ];
                @endphp

                <!-- First Set -->
                @foreach($steps as $num => $title)
                <div class="process-step-card fade-in" style="flex: 0 0 220px; text-align: center;">
                    <div class="step-num glass-panel-light hover-lift-3d" style="width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.2rem; font-weight: 700; color: #fff; border: 2px solid var(--accent-blue); background: var(--bg-deep); box-shadow: 0 0 15px rgba(37, 91, 169, 0.3); position: relative; z-index: 2;">
                        {{ $num }}
                    </div>
                    <h4 style="color: #fff; font-size: 1rem; line-height: 1.5; font-weight: 500;">{{ $title }}</h4>
                </div>
                @endforeach
                
                <!-- Duplicate Set for Seamless Scroll -->
                @foreach($steps as $num => $title)
                <div class="process-step-card fade-in" style="flex: 0 0 220px; text-align: center;" aria-hidden="true">
                    <div class="step-num glass-panel-light hover-lift-3d" style="width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 1.2rem; font-weight: 700; color: #fff; border: 2px solid var(--accent-blue); background: var(--bg-deep); box-shadow: 0 0 15px rgba(37, 91, 169, 0.3); position: relative; z-index: 2;">
                        {{ $num }}
                    </div>
                    <h4 style="color: #fff; font-size: 1rem; line-height: 1.5; font-weight: 500;">{{ $title }}</h4>
                </div>
                @endforeach
            </div>
            
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const container = document.getElementById('methodology-container');
                    let scrollPos = 0;
                    const speed = 0.5; // Adjust speed here
                    
                    function animateScroll() {
                        if (!container.matches(':hover')) {
                            scrollPos += speed;
                            // Reset when first set is fully scrolled out
                            // Total width is roughly (220px item + 32px gap) * 6 items = 1512px
                            if (scrollPos >= (252 * 6)) { 
                                scrollPos = 0;
                            }
                            container.scrollLeft = scrollPos;
                        }
                        requestAnimationFrame(animateScroll);
                    }
                    
                    animateScroll();
                });
            </script>
        </div>
    </div>
</section>

<!-- ================= TECHNOLOGY STACK ================= -->
<section class="section-pad zync-tech-stack" style="background: var(--bg-deep); padding: 4rem 0 6rem;">
    <div class="container text-center">
        <h2 class="text-tech-heading fade-in" style="margin-bottom: 3rem;">Modern Technology Ecosystem</h2>
        <div class="tech-tags fade-in" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; max-width: 900px; margin: 0 auto;">
            @foreach(['Laravel', 'PHP', 'MySQL', 'React', 'Node.js', 'Cloud Infrastructure', 'REST APIs', 'Performance Monitoring Tools'] as $tech)
            <span class="glass-panel hover-lift-3d" style="padding: 0.8rem 1.5rem; border-radius: 30px; border: 1px solid var(--accent-blue); color: #fff; font-size: 0.95rem; cursor: default; transition: all 0.3s ease;">
                {{ $tech }}
            </span>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= INDUSTRIES SECTION ================= -->
<section class="section-pad zync-industries" style="background: var(--bg-deep); padding: 6rem 0; border-top: 1px solid rgba(255,255,255,0.05);">
    <div class="container">
        <h2 class="text-center text-tech-heading fade-in" style="margin-bottom: 4rem;">Industries We Support</h2>
        <div class="industries-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            @foreach(['Corporate Enterprises', 'E-Commerce Businesses', 'Educational Institutions', 'Technology Startups', 'Service-Based Organizations', 'Digital Agencies'] as $industry)
            <div class="glass-panel hover-lift-3d fade-in" style="padding: 2rem; border-radius: 16px; text-align: center; border: 1px solid rgba(255,255,255,0.1);">
                <h4 style="color: #fff; margin: 0; font-size: 1.1rem;">{{ $industry }}</h4>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= FINAL ENTERPRISE CTA ================= -->
<section class="section-pad zync-enterprise-cta" style="background: var(--bg-deep); padding: 8rem 0; position: relative; overflow: hidden;">
    <div class="bg-digital-mesh" style="position: absolute; inset: 0; opacity: 0.2; pointer-events: none;"></div>
    <!-- Subtle Blue Glow Mesh -->
    <div style="position: absolute; top: -50%; left: 0; width: 100%; height: 200%; background: radial-gradient(circle, rgba(37, 91, 169, 0.2), transparent 70%); filter: blur(80px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 2; text-align: center;">
        <div class="glass-panel-heavy fade-in" style="padding: 5rem 3rem; border-radius: 40px; border: 1px solid rgba(37, 91, 169, 0.3); max-width: 900px; margin: 0 auto;">
            <h2 class="text-tech-heading" style="color: #fff; font-size: clamp(2.2rem, 5vw, 3.5rem); margin-bottom: 1.5rem;">
                Ready to Elevate Your <br> <span style="color: var(--accent-blue);">Digital Infrastructure?</span>
            </h2>
            <p style="font-size: 1.25rem; color: rgba(255,255,255,0.8); max-width: 700px; margin: 0 auto 3rem;">
                Partner with ZyncWeb Solutions to build scalable, secure, and performance-driven platforms.
            </p>
            <a href="{{ route('contact') }}" class="btn-tech-primary" style="background: var(--accent-blue); color: #fff; padding: 1.2rem 3rem; border: none; font-size: 1.1rem;">
                Request a Strategy Consultation
            </a>
        </div>
    </div>
</section>

<style>
@media (max-width: 900px) {
    .process-line.pc-only { display: none; }
    .process-grid { grid-template-columns: 1fr; gap: 3rem; }
}
</style>

@endsection
