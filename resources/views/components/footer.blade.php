<footer class="relative mt-20">
    <!-- Decorative top border with gradient -->
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gray-200/20 dark:via-gray-700/20 to-transparent"></div>

    <!-- Main footer content -->
    <section class="relative bg-white/70 dark:bg-gray-900/70 backdrop-blur-lg border-t border-gray-200/20 dark:border-gray-700/20 py-12 transition-all duration-300" style="-webkit-backdrop-filter: blur(12px); backdrop-filter: blur(12px); transform: translateZ(0); -webkit-transform: translateZ(0);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Grid layout for larger screens -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-12">
                <!-- Social Links -->
                <div class="flex flex-col items-center md:items-start space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        {{ session('language') === 'en' ? 'Connect With Me' : 'Seuraa minua' }}
                    </h3>
                    <div class="flex space-x-6">
                        <a href="https://www.linkedin.com/in/nikohoffren" target="_blank" rel="noopener noreferrer"
                            class="transform hover:scale-110 transition-all duration-200">
                            <i class="fab fa-linkedin text-2xl text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400"></i>
                        </a>
                        <a href="https://www.github.com/nikohoffren" target="_blank" rel="noopener noreferrer"
                            class="transform hover:scale-110 transition-all duration-200">
                            <i class="fab fa-github text-2xl text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400"></i>
                        </a>
                        <a href="https://www.twitter.com/nikohoffren86" target="_blank" rel="noopener noreferrer"
                            class="transform hover:scale-110 transition-all duration-200">
                            <i class="fa-brands fa-x text-2xl text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400"></i>
                        </a>
                        <a href="https://www.instagram.com/nikohoffren" target="_blank" rel="noopener noreferrer"
                            class="transform hover:scale-110 transition-all duration-200">
                            <i class="fab fa-instagram text-2xl text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="flex flex-col items-center md:items-start space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        {{ session('language') === 'en' ? 'Contact' : 'Yhteystiedot' }}
                    </h3>
                    <a href="mailto:niko.hoffren@gmail.com"
                        class="text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-200 transform hover:scale-105">
                        niko.hoffren@gmail.com
                    </a>
                </div>

                <!-- Music Link -->
                <div class="flex flex-col items-center md:items-start space-y-6">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                        {{ session('language') === 'en' ? 'My Music' : 'Musiikkini' }}
                    </h3>
                    <a href="https://nikohoffrenmusic.netlify.app/" target="_blank" rel="noopener noreferrer"
                        class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300 transition-colors duration-200 transform hover:scale-105">
                        nikohoffrenmusic.netlify.app
                    </a>
                </div>
            </div>

            <!-- Bottom section with copyright and tech info -->
            <div class="pt-8 border-t border-gray-200/10 dark:border-gray-700/10">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        {{ session('language') === 'en' ? 'Copyright © 2020-2025 Niko Hoffrén' : 'Tekijänoikeus © 2020-2025 Niko Hoffrén' }}
                    </p>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            {{ session('language') === 'en' ? 'Built with' : '' }}
                        </span>
                        <div class="flex items-center space-x-2">
                            <img src="https://laravel.com/img/favicon/favicon.ico" alt="Laravel" class="h-4 w-4">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Laravel</span>
                            <span class="text-gray-400 dark:text-gray-600">•</span>
                            <img src="https://www.php.net/favicon.ico" alt="PHP" class="h-4 w-4">
                            <span class="text-sm text-gray-500 dark:text-gray-400">PHP</span>
                            <span class="text-gray-400 dark:text-gray-600">•</span>
                            <img src="https://www.linode.com/favicon.ico" alt="Linode" class="h-4 w-4">
                            <span class="text-sm text-gray-500 dark:text-gray-400">Linode</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>
