<!DOCTYPE html>
<html lang="{{ $lang }}">
    <head>
        <meta charset="{{ $charset }}">
        <meta name="viewport" content="{{ $viewport }}">
        <title>{{ $title }}</title>

        @yield('head')
    </head>
    <body>
        @yield('body')
    </body>
</html>
