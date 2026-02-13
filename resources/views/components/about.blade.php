<section class="section-pad zync-about-3d" id="about" style="background: transparent; position: relative; overflow: hidden; padding: 6rem 0;">
    <!-- Tech Background Mesh -->
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.3; pointer-events: none;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            
            <!-- Content Side -->
            <div class="about-content fade-in">
                <h2 class="text-tech-heading" style="margin-bottom: 1.5rem; font-size: clamp(2.2rem, 4vw, 3rem);">
                    A Strategic <br> <span class="text-gradient-ai" style="background: linear-gradient(90deg, #fff, #3FBFB8); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Technology Partner</span>
                </h2>
                
                <p class="text-tech-sub" style="font-size: 1.1rem; margin-bottom: 2rem;">
                    We combine engineering precision, modern design systems, and scalable infrastructure to deliver measurable digital outcomes. Our approach is rooted in technical excellence and strategic alignment.
                </p>
                
                <ul class="about-bullets" style="list-style: none; padding: 0; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem;">
                    <li style="display: flex; align-items: center; gap: 1rem; font-family: 'Inter', sans-serif; color: #fff;">
                        <i class="fas fa-check-circle" style="color: var(--accent-purple);"></i>
                        Performance Architecture
                    </li>
                    <li style="display: flex; align-items: center; gap: 1rem; font-family: 'Inter', sans-serif; color: #fff;">
                        <i class="fas fa-check-circle" style="color: var(--accent-purple);"></i>
                        Secure Infrastructure
                    </li>
                    <li style="display: flex; align-items: center; gap: 1rem; font-family: 'Inter', sans-serif; color: #fff;">
                        <i class="fas fa-check-circle" style="color: var(--accent-purple);"></i>
                        Enterprise-Level Scalability
                    </li>
                </ul>
                
                <a href="{{ route('contact') }}" class="btn-tech-secondary">
                    Learn More About Us
                </a>
            </div>

            <!-- Right Visual: Professional Executive Image -->
            <div class="about-visual fade-in" style="position: relative;">
                <div class="image-card glass-panel" style="padding: 10px; border-radius: 20px; transform: rotate(2deg); transition: transform 0.5s ease;">
                    <div style="border-radius: 16px; overflow: hidden; position: relative; height: 400px;">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1000&q=80" alt="Executive Meeting" 
                             style="width: 100%; height: 100%; object-fit: cover;">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(11, 16, 38, 0.8), transparent); pointer-events: none;"></div>
                        
                        <!-- Floating Badge -->
                        <div class="glass-panel-heavy" style="position: absolute; bottom: 20px; right: 20px; padding: 1rem; border-radius: 12px; display: flex; align-items: center; gap: 0.8rem;">
                            <div style="width: 40px; height: 40px; background: var(--accent-teal); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-award" style="color: #fff;"></i>
                            </div>
                            <div>
                                <div style="font-size: 0.85rem; color: rgba(255,255,255,0.7);">Recognized</div>
                                <div style="font-weight: 700; color: #fff;">Excellence</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decorative Glow -->
                <div style="position: absolute; top: -30px; left: -30px; width: 100%; height: 100%; border: 2px solid rgba(140, 82, 255, 0.2); border-radius: 24px; z-index: -1; transform: rotate(-3deg);"></div>
            </div>
            
        </div>
    </div>
</section>
