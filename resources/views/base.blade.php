<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!--Import style tailwind for stylisation code -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="py-6 flex flex-col jutify-betwen items-center min-h-screen">

        @yield('content')

        <!-- en variable access to config   -->
        {{config('app.name')}}
        {{config('projet.slogan')}}


        <footer class="text-gray-400">
            <p>
                &copy; Copyrigth {{date('Y')}}
                @if (! Route::is('about'))
                    &middot; <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About Us  </a>
                @endif

            </p>
        </footer>
    </body>
</html>
