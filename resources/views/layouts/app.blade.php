<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<style>
    .navbar {
        background-color: #B0A695;
        padding: 0px;
    }

    .menu a {
        color: #FFF;
        font-family: Bree Serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-decoration: none;
        margin-inline: 25px;
    }
</style>

<body>
    <div id="app">
        @include('partials.navbar')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
