<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienes Raices | @yield('title')</title>

        @vite(['resources/css/app.css','resources/scss/style.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div>
            @yield('content')
        </div>
        
    </body>
</html>
