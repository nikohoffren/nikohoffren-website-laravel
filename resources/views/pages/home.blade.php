@extends('layouts.app')

@section('content')
<main class="mt-8">
  <div class="py-10"></div>
  <section>
    <div class="grid lg:grid-cols-2 gap-8 items-center mx-auto container px-4 sm:px-6 lg:px-8">
      <div>
        <h1 class="text-center sm:text-left text-6xl font-semibold mb-2">
          {{ session('language') === 'en' ? "I'm Niko Hoffrén" : "Olen Niko Hoffrén" }}
        </h1>
        <h2 class="text-center sm:text-left text-3xl font-semibold mb-4 mt-4">
          {{ session('language') === 'en' ? "Software Engineer" : "Ohjelmistokehittäjä" }}
        </h2>
        <div class="text-center sm:text-left mb-10">
          <a href="{{ route('contact') }}">
            <button class="btn btn-primary btn-ghost btn-shine text-white">
              {{ session('language') === 'en' ? "HIRE ME" : "PALKKAA MINUT" }}
            </button>
          </a>
        </div>
        <div class="text-center sm:text-left mt-4 text-base space-y-4">
          <p>
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
          <p>
            @if(session('language') === 'en')
            The page you are currently reading has been created using Laravel and PHP. In addition, I have developed,
            among other things, various projects which you can find in the
            <a class="underline text-blue-600 hover:text-red-600" href="{{ route('projects') }}">Projects</a>-section.
            @else
            Sivu jota luet tällä hetkellä on luotu käyttäen Laravelia ja PHP:tä. Lisäksi olen tehnyt lukuisasti muita
            projekteja joista lisätietoja löydät
            <a class="underline text-blue-600 hover:text-red-600" href="{{ route('projects') }}">Projektit</a>-osiosta.
            @endif
          </p>
          <p>
            @if(session('language') === 'en')
            I like contributing to open-source software and it's one of the ways I've chosen to give back to the
            community.
            @else
            Pidän osallistumisesta avointen lähdekoodien ohjelmistojen kehittämiseen ja se on yksi tapa, jolla olen
            valinnut antaa panokseni yhteisölle.
            @endif
          </p>
          <p>
            @if(session('language') === 'en')
            I'm always eager to connect with like-minded individuals, potential collaborators, or anyone curious about
            my work. Feel free to reach out to me with any queries or opportunities. Let's code, collaborate, and create
            together!
            @else
            Olen aina innokas tekemään yhteistyötä samanhenkisten yksilöiden, potentiaalisten yhteistyökumppaneiden tai
            kenen tahansa kanssa, joka on utelias työstäni. Ota rohkeasti yhteyttä minuun, jos sinulla on kysyttävää tai
            mahdollisuuksia tarjolla. Koodataan, tehdään yhteistyötä ja luodaan yhdessä!
            @endif
          </p>
        </div>
      </div>
      <div>
        <div id="loader" class="loader mx-auto"></div>
        <img id="profileImage" src="{{ asset('nikohoffren_new3.jpg') }}" alt="Niko Hoffrén" class="rounded-full mx-auto"
          width="600" height="600">
      </div>
    </div>
  </section>

  <section id="skills" class="bg-black bg-opacity-10 mt-6">
    <div class="py-10"></div>
    <div class="py-5"></div>
    <h1 class="text-5xl font-bold mb-10 text-center prose-lg prose-purple">
      {{ session('language') === 'en' ? "SKILLS" : "TAIDOT" }}
    </h1>
    <div class="py-5"></div>
    <div class="flex flex-wrap justify-center lg:w-2/4 mx-auto">
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=react" alt="React icon" width="80" height="80">
        <br>React
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=nextjs" alt="NextJS icon" width="80" height="80">
        <br>NextJS
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=javascript" alt="JavaScript icon" width="80" height="80">
        <br>JavaScript
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=typescript" alt="TypeScript icon" width="80" height="80">
        <br>TypeScript
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=html" width="80" height="80" alt="HTML5">
        <br>HTML5
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=css" width="80" height="80" alt="css">
        <br>CSS
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=tailwind" width="80" height="80" alt="tailwind">
        <br>Tailwind
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=flutter" width="80" height="80" alt="flutter">
        <br>Flutter
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=dart" width="80" height="80" alt="dart">
        <br>Dart
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=mysql" width="80" height="80" alt="mysql">
        <br>MySQL
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=aws" width="80" height="80" alt="aws">
        <br>AWS
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=gcp" width="80" height="80" alt="gcp">
        <br>GCP
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=terraform" width="80" height="80" alt="terraform">
        <br>Terraform
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=docker" width="80" height="80" alt="docker">
        <br>Docker
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=maven" width="80" height="80" alt="maven">
        <br>Maven
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=nodejs" width="80" height="80" alt="nodejs">
        <br>NodeJS
      </div>
      <div class="m-4 text-center">
        <img src="https://skillicons.dev/icons?i=linux" width="80" height="80" alt="linux">
        <br>Linux
      </div>
      <div class="m-4 text-center">
        <img src="https://user-images.githubusercontent.com/25181517/192108372-f71d70ac-7ae6-4c0d-8395-51d8870c2ef0.png"
          width="80" height="80" alt="Git">
        <br>Git
      </div>
    </div>
    <div class="py-10"></div>
  </section>
</main>
@endsection
