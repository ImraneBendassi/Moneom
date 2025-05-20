<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
    <div class="bg-gray-800 p-8 rounded-lg w-full max-w-md shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Connexion</h1>

        @if($errors->any())
            <div class="text-red-500 mb-4">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Adresse email</label>
                <input type="email" name="email" class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Mot de passe</label>
                <input type="password" name="password" class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 py-2 rounded text-white font-semibold">
                Se connecter
            </button>
        </form>

        <p class="mt-4 text-sm text-gray-400">
            Pas encore de compte ?
            <a href="{{ url('/register') }}" class="text-blue-400 hover:underline">S’inscrire</a>
        </p>
    </div>
</body>
</html>
