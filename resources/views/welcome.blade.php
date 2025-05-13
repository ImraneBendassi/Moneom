<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moneom</title>
    @vite('resources/css/app.css') <!-- Assurez-vous que le fichier CSS est chargé -->
</head>
<body class="bg-gray-100">
<header class="bg-gray-800 text-white py-4">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between">
      
      <!-- Logo -->
      <div class="text-2xl font-bold">
        <a href="/" class="text-blue-500">moneom</a>
      </div>

      <!-- Navigation centrée -->
      <nav class="hidden md:flex flex-1 justify-center space-x-6">
        <a href="/" class="text-lg hover:text-gray-300">Accueil</a>
        <a href="/services" class="text-lg hover:text-gray-300">Fonctionnalités</a>
        <a href="/resources" class="text-lg hover:text-gray-300">Ressources</a>
        <a href="/contact" class="text-lg hover:text-gray-300">Contact</a>
      </nav>

      <!-- Menu Burger + Bouton -->
      <div class="flex items-center space-x-4">
        <!-- Bouton -->
        <button class="hidden md:inline-block bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700 transition">
          Commencer
        </button>

        <!-- Menu Burger (Mobile) -->
        <button id="burgerMenu" class="md:hidden text-white hover:text-gray-300 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>

    <!-- Menu déroulant (Mobile) -->
    <div id="mobileMenu" class="md:hidden mt-4 space-y-4 hidden">
      <a href="/" class="block text-lg text-white hover:text-gray-300">Accueil</a>
      <a href="/services" class="block text-lg text-white hover:text-gray-300">Fonctionnalités</a>
      <a href="/resources" class="block text-lg text-white hover:text-gray-300">Ressources</a>
      <a href="/contact" class="block text-lg text-white hover:text-gray-300">Contact</a>
    </div>
  </div>
</header>

<div class="w-full bg-gradient-to-r from-[#1b1e2b] via-[#1b1f3a] to-[#232849] py-20 px-6 shadow-lg">
  <h1 class="text-5xl md:text-6xl font-extrabold text-center text-white">
    Votre patrimoine <span class="bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">à portée de main</span>
  </h1>

  <p class="mt-6 text-lg md:text-xl text-gray-300 text-center max-w-3xl mx-auto leading-relaxed">
    Moneom vous guide pas à pas pour comprendre, maîtriser et <br class="hidden md:block" />
    optimiser votre argent – le tout gratuitement et sans engagement.
  </p>

  <div class="mt-10 flex justify-center flex-wrap gap-4">
    <button class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white font-semibold py-3 px-6 rounded-xl hover:brightness-110 transition shadow-lg">
      Commencer gratuitement
    </button>
    <button class="border border-blue-400 text-blue-300 font-semibold py-3 px-6 rounded-xl hover:bg-blue-900/20 transition shadow-lg">
      Découvrir les fonctionnalités
    </button>
  </div>
</div>


<script>
</script>

</body>
</html>
