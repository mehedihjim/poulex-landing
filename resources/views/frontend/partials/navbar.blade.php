@php $bn = app()->getLocale() == 'bn'; @endphp

{{-- Top Bar --}}
<div id="topbar" class="bg-gray-900 text-white py-1 fixed top-0 left-0 right-0 z-60">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between">
            {{-- Auto-changing Headlines --}}
            <div class="flex-1 text-center">
                <div id="headline-slider" class="relative overflow-hidden h-6">
                    <p
                        class="headline-item absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-100 translate-y-0">
                        {{ __('translation.topText') }}
                    </p>
                    <p
                        class="headline-item absolute inset-0 flex items-center justify-center transition-all duration-500 opacity-0 translate-y-6">
                        {{ __('translation.topAnchor') }}
                    </p>
                </div>
            </div>

            {{-- Language Dropdown --}}
            <div class="relative ml-4">
                <button id="lang-dropdown-btn"
                    class="flex items-center space-x-2 px-3 py-1 rounded hover:bg-gray-800 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                    <span id="current-lang">{{ strtoupper(app()->getLocale()) }}</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                {{-- Dropdown Menu --}}
                <div id="lang-dropdown"
                    class="hidden absolute right-0 mt-2 w-32 bg-white rounded-lg shadow-lg py-2 z-10">
                    <a href="{{ route('lang.switch', 'en') }}"
                        class="lang-option block px-4 py-2 text-gray-800 hover:bg-gray-100 transition-colors {{ app()->getLocale() == 'en' ? 'bg-gray-100 font-semibold' : '' }}">
                        English
                    </a>
                    <a href="{{ route('lang.switch', 'bn') }}"
                        class="lang-option block px-4 py-2 text-gray-800 hover:bg-gray-100 transition-colors {{ app()->getLocale() == 'bn' ? 'bg-gray-100 font-semibold' : '' }}">
                        বাংলা
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Navbar --}}
<nav id="navbar" class="fixed top-10 left-0 right-0 z-50 transition-all duration-300">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            {{-- Logo --}}
            <a href="" class="text-2xl font-bold">
                <img src="./medias/images/logos/poulexLogo.png" alt="PoulexBD Logo" class="h-10 inline-block">
            </a>

            {{-- Desktop Menu --}}
            <ul class="hidden md:flex items-center space-x-8">
                <li><a href="" id="nav-link-home"
                        class="nav-link font-medium hover:text-red-600 transition-colors">{{ __('translation.home') }}</a>
                </li>
                <li><a href="#whyUs" id="nav-link-about"
                        class="nav-link font-medium hover:text-red-600 transition-colors">{{ __('translation.why_us') }}</a>
                </li>
                <li><a href="#features" id="nav-link-features"
                        class="nav-link font-medium hover:text-red-600 transition-colors">{{ __('translation.features') }}</a>
                </li>
                <li><a href="#use-cases" id="nav-link-usecases"
                        class="nav-link font-medium hover:text-red-600 transition-colors">{{ __('translation.use_cases') }}</a>
                </li>
                <li><a href="#technology" id="nav-link-technology"
                        class="nav-link font-medium hover:text-red-600 transition-colors">{{ __('translation.technology') }}</a>
                </li>
                <li><a href="#join" id="nav-link-contact"
                        class="nav-link font-medium hover:text-red-600 transition-colors">{{ __('translation.contact') }}</a>
                </li>
            </ul>

            {{-- CTA Button --}}
            <a href="#" target="_blank" id="nav-cta"
                class="hidden md:inline-block bg-red-900 text-[#f8f8f8] px-6 py-2 rounded-lg font-semibold hover:bg-red-800 transition-colors shadow-md">
                {{ __('translation.cta_start') }}
            </a>

            {{-- Mobile Menu Button --}}
            <button id="mobile-menu-btn" class="md:hidden focus:outline-none">
                <svg id="menu-open-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
                <svg id="menu-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
    </div>
</nav>

{{-- Mobile Menu Overlay --}}
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 z-65 hidden md:hidden transition-opacity duration-300">
</div>

