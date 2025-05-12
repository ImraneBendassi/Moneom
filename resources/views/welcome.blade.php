<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test TailwindCSS</title>
    @vite('resources/css/app.css')  <!-- Assurez-vous que le fichier CSS est chargé -->
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="text-center bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-blue-600">Hello, TailwindCSS!</h1>
            <p class="mt-4 text-lg text-gray-600">This is a simple test of TailwindCSS in Laravel.</p>
        </div>
    </div>

</body>
</html>
