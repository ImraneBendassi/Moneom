<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ressource</title>
</head>
<body class="bg-sky-950">
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
<br /> <br /> <br />


<h1 class="text-6xl md:text-6xl font-extrabold text-center text-blue">
   Blog Moneom
  </h1>

  <p class="mt-6 text-lg md:text-xl text-gray-300 text-center max-w-3xl mx-auto leading-relaxed">
   Découvrez nos articles et conseils pour optimiser votre patrimoine 
 <br class="hidden md:block" />
   et atteindre vos objectifs financiers.
  </p>

<div class="flex justify-center mt-10">
  <div class="relative w-full max-w-md">
    <input
      type="text"
      placeholder="Rechercher..."
      class="w-full pl-10 pr-4 py-2 border rounded-2xl shadow focus:outline-none focus:ring-2 focus:ring-blue-500"
    />
    <div class="absolute left-3 top-2.5 text-gray-400">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
      </svg>
    </div>
  </div>
  <button class="bg-yellow-400 text-gray-900 font-semibold py-2 px-4 rounded-lg hover:bg-yellow-300 transition">
          Rechercher
        </button>
  </div>
<br /> <br /> <br /> <br /> <br /> <br />
<h1 class="text-4xl md:text-4xl font-extrabold text-white">
    Articles récents
</h1>

     <div class="bg-[#4e4e4e] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center space-y-4">resources\img\purina.png
            <img src="resources\img\purina.png">
          </div>
          <p class="text-sm text-gray-300">
            "Je cherchais un outil gratuit pour optimiser ma fiscalité. Moneom a dépassé mes attentes avec des conseils pertinents et faciles à appliquer."
          </p>
          <h3 class="text-lg font-bold">Sophie R. - Entrepreneur</h3>
        </div>
      </div>

    </div>
  </div>
</div>

<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>