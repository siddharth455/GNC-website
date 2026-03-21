<?php require "common/header.php"; ?>

<!-- Background Canvas -->
<canvas id="bgCanvas"></canvas>

<section class="heroBanner">
  <div id="myCarousel" class="carousel slide h-100" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <picture>
          <source type="image/webp" srcset="upload/infra/rangrezza-banner.webp">
          <img src="upload/infra/rangrezza-banner.webp"
            class="d-block w-100 img-fluid"
            alt="Placement Banner"
            width="1200" height="600"
            loading="eager"
            decoding="async"
            fetchpriority="high">
        </picture>
      </div>
    </div>
  </div>
</section>

<style>

/* ===== Background Canvas ===== */
#bgCanvas {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background: #000;
}

/* Glow overlay */
body::before {
  content: "";
  position: fixed;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(0,219,222,0.15), transparent 70%);
  animation: moveGlow 10s linear infinite;
  z-index: -1;
}

@keyframes moveGlow {
  0% { transform: translate(-25%, -25%); }
  50% { transform: translate(-10%, -10%); }
  100% { transform: translate(-25%, -25%); }
}

/* Content Styling */
.center-content {
  min-height: 80vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  flex-direction: column;
  animation: fadeIn 2s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to { opacity: 1; transform: translateY(0); }
}

h1 {
  font-size: 3rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 2px;
  background: linear-gradient(90deg, #00dbde, #fc00ff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: glow 2s ease-in-out infinite alternate;
}

@keyframes glow {
  from { text-shadow: 0 0 10px #00dbde; }
  to { text-shadow: 0 0 20px #fc00ff; }
}

.subtitle {
  font-size: 1.2rem;
  margin-bottom: 20px;
  opacity: 0.8;
  color: #fff;
}

.countdown {
  font-size: 2rem;
  font-weight: 600;
  display: flex;
  gap: 20px;
  color: #fff;
  justify-content: center;
  flex-wrap: wrap;
}

.time-box {
  background: rgba(255,255,255,0.1);
  padding: 15px 20px;
  border-radius: 10px;
  backdrop-filter: blur(10px);
  min-width: 80px;
}

.label {
  font-size: 0.8rem;
  opacity: 0.7;
}

@media (max-width: 768px) {
  h1 {
    font-size: 2rem;
  }
  .countdown {
    font-size: 1.5rem;
  }
}

</style>

<div class="container">
  <div class="center-content">
    
    <h1>Techno Jashan 2026</h1>
    <p class="subtitle">🚀 Something Big is Coming Soon</p>

    <div class="countdown" id="countdown">
      <div class="time-box">
        <div id="days">00</div>
        <div class="label">Days</div>
      </div>
      <div class="time-box">
        <div id="hours">00</div>
        <div class="label">Hours</div>
      </div>
      <div class="time-box">
        <div id="minutes">00</div>
        <div class="label">Minutes</div>
      </div>
      <div class="time-box">
        <div id="seconds">00</div>
        <div class="label">Seconds</div>
      </div>
    </div>

  </div>
</div>

<!-- Countdown Script -->
<script>
const eventDate = new Date("April 28, 2026 06:00:00").getTime();

const countdown = setInterval(() => {
  const now = new Date().getTime();
  const distance = eventDate - now;

  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
  const minutes = Math.floor((distance / (1000 * 60)) % 60);
  const seconds = Math.floor((distance / 1000) % 60);

  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  if (distance < 0) {
    clearInterval(countdown);
    document.getElementById("countdown").innerHTML = "🎉 Event Started!";
  }
}, 1000);
</script>

<!-- Particle Animation Script -->
<script>
const canvas = document.getElementById("bgCanvas");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particlesArray = [];

class Particle {
  constructor() {
    this.x = Math.random() * canvas.width;
    this.y = Math.random() * canvas.height;
    this.size = Math.random() * 2 + 1;
    this.speedX = Math.random() * 1 - 0.5;
    this.speedY = Math.random() * 1 - 0.5;
  }

  update() {
    this.x += this.speedX;
    this.y += this.speedY;

    if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
    if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;
  }

  draw() {
    ctx.fillStyle = "rgba(0, 219, 222, 0.7)";
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
    ctx.fill();
  }
}

function init() {
  particlesArray = [];
  for (let i = 0; i < 120; i++) {
    particlesArray.push(new Particle());
  }
}

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  for (let i = 0; i < particlesArray.length; i++) {
    particlesArray[i].update();
    particlesArray[i].draw();

    for (let j = i; j < particlesArray.length; j++) {
      let dx = particlesArray[i].x - particlesArray[j].x;
      let dy = particlesArray[i].y - particlesArray[j].y;
      let distance = dx * dx + dy * dy;

      if (distance < 10000) {
        ctx.strokeStyle = "rgba(252, 0, 255, 0.2)";
        ctx.beginPath();
        ctx.moveTo(particlesArray[i].x, particlesArray[i].y);
        ctx.lineTo(particlesArray[j].x, particlesArray[j].y);
        ctx.stroke();
      }
    }
  }

  requestAnimationFrame(animate);
}

window.addEventListener("resize", function () {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  init();
});

init();
animate();
</script>

<?php require "common/footer.php"; ?>