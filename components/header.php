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
            /*background: linear-gradient(to right, #1e1e2f, #2c3e50, #ecf0f1);  Modern Cosmic - Midnight Blue #0f2027, Deep Purple #2c5364, Neon Aqua #00f2fe */
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

<body class="bg-slate-200">
    <header>
            <nav class="bg-slate-200 text-white fixed top-0 w-full z-50 shadow-md">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                    <!-- Desktop Menu -->
                        <div class="hidden sm:flex sm:items-center sm:space-x-6 text-2xl font-bold ml-auto">
                            <a href="/Portfolio/index.php" class="px-3 py-2 text-sm relative group">
                                <span class="text-gray-600 group-hover:text-blue-300 transition duration-300">ME</span>
                                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#about" class="px-3 py-2 text-sm relative group">
                                <span class="text-gray-600 group-hover:text-blue-300 transition duration-300">ABOUT ME</span>
                                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#projects" class="px-3 py-2 text-sm relative group">
                                <span class="text-gray-600 group-hover:text-blue-300 transition duration-300">PROJECTS</span>
                                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                            </a>
                            <a href="#certificates" class="px-3 py-2 text-sm relative group">
                                <span class="text-gray-600 group-hover:text-blue-300 transition duration-300">CERTIFICATES</span>
                                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                            </a>
                        </div>
                        <!-- Hamburger Menu Button (Mobile only) -->
                        <button class="sm:hidden focus:outline-none fill-white hover:fill-blue-300 transition duration-300" onclick="toggleMenu()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" baseProfile="tiny" version="1.2" viewBox="0 0 24 24" id="menu">
                            <path d="M8 3H6a2.99 2.99 0 0 0-2.119.881A2.99 2.99 0 0 0 3 6v2c0 .825.337 1.575.881 2.119A2.99 2.99 0 0 0 6 11h2a2.99 2.99 0 0 0 2.119-.881A2.99 2.99 0 0 0 11 8V6a2.99 2.99 0 0 0-.881-2.119A2.99 2.99 0 0 0 8 3zm10 0h-2a2.99 2.99 0 0 0-2.119.881A2.99 2.99 0 0 0 13 6v2c0 .825.337 1.575.881 2.119A2.99 2.99 0 0 0 16 11h2a2.99 2.99 0 0 0 2.119-.881A2.99 2.99 0 0 0 21 8V6a2.99 2.99 0 0 0-.881-2.119A2.99 2.99 0 0 0 18 3zM8 13H6a2.99 2.99 0 0 0-2.119.881A2.99 2.99 0 0 0 3 16v2c0 .825.337 1.575.881 2.119A2.99 2.99 0 0 0 6 21h2a2.99 2.99 0 0 0 2.119-.881A2.99 2.99 0 0 0 11 18v-2a2.99 2.99 0 0 0-.881-2.119A2.99 2.99 0 0 0 8 13zm10 0h-2a2.99 2.99 0 0 0-2.119.881A2.99 2.99 0 0 0 13 16v2c0 .825.337 1.575.881 2.119A2.99 2.99 0 0 0 16 21h2a2.99 2.99 0 0 0 2.119-.881A2.99 2.99 0 0 0 21 18v-2a2.99 2.99 0 0 0-.881-2.119A2.99 2.99 0 0 0 18 13z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                
                <!-- Mobile Menu (always visible, fixed at bottom) -->
                <div id="mobileMenu" class="hidden sm:hidden backdrop-blur-xs px-4 py-4">
                    <a href="#" class="text-white text-sm relative -5 group">
                    <span class="group-hover:text-blue-300 transition duration-300 ">ME</span>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <br>
                    <a href="#about" class="text-white text-sm relative group">
                    <span class="group-hover:text-blue-300 transition duration-300">ABOUT</span>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <br>
                    <a href="#projects" class="text-white text-sm relative group">
                    <span class="group-hover:text-blue-300 transition duration-300">PROJECTS</span>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <br>
                    <a href="#certificates" class="text-white text-sm relative group">
                    <span class="group-hover:text-blue-300 transition duration-300">CERTS</span>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-300 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>
            </nav>
    </header>