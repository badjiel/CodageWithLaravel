<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Hello City')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        
        @yield('content')
    

        <footer>
            <p>
                &copy; Copyrigth {{date('Y')}} 
                &middot; <a href="about-us">About Us  </a>
            </p>
        </footer>
    </body>
</html>
