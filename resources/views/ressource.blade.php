<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ressource</title>
</head>
<body>
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
        <a href="/" class="text-lg hover:text-gray-300">Fonctionnalités</a>
        <a href="/ressource" class="text-lg hover:text-gray-300">Ressources</a>
        <a href="/register" class="text-lg hover:text-gray-300">Contact</a>
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
      <a href="/resource.php" class="block text-lg text-white hover:text-gray-300">Ressources</a>
      <a href="/contact" class="block text-lg text-white hover:text-gray-300">Contact</a>
    </div>
  </div>
</header>

<h1>Hello World</h1>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>