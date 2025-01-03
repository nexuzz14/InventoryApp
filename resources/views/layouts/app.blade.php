<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-cdn></x-cdn>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans antialiased">
    @include('layouts.navigation')

    <div class="h-screen flex flex-row flex-wrap">

        <x-sidebar></x-sidebar>

        <!-- strat content -->
        <div class="bg-gray-100 flex-1 p-6 md:mt-16">
            {{ $slot }}


        </div>
        <!-- end content -->

    </div>


    <x-script-pack></x-script-pack>
</body>

</html>
