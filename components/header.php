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
            color:gray;
        }
        .font-horizon {
            font-family: 'Horizon', sans-serif;
        }
    </style>
    
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #60a5fa, #a78bfa, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            background-size: 200% 200%;
            animation: gradient-shift 3s ease infinite;
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .nav-underline {
            background: linear-gradient(90deg, #60a5fa, #a78bfa);
            transform-origin: left;
        }
        
        .glass-effect {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            background: rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .mobile-glass {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background: rgba(0, 0, 0, 0.4);
        }
        
        .hover-glow:hover {
            box-shadow: 0 0 20px rgba(96, 165, 250, 0.3);
        }
    </style>

</head>

<body class="min-h-screen bg-slate-200 text-white">
    
    <!-- Navigation -->
    <nav class="backdrop-blur-md fixed top-0 w-full z-50 shadow-2xl">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo/Brand -->
                <div class="flex-shrink-0 animate-fade-in">
                    <h1 class="text-2xl font-bold gradient-text cursor-pointer hover:scale-105 transition-transform duration-300">
                        Portfolio
                    </h1>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/Portfolio/index.php" 
                        data-section="me" 
                       class="nav-link group px-4 py-2 rounded-lg text-sm font-medium relative overflow-hidden hover-glow transition-all duration-300">
                        <span class="nav-text relative z-10 text-gray-800 group-hover:text-blue-300 transition-colors duration-300">
                            ME
                        </span>
                        <div class="nav-underline absolute bottom-0 left-1/2 w-0 h-0.5 group-hover:w-full group-hover:left-0 transition-all duration-300"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    
                    <a href="#about" 
                        data-section="about" 
                       class="nav-link group px-4 py-2 rounded-lg text-sm font-medium relative overflow-hidden hover-glow transition-all duration-300">
                        <span class="nav-text relative z-10 text-gray-800 group-hover:text-blue-300 transition-colors duration-300">
                            ABOUT ME
                        </span>
                        <div class="nav-underline absolute bottom-0 left-1/2 w-0 h-0.5 group-hover:w-full group-hover:left-0 transition-all duration-300"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    
                    <a href="#projects" 
                        data-section="projects" 
                       class="nav-link group px-4 py-2 rounded-lg text-sm font-medium relative overflow-hidden hover-glow transition-all duration-300">
                        <span class="nav-text relative z-10 text-gray-800 group-hover:text-blue-300 transition-colors duration-300">
                            PROJECTS
                        </span>
                        <div class="nav-underline absolute bottom-0 left-1/2 w-0 h-0.5 group-hover:w-full group-hover:left-0 transition-all duration-300"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    
                    <a href="#certificates" 
                        data-section="certificates" 
                       class="nav-link group px-4 py-2 rounded-lg text-sm font-medium relative overflow-hidden hover-glow transition-all duration-300">
                        <span class="nav-text relative z-10 text-gray-800 group-hover:text-blue-300 transition-colors duration-300">
                            CERTIFICATES
                        </span>
                        <div class="nav-underline absolute bottom-0 left-1/2 w-0 h-0.5 group-hover:w-full group-hover:left-0 transition-all duration-300"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" 
                        class="md:hidden p-2 rounded-lg hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-blue-400 transition-all duration-300 hover-glow">
                    <svg id="hamburger" class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close" class="w-6 h-6 hidden transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden mobile-glass border-t border-white/10 max-h-0 opacity-0 overflow-hidden transition-all duration-300">
            <div class="px-4 py-4 space-y-2">
                <a href="/Portfolio/index.php" 
                    data-section="me" 
                    class="mobile-nav-link block px-3 py-3 rounded-lg text-sm font-medium relative group hover:bg-white/5 transition-all duration-300">
                    <span class="mobile-nav-text text-gray-300 group-hover:text-blue-300 transition-colors duration-300">ME</span>
                    <div class="mobile-nav-underline absolute bottom-1 left-3 w-0 h-0.5 nav-underline group-hover:w-[calc(100%-1.5rem)] transition-all duration-300"></div>
                </a>
                
                <a href="#about" 
                    data-section="about" 
                    class="mobile-nav-link block px-3 py-3 rounded-lg text-sm font-medium relative group hover:bg-white/5 transition-all duration-300">
                    <span class="mobile-nav-text text-gray-300 group-hover:text-blue-300 transition-colors duration-300">ABOUT</span>
                    <div class="mobile-nav-underline absolute bottom-1 left-3 w-0 h-0.5 nav-underline group-hover:w-[calc(100%-1.5rem)] transition-all duration-300"></div>
                </a>
                
                <a href="#projects" 
                    data-section="projects" 
                    class="mobile-nav-link block px-3 py-3 rounded-lg text-sm font-medium relative group hover:bg-white/5 transition-all duration-300">
                    <span class="mobile-nav-text text-gray-300 group-hover:text-blue-300 transition-colors duration-300">PROJECTS</span>
                    <div class="mobile-nav-underline absolute bottom-1 left-3 w-0 h-0.5 nav-underline group-hover:w-[calc(100%-1.5rem)] transition-all duration-300"></div>
                </a>
                
                <a href="#certificates" 
                    data-section="certificates" 
                    class="mobile-nav-link block px-3 py-3 rounded-lg text-sm font-medium relative group hover:bg-white/5 transition-all duration-300">
                    <span class="mobile-nav-text text-gray-300 group-hover:text-blue-300 transition-colors duration-300">CERTS</span>
                    <div class="mobile-nav-underline absolute bottom-1 left-3 w-0 h-0.5 nav-underline group-hover:w-[calc(100%-1.5rem)] transition-all duration-300"></div>
                </a>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black/50 z-40 md:hidden hidden transition-opacity duration-300"></div>


    <script>
        // Navigation State
        let activeSection = 'about';
        let isMobileMenuOpen = false;

        // DOM Elements
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const hamburger = document.getElementById('hamburger');
        const closeIcon = document.getElementById('close');
        const navLinks = document.querySelectorAll('.nav-link');
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

        // Toggle Mobile Menu
        function toggleMobileMenu() {
            isMobileMenuOpen = !isMobileMenuOpen;
            
            if (isMobileMenuOpen) {
                mobileMenu.classList.remove('max-h-0', 'opacity-0');
                mobileMenu.classList.add('max-h-64', 'opacity-100');
                overlay.classList.remove('hidden');
                hamburger.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.classList.add('max-h-0', 'opacity-0');
                mobileMenu.classList.remove('max-h-64', 'opacity-100');
                overlay.classList.add('hidden');
                hamburger.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        }

        // Set Active Section
        function setActiveSection(section) {
            activeSection = section;
            updateActiveStates();
        }

        // Update Active States
        function updateActiveStates() {
            // Desktop Navigation
            navLinks.forEach(link => {
                const section = link.getAttribute('data-section');
                const text = link.querySelector('.nav-text');
                const underline = link.querySelector('.nav-underline');
                const background = link.querySelector('div:last-child');
                
                if (section === activeSection) {
                    text.classList.remove('text-gray-300');
                    text.classList.add('text-blue-300');
                    underline.classList.remove('w-0', 'left-1/2');
                    underline.classList.add('w-full', 'left-0');
                    background.classList.remove('opacity-0');
                    background.classList.add('opacity-100');
                } else {
                    text.classList.add('text-gray-300');
                    text.classList.remove('text-blue-300');
                    underline.classList.add('w-0', 'left-1/2');
                    underline.classList.remove('w-full', 'left-0');
                    background.classList.add('opacity-0');
                    background.classList.remove('opacity-100');
                }
            });

            // Mobile Navigation
            mobileNavLinks.forEach(link => {
                const section = link.getAttribute('data-section');
                const text = link.querySelector('.mobile-nav-text');
                const underline = link.querySelector('.mobile-nav-underline');
                
                if (section === activeSection) {
                    text.classList.remove('text-gray-300');
                    text.classList.add('text-blue-300');
                    underline.classList.remove('w-0');
                    underline.classList.add('w-[calc(100%-1.5rem)]');
                    link.classList.add('bg-white/5');
                } else {
                    text.classList.add('text-gray-300');
                    text.classList.remove('text-blue-300');
                    underline.classList.add('w-0');
                    underline.classList.remove('w-[calc(100%-1.5rem)]');
                    link.classList.remove('bg-white/5');
                }
            });
        }

        // Event Listeners
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
        overlay.addEventListener('click', toggleMobileMenu);

        // Navigation Click Handlers
        [...navLinks, ...mobileNavLinks].forEach(link => {
            link.addEventListener('click', (e) => {
                const section = link.getAttribute('data-section');
                setActiveSection(section);
                
                if (isMobileMenuOpen) {
                    toggleMobileMenu();
                }
            });
        });

        // Scroll Spy
        function handleScroll() {
            const sections = ['me', 'about', 'projects', 'certificates'];
            const scrollPosition = window.scrollY + 100;

            sections.forEach(sectionId => {
                const section = document.getElementById(sectionId);
                if (section) {
                    const offsetTop = section.offsetTop;
                    const offsetBottom = offsetTop + section.offsetHeight;

                    if (scrollPosition >= offsetTop && scrollPosition < offsetBottom) {
                        if (activeSection !== sectionId) {
                            setActiveSection(sectionId);
                        }
                    }
                }
            });
        }

        // Throttled Scroll Handler
        let scrollTimeout;
        window.addEventListener('scroll', () => {
            if (scrollTimeout) {
                clearTimeout(scrollTimeout);
            }
            scrollTimeout = setTimeout(handleScroll, 10);
        });

        // Close mobile menu on resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768 && isMobileMenuOpen) {
                toggleMobileMenu();
            }
        });

        // Initialize
        updateActiveStates();
    </script>