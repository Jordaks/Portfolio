<?php include_once __DIR__ . '/components/header.php'; ?>


    <main class="p-16 bg-gradient-to-r from-[#06141B] via-[#CCD0CF] to-[#CCD0CF] bg-opacity-10 min-h-screen relative">
        <div class="mt-52 ml-40 p-6">
            <h1 class="text-5xl font-bold">Hi!</h1>
            <h2 class="text-2xl mt-2 font-semibold">I'm Jordan</h2>
            <p class="text-lg mt-1">A BS Information Technology student from</p>
            <p class="text-lg mt-1">Batangas State University - TNEU.</p>

            <div class="space-x-4 mt-4 text-4xl ">
                <span class="hover:opacity-75 transition-opacity duration-200">
                    <a href="https://www.facebook.com/markjordan.javier" target="_blank" ">
                        <i class="fa-brands fa-facebook" style="color: #1877F3;"></i>
                    </a>
                </span>

                <span class="hover:opacity-75 transition-opacity duration-200">
                    <a href="https://github.com/Jordaks" target="_blank">
                        <i class="fa-brands fa-github pr-5" style="color: #181717;"></i>
                    </a>
                </span>

                <span class="hover:opacity-75 transition-opacity duration-200">
                    <a href="www.linkedin.com/in/mark-jordan-javier-29b72935a" target="_blank">
                        <i class="fa-brands fa-linkedin pr-5" style="color: #0A66C2;"></i>
                    </a>
                </span>
                
                <span class="hover:opacity-75 transition-opacity duration-200">
                    <a href="https://www.instagram.com/imnot_dannnnn/" target="_blank">
                        <i class="fa-brands fa-instagram text-4xl font-bold text-center m-[10px]" style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"> </i>
                    </a>
                </span>
            </div>
            
        </div>

    
        <div class="absolute top-0 right-0 w-110 h-110 mt-36 mr-64  overflow-hidden rounded-full group">
            <img 
                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" 
                src="/Portfolio/src/image/me.jpeg" 
                alt="Me Image"
            >
        </div>

    </main>

    <section id="about" class="p-16 bg-gradient-to-r from-[#06141B] via-[#CCD0CF] to-[#CCD0CF] bg-opacity-10 min-h-screen relative">
        <div class="mt-20 ml-40 p-6">
            <h2 class="text-3xl font-bold">About Me</h2>
            <p class="text-lg mt-2">I am a passionate and dedicated Information Technology student with a keen interest in web development, programming, and technology. I enjoy learning new skills and applying them to real-world projects.</p>
            <p class="text-lg mt-2">I am currently pursuing my degree at Batangas State University - TNEU, where I am gaining valuable knowledge and experience in the field of IT.</p>
            <p class="text-lg mt-2">In my free time, I love to explore new technologies, work on personal projects, and contribute to open-source communities. I am always eager to learn and grow in my field.</p>
        </div>
    </section>

    <section id="projects" class="p-16 bg-gradient-to-r from-[#06141B] via-[#CCD0CF] to-[#CCD0CF] bg-opacity-10 min-h-screen relative">
        <div class="mt-20 ml-40 p-6">
            <h2 class="text-3xl font-bold">Projects</h2>
            <ul class="list-disc ml-6 mt-2">
                <li class="text-lg">Time Scheduling System (Final Project)</li>
                <li class="text-lg">Online Thrift Shop (Final Project)</li>
            </ul>
        </div>
    </section>

    <section id="certificates" class="p-16 bg-gradient-to-r from-[#06141B] via-[#CCD0CF] to-[#CCD0CF] bg-opacity-10 min-h-screen relative">
        <div class="mt-20 ml-40 p-6">
            <h2 class="text-3xl font-bold">Certificates</h2>
            <p class="text-lg mt-2">Batangas Information Technology Society (BITS)</p>
            <ul class="list-disc ml-6 mt-2">
                <li class="text-lg">DATABIZ CONFERENCE 2024</li>
                <p>Theme: “Equipping Tomorrow’s Innovators with Data Science, AI and Business Analytics”</p>
                <li class="text-lg">Batangas Information Technology Conference (BITCON) 2025</li>
                <p>Theme: “Building a Connected Tomorrow: IoT Innovations and Beyond”</p>
            </ul>
        </div>
    </section>

    
<?php include_once __DIR__ . '/components/footer.php'; ?>
