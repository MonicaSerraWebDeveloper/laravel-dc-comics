<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="nav py-4 d-flex justify-content-center" >
            <a class="nav-link icon-link icon-link-hover" style="color: black"  href="{{ route('index') }}">Home</a>
            <a class="nav-link icon-link icon-link-hover" style="color: black"  href="{{ route('comics.index') }}">Fumetti</a>
            <a class="nav-link icon-link icon-link-hover" style="color: black"  href="{{ route('comics.create') }}">Crea tu un fumetto</a>
        </nav>
    </header>
    <main class="bg-light">
        @yield('content')
    </main>
    <footer class="py-4">
        <div class="container">
            <div class="text-center">All Rights are reserved © 2024</div>
        </div>
    </footer>

</body>

</html>