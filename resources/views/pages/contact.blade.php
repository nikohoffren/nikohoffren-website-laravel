@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <div class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 to-gray-800 text-center">
        <div class="relative z-10 max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                {{ session('language') === 'en' ? 'Get in ' : 'Ota ' }}
                <span class="text-indigo-400">{{ session('language') === 'en' ? 'Touch' : 'Yhteyttä' }}</span>
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-300 sm:mt-4">
                {{ session('language') === 'en'
                    ? "Have a question or want to work together? Let's connect via email or social media."
                    : 'Onko sinulla kysyttävää tai haluatko tehdä yhteistyötä? Ota yhteyttä viestillä tai sosiaalisen median kautta.' }}
            </p>
        </div>
        <!-- Decorative background pattern -->
        <div class="absolute inset-0 bg-[url('/public/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
    </div>

    <!-- Main Content -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 p-8">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    {{ session('language') === 'en' ? 'Send me a message' : 'Lähetä minulle viesti' }}
                </h2>
                <form action="https://formspree.io/f/xyyarzbk" method="POST" class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" for="grid-email">
                            {{ session('language') === 'en' ? 'Email' : 'Sähköposti' }}
                        </label>
                        <input
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors duration-200"
                            type="email"
                            name="email"
                            id="grid-email"
                            required
                            placeholder="{{ session('language') === 'en' ? 'Your email address' : 'Sähköpostiosoitteesi' }}"
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2" for="grid-message">
                            {{ session('language') === 'en' ? 'Message' : 'Viesti' }}
                        </label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors duration-200"
                            name="message"
                            id="grid-message"
                            rows="6"
                            required
                            placeholder="{{ session('language') === 'en' ? 'Your message' : 'Viestisi' }}"
                        ></textarea>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full px-6 py-3 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium transition-colors duration-200 transform hover:scale-[1.02]">
                            {{ session('language') === 'en' ? 'Send Message' : 'Lähetä viesti' }}
                        </button>
                    </div>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <!-- Social Links -->
                <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">
                        {{ session('language') === 'en' ? 'Social Media Links' : 'Sosiaalisen median linkit' }}
                    </h2>
                    <div class="grid grid-cols-2 gap-6">
                        <a href="https://www.linkedin.com/in/nikohoffren" target="_blank" rel="noreferrer"
                            class="flex items-center p-4 rounded-lg bg-white/5 hover:bg-white/10 dark:bg-gray-800/5 dark:hover:bg-gray-800/10 transition-colors duration-200 group">
                            <i class="fab fa-linkedin text-2xl text-blue-500 group-hover:scale-110 transition-transform duration-200"></i>
                            <span class="ml-3 text-gray-700 dark:text-gray-300">LinkedIn</span>
                        </a>
                        <a href="https://www.twitter.com/nikohoffren86" target="_blank" rel="noreferrer"
                            class="flex items-center p-4 rounded-lg bg-white/5 hover:bg-white/10 dark:bg-gray-800/5 dark:hover:bg-gray-800/10 transition-colors duration-200 group">
                            <i class="fa-brands fa-x text-2xl text-gray-900 dark:text-white group-hover:scale-110 transition-transform duration-200"></i>
                            <span class="ml-3 text-gray-700 dark:text-gray-300">X (Twitter)</span>
                        </a>
                        <a href="https://www.github.com/nikohoffren" target="_blank" rel="noreferrer"
                            class="flex items-center p-4 rounded-lg bg-white/5 hover:bg-white/10 dark:bg-gray-800/5 dark:hover:bg-gray-800/10 transition-colors duration-200 group">
                            <i class="fab fa-github text-2xl text-gray-900 dark:text-white group-hover:scale-110 transition-transform duration-200"></i>
                            <span class="ml-3 text-gray-700 dark:text-gray-300">GitHub</span>
                        </a>
                        <a href="https://www.instagram.com/nikohoffren" target="_blank" rel="noreferrer"
                            class="flex items-center p-4 rounded-lg bg-white/5 hover:bg-white/10 dark:bg-gray-800/5 dark:hover:bg-gray-800/10 transition-colors duration-200 group">
                            <i class="fab fa-instagram text-2xl text-pink-500 group-hover:scale-110 transition-transform duration-200"></i>
                            <span class="ml-3 text-gray-700 dark:text-gray-300">Instagram</span>
                        </a>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 p-8">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-6">
                        {{ session('language') === 'en' ? 'Email me directly' : 'Lähetä sähköpostia' }}
                    </h2>
                    <a href="mailto:niko.hoffren@gmail.com"
                        class="flex items-center p-4 rounded-lg bg-white/5 hover:bg-white/10 dark:bg-gray-800/5 dark:hover:bg-gray-800/10 transition-colors duration-200 group">
                        <i class="fas fa-envelope text-2xl text-indigo-500 group-hover:scale-110 transition-transform duration-200"></i>
                        <span class="ml-3 text-gray-700 dark:text-gray-300">niko.hoffren@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
