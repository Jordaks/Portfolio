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

    <style>
        html {
            scroll-behavior: smooth;
        }
        main {
            font-family: 'Poppins', sans-serif;
        }
        
        nav {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;        
        }
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;        
        }

    </style>
    
</head>

<body class="bg-gradient-to-r from-[#06141B] via-[#CCD0CF] to-[#CCD0CF] bg-opacity-10">
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
                                <a href="#" class="rounded-md hover:bg-gray-300 hover:text-white px-3 py-2 text-sm text-gray-500" aria-current="page">ME</a>
                                <a href="#about" class="rounded-md px-3 py-2 text-sm  text-gray-500 hover:bg-gray-300 hover:text-white">ABOUT ME</a>
                                <a href="#projects" class="rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-300 hover:text-white">PROJECTS</a>
                                <a href="#certificates" class="rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-300 hover:text-white">CERTIFICATES</a>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Me</a>
                <a href="#about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Me</a>
                <a href="#projects" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Projects</a>
                <a href="#certificates" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Certificates</a>
                </div>
            </div>
        </nav>
    </header>