<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} - {{ config('app.name') }}</title>

    <!-- Web Fonts -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap"
        rel="stylesheet" type="text/css">

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    {{ $styles ?? '' }}
</head>

<body data-plugin-page-transition>
    <div class="body">
        @include('layouts.partials.header')

        <div role="main" class="main">
            {{ $slot }}
        </div>

        @include('layouts.partials.footer')
    </div>

    {{ $scripts ?? '' }}
</body>

</html>
