<section class="zync-3d-hero">
    
    <!-- ================= BACKGROUND SYSTEM ================= -->
    <!-- ================= BACKGROUND SYSTEM ================= -->
    <div class="hero-bg-system" style="background: transparent;">
        <!-- Video Background -->
        <div class="hero-video-wrapper" style="position: absolute; inset: 0; z-index: 0; overflow: hidden; opacity: 0.6;">
            <video autoplay loop muted playsinline poster="https://cdn.pixabay.com/photo/2017/08/10/08/41/digital-2619655_1280.jpg" style="width: 100%; height: 100%; object-fit: cover;">
                <source src="https://cdn.pixabay.com/video/2020/07/04/43831-435756193_large.mp4" type="video/mp4">
            </video>
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, var(--bg-deep), transparent 50%, var(--bg-deep));"></div>
        </div>

        <!-- Layer 3: Grid Overlay (Kept for texture) -->
        <div class="hero-grid-overlay" style="opacity: 0.1;"></div>
    </div>

    <!-- ================= CONTENT GRID ================= -->
    <div class="container hero-content-container">
        <div class="hero-grid">
            
            <!-- LEFT COLUMN: Content -->
            <div class="hero-left-content">
                
                <div class="hero-tag reveal-text">
                    <span class="tag-bracket">[</span> Enterprise Digital Solutions <span class="tag-bracket">]</span>
                </div>

                <h1 class="hero-headline reveal-text-delay">
                    Empowering <br>
                    <span class="text-gradient-main">Digital Growth</span> <br>
                    With Intelligent Infrastructure
                </h1>

                <p class="hero-subtext reveal-text-delay-2">
                    ZyncWeb Solutions builds scalable, secure, and high-performance digital platforms engineered for modern enterprises.
                </p>

                <div class="hero-cta-group reveal-text-delay-3">
                    <a href="{{ route('contact') }}" class="btn-tech-primary btn-glow">
                        Schedule a Strategy Call
                    </a>
                    <a href="{{ route('services.index') }}" class="btn-tech-secondary">
                        Explore Capabilities
                    </a>
                </div>

            </div>

            <!-- RIGHT COLUMN: 3D Visual -->
            <div class="hero-right-visual reveal-visual-delay">
                <div class="tech-server-wrapper">
                    <div class="server-stack">
                        <div class="server-unit unit-1"><span class="led-blink"></span></div>
                        <div class="server-unit unit-2"><span class="led-blink"></span></div>
                        <div class="server-unit unit-3"><span class="led-blink"></span></div>
                        <div class="server-base"></div>
                    </div>
                    <div class="data-streams">
                        <div class="stream stream-1"></div>
                        <div class="stream stream-2"></div>
                        <div class="stream stream-3"></div>
                    </div>
                    <div class="floating-cards">
                        <div class="float-card card-1 glass-panel-light">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure</span>
                        </div>
                        <div class="float-card card-2 glass-panel-light">
                            <i class="fas fa-bolt"></i>
                            <span>Fast</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="hero-scroll-indicator-vert">
        <span class="scroll-text">Scroll to Explore</span>
        <div class="scroll-line"></div>
    </div>

</section>
