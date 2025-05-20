<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./output.css" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="src/image/icon.jpeg" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <script src="https://kit.fontawesome.com/ce431fb7e5.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.9.0/p5.min.js"></script>
    <script src="/Portfolio/script/bg.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Horizon&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/hover-effect@1.1.0/dist/hover-effect.umd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init(); // Initialize AOS on page load
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }
        nav {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;        
        }
        .mobile-menu{
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;        
        }
        h1, h2 ,h3{
        font-family: 'Raleway', sans-serif;
        }
        body, p {
        font-family: 'Open Sans', sans-serif;
        }
        body {
            margin: 0;
            /* Sleek Monochrome - Charcoal #1e1e2f, Slate #2c3e50, White #ecf0f1*/
            background: linear-gradient(to right, #1e1e2f, #2c3e50, #ecf0f1); /* Modern Cosmic - Midnight Blue #0f2027, Deep Purple #2c5364, Neon Aqua #00f2fe */
            color: white;
        }
        .font-horizon {
            font-family: 'Horizon', sans-serif;
        }
        
        @keyframes typing {
        from { width: 0 }
        to { width: 100% }
        }

        @keyframes blink {
        0%, 100% { border-color: transparent }
        50% { border-color: white }
        }

        .typing {
        overflow: hidden;
        white-space: nowrap;
        border-right: 3px solid white;
        animation:
            typing 4s steps(40, end),
            blink 0.75s step-end infinite;
        }

        @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(-40px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
        }

        .fade-in-left {
        animation: fadeInLeft 0.8s ease-out forwards;
        opacity: 0; /* ensures initial state is hidden */
        }

        @keyframes fadeInRight {
        0% {
            opacity: 0;
            transform: translateX(40px); /* move from right */
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
        }

        .fade-in-right {
        animation: fadeInRight 0.8s ease-out forwards;
        opacity: 0; /* ensures initial state is hidden */
        }

        .icon {
            transition: all 0.3s ease;
        }
    </style>
    
</head>

<body >
    <header>
        <nav class="backdrop-blur-xs text-white fixed top-0 w-full z-50 shadow-md">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">

                <!-- Logo (optional) -->
                <!--
                <div class="flex-shrink-0">
                    <img class="h-8 w-auto" src="/Portfolio/src/image/icon.jpeg" alt="Me">
                </div>
                -->

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:space-x-6 text-2xl font-bold ml-auto">
                    <a href="#" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black" aria-current="page">ME</a>
                    <a href="#about" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">ABOUT ME</a>
                    <a href="#projects" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">PROJECTS</a>
                    <a href="#certificates" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">CERTIFICATES</a>
                </div>

                <!-- Mobile menu button -->
                <div class="sm:hidden ml-auto">
                    <button id="menu-toggle" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-blue-200 hover:text-black focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <!-- Hamburger icon -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    </button>
                </div>
                </div>
            </div>

            <!-- Mobile Menu (hidden by default) -->
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="space-y-1 px-4 pt-2 pb-4 bg-white/10 backdrop-blur-md">
                <a href="#" class="block rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">ME</a>
                <a href="#about" class="block rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">ABOUT ME</a>
                <a href="#projects" class="block rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">PROJECTS</a>
                <a href="#certificates" class="block rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200 hover:text-black">CERTIFICATES</a>
                </div>
            </div>
        </nav>

    </header>