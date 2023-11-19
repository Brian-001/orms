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

    <!-- Styles -->
    @livewireStyles
    @livewireScripts

</head>
<body class="font-sans antialiased">
    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar -->
        <div class="w-1/5 bg-gray-800 p-4">
            <!-- Sidebar Header -->
            <div class="text-white text-2xl font-semibold p-4">
                Admin Dashboard
            </div>
            <!-- Navigation Links -->
            <ul class="mt-6 space-y-4">
                <li>
                    <a href="#" class="text-white hover:text-cyan-500 duration-300">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admins.index') }}" class="text-white hover:text-cyan-500 duration-300">Review Products</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-cyan-500 duration-300">Total Sales</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-cyan-500 duration-300">Users</a>
                </li>
                <!-- Add additional links as needed -->
            </ul>
        </div>

        <!-- Content -->
        <div class="w-4/5 p-6">
            @yield('content')
        </div>
    </div>

</body>







