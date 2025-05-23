
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/ce431fb7e5.js" crossorigin="anonymous"></script>
  <link rel="icon" type="image/jpeg" href="src/image/icon.jpeg" />

  <title>Me</title>
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
    }
  </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-gray-100">
  <canvas id="background-canvas"></canvas>
  
  <main class="relative min-h-screen w-full overflow-hidden">
    <div class="relative z-10 flex min-h-screen flex-col items-center justify-center p-6 text-gray-800">
      <!-- Profile Picture -->
      <div class="mb-8 overflow-hidden">
        <img src="/Portfolio/src/image/me.jpeg" alt="Jordan"
              class="profile-img w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 transition-all duration-300 hover:scale-105"
              loading="lazy">
      </div>
      
      <h1 class="mb-4 text-4xl font-light tracking-tight sm:text-5xl md:text-6xl">Hi! I'm <span class="text-blue-300">Jordan</span></h1>
      <p class="text-xl font-light opacity-80">A BS Information Technology student from Batangas State University - TNEU.</p>
            <blockquote class="italic text-sm text-gray-600 opacity-80 mb-3">
                "Success begins with a great mindset—chase your goals, stay focused, and never give up."
            </blockquote>
            <a href="/Portfolio/src/RESUME.pdf" download class="hover:shadow-2xl transform hover:scale-110 hover:text-white border-blue-300 border-2 hover:border-white  hover:bg-blue-300 transition duration-400 text-blue-300 font-semibold py-3 px-5 rounded-full shadow-lg">
                📄 Download Resume
            </a>
              <div class="flex gap-8 text-4xl m-4">
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
                class="group hover:opacity-75 transition duration-200"  >
                    <i class="fa-brands fa-instagram mx-[10px] text-black  transition-transform transform group-hover:scale-110 text-4xl"
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
      <div class="flex gap-4">
        <a href="/Portfolio/about.php">
          <button class="rounded-full border text-blue-300 border-gray-300 bg-white/70 px-6 py-2 backdrop-blur-sm transition hover:bg-white">
            Portfolio
          </button>
        </a>
        <a href="">
          <button class="rounded-full border text-blue-300 border-gray-300 bg-white/70 px-6 py-2 backdrop-blur-sm transition hover:bg-white">
            Contact
          </button></a>
      </div>
    </div>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const canvas = document.getElementById('background-canvas');
      const ctx = canvas.getContext('2d');
      let mouseX = 0;
      let mouseY = 0;
      let time = 0;

      // Track mouse position
      document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
      });

      // Set canvas dimensions
      function setCanvasDimensions() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
      }

      setCanvasDimensions();
      window.addEventListener('resize', setCanvasDimensions);

      // Geometric Particle class
      class GeometricParticle {
        constructor() {
          this.x = Math.random() * canvas.width;
          this.y = Math.random() * canvas.height;
          
          // Movement
          this.vx = (Math.random() - 0.5) * 0.3;
          this.vy = (Math.random() - 0.5) * 0.3;
          this.targetX = this.x;
          this.targetY = this.y;
          
          // Appearance
          this.size = Math.random() * 8 + 4;
          this.baseSize = this.size;
          this.rotation = Math.random() * Math.PI * 2;
          this.rotationSpeed = (Math.random() - 0.5) * 0.02;
          
          // Shape type
          // Shape type - all octagons
          this.shape = 'octagon';
          
          // Color - monochromatic with subtle variations
          const colorVariations = [
            'rgba(148, 163, 184, 0.4)', // slate-400
            'rgba(203, 213, 225, 0.4)', // slate-300
            'rgba(226, 232, 240, 0.4)', // slate-200
            'rgba(100, 116, 139, 0.4)', // slate-500
            'rgba(71, 85, 105, 0.3)',   // slate-600
          ];
          this.color = colorVariations[Math.floor(Math.random() * colorVariations.length)];
          this.strokeColor = this.color.replace('0.4', '0.6').replace('0.3', '0.5');
          
          // Animation properties
          this.pulsePhase = Math.random() * Math.PI * 2;
          this.pulseSpeed = Math.random() * 0.02 + 0.01;
          
          // Connection properties
          this.connectionRadius = Math.random() * 80 + 60;
          this.isConnected = false;
          this.connectionOpacity = 0;
          
          // Formation behavior
          this.formationTarget = null;
          this.inFormation = false;
          this.formationStrength = 0;
        }

        update() {
          time += 0.001;
          
          // Update rotation
          this.rotation += this.rotationSpeed;
          
          // Pulse animation
          this.pulsePhase += this.pulseSpeed;
          const pulse = Math.sin(this.pulsePhase) * 0.3 + 1;
          this.size = this.baseSize * pulse;
          
          // Mouse interaction - particles form temporary clusters near mouse
          if (mouseX && mouseY) {
            const dx = mouseX - this.x;
            const dy = mouseY - this.y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 200) {
              // Create formation target near mouse
              const angle = Math.atan2(dy, dx);
              const formationDistance = 80 + Math.random() * 40;
              this.formationTarget = {
                x: mouseX + Math.cos(angle + Math.random() - 0.5) * formationDistance,
                y: mouseY + Math.sin(angle + Math.random() - 0.5) * formationDistance
              };
              this.inFormation = true;
              this.formationStrength = Math.min(this.formationStrength + 0.02, 1);
            } else {
              this.inFormation = false;
              this.formationStrength = Math.max(this.formationStrength - 0.01, 0);
            }
          } else {
            this.inFormation = false;
            this.formationStrength = Math.max(this.formationStrength - 0.01, 0);
          }
          
          // Movement logic
          if (this.inFormation && this.formationTarget) {
            // Move towards formation position
            const dx = this.formationTarget.x - this.x;
            const dy = this.formationTarget.y - this.y;
            this.vx += dx * 0.001 * this.formationStrength;
            this.vy += dy * 0.001 * this.formationStrength;
          } else {
            // Random drift
            this.vx += (Math.random() - 0.5) * 0.01;
            this.vy += (Math.random() - 0.5) * 0.01;
          }
          
          // Apply velocity damping
          this.vx *= 0.99;
          this.vy *= 0.99;
          
          // Limit velocity
          const maxSpeed = 0.5;
          const speed = Math.sqrt(this.vx * this.vx + this.vy * this.vy);
          if (speed > maxSpeed) {
            this.vx = (this.vx / speed) * maxSpeed;
            this.vy = (this.vy / speed) * maxSpeed;
          }
          
          // Update position
          this.x += this.vx;
          this.y += this.vy;
          
          // Boundary wrapping
          if (this.x < -50) this.x = canvas.width + 50;
          if (this.x > canvas.width + 50) this.x = -50;
          if (this.y < -50) this.y = canvas.height + 50;
          if (this.y > canvas.height + 50) this.y = -50;
        }

        drawShape() {
          ctx.save();
          ctx.translate(this.x, this.y);
          ctx.rotate(this.rotation);
          
          const size = this.size;
          
          // Draw octagon (8-sided polygon)
          ctx.beginPath();
          for (let i = 0; i < 8; i++) {
            const angle = (Math.PI * 2 * i) / 8;
            const x = Math.cos(angle) * size;
            const y = Math.sin(angle) * size;
            if (i === 0) ctx.moveTo(x, y);
            else ctx.lineTo(x, y);
          }
          ctx.closePath();
          
          // Fill and stroke
          ctx.fillStyle = this.color;
          ctx.fill();
          ctx.strokeStyle = this.strokeColor;
          ctx.lineWidth = 1;
          ctx.stroke();
          
          ctx.restore();
        }

        draw() {
          this.drawShape();
        }
      }

      // Create particles
      const particles = [];
      const particleCount = Math.min(60, Math.floor(window.innerWidth / 25));

      for (let i = 0; i < particleCount; i++) {
        particles.push(new GeometricParticle());
      }

      // Draw dynamic connections
      function drawConnections() {
        ctx.strokeStyle = 'rgba(148, 163, 184, 0.2)';
        ctx.lineWidth = 1;
        
        for (let i = 0; i < particles.length; i++) {
          for (let j = i + 1; j < particles.length; j++) {
            const dx = particles[i].x - particles[j].x;
            const dy = particles[i].y - particles[j].y;
            const distance = Math.sqrt(dx * dx + dy * dy);
            
            if (distance < 120) {
              const opacity = (1 - distance / 120) * 0.3;
              
              // Stronger connections when particles are in formation
              const formationBonus = (particles[i].formationStrength + particles[j].formationStrength) * 0.2;
              const finalOpacity = Math.min(opacity + formationBonus, 0.6);
              
              ctx.strokeStyle = `rgba(148, 163, 184, ${finalOpacity})`;
              
              ctx.beginPath();
              ctx.moveTo(particles[i].x, particles[i].y);
              ctx.lineTo(particles[j].x, particles[j].y);
              ctx.stroke();
            }
          }
        }
      }

      // Draw geometric grid overlay
      function drawGrid() {
        const gridSize = 100;
        const opacity = 0.05;
        
        ctx.strokeStyle = `rgba(100, 116, 139, ${opacity})`;
        ctx.lineWidth = 0.5;
        
        // Vertical lines
        for (let x = 0; x <= canvas.width; x += gridSize) {
          ctx.beginPath();
          ctx.moveTo(x, 0);
          ctx.lineTo(x, canvas.height);
          ctx.stroke();
        }
        
        // Horizontal lines
        for (let y = 0; y <= canvas.height; y += gridSize) {
          ctx.beginPath();
          ctx.moveTo(0, y);
          ctx.lineTo(canvas.width, y);
          ctx.stroke();
        }
      }

      // Animation
      function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        // Draw gradient background
        const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
        gradient.addColorStop(0, '#f8fafc');
        gradient.addColorStop(1, '#e2e8f0');
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        
        // Draw subtle grid
        drawGrid();
        
        // Draw connections first (behind particles)
        drawConnections();
        
        // Update and draw particles
        particles.forEach(particle => {
          particle.update();
          particle.draw();
        });

        requestAnimationFrame(animate);
      }

      animate();
    });
  </script>
</body>
</html>