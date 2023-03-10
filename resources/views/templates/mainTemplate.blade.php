<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
        
    </head>
    <body>
        @include('../components/header')
        <div class="container-xl sm:flex sm:justify-center sm:items-center min-h-screen bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 text-white">
            @yield('content')
        </div>
    </body>
</html>
