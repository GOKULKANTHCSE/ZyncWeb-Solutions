// Hero Scene Logic - 3D Parallax & Motion

document.addEventListener('DOMContentLoaded', () => {
    
    // Check if hero exists
    const heroSection = document.querySelector('.zync-3d-hero');
    if (!heroSection) return;

    console.log('Initializing 3D Tech Hero Scene...');

    // GSAP Timeline for Elements Reveal
    const tl = gsap.timeline({ defaults: { ease: "power3.out" } });

    // 1. Initial State (Hidden)
    gsap.set('.reveal-text', { y: 70, opacity: 0 });
    gsap.set('.reveal-text-delay', { y: 30, opacity: 0 });
    gsap.set('.hero-cta-group', { y: 30, opacity: 0 });
    gsap.set('.hero-trust-bar', { opacity: 0 });

    // 2. Reveal Animation Sequence
    tl.to('.reveal-text', {
        y: 0,
        opacity: 1,
        duration: 1.2,
        stagger: 0.2
    })
    .to('.reveal-text-delay', {
        y: 0,
        opacity: 1,
        duration: 1
    }, "-=0.8")
    .to('.hero-cta-group', {
        y: 0,
        opacity: 1,
        duration: 0.8
    }, "-=0.6")
    .to('.hero-trust-bar', {
        opacity: 1,
        duration: 1
    }, "-=0.4");

    // 3. Mouse Parallax Effect (Performance Optimized)
    const heroContent = document.querySelector('.hero-text-content');
    const heroBg = document.querySelector('.hero-video-layer');
    const particles = document.querySelector('.floating-particles');

    document.addEventListener('mousemove', (e) => {
        if (window.innerWidth < 992) return; // Disable on mobile

        const x = (e.clientX / window.innerWidth - 0.5) * 2; // -1 to 1
        const y = (e.clientY / window.innerHeight - 0.5) * 2; // -1 to 1

        // Parallax Content (Subtle)
        gsap.to(heroContent, {
            x: x * 15,
            y: y * 15,
            duration: 1,
            ease: "power2.out"
        });

        // Parallax Background (Inverse)
        gsap.to(heroBg, {
            x: -x * 20,
            y: -y * 20,
            rotation: x * 2, // Slight tilt
            duration: 1.5,
            ease: "power2.out"
        });

        // Particles (Depth)
        gsap.to(particles, {
            x: x * 40,
            y: y * 40,
            duration: 2,
            ease: "power2.out"
        });
    });

    // 4. Scroll Parallax (Video Drift)
    gsap.to('.hero-video-layer', {
        yPercent: 20,
        ease: "none",
        scrollTrigger: {
            trigger: '.zync-3d-hero',
            start: "top top",
            end: "bottom top",
            scrub: true
        }
    });

});
