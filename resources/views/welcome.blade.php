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
<br />
<div>
  
<h1 class="text-4xl  font-bold text-center text-white">
    Pourquoi choisir Moneom ?
</h1>
  
<p class="mt-6 text-lg md:text-xl text-gray-300 text-center max-w-3xl mx-auto leading-relaxed">
    Plus qu'un simple outil financier, Moneom <br class="hidden md:block" />
    transforme votre gestion patrimoniale en une expérience simple, claire et efficace.
</p>
</div>

<br />
<div class="py-12">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center">
      
      <div class="bg-[#00379e] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-bolt text-2xl mb-4"></i>
          <h1 class="text-lg font-bold mb-2">Simplicité et accessibilité</h1>
          <p class="text-sm text-gray-300">Notre plateforme intuitive vous permet de visualiser et gérer vos projets financiers en quelques clics.</p>
        </div>
      </div>

      <div class="bg-[#299200] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-shoe-prints text-2xl mb-4"></i>
          <h1 class="text-lg font-bold mb-2">Outil sur mesure</h1>
          <p class="text-sm text-gray-300">Des solutions dédiées pour votre retraite, vos investissements immobiliers et la diversification de votre portefeuille.</p>
        </div>
      </div>

      <div class="bg-[#9d0bff] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-gopuram text-2xl mb-4"></i>
          <h1 class="text-lg font-bold mb-2">Gestion immobilière</h1>
          <p class="text-sm text-gray-300">Suivez vos loyers, automatisez les quittances et centralisez les informations de vos locataires.</p>
        </div>
      </div>

      <div class="bg-[#d85600] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-lock text-2xl mb-4"></i>
          <h1 class="text-lg font-bold mb-2">Sécurité et confidentialité</h1>
          <p class="text-sm text-gray-300">Vos données ne sont ni collectées ni partagées avec des tiers. Votre confiance est notre priorité.</p>
        </div>
      </div>

    </div>
  </div>
</div>


<div>
  <h1 class="text-4xl  font-bold text-center text-white">
   Nos outils financiers
</h1>
<br />
 <center><p class="text-xl text-gray-300">Découvrez notre sélection d'outils dédiés à l'optimisation de votre patrimoine

</p></center>

</div> 

<div class="py-12">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-items-center">
      
      <div class="bg-[#00379e] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-house"></i>
          <h2 class="text-lg font-bold mb-2">Simulateur de Viager</h2>
          <p class="text-sm text-gray-300">Estimez rapidement la rentabilité et les conditions de votre investissement en viager</p>
        </div>
      </div>

      <div class="bg-[#299200] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-shield-halved"></i>
          <h2 class="text-lg font-bold mb-2">IA Anti-fraude</h2>
          <p class="text-sm text-gray-300">Analysez vos documents avec notre IA anti-fraude</p>
        </div>
      </div>

      <div class="bg-[#9d0bff] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-tower-observation"></i>
          <h2 class="text-lg font-bold mb-2">Bail Réel Solidaire</h2>
          <p class="text-sm text-gray-300">Évaluez vos opérations de rachat de biens immobiliers</p>
        </div>
      </div>

      <div class="bg-[#d85600] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
         <i class="fa-solid fa-fire"></i>
          <h2 class="text-lg font-bold mb-2">Retraite en avance FIRE</h2>
          <p class="text-sm text-gray-300">Planifiez votre indépendance financière et retraite anticipée</p>
        </div>
      </div>

      <div class="bg-[#0288d1] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-sack-dollar"></i>
          <h2 class="text-lg font-bold mb-2">Réduction d'impôts</h2>
          <p class="text-sm text-gray-300">Optimisez votre fiscalité et réduisez vos impôts</p>
        </div>
      </div>

      <div class="bg-[#6a1b9a] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-globe"></i>
          <h2 class="text-lg font-bold mb-2">Société Offshore</h2>
          <p class="text-sm text-gray-300">Évaluez la possibilité d'une structure offshore pour votre société</p>
        </div>
      </div>

    </div>
  </div>
</div>

<div>
  <h1 class="text-4xl  font-bold text-center text-white">
Ce que disent nos utilisateurs</h1>
<br />
 <center><p class="text-xl text-gray-300">Découvrez notre sélection d'outils dédiés à l'optimisation de votre patrimoine

</p></center>

</div>


<div class="bg-[#6a1b9a] text-white rounded-2xl p-6 shadow-md hover:shadow-lg transition w-full max-w-xs">
        <div class="text-center">
          <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i>
          <p class="text-sm text-gray-300">"Grâce à Moneom, j'ai enfin une vision claire de mon patrimoine immobilier. La gestion des loyers est devenue un jeu d'enfant !"</p>

          <h3 class="text-lg font-bold mb-2">Marie L. - Investisseuse immobilier</h3>
        </div>
      </div>

<script src="https://kit.fontawesome.com/0b85dff651.js" crossorigin="anonymous"></script>

</body>
</html>
