<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900  antialiased">
    <div class="min-h-screen bg-cities flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <h1 class="text-4xl uppercase text-white tracking-wider font-sharpblack mt-12">Register</h1>

        <div class="relative w-5/6 sm:max-w-2xl max-h-2xl mt-12 mb-12 px-12 py-4 bg-gray-950 border-blue-500 shadow-md overflow-hidden">
            <div class="mb-4 z-50">
                <a href="/login"><div class="absolute text-black uppercase rounded-b-md -top-0 left-0 font-sharpblack tracking-wider bg-gray-300 px-4 pt-1">
                    Sign In
                </div></a>
                <a href="/register"><div class="absolute text-black uppercase rounded-b-md -top-0 left-24 font-sharpblack tracking-wider bg-gray-300 px-4 pt-1">
                    Register
                </div></a>
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
