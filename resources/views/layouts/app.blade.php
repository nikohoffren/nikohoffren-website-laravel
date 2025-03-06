<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme', 'dark') === 'dark' ? 'dark' : '' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Niko Hoffrén Homepage</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Cuprum:ital@0;1&display=swap"
      rel="stylesheet"
    />
    

    <!-- Compiled Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Prevent horizontal scroll -->
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="font-sans antialiased min-h-screen bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Content -->
    <main class="overflow-x-hidden">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Theme and Language JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
                            // Toggle the dark class on HTML element
                            document.documentElement.classList.toggle('dark');

                            // Update theme button icons
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