{{-- Mobile Menu Sidebar --}}
<div id="mobile-menu"
    class="fixed top-0 right-0 h-full w-80 bg-[#f8f8f8]/95 backdrop-blur-md z-70 transform translate-x-full transition-transform duration-300 md:hidden shadow-2xl">
    <div class="flex flex-col h-full">
        {{-- Mobile Menu Header --}}
        <div class="flex items-center justify-between p-6 border-b border-red-900/10 bg-red-900/5">
            <img src="./medias/images/logos/poulexLogo.png" alt="PoulexBD Logo" class="h-8">
            <button id="mobile-menu-close" class="text-red-900 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu Items --}}
        <ul class="flex-1 flex flex-col py-6 overflow-y-auto">
            <li>
                <a href=""
                    class="mobile-link flex items-center px-6 py-4 text-gray-800 hover:bg-red-900/10 hover:text-red-900 transition-colors font-medium">
                    <span>{{ __('translation.home') }}</span>
                </a>
            </li>
            <li>
                <a href="#whyUs"
                    class="mobile-link flex items-center px-6 py-4 text-gray-800 hover:bg-red-900/10 hover:text-red-900 transition-colors font-medium">
                    <span>{{ __('translation.why_us') }}</span>
                </a>
            </li>
            <li>
                <a href="#features"
                    class="mobile-link flex items-center px-6 py-4 text-gray-800 hover:bg-red-900/10 hover:text-red-900 transition-colors font-medium">
                    <span>{{ __('translation.features') }}</span>
                </a>
            </li>
            <li>
                <a href="#use-cases"
                    class="mobile-link flex items-center px-6 py-4 text-gray-800 hover:bg-red-900/10 hover:text-red-900 transition-colors font-medium">
                    <span>{{ __('translation.use_cases') }}</span>
                </a>
            </li>
            <li>
                <a href="#technology"
                    class="mobile-link flex items-center px-6 py-4 text-gray-800 hover:bg-red-900/10 hover:text-red-900 transition-colors font-medium">
                    <span>{{ __('translation.technology') }}</span>
                </a>
            </li>
            <li>
                <a href="#join"
                    class="mobile-link flex items-center px-6 py-4 text-gray-800 hover:bg-red-900/10 hover:text-red-900 transition-colors font-medium">
                    <span>{{ __('translation.contact') }}</span>
                </a>
            </li>
            {{-- CTA Button --}}
            <li class="px-6 mt-4">
                <a href="#" target="_blank"
                    class="block text-center bg-red-900 text-[#f8f8f8] px-6 py-3 rounded-lg font-semibold hover:bg-red-800 transition-colors shadow-md">
                    {{ __('translation.cta_start') }}
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    // Headline auto-changer
    const headlines = document.querySelectorAll('.headline-item');
    let currentHeadline = 0;

    function changeHeadline() {
        headlines[currentHeadline].classList.remove('opacity-100', 'translate-y-0');
        headlines[currentHeadline].classList.add('opacity-0', '-translate-y-6');

        currentHeadline = (currentHeadline + 1) % headlines.length;

        headlines[currentHeadline].classList.remove('opacity-0', 'translate-y-6', '-translate-y-6');
        headlines[currentHeadline].classList.add('opacity-100', 'translate-y-0');
    }

    setInterval(changeHeadline, 4000);

    // Language dropdown toggle
    const langBtn = document.getElementById('lang-dropdown-btn');
    const langDropdown = document.getElementById('lang-dropdown');

    langBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        langDropdown.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', () => {
        langDropdown.classList.add('hidden');
    });

    // Navbar scroll effect with red theme
    const navbar = document.getElementById('navbar');
    const topbar = document.getElementById('topbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const navCta = document.getElementById('nav-cta');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            // Scrolled state - frosted glass effect with dark red accents
            navbar.style.backgroundColor = 'rgba(248, 248, 248, 0.95)';
            navbar.style.backdropFilter = 'blur(10px)';
            navbar.classList.add('shadow-lg');
            topbar.style.transform = 'translateY(-100%)';
            navbar.style.top = '0';

            // Change nav links to dark color
            navLinks.forEach(link => {
                link.classList.remove('text-white', 'text-[#f8f8f8]');
                link.classList.add('text-gray-800');
            });

            // Change mobile menu button color
            mobileMenuBtn.classList.remove('text-white', 'text-[#f8f8f8]');
            mobileMenuBtn.classList.add('text-gray-800');
        } else {
            // Top of page - transparent background with white text
            navbar.style.backgroundColor = 'transparent';
            navbar.style.backdropFilter = 'none';
            navbar.classList.remove('shadow-lg');
            topbar.style.transform = 'translateY(0)';
            navbar.style.top = '2.5rem';

            // Change nav links to off-white
            navLinks.forEach(link => {
                link.classList.remove('text-gray-800');
                link.classList.add('text-[#f8f8f8]');
            });

            // Change mobile menu button color
            mobileMenuBtn.classList.remove('text-gray-800');
            mobileMenuBtn.classList.add('text-[#f8f8f8]');
        }
    });

    // Mobile menu
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const menuOpenIcon = document.getElementById('menu-open-icon');
    const menuCloseIcon = document.getElementById('menu-close-icon');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    function openMobileMenu() {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenuOverlay.classList.remove('hidden');
        menuOpenIcon.classList.add('hidden');
        menuCloseIcon.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileMenu.classList.add('translate-x-full');
        mobileMenuOverlay.classList.add('hidden');
        menuOpenIcon.classList.remove('hidden');
        menuCloseIcon.classList.add('hidden');
        document.body.style.overflow = '';
    }

    mobileMenuBtn.addEventListener('click', openMobileMenu);
    mobileMenuClose.addEventListener('click', closeMobileMenu);
    mobileMenuOverlay.addEventListener('click', closeMobileMenu);

    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Close mobile menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });
</script>

<style>
    /* Smooth transitions */
    #topbar {
        transition: transform 0.3s ease;
    }

    #navbar {
        transition: all 0.3s ease;
    }

    .nav-link {
        transition: color 0.3s ease;
    }

    /* Mobile menu animations */
    #mobile-menu {
        box-shadow: -10px 0 30px rgba(0, 0, 0, 0.3);
    }

    /* Prevent body scroll when menu is open */
    body.menu-open {
        overflow: hidden;
    }
</style>
