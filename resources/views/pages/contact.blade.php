@extends('layouts.app')

@section('title', 'Contact Us | ZyncWeb Solutions')

@section('content')
<!-- Hero Section: Minimal 3D -->
<section class="section-pad zync-3d-hero" style="min-height: 50vh; align-items: center; justify-content: center; text-align: center; position: relative; background: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed; overflow: hidden;">
    <div style="position: absolute; inset: 0; background: rgba(11, 16, 38, 0.6);"></div>
    <div class="bg-tech-grid" style="position: absolute; inset: 0; opacity: 0.2; pointer-events: none;"></div>
    <!-- Floating Shapes -->
    <div class="shape-1" style="position: absolute; top: 15%; left: 15%; width: 120px; height: 120px; background: radial-gradient(circle, var(--accent-blue), transparent); opacity: 0.1; filter: blur(40px);"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <span class="text-tech-mono fade-in" style="display: block; margin-bottom: 1.5rem; text-transform: uppercase;">Strategic Partnership</span>
        <h1 class="text-tech-heading fade-in" style="font-size: clamp(3rem, 5vw, 4.5rem); margin-bottom: 1.5rem;">
            Connect With Our <span class="text-gradient-ai">Strategy Team</span>
        </h1>
        <p class="fade-in" style="font-size: 1.25rem; max-width: 700px; margin: 0 auto; color: var(--text-muted); line-height: 1.6;">
            For enterprise inquiries, digital transformation projects, or long-term partnerships.
        </p>
    </div>
</section>

<!-- Notification Container -->
@if(session('success'))
<div class="notification-banner fade-in" style="position: fixed; top: 100px; left: 50%; transform: translateX(-50%); z-index: 1000; background: rgba(37, 91, 169, 0.95); color: white; padding: 1rem 2rem; border-radius: 50px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; align-items: center; gap: 1rem; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
    <i class="fas fa-check-circle" style="font-size: 1.2rem; color: #3FBFB8;"></i>
    <span style="font-weight: 500;">{{ session('success') }}</span>
    <button onclick="this.parentElement.remove()" style="background: none; border: none; color: white; cursor: pointer; opacity: 0.7;">
        <i class="fas fa-times"></i>
    </button>
</div>
<script>
    setTimeout(() => {
        const banner = document.querySelector('.notification-banner');
        if(banner) banner.remove();
    }, 5000); // Auto dismiss after 5 seconds
</script>
@endif

