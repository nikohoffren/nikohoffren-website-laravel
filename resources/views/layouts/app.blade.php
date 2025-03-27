<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme', 'dark') === 'dark' ? 'dark' : '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Niko Hoffrén Homepage{{ request()->segment(1) ? ': ' . ucfirst(request()->segment(1)) : '' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Compiled Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Animation and Scroll Styles -->
    <style>
        html {
            overflow-x: hidden;
            height: 100%;
            scroll-behavior: smooth;
        }
        body {
            position: relative;
            min-height: 100vh;
            overflow-x: hidden;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            perspective: 1000;
            -webkit-perspective: 1000;
        }
        main {
            position: relative;
            z-index: 1;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
        }
        .nav-link {
            position: relative;
            z-index: 1;
        }

        /* Page Transition Animations */
        .page-content {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: linear-gradient(to right, #6366f1, #a855f7);
            z-index: 10000;
            transition: width 0.2s ease-out;
        }

        /* Scroll Indicator Animation */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .scroll-indicator:hover {
            opacity: 1;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-10px) translateX(-50%);
            }
            60% {
                transform: translateY(-5px) translateX(-50%);
            }
        }

        /* Section Animations */
        .section-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .section-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen bg-gradient-to-br from-gray-50 to-white dark:from-gray-900 dark:to-gray-800 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Content -->
    <main class="relative pt-16">
        <div class="page-content">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Animation and Scroll JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Force Chrome to create a new stacking context
            document.body.style.transform = 'translateZ(0)';
            document.body.style.webkitTransform = 'translateZ(0)';

            // Scroll Progress Bar
            window.addEventListener('scroll', () => {
                const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                const scrolled = (winScroll / height) * 100;
                document.querySelector('.scroll-progress').style.width = scrolled + '%';
            });

            // Section Animations on Scroll
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.section-animate').forEach(section => {
                observer.observe(section);
            });

            // Smooth Scroll with Offset
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);

                    if (targetElement) {
                        const navbarHeight = document.querySelector('nav').offsetHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Theme toggle functionality
            const toggleThemeButtons = document.querySelectorAll('.toggle-theme');

            toggleThemeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const isDark = document.documentElement.classList.contains('dark');
                    const newTheme = isDark ? 'light' : 'dark';

                    fetch(`/language/theme/${newTheme}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        method: 'GET'
                    })
                    .then(response => {
                        if (response.ok) {
                            document.documentElement.classList.toggle('dark');
                            document.querySelectorAll('.theme-icon').forEach(icon => {
                                icon.src = newTheme === 'dark' ? '/moon.png' : '/sun.png';
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Theme toggle error:', error);
                    });
                });
            });

            // Desktop language selector
            const desktopLangSelector = document.getElementById('language-selector');

            if (desktopLangSelector) {
                desktopLangSelector.addEventListener('change', function() {
                    switchLanguage(this.value);
                });
            }

            // Helper function to switch language
            function switchLanguage(locale) {
                fetch(`/language/${locale}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    method: 'GET'
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload();
                    }
                })
                .catch(error => {
                    console.error('Language switch error:', error);
                });
            }

            // Hide loader when profile image is loaded
            const profileImage = document.getElementById('profileImage');
            const loader = document.getElementById('loader');

            if (profileImage && loader) {
                if (profileImage.complete) {
                    loader.style.display = 'none';
                } else {
                    profileImage.addEventListener('load', function() {
                        loader.style.display = 'none';
                    });
                }
            }
        });
    </script>
</body>
</html>
