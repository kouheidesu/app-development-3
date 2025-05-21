<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Modern Web')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- ViteでCSS/JS読み込み --}}
    @vite(['resources/css/custom.css', 'resources/js/fade.js'])
</head>

<body>
    <header>
        <h1>Modern Web</h1>
        <nav>
            <a href="#about">About</a>
            <a href="#projects">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    @yield('content')

    <footer>
        &copy; {{ date('Y') }} Modern Web by {{ $name }}
    </footer>
</body>

</html>
