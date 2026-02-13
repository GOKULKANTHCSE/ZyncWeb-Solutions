<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ZyncWeb Solutions | Digital Transformation')</title>
    <meta name="description" content="ZyncWeb Solutions - Salem's premier web development and design agency. We transform businesses with modern digital solutions.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/SVG/logo.svg') }}">

    <!-- Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/light.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dark.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tech-3d.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Theme Enforcement: Dark Futuristic Corporate -->
    <script>
        document.documentElement.setAttribute('data-theme', 'dark');
    </script>

    @yield('styles')
</head>
<body>
    <!-- Three.js Background -->
    <canvas id="bg-canvas" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none; opacity: 0.6;"></canvas>

    @include('components.navbar')

    <main id="smooth-wrapper">
        <div id="smooth-content">
            @yield('content')
            
            @include('components.footer')
        </div>
    </main>

    <!-- Fixed Widgets -->
    <div class="fixed-widgets">
        <a href="#" id="back-to-top" class="widget-btn back-to-top btn-magnetic" title="Back to Top">
            <i class="fas fa-arrow-up"></i>
        </a>
        <a href="https://wa.me/919876543210" target="_blank" class="widget-btn whatsapp-btn btn-magnetic" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Scripts -->
    <!-- GSAP Core & ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Motion Logic -->
    <script src="{{ asset('js/motion.js') }}"></script>
    <script src="{{ asset('js/hero-scene.js') }}"></script>

    @yield('scripts')
</body>
</html>
