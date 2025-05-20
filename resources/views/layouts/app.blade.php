<!DnOCTYPE html>
    <html lang="ja">


    <head>
        <meta charset="UTF-8">
        <!-- @とは？関数？ -->
        <title>@yield('title', 'Modern Web')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/css/custom.css', 'resources/js/fade.js'])
    </head>f

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
            <!-- 変数使用可能？ -->
            &copy; {{ date('Y') }} Modern Web by {{ $name }}
        </footer>
    </body>

    </html>
