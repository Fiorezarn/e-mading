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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    .navbar {
        background-color: #B0A695;
        padding: 0px;
    }

    .logo {
        color: #000;
        font-family: Lustria;
        font-size: 40px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
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

    footer {
        height: 80px;
        bottom: 0px;
        width: 100%;
    }

    .btn-detail {
        width: 207px;
        height: 44px;
        flex-shrink: 0;
        border-radius: 12px;
        color: #000;
        font-family: Lustria;
        font-size: 24px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
</style>

<body>
    <div id="app">
        @include('partials.navbar_user')

        @yield('content')

        @include('partials.footer')
    </div>
</body>

</html>
