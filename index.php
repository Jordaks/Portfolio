<?php include_once __DIR__ . '/components/header.php'; ?>

<!--
<main class="relative z-10 px-6 py-16 min-h-screen sm:px-10 md:px-16 lg:px-12 xl:px-12 2xl:px-8 2xl:py-12 bg-gradient-to-br from-blue-100 to-white grid place-items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 2xl:gap-6 w-full max-w-screen-xl">

            Profile Image - Mobile top-right 
        <div class="order-1 md:order-2 flex justify-end md:justify-center w-full">
        <div class="w-32 h-32 sm:w-52 sm:h-52 md:w-72 md:h-72 lg:w-96 lg:h-96 xl:w-[28rem] xl:h-[28rem] 2xl:w-[36rem] 2xl:h-[36rem] overflow-hidden rounded-full group fade-in-right" style="animation-delay: 0.2s;">
            <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105"
            src="/Portfolio/src/image/me.jpeg"
            alt="Me Image">
        </div>
        </div>

        Intro Section 
        <div class="order-2 md:order-1 p-4 sm:p-6">
        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl 2xl:text-7xl font-bold fade-in-left">Hi!</h1>

        <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl 2xl:text-7xl mt-2 font-semibold fade-in-left" style="animation-delay: 0.2s;">
            <span class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl 2xl:text-6xl">I'm</span>
            <span class="text-[#0938c5] font-poppins font-bold ml-2">Jordan</span>
        </h2>

        <p class="text-base sm:text-lg lg:text-xl 2xl:text-2xl mt-2 fade-in-left" style="animation-delay: 0.4s;">
            A BS Information Technology student from
        </p>
        <p class="text-base sm:text-lg lg:text-xl 2xl:text-2xl mt-1 fade-in-left" style="animation-delay: 0.6s;">
            Batangas State University - TNEU.
        </p>

        <p class="text-sm lg:text-base 2xl:text-lg mt-3 fade-in-left italic" style="animation-delay: 1.2s;">
            "Success begins with a great mindset—chase your goals, stay focused, and never give up."
        </p>

        CTA Button 
        <div class="mt-6 fade-in-left" style="animation-delay: 1.4s;">
            <a href="/Portfolio/src/RESUME.pdf" download
            class="inline-flex items-center gap-2 bg-white text-blue-700 px-6 py-2 rounded-full text-sm sm:text-base font-semibold hover:bg-blue-800 hover:text-white transition duration-300 shadow-lg hover:shadow-xl">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                d="M128.14 263.5a7.5 7.5 0 1 0 7.5 7.5 7.5 7.5 0 0 0-7.5-7.5Zm0 135a7.5 7.5 0 1 0 7.5 7.5 7.5 7.5 0 0 0-7.5-7.5Zm0-90a7.5 7.5 0 1 0 7.5 7.5 7.5 7.5 0 0 0-7.5-7.5Zm0 135a7.5 7.5 0 1 0 7.5 7.5 7.5 7.5 0 0 0-7.5-7.5Zm134.38-241.24v-5.63A47.44 47.44 0 0 0 224 150.07l-9.25-1.76a42.62 42.62 0 0 0 15.79-33.12v-22.4a20.14 20.14 0 0 0-4.16-12.25 18.52 18.52 0 0 0 4.16-11.71V50.9a7.5 7.5 0 0 0-7.5-7.5H163.8c-11 0-18.67 10.68-18.67 20.27v27.49a6.84 6.84 0 0 0 .05.79c0 .28-.05.56-.05.84v22.4a42.62 42.62 0 0 0 15.79 33.12l-9.25 1.76a47.44 47.44 0 0 0-38.53 46.56v5.63a29 29 0 0 0 29 29h91.38a29 29 0 0 0 29-29ZM160.13 63.67c0-2.49 2.19-5.27 3.67-5.27h51.73v10.43a3.68 3.68 0 0 1-3.67 3.67 6.85 6.85 0 0 0-.79 0h-45.64a20.23 20.23 0 0 0-5.3.72Zm0 51.52v-22.4a5.3 5.3 0 0 1 5.3-5.29h44.8a5.3 5.3 0 0 1 5.3 5.29v22.4a27.7 27.7 0 1 1-55.4 0Zm34.92 42.08v2.1a7.22 7.22 0 1 1-14.44 0v-2.1a42.35 42.35 0 0 0 14.44 0Zm-66.91 45v-5.63a32.44 32.44 0 0 1 26.33-31.83l11.38-2.16a22.22 22.22 0 0 0 44 0l11.38 2.16a32.44 32.44 0 0 1 26.33 31.83v5.63a14 14 0 0 1-14 14h-91.42a14 14 0 0 1-14-14.01Zm0 151.24a7.5 7.5 0 1 0 7.5 7.5 7.5 7.5 0 0 0-7.5-7.51Zm263.22-137.24H291.7a7.5 7.5 0 0 0 0 15h99.66a7.5 7.5 0 0 0 0-15Zm0-30H291.7a7.5 7.5 0 0 0 0 15h99.66a7.5 7.5 0 0 0 0-15Zm0-141.27H291.7a7.5 7.5 0 0 0 0 15h99.66a7.5 7.5 0 0 0 0-15ZM291.7 90h54.66a7.5 7.5 0 0 0 0-15H291.7a7.5 7.5 0 0 0 0 15ZM406.36 0H105.64a37.54 37.54 0 0 0-37.5 37.5v437a37.54 37.54 0 0 0 37.5 37.5h300.72a37.54 37.54 0 0 0 37.5-37.5v-437A37.54 37.54 0 0 0 406.36 0Zm22.5 474.5a22.52 22.52 0 0 1-22.5 22.5H105.64a22.52 22.52 0 0 1-22.5-22.5v-437a22.52 22.52 0 0 1 22.5-22.5h300.72a22.52 22.52 0 0 1 22.5 22.5Zm-37.5-76H167.72a7.5 7.5 0 0 0 0 15h223.64a7.5 7.5 0 0 0 0-15Zm0 45H167.72a7.5 7.5 0 0 0 0 15h223.64a7.5 7.5 0 0 0 0-15Zm0-180H167.72a7.5 7.5 0 0 0 0 15h223.64a7.5 7.5 0 0 0 0-15Zm0 90H167.72a7.5 7.5 0 0 0 0 15h223.64a7.5 7.5 0 0 0 0-15Zm0-45H167.72a7.5 7.5 0 0 0 0 15h223.64a7.5 7.5 0 0 0 0-15Z">
                </path>
            </svg>
            Download Resume
            </a>
        </div>

        Social Icons    
        <div class="flex flex-wrap sm:flex-nowrap gap-4 mt-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl 2xl:text-6xl fade-in-left" style="animation-delay: 1.6s;">
            <a href="https://www.facebook.com/markjordan.javier" target="_blank" class="hover:opacity-75 transition duration-200">
            <i class="fa-brands fa-facebook hover:scale-110 transition-transform mx-[10px]" style="color: #1877F3;"></i>
            </a>
            <a href="https://github.com/Jordaks" target="_blank" class="hover:opacity-75 transition duration-200">
            <i class="fa-brands fa-github hover:scale-110 transition-transform mx-[10px]" style="color: #181717;"></i>
            </a>
            <a href="https://www.linkedin.com/in/mark-jordan-javier-29b72935a/" target="_blank" class="hover:opacity-75 transition duration-200">
            <i class="fa-brands fa-linkedin hover:scale-110 transition-transform mx-[10px]" style="color: #0A66C2;"></i>
            </a>
            <a href="https://www.instagram.com/imnot_dannnnn/" target="_blank" class="hover:opacity-75 transition duration-200">
            <i class="fa-brands fa-instagram hover:scale-110 transition-transform mx-[10px] text-transparent bg-clip-text"
                style="background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"></i>
            </a>
        </div>
        </div>

    </div>
    </main>
