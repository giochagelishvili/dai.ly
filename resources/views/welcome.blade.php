<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAI.LY</title>

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
        @guest
        <div class="w-full h-full px-4 py-4">
            <div class="w-full h-full flex flex-col items-center justify-evenly border border-black p-4 md:grid md:grid-cols-2">
                <div class="md:flex md:flex-col md:items-center md:gap-4">
                    <div>
                        <h1 class="text-center text-2xl md:text-4xl">
                            Hello, welcome to <br>
                            <span class="font-gothic text-4xl md:text-5xl">DAI.LY</span>
                        </h1>
                    </div>

                    <div class="flex items-center justify-center w-full">
                        <img src="{{ asset('/images/to-do.svg') }}" alt="to-do list illustration" class="w-2/3">
                    </div>
                </div>

                <div class="md:px-8">
                    <div class="md:flex md:flex-col md:gap-4">
                        <h1 class="font-gothic text-xl md:text-3xl">Your personal productivity assistant.</h1>

                        <p class="mt-1 opacity-60 md:text-xl">Plan your day, stay on track and achieve your goals with our easy-to-use app.</p>

                        <a href="{{ route('authentication') }}" id="get-started-btn" class="flex items-center justify-between bg-black text-white border border-black py-2 px-6 mt-4 font-gothic text-lg rounded-lg md:text-2xl md:py-3 md:px-8 md:hover:bg-white md:hover:text-black md:transition-colors">
                            Get Started
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" class="arrow-right md:h-6 " viewBox="0 0 7.41 12">
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path class="cls-1" d="M0,10.59,4.58,6,0,1.41,1.41,0l6,6-6,6Z"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <div class="mt-8">
                        <p class="text-[#00000060] text-xl md:text-2xl">
                            Already have an account?
                            <a href="{{ route('authentication') }}" class="underline md:hover:text-black transition-colors">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endguest

        @auth
        <script>window.location = '{{ url('/dashboard') }}';</script>
        @endauth
    </body>
</html>
