<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
    <div class="bg-gray-800 p-8 rounded-lg w-full max-w-md shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Créer un compte</h1>

        @if($errors->any())
            <ul class="text-red-500 mb-4">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ url('/register') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-1">Nom complet</label>
                <input type="text" name="name" class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Adresse email</label>
                <input type="email" name="email" class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Mot de passe</label>
                <input type="password" name="password" class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1">Confirmation mot de passe</label>
                <input type="password" name="password_confirmation" class="w-full px-3 py-2 rounded bg-gray-700 border border-gray-600" required>
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 py-2 rounded text-white font-semibold">
                S’inscrire
            </button>
        </form>

        <p class="mt-4 text-sm text-gray-400">
            Vous avez déjà un compte ?
            <a href="{{ url('/login') }}" class="text-blue-400 hover:underline">Se connecter</a>
        </p>
    </div>
</body>
</html>