<!-- Contact Section -->
<section class="section-pad" style="background: var(--bg-light); padding-top: 4rem;">
    <div class="container">
        <div class="contact-grid-spec">
            
            <!-- Left: Contact Info -->
            <div class="contact-left">
                <div class="contact-info-wrap" style="display: flex; flex-direction: column; gap: 2rem;">
                    
                    <div class="glass-panel hover-lift-3d fade-in" style="padding: 2.5rem; border-radius: 24px; display: flex; align-items: flex-start; gap: 1.5rem;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; color: var(--accent-teal); flex-shrink: 0;">
                            <i class="fas fa-envelope tech-glow-text"></i>
                        </div>
                        <div>
                            <h4 class="text-tech-heading" style="margin-bottom: 0.5rem; font-size: 1.2rem; color: var(--text-main);">Email Us</h4>
                            <a href="mailto:contact@zyncwebs.com" style="color: var(--text-muted); text-decoration: none; font-size: 1.1rem; transition: color 0.3s;">contact@zyncwebs.com</a>
                        </div>
                    </div>
                    
                    <div class="glass-panel hover-lift-3d fade-in" style="padding: 2.5rem; border-radius: 24px; display: flex; align-items: flex-start; gap: 1.5rem; transition-delay: 0.1s;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; color: var(--accent-teal); flex-shrink: 0;">
                            <i class="fas fa-phone-alt tech-glow-text"></i>
                        </div>
                        <div>
                            <h4 class="text-tech-heading" style="margin-bottom: 0.5rem; font-size: 1.2rem; color: var(--text-main);">Call Us</h4>
                            <a href="tel:+918667212177" style="color: var(--text-muted); text-decoration: none; font-size: 1.1rem; transition: color 0.3s;">+91-8667212177</a>
                        </div>
                    </div>
                    
                    <div class="glass-panel hover-lift-3d fade-in" style="padding: 2.5rem; border-radius: 24px; display: flex; align-items: flex-start; gap: 1.5rem; transition-delay: 0.2s;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; color: var(--accent-teal); flex-shrink: 0;">
                            <i class="fas fa-map-marker-alt tech-glow-text"></i>
                        </div>
                        <div>
                            <h4 class="text-tech-heading" style="margin-bottom: 0.5rem; font-size: 1.2rem; color: var(--text-main);">Our Studio</h4>
                            <a href="https://www.google.com/maps/search/?api=1&query=ZyncWeb+Solutions,+Salem,+Tamil+Nadu+636015" style="color: var(--text-muted); font-size: 1.1rem;">ZyncWeb Solutions, Salem, Tamil Nadu 636015</a>
                        </div>
                    </div>
                </div>

                <!-- Subtle Map (Dark Mode) -->
                <div class="map-container-spec fade-in" style="transition-delay: 0.3s; height: 320px; overflow: hidden; border-radius: 24px; margin-top: 3rem; filter: grayscale(1) invert(0.9) contrast(0.8);">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62456.63411425121!2d78.1130835!3d11.664325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babf1ccf52cba0b%3A0xee9989007068ca06!2sSalem%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div class="contact-right">
                <!-- Use glass-panel class but override with heavier background for form clarity if needed, or keep standard -->
                <div class="glass-panel fade-in" style="padding: 4rem; border-radius: 32px; transition-delay: 0.2s;">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group-spec">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name" class="input-3d" placeholder="ZyncWeb Solutions" required>
                        </div>
                        
                        <div class="form-group-spec">
                            <label for="email">Business Email</label>
                            <input type="email" id="email" name="email" class="input-3d" placeholder="admin@zyncwebs.com" required>
                        </div>

                        <div class="form-group-spec">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="input-3d" placeholder="+91-8667212177">
                        </div>

                        <div class="form-group-spec">
                            <label for="subject">Subject</label>
                            <div style="position: relative;">
                                <select id="subject" name="subject" class="input-3d" style="appearance: none;">
                                    <option value="Web Development">Web Development</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                    <option value="Graphic Design">Graphic Design</option>
                                    <option value="Hosting">Hosting & Maintenance</option>
                                    <option value="Other">Other</option>
                                </select>
                                <i class="fas fa-chevron-down" style="position: absolute; right: 1.5rem; top: 50%; transform: translateY(-50%); color: var(--text-muted); pointer-events: none;"></i>
                            </div>
                        </div>
                        
                        <div class="form-group-spec">
                            <label for="message">Project Scope and Objectives</label>
                            <textarea id="message" name="message" class="input-3d" rows="5" placeholder="Describe your project requirements and business objectives..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-magnetic hover-lift-3d" style="width: 100%; justify-content: center;">
                            Submit Inquiry <i class="fas fa-paper-plane" style="margin-left: 10px;"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* Page Specific Styles */
.contact-grid-spec {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: start;
}
.form-group-spec {
    margin-bottom: 2rem;
}
.form-group-spec label {
    display: block;
    margin-bottom: 0.75rem;
    font-weight: 600;
    color: var(--text-main);
    font-size: 0.95rem;
}
.input-3d {
    width: 100%;
    padding: 1.25rem 1.5rem;
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 12px;
    transition: all 0.3s ease;
    font-size: 1.05rem;
    color: var(--text-main);
    box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
}
.input-3d:focus {
    outline: none;
    background: var(--white);
    border-color: var(--accent-teal);
    box-shadow: 0 0 0 4px rgba(63, 191, 184, 0.1);
}
[data-theme="dark"] .input-3d {
    background: rgba(0,0,0,0.2);
    border-color: rgba(255,255,255,0.1);
    color: white;
}
[data-theme="dark"] .input-3d:focus {
    background: rgba(0,0,0,0.4);
}

@media (max-width: 992px) {
    .contact-grid-spec {
        grid-template-columns: 1fr;
        gap: 4rem;
    }
}
</style>
@endsection
