<header class="main-header glass-nav" id="main-header" style="background: rgba(11, 16, 38, 0.1); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(255,255,255,0.05);">
    <div class="container header-container" style="display: flex; align-items: center; justify-content: space-between; padding: 1.5rem 0; position: relative;">
        <div class="logo">
            <a href="{{ route('home') }}" style="text-decoration: none;">
                <img src="{{ asset('img/SVG/White.svg') }}" alt="ZyncWeb Solutions" class="show-dark" style="height: 50px; width: auto;">
                <img src="{{ asset('img/SVG/Black.svg') }}" alt="ZyncWeb Solutions" class="show-light" style="height: 50px; width: auto;">
            </a>
        </div>
        <nav class="nav-menu" style="display: flex; gap: 2rem; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
            <a href="{{ route('home') }}" class="hover-underline-tech {{ request()->routeIs('home') ? 'active-nav' : '' }}" style="color: {{ request()->routeIs('home') ? '#fff' : 'rgba(255,255,255,0.75)' }};">Home</a>
            <a href="{{ route('about') }}" class="hover-underline-tech {{ request()->routeIs('about') ? 'active-nav' : '' }}" style="color: {{ request()->routeIs('about') ? '#fff' : 'rgba(255,255,255,0.75)' }};">About</a>
            <a href="{{ route('services.index') }}" class="hover-underline-tech {{ request()->routeIs('services.*') ? 'active-nav' : '' }}" style="color: {{ request()->routeIs('services.*') ? '#fff' : 'rgba(255,255,255,0.75)' }};">Services</a>
            <a href="{{ route('projects.index') }}" class="hover-underline-tech {{ request()->routeIs('projects.*') ? 'active-nav' : '' }}" style="color: {{ request()->routeIs('projects.*') ? '#fff' : 'rgba(255,255,255,0.75)' }};">Projects</a>
            <a href="{{ route('contact') }}" class="hover-underline-tech {{ request()->routeIs('contact') ? 'active-nav' : '' }}" style="color: {{ request()->routeIs('contact') ? '#fff' : 'rgba(255,255,255,0.75)' }};">Contact</a>
        </nav>
        <div class="header-cta pc-only">
            <a href="{{ route('contact') }}" class="btn-tech-primary" style="background: rgba(140, 82, 255, 0.2); border: 1px solid rgba(140, 82, 255, 0.5); color: #fff; padding: 0.8rem 1.5rem; border-radius: 4px; text-decoration: none; transition: all 0.3s ease;">
                Schedule Consultation
            </a>
        </div>
    </div>
</header>
