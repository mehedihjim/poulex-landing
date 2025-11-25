@php $bn = app()->getLocale() == 'bn'; @endphp

{{-- Hero Section --}}
<section class="hero-section relative overflow-hidden pt-32 md:pt-40 pb-32">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" 
             style="background-image: url('./medias/images/backgrounds/hero-bg.webp');">
        </div>
        {{-- Red Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-red-900/90 via-red-900/85 to-red-800/90"></div>
    </div>

    {{-- Content Container --}}
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            {{-- Left Content --}}
            <div class="text-white space-y-6" data-aos="fade-right">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    {{ __('translation.hero_heading') }}
                </h1>
                <p class="text-lg md:text-xl text-[#f8f8f8]/90 leading-relaxed">
                    {{ __('translation.hero_subheading') }}
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="#" 
                       class="inline-flex items-center px-8 py-3 bg-white text-red-900 rounded-lg font-semibold hover:bg-[#f8f8f8] transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        {{ __('translation.cta_start') }}
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="#join" 
                       class="inline-flex items-center px-8 py-3 bg-transparent text-white border-2 border-white rounded-lg font-semibold hover:bg-white hover:text-red-900 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        {{ __('translation.contact') }}
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Right Mobile Frame --}}
            <div class="flex justify-center items-center" data-aos="fade-left">
                <div class="mobile-frame-container relative">
                    {{-- Mobile Frame --}}
                    <div class="mobile-frame relative w-[280px] h-[570px]">
                        {{-- Frame Border --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[45px] shadow-2xl p-3">
                            {{-- Inner Frame --}}
                            <div class="relative w-full h-full bg-black rounded-[35px] overflow-hidden">
                                {{-- Notch --}}
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-3xl z-20"></div>
                                
                                {{-- Screen Content - Image 1 --}}
                                <div class="mobile-screen absolute inset-0 transition-all duration-700 opacity-100" id="screen-1">
                                    <img src="./medias/images/screenshots/app-screen-1.png" 
                                         alt="App Screenshot 1" 
                                         class="w-full h-full object-cover">
                                </div>
                                
                                {{-- Screen Content - Image 2 --}}
                                <div class="mobile-screen absolute inset-0 transition-all duration-700 opacity-0" id="screen-2">
                                    <img src="./medias/images/screenshots/app-screen-2.png" 
                                         alt="App Screenshot 2" 
                                         class="w-full h-full object-cover">
                                </div>

                                {{-- Screen Overlay Shine Effect --}}
                                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none"></div>
                            </div>
                        </div>

                        {{-- Volume Buttons --}}
                        <div class="absolute left-0 top-32 w-1 h-12 bg-gray-700 rounded-l-lg transform -translate-x-3"></div>
                        <div class="absolute left-0 top-48 w-1 h-12 bg-gray-700 rounded-l-lg transform -translate-x-3"></div>
                        
                        {{-- Power Button --}}
                        <div class="absolute right-0 top-40 w-1 h-16 bg-gray-700 rounded-r-lg transform translate-x-3"></div>
                    </div>

                    {{-- Floating Animation Elements --}}
                    <div class="absolute -top-8 -right-8 w-20 h-20 bg-white/10 rounded-full animate-float-slow"></div>
                    <div class="absolute -bottom-6 -left-6 w-16 h-16 bg-white/10 rounded-full animate-float-fast"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Layered Bottom Shapes --}}
    <div class="absolute bottom-0 left-0 right-0 z-5">
        {{-- Layer 1 - Back --}}
        <svg class="absolute bottom-0 w-full h-24 md:h-32" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 60L60 55C120 50 240 40 360 45C480 50 600 70 720 75C840 80 960 70 1080 60C1200 50 1320 40 1380 35L1440 30V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V60Z" 
                  fill="rgba(127, 29, 29, 0.3)"/>
        </svg>
        
        {{-- Layer 2 - Middle --}}
        <svg class="absolute bottom-0 w-full h-20 md:h-28" viewBox="0 0 1440 100" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 40L48 45C96 50 192 60 288 58C384 56 480 42 576 38C672 34 768 40 864 48C960 56 1056 66 1152 66C1248 66 1344 56 1392 51L1440 46V100H1392C1344 100 1248 100 1152 100C1056 100 960 100 864 100C768 100 672 100 576 100C480 100 384 100 288 100C192 100 96 100 48 100H0V40Z" 
                  fill="rgba(185, 28, 28, 0.5)"/>
        </svg>
        
        {{-- Layer 3 - Front --}}
        <svg class="absolute bottom-0 w-full h-16 md:h-24" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 30L40 35C80 40 160 50 240 53C320 56 400 52 480 45C560 38 640 28 720 25C800 22 880 26 960 32C1040 38 1120 46 1200 48C1280 50 1360 46 1400 44L1440 42V80H1400C1360 80 1280 80 1200 80C1120 80 1040 80 960 80C880 80 800 80 720 80C640 80 560 80 480 80C400 80 320 80 240 80C160 80 80 80 40 80H0V30Z" 
                  fill="#f8f8f8"/>
        </svg>
    </div>
</section>

<style>
    /* Floating animations */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    @keyframes float-fast {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-15px) rotate(-180deg); }
    }

    .animate-float-slow {
        animation: float-slow 6s ease-in-out infinite;
    }

    .animate-float-fast {
        animation: float-fast 4s ease-in-out infinite;
    }

    /* Mobile frame flip animation */
    @keyframes flip-out {
        0% { transform: rotateY(0deg); opacity: 1; }
        100% { transform: rotateY(90deg); opacity: 0; }
    }

    @keyframes flip-in {
        0% { transform: rotateY(-90deg); opacity: 0; }
        100% { transform: rotateY(0deg); opacity: 1; }
    }

    .mobile-screen.flip-out {
        animation: flip-out 0.35s ease-in forwards;
    }

    .mobile-screen.flip-in {
        animation: flip-in 0.35s ease-out forwards;
    }

    /* Ensure proper 3D perspective */
    .mobile-frame {
        perspective: 1000px;
    }

    .mobile-screen {
        transform-style: preserve-3d;
        backface-visibility: hidden;
    }
</style>

<script>
    // Mobile screen flip animation
    let currentScreen = 1;
    const totalScreens = 2;

    function flipScreens() {
        const currentElement = document.getElementById(`screen-${currentScreen}`);
        const nextScreen = currentScreen === totalScreens ? 1 : currentScreen + 1;
        const nextElement = document.getElementById(`screen-${nextScreen}`);

        // Add flip-out animation to current screen
        currentElement.classList.add('flip-out');

        setTimeout(() => {
            // Hide current screen
            currentElement.style.opacity = '0';
            currentElement.classList.remove('flip-out');
            currentElement.style.transform = 'rotateY(-90deg)';

            // Show and animate next screen
            nextElement.style.opacity = '1';
            nextElement.classList.add('flip-in');

            setTimeout(() => {
                nextElement.classList.remove('flip-in');
                nextElement.style.transform = 'rotateY(0deg)';
            }, 350);

            currentScreen = nextScreen;
        }, 350);
    }

    // Auto-flip every 4 seconds
    setInterval(flipScreens, 4000);
</script>