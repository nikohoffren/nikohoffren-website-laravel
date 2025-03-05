@extends('layouts.app')

@section('content')
<div class="py-10 px-8 md:px-16 rounded-lg my-10 mx-4 md:mx-8 lg:mx-16">
  <div class="py-10"></div>
  <h1 class="text-5xl font-bold mb-10 text-center">
    {{ session('language') === 'en' ? 'CONTACT' : 'OTA YHTEYTTÄ' }}
  </h1>
  <form action="https://formspree.io/f/xyyarzbk" method="POST" class="w-full max-w-lg mx-auto">
    <p class="mb-8 text-xl">
      @if(session('language') === 'en')
      Contact me via this form for job opportunities or other requests, and I'll get back to you as soon as I can! You
      can also contact me by sending a DM on
      <a href="https://www.twitter.com/nikohoffren86" class="text-blue-500 hover:text-blue-700 underline"
        target="_blank" rel="noreferrer">X</a>,
      <a href="https://www.instagram.com/nikohoffren" class="text-blue-500 hover:text-blue-700 underline"
        target="_blank" rel="noreferrer">Instagram</a>
      , or
      <a href="https://www.linkedin.com/in/nikohoffren" class="text-blue-500 hover:text-blue-700 underline"
        target="_blank" rel="noreferrer">LinkedIn</a>.
      @else
      Ota minuun yhteyttä työtarjouksien tai muiden pyyntöjen kanssa tämän lomakkeen avulla, niin palaan asiaan
      mahdollisimman pian! Voit myös ottaa minuun yhteyttä lähettämällä viestin
      <a href="https://www.twitter.com/nikohoffren86" class="text-blue-500 hover:text-blue-700 underline"
        target="_blank" rel="noreferrer">X:ssä</a>,
      <a href="https://www.instagram.com/nikohoffren" class="text-blue-500 hover:text-blue-700 underline"
        target="_blank" rel="noreferrer">Instagramissa</a>
      , tai
      <a href="https://www.linkedin.com/in/nikohoffren" class="text-blue-500 hover:text-blue-700 underline"
        target="_blank" rel="noreferrer">LinkedInissä</a>.
      @endif
    </p>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-email">
          {{ session('language') === 'en' ? 'Your email:' : 'Sähköpostisi:' }}
        </label>
        <input
          class="appearance-none block w-full bg-gray-200 border rounded py-3 px-4 mb-3 text-gray-900 leading-tight focus:outline-none focus:bg-white"
          type="email" name="email" id="grid-email" required>
      </div>
      <div class="w-full md:w-full px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="grid-message">
          {{ session('language') === 'en' ? 'Your message:' : 'Viestisi:' }}
        </label>
        <textarea
          class="appearance-none block w-full h-32 bg-gray-200 border rounded py-3 px-4 mb-3 text-gray-900 leading-tight focus:outline-none focus:bg-white"
          name="message" id="grid-message" required></textarea>
      </div>
      <div class="w-full md:w-full flex items-center justify-center">
        <button type="submit"
          class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
          {{ session('language') === 'en' ? 'Send' : 'Lähetä' }}
        </button>
      </div>
    </div>
  </form>
  <div class="py-10"></div>
</div>
@endsection
