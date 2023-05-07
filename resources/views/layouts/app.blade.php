<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @if(request()->routeIs('heroes.create'))
            @vite(['public/js/navigation_form.js'])
        @endif
        <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="flex flex-col flex-1 bg-[#e7e7db]/[.2]">
                {{ $slot }}
            </main>

            @if(request()->routeIs('heroes.show'))
                @include('layouts.footer', ['display' => 'hidden md:flex'])
            @else
                @include('layouts.footer')
            @endif
        </div>
    </body>
</html>
