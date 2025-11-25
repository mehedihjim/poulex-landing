{{-- Success Stories Section --}}
<section class="success-stories-section relative overflow-hidden py-20 md:py-28">
    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style="background-image: url('./medias/images/backgrounds/testimonial-bg.webp');">
        </div>
        {{-- Dark Red Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-red-900/90 via-red-900/85 to-red-800/90"></div>
    </div>

    {{-- Content Container --}}
    <div class="container mx-auto px-6 relative z-10">
        {{-- Section Title --}}
        <div class="text-center mb-12 md:mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
                {{ __('translation.success_stories_title') }}
            </h2>
            <p class="text-lg text-white/90">
                {{ __('translation.success_stories_subtitle') }}
            </p>
        </div>

        {{-- Testimonial Cards --}}
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            {{-- Testimonial Card 1 --}}
            <div class="bg-white rounded-2xl p-8 shadow-2xl transform transition-all duration-300 hover:-translate-y-2 hover:shadow-3xl"
                data-aos="fade-up" data-aos-delay="100">
                {{-- Quote Icon --}}
                <div class="text-red-900 mb-4">
                    <svg class="w-10 h-10 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                    </svg>
                </div>

                {{-- Quote Text --}}
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    "পুলেক্স ফার্ম আমার খামারে যোগদান করার পর থেকে আমার মুরগির স্বাস্থ্য এবং উৎপাদন উল্লেখযোগ্যভাবে
                    উন্নত হয়েছে। তাদের পরামর্শ সত্যিই কার্যকর।"
                </p>

                {{-- Farmer Info --}}
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    {{-- Farmer Image --}}
                    <img src="./medias/images/farmers/abul-kashem.jpg" alt="Abul Kashem"
                        class="w-16 h-16 rounded-full object-cover border-4 border-red-100">

                    {{-- Name and Details --}}
                    <div>
                        <h4 class="text-gray-900 font-bold text-lg">আবুল কাশেম</h4>
                        <p class="text-gray-600 text-sm">কৃষক</p>
                        <p class="text-red-900 text-sm font-medium flex items-center gap-1 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                            গাজীপুর, ঢাকা
                        </p>
                    </div>
                </div>
            </div>

            {{-- Testimonial Card 2 --}}
            <div class="bg-white rounded-2xl p-8 shadow-2xl transform transition-all duration-300 hover:-translate-y-2 hover:shadow-3xl"
                data-aos="fade-up" data-aos-delay="200">
                {{-- Quote Icon --}}
                <div class="text-red-900 mb-4">
                    <svg class="w-10 h-10 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z" />
                    </svg>
                </div>

                {{-- Quote Text --}}
                <p class="text-gray-700 text-lg leading-relaxed mb-6">
                    "অসাধারণ সেবা! পুলেক্স ফার্মের মাধ্যমে আমি আধুনিক খামার ব্যবস্থাপনা শিখেছি এবং আমার আয় দ্বিগুণ
                    হয়েছে। সবাইকে সুপারিশ করি।"
                </p>

                {{-- Farmer Info --}}
                <div class="flex items-center gap-4 pt-4 border-t border-gray-200">
                    {{-- Farmer Image --}}
                    <img src="./medias/images/farmers/abdul-jabbar.jpg" alt="Abdul Jabbar"
                        class="w-16 h-16 rounded-full object-cover border-4 border-red-100">

                    {{-- Name and Details --}}
                    <div>
                        <h4 class="text-gray-900 font-bold text-lg">আব্দুল জব্বার</h4>
                        <p class="text-gray-600 text-sm">কৃষক</p>
                        <p class="text-red-900 text-sm font-medium flex items-center gap-1 mt-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            </svg>
                            কিশোরগঞ্জ, ঢাকা
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .shadow-3xl {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
</style>
