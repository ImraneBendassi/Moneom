<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MoneOm - Connexion / Inscription</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-900 text-white font-[Inter]">

  <div class="max-w-6xl w-full bg-gray-800 rounded-xl shadow-lg overflow-hidden grid grid-cols-1 md:grid-cols-2">

    <!-- Partie gauche : Formulaire -->
    <div class="p-10">
      <h2 class="text-2xl font-bold mb-2">Bienvenue sur <span class="text-blue-400">MoneOm</span></h2>
      <p class="mb-6 text-sm text-gray-300">Connectez-vous ou créez un compte pour commencer</p>

      <!-- Tabs -->
      <div class="flex space-x-6 border-b border-gray-600 mb-6 pb-2">
        <button id="tab-login" class="text-blue-400 font-semibold border-b-2 border-blue-400 pb-1">Connexion</button>
        <button id="tab-register" class="text-gray-400 hover:text-white">Inscription</button>
      </div>

      <!-- Form Connexion -->
      <form id="form-login" class="space-y-4" action="/login" method="POST">
        @csrf
        <div>
          <label class="block text-sm mb-1">Adresse email</label>
          <input type="email" class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
          <label class="block text-sm mb-1">Mot de passe</label>
          <input type="password" class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
          <a href="#" class="text-sm text-blue-400 hover:underline mt-1 inline-block">Mot de passe oublié ?</a>
        </div>

        <div class="flex items-center">
          <input type="checkbox" id="remember" class="mr-2">
          <label for="remember" class="text-sm">Se souvenir de moi</label>
        </div>

        <button class="w-full bg-blue-500 hover:bg-blue-400 text-white font-semibold py-2 rounded-md transition">Se connecter</button>
      </form>

      <!-- Form Inscription -->
      <form id="form-register" class="space-y-4 hidden">
        <div>
          <label class="block text-sm mb-1">Nom complet</label>
          <input type="text" class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
          <label class="block text-sm mb-1">Adresse email</label>
          <input type="email" class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
          <label class="block text-sm mb-1">Mot de passe</label>
          <input type="password" class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <div>
          <label class="block text-sm mb-1">Confirmez le mot de passe</label>
          <input type="password" class="w-full px-4 py-2 rounded-md bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>

        <button class="w-full bg-blue-500 hover:bg-blue-400 text-white font-semibold py-2 rounded-md transition">Créer un compte</button>
      </form>

      <!-- Séparateur -->
      <div class="my-6 flex items-center justify-center">
        <div class="border-t border-gray-600 w-full"></div>
        <span class="mx-4 text-sm text-gray-400">Ou continuer avec</span>
        <div class="border-t border-gray-600 w-full"></div>
      </div>

      <!-- Boutons sociaux -->
      <div class="space-y-3">
        <button class="w-full flex items-center justify-center gap-2 bg-gray-700 hover:bg-gray-600 py-2 rounded-md border border-gray-600">
          <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5">
          Google
        </button>
        <button class="w-full flex items-center justify-center gap-2 bg-gray-700 hover:bg-gray-600 py-2 rounded-md border border-gray-600">
          <img src="https://www.svgrepo.com/show/448234/linkedin.svg" alt="LinkedIn" class="w-5 h-5">
          LinkedIn
        </button>
      </div>
    </div>

    <!-- Partie droite d'information -->
    <div class="bg-gradient-to-br from-blue-800 to-blue-600 p-10 text-white flex flex-col justify-center">
      <h3 class="text-2xl font-bold mb-4">La gestion financière simplifiée</h3>
      <p class="text-sm mb-6">MoneOm vous accompagne dans l'optimisation de votre patrimoine financier et immobilier grâce à des outils puissants et intuitifs.</p>

      <ul class="space-y-4 text-sm">
        <li>
          ✅ <strong>Simulateurs financiers avancés</strong><br>
          <span class="text-gray-100">Calculez vos capacités d’emprunt, optimisez vos investissements immobiliers.</span>
        </li>
        <li>
          ✅ <strong>Tableau de bord personnalisé</strong><br>
          <span class="text-gray-100">Suivez vos finances et vos projets en un coup d'œil.</span>
        </li>
        <li>
          ✅ <strong>Conseils personnalisés</strong><br>
          <span class="text-gray-100">Recevez des recommandations adaptées à votre situation.</span>
        </li>
      </ul>

      <a href="#" class="mt-6 inline-block text-blue-200 hover:underline text-sm">En savoir plus sur nos outils →</a>
    </div>
  </div>

  <!-- JS pour le switch -->
  <script>
    const loginBtn = document.getElementById('tab-login');
    const registerBtn = document.getElementById('tab-register');
    const loginForm = document.getElementById('form-login');
    const registerForm = document.getElementById('form-register');

    loginBtn.addEventListener('click', () => {
      loginForm.classList.remove('hidden');
      registerForm.classList.add('hidden');
      loginBtn.classList.add('text-blue-400', 'border-blue-400', 'font-semibold', 'border-b-2');
      registerBtn.classList.remove('text-blue-400', 'border-blue-400', 'font-semibold', 'border-b-2');
      registerBtn.classList.add('text-gray-400');
    });

    registerBtn.addEventListener('click', () => {
      registerForm.classList.remove('hidden');
      loginForm.classList.add('hidden');
      registerBtn.classList.add('text-blue-400', 'border-blue-400', 'font-semibold', 'border-b-2');
      loginBtn.classList.remove('text-blue-400', 'border-blue-400', 'font-semibold', 'border-b-2');
      loginBtn.classList.add('text-gray-400');
    });
  </script>

</body>
</html>
