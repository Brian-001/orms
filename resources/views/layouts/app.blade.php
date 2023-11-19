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
</head>
<body class="font-sans antialiased">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-gray-800 w-1/4 md:w-1/6 text-gray-100 overflow-y-auto">
            <!-- Sidebar content -->
            <div>
                <!-- <a href="#" class="text-2xl font-[Poppins] font-medium cursor-pointer">
                    Online Real Estate
                </a> -->

                <div class="mt-5">
                    <!-- Search bar -->
                    <form action="#" method="GET">
                        <div class="relative">
                            <input
                                id="search"
                                type="text"
                                name="search"
                                class="text-black sm:text-base placeholder-black pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                                placeholder="Search..."
                            />
                            <div class="absolute left-0 top-0 h-full w-10 text-gray-400 flex items-center justify-center">
                                <svg
                                    class="h-6 w-6"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                    </form>

                    <!-- Sidebar links -->
                    <nav class="mt-6">
                        <ul>
                            <li>
                                <a href="/" class="text-xl hover:text-cyan-500 duration-500 py-3">Home</a>
                            </li>

                            <li>
                                <span class="text-xl">Commercial</span>
                                <ul class="pl-4 py-3">
                                    <li>
                                        <a href="{{ route('commercial.resort_gardens')}}" class="text-xl hover:text-cyan-500 duration-500">Resort Gardens</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('commercial.business_stalls') }}" class="text-xl hover:text-cyan-500 duration-500">Business Stalls</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('commercial.warehouses') }}" class="text-xl hover:text-cyan-500 duration-500">Warehouses</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('commercial.office_suites')}}" class="text-xl hover:text-cyan-500 duration-500">Office Suite</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('commercial.land') }}" class="text-xl hover:text-cyan-500 duration-500">Land</a>
                                    </li>
                               </ul>
                            </li>
                            <li>
                                <span class="text-xl">Residential</span>
                                <ul class="pl-4 py-3">
                                    <li>
                                        <a href="{{ route('residential.single_houses') }}" class="text-xl hover:text-cyan-500 duration-500 ">Single Houses</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('residential.gated_community') }}" class="text-xl hover:text-cyan-500 duration-500">Gated Community</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('residential.apartments') }}" class="text-xl hover:text-cyan-500 duration-500">Apartment</a>
                                    </li>
                               </ul>
                            </li>

                            <li>
                                <a href="#" class="text-xl hover:text-cyan-500 duration-500 py-3">Cart</a>
                            </li>

                            <li>
                                <a href="{{ route('faq')}}" class="text-xl hover:text-cyan-500 duration-500 py-3">Faqs</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </aside>

        <!-- Main content -->
        <main class="bg-white md:ml-0 flex-grow overflow-y-auto">
            <!-- Header -->
            <header class="bg-white shadow p-5 md:flex md:items-center md:justify-between">
                <h1 class="text-2xl font-[Poppins] font-medium">
                    Real Estate Management System
                </h1>
            </header>
            <!-- Main content area -->

                <!-- <h1 class="font-bold text-2xl text-gray-700">Products</h1> -->

                @yield('content')

            <!-- Footer -->
            <footer class="px-4 py-6 text-center">
                <p class="text-sm text-gray-600">
                    &copy; RealEstate 2023. All rights reserved.
                </p>
                <script>const currentYear= new Date().getFullYear();
                </script>
            </footer>
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>
