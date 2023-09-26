<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To-Do App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased w-screen h-screen overflow-hidden">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
        <div class="w-full h-full px-4 py-4">
            <div class="w-full h-full flex flex-col items-center justify-evenly gap-6 border border-black p-4">
                <div>
                    <h1 class="text-center text-2xl">
                        Hello, welcome to <br>
                        <span class="font-gothic text-4xl">DAI.LY</span>
                    </h1>
                </div>

                <div class="flex items-center justify-center w-full">
                    <img src="{{ asset('/images/to-do.svg') }}" alt="to-do list illustration" class="w-2/3">
                </div>

                <div>
                    <h1 class="font-gothic text-xl">Your personal productivity assistant.</h1>
                    <p class="mt-1 opacity-60">Plan your day, stay on track and achieve your goals with our easy-to-use app.</p>
                    <a href="{{ route('register') }}" class="flex items-center justify-between bg-black text-white py-2 px-6 mt-4 font-gothic text-lg rounded-lg">
                        Get Started
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 7.41 12"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M0,10.59,4.58,6,0,1.41,1.41,0l6,6-6,6Z"/></g></g></svg>
                    </a>
                </div>

                <div>
                    <p class="opacity-60">
                        Already have an account?
                        <a href="{{ route('login') }}" class="underline">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
