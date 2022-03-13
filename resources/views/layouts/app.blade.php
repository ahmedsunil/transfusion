<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
    <div class="h-screen flex overflow-hidden  bg-gray-100">
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-35 justify-center">
                <div class="flex flex-col h-0 pt-4 flex-1 border-r border-none-200 bg-red-700">
                    <div class="flex-1 flex flex-col align-middle overflow-y-auto">
                        <!-- Logo -->
                        <div class="text-white group flex flex-col items-center text-xs font-semibold text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                            </svg>
                            <span class="px-2 py-1 text-sm">Transfusion</span>
                        </div>
                        <!-- navigation menu -->
                        <nav class="pt-5 flex-1 bg-red-700">
                            <a href="{{ route('dashboard') }}" class="bg-red-700 text-white group flex-1 flex flex-col items-center px-2 py-4 text-xs font-medium hover:text-white hover:bg-red-600 transition duration-500 ease-in-out @if(request()->routeIs('dashboard')) bg-red-500 @endif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white hover:text-white h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                                Dashboard
                            </a>
                            <a href="{{ route('donations') }}" class="bg-red-700 text-white group flex-1 flex flex-col items-center px-2 py-4 text-xs font-medium hover:text-white hover:bg-red-600 transition duration-500 ease-in-out @if(request()->routeIs('donations*')) bg-red-500 @endif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white hover:text-white flex-shrink-0 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                                Donations
                            </a>
                            <a href="{{ route('patients') }}" class="bg-red-700 text-white group flex-1 flex flex-col items-center px-2 py-4 text-xs font-medium hover:text-white hover:bg-red-600 transition duration-500 ease-in-out @if(request()->routeIs('patients*')) bg-red-500 @endif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white hover:text-white flex-shrink-0 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                Patients
                            </a>
                            <a href="{{ route('donors') }}" class="bg-red-700 text-white group flex-1 flex flex-col items-center px-2 py-4 text-xs font-medium hover:text-white hover:bg-red-600 transition duration-500 ease-in-out @if(request()->routeIs('donors*')) bg-red-500 @endif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white hover:text-white flex-shrink-0 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                Donors
                            </a>
                            <a href="{{ route('forms') }}" class="bg-red-700 text-white group flex-1 flex flex-col items-center px-2 py-4 text-xs font-medium hover:text-white hover:bg-red-600 transition duration-500 ease-in-out @if(request()->routeIs('forms*')) bg-red-500 @endif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white hover:text-white flex-shrink-0 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                Forms
                            </a>
                            <a href="{{ route('settings') }}" class="bg-red-700 text-white group flex-1 flex flex-col items-center px-2 py-4 text-xs font-medium hover:text-white hover:bg-red-600 transition duration-500 ease-in-out @if(request()->routeIs('settings*')) bg-red-500 @endif">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-white hover:text-white flex-shrink-0 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Settings
                            </a>
                        </nav>
                    </div>
                    <div class="p-2">
                        <div class="flex-1 flex flex-col items-center pb-2">
                            <p class="text-sm text-white hover:text-red-300">
                                Tom Cook
                            </p>
                            <a href="{{ route('profile') }}" class="text-xs text-white hover:text-red-300 @if(request()->routeIs('profile')) text-red-300 @endif ">
                                View profile
                            </a>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}" class="bg-red-800 text-white group flex-1 flex flex-col items-center px-2 py-2 text-xs hover:text-white hover:bg-red-600 transition duration-500 ease-in-out" onclick="event.preventDefault();
                                                this.closest('form').submit();" >
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
                <button class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex-1 flex flex-col items-center justify-center text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none p-4 bg-gray-200">
                {{ $slot }}
            </main>
        </div>
    </div>

    </body>
</html>
