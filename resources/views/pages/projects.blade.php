@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section -->
    <div class="relative py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-900 to-gray-800 text-center">
        <div class="relative z-10 max-w-7xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">
                {{ session('language') === 'en' ? 'Projects' : 'Projektit' }}
                <span class="text-indigo-400">Portfolio</span>
            </h1>
            <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-300 sm:mt-4">
                {{ session('language') === 'en' ? 'Explore my collection of projects and open-source contributions' : 'Tutustu projekteihin ja avoimen lähdekoodin kontribuutioihin' }}
            </p>
            <div class="mt-8">
                <a href="https://github.com/nikohoffren" target="_blank" rel="noreferrer"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-200">
                    <i class="fab fa-github mr-2"></i>
                    {{ session('language') === 'en' ? 'View on GitHub' : 'Katso Githubissa' }}
                </a>
            </div>
        </div>

        <!-- Decorative background pattern -->
        <div class="absolute inset-0 bg-[url('/public/grid.svg')] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
    </div>

    <!-- GitHub Sponsors Section -->
    <div class="relative -mt-10 z-20 mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">
        <div class="bg-white/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden">
            <div class="sponsor-container p-4" style="width: 100%; overflow: hidden;">
                <iframe src="https://github.com/sponsors/nikohoffren/card" title="Sponsor nikohoffren"
                    style="width: 100%; border: 0; border-radius: 0.75rem; transform: scale(0.97);"
                    scrolling="no" id="sponsor-iframe"></iframe>
            </div>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Featured Projects Section -->
        <div class="mb-16">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-8">
                {{ session('language') === 'en' ? 'Featured Projects' : 'Keskeiset Projektit' }}
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dead Code Hunter -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('dead-code-hunter-logo.png') }}" alt="Dead Code Hunter -logo"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Dead Code Hunter</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">VS Code Extension</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'A powerful VS Code extension for tracking and managing unused code in your projects.'
                                : 'Tehokas VS Code -laajennus käyttämättömän koodin jäljittämiseen ja hallintaan projekteissasi.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://marketplace.visualstudio.com/items?itemName=niko-hoffren.dead-code-hunter" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt mr-1"></i> View Project
                                </a>
                                <a href="https://github.com/nikohoffren/dead-code-hunter" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">TypeScript</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">VS Code API</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hunajaholistin Hunaja -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('HHlahja.jpg') }}" alt="Hunajaholistin Hunaja"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Hunajaholistin Hunaja</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">E-Commerce</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'Modern e-commerce platform for honey products with integrated shopping cart and Stripe payments.'
                                : 'Moderni verkkokauppa-alusta hunajatuotteille integroidulla ostoskorilla ja Stripe-maksuilla.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://www.hunajaholisti.fi" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt mr-1"></i> Visit Site
                                </a>
                                <a href="https://github.com/nikohoffren/hunajaholisti-homepage" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">React</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">TypeScript</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Stripe</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fork, Commit, Merge Website -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('fork-commit-merge-web-banner.png') }}" alt="Fork, Commit, Merge"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Fork, Commit, Merge</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Learning Platform</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'A comprehensive platform for learning GitHub contributions and open source development.'
                                : 'Kattava alusta GitHub-kontribuutioiden ja avoimen lähdekoodin kehityksen oppimiseen.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://forkcommitmerge.vercel.app/" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt mr-1"></i> Visit Site
                                </a>
                                <a href="https://github.com/nikohoffren/fork-commit-merge-web" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Next.js</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">TypeScript</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">MongoDB</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">AWS S3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Projects Section -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 mb-8">
                {{ session('language') === 'en' ? 'Other Notable Projects' : 'Muut Merkittävät Projektit' }}
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Fork, Commit, Merge GitHub Project -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('fork-commit-merge-logo.jpg') }}" alt="Fork, Commit, Merge GitHub"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">FCM GitHub Project</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Learning</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'Interactive project for learning GitHub contribution workflow with hands-on exercises.'
                                : 'Interaktiivinen projekti GitHub-kontribuutioiden työnkulun oppimiseen käytännön harjoituksilla.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://github.com/nikohoffren/fork-commit-merge" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">JavaScript</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Node.js</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stolen Or Not? -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('stolen-gear-logo.jpeg') }}" alt="Stolen Or Not?"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Stolen Or Not?</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Mobile App</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'Flutter app for tracking valuable devices and protecting them from theft.'
                                : 'Flutter-sovellus arvokkaiden laitteiden seurantaan ja suojaamiseen varkauksilta.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://play.google.com/store/apps/details?id=com.nikohoffren.stolen_gear_app" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fab fa-google-play mr-1"></i> Play Store
                                </a>
                                <a href="https://github.com/nikohoffren/stolen-or-not-app" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Flutter</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Dart</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kuopio Public Transport -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('Vilkku_sydan_violetti.png') }}" alt="Kuopio Public Transport"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Kuopio Transport</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Web App</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'Real-time tracking and route information for Kuopio public transport.'
                                : 'Reaaliaikainen seuranta ja reittitiedot Kuopion julkiselle liikenteelle.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://kuopionjulkinenliikenne.live" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt mr-1"></i> Visit Site
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">React</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Maps API</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Niko Hoffrén Music -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('NHbackground.jpg') }}" alt="Niko Hoffrén Music"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Niko Hoffrén Music</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Website</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'Website showcasing my music production work, featuring music samples, videos, and gear information.'
                                : 'Verkkosivusto musiikkituotantooni liittyvistä asioista, sisältäen musiikkinäytteitä, videoita ja soitintietoja.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://nikohoffrenmusic.netlify.app" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fas fa-external-link-alt mr-1"></i> Visit Site
                                </a>
                                <a href="https://github.com/nikohoffren/nikohoffrenmusic-homepage" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Vite</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">React</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">TypeScript</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KISS CSS -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('kiss-css-logo.jpg') }}" alt="KISS CSS"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">KISS CSS</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Framework</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'A simple, lightweight CSS framework designed for ease of use, providing reusable CSS classes and components.'
                                : 'Yksinkertainen ja kevyt CSS-kirjasto, joka on suunniteltu helppokäyttöisyyttä ajatellen, tarjoten uudelleenkäytettäviä CSS-luokkia.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://www.npmjs.com/package/kiss-css" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fab fa-npm mr-1"></i> NPM Package
                                </a>
                                <a href="https://github.com/nikohoffren/kiss-css" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">CSS</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">JavaScript</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Node.js</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Smart Meeting Scheduler -->
                <div class="group relative bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl shadow-lg border border-gray-200/20 dark:border-gray-700/20 overflow-hidden transition-all duration-300 hover:transform hover:scale-[1.02] flex flex-col h-[500px]">
                    <div class="h-48 bg-gray-200 dark:bg-gray-700 overflow-hidden">
                        <img src="{{ asset('smart-meeting-scheduler-logo.jpg') }}" alt="Smart Meeting Scheduler"
                            class="w-full h-full object-cover transform transition-transform duration-300 group-hover:scale-105">
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Smart Meeting Scheduler</h3>
                            <span class="px-3 py-1 text-sm text-indigo-600 dark:text-indigo-400 bg-indigo-100 dark:bg-indigo-900/30 rounded-full">Chrome Extension</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-300 mb-4 flex-grow">
                            {{ session('language') === 'en'
                                ? 'Chrome extension for streamlining meeting scheduling with Google Calendar integration.'
                                : 'Chrome-laajennus kokousten ajanvaraamisen helpottamiseen Google Calendar -integraatiolla.'
                            }}
                        </p>
                        <div class="mt-auto">
                            <div class="flex items-center space-x-4 mb-4">
                                <a href="https://chrome.google.com/webstore/detail/smart-meeting-scheduler/icaojehhbdenebdcahljjhnohnjmbpfa" target="_blank"
                                    class="text-indigo-600 dark:text-indigo-400 hover:text-indigo-800 dark:hover:text-indigo-300 transition-colors duration-200">
                                    <i class="fab fa-chrome mr-1"></i> Web Store
                                </a>
                                <a href="https://github.com/nikohoffren/smart-meeting-scheduler" target="_blank"
                                    class="text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 transition-colors duration-200">
                                    <i class="fab fa-github mr-1"></i> Source
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">JavaScript</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Node.js</span>
                                <span class="px-2 py-1 text-xs bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 rounded">Chrome API</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function adjustSponsorHeight() {
        const iframe = document.getElementById('sponsor-iframe');
        if (window.innerWidth < 550) {
            iframe.style.height = '170px';
        } else {
            iframe.style.height = '110px';
        }
    }

    document.addEventListener('DOMContentLoaded', adjustSponsorHeight);
    window.addEventListener('resize', adjustSponsorHeight);
</script>
@endsection
