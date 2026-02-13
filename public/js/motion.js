document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // --- Global Configuration ---
    const isMobile = window.innerWidth < 768;
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Respect user's motion preferences
    if (prefersReducedMotion) {
        gsap.config({ nullTargetWarn: false });
        return; // Skip animations if user prefers reduced motion
    }

    // ================= HERO SCROLL ANIMATION =================
    
    // Hero Video Background - Subtle Parallax
    const heroVideo = document.querySelector('.hero-video');
    if (heroVideo && !isMobile) {
        gsap.to('.hero-video video', {
            yPercent: 15,
            ease: "none",
            scrollTrigger: {
                trigger: '.hero-video',
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });
    }

    // Hero Text Reveal - Stagger Fade + Slide Up
    const heroTag = document.querySelector('.hero-video .hero-tag');
    const heroTitle = document.querySelector('.hero-video h1');
    const heroPara = document.querySelector('.hero-video p');
    const heroBtnGroup = document.querySelector('.hero-video .btn-group');

    if (heroTitle) {
        const heroTl = gsap.timeline({ delay: 0.3 });
        
        heroTl.fromTo(heroTag,
            { opacity: 0, y: 60 },
            { opacity: 1, y: 0, duration: 0.9, ease: "cubic-bezier(0.4,0,0.2,1)" }
        )
        .fromTo(heroTitle,
            { opacity: 0, y: 60 },
            { opacity: 1, y: 0, duration: 0.9, ease: "cubic-bezier(0.4,0,0.2,1)" },
            "-=0.6"
        )
        .fromTo(heroPara,
            { opacity: 0, y: 60 },
            { opacity: 1, y: 0, duration: 0.9, ease: "cubic-bezier(0.4,0,0.2,1)" },
            "-=0.6"
        )
        .fromTo(heroBtnGroup,
            { opacity: 0, y: 60 },
            { opacity: 1, y: 0, duration: 0.9, ease: "cubic-bezier(0.4,0,0.2,1)" },
            "-=0.6"
        );
    }

    // ================= SECTION REVEAL ANIMATION =================
    
    // Generic section reveals (headings, paragraphs with fade-in class)
    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, y: 80 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: el,
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    });

    // ================= SERVICE CARD SCROLL =================
    
    const serviceCards = document.querySelectorAll('.svc-card');
    if (serviceCards.length > 0) {
        gsap.fromTo(serviceCards,
            { opacity: 0, y: 70 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.15,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.services-grid-modern',
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    }

    // ================= PROJECT GRID SCROLL =================
    
    const projectCards = document.querySelectorAll('.projects-grid .card-glass');
    if (projectCards.length > 0) {
        gsap.fromTo(projectCards,
            { opacity: 0, y: 60, scale: 0.98 },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.7,
                stagger: 0.2,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.projects-grid',
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    }

    // ================= TESTIMONIAL SCROLL =================
    
    const testimonialCards = document.querySelectorAll('.testimonials-section .card-glass');
    if (testimonialCards.length > 0) {
        gsap.fromTo(testimonialCards,
            { opacity: 0, x: 20 },
            {
                opacity: 1,
                x: 0,
                duration: 0.8,
                stagger: 0.1,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.testimonials-section',
                    start: "top 75%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    }

    // ================= CTA SCROLL =================
    
    const ctaSection = document.querySelector('.cta-section-main .card-glass');
    if (ctaSection) {
        gsap.fromTo(ctaSection,
            { opacity: 0, scale: 0.95 },
            {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.cta-section-main',
                    start: "top 80%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    }

    // ================= FOOTER SCROLL =================
    
    const footerLinks = document.querySelectorAll('.footer-links a, .footer-contact p, .social-icons a');
    if (footerLinks.length > 0) {
        gsap.fromTo(footerLinks,
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.6,
                stagger: 0.05,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.main-footer',
                    start: "top 85%",
                    toggleActions: "play none none reverse"
                }
            }
        );
    }

    // ================= PARALLAX SHAPES =================
    
    if (!isMobile) {
        gsap.to('.shape-1', {
            yPercent: 30,
            ease: "none",
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 1
            }
        });
        
        gsap.to('.shape-2', {
            yPercent: -20,
            ease: "none",
            scrollTrigger: {
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                scrub: 1.2
            }
        });
    }

    // ================= MAGNETIC BUTTONS =================
    
    const magneticBtns = document.querySelectorAll('.btn-magnetic');
    magneticBtns.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(btn, {
                duration: 0.3,
                x: x * 0.25,
                y: y * 0.25,
                ease: "power2.out"
            });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                duration: 0.6,
                x: 0,
                y: 0,
                ease: "elastic.out(1, 0.4)"
            });
        });
    });

    // ================= BACK TO TOP BUTTON =================
    
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        gsap.set(backToTop, { autoAlpha: 0, scale: 0.5, y: 20 });

        let scrollTimeout;
        window.addEventListener('scroll', () => {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                if (window.scrollY > 400) {
                    gsap.to(backToTop, {
                        autoAlpha: 1,
                        scale: 1,
                        y: 0,
                        duration: 0.6,
                        ease: "back.out(1.7)"
                    });
                } else {
                    gsap.to(backToTop, {
                        autoAlpha: 0,
                        scale: 0.5,
                        y: 20,
                        duration: 0.4,
                        ease: "power2.in"
                    });
                }
            }, 50); // Throttle scroll events
        });
        
        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // ================= THEME TOGGLE =================
    
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        const html = document.documentElement;
        const themeIcon = themeToggle.querySelector('i');
        
        const updateIcon = (theme) => {
            if (theme === 'dark') {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
            }
        };

        const setTheme = (theme, save = true) => {
            html.setAttribute('data-theme', theme);
            if (save) localStorage.setItem('theme', theme);
            updateIcon(theme);
            
            gsap.fromTo(themeIcon,
                { rotation: 0, scale: 0.5, opacity: 0 },
                { rotation: 360, scale: 1, opacity: 1, duration: 0.5, ease: "back.out(1.7)" }
            );
        };

        const currentTheme = html.getAttribute('data-theme');
        updateIcon(currentTheme);

        themeToggle.addEventListener('click', () => {
            const activeTheme = html.getAttribute('data-theme');
            const newTheme = activeTheme === 'light' ? 'dark' : 'light';
            setTheme(newTheme);
        });

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (!localStorage.getItem('theme')) {
                setTheme(e.matches ? 'dark' : 'light', false);
            }
        });
    }

    // ================= WHATSAPP PULSE =================
    
    const whatsappBtn = document.querySelector('.whatsapp-btn');
    if (whatsappBtn) {
        gsap.to(whatsappBtn, {
            scale: 1.1,
            duration: 1.5,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    }

    // ================= FAQ ACCORDION =================
    
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = question?.querySelector('i');
        
        if (question && answer) {
            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                faqItems.forEach(i => {
                    i.classList.remove('active');
                    const ans = i.querySelector('.faq-answer');
                    const ic = i.querySelector('.faq-question i');
                    if (ans) {
                        ans.style.maxHeight = '0';
                        ans.style.paddingTop = '0';
                    }
                    if (ic) ic.style.transform = 'rotate(0deg)';
                });
                
                if (!isActive) {
                    item.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 50 + 'px';
                    answer.style.paddingTop = '1.5rem';
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            });
        }
    });

    // ================= ADDITIONAL PAGE-SPECIFIC ANIMATIONS =================
    
    // Services Page
    const serviceCardsSpec = document.querySelectorAll('.service-card-spec');
    if (serviceCardsSpec.length > 0) {
        gsap.fromTo(serviceCardsSpec,
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.15,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.services-grid-spec',
                    start: 'top 80%'
                }
            }
        );
    }

    // Process Steps
    const processSteps = document.querySelectorAll('.process-step, .process-step-spec');
    if (processSteps.length > 0) {
        gsap.fromTo(processSteps,
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: processSteps[0].parentElement,
                    start: 'top 70%'
                }
            }
        );
    }

    // Feature Items
    const featureItems = document.querySelectorAll('.feature-item');
    if (featureItems.length > 0) {
        gsap.fromTo(featureItems,
            { opacity: 0, scale: 0.95, y: 30 },
            {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.1,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.features-grid',
                    start: 'top 80%'
                }
            }
        );
    }

    // Contact Info Cards
    const infoCardsSpec = document.querySelectorAll('.info-card-spec');
    if (infoCardsSpec.length > 0) {
        gsap.fromTo(infoCardsSpec,
            { opacity: 0, x: -30 },
            {
                opacity: 1,
                x: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.contact-info-wrap',
                    start: 'top 80%'
                }
            }
        );
    }

    // Contact Form
    const formBoxSpec = document.querySelector('.form-box-spec');
    if (formBoxSpec) {
        gsap.fromTo(formBoxSpec,
            { opacity: 0, y: 50 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: formBoxSpec,
                    start: 'top 80%'
                }
            }
        );
    }

    // Project Cards (alternate selector)
    const projectCardsSpec = document.querySelectorAll('.project-card-spec');
    if (projectCardsSpec.length > 0) {
        gsap.fromTo(projectCardsSpec,
            { opacity: 0, y: 40, scale: 0.98 },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.7,
                stagger: 0.2,
                ease: "cubic-bezier(0.4,0,0.2,1)",
                scrollTrigger: {
                    trigger: '.projects-grid-spec',
                    start: 'top 80%'
                }
            }
        );
    }

    // ================= PAGE LOAD TRANSITION =================
    
    gsap.from('body', {
        opacity: 0,
        duration: 0.6,
        ease: "power2.out"
    });

    // ================= HEADER SCROLL EFFECT =================
    
    const header = document.getElementById('main-header');
    if (header) {
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.scrollY;
            if (currentScroll > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            lastScroll = currentScroll;
        });
    }

    // ================= SMOOTH SCROLL BEHAVIOR =================
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});
