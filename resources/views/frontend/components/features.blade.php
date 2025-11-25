@php $bn = app()->getLocale() == 'bn'; @endphp

{{-- Features/Solutions Section --}}
<section class="features-section relative bg-white py-20 md:py-28" id="features">
    <div class="container mx-auto px-6 relative z-10">
        {{-- Section Title --}}
        <div class="text-center mb-12" data-aos="fade-down">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                {{ __('translation.our') }}
                <span class="relative inline-block mx-2">
                    <span class="relative z-10"> {{ __('translation.solutions') }}
                    </span>
                    {{-- Animated underline/highlight --}}
                    <span class="absolute bottom-1 left-0 w-full h-3 bg-red-900/30 -skew-x-12 animate-highlight"></span>
                    <span class="absolute bottom-0 left-0 w-0 h-1 bg-red-900 animate-underline"></span>
                </span>
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                {{ __('translation.solutions_subtitle') }}
            </p>
        </div>

        {{-- Tab Pills Navigation --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up">
            <button data-tab="1"
                class="tab-pill active px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 bg-red-900 text-white shadow-lg">
                {{ __('translation.solution_feed_title') }}
            </button>
            <button data-tab="2"
                class="tab-pill px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200">
                {{ __('translation.solution_vaccine_title') }}
            </button>
            <button data-tab="3"
                class="tab-pill px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200">
                {{ __('translation.solution_iot_title') }}
            </button>
            <button data-tab="4"
                class="tab-pill px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200">
                {{ __('translation.solution_automation_title') }}
            </button>
            <button data-tab="5"
                class="tab-pill px-5 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 bg-gray-100 text-gray-700 hover:bg-gray-200">
                {{ __('translation.solution_shop_title') }}
            </button>
        </div>

        {{-- Tab Content Areas --}}
        <div class="relative min-h-[500px]">
            {{-- Tab 1: Feed & Nutrition (Phone LEFT, Content RIGHT) --}}
            <div id="tab-content-1" class="tab-content active">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    {{-- Phone Frame LEFT --}}
                    <div class="flex justify-center" data-aos="fade-right">
                        <div class="mobile-frame relative w-[280px] h-[570px]">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[45px] shadow-2xl p-3">
                                <div class="relative w-full h-full bg-black rounded-[35px] overflow-hidden">
                                    <div
                                        class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-3xl z-20">
                                    </div>
                                    <img src="./medias/images/solutions/feed-nutrition.jpg" alt="Feed & Nutrition"
                                        class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Content RIGHT --}}
                    <div class="space-y-6" data-aos="fade-left">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">
                            {{ __('translation.solution_feed_title') }}
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_feed_point1') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_feed_point2') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_feed_point3') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_feed_point4') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_feed_point5') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Tab 2: Vaccination (Phone RIGHT, Content LEFT) --}}
            <div id="tab-content-2" class="tab-content hidden">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    {{-- Content LEFT --}}
                    <div class="space-y-6 order-2 md:order-1" data-aos="fade-right">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">
                            {{ __('translation.solution_vaccine_title') }}
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_vaccine_point1') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_vaccine_point2') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_vaccine_point3') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_vaccine_point4') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_vaccine_point5') }}</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Phone Frame RIGHT --}}
                    <div class="flex justify-center order-1 md:order-2" data-aos="fade-left">
                        <div class="mobile-frame relative w-[280px] h-[570px]">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[45px] shadow-2xl p-3">
                                <div class="relative w-full h-full bg-black rounded-[35px] overflow-hidden">
                                    <div
                                        class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-3xl z-20">
                                    </div>
                                    <img src="./medias/images/solutions/vaccination.jpg" alt="Vaccination & Medicine"
                                        class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab 3: IoT + Analytics (Phone LEFT, Content RIGHT) --}}
            <div id="tab-content-3" class="tab-content hidden">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    {{-- Phone Frame LEFT --}}
                    <div class="flex justify-center" data-aos="fade-right">
                        <div class="mobile-frame relative w-[280px] h-[570px]">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[45px] shadow-2xl p-3">
                                <div class="relative w-full h-full bg-black rounded-[35px] overflow-hidden">
                                    <div
                                        class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-3xl z-20">
                                    </div>
                                    <img src="./medias/images/solutions/iot-analytics.jpg" alt="IoT + Analytics"
                                        class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Content RIGHT --}}
                    <div class="space-y-6" data-aos="fade-left">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">
                            {{ __('translation.solution_iot_title') }}
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_iot_point1') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_iot_point2') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_iot_point3') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-gray-700 text-lg">{{ __('translation.solution_iot_point4') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Tab 4: Automation (Phone RIGHT, Content LEFT) --}}
            <div id="tab-content-4" class="tab-content hidden">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    {{-- Content LEFT --}}
                    <div class="space-y-6 order-2 md:order-1" data-aos="fade-right">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">
                            {{ __('translation.solution_automation_title') }}
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_automation_point1') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_automation_point2') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_automation_point3') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_automation_point4') }}</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Phone Frame RIGHT --}}
                    <div class="flex justify-center order-1 md:order-2" data-aos="fade-left">
                        <div class="mobile-frame relative w-[280px] h-[570px]">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[45px] shadow-2xl p-3">
                                <div class="relative w-full h-full bg-black rounded-[35px] overflow-hidden">
                                    <div
                                        class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-3xl z-20">
                                    </div>
                                    <img src="./medias/images/solutions/automation.jpg"
                                        alt="Automation & Traceability" class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tab 5: Shop (Phone LEFT, Content RIGHT) --}}
            <div id="tab-content-5" class="tab-content hidden">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    {{-- Phone Frame LEFT --}}
                    <div class="flex justify-center" data-aos="fade-right">
                        <div class="mobile-frame relative w-[280px] h-[570px]">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 rounded-[45px] shadow-2xl p-3">
                                <div class="relative w-full h-full bg-black rounded-[35px] overflow-hidden">
                                    <div
                                        class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-black rounded-b-3xl z-20">
                                    </div>
                                    <img src="./medias/images/solutions/shop.jpg" alt="Shop"
                                        class="w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent pointer-events-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Content RIGHT --}}
                    <div class="space-y-6" data-aos="fade-left">
                        <h3 class="text-3xl md:text-4xl font-bold text-gray-900">
                            {{ __('translation.solution_shop_title') }}
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_shop_point1') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_shop_point2') }}</span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <svg class="w-6 h-6 text-red-900 flex-shrink-0 mt-1" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span
                                    class="text-gray-700 text-lg">{{ __('translation.solution_shop_point3') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Single CTA Button Outside Tabs --}}
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="#"
                class="inline-flex items-center px-10 py-4 bg-red-900 text-white rounded-lg font-semibold text-lg hover:bg-red-800 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                {{ __('translation.upgrade_farm') }}
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>

    {{-- Wave Bottom with Shadow --}}
    <div class="absolute bottom-0 left-0 right-0">
        {{-- Shadow above wave --}}
        <div class="absolute bottom-0 left-0 right-0 h-20 z-10"></div>

        {{-- Wave Shape --}}
        <svg class="relative w-full h-24 md:h-32" viewBox="0 0 1440 120" fill="none"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 45C240 45 240 75 480 75C720 75 720 45 960 45C1200 45 1200 75 1440 75V120H0V45Z" fill="#f8f8f8"
                filter="" />
        </svg>
    </div>
