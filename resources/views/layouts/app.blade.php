<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@yield('fonts')

<!-- Scripts -->
    @yield('scripts')
</head>
<body>
@include('partials.header')

@yield('main')
@yield('content')

@include('partials.footer')
</body>
</html>
