<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #f7f7f7;
        }
        h1 {
            font-family: 'Pacifico',;
            color: #ff6f61;
        }
    </style>
</head>
<body class="bg-pink-50">
    <header class="bg-purple-800 text-yellow-100 p-8 shadow-xl">
        <h1 class="text-center text-5xl font-extrabold">Ugly Book List</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-yellow-500 text-purple-900 p-8 mt-6 text-center">
        <p>&copy; Ugly Book List Year 2020204</p>
    </footer>
</body>
</html>
