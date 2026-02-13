<footer class="main-footer fade-in zync-footer-3d" style="position: relative; background: rgba(11, 16, 38, 0.95); overflow: hidden; border-top: 1px solid rgba(255,255,255,0.05);">
    <!-- Tech Background Grid -->
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.15; pointer-events: none;"></div>
    
    <div class="container footer-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 3rem; padding-top: 3rem; padding-bottom: 3rem; position: relative; z-index: 2;">
        <div class="footer-brand">
            <a href="{{ route('home') }}" style="display: block; margin-bottom: 1.5rem;">
                <img src="{{ asset('img/SVG/White.svg') }}" alt="ZyncWeb Solutions" class="show-dark" style="height: 60px; width: auto;">
                <img src="{{ asset('img/SVG/Black.svg') }}" alt="ZyncWeb Solutions" class="show-light" style="height: 60px; width: auto;">
            </a>
            <p style="max-width: 280px; color: rgba(255,255,255,0.6); font-size: 0.95rem; line-height: 1.7; margin-bottom: 2rem;">We build modern digital solutions that help businesses grow with confidence.</p>
            <div class="social-icons" style="display: flex; gap: 1rem;">
                <a href="https://www.instagram.com/zyncweb" class="btn-magnetic" aria-label="Instagram" style="width: 45px; height: 45px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; border: 1px solid rgba(255,255,255,0.1); transition: 0.3s;"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/company/zyncwebsolutions" class="btn-magnetic" aria-label="LinkedIn" style="width: 45px; height: 45px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; border: 1px solid rgba(255,255,255,0.1); transition: 0.3s;"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://wa.me/918667212177" class="btn-magnetic" aria-label="WhatsApp" style="width: 45px; height: 45px; background: rgba(255,255,255,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; border: 1px solid rgba(255,255,255,0.1); transition: 0.3s;"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        
        <div class="footer-links" id="footer-nav">
            <h4 class="text-tech-mono" style="color: white; margin-bottom: 1rem; font-size: 1rem; opacity: 0.9;">Menu</h4>
            <a href="{{ route('home') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 0.5rem; color: rgba(255,255,255,0.7); text-decoration: none;">Home</a><br>
            <a href="{{ route('about') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 0.5rem; color: rgba(255,255,255,0.7); text-decoration: none;">About</a><br>
            <a href="{{ route('services.index') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 0.5rem; color: rgba(255,255,255,0.7); text-decoration: none;">Services</a><br>
            <a href="{{ route('projects.index') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 0.5rem; color: rgba(255,255,255,0.7); text-decoration: none;">Projects</a><br>
            <a href="{{ route('contact') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 0.5rem; color: rgba(255,255,255,0.7); text-decoration: none;">Contact</a>
        </div>
        
            <div class="footer-links">
            <h4 class="text-tech-mono" style="color: white; margin-bottom: 1.5rem; font-size: 1rem; opacity: 0.9;">Expertise</h4>
            <a href="{{ route('services.show', 'web-development') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 1rem; color: rgba(255,255,255,0.7); text-decoration: none;">Web Development</a><br>
            <a href="{{ route('services.show', 'ui-ux-design') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 1rem; color: rgba(255,255,255,0.7); text-decoration: none;">UI/UX Design</a><br>
            <a href="{{ route('services.show', 'graphic-design') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 1rem; color: rgba(255,255,255,0.7); text-decoration: none;">Brand Identity</a><br>
            <a href="{{ route('services.show', 'seo-optimization') }}" class="hover-underline-tech" style="display: inline-block; margin-bottom: 1rem; color: rgba(255,255,255,0.7); text-decoration: none;">SEO Optimization</a>
        </div>
        
        <div class="footer-contact">
             <h4 class="text-tech-mono" style="color: white; margin-bottom: 1.5rem; font-size: 1rem; opacity: 0.9;">Contact Us</h4>
             <p style="color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 1rem; display: flex; align-items: flex-start; gap: 10px;">
                <i class="fas fa-map-marker-alt" style="color: var(--accent-teal); margin-top: 4px;"></i>
                <a href="https://www.google.com/maps/search/?api=1&query=ZyncWeb+Solutions,+Salem,+Tamil+Nadu+636015" target="_blank" class="hover-underline-tech" style="color: inherit; text-decoration: none; transition: all 0.3s ease;">
                    ZyncWeb Solutions, Salem, Tamil Nadu 636015
                </a>
             </p>
             <p style="color: rgba(255,255,255,0.7); font-size: 0.95rem; margin-bottom: 1rem; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-envelope" style="color: var(--accent-teal);"></i> 
                <a href="mailto:contact@zyncwebs.com" class="hover-underline-tech" style="color: inherit; text-decoration: none; transition: all 0.3s ease;">contact@zyncwebs.com</a>
             </p>
             <p style="color: rgba(255,255,255,0.7); font-size: 0.95rem; display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-phone" style="color: var(--accent-teal);"></i> 
                <a href="tel:+918667212177" class="hover-underline-tech" style="color: inherit; text-decoration: none; transition: all 0.3s ease;">+91-8667212177</a>
             </p>
        </div>
    </div>
    
    <div class="container footer-bottom" style="text-align: center; padding: 2rem 0; border-top: 1px solid rgba(255,255,255,0.05); position: relative; z-index: 2;">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
            <p style="color: rgba(255,255,255,0.4); font-size: 0.85rem; margin-bottom: 0;">© 2026 ZyncWeb Solutions. All Rights Reserved.</p>
            <div style="display: flex; gap: 1.5rem;">
                 <a href="{{ route('legal.privacy') }}" class="hover-underline-tech" style="font-size: 0.85rem; color: rgba(255,255,255,0.5); text-decoration: none;">Privacy Policy</a>
                 <a href="{{ route('legal.terms') }}" class="hover-underline-tech" style="font-size: 0.85rem; color: rgba(255,255,255,0.5); text-decoration: none;">Terms & Conditions</a>
            </div>
        </div>
    </div>
</footer>
