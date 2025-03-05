@extends('layouts.app')

@section('content')
<section class="py-10 px-8 md:px-16 rounded-lg my-10 mx-4 md:mx-8 lg:mx-16">
  <div class="py-10"></div>
  <h1 class="text-5xl font-bold mb-10 text-center">
    {{ session('language') === 'en' ? 'PROJECTS' : 'PROJEKTIT' }}
  </h1>

  <p class="mb-6 text-center">
    {{ session('language') === 'en' ? 'Find all of my projects and open-source contributions on ' : 'Löydät kaikki projektini sekä avoimen lähdekoodin kontribuutioni ' }}
    <a href="https://www.github.com/nikohoffren" class="text-blue-500 hover:text-blue-700 underline" target="_blank"
      rel="noreferrer">
      {{ session('language') === 'en' ? 'Github' : 'Githubista' }}
    </a>.
  </p>
    <div class="flex justify-center items-center my-8">
    <div class="sponsor-container" style="width: 650px; max-width: 100%; overflow: hidden;">
      <iframe src="https://github.com/sponsors/nikohoffren/card" title="Sponsor nikohoffren"
        style="width: 100%; border: 0; border-radius: 0.75rem; transform: scale(0.97);"
        scrolling="no" id="sponsor-iframe"></iframe>
    </div>
  </div>

  <script>
    // Adjust iframe height based on screen width
    function adjustSponsorHeight() {
      const iframe = document.getElementById('sponsor-iframe');
      const container = document.querySelector('.sponsor-container');

      if (window.innerWidth < 550) {
        // For mobile screens, increase height to accommodate the wrapped sponsor button
        iframe.style.height = '170px';
        container.style.height = '170px';
      } else {
        // For larger screens, use the original height
        iframe.style.height = '110px';
        container.style.height = '110px';
      }
    }

    // Run when the page loads
    document.addEventListener('DOMContentLoaded', adjustSponsorHeight);

    // Also run when the window is resized
    window.addEventListener('resize', adjustSponsorHeight);
  </script>
  <div
    class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">

    <!-- Dead Code Hunter -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://marketplace.visualstudio.com/items?itemName=niko-hoffren.dead-code-hunter" target="_blank"
        class="w-full block h-full">
        <div id="loader1" class="loader mx-auto"></div>
        <img src="{{ asset('dead-code-hunter-logo.png') }}" alt="Dead Code Hunter -logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader1').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'DEAD CODE HUNTER - VS Code Extension' : 'DEAD CODE HUNTER - VS Code Laajennus' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          Dead Code Hunter is a Visual Studio Code extension designed to help developers track and manage unused code in
          their
          projects. It integrates with the VS Code diagnostic system to detect errors, warnings, and dead code across
          your files and lists them in an
          easy-to-navigate panel. Tools: TypeScript.
          @else
          Dead Code Hunter on Visual Studio Code -laajennus, joka auttaa kehittäjiä jäljittämään ja hallitsemaan
          käyttämätöntä koodia
          projekteissaan. Se integroituu VS Coden diagnostiikkajärjestelmään havaitakseen virheet, varoitukset
          ja kuolleen koodin ja listaa ne helposti selattavaan paneeliin. Työkalut: TypeScript.
          @endif
        </p>
        <a href="https://marketplace.visualstudio.com/items?itemName=niko-hoffren.dead-code-hunter" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          Dead Code Hunter in VS Code Marketplace
        </a>
        <br>
        <a href="https://github.com/nikohoffren/dead-code-hunter" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2025 - present
        </p>
      </div>
    </div>

    <!-- Hunajaholistin Hunaja -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://www.hunajaholisti.fi" target="_blank" class="w-full block h-full">
        <div id="loader2" class="loader mx-auto"></div>
        <img src="{{ asset('HHlahja.jpg') }}" alt="Bottle of delicious honey from Hunajaholistin Hunaja"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader2').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'HUNAJAHOLISTIN HUNAJA - E-Commerce Website' : 'HUNAJAHOLISTIN HUNAJA - Verkkosivusto' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          Finnish e-commerce platform designed for the sale of honey products, featuring an integrated shopping cart and
          secure
          checkout functionality powered by Stripe. Tools: React, Vite, TypeScript, Tailwind CSS, Netlify Functions,
          Firebase and Stripe.
          <br><br>
          @else
          Suomalainen verkkokauppa-alusta hunajatuotteiden myyntiin, joka sisältää integroidun ostoskorin ja turvallisen
          Stripe-maksutoiminnon.
          <br><br>
          Työkalut: React, Vite, TypeScript, Tailwind CSS, Netlify Functions, Firebase ja Stripe.
          @endif
        </p>
        <a href="https://www.hunajaholisti.fi" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          hunajaholisti.fi
        </a>
        <br>
        <a href="https://github.com/nikohoffren/hunajaholisti-homepage" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          {{ session('language') === 'en' ? '2021 - present' : '2021 - nykyhetki' }}
        </p>
      </div>
    </div>

    <!-- Fork, Commit, Merge Website -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://forkcommitmerge.vercel.app/" target="_blank" class="w-full block h-full">
        <div id="loader3" class="loader mx-auto"></div>
        <img src="{{ asset('fork-commit-merge-web-banner.png') }}" alt="Fork, Commit, Merge -banner"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader3').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'FORK, COMMIT, MERGE - Website' : 'FORK, COMMIT, MERGE - Verkkosivusto' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          Welcome to Fork, Commit, Merge! Your one-stop resource hub for mastering GitHub contributions! Whether you're
          a novice coder
          or an experienced developer, our comprehensive guides are designed to streamline your GitHub journey. Tools:
          React,
          NextJS, TypeScript, Tailwind CSS, MongoDB and AWS S3.
          <br><br><br>
          @else
          Tämä sivusto on yhden pysähdyksen resurssikeskus GitHub-kontribuutioiden hallitsemiseen! Riippumatta siitä,
          oletko aloitteleva koodaaja vai kokenut kehittäjä, kattavat oppaamme on suunniteltu helpottamaan
          GitHub-matkaasi.
          Työkalut: React, NextJS, TypeScript, Tailwind CSS, MongoDB ja AWS S3.
          <br><br>
          @endif
        </p>
        <a href="https://forkcommitmerge.vercel.app/" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          https://forkcommitmerge.vercel.app/
        </a>
        <br>
        <a href="https://github.com/nikohoffren/fork-commit-merge-web" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2023 - present
        </p>
      </div>
    </div>

    <!-- Fork, Commit, Merge GitHub project -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://github.com/nikohoffren/fork-commit-merge" target="_blank" class="w-full block h-full">
        <div id="loader4" class="loader mx-auto"></div>
        <img src="{{ asset('fork-commit-merge-logo.jpg') }}" alt="Fork, Commit, Merge -logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader4').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'FORK, COMMIT, MERGE - Github project for learning to contribute' : 'FORK, COMMIT, MERGE - Github projekti kontribuutioiden opettelemiseen' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          A project designed to help you familiarize yourself with the open source contribution workflow on GitHub! We present tasks
          of varying difficulty. You're free to choose of many different languages and frameworks. Tools: JavaScript, Node.js.
          <br>
          @else
          Projekti, joka on suunniteltu auttamaan sinua perehtymään avoimen lähdekoodin kontribuutioiden työnkulkuun GitHubissa!
          Tarjoamme useita eri tehtäviä eri vaikeusasteilla. Työkalut: JavaScript, Node.js.
          @endif
        </p>
        <a href="https://github.com/nikohoffren/fork-commit-merge" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2023 - present
        </p>
      </div>
    </div>

    <!-- Stolen Or Not? -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://play.google.com/store/apps/details?id=com.nikohoffren.stolen_gear_app" target="_blank" class="w-full block h-full">
        <div id="loader5" class="loader mx-auto"></div>
        <img src="{{ asset('stolen-gear-logo.jpeg') }}" alt="StolenOrNot? app logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader5').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'Stolen Or Not? - Flutter App' : 'Stolen Or Not? - Flutter Mobiilisovellus' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          This Flutter application is built to help people keep track of their valuable devices and protect them from theft.
          It allows users to register their devices, such as computers, cars, musical instruments, and more.
          Tools: Flutter, Dart & Firebase.
          @else
          Tämä Flutter-sovellus on rakennettu auttamaan ihmisiä pitämään kirjaa arvokkaista laitteistaan ja suojaamaan niitä
          varkauksilta.
          <br><br>
          Saatavilla Google Play Store:sta. Työkalut: Flutter, Dart & Firebase.
          @endif
        </p>
        <br>
        <a href="https://github.com/nikohoffren/stolen-or-not-app" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2023 - present
        </p>
      </div>
    </div>

     <!-- Kuopio Public Transport -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://kuopionjulkinenliikenne.live" target="_blank" class="w-full block h-full">
        <div id="loader6" class="loader mx-auto"></div>
        <img src="{{ asset('Vilkku_sydan_violetti.png') }}" alt="Vilkku logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader6').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
    <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'KUOPIO PUBLIC TRANSPORT - Website' : 'KUOPION JULKINEN LIIKENNE - Verkkosivusto' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          This platform provides comprehensive real-time tracking and route information for all Vilkku buses, bicycles, and bike
          taxis operating within the Kuopio/Siilinjärvi region.
          <br>
          Tools: JavaScript, Express.js & Netlify functions.
          @else
          Tämä alusta tarjoaa kattavaa reaaliaikaista seuranta- ja reittitietoa kaikille Vilkku-busseille, polkupyörille ja
          polkupyörätakseille, jotka toimivat Kuopion/Siilinjärven alueella. Työkalut: JavaScript, Express.js & Netlify
          functions.
          @endif
        </p>
        <a href="https://kuopionjulkinenliikenne.live" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          kuopionjulkinenliikenne.live
        </a>
        <br>
        <a href="https://github.com/nikohoffren/kuopio-public-transport" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2023 - present
        </p>
      </div>
    </div>

    <!-- Niko Hoffrén Music -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://nikohoffrenmusic.netlify.app" target="_blank" class="w-full block h-full">
        <div id="loader7" class="loader mx-auto"></div>
        <img src="{{ asset('NHbackground.jpg') }}" alt="Niko Hoffrén logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader7').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'NIKO HOFFRÉN MUSIC - Website' : 'NIKO HOFFRÉN MUSIC - Verkkosivusto' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          This website contains info of my music production related stuff. The website shows all the information you need with
          showcase of my music, videos and gear. It also supports language selection, allowing users to switch between Finnish
          and English languages seamlessly. Tools: Vite, React, TypeScript.
          <br><br>
          @else
          Tämä verkkosivusto sisältää tietoa musiikkituotantooni liittyvistä asioista. Verkkosivusto näyttää kaiken
          tarvitsemasi tiedon musiikkini, videoideni ja soittimieni esittelyn avulla. Se tukee myös kielivalintaa, mahdollistaen
          käyttäjien vaihtaa saumattomasti kielien välillä. Työkalut: Vite, React, TypeScript.
          @endif
        </p>
        <a href="https://nikohoffrenmusic.netlify.app" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          nikohoffrenmusic.netlify.app
        </a>
        <br>
        <a href="https://github.com/nikohoffren/nikohoffrenmusic-homepage" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2020-present
        </p>
      </div>
    </div>

    <!-- KISS CSS -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://www.npmjs.com/package/kiss-css" target="_blank" class="w-full block h-full">
        <div id="loader8" class="loader mx-auto"></div>
        <img src="{{ asset('kiss-css-logo.jpg') }}" alt="KISS CSS logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader8').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          KISS CSS - Framework
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          KISS (Keep It Simple Stylesheets) is a simple, lightweight CSS framework designed for ease of use. It provides a collection
          of reusable CSS classes and components to quickly style your web projects. Published as npm-package. The website and
          detailed documentation are still in the production phase. Tools: CSS, JavaScript & Node.js.
          @else
          KISS (Keep It Simple Stylesheets) on yksinkertainen ja kevyt CSS-kirjasto, joka on suunniteltu helppokäyttöisyyttä
          ajatellen. Se tarjoaa kokoelman uudelleenkäytettäviä CSS-luokkia ja komponentteja. Julkaistu npm-pakettina.
          Web-sivusto ja tarkempi dokumentaatio on vielä tuotantovaiheessa. Työkalut: CSS, JavaScript & Node.js.
          @endif
        </p>
        <a href="https://www.npmjs.com/package/kiss-css" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Download NPM-package' : 'Lataa NPM-paketti' }}
        </a>
        <br>
        <a href="https://github.com/nikohoffren/kiss-css" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2023 - present
        </p>
      </div>
    </div>

    <!-- Smart Meeting Scheduler -->
    <div class="overflow-hidden shadow-lg rounded-lg h-auto md:h-120 w-full md:w-full m-auto">
      <a href="https://chrome.google.com/webstore/detail/smart-meeting-scheduler/icaojehhbdenebdcahljjhnohnjmbpfa" target="_blank" class="w-full block h-full">
        <div id="loader9" class="loader mx-auto"></div>
        <img src="{{ asset('smart-meeting-scheduler-logo.jpg') }}" alt="Smart Meeting Scheduler logo"
          class="max-h-40 w-full object-cover" onload="document.getElementById('loader9').style.display = 'none';">
      </a>
      <div class="bg-white dark:bg-gray-800 w-full p-4">
        <h2 class="text-xl font-medium text-black dark:text-white pb-2">
          {{ session('language') === 'en' ? 'Smart Meeting Scheduler - Chrome Extension' : 'Smart Meeting Scheduler - Chrome laajennus' }}
        </h2>
        <p class="text-md text-gray-800 dark:text-white py-2">
          @if(session('language') === 'en')
          The Smart Meeting Scheduler Chrome Extension is a powerful tool designed to simplify and streamline the process of
          scheduling meetings using Google Calendar. Downloadable in Chrome Webstore!
          <br><br>
          Tools: JavaScript, Node.js.
          @else
          Smart Meeting Scheduler Chrome -laajennus on tehokas työkalu, joka on suunniteltu helpottamaan ja tehostamaan kokousten
          ajanvaraamisprosessia käyttäen Google-kalenteria.
          <br>
          Ladattavissa Chrome Webstoresta! <br>
          Työkalut: JavaScript, Node.js.
          @endif
        </p>
        <a href="https://chrome.google.com/webstore/detail/smart-meeting-scheduler/icaojehhbdenebdcahljjhnohnjmbpfa" target="_blank" class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Download from Chrome Web Store' : 'Lataa Chrome Web Store:sta' }}
        </a>
        <br>
        <a href="https://github.com/nikohoffren/smart-meeting-scheduler" target="_blank"
          class="text-blue-500 hover:text-blue-300 italic">
          {{ session('language') === 'en' ? 'Github source code' : 'Github lähdekoodi' }}
        </a>
        <p class="text-sm text-gray-900 dark:text-white italic my-2">
          2023 - present
        </p>
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Handle image loading to hide loaders once images are loaded
    const projectImages = document.querySelectorAll('.overflow-hidden img');
    projectImages.forEach(img => {
      // Check if the image is already loaded
      if (img.complete) {
        const loaderId = img.getAttribute('onload').match(/document\.getElementById\('(.*?)'\)/)[1];
        const loader = document.getElementById(loaderId);
        if (loader) {
          loader.style.display = 'none';
        }
      }
    });
  });
</script>

  </div>
</section>
@endsection
