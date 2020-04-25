<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @include('inc.asset')
        @stack('css-asset')
        @stack('css')
    </head>
    <body>
        @include('inc.header')
        @include('inc.hilight')
        @yield('content')
        @include('inc.footer')
        @stack('js-asset')
        @stack('js')
        {!! sweetAlert29() !!}
    </body>
</html>