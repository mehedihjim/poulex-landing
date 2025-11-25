@php $bn = app()->getLocale() == 'bn'; @endphp

{{-- Why Poulex Section --}}
<section class="why-poulex-section relative bg-[#f8f8f8] pt-14 pb-20 md:pb-28 md:pt-20" id="whyUs">
    {{-- Inner Bottom Shadow --}}
    <div class="absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-black/5 to-transparent pointer-events-none">
    </div>

    <div class="container mx-auto px-6 relative z-10">
        {{-- Section Title with Animated Highlight --}}
        <div class="text-center mb-16" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 inline-block">
                Why
                <span class="relative inline-block mx-2">
                    <span class="relative z-10">Poulex</span>
                    {{-- Animated underline/highlight --}}
                    <span class="absolute bottom-1 left-0 w-full h-3 bg-red-900/30 -skew-x-12 animate-highlight"></span>
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-red-900 animate-underline"></span>
                </span>
                ?
            </h2>
            <p class="text-gray-600 mt-4 text-lg">{{ __('translation.why_poulex_subtitle') }}</p>
        </div>

        {{-- Content Grid --}}
        <div class="grid md:grid-cols-2 gap-12 items-center">
            {{-- Left Image with Diagonal Shape --}}
            <div class="order-2 md:order-1" data-aos="fade-right">
                <div class="relative group">
                    {{-- Diagonal Shaped Image Container --}}
                    <div class="diagonal-image-wrapper relative overflow-hidden">
                        <img src="./medias/images/about-poulex.webp" alt="Why Poulex"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">

                        {{-- Overlay Gradient --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-red-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                    </div>

                    {{-- Decorative Elements --}}
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-red-900/10 rounded-full -z-10"></div>
                    <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-red-900/10 rounded-full -z-10"></div>
                </div>
            </div>

            {{-- Right Content Boxes --}}
            <div class="order-1 md:order-2 space-y-5" data-aos="fade-left">
                {{-- Box 1: Integrated Farm Management --}}
                <div
                    class="value-box group relative bg-gradient-to-r from-white to-red-50/30 rounded-xl p-6 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    {{-- Decorative corner --}}
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-red-900/5 rounded-bl-full transform translate-x-4 -translate-y-4">
                    </div>

                    <div class="flex items-start space-x-5 relative z-10">
                        {{-- Number Badge --}}
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-red-900 text-white rounded-lg flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            01
                        </div>

                        {{-- Content --}}
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-3">
                                {{-- Icon --}}
                                <div
                                    class="w-10 h-10 bg-red-900/10 rounded-lg flex items-center justify-center group-hover:bg-red-900 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-red-900 group-hover:text-white transition-colors duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    {{ __('translation.value_integrated_title') }}
                                </h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                {{ __('translation.value_integrated_text') }}
                            </p>
                        </div>
                    </div>

                    {{-- Hover line effect --}}
                    <div
                        class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-red-900 to-red-700 group-hover:w-full transition-all duration-500">
                    </div>
                </div>

                {{-- Box 2: Digital Analytics & IoT --}}
                <div
                    class="value-box group relative bg-gradient-to-r from-white to-red-50/30 rounded-xl p-6 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    {{-- Decorative corner --}}
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-red-900/5 rounded-bl-full transform translate-x-4 -translate-y-4">
                    </div>

                    <div class="flex items-start space-x-5 relative z-10">
                        {{-- Number Badge --}}
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-red-900 text-white rounded-lg flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            02
                        </div>

                        {{-- Content --}}
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-3">
                                {{-- Icon --}}
                                <div
                                    class="w-10 h-10 bg-red-900/10 rounded-lg flex items-center justify-center group-hover:bg-red-900 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-red-900 group-hover:text-white transition-colors duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    {{ __('translation.value_analytics_title') }}
                                </h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                {{ __('translation.value_analytics_text') }}
                            </p>
                        </div>
                    </div>

                    {{-- Hover line effect --}}
                    <div
                        class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-red-900 to-red-700 group-hover:w-full transition-all duration-500">
                    </div>
                </div>

                {{-- Box 3: End-to-End Services --}}
                <div
                    class="value-box group relative bg-gradient-to-r from-white to-red-50/30 rounded-xl p-6 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    {{-- Decorative corner --}}
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-red-900/5 rounded-bl-full transform translate-x-4 -translate-y-4">
                    </div>

                    <div class="flex items-start space-x-5 relative z-10">
                        {{-- Number Badge --}}
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-red-900 text-white rounded-lg flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            03
                        </div>

                        {{-- Content --}}
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-3">
                                {{-- Icon --}}
                                <div
                                    class="w-10 h-10 bg-red-900/10 rounded-lg flex items-center justify-center group-hover:bg-red-900 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-red-900 group-hover:text-white transition-colors duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    {{ __('translation.value_endtoend_title') }}
                                </h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                {{ __('translation.value_endtoend_text') }}
                            </p>
                        </div>
                    </div>

                    {{-- Hover line effect --}}
                    <div
                        class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-red-900 to-red-700 group-hover:w-full transition-all duration-500">
                    </div>
                </div>

                {{-- Box 4: Tailored for Bangladesh --}}
                <div
                    class="value-box group relative bg-gradient-to-r from-white to-red-50/30 rounded-xl p-6 shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden">
                    {{-- Decorative corner --}}
                    <div
                        class="absolute top-0 right-0 w-20 h-20 bg-red-900/5 rounded-bl-full transform translate-x-4 -translate-y-4">
                    </div>

                    <div class="flex items-start space-x-5 relative z-10">
                        {{-- Number Badge --}}
                        <div
                            class="flex-shrink-0 w-12 h-12 bg-red-900 text-white rounded-lg flex items-center justify-center font-bold text-xl shadow-lg group-hover:scale-110 transition-transform duration-300">
                            04
                        </div>

                        {{-- Content --}}
                        <div class="flex-1">
                            <div class="flex items-center space-x-3 mb-3">
                                {{-- Icon --}}
                                <div
                                    class="w-10 h-10 bg-red-900/10 rounded-lg flex items-center justify-center group-hover:bg-red-900 transition-colors duration-300">
                                    <svg class="w-6 h-6 text-red-900 group-hover:text-white transition-colors duration-300"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">
                                    {{ __('translation.value_bangladesh_title') }}
                                </h3>
                            </div>
                            <p class="text-gray-600 leading-relaxed">
                                {{ __('translation.value_bangladesh_text') }}
                            </p>
                        </div>
                    </div>

                    {{-- Hover line effect --}}
                    <div
                        class="absolute bottom-0 left-0 w-0 h-1 bg-gradient-to-r from-red-900 to-red-700 group-hover:w-full transition-all duration-500">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Diagonal shaped image */
    .diagonal-image-wrapper {
        position: relative;
        width: 100%;
        padding-bottom: 120%;
        /* Aspect ratio */
        clip-path: polygon(8% 0%, 100% 0%, 92% 100%, 0% 100%);
        box-shadow: 0 20px 50px rgba(127, 29, 29, 0.15);
    }

    .diagonal-image-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Value box hover effects */
    .value-box {
        transform: translateY(0);
    }

    .value-box:hover {
        transform: translateY(-5px);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .diagonal-image-wrapper {
            padding-bottom: 100%;
            clip-path: polygon(5% 0%, 100% 0%, 95% 100%, 0% 100%);
        }
    }
</style>

<script>
    // Add animation on scroll if AOS is available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    }
</script>
