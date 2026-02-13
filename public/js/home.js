document.addEventListener('DOMContentLoaded', () => {
    gsap.registerPlugin(ScrollTrigger);

    // Initial state setup
    gsap.set(".headline, .statement, .service-title, .service-desc, .why-line, .process-step", {
        opacity: 0,
        y: 50
    });

    const mainTl = gsap.timeline({
        scrollTrigger: {
            trigger: ".cinematic-container",
            start: "top top",
            end: "+=1000%", // Extended for more scenes
            scrub: 1.5,
            pin: true,
            anticipatePin: 1,
        }
    });

    // Scene 1: Intro
    mainTl.to("#intro-headline", {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power3.out"
    })
    .to("#intro-line", {
        width: "100%",
        duration: 1.5,
        ease: "power2.inOut"
    }, "-=1")
    .to("#scene-1", {
        opacity: 0,
        scale: 0.9,
        duration: 2,
        onStart: () => { document.querySelector('#scene-1').classList.add('active'); },
        onComplete: () => { document.querySelector('#scene-1').classList.remove('active'); }
    });

    // Scene 2: Brand Statement
    mainTl.fromTo("#scene-2", { opacity: 0, scale: 1.1 }, { 
        opacity: 1, 
        scale: 1, 
        duration: 2,
        onStart: () => { document.querySelector('#scene-2').classList.add('active'); }
    })
    .to("#brand-statement", {
        opacity: 1,
        y: 0,
        duration: 2,
        ease: "power2.out"
    })
    .to("#scene-2", {
        opacity: 0,
        x: -100,
        duration: 2,
        onComplete: () => { document.querySelector('#scene-2').classList.remove('active'); }
    });

    // Scene 3: Services Loop
    const serviceIds = ['#service-1', '#service-2', '#service-3', '#service-4'];
    serviceIds.forEach((id, index) => {
        mainTl.fromTo(id, { opacity: 0, x: index % 2 === 0 ? 100 : -100 }, { 
            opacity: 1, 
            x: 0, 
            duration: 2,
            onStart: () => { document.querySelector(id).classList.add('active'); }
        })
        .to(`${id} .service-title`, { opacity: 1, y: 0, duration: 1.5 })
        .to(`${id} .service-desc`, { opacity: 1, y: 0, duration: 1.5 }, "-=1")
        .to(id, {
            opacity: 0,
            y: -100,
            duration: 2,
            onComplete: () => { document.querySelector(id).classList.remove('active'); }
        });
    });

    // Scene 4: How We Work
    mainTl.fromTo("#scene-4", { opacity: 0 }, { 
        opacity: 1, 
        duration: 2,
        onStart: () => { document.querySelector('#scene-4').classList.add('active'); }
    })
    .to("#scene-4 .service-title", { opacity: 1, y: 0, duration: 1 })
    .to("#process-1", { opacity: 1, y: 0, duration: 1 })
    .to("#process-2", { opacity: 1, y: 0, duration: 1 })
    .to("#scene-4", {
        opacity: 0,
        scale: 0.8,
        duration: 2,
        onComplete: () => { document.querySelector('#scene-4').classList.remove('active'); }
    });

    // Scene 5: Why ZyncWeb
    mainTl.fromTo("#scene-5", { opacity: 0 }, { 
        opacity: 1, 
        duration: 2,
        onStart: () => { document.querySelector('#scene-5').classList.add('active'); }
    });
    
    gsap.utils.toArray(".why-line").forEach(line => {
        mainTl.to(line, { opacity: 1, y: 0, duration: 1.5 });
    });

    mainTl.to("#scene-5", {
        opacity: 0,
        duration: 2,
        onComplete: () => { document.querySelector('#scene-5').classList.remove('active'); }
    });

    // Scene 6: Final CTA
    mainTl.fromTo("#scene-cta", { opacity: 0, backgroundColor: "#231F20" }, { 
        opacity: 1, 
        backgroundColor: "#EAEFF3",
        duration: 3,
        onStart: () => { document.querySelector('#scene-cta').classList.add('active'); }
    })
    .to("#scene-cta .headline", { opacity: 1, y: 0, duration: 2 });

});
