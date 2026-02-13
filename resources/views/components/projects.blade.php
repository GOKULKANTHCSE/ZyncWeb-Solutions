<section id="work" class="section-pad zync-projects-3d" style="background: var(--bg-deep); position: relative; padding: 6rem 0;">
    <!-- Tech Background -->
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.1; pointer-events: none;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <span class="text-center text-tech-mono" style="display: block; margin-bottom: 1rem;">Success Stories</span>
        <h2 class="text-center text-tech-heading fade-in" style="margin-bottom: 1.5rem; font-size: clamp(2.2rem, 4vw, 3rem);">Strategic Implementations</h2>
        <p class="text-center fade-in" style="max-width: 650px; margin: 0 auto 5rem; font-size: 1.15rem; color: var(--text-secondary);">
            Delivering measurable impact through engineering precision and design excellence.
        </p>
        
        <div class="projects-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); gap: 3rem;">
            <!-- Project 1 -->
            <a href="{{ route('projects.show', 'fintech-investment-platform') }}" class="fade-in glass-panel hover-lift-3d glow-edge-subtle" style="text-decoration: none; color: inherit; display: block; overflow: hidden; padding: 0; border-radius: 24px; transition: all 0.4s ease;">
                <div class="project-img-wrap" style="height: 350px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);" class="hover-scale" alt="FinTech Analytics">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11, 16, 38, 0.9), transparent); opacity: 0.8; transition: opacity 0.4s;"></div>
                    <div class="glass-panel-heavy" style="position: absolute; top: 1.5rem; right: 1.5rem; color: #fff; padding: 0.6rem 1.2rem; border-radius: 30px; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1); text-transform: uppercase; letter-spacing: 0.05em;">FinTech</div>
                </div>
                <div style="padding: 2.5rem 2rem; position: relative; margin-top: -80px; padding-top: 0;">
                    <h3 class="text-tech-heading" style="margin-bottom: 0.8rem; font-size: 1.6rem; color: #fff;">FinTech Investment Portal</h3>
                    <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6; margin-bottom: 1.5rem;">A high-frequency trading platform handling millions in daily transactions with sub-millisecond latency.</p>
                    <div style="display: flex; gap: 0.8rem; flex-wrap: wrap;">
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">React</span>
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">Node.js</span>
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">AWS</span>
                    </div>
                </div>
            </a>
            
            <!-- Project 2 -->
            <a href="{{ route('projects.show', 'eco-luxury-marketplace') }}" class="fade-in glass-panel hover-lift-3d glow-edge-subtle" style="text-decoration: none; color: inherit; display: block; overflow: hidden; padding: 0; border-radius: 24px; transition: all 0.4s ease; transition-delay: 0.1s;">
                <div class="project-img-wrap" style="height: 350px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=1200&q=80" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);" class="hover-scale" alt="Global Retail">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11, 16, 38, 0.9), transparent); opacity: 0.8; transition: opacity 0.4s;"></div>
                    <div class="glass-panel-heavy" style="position: absolute; top: 1.5rem; right: 1.5rem; color: #fff; padding: 0.6rem 1.2rem; border-radius: 30px; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1); text-transform: uppercase; letter-spacing: 0.05em;">E-Commerce</div>
                </div>
                 <div style="padding: 2.5rem 2rem; position: relative; margin-top: -80px; padding-top: 0;">
                    <h3 class="text-tech-heading" style="margin-bottom: 0.8rem; font-size: 1.6rem; color: #fff;">Eco-Luxury Marketplace</h3>
                    <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6; margin-bottom: 1.5rem;">Sustainable luxury retail platform featuring immersive 3D product previews and AI-driven recommendations.</p>
                      <div style="display: flex; gap: 0.8rem; flex-wrap: wrap;">
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">Shopify Plus</span>
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">WebGL</span>
                    </div>
                </div>
            </a>
            
             <!-- Project 3 -->
            <a href="{{ route('projects.show', 'smart-health-dashboard') }}" class="fade-in glass-panel hover-lift-3d glow-edge-subtle" style="text-decoration: none; color: inherit; display: block; overflow: hidden; padding: 0; border-radius: 24px; transition: all 0.4s ease; transition-delay: 0.2s;">
                <div class="project-img-wrap" style="height: 350px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1200&q=80" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);" class="hover-scale" alt="Smart Health">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11, 16, 38, 0.9), transparent); opacity: 0.8; transition: opacity 0.4s;"></div>
                    <div class="glass-panel-heavy" style="position: absolute; top: 1.5rem; right: 1.5rem; color: #fff; padding: 0.6rem 1.2rem; border-radius: 30px; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1); text-transform: uppercase; letter-spacing: 0.05em;">HealthTech</div>
                </div>
                 <div style="padding: 2.5rem 2rem; position: relative; margin-top: -80px; padding-top: 0;">
                    <h3 class="text-tech-heading" style="margin-bottom: 0.8rem; font-size: 1.6rem; color: #fff;">Smart Health Analytics</h3>
                    <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6; margin-bottom: 1.5rem;">HIPAA-compliant dashboard visualizing real-time patient data for healthcare providers.</p>
                      <div style="display: flex; gap: 0.8rem; flex-wrap: wrap;">
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">D3.js</span>
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">Python</span>
                    </div>
                </div>
            </a>
            
             <!-- Project 4 (Optional to keep grid balanced or remove to stick to 3 highlights? Request implies "Grid", so 4 is good for balance if 2x2. I'll include 4.) -->
            <a href="{{ route('projects.show', 'urban-realty-portal') }}" class="fade-in glass-panel hover-lift-3d glow-edge-subtle" style="text-decoration: none; color: inherit; display: block; overflow: hidden; padding: 0; border-radius: 24px; transition: all 0.4s ease; transition-delay: 0.3s;">
                <div class="project-img-wrap" style="height: 350px; overflow: hidden; position: relative;">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1200&q=80" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.8s cubic-bezier(0.2, 1, 0.3, 1);" class="hover-scale" alt="Urban Realty">
                    <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11, 16, 38, 0.9), transparent); opacity: 0.8; transition: opacity 0.4s;"></div>
                    <div class="glass-panel-heavy" style="position: absolute; top: 1.5rem; right: 1.5rem; color: #fff; padding: 0.6rem 1.2rem; border-radius: 30px; font-size: 0.75rem; font-weight: 700; border: 1px solid rgba(255,255,255,0.1); text-transform: uppercase; letter-spacing: 0.05em;">Real Estate</div>
                </div>
                 <div style="padding: 2.5rem 2rem; position: relative; margin-top: -80px; padding-top: 0;">
                    <h3 class="text-tech-heading" style="margin-bottom: 0.8rem; font-size: 1.6rem; color: #fff;">Urban Realty Portal</h3>
                    <p style="color: var(--text-secondary); font-size: 1.05rem; line-height: 1.6; margin-bottom: 1.5rem;">Integrated property management system with virtual tours and automated tenant portals.</p>
                      <div style="display: flex; gap: 0.8rem; flex-wrap: wrap;">
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">Laravel</span>
                         <span class="text-tech-mono" style="font-size: 0.75rem; border-bottom: 1px solid var(--accent-teal);">Vue.js</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
