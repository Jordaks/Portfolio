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
            background: linear-gradient(to right, #4169e1, #add8e6); /* royal blue to light blue */
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

        @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
        }

        .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
        }

        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .delay-4 { animation-delay: 0.8s; }
    </style>
    
</head>

<body >
    <header>
        <nav class="backdrop-blur-md bg-opacity-10 text-white fixed top-0 w-full z-50 shadow-md">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <!-- Logo 
                        <div class="flex shrink-0 items-center">    
                            <img class="h-8 w-auto" src="/Portfolio/src/image/icon.jpeg" alt="Me">
                        </div>
                        -->
                        <div class="hidden sm:ml-auto sm:block">
                            <div class="flex text-2xl font-bold space-x-4 justify-end">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="#" class="rounded-md hover:bg-blue-200  px-3 py-2 text-sm text-white" aria-current="page">ME</a>
                                <a href="#about" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200">ABOUT ME</a>
                                <a href="#projects" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200">PROJECTS</a>
                                <a href="#certificates" class="rounded-md px-3 py-2 text-sm text-white hover:bg-blue-200">CERTIFICATES</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="rounded-md hover:bg-blue-200  px-3 py-2 text-sm text-white" aria-current="page">Me</a>
                <a href="#about" class="rounded-md hover:bg-blue-200  px-3 py-2 text-sm text-white">About Me</a>
                <a href="#projects" class="rounded-md hover:bg-blue-200  px-3 py-2 text-sm text-white">Projects</a>
                <a href="#certificates" class="rounded-md hover:bg-blue-200  px-3 py-2 text-sm text-white">Certificates</a>
                </div>
            </div>
        </nav>
    </header>