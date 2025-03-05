<section class="bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-white py-8 transition-colors duration-300">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-center space-x-4 mb-4">
      <a href="https://www.linkedin.com/in/nikohoffren" target="_blank" rel="noopener noreferrer"
        class="text-3xl text-blue-500 hover:text-blue-400">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="https://www.github.com/nikohoffren" target="_blank" rel="noopener noreferrer"
        class="text-3xl text-gray-600 dark:text-gray-400 hover:text-gray-500 dark:hover:text-gray-300">
        <i class="fa fa-github"></i>
      </a>
      <a href="https://www.instagram.com/nikohoffren" target="_blank" rel="noopener noreferrer"
        class="text-3xl text-pink-500 hover:text-pink-400">
        <i class="fa fa-instagram"></i>
      </a>
    </div>
    <p class="text-center mb-2">Email: niko.hoffren@gmail.com</p>
    <p class="text-center mb-4">
      {{ session('language') === 'en' ? 'My music: ' : 'Musiikkini: ' }}
      <a href="https://nikohoffrenmusic.netlify.app/" target="_blank" rel="noopener noreferrer"
        class="underline text-blue-400 hover:text-blue-300">
        nikohoffrenmusic.netlify.app
      </a>
    </p>
    <div class="text-center text-sm space-y-2">
      <p>
        {{ session('language') === 'en' ? 'Copyright © 2020-2025 Niko Hoffrén' : 'Tekijänoikeus © 2020-2025 Niko Hoffrén' }}
      </p>
      <p>
        {{ session('language') === 'en' ? 'Coded with Laravel + PHP. Hosted by Digital Ocean' : 'Laravel + PHP + Digital Ocean' }}
      </p>
    </div>
  </div>
</section>