-->

<section class="min-h-screen bg-gradient-to-br from-[#0f2027] via-[#2c5364] to-[#00f2fe] text-white flex items-center justify-center px-6">
    <div class="flex flex-col-reverse md:flex-row items-center gap-10 max-w-6xl w-full">

        <!-- LEFT: Text -->
        <div class="md:w-1/2" data-aos="fade-right">
            <h1 class="text-4xl md:text-5xl font-bold mb-2">Hi! I'm <span class="text-blue-300">Jordan</span></h1>
            <p class="text-lg md:text-xl mb-4">
                A BS Information Technology student from <br>
                Batangas State University - TNEU.
            </p>
            <blockquote class="italic text-sm text-blue-100 mb-8">
                "Success begins with a great mindset—chase your goals, stay focused, and never give up."
            </blockquote>

            <a href="/Portfolio/src/RESUME.pdf" download class="hover:shadow-2xl transform hover:scale-110 border-white/30 border-2 hover:border-blue-300 hover:bg-blue-300 transition duration-400 text-white font-semibold py-3 px-5 rounded-full shadow-lg">
                📄 Download Resume
            </a>
            <!-- Social Icons -->
            <div class="flex gap-8 mt-8 text-4xl">
                <a href="https://www.facebook.com/markjordan.javier" target="_blank"  class="icon transition transform hover:scale-110 hover:text-[#1877F2]">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://github.com/Jordaks" target="_blank"  class="icon transition transform hover:scale-110 hover:text-[#333]">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/mark-jordan-javier-29b72935a/" target="_blank"  class="icon transition transform hover:scale-110 hover:text-[#0A66C2]">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/imnot_dannnnn/" target="_blank"
                class="group hover:opacity-75 transition duration-200">
                    <i class="fa-brands fa-instagram mx-[10px] text-white transition-transform transform group-hover:scale-110 text-4xl"
                    style="transition: all 0.3s ease;">
                    </i>
                    <style>
                        .group:hover .fa-instagram {
                            background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            background-clip: text;
                            text-fill-color: transparent;
                        }
                    </style>
                </a>
            </div>

        </div>

        <!-- RIGHT: Profile Picture -->
        <div class="md:w-1/2 flex justify-center group" data-aos="fade-left">
            <img src="/Portfolio/src/image/me.jpeg" alt="Jordan"
                class="transition duration-300 ease-in-out group-hover:scale-105 group-hover:shadow-2xl group-hover:border-white/60 rounded-full w-80 h-80 object-cover shadow-xl border-4 border-white/30">
        </div>
    </div>
