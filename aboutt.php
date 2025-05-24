
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