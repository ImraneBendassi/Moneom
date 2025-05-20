<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white flex flex-col items-center justify-center min-h-screen">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg text-center w-full max-w-xl">
        <h1 class="text-3xl font-bold mb-4">Bienvenue, {{ Auth::user()->name }} 🎉</h1>
        <p class="mb-6">Vous êtes connecté à votre tableau de bord.</p>

        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white font-semibold">
                Se déconnecter
            </button>
        </form>
    </div>
</body>
</html>
    