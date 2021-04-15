<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">

        @yield('content')

        <!-- en variable access to config  -->
        {{config('app.name')}}
        {{config('projet.slogan')}}


        <footer>
            <p>
                &copy; Copyrigth {{date('Y')}}
                &middot; <a href="{{route('home')}}">About Us  </a>
            </p>
        </footer>
    </body>
</html>