</section>

<style>
    /* Tab Pills */
    .tab-pill {
        cursor: pointer;
    }

    .tab-pill.active {
        background: linear-gradient(135deg, #7f1d1d 0%, #991b1b 100%);
        color: white;
        box-shadow: 0 4px 15px rgba(127, 29, 29, 0.3);
    }

    /* Tab Content */
    .tab-content {
        opacity: 0;
        animation: fadeIn 0.5s ease-in-out forwards;
    }

    .tab-content.hidden {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile Frame */
    .mobile-frame {
        perspective: 1000px;
    }
</style>

<script>
    // Tab switching functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabPills = document.querySelectorAll('.tab-pill');
        const tabContents = document.querySelectorAll('.tab-content');

        tabPills.forEach(pill => {
            pill.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');

                // Remove active class from all pills
                tabPills.forEach(p => {
                    p.classList.remove('active');
                    p.classList.add('bg-gray-100', 'text-gray-700',
                        'hover:bg-gray-200');
                    p.classList.remove('bg-red-900', 'text-white', 'shadow-lg');
                });

                // Add active class to clicked pill
                this.classList.add('active');
                this.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
                this.classList.add('bg-red-900', 'text-white', 'shadow-lg');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    content.classList.add('hidden');
                });

                // Show selected tab content
                const selectedContent = document.getElementById(`tab-content-${tabId}`);
                if (selectedContent) {
                    selectedContent.classList.remove('hidden');
                    selectedContent.classList.add('active');
                }
            });
        });
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