</section>

<section id="about" class="py-44 px-4 md:px-20 bg-opacity-10 min-h-screen relative">
        <div class="px-6">

            <h2 class="text-3xl font-bold pb-5">About Me</h2>
            <div class="flex flex-col md:flex-row items-start mt-8 border-2 border-white p-6 rounded-2xl text-black bg-white shadow-lg group">
                <img data-aos="zoom-in" data-aos-delay="100" src="/Portfolio/src/image/jordi.jpeg" alt="Portrait of Jordi" class="w-full max-w-xs md:max-w-md object-cover z-20 rounded-3xl md:mr-8">
                <div>
                    <p class="text-xl mt-2 leading-relaxed text-gray-800" data-aos="zoom-in" data-aos-delay="100">
                        I am a passionate and dedicated Information Technology student with a keen interest in web development, programming, and technology. I enjoy learning new skills and applying them to real-world projects. I am currently pursuing my degree at Batangas State University - TNEU, where I am gaining valuable knowledge and experience in the field of IT.
                        In my free time, I love to explore new technologies, work on personal projects, and contribute to open-source communities. I am always eager to learn and grow in my field.
                    </p>

                    <h3 class="text-3xl font-bold pt-10 pb-5" data-aos="zoom-in" data-aos-delay="100">Skills</h3>
                    <div class="z-20 ml-6 mt-2 flex flex-wrap gap-4">


                        <div class="hover:scale-105 transition-transform duration-300" data-aos="zoom-in" data-aos-delay="100">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="80" height="80" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 361" id="html">
                                <path fill="#E44D26" d="M255.555 70.766l-23.241 260.36-104.47 28.962-104.182-28.922L.445 70.766h255.11z"></path>
                                <path fill="#F16529" d="M128 337.95l84.417-23.403 19.86-222.49H128V337.95z"></path>
                                <path fill="#EBEBEB" d="M82.82 155.932H128v-31.937H47.917l.764 8.568 7.85 88.01H128v-31.937H85.739l-2.919-32.704zM90.018 236.542h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58l-.14.037-35.568-9.604-2.274-25.471z"></path>
                                <path d="M24.18 0h16.23v16.035h14.847V0h16.231v48.558h-16.23v-16.26H40.411v16.26h-16.23V0zM92.83 16.103H78.544V0h44.814v16.103h-14.295v32.455h-16.23V16.103h-.001zM130.47 0h16.923l10.41 17.062L168.203 0h16.93v48.558h-16.164V24.49l-11.166 17.265h-.28L146.35 24.49v24.068h-15.88V0zM193.21 0h16.235v32.508h22.824v16.05h-39.06V0z"></path>
                                <path fill="#FFF" d="M127.89 220.573h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576H127.89v31.937zM127.89 155.854v.078h77.143l.64-7.178 1.456-16.191.763-8.568H127.89v31.86z"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="200">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" preserveAspectRatio="xMidYMid" viewBox="0 0 256 361" id="css">
                            <path fill="#264DE4" d="M127.844 360.088L23.662 331.166.445 70.766h255.11l-23.241 260.36-104.47 28.962z"></path>
                            <path fill="#2965F1" d="M212.417 314.547l19.86-222.49H128V337.95l84.417-23.403z"></path>
                            <path fill="#EBEBEB" d="M53.669 188.636l2.862 31.937H128v-31.937H53.669zM47.917 123.995l2.903 31.937H128v-31.937H47.917zM128 271.58l-.14.037-35.568-9.604-2.274-25.471h-32.06l4.474 50.146 65.421 18.16.147-.04V271.58z"></path>
                            <path d="M60.484 0h38.68v16.176H76.66v16.176h22.506v16.175H60.484V0zM106.901 0h38.681v14.066h-22.505v2.813h22.505v32.352h-38.68V34.46h22.505v-2.813H106.9V0zM153.319 0H192v14.066h-22.505v2.813H192v32.352h-38.681V34.46h22.505v-2.813H153.32V0z"></path>
                            <path fill="#FFF" d="M202.127 188.636l5.765-64.641H127.89v31.937h45.002l-2.906 32.704H127.89v31.937h39.327l-3.708 41.42-35.62 9.614v33.226l65.473-18.145.48-5.396 7.506-84.08.779-8.576z"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#38BDF8" width="80" height="80" viewBox="-2.4 -2.4 28.80 28.80" xml:space="preserve" stroke="#38BDF8" stroke-width="0.00024000000000000003">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.528"/>
                            <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.036c-2.667 0-4.333 1.325-5 3.976 1-1.325 2.167-1.822 3.5-1.491.761.189 1.305.738 1.906 1.345C13.387 10.855 14.522 12 17 12c2.667 0 4.333-1.325 5-3.976-1 1.325-2.166 1.822-3.5 1.491-.761-.189-1.305-.738-1.907-1.345-.98-.99-2.114-2.134-4.593-2.134zM7 12c-2.667 0-4.333 1.325-5 3.976 1-1.326 2.167-1.822 3.5-1.491.761.189 1.305.738 1.907 1.345.98.989 2.115 2.134 4.594 2.134 2.667 0 4.333-1.325 5-3.976-1 1.325-2.167 1.822-3.5 1.491-.761-.189-1.305-.738-1.906-1.345C10.613 13.145 9.478 12 7 12z"/>
                            </g>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 128 128" id="php">
                            <path fill="#6181B6" d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961s27.354 30.961 61.094 30.961 61.094-13.862 61.094-30.961-27.354-30.961-61.094-30.961zm-15.897 36.993c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34h14.04c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515-.759 1.357-1.75 2.624-2.972 3.748zm21.311 2.968l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528l-3.031 15.241h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zM38.934 54h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458s-2.772-1.721-5.546-1.721z"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="500" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 256" id="javascript">
                            <path fill="#F7DF1E" d="M0 0h256v256H0V0z"></path>
                            <path d="M67.312 213.932l19.59-11.856c3.78 6.701 7.218 12.371 15.465 12.371 7.905 0 12.89-3.092 12.89-15.12v-81.798h24.057v82.138c0 24.917-14.606 36.259-35.916 36.259-19.245 0-30.416-9.967-36.087-21.996M152.381 211.354l19.588-11.341c5.157 8.421 11.859 14.607 23.715 14.607 9.969 0 16.325-4.984 16.325-11.858 0-8.248-6.53-11.17-17.528-15.98l-6.013-2.58c-17.357-7.387-28.87-16.667-28.87-36.257 0-18.044 13.747-31.792 35.228-31.792 15.294 0 26.292 5.328 34.196 19.247L210.29 147.43c-4.125-7.389-8.591-10.31-15.465-10.31-7.046 0-11.514 4.468-11.514 10.31 0 7.217 4.468 10.14 14.778 14.608l6.014 2.577c20.45 8.765 31.963 17.7 31.963 37.804 0 21.654-17.012 33.51-39.867 33.51-22.339 0-36.774-10.654-43.819-24.574"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 128 128" id="mysql">
                            <path fill="#00618A" d="M2.001 90.458h4.108v-16.223l6.36 14.143c.75 1.712 1.777 2.317 3.792 2.317s3.003-.605 3.753-2.317l6.36-14.143v16.223h4.108v-16.196c0-1.58-.632-2.345-1.936-2.739-3.121-.974-5.215-.131-6.163 1.976l-6.241 13.958-6.043-13.959c-.909-2.106-3.042-2.949-6.163-1.976-1.304.395-1.936 1.159-1.936 2.739v16.197zM33.899 77.252h4.107v8.938c-.038.485.156 1.625 2.406 1.661 1.148.018 8.862 0 8.934 0v-10.643h4.117c.019 0-.004 14.514-.004 14.574.022 3.58-4.441 4.357-6.499 4.417h-12.972v-2.764c.022 0 12.963.003 12.995-.001 2.645-.279 2.332-1.593 2.331-2.035v-1.078h-8.731c-4.062-.037-6.65-1.81-6.683-3.85-.002-.187.089-9.129-.001-9.219z"></path>
                            <path fill="#E48E00" d="M56.63 90.458h11.812c1.383 0 2.727-.289 3.793-.789 1.777-.816 2.646-1.922 2.646-3.372v-3.002c0-1.185-.987-2.292-2.923-3.028-1.027-.396-2.292-.605-3.517-.605h-4.978c-1.659 0-2.449-.5-2.646-1.606-.039-.132-.039-.237-.039-.369v-1.87c0-.105 0-.211.039-.342.197-.843.632-1.08 2.094-1.212l.395-.026h11.733v-2.738h-11.535c-1.659 0-2.528.105-3.318.342-2.449.764-3.517 1.975-3.517 4.082v2.396c0 1.844 2.095 3.424 5.61 3.793.396.025.79.053 1.185.053h4.267c.158 0 .316 0 .435.025 1.304.105 1.856.343 2.252.816.237.237.315.475.315.737v2.397c0 .289-.197.658-.592.974-.355.316-.948.527-1.738.58l-.435.026h-11.338v2.738zM100.511 85.692c0 2.817 2.094 4.397 6.32 4.714.395.026.79.052 1.185.052h10.706v-2.738h-10.784c-2.41 0-3.318-.606-3.318-2.055v-14.168h-4.108v14.195zM77.503 85.834v-9.765c0-2.48 1.742-3.985 5.186-4.46.356-.053.753-.079 1.108-.079h7.799c.396 0 .752.026 1.147.079 3.444.475 5.187 1.979 5.187 4.46v9.765c0 2.014-.74 3.09-2.445 3.792l4.048 3.653h-4.771l-3.274-2.956-3.296.209h-4.395c-.752 0-1.543-.105-2.414-.343-2.613-.712-3.88-2.085-3.88-4.355zm4.434-.237c0 .132.039.265.079.423.237 1.135 1.307 1.768 2.929 1.768h3.732l-3.428-3.095h4.771l2.989 2.7c.552-.295.914-.743 1.041-1.32.039-.132.039-.264.039-.396v-9.368c0-.105 0-.238-.039-.37-.238-1.056-1.307-1.662-2.89-1.662h-6.216c-1.82 0-3.008.792-3.008 2.032v9.288z"></path>
                            <path fill="#00618A" d="M122.336 66.952c-2.525-.069-4.454.166-6.104.861-.469.198-1.216.203-1.292.79.257.271.297.674.502 1.006.394.637 1.059 1.491 1.652 1.938.647.489 1.315 1.013 2.011 1.437 1.235.754 2.615 1.184 3.806 1.938.701.446 1.397 1.006 2.082 1.509.339.247.565.634 1.006.789v-.071c-.231-.294-.291-.698-.503-1.006l-.934-.934c-.913-1.212-2.071-2.275-3.304-3.159-.982-.705-3.18-1.658-3.59-2.801l-.072-.071c.696-.079 1.512-.331 2.154-.503 1.08-.29 2.045-.215 3.16-.503l1.508-.432v-.286c-.563-.578-.966-1.344-1.58-1.867-1.607-1.369-3.363-2.737-5.17-3.879-1.002-.632-2.241-1.043-3.304-1.579-.356-.181-.984-.274-1.221-.575-.559-.711-.862-1.612-1.293-2.441-.9-1.735-1.786-3.631-2.585-5.458-.544-1.245-.9-2.473-1.579-3.59-3.261-5.361-6.771-8.597-12.208-11.777-1.157-.677-2.55-.943-4.021-1.292l-2.37-.144c-.481-.201-.983-.791-1.436-1.077-1.802-1.138-6.422-3.613-7.756-.358-.842 2.054 1.26 4.058 2.011 5.099.527.73 1.203 1.548 1.58 2.369.248.54.29 1.081.503 1.652.521 1.406.976 2.937 1.651 4.236.341.658.718 1.351 1.149 1.939.264.36.718.52.789 1.077-.443.62-.469 1.584-.718 2.369-1.122 3.539-.699 7.938.934 10.557.501.805 1.681 2.529 3.303 1.867 1.419-.578 1.103-2.369 1.509-3.95.092-.357.035-.621.215-.861v.072l1.293 2.585c.957 1.541 2.654 3.15 4.093 4.237.746.563 1.334 1.538 2.298 1.867v-.073h-.071c-.188-.291-.479-.411-.719-.646-.562-.551-1.187-1.235-1.651-1.867-1.309-1.776-2.465-3.721-3.519-5.745-.503-.966-.94-2.032-1.364-3.016-.164-.379-.162-.953-.502-1.148-.466.72-1.149 1.303-1.509 2.154-.574 1.36-.648 3.019-.861 4.739l-.144.071c-1.001-.241-1.352-1.271-1.724-2.154-.94-2.233-1.115-5.83-.287-8.401.214-.666 1.181-2.761.789-3.376-.187-.613-.804-.967-1.148-1.437-.427-.579-.854-1.341-1.149-2.011-.77-1.741-1.129-3.696-1.938-5.457-.388-.842-1.042-1.693-1.58-2.441-.595-.83-1.262-1.44-1.724-2.442-.164-.356-.387-.927-.144-1.293.077-.247.188-.35.432-.431.416-.321 1.576.107 2.01.287 1.152.479 2.113.934 3.089 1.58.468.311.941.911 1.508 1.077h.646c1.011.232 2.144.071 3.088.358 1.67.508 3.166 1.297 4.524 2.155 4.139 2.614 7.522 6.334 9.838 10.772.372.715.534 1.396.861 2.154.662 1.528 1.496 3.101 2.154 4.596.657 1.491 1.298 2.996 2.227 4.237.488.652 2.374 1.002 3.231 1.364.601.254 1.585.519 2.154.861 1.087.656 2.141 1.437 3.16 2.155.509.362 2.076 1.149 2.154 1.798zM90.237 39.593c-.526-.01-.899.058-1.293.144v.071h.072c.251.517.694.849 1.005 1.293l.719 1.508.071-.071c.445-.313.648-.814.646-1.58-.179-.188-.205-.423-.359-.646-.204-.3-.602-.468-.861-.719z"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 255" id="python">
                            <defs>
                                <linearGradient id="a" x1="12.959%" x2="79.639%" y1="12.039%" y2="78.201%">
                                <stop offset="0%" stop-color="#387EB8"></stop>
                                <stop offset="100%" stop-color="#366994"></stop>
                                </linearGradient>
                                <linearGradient id="b" x1="19.128%" x2="90.742%" y1="20.579%" y2="88.429%">
                                <stop offset="0%" stop-color="#FFE052"></stop>
                                <stop offset="100%" stop-color="#FFC331"></stop>
                                </linearGradient>
                            </defs>
                            <path fill="url(#a)" d="M126.916.072c-64.832 0-60.784 28.115-60.784 28.115l.072 29.128h61.868v8.745H41.631S.145 61.355.145 126.77c0 65.417 36.21 63.097 36.21 63.097h21.61v-30.356s-1.165-36.21 35.632-36.21h61.362s34.475.557 34.475-33.319V33.97S194.67.072 126.916.072zM92.802 19.66a11.12 11.12 0 0 1 11.13 11.13 11.12 11.12 0 0 1-11.13 11.13 11.12 11.12 0 0 1-11.13-11.13 11.12 11.12 0 0 1 11.13-11.13z"></path>
                            <path fill="url(#b)" d="M128.757 254.126c64.832 0 60.784-28.115 60.784-28.115l-.072-29.127H127.6v-8.745h86.441s41.486 4.705 41.486-60.712c0-65.416-36.21-63.096-36.21-63.096h-21.61v30.355s1.165 36.21-35.632 36.21h-61.362s-34.475-.557-34.475 33.32v56.013s-5.235 33.897 62.518 33.897zm34.114-19.586a11.12 11.12 0 0 1-11.13-11.13 11.12 11.12 0 0 1 11.13-11.131 11.12 11.12 0 0 1 11.13 11.13 11.12 11.12 0 0 1-11.13 11.13z"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 128 128" id="java">
                            <path fill="#0074BD" d="M52.581 67.817s-3.284 1.911 2.341 2.557c6.814.778 10.297.666 17.805-.753 0 0 1.979 1.237 4.735 2.309-16.836 7.213-38.104-.418-24.881-4.113zM50.522 58.402s-3.684 2.729 1.945 3.311c7.28.751 13.027.813 22.979-1.103 0 0 1.373 1.396 3.536 2.157-20.352 5.954-43.021.469-28.46-4.365z"></path>
                            <path fill="#EA2D2E" d="M67.865 42.431c4.151 4.778-1.088 9.074-1.088 9.074s10.533-5.437 5.696-12.248c-4.519-6.349-7.982-9.502 10.771-20.378.001 0-29.438 7.35-15.379 23.552z"></path>
                            <path fill="#0074BD" d="M90.132 74.781s2.432 2.005-2.678 3.555c-9.716 2.943-40.444 3.831-48.979.117-3.066-1.335 2.687-3.187 4.496-3.576 1.887-.409 2.965-.334 2.965-.334-3.412-2.403-22.055 4.719-9.469 6.762 34.324 5.563 62.567-2.506 53.665-6.524zM54.162 48.647s-15.629 3.713-5.534 5.063c4.264.57 12.758.439 20.676-.225 6.469-.543 12.961-1.704 12.961-1.704s-2.279.978-3.93 2.104c-15.874 4.175-46.533 2.23-37.706-2.038 7.463-3.611 13.533-3.2 13.533-3.2zM82.2 64.317c16.135-8.382 8.674-16.438 3.467-15.353-1.273.266-1.845.496-1.845.496s.475-.744 1.378-1.063c10.302-3.62 18.223 10.681-3.322 16.345 0 0 .247-.224.322-.425z"></path>
                            <path fill="#EA2D2E" d="M72.474 1.313s8.935 8.939-8.476 22.682c-13.962 11.027-3.184 17.313-.006 24.498-8.15-7.354-14.128-13.828-10.118-19.852 5.889-8.842 22.204-13.131 18.6-27.328z"></path>
                            <path fill="#0074BD" d="M55.749 87.039c15.484.99 39.269-.551 39.832-7.878 0 0-1.082 2.777-12.799 4.981-13.218 2.488-29.523 2.199-39.191.603 0 0 1.98 1.64 12.158 2.294z"></path>
                            <path fill="#EA2D2E" d="M94.866 100.181h-.472v-.264h1.27v.264h-.47v1.317h-.329l.001-1.317zm2.535.066h-.006l-.468 1.251h-.216l-.465-1.251h-.005v1.251h-.312v-1.581h.457l.431 1.119.432-1.119h.454v1.581h-.302v-1.251zM53.211 115.037c-1.46 1.266-3.004 1.978-4.391 1.978-1.974 0-3.045-1.186-3.045-3.085 0-2.055 1.146-3.56 5.738-3.56h1.697v4.667h.001zm4.031 4.548v-14.077c0-3.599-2.053-5.973-6.997-5.973-2.886 0-5.416.714-7.473 1.622l.592 2.493c1.62-.595 3.715-1.147 5.771-1.147 2.85 0 4.075 1.147 4.075 3.521v1.779h-1.424c-6.921 0-10.044 2.685-10.044 6.723 0 3.479 2.058 5.456 5.933 5.456 2.49 0 4.351-1.028 6.088-2.533l.316 2.137h3.163v-.001zM70.694 119.585h-5.027l-6.051-19.689h4.391l3.756 12.099.835 3.635c1.896-5.258 3.24-10.596 3.912-15.733h4.271c-1.143 6.481-3.203 13.598-6.087 19.688zM89.982 115.037c-1.465 1.266-3.01 1.978-4.392 1.978-1.976 0-3.046-1.186-3.046-3.085 0-2.055 1.149-3.56 5.736-3.56h1.701v4.667h.001zm4.033 4.548v-14.077c0-3.599-2.059-5.973-6.999-5.973-2.889 0-5.418.714-7.475 1.622l.593 2.493c1.62-.595 3.718-1.147 5.774-1.147 2.846 0 4.074 1.147 4.074 3.521v1.779h-1.424c-6.923 0-10.045 2.685-10.045 6.723 0 3.479 2.056 5.456 5.93 5.456 2.491 0 4.349-1.028 6.091-2.533l.318 2.137h3.163v-.001zM37.322 122.931c-1.147 1.679-3.005 3.008-5.037 3.757l-1.989-2.345c1.547-.794 2.872-2.075 3.489-3.269.532-1.063.753-2.43.753-5.701v-22.482h4.284v22.173c0 4.375-.348 6.144-1.5 7.867z"></path>
                            </svg>
                        </div>
                        <div data-aos="zoom-in" data-aos-delay="900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 288" id="c">
                            <path fill="#5C8DBC" d="M255.569 84.72c-.002-4.83-1.035-9.098-3.124-12.761-2.052-3.602-5.125-6.621-9.247-9.008-34.025-19.619-68.083-39.178-102.097-58.817-9.17-5.294-18.061-5.101-27.163.269C100.395 12.39 32.59 51.237 12.385 62.94 4.064 67.757.015 75.129.013 84.711 0 124.166.013 163.62 0 203.076c.002 4.724.991 8.909 2.988 12.517 2.053 3.711 5.169 6.813 9.386 9.254 20.206 11.703 88.02 50.547 101.56 58.536 9.106 5.373 17.997 5.565 27.17.269 34.015-19.64 68.075-39.198 102.105-58.817 4.217-2.44 7.333-5.544 9.386-9.252 1.994-3.608 2.985-7.793 2.987-12.518 0 0 0-78.889-.013-118.345"></path>
                            <path fill="#1A4674" d="M128.182 143.509L2.988 215.593c2.053 3.711 5.169 6.813 9.386 9.254 20.206 11.703 88.02 50.547 101.56 58.536 9.106 5.373 17.997 5.565 27.17.269 34.015-19.64 68.075-39.198 102.105-58.817 4.217-2.44 7.333-5.544 9.386-9.252l-124.413-72.074"></path>
                            <path fill="#1A4674" d="M91.101 164.861c7.285 12.718 20.98 21.296 36.69 21.296 15.807 0 29.58-8.687 36.828-21.541l-36.437-21.107-37.081 21.352"></path>
                            <path fill="#1B598E" d="M255.569 84.72c-.002-4.83-1.035-9.098-3.124-12.761l-124.263 71.55 124.413 72.074c1.994-3.608 2.985-7.793 2.987-12.518 0 0 0-78.889-.013-118.345"></path>
                            <path fill="#FFF" d="M248.728 148.661h-9.722v9.724h-9.724v-9.724h-9.721v-9.721h9.721v-9.722h9.724v9.722h9.722v9.721M213.253 148.661h-9.721v9.724h-9.722v-9.724h-9.722v-9.721h9.722v-9.722h9.722v9.722h9.721v9.721"></path>
                            <path fill="#FFF" d="M164.619 164.616c-7.248 12.854-21.021 21.541-36.828 21.541-15.71 0-29.405-8.578-36.69-21.296a42.062 42.062 0 0 1-5.574-20.968c0-23.341 18.923-42.263 42.264-42.263 15.609 0 29.232 8.471 36.553 21.059l36.941-21.272c-14.683-25.346-42.096-42.398-73.494-42.398-46.876 0-84.875 38-84.875 84.874 0 15.378 4.091 29.799 11.241 42.238 14.646 25.48 42.137 42.637 73.634 42.637 31.555 0 59.089-17.226 73.714-42.781l-36.886-21.371"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section id="projects" class="p-40 bg-opacity-10 min-h-screen relative">
        <div class="p-7">
            <h2 class="text-3xl font-bold">Projects</h2>
            <ul class="list-disc ml-6 mt-2">
                <li class="text-lg">Time Scheduling System (Final Project)</li>
                <li class="text-lg">Online Thrift Shop (Final Project)</li>
            </ul>
        </div>
    </section>

    <section id="certificates" class="p-40 bg-opacity-10 min-h-screen relative">
        <div class="p-7">
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

