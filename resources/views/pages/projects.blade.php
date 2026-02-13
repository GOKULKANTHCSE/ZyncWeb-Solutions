@extends('layouts.app')

@section('title', 'ZyncWeb Solutions | Strategic Digital Implementations')

@section('content')

<!-- ================= HERO SECTION ================= -->
<section class="section-pad zync-projects-hero" style="position: relative; min-height: 60vh; display: flex; align-items: center; background: url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed; overflow: hidden; padding-top: 120px;">
    <!-- Dark Overlay -->
    <div style="position: absolute; inset: 0; background: rgba(11, 16, 38, 0.6);"></div>
    
    <!-- Background System -->
    <div class="hero-bg-system" style="position: absolute; inset: 0; pointer-events: none;">
        <div style="position: absolute; inset: 0; background: radial-gradient(circle at 50% 30%, rgba(37, 91, 169, 0.15), transparent 70%);"></div>
        <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.1;"></div>
        <!-- Light Trails (CSS Animation) -->
        <div class="light-trail" style="position: absolute; top: 20%; left: -10%; width: 50%; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-blue), transparent); animation: trailMove 8s linear infinite;"></div>
        <div class="light-trail" style="position: absolute; bottom: 30%; right: -10%; width: 60%; height: 2px; background: linear-gradient(90deg, transparent, var(--accent-teal), transparent); animation: trailMove 12s linear infinite reverse;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 2; text-align: center;">
        <h1 class="text-tech-heading fade-in" style="font-size: clamp(2.5rem, 5vw, 4.5rem); margin-bottom: 1.5rem;">
            Strategic <span class="text-gradient-ai" style="background: linear-gradient(90deg, #fff, var(--accent-blue)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Digital Implementations</span>
        </h1>
        <p class="fade-in" style="max-width: 700px; margin: 0 auto; font-size: 1.25rem; color: var(--text-secondary); line-height: 1.6;">
            A selection of enterprise-grade platforms designed to deliver measurable performance and growth.
        </p>
    </div>
</section>

