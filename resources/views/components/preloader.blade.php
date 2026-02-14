<div id="zync-preloader" class="zync-preloader">
    <div class="preloader-content">
        <div class="logo-wrapper">
            <!-- Wireframe Logo (Stroke Only) -->
            <svg class="logo-svg wireframe" viewBox="0 0 360 360" xmlns="http://www.w3.org/2000/svg">
                <g class="logo-paths">
                    <path d="M83.45,359.89l-76.19.11c-5.51-.02-9.02-4.19-6.34-7.53C40.83,302.87,248.06,39.57,275.42,3.88c1.89-2.47,5.59-3.96,9.61-3.88h68.11c5.37.1,8.5,5.45,5.96,8.75-39.04,50.83-239.03,308.24-266.95,348.65-1.81,2.62-4.52,2.56-8.7,2.48Z"/>
                    <path d="M359.96,353.08c-.23,3.12.48,6.92-3.51,6.92-23.94,0-168.79,0-196.05,0-.46,0-.58-.97-.27-1.2,28.13-21.18,89.57-27.19,122.75-37.54,12.83-4,22.95-11.96,27.95-22.03,13.55-27.3,20.56-96.36,44.8-110.79,1.38-.82,4.33.18,4.33,1.79,0,52.94,0,162.72,0,162.84Z"/>
                    <path d="M0,6.92C.23,3.8-.48,0,3.51,0c23.94,0,168.79,0,196.05,0,.46,0,.58.97.27,1.2-28.13,21.18-89.57,27.19-122.75,37.54-12.83,4-22.95,11.96-27.95,22.03-13.55,27.3-20.56,96.36-44.8,110.79-1.38.82,4.33-.18-4.33-1.79,0-52.94,0-162.72,0-162.84Z"/>
                </g>
            </svg>

            <!-- Filled Logo (Hidden by Mask) -->
            <svg class="logo-svg filled" viewBox="0 0 360 360" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="preloader-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#3FBFB8;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#255BA9;stop-opacity:1" />
                    </linearGradient>
                    <mask id="scan-mask">
                        <rect class="mask-rect" x="0" y="-100%" width="100%" height="100%" fill="white" />
                    </mask>
                </defs>
                <g class="logo-paths" mask="url(#scan-mask)">
                    <path fill="url(#preloader-grad)" d="M83.45,359.89l-76.19.11c-5.51-.02-9.02-4.19-6.34-7.53C40.83,302.87,248.06,39.57,275.42,3.88c1.89-2.47,5.59-3.96,9.61-3.88h68.11c5.37.1,8.5,5.45,5.96,8.75-39.04,50.83-239.03,308.24-266.95,348.65-1.81,2.62-4.52,2.56-8.7,2.48Z"/>
                    <path fill="url(#preloader-grad)" d="M359.96,353.08c-.23,3.12.48,6.92-3.51,6.92-23.94,0-168.79,0-196.05,0-.46,0-.58-.97-.27-1.2,28.13-21.18,89.57-27.19,122.75-37.54,12.83-4,22.95-11.96,27.95-22.03,13.55-27.3,20.56-96.36,44.8-110.79,1.38-.82,4.33.18,4.33,1.79,0,52.94,0,162.72,0,162.84Z"/>
                    <path fill="url(#preloader-grad)" d="M0,6.92C.23,3.8-.48,0,3.51,0c23.94,0,168.79,0,196.05,0,.46,0,.58.97.27,1.2-28.13,21.18-89.57,27.19-122.75,37.54-12.83,4-22.95,11.96-27.95,22.03-13.55,27.3-20.56,96.36-44.8,110.79-1.38.82,4.33-.18-4.33-1.79,0-52.94,0-162.72,0-162.84Z"/>
                </g>
            </svg>

            <!-- Scan Line -->
            <div class="scan-line"></div>
        </div>
    </div>
</div>

<style>
    :root {
        --color-primary: #255BA9;
        --color-accent: #3FBFB8;
        --color-dark: #231F20;
        --color-light: #EAEFF3;
    }

    .zync-preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: var(--color-dark);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.6s ease, visibility 0.6s;
    }

    /* Support for Light Mode if needed */
    [data-theme="light"] .zync-preloader {
        background-color: var(--color-light);
    }

    .preloader-content {
        position: relative;
        width: 200px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .logo-svg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .logo-svg.wireframe {
        fill: none;
        stroke: var(--color-primary);
        stroke-width: 1px;
        opacity: 0.3;
        animation: pulse-wireframe 2s infinite ease-in-out;
    }

    .logo-svg.filled {
        filter: drop-shadow(0 0 10px rgba(63, 191, 184, 0.3));
    }

    .scan-line {
        position: absolute;
        top: 0;
        left: -10%;
        width: 120%;
        height: 3px;
        background: linear-gradient(90deg, 
            transparent 0%, 
            var(--color-accent) 50%, 
            transparent 100%
        );
        box-shadow: 0 0 15px var(--color-accent), 0 0 5px #fff;
        z-index: 10;
        pointer-events: none;
        animation: scan-move 1.5s linear forwards;
        opacity: 0;
    }

    .mask-rect {
        animation: mask-reveal 1.5s linear forwards;
    }

    @keyframes scan-move {
        0% { top: 0; opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { top: 100%; opacity: 0; }
    }

    @keyframes mask-reveal {
        0% { y: -100%; }
        100% { y: 0; }
    }

    @keyframes pulse-wireframe {
        0%, 100% { opacity: 0.2; }
        50% { opacity: 0.5; }
    }

    /* Exit Animation Class */
    .zync-preloader.exit {
        opacity: 0;
        visibility: hidden;
        transform: scale(0.95);
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const preloader = document.getElementById('zync-preloader');
        
        // Lock scroll
        document.body.style.overflow = 'hidden';

        setTimeout(() => {
            preloader.classList.add('exit');
            
            // Re-enable scroll
            document.body.style.overflow = '';

            // Remove from DOM after transition
            setTimeout(() => {
                preloader.remove();
            }, 600);
        }, 2200); // Animation duration (1.5s) + buffer
    });
</script>
