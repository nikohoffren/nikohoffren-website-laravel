<div class="fixed top-0 left-0 right-0 z-[9999] w-full bg-white/70 dark:bg-gray-900/70 backdrop-blur-lg border-b border-gray-200/20 dark:border-gray-700/20" style="-webkit-backdrop-filter: blur(12px); backdrop-filter: blur(12px); transform: translateZ(0); -webkit-transform: translateZ(0);">
    <nav class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" style="transform: translateZ(0); -webkit-transform: translateZ(0);">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="bg-gray-900 rounded-lg p-1">
                        <img src="{{ asset('NHlogoTransparent.png') }}" alt="Logo" class="h-8 w-auto transition-transform duration-300 hover:scale-110" style="transform: translateZ(0); -webkit-transform: translateZ(0);">
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden sm:flex sm:items-center sm:space-x-8">
                <a href="{{ route('home') }}#skills" class="nav-link font-medium text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200">
                    {{ session('language') === 'en' ? 'Skills' : 'Taidot' }}
                </a>
                <a href="{{ route('projects') }}" class="nav-link font-medium text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200">
                    {{ session('language') === 'en' ? 'Projects' : 'Projektit' }}
                </a>
                <a href="{{ route('contact') }}" class="nav-link font-medium text-gray-800 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 transition-colors duration-200">
                    {{ session('language') === 'en' ? 'Contact' : 'Ota Yhteyttä' }}
                </a>

                <!-- Language Selector -->
                <select id="language-selector" class="bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg px-3 py-1.5 text-sm font-medium border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" style="transform: translateZ(0); -webkit-transform: translateZ(0);">
                    <option value="en" {{ session('language') === 'en' ? 'selected' : '' }}>EN</option>
                    <option value="fi" {{ session('language') === 'fi' ? 'selected' : '' }}>FI</option>
                </select>

                <!-- Theme Toggle -->
                <button class="toggle-theme p-2 rounded-lg bg-gray-200 dark:bg-gray-800 hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors duration-200" style="transform: translateZ(0); -webkit-transform: translateZ(0);">
                    @if(session('theme') === 'light')
                    <img src="{{ asset('sun.png') }}" alt="Sun icon" class="h-5 w-5 theme-icon brightness-75 contrast-200">
                    @else
                    <img src="{{ asset('moon.png') }}" alt="Moon icon" class="h-5 w-5 theme-icon">
                    @endif
                </button>
            </div>

            <!-- Mobile menu button -->
            <div class="sm:hidden">
                <button id="mobile-menu-button" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors duration-200" style="transform: translateZ(0); -webkit-transform: translateZ(0);">
                    <svg class="h-6 w-6 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="fixed inset-0 z-[9998] transform transition-all duration-300 ease-in-out opacity-0 translate-x-full bg-white/95 dark:bg-gray-900/95 backdrop-blur-lg sm:hidden" style="-webkit-backdrop-filter: blur(12px); backdrop-filter: blur(12px); transform: translateZ(0); -webkit-transform: translateZ(0);">
        <div class="pt-20 pb-6 px-4">
            <div class="flex flex-col space-y-6">
                <a href="{{ route('home') }}#skills" class="nav-link text-lg font-medium bg-gray-100/80 dark:bg-gray-800/80 rounded-lg px-4 py-3 text-gray-800 dark:text-gray-200 hover:bg-gray-200/80 dark:hover:bg-gray-700/80 transition-colors duration-200">
                    {{ session('language') === 'en' ? 'SKILLS' : 'TAIDOT' }}
                </a>
                <a href="{{ route('projects') }}" class="nav-link text-lg font-medium bg-gray-100/80 dark:bg-gray-800/80 rounded-lg px-4 py-3 text-gray-800 dark:text-gray-200 hover:bg-gray-200/80 dark:hover:bg-gray-700/80 transition-colors duration-200">
                    {{ session('language') === 'en' ? 'PROJECTS' : 'PROJEKTIT' }}
                </a>
                <a href="{{ route('contact') }}" class="nav-link text-lg font-medium bg-gray-100/80 dark:bg-gray-800/80 rounded-lg px-4 py-3 text-gray-800 dark:text-gray-200 hover:bg-gray-200/80 dark:hover:bg-gray-700/80 transition-colors duration-200">
                    {{ session('language') === 'en' ? 'CONTACT' : 'OTA YHTEYTTÄ' }}
                </a>

                <!-- Mobile Language Selector -->
                <div class="flex justify-start">
                    <select id="mobile-language-selector" class="w-32 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg px-3 py-2 text-base font-medium border border-gray-200 dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="en" {{ session('language') === 'en' ? 'selected' : '' }}>EN</option>
                        <option value="fi" {{ session('language') === 'fi' ? 'selected' : '' }}>FI</option>
                    </select>
                </div>

                <!-- Mobile Theme Toggle -->
                <div class="flex justify-start">
                    <button class="toggle-theme p-3 rounded-lg bg-gray-200 dark:bg-gray-800 hover:bg-gray-300 dark:hover:bg-gray-700 transition-colors duration-200">
                        @if(session('theme') === 'light')
                        <img src="{{ asset('sun.png') }}" alt="Sun icon" class="h-6 w-6 theme-icon brightness-75 contrast-200">
                        @else
                        <img src="{{ asset('moon.png') }}" alt="Moon icon" class="h-6 w-6 theme-icon">
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Force a repaint in Chrome
    document.body.style.transform = 'translateZ(0)';

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            requestAnimationFrame(() => {
                if (mobileMenu.classList.contains('translate-x-full')) {
                    mobileMenu.classList.remove('translate-x-full', 'opacity-0');
                    mobileMenu.classList.add('translate-x-0', 'opacity-100');
                } else {
                    mobileMenu.classList.remove('translate-x-0', 'opacity-100');
                    mobileMenu.classList.add('translate-x-full', 'opacity-0');
                }
            });
        });
    }

    // Mobile language selector
    const mobileLangSelector = document.getElementById('mobile-language-selector');
    if (mobileLangSelector) {
        mobileLangSelector.addEventListener('change', function() {
            const locale = this.value;
            fetch(`/language/${locale}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                method: 'GET',
            }).then(response => {
                if (response.ok) {
                    window.location.reload();
                }
            }).catch(error => {
                console.error('Mobile language selector error:', error);
            });
        });
    }
});
</script>
