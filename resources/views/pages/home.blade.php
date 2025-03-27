@extends('layouts.app')

@section('content')
<main class="relative">
    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800"></div>
        <div class="absolute inset-0 bg-[url('/public/grid.svg')] bg-center opacity-5 dark:opacity-20 [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 to-purple-500/5 dark:from-indigo-500/20 dark:to-purple-500/20"></div>

        <!-- Content -->
        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex items-center">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-8 section-animate">
                    <div class="space-y-4">
                        <h1 class="text-5xl md:text-6xl font-bold text-gray-900 dark:text-white leading-tight">
                            {{ session('language') === 'en' ? "I'm " : "Olen " }}
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400">
                                Niko Hoffrén
                            </span>
                        </h1>
                        <h2 class="text-3xl md:text-4xl font-semibold text-indigo-600 dark:text-indigo-400">
                            {{ session('language') === 'en' ? "Software Engineer" : "Ohjelmistokehittäjä" }}
                        </h2>
                    </div>

                    <div class="flex space-x-4">
                        <a href="{{ route('contact') }}"
                            class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transform hover:scale-[1.02] transition-all duration-200 flex items-center space-x-2">
                            <span>{{ session('language') === 'en' ? "Let's Talk" : "Ota yhteyttä" }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="prose prose-lg max-w-none space-y-6 dark:prose-invert">
                        <p class="text-gray-600 dark:text-gray-300">
                            @if(session('language') === 'en')
                            Welcome to my website! I'm a software engineer from Kuopio, Finland. In my spare time, I like to spend time
                            with my son, go to gym, play video games, or code something interesting. In my working career I have
                            specialized in technologies such as Infrastructure as Code (IaC), TypeScript, Flutter and Node.js.
                            @else
                            Tervetuloa kotisivuilleni! Olen ohjelmistokehittäjä Kuopiosta. Vapaa-aikanani tykkään viettää aikaa poikani
                            kanssa, käydä salilla, pelata videopelejä, tai koodata jotain mielenkiintoista. Työurallani olen
                            työskennellyt teknologioiden kuten Infrastructure as Code (IaC), TypeScript, Flutter ja Node.js parissa.
                            @endif
                        </p>
                        <p class="text-gray-600 dark:text-gray-300">
                            @if(session('language') === 'en')
                            I like contributing to open-source software and it's one of the ways I've chosen to give back to the
                            community. I'm always eager to connect with like-minded individuals, potential collaborators, or anyone curious about
                            my work.
                            @else
                            Pidän osallistumisesta avointen lähdekoodien ohjelmistojen kehittämiseen ja se on yksi tapa, jolla olen
                            valinnut antaa panokseni yhteisölle. Olen aina innokas tekemään yhteistyötä samanhenkisten yksilöiden tai
                            potentiaalisten yhteistyökumppaneiden kanssa.
                            @endif
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="flex space-x-6">
                        <a href="https://www.linkedin.com/in/nikohoffren" target="_blank" rel="noreferrer"
                            class="text-gray-500 hover:text-blue-500 transition-colors duration-200">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                        <a href="https://www.github.com/nikohoffren" target="_blank" rel="noreferrer"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                            <i class="fab fa-github text-2xl"></i>
                        </a>
                        <a href="https://www.twitter.com/nikohoffren86" target="_blank" rel="noreferrer"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white transition-colors duration-200">
                            <i class="fa-brands fa-x text-2xl"></i>
                        </a>
                        <a href="https://www.instagram.com/nikohoffren" target="_blank" rel="noreferrer"
                            class="text-gray-500 hover:text-pink-500 transition-colors duration-200">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Profile Image -->
                <div class="relative section-animate" style="animation-delay: 0.2s;">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full blur-3xl opacity-10 dark:opacity-20"></div>
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full blur opacity-20 dark:opacity-30 group-hover:opacity-40 dark:group-hover:opacity-50 transition duration-1000"></div>
                        <div id="loader" class="loader mx-auto"></div>
                        <img id="profileImage" src="{{ asset('nikohoffren_new3.jpg') }}" alt="Niko Hoffrén"
                            class="relative rounded-full mx-auto shadow-2xl transform group-hover:scale-105 transition duration-500"
                            width="600" height="600">
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator" onclick="document.getElementById('skills').scrollIntoView({behavior: 'smooth'})">
            <i class="fas fa-chevron-down text-2xl text-gray-600 dark:text-gray-400"></i>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="relative py-20 bg-white/10 dark:bg-gray-900/50 backdrop-blur-lg section-animate">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-indigo-500/5 to-transparent"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16 section-animate">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ session('language') === 'en' ? "Technical Skills" : "Tekniset Taidot" }}
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-300">
                    {{ session('language') === 'en'
                        ? "Technologies I've worked with and mastered over the years"
                        : "Teknologiat, joiden parissa olen työskennellyt ja joita olen oppinut vuosien varrella"
                    }}
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 max-w-6xl mx-auto">
                @foreach ([
                    ['name' => 'React', 'icon' => 'react'],
                    ['name' => 'NextJS', 'icon' => 'nextjs'],
                    ['name' => 'JavaScript', 'icon' => 'javascript'],
                    ['name' => 'TypeScript', 'icon' => 'typescript'],
                    ['name' => 'HTML5', 'icon' => 'html'],
                    ['name' => 'CSS', 'icon' => 'css'],
                    ['name' => 'Tailwind', 'icon' => 'tailwind'],
                    ['name' => 'Flutter', 'icon' => 'flutter'],
                    ['name' => 'Dart', 'icon' => 'dart'],
                    ['name' => 'MySQL', 'icon' => 'mysql'],
                    ['name' => 'AWS', 'icon' => 'aws'],
                    ['name' => 'GCP', 'icon' => 'gcp'],
                    ['name' => 'Terraform', 'icon' => 'terraform'],
                    ['name' => 'Docker', 'icon' => 'docker'],
                    ['name' => 'Maven', 'icon' => 'maven'],
                    ['name' => 'NodeJS', 'icon' => 'nodejs'],
                    ['name' => 'Linux', 'icon' => 'linux'],
                    ['name' => 'Git', 'icon' => 'git']
                ] as $skill)
                    <div class="group section-animate" style="animation-delay: {{ $loop->index * 0.1 }}s">
                        <div class="bg-white/10 dark:bg-gray-800/10 backdrop-blur-lg rounded-xl p-6 shadow-lg border border-gray-200/20 dark:border-gray-700/20 transform hover:scale-105 transition-all duration-300 flex flex-col items-center">
                            <img src="https://skillicons.dev/icons?i={{ $skill['icon'] }}"
                                alt="{{ $skill['name'] }} icon"
                                class="w-16 h-16 mb-4 transform group-hover:scale-110 transition-transform duration-300">
                            <p class="text-gray-700 dark:text-gray-300 font-medium">{{ $skill['name'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
