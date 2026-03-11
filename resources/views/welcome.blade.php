<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @Vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
       <header><h1>Пример сайта</h1></header>
       <main>
        <p>контент</p>
        <img src="/image/Дрындулет1.jpg" alt="">
        <a href="/second">на вторую страницу</a>
       </main>
       <footer>
        <p>&copy;Пашков Владислав, 2026</p>
       </footer>
    </body>
</html>
