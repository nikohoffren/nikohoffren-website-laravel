<nav class="flex justify-between items-center p-4 bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-white fixed w-full z-50 top-0 transition-colors duration-300">
  <div>
    <a href="{{ route('home') }}" class="font-bold text-lg">
      <img src="{{ asset('NHlogoTransparent.png') }}" alt="Logo" class="h-8 w-auto hover:bg-gray-300 dark:hover:bg-gray-700 hover:scale-110 transition-transform">
    </a>
  </div>

  <div class="hidden sm:block">
    <ul class="flex items-center space-x-6 pr-4 list-none">
      <li>
        <a href="{{ route('home') }}#skills" class="hover:scale-110 inline-block p-1 transform transition-transform text-gray-800 dark:text-white">
          {{ session('language') === 'en' ? 'SKILLS' : 'TAIDOT' }}
        </a>
      </li>
      <li>
        <a href="{{ route('projects') }}" class="hover:scale-110 inline-block p-1 transform transition-transform text-gray-800 dark:text-white">
          {{ session('language') === 'en' ? 'PROJECTS' : 'PROJEKTIT' }}
        </a>
      </li>
      <li>
        <a href="{{ route('contact') }}" class="hover:scale-110 inline-block p-1 transform transition-transform text-gray-800 dark:text-white">
          {{ session('language') === 'en' ? 'CONTACT' : 'OTA YHTEYTTÄ' }}
        </a>
      </li>
      <li>
        <select id="language-selector" class="bg-gray-700 text-white rounded p-1">
          <option value="en" {{ session('language') === 'en' ? 'selected' : '' }}>EN</option>
          <option value="fi" {{ session('language') === 'fi' ? 'selected' : '' }}>FI</option>
        </select>
      </li>
      <li>
        <button class="toggle-theme bg-gray-700 hover:scale-110 text-white font-bold py-1 px-4 rounded transform transition-transform">
          @if(session('theme') === 'light')
          <img src="{{ asset('sun.png') }}" alt="Sun icon" class="h-6 w-6 theme-icon">
          @else
          <img src="{{ asset('moon.png') }}" alt="Moon icon" class="h-6 w-6 theme-icon">
          @endif
        </button>
      </li>
    </ul>
  </div>
  <div class="sm:hidden">
    <button id="mobile-menu-button" class="text-gray-800 dark:text-white">
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
  </div>

  <div id="mobile-menu"
    class="fixed z-30 inset-0 transform transition-transform duration-200 ease-in-out opacity-0 translate-x-full bg-gray-900 bg-opacity-90 pt-20 hidden">
    <ul class="flex flex-col space-y-4 p-6 list-none">
      <li>
        <a href="{{ route('home') }}#skills" class="hover:scale-110 inline-block p-1 transform transition-transform text-white">
          {{ session('language') === 'en' ? 'SKILLS' : 'TAIDOT' }}
        </a>
      </li>
      <li>
        <a href="{{ route('projects') }}" class="hover:scale-110 inline-block p-1 transform transition-transform text-white">
          {{ session('language') === 'en' ? 'PROJECTS' : 'PROJEKTIT' }}
        </a>
      </li>
      <li>
        <a href="{{ route('contact') }}" class="hover:scale-110 inline-block p-1 transform transition-transform text-white">
          {{ session('language') === 'en' ? 'CONTACT' : 'OTA YHTEYTTÄ' }}
        </a>
      </li>
      <li>
        <select id="mobile-language-selector" class="bg-gray-700 text-white rounded p-1">
          <option value="en" {{ session('language') === 'en' ? 'selected' : '' }}>EN</option>
          <option value="fi" {{ session('language') === 'fi' ? 'selected' : '' }}>FI</option>
        </select>
      </li>
      <li>
        <button class="toggle-theme bg-gray-700 hover:scale-110 text-white font-bold py-1 px-4 rounded transform transition-transform">
          @if(session('theme') === 'light')
          <img src="{{ asset('sun.png') }}" alt="Sun icon" class="h-6 w-6 theme-icon">
          @else
          <img src="{{ asset('moon.png') }}" alt="Moon icon" class="h-6 w-6 theme-icon">
          @endif
        </button>
      </li>
    </ul>
  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Mobile menu toggle
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', function() {
      if (mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.remove('hidden', 'opacity-0', 'translate-x-full');
        mobileMenu.classList.add('opacity-90', 'translate-x-0');
      } else {
        mobileMenu.classList.add('opacity-0', 'translate-x-full');
        setTimeout(() => {
          mobileMenu.classList.add('hidden');
        }, 200);
      }
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

  // Add hover scale effect to all nav links
  document.querySelectorAll('nav a, nav button').forEach(el => {
    el.addEventListener('mouseover', function() {
      this.style.transform = 'scale(1.1)';
    });
    el.addEventListener('mouseout', function() {
      this.style.transform = 'scale(1)';
    });
  });
});
</script>
