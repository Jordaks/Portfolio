<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ce431fb7e5.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/jpeg" href="src/image/icon.jpeg" />

  <title>Jordan - Portfolio</title>
  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            gray: {
              50: '#f8fafc',
              100: '#f1f5f9',
              200: '#e2e8f0',
              300: '#cbd5e1',
              400: '#94a3b8',
              500: '#64748b',
              600: '#475569',
              700: '#334155',
              800: '#1e293b',
              900: '#0f172a',
              950: '#020617',
            }
          }
        }
      }
    }
  </script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
      color: #333;
      overflow-x: hidden;
    }
    canvas {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
    .profile-img {
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
      border: 4px solid rgba(255, 255, 255, 0.7);
      padding: 2px;
      margin-bottom: 20px;
    }

    /* Smooth animation base */
    * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* Initial states for animations */
    .fade-up-element {
      opacity: 0;
      transform: translateY(60px) scale(0.95);
      filter: blur(2px);
      transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .social-element {
      opacity: 0;
      transform: translateY(40px) scale(0.8) rotate(-10deg);
      filter: blur(1px);
      transition: all 1s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    /* Smooth fade-in states */
    .loaded .fade-up-element {
      opacity: 1;
      transform: translateY(0) scale(1);
      filter: blur(0px);
    }

    .loaded .social-element {
      opacity: 1;
      transform: translateY(0) scale(1) rotate(0deg);
      filter: blur(0px);
    }

    /* Staggered delays with smooth timing */
    .loaded .fade-up-element:nth-child(1) { transition-delay: 0.1s; }
    .loaded .fade-up-element:nth-child(2) { transition-delay: 0.25s; }
    .loaded .fade-up-element:nth-child(3) { transition-delay: 0.4s; }
    .loaded .fade-up-element:nth-child(4) { transition-delay: 0.55s; }
    .loaded .fade-up-element:nth-child(5) { transition-delay: 0.7s; }
    .loaded .fade-up-element:nth-child(6) { transition-delay: 0.85s; }
    .loaded .fade-up-element:nth-child(7) { transition-delay: 1s; }

    .loaded .social-element:nth-child(1) { transition-delay: 1.2s; }
    .loaded .social-element:nth-child(2) { transition-delay: 1.3s; }
    .loaded .social-element:nth-child(3) { transition-delay: 1.4s; }
    .loaded .social-element:nth-child(4) { transition-delay: 1.5s; }

    /* Enhanced hover effects with smooth transitions */
    .social-icon {
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      transform-origin: center;
      position: relative;
      display: inline-block;
    }

    .social-icon::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      z-index: -1;
    }

    .social-icon:hover::before {
      width: 60px;
      height: 60px;
    }

    .social-icon:hover {
      transform: scale(1.25) translateY(-3px);
      filter: drop-shadow(0 8px 16px rgba(0,0,0,0.15));
    }

    .social-icon.facebook:hover {
      transform: scale(1.25) translateY(-3px) rotate(5deg);
      color: #1877F2;
    }

    .social-icon.github:hover {
      transform: scale(1.25) translateY(-3px) rotate(-5deg);
      color: #333;
    }

    .social-icon.linkedin:hover {
      transform: scale(1.25) translateY(-3px) rotate(3deg);
      color: #0A66C2;
    }

    .social-icon.instagram:hover {
      transform: scale(1.25) translateY(-3px) rotate(-3deg);
    }

    /* Instagram gradient effect with smooth transition */
    .instagram-gradient {
      background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      opacity: 0;
      transition: opacity 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: absolute;
      top: 0;
      left: 0;
    }

    .social-icon.instagram:hover .instagram-gradient {
      opacity: 1;
    }

    /* Smooth button hover effects */
    .btn-smooth {
      transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: relative;
      overflow: hidden;
    }

    .btn-smooth::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
      transition: left 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .btn-smooth:hover::before {
      left: 100%;
    }

    .btn-smooth:hover {
      transform: scale(1.05) translateY(-2px);
      box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.2);
    }

    .btn-smooth:active {
      transform: scale(0.98) translateY(0px);
      transition: all 0.1s ease;
    }

    /* Resume button special effects */
    .resume-btn {
      background: linear-gradient(135deg, rgba(147, 197, 253, 0.1), rgba(59, 130, 246, 0.1));
      backdrop-filter: blur(10px);
      border: 2px solid rgba(147, 197, 253, 0.5);
      transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      position: relative;
      overflow: hidden;
    }

    .resume-btn::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 197, 253, 0.2));
      opacity: 0;
      transition: opacity 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .resume-btn:hover::after {
      opacity: 1;
    }

    .resume-btn:hover {
      transform: scale(1.08) translateY(-4px);
      box-shadow: 0 20px 40px -10px rgba(59, 130, 246, 0.3);
      border-color: rgba(59, 130, 246, 0.8);
      color: #3b82f6;
    }

    /* Profile image smooth hover */
    .profile-img {
      transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .profile-img:hover {
      transform: scale(1.08) rotate(2deg);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      filter: brightness(1.05) contrast(1.05);
    }

    /* Text smooth animations */
    .text-smooth {
      transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .text-smooth:hover {
      transform: translateY(-1px);
      text-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* Smooth scroll behavior */
    html {
      scroll-behavior: smooth;
    }

    /* Loading overlay for smoother initial load */
    .loading-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, #f8fafc, #e2e8f0);
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 1;
      transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .loading-overlay.fade-out {
      opacity: 0;
      pointer-events: none;
    }

    .loading-spinner {
      width: 40px;
      height: 40px;
      border: 3px solid rgba(147, 197, 253, 0.3);
      border-top: 3px solid #3b82f6;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Smooth focus states for accessibility */
    .btn-smooth:focus,
    .social-icon:focus {
      outline: 2px solid rgba(59, 130, 246, 0.5);
      outline-offset: 2px;
      transition: outline 0.2s ease;
    }

    /* Reduced motion for accessibility */
    @media (prefers-reduced-motion: reduce) {
      .fade-up-element,
      .social-element,
      .social-icon,
      .btn-smooth,
      .profile-img {
        transition: none !important;
        animation: none !important;
      }
    }

    /* Enhanced mobile smoothness */
    @media (max-width: 768px) {
      .social-icon:hover {
        transform: scale(1.15) translateY(-2px);
      }
      
      .btn-smooth:hover {
        transform: scale(1.03) translateY(-1px);
      }
    }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100">
  <!-- Loading overlay -->
  <div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner"></div>
  </div>

  <canvas id="background-canvas"></canvas>
  
  <main class="relative min-h-screen w-full overflow-hidden">
    <div class="relative z-10 flex min-h-screen flex-col items-center justify-center p-6 text-gray-800" id="main-content">
      
      <!-- Profile Picture -->
      <div class="fade-up-element">
        <img src="/Portfolio/src/image/me.jpeg" alt="Jordan" 
             class="profile-img shadow-2xl w-52 h-52 sm:w-52 sm:h-52 md:w-52 md:h-52 lg:w-52 lg:h-52 xl:w-64 xl:h-64"
              loading="lazy">
      </div>
      
      <!-- Name -->
      <h1 class="fade-up-element text-smooth mb-4 text-4xl font-light tracking-tight sm:text-5xl md:text-6xl">
        Hi! I'm <span class="text-blue-300">Jordan</span>
      </h1>
      
      <!-- Description -->
      <p class="fade-up-element text-smooth text-xl font-light opacity-80 text-center max-w-2xl">
        A BS Information Technology student from Batangas State University - TNEU.
      </p>
      
      <!-- Quote -->
      <blockquote class="fade-up-element text-smooth italic text-sm text-gray-600 opacity-80 mb-3 text-center max-w-lg">
        "Success begins with a great mindset—chase your goals, stay focused, and never give up."
      </blockquote>
      
      <!-- Resume Download Button -->
      <div class="fade-up-element">
        <a href="/Portfolio/src/RESUME.pdf" download 
           class="resume-btn btn-smooth inline-block font-semibold py-3 px-6 rounded-full shadow-lg mb-4 text-blue-300 relative z-10">
          📄 Download Resume
        </a>
      </div>
      
      <!-- Social Media Icons -->
      <div class="fade-up-element flex gap-8 text-4xl m-4">
        <a href="https://www.facebook.com/markjordan.javier" target="_blank" 
           class="social-element social-icon facebook" tabindex="0">
          <i class="fab fa-facebook"></i>
        </a>
        <a href="https://github.com/Jordaks" target="_blank" 
           class="social-element social-icon github" tabindex="0">
          <i class="fab fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/mark-jordan-javier-29b72935a/" target="_blank" 
           class="social-element social-icon linkedin" tabindex="0">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://www.instagram.com/imnot_dannnnn/" target="_blank"
            class="social-element social-icon instagram relative" tabindex="0">
          <i class="fa-brands fa-instagram text-black text-4xl"></i>
          <i class="fa-brands fa-instagram instagram-gradient text-4xl"></i>
        </a>
      </div>
      
      <!-- Navigation Buttons -->
      <div class="fade-up-element flex gap-4">
        <a href="/Portfolio/about.php" tabindex="0">
          <button class="btn-smooth rounded-full border text-blue-300 border-gray-300 bg-white/70 px-6 py-2 backdrop-blur-sm">
            Portfolio
          </button>
        </a>
        <a href="" tabindex="0">
          <button class="btn-smooth rounded-full border text-blue-300 border-gray-300 bg-white/70 px-6 py-2 backdrop-blur-sm">
            Contact
          </button>
        </a>
      </div>
    </div>
  </main>

  <script>
    // Smooth page load with loading overlay
    document.addEventListener('DOMContentLoaded', function() {
      const loadingOverlay = document.getElementById('loadingOverlay');
      
      // Hide loading overlay and start animations
      setTimeout(() => {
        loadingOverlay.classList.add('fade-out');
        document.body.classList.add('loaded');
        
        // Remove loading overlay from DOM after animation
        setTimeout(() => {
          loadingOverlay.remove();
        }, 800);
      }, 500);

      // Enhanced particle background system
      const canvas = document.getElementById('background-canvas');
      const ctx = canvas.getContext('2d');
      let mouseX = 0;
      let mouseY = 0;
      let time = 0;

      // Smooth mouse tracking with interpolation
      let targetMouseX = 0;
      let targetMouseY = 0;
      
      document.addEventListener('mousemove', function(e) {
        targetMouseX = e.clientX;
        targetMouseY = e.clientY;
      });

      // Smooth mouse interpolation
      function updateMouse() {
        mouseX += (targetMouseX - mouseX) * 0.1;
        mouseY += (targetMouseY - mouseY) * 0.1;
      }

      function setCanvasDimensions() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
      }

      setCanvasDimensions();
      window.addEventListener('resize', setCanvasDimensions);

      // Enhanced Geometric Particle class with smoother movement
      class GeometricParticle {
        constructor() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          
          // Smoother movement
          this.vx = (Math.random() - 0.5) * 0.2;
          this.vy = (Math.random() - 0.5) * 0.2;
          this.targetX = this.x;
          this.targetY = this.y;
          
          // Enhanced appearance
          this.size = Math.random() * 6 + 3;
          this.baseSize = this.size;
          this.rotation = Math.random() * Math.PI * 2;
          this.rotationSpeed = (Math.random() - 0.5) * 0.015;
          
          this.shape = 'octagon';
          
          // Smoother color transitions
          const colorVariations = [
            'rgba(148, 163, 184, 0.3)',
            'rgba(203, 213, 225, 0.3)',
            'rgba(226, 232, 240, 0.3)',
            'rgba(100, 116, 139, 0.3)',
            'rgba(71, 85, 105, 0.25)',
          ];
          this.color = colorVariations[Math.floor(Math.random() * colorVariations.length)];
          this.strokeColor = this.color.replace('0.3', '0.5').replace('0.25', '0.4');
          
          // Smoother animation properties
          this.pulsePhase = Math.random() * Math.PI * 2;
          this.pulseSpeed = Math.random() * 0.015 + 0.008;
          
          this.connectionRadius = Math.random() * 70 + 50;
          this.isConnected = false;
          this.connectionOpacity = 0;
          
          this.formationTarget = null;
          this.inFormation = false;
          this.formationStrength = 0;
        }

        update() {
          time += 0.0008;
          
          this.rotation += this.rotationSpeed;
          
          // Smoother pulse animation
          this.pulsePhase += this.pulseSpeed;
          const pulse = Math.sin(this.pulsePhase) * 0.2 + 1;
          this.size = this.baseSize * pulse;
          
          // Smoother mouse interaction
          if (mouseX && mouseY) {
            const dx = mouseX - this.x;
            const dy = mouseY - this.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 180) {
              const angle = Math.atan2(dy, dx);
              const formationDistance = 60 + Math.random() * 30;
              this.formationTarget = {
                x: mouseX + Math.cos(angle + Math.random() * 0.5 - 0.25) * formationDistance,
                y: mouseY + Math.sin(angle + Math.random() * 0.5 - 0.25) * formationDistance
              };
              this.inFormation = true;
              this.formationStrength = Math.min(this.formationStrength + 0.015, 1);
            } else {
              this.inFormation = false;
              this.formationStrength = Math.max(this.formationStrength - 0.008, 0);
            }
          } else {
            this.inFormation = false;
            this.formationStrength = Math.max(this.formationStrength - 0.008, 0);
          }
          
          // Smoother movement logic
          if (this.inFormation && this.formationTarget) {
            const dx = this.formationTarget.x - this.x;
            const dy = this.formationTarget.y - this.y;
            this.vx += dx * 0.0008 * this.formationStrength;
            this.vy += dy * 0.0008 * this.formationStrength;
          } else {
            this.vx += (Math.random() - 0.5) * 0.008;
            this.vy += (Math.random() - 0.5) * 0.008;
          }
          
          // Enhanced velocity damping for smoothness
          this.vx *= 0.995;
          this.vy *= 0.995;
          
          const maxSpeed = 0.3;
          const speed = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
          if (speed > maxSpeed) {
            this.vx = (this.vx / speed) * maxSpeed;
            this.vy = (this.vy / speed) * maxSpeed;
          }
          
          this.x += this.vx;
          this.y += this.vy;
          
          // Smooth boundary wrapping
          if (this.x < -30) this.x = canvas.width + 30;
          if (this.x > canvas.width + 30) this.x = -30;
          if (this.y < -30) this.y = canvas.height + 30;
          if (this.y > canvas.height + 30) this.y = -30;
        }

        drawShape() {
          ctx.save();
          ctx.translate(this.x, this.y);
          ctx.rotate(this.rotation);
          
          const size = this.size;
          
          // Smoother octagon with anti-aliasing
          ctx.beginPath();
          for (let i = 0; i < 8; i++) {
            const angle = (Math.PI * 2 * i) / 8;
            const x = Math.cos(angle) * size;
            const y = Math.sin(angle) * size;
            if (i === 0) ctx.moveTo(x, y);
            else ctx.lineTo(x, y);
          }
          ctx.closePath();
          
          ctx.fillStyle = this.color;
          ctx.fill();
          ctx.strokeStyle = this.strokeColor;
          ctx.lineWidth = 0.8;
          ctx.stroke();
          
          ctx.restore();
        }

        draw() {
          this.drawShape();
        }
      }

      // Create particles with better distribution
      const particles = [];
      const particleCount = Math.min(50, Math.floor(window.innerWidth / 30));

      for (let i = 0; i < particleCount; i++) {
        particles.push(new GeometricParticle());
      }

      // Smoother connections
      function drawConnections() {
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 100) {
              const opacity = (1 - distance / 100) * 0.25;
              const formationBonus = (particles[i].formationStrength + particles[j].formationStrength) * 0.15;
              const finalOpacity = Math.min(opacity + formationBonus, 0.5);
              
              ctx.strokeStyle = `rgba(148, 163, 184, ${finalOpacity})`;
              ctx.lineWidth = 0.8;
              
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              ctx.stroke();
            }
          }
        }
      }

      // Smoother grid
      function drawGrid() {
        const gridSize = 120;
        const opacity = 0.03;
        
        ctx.strokeStyle = `rgba(100, 116, 139, ${opacity})`;
        ctx.lineWidth = 0.3;
        
        for (let x = 0; x <= canvas.width; x += gridSize) {
          ctx.beginPath();
          ctx.moveTo(x, 0);
          ctx.lineTo(x, canvas.height);
          ctx.stroke();
        }
        
        for (let y = 0; y <= canvas.height; y += gridSize) {
          ctx.beginPath();
          ctx.moveTo(0, y);
          ctx.lineTo(canvas.width, y);
          ctx.stroke();
        }
      }

      // Smooth animation loop
      function animate() {
        updateMouse();
        
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Smoother gradient background
        const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
        gradient.addColorStop(0, '#f8fafc');
        gradient.addColorStop(0.5, '#f1f5f9');
        gradient.addColorStop(1, '#e2e8f0');
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        
        drawGrid();
        drawConnections();
        
        particles.forEach(particle => {
          particle.update();
          particle.draw();
        });

        requestAnimationFrame(animate);
      }

      animate();

      // Enhanced smooth interactions
      const socialIcons = document.querySelectorAll('.social-icon');
      socialIcons.forEach((icon, index) => {
        // Add smooth entrance animation
        setTimeout(() => {
          icon.style.transform = 'translateY(0) scale(1) rotate(0deg)';
        }, 1200 + (index * 100));

        // Enhanced hover effects
        icon.addEventListener('mouseenter', function() {
          this.style.transition = 'all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
        });
      });

      // Smooth button interactions
      const buttons = document.querySelectorAll('.btn-smooth');
      buttons.forEach(button => {
        button.addEventListener('mousedown', function() {
          this.style.transform = 'scale(0.96)';
        });
        
        button.addEventListener('mouseup', function() {
          this.style.transform = '';
        });
        
        button.addEventListener('mouseleave', function() {
          this.style.transform = '';
        });
      });

      // Smooth scroll to top on logo click (if needed)
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Home') {
          window.scrollTo({ top: 0, behavior: 'smooth' });
        }
      });
    });
  </script>
</body>
</html>