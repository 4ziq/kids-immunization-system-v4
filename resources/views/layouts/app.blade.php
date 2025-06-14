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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div style="position:fixed;top:0;left:0;width:100%;z-index:50;">
                @if(Auth::guard('admin')->check())
                    @include('layouts.admin-navigation')
                @elseif(Auth::guard('staff')->check())
                    @include('layouts.staff-navigation')
                @else
                    @include('layouts.navigation')
                @endif
            </div>

            @if(Auth::check() || Auth::guard('admin')->check() || Auth::guard('staff')->check())
                @include('layouts.sidebar')
            @endif

            @isset($header)
                <header class="bg-white shadow" style="position:fixed;top:4rem;left:0;width:100%;z-index:45;">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                <div style="height: 6rem;"></div> <!-- Spacer for fixed header -->
            @endisset

            <div class="transition-all duration-200" style="margin-left: 5rem; padding-top: 4rem;">
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
