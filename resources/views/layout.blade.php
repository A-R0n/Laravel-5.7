<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laracasts')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            
        </style>
    </head>
    <body>
        
        <p>
            <li><a href="/contact">Contact</a> us to learn more</li>
            <li><a href="/about">About</a></li>
            <li><a href="/">Home</a></li>
        </p>
        @yield('content')
    </body>
</html>