<!-- ================= PROJECT GRID ================= -->
<section class="section-pad zync-project-grid" style="background: var(--bg-deep); padding: 4rem 0 8rem;">
    <div class="container">
        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 3rem;">
            
            <!-- Project 1 -->
            <div class="project-card glass-panel hover-lift-3d fade-in" style="border: 1px solid rgba(37, 91, 169, 0.3); border-radius: 20px; overflow: hidden; transition: all 0.4s ease;">
                <div class="card-visual" style="height: 280px; position: relative; overflow: hidden; background: #000;">
                     <!-- Placeholder for 3D Mockup / High Quality Image -->
                     <div style="position: absolute; inset: 0; background: linear-gradient(45deg, rgba(37, 91, 169, 0.2), rgba(11, 16, 38, 0.8));"></div>
                     <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Corporate Website" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: transform 0.8s ease;" class="hover-scale">
                </div>
                
                <div class="card-content" style="padding: 2.5rem;">
                    <div class="category" style="font-family: 'Inter', sans-serif; font-size: 0.85rem; color: var(--accent-blue); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem;">
                        Enterprise Web Development
                    </div>
                    <h3 class="text-tech-heading" style="font-size: 1.5rem; margin-bottom: 1rem; color: #fff;">Corporate Website Modernization</h3>
                    <p style="color: var(--text-secondary); font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Re-architected digital presence with improved performance, enhancing UI systems, and scalable backend infrastructure.
                    </p>
                    
                    <div class="results" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem; margin-top: 1.5rem;">
                        <h4 style="font-size: 0.9rem; color: #fff; margin-bottom: 0.8rem;">Key Results:</h4>
                        <ul style="padding-left: 1.2rem; margin: 0; color: var(--text-secondary); font-size: 0.95rem;">
                            <li style="margin-bottom: 0.4rem;">40% faster load time</li>
                            <li>30% increase in engagement</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card glass-panel hover-lift-3d fade-in" style="border: 1px solid rgba(37, 91, 169, 0.3); border-radius: 20px; overflow: hidden; transition: all 0.4s ease; transition-delay: 0.1s;">
                 <div class="card-visual" style="height: 280px; position: relative; overflow: hidden; background: #000;">
                     <div style="position: absolute; inset: 0; background: linear-gradient(45deg, rgba(37, 91, 169, 0.2), rgba(11, 16, 38, 0.8));"></div>
                     <img src="https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?auto=format&fit=crop&w=800&q=80" alt="E-Commerce" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: transform 0.8s ease;" class="hover-scale">
                </div>
                
                <div class="card-content" style="padding: 2.5rem;">
                    <div class="category" style="font-family: 'Inter', sans-serif; font-size: 0.85rem; color: var(--accent-blue); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem;">
                        Digital Commerce
                    </div>
                    <h3 class="text-tech-heading" style="font-size: 1.5rem; margin-bottom: 1rem; color: #fff;">E-Commerce Infrastructure Deployment</h3>
                    <p style="color: var(--text-secondary); font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Built secure transaction system optimized for scalability and operational efficiency.
                    </p>
                    
                    <div class="results" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem; margin-top: 1.5rem;">
                        <h4 style="font-size: 0.9rem; color: #fff; margin-bottom: 0.8rem;">Key Results:</h4>
                        <ul style="padding-left: 1.2rem; margin: 0; color: var(--text-secondary); font-size: 0.95rem;">
                            <li style="margin-bottom: 0.4rem;">Improved checkout speed</li>
                            <li>Increased conversion rate</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card glass-panel hover-lift-3d fade-in" style="border: 1px solid rgba(37, 91, 169, 0.3); border-radius: 20px; overflow: hidden; transition: all 0.4s ease; transition-delay: 0.2s;">
                 <div class="card-visual" style="height: 280px; position: relative; overflow: hidden; background: #000;">
                     <div style="position: absolute; inset: 0; background: linear-gradient(45deg, rgba(37, 91, 169, 0.2), rgba(11, 16, 38, 0.8));"></div>
                     <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80" alt="SEO Strategy" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.6; transition: transform 0.8s ease;" class="hover-scale">
                </div>
                
                <div class="card-content" style="padding: 2.5rem;">
                    <div class="category" style="font-family: 'Inter', sans-serif; font-size: 0.85rem; color: var(--accent-blue); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.8rem;">
                        Technical Optimization
                    </div>
                    <h3 class="text-tech-heading" style="font-size: 1.5rem; margin-bottom: 1rem; color: #fff;">Performance Optimization & SEO Strategy</h3>
                    <p style="color: var(--text-secondary); font-size: 1rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Implemented advanced optimization techniques aligned with global search engine benchmarks.
                    </p>
                    
                    <div class="results" style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem; margin-top: 1.5rem;">
                        <h4 style="font-size: 0.9rem; color: #fff; margin-bottom: 0.8rem;">Key Results:</h4>
                        <ul style="padding-left: 1.2rem; margin: 0; color: var(--text-secondary); font-size: 0.95rem;">
                            <li style="margin-bottom: 0.4rem;">Higher search ranking</li>
                            <li>Faster page load performance</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= CTA ================= -->
<section class="section-pad zync-cta-projects" style="background: var(--bg-deep); border-top: 1px solid rgba(255,255,255,0.05); padding: 8rem 0; position: relative; overflow: hidden;">
    <div class="bg-digital-mesh" style="position: absolute; inset: 0; opacity: 0.15; pointer-events: none;"></div>
    <!-- Teal Glow -->
    <div style="position: absolute; bottom: -50%; left: 0; width: 100%; height: 100%; background: radial-gradient(circle, rgba(63, 191, 184, 0.15), transparent 70%); filter: blur(60px); pointer-events: none;"></div>

    <div class="container" style="position: relative; z-index: 2; text-align: center;">
         <div class="glass-panel-heavy fade-in hover-lift-3d" style="padding: 5rem 3rem; border-radius: 40px; border: 1px solid rgba(63, 191, 184, 0.2); max-width: 900px; margin: 0 auto;">
            <h2 class="text-tech-heading" style="color: #fff; font-size: clamp(2.2rem, 4vw, 3.5rem); margin-bottom: 2rem;">
                Have a Similar <span style="color: var(--accent-teal);">Project in Mind?</span>
            </h2>
             <a href="{{ route('contact') }}" class="btn-tech-primary" style="background: var(--accent-teal); color: #0B1026; padding: 1.2rem 3rem; border: none; font-size: 1.1rem;">
                Discuss Your Requirements
            </a>
         </div>
    </div>
</section>

<style>
    @keyframes trailMove {
        0% { transform: translateX(-100%); opacity: 0; }
        50% { opacity: 1; }
        100% { transform: translateX(200%); opacity: 0; }
    }
    .hover-scale:hover {
        transform: scale(1.05);
    }
</style>

@endsection
