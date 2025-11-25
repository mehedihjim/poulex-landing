@php $bn = app()->getLocale() == 'bn'; @endphp

{{-- How It Works Section --}}
<section class="process-section relative bg-[#f8f8f8] py-20 md:py-28 overflow-hidden" id="use-cases">
    <div class="container mx-auto px-6 relative z-10">
        {{-- Section Title --}}
        <div class="text-center mb-20" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 inline-block">
                How
                <span class="relative inline-block mx-2">
                    <span class="relative z-10">Poulex</span>
                    {{-- Animated highlight --}}
                    <span class="absolute bottom-1 left-0 w-full h-3 bg-red-900/30 -skew-x-12 animate-highlight"></span>
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-red-900 animate-underline"></span>
                </span>
                Works
            </h2>
            <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto">
                {{ __('translation.process_subtitle') }}
            </p>
        </div>

        {{-- Timeline Container --}}
        <div class="relative max-w-5xl mx-auto">
            {{-- Animated Timeline Line (stops at last step) --}}
            <div class="absolute left-12 md:left-20 top-0 w-1 bg-gray-300" style="height: calc(100% - 160px);">
                <div id="timeline-progress"
                    class="absolute top-0 left-0 w-full bg-gradient-to-b from-red-900 to-red-700 transition-all duration-500 ease-out"
                    style="height: 0%;"></div>
            </div>

            {{-- Step 1: Sign Up & Farm Registration --}}
            <div class="process-step relative mb-16 md:mb-20" data-step="1">
                <div class="flex items-start">
                    {{-- Number Badge with Image --}}
                    <div class="flex-shrink-0 relative z-10">
                        <div
                            class="w-32 h-32 md:w-40 md:h-40 bg-white rounded-full flex items-center justify-center shadow-xl border-4 border-red-900 step-badge overflow-hidden">
                            <img src="./medias/images/process/step-1.png" alt="Sign Up"
                                class="w-20 h-20 md:w-24 md:h-24 object-contain">
                        </div>
                        {{-- Large Step Number --}}
                        <div
                            class="absolute -bottom-2 -right-2 w-12 h-12 bg-red-900 rounded-full flex items-center justify-center shadow-lg">
                            <span class="text-white font-bold text-xl">01</span>
                        </div>
                    </div>

                    {{-- Content Card --}}
                    <div
                        class="ml-8 md:ml-12 flex-1 bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900">
                                {{ __('translation.process_step1_title') }}
                            </h3>
                            <span class="text-red-900/10 font-bold text-7xl leading-none">01</span>
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            {{ __('translation.process_step1_desc') }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Step 2: Deploy Solution --}}
            <div class="process-step relative mb-16 md:mb-20" data-step="2">
                <div class="flex items-start">
                    {{-- Number Badge with Image --}}
                    <div class="flex-shrink-0 relative z-10">
                        <div
                            class="w-32 h-32 md:w-40 md:h-40 bg-white rounded-full flex items-center justify-center shadow-xl border-4 border-gray-300 step-badge overflow-hidden">
                            <img src="./medias/images/process/step-2.png" alt="Deploy Solution"
                                class="w-20 h-20 md:w-24 md:h-24 object-contain grayscale opacity-50">
                        </div>
                        {{-- Large Step Number --}}
                        <div
                            class="absolute -bottom-2 -right-2 w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center shadow-lg step-number">
                            <span class="text-white font-bold text-xl">02</span>
                        </div>
                    </div>

                    {{-- Content Card --}}
                    <div
                        class="ml-8 md:ml-12 flex-1 bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900">
                                {{ __('translation.process_step2_title') }}
                            </h3>
                            <span class="text-red-900/10 font-bold text-7xl leading-none">02</span>
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            {{ __('translation.process_step2_desc') }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Step 3: Monitor & Optimize --}}
            <div class="process-step relative mb-16 md:mb-20" data-step="3">
                <div class="flex items-start">
                    {{-- Number Badge with Image --}}
                    <div class="flex-shrink-0 relative z-10">
                        <div
                            class="w-32 h-32 md:w-40 md:h-40 bg-white rounded-full flex items-center justify-center shadow-xl border-4 border-gray-300 step-badge overflow-hidden">
                            <img src="./medias/images/process/step-3.png" alt="Monitor & Optimize"
                                class="w-20 h-20 md:w-24 md:h-24 object-contain grayscale opacity-50">
                        </div>
                        {{-- Large Step Number --}}
                        <div
                            class="absolute -bottom-2 -right-2 w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center shadow-lg step-number">
                            <span class="text-white font-bold text-xl">03</span>
                        </div>
                    </div>

                    {{-- Content Card --}}
                    <div
                        class="ml-8 md:ml-12 flex-1 bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900">
                                {{ __('translation.process_step3_title') }}
                            </h3>
                            <span class="text-red-900/10 font-bold text-7xl leading-none">03</span>
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            {{ __('translation.process_step3_desc') }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Step 4: Grow with Confidence --}}
            <div class="process-step relative" data-step="4">
                <div class="flex items-start">
                    {{-- Number Badge with Image --}}
                    <div class="flex-shrink-0 relative z-10">
                        <div
                            class="w-32 h-32 md:w-40 md:h-40 bg-white rounded-full flex items-center justify-center shadow-xl border-4 border-gray-300 step-badge overflow-hidden">
                            <img src="./medias/images/process/step-4.png" alt="Grow with Confidence"
                                class="w-20 h-20 md:w-24 md:h-24 object-contain grayscale opacity-50">
                        </div>
                        {{-- Large Step Number --}}
                        <div
                            class="absolute -bottom-2 -right-2 w-12 h-12 bg-gray-400 rounded-full flex items-center justify-center shadow-lg step-number">
                            <span class="text-white font-bold text-xl">04</span>
                        </div>
                    </div>

                    {{-- Content Card --}}
                    <div
                        class="ml-8 md:ml-12 flex-1 bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900">
                                {{ __('translation.process_step4_title') }}
                            </h3>
                            <span class="text-red-900/10 font-bold text-7xl leading-none">04</span>
                        </div>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            {{ __('translation.process_step4_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA Button --}}
        <div class="text-center mt-16" data-aos="fade-up">
            <a href="#"
                class="inline-flex items-center px-10 py-4 bg-red-900 text-white rounded-lg font-semibold text-lg hover:bg-red-800 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                {{ __('translation.get_started') }}
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<style>
    /* Animated highlight and underline */
    @keyframes highlight {
        0% {
            width: 0%;
            opacity: 0;
        }

        50% {
            width: 100%;
            opacity: 1;
        }

        100% {
            width: 100%;
            opacity: 1;
        }
    }

    @keyframes underline {
        0% {
            width: 0%;
        }

        100% {
            width: 100%;
        }
    }

    .animate-highlight {
        animation: highlight 1.5s ease-out forwards;
        animation-delay: 0.3s;
        width: 0%;
    }

    .animate-underline {
        animation: underline 1s ease-out forwards;
        animation-delay: 1.5s;
    }

    /* Step badge transition */
    .step-badge {
        transition: all 0.6s ease;
    }

    .step-badge.active {
        border-color: #7f1d1d !important;
        transform: scale(1.05);
    }

    .step-badge.active img {
        filter: grayscale(0%) !important;
        opacity: 1 !important;
    }

    .step-number {
        transition: all 0.6s ease;
    }

    .step-badge.active+.step-number,
    .step-badge.active~* .step-number {
        background-color: #7f1d1d !important;
    }

    /* Fix for step number positioning */
    .step-badge.active~.absolute.step-number {
        background-color: #7f1d1d !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const timelineProgress = document.getElementById('timeline-progress');
        const processSteps = document.querySelectorAll('.process-step');

        function updateTimeline() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;

            // Trigger animation earlier - when step is 70% into viewport
            const triggerPoint = windowHeight * 0.7;

            processSteps.forEach((step, index) => {
                const stepRect = step.getBoundingClientRect();

                // Check if step is in viewport (more aggressive triggering)
                if (stepRect.top < triggerPoint) {
                    const badge = step.querySelector('.step-badge');
                    const stepNumber = step.querySelector('.step-number');

                    badge.classList.add('active');
                    if (stepNumber) {
                        stepNumber.style.backgroundColor = '#7f1d1d';
                    }

                    // Calculate progress based on active steps
                    const activeSteps = index + 1;
                    const progressPercentage = (activeSteps / processSteps.length) * 100;
                    timelineProgress.style.height = Math.min(progressPercentage, 100) + '%';
                }
            });
        }

        // Initial check
        updateTimeline();

        // Update on scroll with throttle for performance
        let ticking = false;
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    updateTimeline();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Update on resize
        window.addEventListener('resize', updateTimeline);
    });

    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 600,
            once: true,
            offset: 100
        });
    }
</script>
