<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @livewireStyles
    @vite('resources/css/app.css')
    <body>
        {{ $slot }}
        @livewireScripts
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
