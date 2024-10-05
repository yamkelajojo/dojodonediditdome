<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/tailwind.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/fancytext.css">

    </head>
    <body class="font-sans antialiased  dark:text-white/50">
        @if(!Request::is('/'))
        <header>
            <nav class="navbar"><div class="logo-text">DojoDoneDidItDome</div></nav>
        </header>
        @endif
        <div class="container">
            @yield("content")
        </div>
        <footer>CopyRight Dzowdzow 2024</footer>
    </body>
</html>
