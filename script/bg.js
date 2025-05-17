let particles = [];

function setup() {
	let canvas = createCanvas(window.innerWidth, window.innerHeight);
	canvas.position(0, 0);
	canvas.style('z-index', '-1');
	canvas.style('position', 'fixed');
	canvas.style('top', '0');
	canvas.style('left', '0');
	clear();
	for (let i = 0; i < 650; i++) {
		particles.push({
			pos: createVector(random(width), random(height)),
			vel: createVector(0, 0),
			acc: createVector(0, 0)
		});
	}
	strokeWeight(1);
	noFill();
}

function draw() {
	clear();
	for (let i = 0; i < particles.length; i++) {
		let p = particles[i];
		let mouse = createVector(mouseX, mouseY);
		let dir = p.pos.copy().sub(mouse);
		let d = dir.mag();
		dir.normalize();

		if (d < 150) {
			let force = 50 / (d * d);
			dir.mult(force);
			p.acc = dir;
		} else {
			p.acc = p5.Vector.random2D().mult(0.003);
		}

		p.vel.add(p.acc);
		p.vel.limit(0.5);
		p.pos.add(p.vel);

		// Bounce inside edges
		if (p.pos.x <= 0 || p.pos.x >= width) p.vel.x *= -1;
		if (p.pos.y <= 0 || p.pos.y >= height) p.vel.y *= -1;

		// Particle dot
		noStroke();
		fill(255, 220);
		ellipse(p.pos.x, p.pos.y, 3, 3);

		// Connecting lines
		for (let j = i + 1; j < particles.length; j++) {
			let p2 = particles[j];
			let distAB = dist(p.pos.x, p.pos.y, p2.pos.x, p2.pos.y);
			if (distAB < 75) {
				stroke(255, map(distAB, 0, 75, 60, 0));
				line(p.pos.x, p.pos.y, p2.pos.x, p2.pos.y);
			}
		}
	}
}

function windowResized() {
	resizeCanvas(window.innerWidth, window.innerHeight);
}
