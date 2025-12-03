<!DOCTYPE html>
<html>
<head>
 <title>Guru Nanak College – Best Pharmacy & Nursing College in Dehradun</title>
 <meta name="description" content="Guru Nanak College (GNC), Dehradun's best educational institute, dedicated to
excellence in academics and holistic development.">
 <link rel="canonical" href="https://gnc.edu.in/">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" type="image/webp" href="images/logog.webp">
 <meta property="og:locale" content="en_US" />
 <meta property="og:type" content="website" />
 <meta property="og:title" content="Guru Nanak College (GNC), Dehradun's best educational institute, dedicated to
excellence in academics and holistic development." />
 <meta property="og:description" content="Guru Nanak College (GNC), Dehradun's best educational institute, dedicated to
excellence in academics and holistic development." />
 <meta property="og:url" content="https://gnc.edu.in/" />
 <meta property="og:site_name" content="GNC Dehradun" />
 <meta property="article:publisher" content="https://www.facebook.com/gncmh" />
 <meta property="og:image" content="https://www.gnc.edu.in/upload/about-us-head.webp" />
 <meta property="og:image:width" content="383" />
 <meta property="og:image:height" content="256" />
 <meta property="og:image:type" content="image/webp" />
 <meta name="google-site-verification" content="4oZQLwduQZa07Iq8KyESZJZJnyU7AlZMqXf7u3HqhTA" />
</head>
<body>
 <?php
    require "common/header.php";
    ?>
 <section class="heroBanner">
 <div id="myCarousel" class="carousel slide h-100" data-bs-ride="carousel">
 <div class="carousel-inner">
 <div class="carousel-item active">
 <picture>
 <source type="image/webp" srcset="upload/infra/accredition-banner.webp">
 <img src="upload/infra/accredition-banner.webp"
 class="d-block w-100 img-fluid"
 alt="Placement Banner"
 width="1200" height="600"
 loading="eager"
 decoding="async"
 fetchpriority="high">
 </picture>
 </div>
 <div class="carousel-item">
 <img src="upload/infra/convocation-banner.webp"
 class="d-block w-100 img-fluid"
 alt="Convocation Banner"
 width="1200" height="600"
 loading="eager" decoding="async">
 </div>
 <div class="carousel-item">
 <img src="upload/infra/rangrezza-banner.webp"
 class="d-block w-100 img-fluid"
 alt="Convocation Banner"
 width="1200" height="600"
 loading="eager" decoding="async">
 </div>
 <div class="carousel-item">
 <img src="upload/infra/placement-banner.webp"
 class="d-block w-100 img-fluid"
 alt="Banner 3"
 width="1200" height="600"
 loading="eager" decoding="async">
 </div>
 <div class="carousel-item">
 <img src="upload/infra/Banner-4.webp"
 class="d-block w-100 img-fluid"
 alt="Banner 4"
 width="1200" height="600"
 loading="eager" decoding="async">
 </div>
 </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
 </button>
 </div>
 </section>
<section id="about-gnc" class="about-section">
 <div class="container">
 <div class="about-content" data-aos="fade-up" data-aos-duration="1000">
 <h2 class="about-title">About <span>Guru Nanak College</span></h2>
 <h3 class="about-subtitle">Best College in Uttarakhand, India</h3>
 <p class="about-text">
 Guru Nanak College, situated in the serene and academically vibrant city of Dehradun, has established itself 
 as a prestigious center of higher education since its inception under the aegis of NIMS, Dehradun in 2009. 
 Renowned for its specialization in pharmacy education and paramedical studies, the college has rapidly 
 emerged as a top Pharmaceutical and Paramedical College in the region. Despite its relatively short history, 
 it has gained a reputation as one of the most prestigious Pharmacy Colleges in Dehradun.
 </p>
 <p class="about-text">
 At Guru Nanak College, the ethos is deeply rooted in fostering the growth of the next generation of 
 pharmaceutical professionals, paramedics, and nurses. This commitment extends beyond mere academic 
 instruction; the college prides itself on instilling values of innovation, ethical practice, and academic 
 excellence. It operates with a belief that education is a pivotal force in personal and societal advancement, 
 a philosophy that resonates through its diverse course offerings.
 </p>
 </div>
 <div class="stats" data-aos="zoom-in" data-aos-duration="1000">
 <div class="stat-box">
 <h3 class="counter" data-target="100">0</h3>
 <p>Companies<br>visited for Placements</p>
 </div>
 <div class="stat-box">
 <h3 class="counter" data-target="300">0</h3>
 <p>Professionals successfully<br>working across the globe</p>
 </div>
 <div class="stat-box">
 <h3 class="counter" data-target="1.01">0</h3>
 <p>Highest<br>Package Offered (CR)</p>
 </div>
 <div class="stat-box">
 <h3 class="counter" data-target="14">0</h3>
 <p>Years of<br>Excellence</p>
 </div>
 </div>
 </div>
</section>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
 AOS.init();
</script>
<script>
document.addEventListener("DOMContentLoaded", () => {
 const counters = document.querySelectorAll(".counter");
 let triggered = false;
 const animateCount = (counter) => {
 const target = +counter.getAttribute("data-target");
 const speed = 50; // smaller = faster
 const isDecimal = target % 1 !== 0;
 const updateCount = () => {
 const current = +counter.innerText;
 const increment = target / 100;
 if (current < target) {
 counter.innerText = isDecimal
 ? (current + increment).toFixed(2)
 : Math.ceil(current + increment);
 setTimeout(updateCount, speed);
 } else {
 counter.innerText = isDecimal ? target.toFixed(2) : target;
 }
 };
 updateCount();
 };
 const section = document.querySelector("#about-gnc");
 const observer = new IntersectionObserver(
 (entries) => {
 if (entries[0].isIntersecting && !triggered) {
 counters.forEach((counter) => animateCount(counter));
 triggered = true;
 }
 },
 { threshold: 0.5 }
 );
 observer.observe(section);
});
</script>
<style>
/* ================== ABOUT SECTION STYLING ================== */
.about-section {
 padding: 80px 0;
 font-family: "Poppins", sans-serif;
 color: #222;
 overflow: hidden;
}
.about-section .container {
 width: 90%;
 max-width: 1200px;
 margin: auto;
 text-align: center;
}
.about-title {
 font-size: 2.5rem;
 font-weight: 700;
 color: #1b1b1b;
 margin-bottom: 10px;
}
.about-title span {
 color: #0f9af1;
}
.about-subtitle {
 font-size: 1.3rem;
 color: #555;
 margin-bottom: 25px;
 font-weight: 500;
}
.about-text {
 color: #444;
 line-height: 1.8;
 font-size: 1rem;
 margin-bottom: 15px;
 text-align: justify;
}
/* Stats Section */
.stats {
 display: grid;
 grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
 gap: 25px;
 margin-top: 60px;
}
.stat-box {
 background: white;
 border-radius: 16px;
 box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
 padding: 30px 15px;
 transition: transform 0.4s ease, box-shadow 0.4s ease;
 position: relative;
 overflow: hidden;
}
.stat-box::before {
 content: "";
 position: absolute;
 top: 0;
 left: -100%;
 width: 100%;
 height: 4px;
 background: linear-gradient(90deg, #0066cc, #00bcd4);
 transition: left 0.5s ease;
}
.stat-box:hover::before {
 left: 0;
}
.stat-box:hover {
 transform: translateY(-8px);
 box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
}
.stat-box h3 {
 font-size: 2.2rem;
 color: #fc8435;
 margin-bottom: 10px;
 font-weight: 700;
}
.stat-box p {
 color: #333;
 font-size: 0.95rem;
 line-height: 1.4;
}
@media (max-width: 768px) {
 .about-title {
 font-size: 2rem;
 }
 .about-text {
 font-size: 0.95rem;
 }
 .stat-box h3 {
 font-size: 1.8rem;
 }
}
</style>
 <section id="accreditations">
 <div class="container">
 <div class="row align-items-center">
 <div class="col-md-6 text-center mb-4 mb-md-0">
 <div class="accreditation-circle" id="accreditationCircle">
 <img src="images/logo.webp" class="center-logo" alt="College Logo" />
 <img src="images/HNBGMU.webp" class="circle-logo" />
 <img src="images/msme.webp" class="circle-logo" />
 <img src="images/PCI.webp" class="circle-logo" />
 <img src="images/sdsuu.webp" class="circle-logo" />
 <img src="images/UBTER.webp" class="circle-logo" />
 <img src="images/ugc.webp" class="circle-logo" />
 <img src="images/Uttarakhand_Technical_University_logo.webp" class="circle-logo" />
 <img src="images/Aicte-logo.webp" class="circle-logo" />
 <img src="upload/infra/iap-logo.jpeg" class="circle-logo" />
 <img src="upload/infra/inc-logo.png" class="circle-logo" />
 </div>
 </div>
 <div class="col-md-6">
 <h2 class="mb-3 mt-5">Approvals, Accreditation & Memberships</h2>
 <p>
 The college proudly holds multiple approvals, accreditations, and memberships from renowned national bodies, reflecting its unwavering commitment to academic excellence, innovation, and holistic development. These recognitions validate the quality of our programs and ensure that they meet rigorous educational and professional standards.
 </p>
 <ol>
 <li>All India Council for Technical Education (AICTE)</li>
 <li>University Grants Commission (UGC)</li>
 <li>Ministry of Micro, Small and Medium Enterprises (MSME)</li>
 <li>Hemvati Nandan Bahuguna Garhwal University (HNBGU)</li>
 <li>Pharmacy Council of India (PCI)</li>
 <li>Uttarakhand Board of Technical Education, Roorkee (UBTER)</li>
 <li>Uttarakhand Technical University (UTU)</li>
 <li>The Indian Association of Physiotherapists (IAP)</li>
 <li>The Indian Nursing Council (INC)</li>
 <li>Sri Dev Suman Uttarakhand University (SDSUU)</li>
 </ol>
</div>
 </div>
 </div>
</section>
<style>
 .accreditation-circle {
 position: relative;
 width: 400px; /* bigger wrapper */
 height: 400px;
 margin: auto;
}
/* Central logo always visible */
.center-logo {
 position: absolute;
 width: 150px; /* bigger center logo */
 height: 150px;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%);
 border-radius: 50%;
 object-fit: contain; /* ensures it fits inside */
 z-index: 2;
}
/* Accreditation logos initially on top of center logo */
.circle-logo {
 position: absolute;
 width: 80px; /* bigger surrounding logos */
 height: 80px;
 border-radius: 50%;
 object-fit: contain; /* ensures the logo fits fully */
 transition: all 0.8s ease;
 opacity: 0;
}
/* Expanded state */
.accreditation-circle.expanded .circle-logo {
 opacity: 1;
}
/* Mobile adjustments */
@media(max-width:768px){
 .accreditation-circle { 
 width: 320px; /* increased from 280px */
 height: 320px; 
 }
 .center-logo { 
 width: 120px; /* increased from 100px */
 height: 120px; 
 }
 .circle-logo { 
 width: 70px; /* increased from 60px */
 height: 70px; 
 }
}
 </style>
<script>
document.addEventListener("DOMContentLoaded", function(){
 const wrapper = document.getElementById("accreditationCircle");
 const logos = wrapper.querySelectorAll(".circle-logo");
 const total = logos.length;
 function positionLogos(){
 const centerX = wrapper.offsetWidth / 2;
 const centerY = wrapper.offsetHeight / 2;
 // Calculate radius dynamically based on wrapper and logo size
 const radius = (wrapper.offsetWidth - 80) / 2; // 80 = surrounding logo size
 logos.forEach((logo, i) => {
 const angle = (i / total) * 2 * Math.PI;
 const x = centerX + radius * Math.cos(angle) - logo.offsetWidth / 2;
 const y = centerY + radius * Math.sin(angle) - logo.offsetHeight / 2;
 logo.style.left = x + "px";
 logo.style.top = y + "px";
 });
 }
 function collapseLogos(){
 const centerX = wrapper.offsetWidth / 2;
 const centerY = wrapper.offsetHeight / 2;
 logos.forEach(logo => {
 logo.style.left = centerX - logo.offsetWidth / 2 + "px";
 logo.style.top = centerY - logo.offsetHeight / 2 + "px";
 });
 }
 const observer = new IntersectionObserver(entries => {
 entries.forEach(entry => {
 if(entry.isIntersecting){
 wrapper.classList.add("expanded");
 positionLogos();
 } else {
 wrapper.classList.remove("expanded");
 collapseLogos();
 }
 });
 }, { threshold: 0.5 });
 observer.observe(wrapper);
 collapseLogos();
});
</script>
<section class="events-showcase" aria-label="Events showcase">
 <div class="swiper events-slider">
 <div class="swiper-wrapper">
 <div class="swiper-slide events-slide">
 <img src="upload/infra/awards.webp" alt="Cultural Event" class="events-image">
 <div class="events-overlay">
 <div class="events-overlay-inner">
 <div class="events-logo">
 <img src="images/logo.webp" alt="Event Logo" class="events-logo-img">
 </div>
 <div class="events-text">
 <h2>Save the Himalayas Awards</h2>
 <p>Honoring the heroes protecting the crown<br> of India — our majestic Himalayas.</p>
 </div>
 </div>
 </div>
 </div>
 <div class="swiper-slide events-slide">
 <img src="upload/infra/dandiya-nights.webp" alt="Sports Meet" class="events-image">
 <div class="events-overlay">
 <div class="events-overlay-inner">
 <div class="events-logo">
 <img src="images/logo.webp" alt="Event Logo" class="events-logo-img">
 </div>
 <div class="events-text">
 <h2>Garba & Dandiya Night</h2>
 <p>Twirl into the rhythm of festivity!</p>
 </div>
 </div>
 </div>
 </div>
 <div class="swiper-slide events-slide">
 <img src="upload/infra/blood-donation.webp" alt="Tech Fest" class="events-image">
 <div class="events-overlay">
 <div class="events-overlay-inner">
 <div class="events-logo">
 <img src="images/logo.webp" alt="Event Logo" class="events-logo-img">
 </div>
 <div class="events-text">
 <h2>Blood Donation Camp</h2>
 <p>Be a hero in someone’s story.</p>
 </div>
 </div>
 </div>
 </div>
 <div class="swiper-slide events-slide">
 <img src="upload/infra/plantation.webp" alt="Music Night" class="events-image">
 <div class="events-overlay">
 <div class="events-overlay-inner">
 <div class="events-logo">
 <img src="images/logo.webp" alt="Event Logo" class="events-logo-img">
 </div>
 <div class="events-text">
 <h2>Go Green Initiative</h2>
 <p>One tree today, a better tomorrow.</p>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</section> 
 <style>
/* EVENTS SHOWCASE STYLING */
.events-showcase {
 max-width: 1200px;
 width: 100%;
 margin: 24px auto;
 border-radius: 12px;
 overflow: hidden;
 position: relative;
 box-shadow: 0 8px 24px rgba(0,0,0,0.12);
 background: #000;
}
/* each slide + gradient overlay pseudo element */
.events-slide {
 position: relative;
 overflow: hidden;
 height: 550px;
}
/* gradient overlay */
.events-slide::before {
 content: "";
 position: absolute;
 inset: 0;
 z-index: 1;
 background: linear-gradient(
 to bottom,
 rgba(0,0,0,0.85) 0%,
 rgba(0,0,0,0.45) 12%,
 rgba(0,0,0,0) 30%,
 rgba(0,0,0,0) 70%,
 rgba(0,0,0,0.45) 88%,
 rgba(0,0,0,0.85) 100%
 );
 pointer-events: none;
}
/* image */
.events-image {
 display: block;
 width: 100%;
 height: 100%;
 object-fit: cover;
 transform: scale(1);
 transition: transform 6s ease;
}
/* active slide zoom */
.events-slide.swiper-slide-active .events-image {
 transform: scale(1.06);
}
/* overlay content (bottom-left) */
.events-overlay {
 position: absolute;
 bottom: 0;
 left: 0;
 z-index: 5;
 width: 100%;
 pointer-events: none;
}
.events-overlay-inner {
 display: flex;
 align-items: center;
 gap: 12px;
 padding: 16px;
 box-sizing: border-box;
}
.events-logo-img {
 display: block;
 width: 152px;
 height: auto;
 object-fit: contain;
 border-radius: 6px;
 padding: 6px;
 background: rgba(255,255,255,0.02);
}
.events-text h2 {
 color: #fff;
 font-size: 1.6rem;
 margin: 0 0 6px 0;
 font-weight: 700;
 line-height: 1.05;
}
.events-text p {
 color: #fff;
 margin: 0;
 font-size: 0.95rem;
 display: inline-block;
 border: 1px solid rgba(255,255,255,0.35);
 padding: 4px 8px;
 border-radius: 4px;
}
/* Responsive adjustments */
@media (max-width: 992px) {
 .events-slide { height: 380px; }
 .events-logo-img { width: 56px; }
 .events-text h2 { font-size: 1.25rem; }
 .events-text p { font-size: 0.9rem; padding: 3px 6px; }
}
/* MOBILE FIX */
@media (max-width: 768px) {
 /* Scope everything under .events-showcase */
 .events-showcase {
 width: calc(100% - 20px);
 margin: 0 auto;
 border-radius: 8px;
 overflow: hidden;
 }
 .events-showcase .events-slide {
 height: 300px;
 }
 .events-showcase .events-image {
 height: 300px;
 width: 100%;
 object-fit: cover;
 display: block;
 }
 .events-showcase .events-logo-img {
 width: 88px;
 }
 .events-showcase .events-overlay-inner {
 padding: 12px;
 gap: 8px;
 }
 .events-showcase .events-text h2 {
 font-size: 1.05rem;
 }
 .events-showcase .events-text p {
 font-size: 0.85rem;
 }
}
</style> 
<script>
document.addEventListener('DOMContentLoaded', function () {
 if (typeof Swiper === 'undefined') {
 console.error('Swiper not loaded. Make sure swiper-bundle.min.js is included.');
 return;
 }
 const eventsSwiper = new Swiper('.events-slider', {
 loop: true,
 autoplay: {
 delay: 4200,
 disableOnInteraction: false,
 },
 effect: 'fade',
 fadeEffect: { crossFade: true },
 speed: 500,
 slidesPerView: 1,
 // accessibility
 a11y: true,
 keyboard: { enabled: true },
 });
});
</script>
<section class="side-accordion">
<h2 class="my-stats-title text-center">
 <span class="my-highlight">Immerse</span> <strong>yourself in a <br> truly global learning community.</strong>
 </h2>
 <div class="accordion-container">
 <div class="accordion-menu accordion-menu-left"></div>
 <div class="accordion-content-area">
 <div class="accordion-panel active from-left" id="panel5">
 <img src="upload/infra/gobal.webp" alt="Students in a multicultural setting">
 <div class="accordion-overlay">
 <h2>Connecting Minds, Creating Futures</h2>
 <p>Empowering students through global partnerships, cultural exchange, and collaborative learning beyond boundaries.</p>
 </div>
 </div>
 <div class="accordion-panel from-right" id="panel4">
 <img src="upload/infra/sports.webp" alt="Business professionals collaborating">
 <div class="accordion-overlay">
 <h2>Fueling Champions, On and Off the Field</h2>
 <p>Encouraging teamwork, discipline, and excellence through vibrant sports and fitness activities.</p>
 </div>
 </div>
 <div class="accordion-panel from-left" id="panel3">
 <img src="upload/infra/placement.webp" alt="Two students looking at notes">
 <div class="accordion-overlay">
 <h2>Your Pathway to Professional Success</h2>
 <p>Empowering students with skills, confidence, and connections to excel in the professional world.</p>
 </div>
 </div>
 <div class="accordion-panel from-right" id="panel2">
 <img src="Upload/infra/innovative.webp" alt="Student using a computer in a modern lab">
 <div class="accordion-overlay">
 <h2>Think. Create. Innovate.</h2>
 <p>Fostering a culture of creativity and critical thinking through modern, experiential learning.</p>
 </div>
 </div>
 <div class="accordion-panel from-left" id="panel1">
 <img src="upload/infra/convocation.webp" alt="Group of diverse students">
 <div class="accordion-overlay">
 <h2>Moments Turned Milestones</h2>
 <p>Celebrating achievements, memories, and the spirit that defines every Guru Nanak College journey.</p>
 </div>
 </div>
 </div>
 <div class="accordion-menu accordion-menu-right">
 <div class="accordion-tab active" data-target="panel5">Global Collaborations</div>
 <div class="accordion-tab" data-target="panel4">Centre for Sports Excellence</div>
 <div class="accordion-tab" data-target="panel3">Career Excellence Centre</div>
 <div class="accordion-tab" data-target="panel2">Innovative Learning</div>
 <div class="accordion-tab" data-target="panel1">Annual Convocation Ceremony</div>
 </div>
 </div>
</section>
<style>
.side-accordion {
 width: 100%;
 max-width: 1300px;
 margin: 50px auto;
 font-family: "Poppins", sans-serif;
}
/* Base layout: Flex container for Menu Left, Content Area, and Menu Right */
.accordion-container {
 display: flex;
 flex-direction: row; 
 border-radius: 12px;
 overflow: hidden;
 box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}
/* Image area - remains flexible in the center */
.accordion-content-area {
 flex: 1;
 position: relative;
 overflow: hidden;
 height: 400px;
}
/* Menu containers */
.accordion-menu {
 display: flex;
 flex-direction: row; /* Tabs are horizontal rows when vertical */
 background: #f9fafb;
 gap: 8px;
 padding: 8px;
 transition: all 0.5s ease;
}
/* Left Menu Styling */
.accordion-menu-left {
 /* No default border needed */
 border-right: 1px solid #ddd; /* Separator for left menu */
 /* We use order: -1 to ensure it always stays on the left */
 order: -1; 
 /* Shrink to minimum size when empty */
 min-width: 0; 
 transition: min-width 0.5s ease;
}
/* Right Menu Styling */
.accordion-menu-right {
 border-left: 1px solid #ddd; /* Separator for right menu */
}
/* Ensure empty menu containers don't take up space */
.accordion-menu-left:empty, .accordion-menu-right:empty {
 padding: 0;
 border: none;
 /* Important for left menu to collapse entirely */
 min-width: 0; 
}
/* Tab Styling remains mostly the same */
.accordion-tab {
 writing-mode: vertical-rl;
 transform: rotate(180deg);
 text-align: center;
 font-weight: 600;
 color: #333;
 background: #fff;
 padding: 20px 15px;
 cursor: pointer;
 transition: all 0.3s ease;
 border-radius: 10px;
 min-width: 70px;
 box-shadow: 0 3px 8px rgba(0,0,0,0.05);
}
.accordion-tab:hover {
 background: #f0f0f0;
}
.accordion-tab.active {
 background: #0f9af1;
 color: #fff;
 box-shadow: inset 0 0 5px rgba(0,0,0,0.15);
}
/* ... (The rest of your existing styles for panels and keyframes remain the same) ... */
.accordion-content-area {
 flex: 1;
 position: relative;
 overflow: hidden;
 height: 400px;
}
/* Force + to appear at the visual top of rotated vertical tabs.
 Use bottom positioning + counter-rotation so it reads upright. */
 .accordion-tab {
 position: relative !important;
 overflow: visible !important;
 padding-top: 28px !important; /* reserve space so icon doesn't overlap text */
 box-sizing: border-box !important;
}
/* Position from the bottom (visual top for rotated tabs) and rotate the symbol upright */
.accordion-tab::after {
 content: "+" !important;
 position: absolute !important;
 /* place at the CSS bottom edge (this will appear visually at the top when the tab is rotated) */
 bottom: 8px !important;
 left: 50% !important;
 transform: translateX(-50%) rotate(180deg) !important; /* counter-rotate so symbol looks upright */
 /* ensure it's horizontal and not affected by parent's writing-mode */
 writing-mode: horizontal-tb !important;
 /* visual styling */
 width: 28px !important;
 height: 28px !important;
 display: inline-flex !important;
 align-items: center !important;
 justify-content: center !important;
 font-size: 28px !important;
 font-weight: 700 !important;
 color:rgb(143, 143, 143) !important;
 pointer-events: none !important;
 z-index: 20 !important;
 transition: transform .18s ease, color .18s ease, background .18s ease !important;
}
/* hover: pop and darken (keep rotated for upright display) */
.accordion-tab:hover::after {
 transform: translateX(-50%) rotate(180deg) scale(1.18) !important;
 color: #0a2540 !important;
}
/* active: show × — rotate back to 0 so × sits normally (no awkward inverted appearance) */
.accordion-tab.active::after {
 content: "×" !important;
 color: #fff !important;
 background: transparent !important;
 transform: translateX(-50%) rotate(0deg) !important;
 box-shadow: none !important;
}
.accordion-panel {
 position: absolute;
 width: 100%;
 height: 100%;
 top: 0;
 left: 0;
 opacity: 0;
 pointer-events: none;
}
.accordion-panel img {
 width: 100%;
 height: 100%;
 object-fit: cover;
}
.accordion-overlay {
 position: absolute;
 bottom: 1px;
 left: 1px;
 color: #fff;
 background: rgba(0, 0, 0, 0.45);
 padding: 20px 25px;
 border-radius: 10px;
 max-width: 65%;
}
.accordion-overlay h2 {
 font-size: 24px;
 margin-bottom: 8px;
}
.accordion-overlay p {
 font-size: 15px;
 line-height: 1.4;
}
/* Animations */
.accordion-panel.active {
 opacity: 1;
 pointer-events: auto;
 animation: fadeSlideIn 0.8s ease forwards;
 z-index: 2;
}
.accordion-panel.exiting {
 animation: slideOutLeft 0.6s ease forwards;
 z-index: 1;
}
/* Entry directions */
.accordion-panel.from-left.active {
 animation: slideInFromLeft 0.8s ease forwards;
}
.accordion-panel.from-right.active {
 animation: slideInFromRight 0.8s ease forwards;
}
/* Keyframes */
@keyframes slideInFromLeft {
 from {opacity: 0; transform: translateX(-60px);}
 to {opacity: 1; transform: translateX(0);}
}
@keyframes slideInFromRight {
 from {opacity: 0; transform: translateX(60px);}
 to {opacity: 1; transform: translateX(0);}
}
@keyframes slideOutLeft {
 from {opacity: 1; transform: translateX(0);}
 to {opacity: 0; transform: translateX(-100%);}
}
/* === FINAL FIXED MOBILE-ONLY ACCORDION STYLES === */
@media (max-width: 768px) {
 /* Isolate mobile behavior */
 .accordion-container {
 display: flex !important;
 flex-direction: column !important;
 align-items: center;
 width: 100%;
 overflow: hidden;
 }
 /* Hide desktop menus safely */
 .accordion-menu-left,
 .accordion-menu-right {
 display: none !important;
 }
 /* Mobile panels */
 .accordion-panel {
 display: none !important;
 position: relative;
 width: 100%;
 height: 320px; /* fixed height for image */
 overflow: hidden;
 border-radius: 10px;
 }
 .accordion-panel.active {
 display: block !important;
 }
 .accordion-panel img {
 width: 100%;
 height: 100%;
 object-fit: cover;
 display: block;
 }
 /* Full-width overlay text on image */
 .accordion-overlay {
 position: absolute;
 bottom: 0;
 left: 0;
 width: 100%; /* match image width */
 background: linear-gradient(0deg, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.3) 100%);
 color: #fff;
 padding: 20px;
 box-sizing: border-box;
 }
 .accordion-overlay h2 {
 font-size: 18px;
 margin-bottom: 8px;
 font-weight: 600;
 }
 .accordion-overlay p {
 font-size: 14px;
 line-height: 1.5;
 margin: 0;
 }
 /* Mobile navigation buttons below image */
 .accordion-menu-mobile {
 display: flex !important;
 justify-content: center;
 flex-wrap: wrap;
 gap: 8px;
 margin-top: 12px;
 width: 100%;
 }
 .accordion-menu-mobile button {
 background: #f0f0f0;
 border: none;
 padding: 8px 14px;
 border-radius: 6px;
 font-size: 14px;
 cursor: pointer;
 transition: all 0.3s ease;
 }
 .accordion-menu-mobile button.active {
 background: #0f9af1;
 color: #fff;
 }
}
</style>
<script>
const tabs = document.querySelectorAll('.accordion-tab');
const panels = document.querySelectorAll('.accordion-panel');
const menuLeft = document.querySelector('.accordion-menu-left');
const menuRight = document.querySelector('.accordion-menu-right');
let activePanel = document.querySelector('.accordion-panel.active');
const allTabs = Array.from(tabs); // Convert NodeList to Array for easier iteration and finding index
// Function to move tabs between the left and right containers
function updateMenuLayout(activeIndex) {
 allTabs.forEach((tab, index) => {
 if (index < activeIndex) {
 // Tabs BEFORE the active tab move to the left menu
 if (tab.parentNode !== menuLeft) {
 menuLeft.appendChild(tab);
 }
 } else {
 // Tabs AT or AFTER the active tab stay in the right menu
 if (tab.parentNode !== menuRight) {
 menuRight.appendChild(tab);
 }
 }
 });
}
// Initialize the layout for the default active tab (index 0)
updateMenuLayout(0);
tabs.forEach((tab, index) => { 
 tab.addEventListener('click', () => {
 const targetId = tab.getAttribute('data-target');
 const newPanel = document.getElementById(targetId);
 if (newPanel === activePanel) return;
 // --- NEW LOGIC FOR SPLIT TAB MOVEMENT ---
 // Dynamically move tabs based on the clicked index
 updateMenuLayout(index);
 // ------------------------------------
 // Animate old panel out
 activePanel.classList.remove('active');
 activePanel.classList.add('exiting');
 // After animation, hide it completely
 setTimeout(() => {
 activePanel.classList.remove('exiting');
 activePanel.style.opacity = '0';
 }, 600);
 // Activate new panel
 newPanel.classList.add('active');
 activePanel = newPanel;
 // Update tab states
 tabs.forEach(t => t.classList.remove('active'));
 tab.classList.add('active');
 });
});
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
 // Run only on mobile
 if (window.innerWidth <= 768) {
 const container = document.querySelector('.accordion-container');
 const panels = document.querySelectorAll('.accordion-panel');
 // Create mobile button menu
 const mobileMenu = document.createElement('div');
 mobileMenu.className = 'accordion-menu-mobile';
 panels.forEach((panel, index) => {
 const btn = document.createElement('button');
 const title = panel.querySelector('.accordion-overlay h2')?.textContent || `Panel ${index + 1}`;
 btn.textContent = title;
 if (panel.classList.contains('active')) btn.classList.add('active');
 btn.addEventListener('click', () => {
 panels.forEach(p => p.classList.remove('active'));
 document.querySelectorAll('.accordion-menu-mobile button').forEach(b => b.classList.remove('active'));
 panel.classList.add('active');
 btn.classList.add('active');
 });
 mobileMenu.appendChild(btn);
 });
 // Append below image section (not affecting desktop layout)
 container.appendChild(mobileMenu);
 }
});
</script>
<section class="campus pb-5">
<div class="acc-container">
 <div class="main-heading text-center">
 <h2 class="text-custom">Modern Campus</h2>
 <h3 class="mb-3">Facilities & Convenient Transport</h3>
 </div>
 <ul class="acc-list">
 <li class="acc-item" tabindex="1">
 <div class="acc-box">
 <a class="acc-link" href="#">
 <h2 class="acc-heading">World-class Computer Centre</h2>
 <p class="acc-text">Guru Nanak College provides modern computer education with hands-on training and industry-ready skills for successful IT careers.</p>
 </a>
 </div>
 </li>
 <li class="acc-item" tabindex="2">
 <div class="acc-box">
 <a class="acc-link" href="#">
 <h2 class="acc-heading">Grand Libraries</h2>
 <p class="acc-text">Guru Nanak College offers a well-equipped library with physical and digital<br> resources supporting academic excellence.</p>
 </a>
 </div>
 </li>
 <li class="acc-item" tabindex="3">
 <div class="acc-box">
 <a class="acc-link" href="#">
 <h2 class="acc-heading">Medical Facilities</h2>
 <p class="acc-text">Guru Nanak College provides prompt and reliable healthcare for students <br>through partnerships with top local hospitals.</p>
 </a>
 </div>
 </li>
 <li class="acc-item" tabindex="4">
 <div class="acc-box">
 <a class="acc-link" href="#">
 <h2 class="acc-heading">Auditorium</h2>
 <p class="acc-text">Guru Nanak College has a modern 500-seat auditorium with advanced audio-visual<br> facilities, ideal for academic, cultural, and professional events.</p>
 </a>
 </div>
 </li>
 <li class="acc-item" tabindex="5">
 <div class="acc-box">
 <a class="acc-link" href="#">
 <h2 class="acc-heading">Home-like Hostels</h2>
 <p class="acc-text">Guru Nanak College offers safe and comfortable on-campus hostels for boys <br>and girls, with single to four-bed occupancy options.</p>
 </a>
 </div>
 </li>
 <li class="acc-item" tabindex="6">
 <div class="acc-box">
 <a class="acc-link" href="#">
 <h2 class="acc-heading">Transport</h2>
 <p class="acc-text">Guru Nanak College provides safe and comfortable transport for day scholars<br> with a fleet of well-maintained buses covering multiple city routes.</p>
 </a>
 </div>
 </li>
 </ul>
 </div>
 <style>
 /* Backgrounds */
.acc-item:nth-child(1) {
 background-image: url('upload/computer-lab.webp');
}
.acc-item:nth-child(2) {
 background-image: url('upload/lib.webp');
}
.acc-item:nth-child(3) {
 background-image: url('upload/infra/3l.webp');
}
.acc-item:nth-child(4) {
 background-image: url('upload/infra/4l.webp');
}
.acc-item:nth-child(5) {
 background-image: url('upload/infra/5l.webp');
}
.acc-item:nth-child(6) {
 background-image: url('upload/infra/6l.webp');
}
 </style>
</section>
<section class="my-stats-section">
 <div class="my-stats-container">
 <h2 class="my-stats-title">
 An <span class="my-highlight">Illustrious</span> <strong>Legacy</strong> we <br>
 continue to <strong>Shape</strong>
 </h2>
 <div class="my-stats-grid">
 <div class="my-stat-item left-slide">
 <h3 class="my-stat-number" data-target="40">0</h3>
 <h4 class="my-stat-label">PROGRAMS</h4>
 <span class="my-stat-line"></span>
 <p class="my-stat-desc">Industry-Oriented Academic Programs</p>
 </div>
 <div class="my-stat-item left-slide">
 <h3 class="my-stat-number" data-target="100">0</h3>
 <h4 class="my-stat-label">STALWARTS</h4>
 <span class="my-stat-line"></span>
 <p class="my-stat-desc">Industry Stalwarts for Top-Tier Mentorship</p>
 </div>
 <div class="my-stat-item top-slide">
 <h3 class="my-stat-number" data-target="55">0</h3>
 <h4 class="my-stat-label">FACULTY</h4>
 <span class="my-stat-line"></span>
 <p class="my-stat-desc">Doctoral Faculty</p>
 </div>
 <div class="my-stat-item right-slide">
 <h3 class="my-stat-number" data-target="10">0</h3>
 <h4 class="my-stat-label">FACULTY</h4>
 <span class="my-stat-line"></span>
 <p class="my-stat-desc">International Faculty</p>
 </div>
 <div class="my-stat-item right-slide">
 <h3 class="my-stat-number" data-target="900">0</h3>
 <h4 class="my-stat-label">ALUMNI</h4>
 <span class="my-stat-line"></span>
 <p class="my-stat-desc">Accomplished Alumni Across the Globe</p>
 </div>
 </div>
 </div>
</section>
<style>
.my-stats-section {
 max-width: 1350px;
 margin: 10px auto;
 text-align: center;
 padding: 10px 20px;
 font-family: 'Poppins', sans-serif;
 overflow: hidden;
}
.my-stats-title {
 font-size: 42px;
 font-weight: 500;
 margin-bottom: 50px;
 line-height: 1.4;
}
.my-stats-title strong {
 font-weight: 900;
}
.my-highlight {
 font-weight: 300;
 font-style: italic;
}
.my-stats-grid {
 display: grid;
 grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
 gap: 30px;
 justify-items: center;
}
.my-stat-item {
 text-align: center;
 opacity: 0;
 transform: translateY(50px);
 transition: all 0.8s ease-out;
}
.my-stat-number {
 font-size: 38px;
 font-weight: 700;
 color:rgb(252, 132, 53);
}
.my-stat-number::after {
 content: "+";
}
.my-stat-label {
 font-size: 14px;
 font-weight: 700;
 margin: 8px 0;
 color: #000;
}
.my-stat-line {
 display: block;
 width: 30px;
 height: 2px;
 background: #000;
 margin: 8px auto;
}
.my-stat-desc {
 font-size: 14px;
 color: #333;
 max-width: 200px;
 margin: 0 auto;
}
/* Slide Animations */
.left-slide.animate { transform: translateX(0); opacity: 1; }
.right-slide.animate { transform: translateX(0); opacity: 1; }
.top-slide.animate { transform: translateY(0); opacity: 1; }
.left-slide { transform: translateX(-100px); }
.right-slide { transform: translateX(100px); }
.top-slide { transform: translateY(-100px); }
/* Responsive */
@media (max-width: 768px) {
 .my-stats-title { font-size: 24px; }
 .my-stat-number { font-size: 28px; }
}
</style>
<script>
function animateCountUp(el, target) {
 let start = 0;
 const duration = 2000;
 const stepTime = Math.max(Math.floor(duration / target), 1);
 const timer = setInterval(() => {
 start += 1;
 el.textContent = start.toLocaleString();
 if (start >= target) clearInterval(timer);
 }, stepTime);
}
document.addEventListener("DOMContentLoaded", () => {
 const counters = document.querySelectorAll(".my-stat-number");
 const statsItems = document.querySelectorAll(".my-stat-item");
 const observer = new IntersectionObserver((entries, observer) => {
 entries.forEach(entry => {
 if (entry.isIntersecting) {
 const el = entry.target;
 el.classList.add('animate');
 // Animate number
 const numberEl = el.querySelector(".my-stat-number");
 const target = +numberEl.getAttribute("data-target");
 animateCountUp(numberEl, target);
 observer.unobserve(el);
 }
 });
 }, { threshold: 0.5 });
 statsItems.forEach(item => observer.observe(item));
});
</script>
 <section class="gncPlacement-section container mb-5">
 <section class="placement-section">
 <div class="placement-container">
 <div class="placement-slider slide-left">
 <div class="placement-slide">
 <div class="placement-group">
 <div class="placement-card">
 <img src="upload/infra/placement-1.webp" alt="Harsh Vardhan">
 </div>
 <div class="placement-card">
 <img src="upload/infra/placement-2.webp" alt="Shanya Trehan">
 </div>
 </div>
 <div class="placement-group">
 <div class="placement-card">
 <img src="upload/infra/placement-3.webp" alt="Another Student">
 </div>
 <div class="placement-card">
 <img src="upload/infra/placement-4.webp" alt="Shanya Trehan">
 </div>
 </div>
 <div class="placement-group">
 <div class="placement-card">
 <img src="upload/infra/placement-5.webp" alt="Shanya Trehan">
 </div>
 <div class="placement-card">
 <img src="upload/infra/placement-6.webp" alt="Shanya Trehan">
 </div>
 </div>
 </div>
 <div class="slider-nav">
 <span class="prev">‹</span>
 <span class="next">›</span>
 </div>
 </div>
 <div class="placement-content slide-right">
 <p class="placement-overview">Placements Overview</p>
 <h2 class="placement-title">The World's <strong>Leading Companies Hire Our Talent</strong></h2>
 <div class="placement-buttons">
 <a href="https://application.gnc.edu.in/" class="btn-apply">APPLY NOW →</a>
 <a href="placement-overview.php" class="btn-view">VIEW PLACEMENTS →</a>
 </div>
 <div class="placement-stats">
 <div class="placement-stat">
 <h3 style="color: #fc8435;">900+</h3>
 <p>Placement Offers</p>
 </div>
 <div class="placement-stat">
 <h3>100+</h3>
 <p>Companies Visited</p>
 </div>
 <div class="placement-stat highlight">
 <h3>54.75 LPA</h3>
 <p>Highest National Package</p>
 </div>
 <div class="placement-stat">
 <h3>12 LPA</h3>
 <p>Average Placement Package</p>
 </div>
 </div>
 <div class="placement-mini-stats">
 <div><strong>12 LPA</strong><p>Offered by <span style="color: #fc8435;">20+</span> Companies</p></div>
 <div><strong>8 LPA</strong><p>Offered by <span style="color: #fc8435;">30+</span> Companies</p></div>
 <div><strong>6 LPA</strong><p>Offered by <span style="color: #fc8435;">70+</span> Companies</p></div>
 </div>
 </div>
 </div>
</section>
<style>
.placement-section {
 display: flex;
 justify-content: center;
 padding: 60px 20px;
 font-family: 'Poppins', sans-serif;
}
.placement-container {
 display: flex;
 max-width: 1350px;
 width: 100%;
 gap: 40px;
 flex-wrap: wrap;
 align-items: flex-start;
}
/* Scroll animations */
.slide-left, .slide-right {
 opacity: 0;
 transform: translateX(100px);
 transition: all 1s ease-out;
}
.slide-left { transform: translateX(-100px); }
.show { opacity: 1; transform: translateX(0); }
/* Left Slider */
.placement-slider {
 flex: 1 1 500px;
 position: relative;
 overflow: hidden;
}
.placement-slide {
 display: flex;
 transition: transform 0.6s ease-in-out;
 width: 100%;
}
.placement-group {
 min-width: 100%;
 display: flex;
 gap: 20px;
 justify-content: center;
}
.placement-card {
 background: #fff;
 border-radius: 12px;
 box-shadow: 0 10px 25px rgba(0,0,0,0.1);
 text-align: center;
 flex: 0 0 45%;
 overflow: hidden;
}
.placement-card img { 
 width: 100%; 
 border-radius: 12px; 
 display: block; 
 margin: 0; 
}
.package { font-weight: 700; color: #e30613; margin-top: 5px; }
.slider-nav {
 text-align: center;
 margin-top: 20px;
}
.slider-nav span {
 display: inline-block;
 margin: 0 5px;
 font-size: 24px;
 cursor: pointer;
 user-select: none;
}
/* Right Content */
.placement-content { flex: 1 1 400px; }
.placement-overview { font-size: 16px; font-weight: 500; }
.placement-title { font-size: 42px; margin: 10px 0 20px; line-height: 1.3; }
/* Buttons */
.placement-buttons {
 display: flex;
 flex-wrap: wrap;
 gap: 10px;
}
.btn-apply, .btn-view {
 padding: 14px 20px;
 border-radius: 6px;
 text-decoration: none;
 font-weight: 600;
 display: inline-block;
 text-align: center;
}
.btn-apply { background-color: #0f9af1 !important; color: #fff; }
.btn-view { background-color: #fff; color: #000; border: 1px solid #000; }
/* Stats Boxes */
.placement-stats {
 display: flex;
 gap: 15px;
 margin: 30px 0 15px;
 flex-wrap: wrap;
}
.placement-stat {
 flex: 1 1 200px;
 padding: 20px;
 background: rgb(231, 230, 230);
 text-align: center;
 border-radius: 8px;
 box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}
.placement-stat.highlight { background: #000; color: #fff; }
.placement-stat h3 { margin: 0; font-size: 22px; color: inherit; }
.placement-stat p { margin: 5px 0 0; font-size: 14px; }
/* Mini Stats */
.placement-mini-stats {
 display: flex;
 gap: 15px;
 flex-wrap: wrap;
 margin-top: 20px;
}
.placement-mini-stats div {
 flex: 1 1 150px;
 padding: 10px;
 background: #f4f4f4;
 border-radius: 6px;
 text-align: center;
}
.placement-mini-stats strong { font-size: 16px; color: #000; display: block; }
.placement-mini-stats p { font-size: 12px; color: #555; margin: 0; }
/* ✅ MOBILE FIXES */
@media (max-width: 992px) {
 .placement-container { 
 flex-direction: column; 
 align-items: center;
 }
 /* Make slider full width and hide overflow */
 .placement-slider {
 width: 100%;
 overflow: hidden; /* hide other slides */
 }
 .placement-slider {
 overflow: hidden;
 }
 .placement-slide {
 display: flex;
 transition: transform 0.6s ease-in-out;
 width: 100%;
 }
 .placement-group {
 flex: 0 0 100%;
 flex-direction: column;
 gap: 15px;
 justify-content: center;
 }
 .placement-card {
 width: 100%;
 flex: none;
 }
 .placement-card img {
 width: 100%;
 height: 485px; /* smaller height for mobile */
 object-fit: cover;
 }
 .placement-content {
 width: 100%;
 text-align: center;
 }
 .placement-buttons {
 justify-content: center;
 gap: 12px;
 }
 .btn-apply, .btn-view {
 width: 80%;
 padding: 14px 0;
 }
 .placement-stats, .placement-mini-stats {
 justify-content: center;
 }
 .placement-stats .placement-stat,
 .placement-mini-stats div {
 flex: 1 1 45%;
 max-width: 45%;
 }
 .slider-nav {
 margin-top: 10px;
 }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", () => {
 // Slider
 const slideContainer = document.querySelector(".placement-slide");
 const slides = document.querySelectorAll(".placement-group");
 const prev = document.querySelector(".prev");
 const next = document.querySelector(".next");
 const total = slides.length;
 let index = 0;
 let interval;
 function showSlide() {
 slideContainer.style.transform = `translateX(-${index * 100}%)`;
 }
 function nextSlide() {
 index = (index + 1) % total;
 showSlide();
 }
 function prevSlide() {
 index = (index - 1 + total) % total;
 showSlide();
 }
 next.addEventListener("click", () => { nextSlide(); resetInterval(); });
 prev.addEventListener("click", () => { prevSlide(); resetInterval(); });
 function startAuto() { interval = setInterval(nextSlide, 6000); }
 function resetInterval() { clearInterval(interval); startAuto(); }
 startAuto();
 // Scroll Animations
 const observer = new IntersectionObserver((entries) => {
 entries.forEach(entry => {
 if (entry.isIntersecting) {
 entry.target.classList.add("show");
 }
 });
 }, { threshold: 0.3 });
 document.querySelectorAll(".slide-left, .slide-right").forEach(el => {
 observer.observe(el);
 });
});
</script>
 <div class="mt-3">
 <h2 class="text-custom">Placement Verticals</h2>
 <h3>Bridging The Gap By Aligning With The Industry</h3>
 <div class="row text-center">
 <div class="col-md-2 mt-3">
 <img src="upload/infra/practice.webp" alt="Training & Placements" loading="lazy" decoding="async" width="50"><br>
 Training & Placements
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/integration.webp" alt="Work Integrated Programs" loading="lazy" decoding="async" width="50"><br>
 Work Integrated Programs
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/industrial.webp" alt="Industry Collaborations" loading="lazy" decoding="async" width="50"><br>
 Industry Collaborations
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/outstanding.webp" alt="Centers of Excellence" loading="lazy" decoding="async" width="50"><br>
 Centers of Excellence
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/users.webp" alt="Executive Development Programs" loading="lazy" decoding="async" width="50"><br>
 Executive Development Programs
 </div>
 </div>
 <div class="row text-center mt-3">
 <div class="col-md-2 mt-3">
 <img src="upload/infra/community_1.webp" alt="Industry Visits" loading="lazy" decoding="async" width="50"><br>
 Industry Visits
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/building_1.webp" alt="Industry Advisory Board" loading="lazy" decoding="async" width="50"><br>
 Industry Advisory Board
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/creative-team.webp" alt="Career Competencies" loading="lazy" decoding="async" width="50"><br>
 Career Competencies
 </div>
 <div class="col-md-2 mt-3">
 <img src="upload/infra/document.webp" alt="Skill Development" loading="lazy" decoding="async" width="50"><br>
 Skill Development
 </div>
 </div>
 </div>
 </div>
 <h2 class="text-custom mt-5">Industry Collaboration</h2>
 <h3>Driving innovation through strategic industry collaboration and partnerships.</h3>
 <div class="topCompanies-block">
 <?php
            // Loop through 39 images
            for ($i = 1; $i <= 39; $i++) {
                // Construct the image source dynamically
                $imageSrc = "./upload/company/c ($i).webp";

                // Echo the image HTML structure
                echo '<div class="topCompaniesLogo-slider">
                <div class="logo-img-company" aria-hidden="true" tabindex="-1">
                <img class="lazy-img" src="' . $imageSrc . '" alt="gnc top Recruiter patner">
                </div>
                </div>';
            }
            ?>
 </div>
 <div class="text-center placement-button mt-5 btnsGroup">
 <a href="https://application.gnc.edu.in/" class="btn blue-gradient" target="_blank">Apply Today</a>
 <a href="https://www.gnc.edu.in/placement-overview" class="btn blue-gradient" target="_blank">View Placements</a>
 </div>
 </section>
 <section class="common-spacing py-lg-5 border-css container d-block d-md-none" id="course_section" style="background: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
 <div class="container-fluid custom-fluid phone-program">
 <div class="row align-items-center">
 <h1 class="fnt-w-300" style="color: #333; font-size: 36px; font-weight: bold; text-align: center; margin-bottom: 20px;">
 <span>Find a Program</span>
 </h1>
 </div>
 <div class="tab-content" id="pills-tabContent">
 <div class="tab-pane fade show active" id="pills-gnc" role="tabpanel" aria-labelledby="pills-gnc-tab">
 <div class="accordion accordion-flush" id="accordionFlushExample">
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Paramedical Programs
 </button>
 </h2>
 <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Best-bmlt-college-in-dehradun" class="program-link">Bachelor of Medical Laboratory Technology</a></li>
 <li><a href="https://gnc.edu.in/Best-BMRIT-bachelor-in-medical-radio-imagingtechnology-college-in-dehradun" class="program-link">Bachelor of Medical Radio Diagnosis And Imaging Technology</a></li>
 <li><a href="https://gnc.edu.in/Best-operation-theatre-technology-colleges-in-dehradun" class="program-link">B.Sc. Operation theatre</a></li>
 <li><a href="https://gnc.edu.in/Best-BPT-college-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Physiotherapy</a></li>
 <li><a href="https://www.gnc.edu.in/Best-bsc-optometry-College-in-dehradun" class="program-link">B.Sc. Optometry</a></li>
 <li><a href="https://gnc.edu.in/masters-in-lab-technician" class="program-link">Master of Medical Laboratory Technology</a></li>
 <li><a href="https://gnc.edu.in/Best-MPT-Master-of-Physiotherapy-College.php" class="program-link">Master of Physiotherapy</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Pharmacy Programs
 </button>
 </h2>
 <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li class=""><a href="https://gnc.edu.in/best-College-for-B-Pharmacy-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Pharmacy</a></li>
 <li><a href="https://gnc.edu.in/B-Pharm-Lateral-Entry-Colleges-in-Dehradun-Uttarakhand" class="program-link">Lateral Entry in B. Pharma</a></li>
 <li><a href="https://gnc.edu.in/Best-College-for-D-Pharm-in-Dehradun-Uttarakhand" class="program-link">Diploma in Pharmacy</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Nursing Programs
 </button>
 </h2>
 <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Best-B-Sc-Nursing-Colleges-in-dehradun" class="program-link">Bachelor of Science in Nursing</a></li>
 <li><a href="https://gnc.edu.in/best-gnm-college-in-dehradun" class="program-link">General Nursing and Midwifery (GNM)</a></li>
 <li><a href="https://gnc.edu.in/post-basic-nursing" class="program-link">Post Basic B.Sc. Nursing</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Health Science
 </button>
 </h2>
 <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/master-of-public-health" class="program-link">Master of Public Health</a></li>
 <li><a href="https://gnc.edu.in/master-of-hospital-administration" class="program-link">Master of Hospital Administration</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Life &amp; Allied Sciences Programs
 </button>
 </h2>
 <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Bsc-microbiology-Colleges-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Science in Microbiology</a></li>
 <li><a href="https://gnc.edu.in/bsc-biotechnology" class="program-link">Bachelor of Science in Biotechnology</a></li>
 <li><a href="https://gnc.edu.in/bsc-food-technology" class="program-link">Bachelor of Science in Food Technology</a></li>
 <li><a href="https://gnc.edu.in/Bsc-pcm-Colleges-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Science in PCM</a></li>
 <li><a href="https://gnc.edu.in/bsc-cbz" class="program-link">Bachelor of Science in CBZ</a></li>
 <li><a href="https://gnc.edu.in/bsc-geology" class="program-link">Bachelor of Science in Geology</a></li>
 <li><a href="https://gnc.edu.in/msc-microbiology-Colleges-in-Dehradun" class="program-link">Master of Science in Microbiology</a></li>
 <li><a href="https://gnc.edu.in/msc-food-tech-Colleges-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Food Technology</a></li>
 <li><a href="https://gnc.edu.in/msc-zoology-Colleges-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Zoology</a></li>
 <li><a href="https://gnc.edu.in/msc-chemistry-Colleges-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Chemistry</a></li>
 <li><a href="https://gnc.edu.in/msc-physics-College-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Physics</a></li>
 <li><a href="https://gnc.edu.in/msc-botany" class="program-link">Master of Science in Botany</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Agriculture Science Programs
 </button>
 </h2>
 <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/agriculture-science" class="program-link">Bachelor of Science in Agriculture</a></li>
 <li><a href="https://gnc.edu.in/Best-Bsc-Forestry-colleges-in-Dehradun" class="program-link">Bachelor of Science in Forestry</a></li>
 <li><a href="https://gnc.edu.in/Best-Msc-Agronomy-Colleges-in-Dehradun" class="program-link">Master of Science in Agronomy</a></li>
 <li><a href="https://gnc.edu.in/msc-horticulture" class="program-link">Master of Science in Horticulture</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Computer Science Programs
 </button>
 </h2>
 <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Best-College-for-BCA-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Computer Applications (BCA)</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Business School Programs
 </button>
 </h2>
 <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/best-bba-college-in-dehradun" class="program-link">Bachelor of Business Administration (BBA)</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Hotel Management
 </button>
 </h2>
 <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://www.gnc.edu.in/Best-DHM-Colleges-in-Dehradun" class="program-link">Diploma in Hotel Management (DHM)</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 <section class="d-none d-md-block" style="background-image: url(images/gnc-program-1.webp); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
 <div class="container pt-5 pb-5">
 <div class="row align-items-center">
 <h1 class="fnt-w-300" style="color:#000000; font-size: 36px; font-weight: bold; text-align: center; margin-bottom: 20px;">
 <span>Find a Program</span>
 </h1>
 </div>
 <div class="accordion accordion-flush" id="accordionFlushDesktop">
 <div class="row desktop-program">
 <div class="col-md-4">
 <div class="accordion" id="accordionExample">
 <div class="accordion-item show active">
 <h2 class="accordion-header">
 <button class="accordion-button show active" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Paramedical Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Pharmacy Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Nursing Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Health Science
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Life &amp; Allied Sciences Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Agriculture Science Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Computer Science Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Business School Programs
 </button>
 </h2>
 </div>
 <div class="accordion-item">
 <h2 class="accordion-header">
 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine" style="background-color: #ff7f50; color: #fff; font-size: 16px; font-weight: bold; border-radius: 10px; padding: 10px;">
 Hotel Management
 </button>
 </h2>
 </div>
 </div>
 </div>
 <div class="col-md-8">
 <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Best-bmlt-college-in-dehradun" class="program-link">Bachelor of Medical Laboratory Technology</a></li>
 <li><a href="https://gnc.edu.in/Best-BMRIT-bachelor-in-medical-radio-imagingtechnology-college-in-dehradun" class="program-link">Bachelor of Medical Radio Diagnosis And Imaging Technology</a></li>
 <li><a href="https://gnc.edu.in/Best-operation-theatre-technology-colleges-in-dehradun" class="program-link">B.Sc. Operation theatre</a></li>
 <li><a href="https://gnc.edu.in/Best-BPT-college-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Physiotherapy</a></li>
 <li><a href="https://www.gnc.edu.in/Best-bsc-optometry-College-in-dehradun" class="program-link">B.Sc. Optometry</a></li>
 <li><a href="https://gnc.edu.in/masters-in-lab-technician" class="program-link">Master of Medical Laboratory Technology</a></li>
 <li><a href="https://gnc.edu.in/Best-MPT-Master-of-Physiotherapy-College.php" class="program-link">Master of Physiotherapy</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li class=""><a href="https://gnc.edu.in/best-College-for-B-Pharmacy-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Pharmacy</a></li>
 <li><a href="https://gnc.edu.in/B-Pharm-Lateral-Entry-Colleges-in-Dehradun-Uttarakhand" class="program-link">Lateral Entry in B. Pharma</a></li>
 <li><a href="https://gnc.edu.in/Best-College-for-D-Pharm-in-Dehradun-Uttarakhand" class="program-link">Diploma in Pharmacy</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Best-B-Sc-Nursing-Colleges-in-dehradun" class="program-link">Bachelor of Science in Nursing</a></li>
 <li><a href="https://gnc.edu.in/best-gnm-college-in-dehradun" class="program-link">General Nursing and Midwifery (GNM)</a></li>
 <li><a href="https://gnc.edu.in/post-basic-nursing" class="program-link">Post Basic Nursing</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/master-of-public-health" class="program-link">Master of Public Health</a></li>
 <li><a href="https://gnc.edu.in/master-of-hospital-administration" class="program-link">Master of Hospital Administration</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Bsc-microbiology-Colleges-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Science in Microbiology</a></li>
 <li><a href="https://gnc.edu.in/bsc-biotechnology" class="program-link">Bachelor of Science in Biotechnology</a></li>
 <li><a href="https://gnc.edu.in/bsc-food-technology" class="program-link">Bachelor of Science in Food Technology</a></li>
 <li><a href="https://gnc.edu.in/Bsc-pcm-Colleges-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Science in PCM</a></li>
 <li><a href="https://gnc.edu.in/bsc-cbz" class="program-link">Bachelor of Science in CBZ</a></li>
 <li><a href="https://gnc.edu.in/bsc-geology" class="program-link">Bachelor of Science in Geology</a></li>
 <li><a href="https://gnc.edu.in/msc-microbiology-Colleges-in-Dehradun" class="program-link">Master of Science in Microbiology</a></li>
 <li><a href="https://gnc.edu.in/msc-food-tech-Colleges-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Food Technology</a></li>
 <li><a href="https://gnc.edu.in/msc-zoology-Colleges-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Zoology</a></li>
 <li><a href="https://gnc.edu.in/msc-chemistry-Colleges-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Chemistry</a></li>
 <li><a href="https://gnc.edu.in/msc-physics-College-in-Dehradun-Uttarakhand" class="program-link">Master of Science in Physics</a></li>
 <li><a href="https://gnc.edu.in/msc-botany" class="program-link">Master of Science in Botany</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/agriculture-science" class="program-link">Bachelor of Science in Agriculture</a></li>
 <li><a href="https://gnc.edu.in/Best-Bsc-Forestry-colleges-in-Dehradun" class="program-link">Bachelor of Science in Forestry</a></li>
 <li><a href="https://gnc.edu.in/Best-Msc-Agronomy-Colleges-in-Dehradun" class="program-link">Master of Science in Agronomy</a></li>
 <li><a href="https://gnc.edu.in/msc-horticulture" class="program-link">Master of Science in Horticulture</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/Best-College-for-BCA-in-Dehradun-Uttarakhand" class="program-link">Bachelor of Computer Applications (BCA)</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://gnc.edu.in/best-bba-college-in-dehradun" class="program-link">Bachelor of Business Administration (BBA)</a></li>
 </ul>
 </div>
 </div>
 </div>
 <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushDesktop">
 <div class="accordion-body" style="padding: 20px;">
 <div class="menu-programs-list__graduates">
 <ul class="p-0 list-unstyled list-icon-2" style="font-size: 16px;">
 <li><a href="https://www.gnc.edu.in/Best-DHM-Colleges-in-Dehradun" class="program-link">Diploma in Hotel Management (DHM)</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 <section style="background-color: #00b5fbf0 ;">
 <div class="container">
 <div class="row pt-5 pb-5">
 <div class="col-lg-3 col-md-3 col-sm-6 col-12">
 <div class="media-image-icon-imag ">
 <img src="upload/icon-1.webp" alt="Guru Nanak College" loading="lazy" width="41" height="41" title="col-icon-1" decoding="async" />
 <h3>Higher Education Courses</h3>
 <p>Join GNC for diplomas and bachelor's in nursing, pharmacy, and paramedical, blending theory with practical expertise.</p>
 <a href="https://www.gnc.edu.in/admissions">Learn More</a>
 </div>
 </div>
 <div class="col-lg-3 col-md-3 col-sm-6 col-12">
 <div class="media-image-icon-imag">
 <img src="upload/icon-2.webp" alt="Guru Nanak College" loading="lazy" decoding="async" width="43" height="45" title="col-icon-2" />
 <h3>Global Opportunities</h3>
 <p>Find your path with GNC and Career Buddy Club, offering national and international placements in nursing, pharmacy, and paramedical fields.</p>
 <a href="https://gnc.edu.in/Paramedical-College-in-Dehradun-Uttarakhand">Learn More</a>
 </div>
 </div>
 <div class="col-lg-3 col-md-3 col-sm-6 col-12">
 <div class="media-image-icon-imag">
 <img src="upload/icon-3.webp" alt="Guru Nanak College" loading="lazy" decoding="async" width="40" height="43" title="col-icon-3" />
 <h3>Student Academic Services</h3>
 <p>Boost success in paramedical & pharmacy studies at GNC with tailored tutoring, lab support, drug research aids.</p>
 <a href="https://www.gnc.edu.in/academic-overview">Learn More</a>
 </div>
 </div>
 <div class="col-lg-3 col-md-3 col-sm-6 col-12">
 <div class="media-image-icon-imag">
 <img src="upload/icon-4.webp" alt="Guru Nanak College" loading="lazy" decoding="async" width="47" height="47" title="col-icon-4" />
 <h3>Campus Life</h3>
 <p>Discover GNC's campus life: modern labs, active student clubs, and a vibrant community tailored for paramedical & pharmacy studies!</p>
 <a href="https://www.gnc.edu.in/campus-life">Learn More</a>
 </div>
 </div>
 </div>
 </div>
 </section>
 <section class="why-choose" id="why-choose">
 <div class="container">
 <div class="why-header-title">
 <h2>Why Should You Choose <br><span>Guru Nanak College?</span></h2>
 </div>
 <div class="why-content">
 <div class="why-item active">
 <button class="why-question">
 <span class="why-number">01</span>
 <span class="why-text">Excellence in Every Endeavour 🌟</span>
 <span class="arrow">→</span>
 </button>
 <div class="why-answer">
 <div class="why-answer-inner">
 <div class="why-text-content">
 <p>
 Guru Nanak College strives to cultivate excellence in academics, innovation, and personal growth. Through dedicated faculty, modern infrastructure, and value-based education, students are inspired to achieve their highest potential and contribute meaningfully to society.
 </p>
 </div>
 <div class="why-img">
 <img src="upload/infra/faq-1.webp" alt="Networking">
 </div>
 </div>
 </div>
 </div>
 <div class="why-item">
 <button class="why-question">
 <span class="why-number">02</span>
 <span class="why-text">Your Career, Our Commitment🎯</span>
 <span class="arrow">→</span>
 </button>
 <div class="why-answer">
 <div class="why-answer-inner">
 <div class="why-text-content">
 <p>
 We focus on guiding students toward fulfilling careers through structured training, expert mentorship, and industry-integrated programs. Our dedicated Career Development Cell ensures every student gains the skills, confidence, and exposure needed to excel in the professional world.
 </p>
 </div>
 <div class="why-img">
 <img src="upload/infra/faq-2.webp" alt="Learning">
 </div>
 </div>
 </div>
 </div>
 <div class="why-item">
 <button class="why-question">
 <span class="why-number">03</span>
 <span class="why-text">Learning Beyond Classrooms💡</span>
 <span class="arrow">→</span>
 </button>
 <div class="why-answer">
 <div class="why-answer-inner">
 <div class="why-text-content">
 <p>
 At Guru Nanak College, education extends far beyond textbooks. Students engage in experiential learning, research, internships, and creative projects that build critical thinking, problem-solving abilities, and a passion for continuous growth and discovery.
 </p>
 </div>
 <div class="why-img">
 <img src="upload/infra/faq-3.webp" alt="Industry Partnership">
 </div>
 </div>
 </div>
 </div>
 <div class="why-item">
 <button class="why-question">
 <span class="why-number">04</span>
 <span class="why-text">Global Outlook, Local Roots🌏</span>
 <span class="arrow">→</span>
 </button>
 <div class="why-answer">
 <div class="why-answer-inner">
 <div class="why-text-content">
 <p>
 We prepare students to thrive in an interconnected world while staying grounded in strong cultural and ethical values. Our global collaborations and exchange programs offer exposure to diverse perspectives and international learning experiences.
 </p>
 </div>
 <div class="why-img">
 <img src="upload/infra/faq-4.webp" alt="Learning">
 </div>
 </div>
 </div>
 </div>
 <div class="why-item">
 <button class="why-question">
 <span class="why-number">05</span>
 <span class="why-text">Where Potential Meets Opportunity🎓</span>
 <span class="arrow">→</span>
 </button>
 <div class="why-answer">
 <div class="why-answer-inner">
 <div class="why-text-content">
 <p>
 Guru Nanak College provides a nurturing environment where talent, determination, and opportunity come together. With comprehensive academic support, skill development programs, and real-world exposure, students are empowered to turn aspirations into lifelong achievements.
 </p>
 </div>
 <div class="why-img">
 <img src="upload/infra/faq-5.webp" alt="Learning">
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</section>
<style>
/* ===== Base Section ===== */
/* .why-choose {
 background-color: #fafafa;
 padding: 100px 0;
 font-family: "Poppins", sans-serif;
 color: #222;
 opacity: 0;
 transform: translateY(80px);
 transition: all 1s ease-out;
} */
.why-choose.visible {
 opacity: 1;
 transform: translateY(0);
}
/* ===== Title ===== */
.why-header-title {
 text-align: left;
 margin-bottom: 60px;
 padding-left: 20px;
}
.why-header-title h2 {
 font-size: 2.8rem;
 font-weight: 200;
 line-height: 1.3;
}
.why-header-title span {
 color: rgb(0, 0, 0);
 font-weight: 700;
}
/* ===== Accordion Wrapper ===== */
.why-content {
 display: flex;
 flex-direction: column;
 margin-left: 200px;
}
/* ===== Accordion Item ===== */
/* .why-item {
 background: #fff;
 border-bottom: 1px solid #000; 
 transition: all 0.4s ease;
} */
/* ===== Accordion Header (Button) ===== */
.why-question {
 width: 100%;
 background: none;
 border: none;
 outline: none;
 display: flex;
 align-items: center;
 gap: 20px;
 padding: 20px 0;
 cursor: pointer;
 font-size: 1.1rem;
 font-weight: 600;
 text-align: left;
 transition: all 0.3s ease;
}
.why-question:hover {
 background-color: #f3f3f3;
}
/* Default number */
.why-number {
 font-size: 2rem;
 color: rgba(181, 181, 181);
 font-weight: 800;
 width: 80px;
 text-align: left;
 transition: all 0.5s ease;
 align-self: flex-start;
}
/* When accordion is active — number moves to full vertical center */
.why-item.active .why-number {
 position: absolute;
 left: 0;
 top: 50%;
 transform: translateY(-50%);
 text-align: center;
 color: rgba(181, 181, 181);
 font-size: 3.5rem;
 opacity: 0.15;
}
/* Parent relative to position number properly */
.why-item {
 position: relative;
 transition: all 0.4s ease;
 border-bottom: 1px solid #222;
}
/* Add space so text doesn't overlap number when active */
.why-item.active .why-answer-inner,
.why-item.active .why-question {
 padding-left: 100px;
}
.arrow {
 margin-left: auto;
 font-size: 2.2rem;
 color: rgb(0, 0, 0);
 transition: transform 0.3s ease;
}
/* ===== Accordion Body ===== */
.why-answer {
 max-height: 0;
 overflow: hidden;
 opacity: 0;
 transform: translateY(-10px);
 transition: all 0.5s ease;
}
/* Inner Content (Text + Image side by side) */
.why-answer-inner {
 display: flex;
 align-items: center;
 justify-content: space-between;
 gap: 30px;
 padding: 0 0 20px 80px;
}
.why-text-content {
 flex: 1;
}
.why-text-content p {
 line-height: 1.6;
 font-size: 0.95rem;
 color: #555;
 margin: 0;
}
.why-img img {
 width: 200px;
 height: 200px;
 object-fit: cover;
 border-radius: 10px;
}
/* ===== Active Accordion ===== */
.why-item.active .why-answer {
 max-height: 400px;
 opacity: 1;
 transform: translateY(0);
 padding-bottom: 25px;
}
.why-item.active .arrow {
 transform: rotate(90deg);
}
/* ===== Responsive ===== */
@media (max-width: 768px) {
 .why-header-title h2 {
 font-size: 2rem;
 }
 .why-content {
 margin-left: 0;
 }
 .why-answer-inner {
 flex-direction: column;
 align-items: flex-start;
 padding-left: 0;
 }
 .why-img img {
 width: 100%;
 height: auto;
 }
}
/* Remove the section-level animation */
.why-choose {
 background-color: #fafafa;
 padding: 100px 0;
 font-family: "Poppins", sans-serif;
 color: #222;
}
/* ===== Item-level animation ===== */
.why-item {
 background: #fff;
 border-bottom: 1px solid #000;
 transition: all 0.4s ease;
 opacity: 0;
 transform: translateY(60px);
 transition: all 0.8s ease-out;
}
/* When visible (via JS) */
.why-item.visible {
 opacity: 1;
 transform: translateY(0);
}
/* Optional: small stagger for nice effect */
.why-item.visible:nth-child(1) { transition-delay: 0.1s; }
.why-item.visible:nth-child(2) { transition-delay: 0.2s; }
.why-item.visible:nth-child(3) { transition-delay: 0.3s; }
.why-item.visible:nth-child(4) { transition-delay: 0.4s; }
.why-item.visible:nth-child(5) { transition-delay: 0.5s; }
</style>
<script>
/* Accordion functionality */
document.addEventListener("DOMContentLoaded", () => {
 const accordions = document.querySelectorAll(".why-item");
 accordions.forEach(item => {
 const btn = item.querySelector(".why-question");
 btn.addEventListener("click", () => {
 const isActive = item.classList.contains("active");
 accordions.forEach(i => i.classList.remove("active"));
 if (!isActive) item.classList.add("active");
 });
 });
 /* Animate each item individually when in view */
 const items = document.querySelectorAll(".why-item");
 const observer = new IntersectionObserver((entries) => {
 entries.forEach(entry => {
 if (entry.isIntersecting) {
 entry.target.classList.add("visible");
 } else {
 entry.target.classList.remove("visible"); // remove when scrolled away
 }
 });
 }, {
 threshold: 0.3,
 rootMargin: "0px 0px -50px 0px"
 });
 items.forEach(item => observer.observe(item));
});
</script>
 <section class="facSpeaks-section pb-5 mt-5 ">
 <div class="container" id="intellectual-assets">
 <div class="row justify-content-center">
 <div class="col-11">
 <div class="main-heading text-center">
 <h2 class="mb-3"><span>Our</span> Intellectual Assets</h2>
 <p>Guru Nanak College, Dehradun, prides itself on a team of experienced and qualified leadership members from diverse backgrounds. These experts, leaders in their fields, inspire students with academic excellence, high moral values, and a commitment to holistic development, guiding them to reach their full potential.</p>
 </div>
 </div>
 </div>
 </div>
 <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
 <div class="carousel-inner">
 <div class="carousel-item active overflow-hidden">
 <div class="container">
 <div class="row">
 <div class="col-md-6 text-end">
 <div class="facDp br-20 d-inline-block me-3">
 <img src="upload/infra/leaderships-1.webp" alt="MR. JOGINDER SINGH ARORA" loading="lazy" decoding="async">
 </div>
 </div>
 <div class="col-md-6">
 <div class="facMsg position-relative">
 <p class="mb-5"><b>“Empowerment through education leads to limitless possibilities” </b>As the Chairman of Guru Nanak College, Dehradun, I am proud to lead an institution that emphasizes comprehensive education. We at GNC are committed to equipping our students with the skills and knowledge necessary for success in a rapidly changing world. Our experienced faculty fosters a dynamic learning environment that prioritizes understanding and practical application. Through personal development programs and industry exposure, we prepare our students to face real-world challenges confidently. Together, we inspire our learners to achieve their aspirations and make a meaningful impact in their fields, paving the way for a brighter future...</p>
 <a href="/about/leadership.php" class="btn btn-sm btn-primary btn-shadow">Read More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 <div class="facName">
 <h4>Mr. JOGINDER SINGH ARORA</h4>
 <small>CHAIRMAN</small>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="carousel-item overflow-hidden">
 <div class="container">
 <div class="row">
 <div class="col-md-6 text-end">
 <div class="facDp br-20 d-inline-block me-3">
 <img src="upload/infra/leaderships-2.webp" alt="RAJENDRA KAUR ARORA" loading="lazy" decoding="async">
 </div>
 </div>
 <div class="col-md-6">
 <div class="facMsg position-relative">
 <p class="mb-5"><b>“Leadership is not about being in charge. It is about taking care of those in your charge.” </b>At GNC Dehradun, we believe effective leadership is the cornerstone of success. As Vice Chairman, I am dedicated to fostering an environment that nurtures innovative thinking, collaboration, and integrity. Our leadership program emphasizes adaptability and resilience, equipping students with essential skills to navigate a dynamic world. We encourage future leaders to embrace diversity, inspire others, and drive positive change in their communities. By promoting critical thinking, ethical decision-making, and effective communication, we aim to prepare our students to face global challenges with confidence and creativity, shaping compassionate and visionary leaders for tomorrow....</p>
 <a href="/about/leadership.php" class="btn btn-sm btn-primary btn-shadow">Read More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 <div class="facName">
 <h4>Mrs. RAJENDRA KAUR ARORA</h4>
 <small>VICE CHAIRMAN</small>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="carousel-item overflow-hidden">
 <div class="container">
 <div class="row">
 <div class="col-md-6 text-end">
 <div class="facDp br-20 d-inline-block me-3">
 <img src="upload/infra/leaderships-3.webp" alt="MR. BHUPINDER SINGH ARORA" loading="lazy" decoding="async">
 </div>
 </div>
 <div class="col-md-6">
 <div class="facMsg position-relative">
 <p class="mb-5"><b>“Empowering youth today shapes a brighter tomorrow for all” </b>As the CEO of Guru Nanak College, Dehradun, I warmly welcome you to our esteemed institution, a true temple of learning. We at GNC are dedicated to fostering innovation and creativity, particularly in cutting-edge technologies. Our commitment to quality education is unwavering, ensuring that every aspect of our institute reflects excellence. We believe that the future belongs to those who harness the potential of young minds. In a world facing numerous challenges, we strive to instill strong moral values and environmental consciousness in our students, preparing them to excel in their chosen fields and contribute positively to society...</p>
 <a href="/about/leadership.php" class="btn btn-sm btn-primary btn-shadow">Read More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 <div class="facName">
 <h4>Mr. BHUPINDER SINGH ARORA</h4>
 <small>CEO</small>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="carousel-item overflow-hidden">
 <div class="container">
 <div class="row">
 <div class="col-md-6 text-end">
 <div class="facDp br-20 d-inline-block me-3">
 <img src="upload/infra/leaderships-4.webp" alt="MRs. VINEET ARORA" loading="lazy" decoding="async">
 </div>
 </div>
 <div class="col-md-6">
 <div class="facMsg position-relative">
 <p class="mb-5"><b>“Empowering students today shapes visionary leaders for tomorrow.” </b>As the COO of Guru Nanak College, Dehradun, I warmly welcome all students, faculty, staff, and visitors. At GNC, we are committed to fostering an environment that promotes academic excellence and personal growth through a diverse range of programs. Our dedicated faculty not only impart knowledge but also instill essential values such as integrity, teamwork, and resilience, which are vital for success in today’s world. We celebrate diversity and inclusivity, creating a dynamic community where collaboration flourishes. Beyond academics, we prioritize social responsibility and community engagement, encouraging students to become compassionate leaders. Together, we strive to develop ethical individuals who are prepared to face the challenges of the future. Thank you for being an integral part of our journey towards excellence...</p>
 <a href="/about/leadership.php" class="btn btn-sm btn-primary btn-shadow">Read More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 <div class="facName">
 <h4>Mrs. VINEET ARORA</h4>
 <small>COO</small>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="carousel-item overflow-hidden">
 <div class="container">
 <div class="row">
 <div class="col-md-6 text-end">
 <div class="facDp br-20 d-inline-block me-3">
 <img src="upload/infra/leaderships-5.webp" alt="MR. SAITHJEET SINGH ARORA" loading="lazy" decoding="async">
 </div>
 </div>
 <div class="col-md-6">
 <div class="facMsg position-relative">
 <p class="mb-5"><b>“ Empowering financial knowledge today ensures a brighter tomorrow for all” </b>As the Chief Financial Officer of Guru Nanak College, Dehradun, I am dedicated to fostering a culture of financial responsibility and transparency within our institution. We at GNC understand that sound financial management is crucial for sustaining our commitment to academic excellence. By effectively allocating resources, we ensure that our diverse programs and initiatives receive the support they need to thrive. Additionally, we prioritize financial literacy, equipping our students and staff with the knowledge to make informed decisions. Together, we are building a strong financial foundation that will empower our community and pave the way for future success...</p>
 <a href="/about/leadership.php" class="btn btn-sm btn-primary btn-shadow">Read More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 <div class="facName">
 <h4>Mr. SAITHJEET SINGH ARORA</h4>
 <small>CFO</small>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="carousel-item overflow-hidden">
 <div class="container">
 <div class="row">
 <div class="col-md-6 text-end">
 <div class="facDp br-20 d-inline-block me-3">
 <img src="upload/infra/lalit.webp" alt="Dr. LALIT KUMAR" loading="lazy" decoding="async">
 </div>
 </div>
 <div class="col-md-6">
 <div class="facMsg position-relative">
 <p class="mb-5"><b>“ Empowering students today shapes responsible leaders for tomorrow” </b>As the Registrar of Guru Nanak College, Dehradun, I extend a heartfelt welcome to all students, faculty, staff, and visitors. We at GNC are dedicated to fostering academic excellence through a diverse array of programs that prepare students for successful careers. Our esteemed faculty instills essential values such as discipline, responsibility, and time management, crucial for personal and professional growth. We celebrate diversity and inclusivity, creating a vibrant community where collaboration thrives. Beyond academics, we emphasize empathy and social responsibility through community outreach initiatives...</p>
 <a href="/about/leadership.php" class="btn btn-sm btn-primary btn-shadow">Read More <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 <div class="facName">
 <h4>Dr. LALIT KUMAR</h4>
 <small>REGISTRAR</small>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <div class="carousel-indicators">
 <button type="button" data-bs-target="#carouselExampleControls2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
 <img src="upload/infra/leaderships-1.webp" alt="MR. JOGINDER SINGH ARORA" loading="lazy" decoding="async">
 </button>
 <button type="button" data-bs-target="#carouselExampleControls2" data-bs-slide-to="1" aria-label="Slide 2">
 <img src="upload/infra/leaderships-2.webp" alt="Mrs. RAJENDRA KAUR ARORA" loading="lazy" decoding="async">
 </button>
 <button type="button" data-bs-target="#carouselExampleControls2" data-bs-slide-to="2" aria-label="Slide 3">
 <img src="upload/infra/leaderships-3.webp" alt="MR. BHUPINDER SINGH ARORA" loading="lazy" decoding="async">
 </button>
 <button type="button" data-bs-target="#carouselExampleControls2" data-bs-slide-to="3" aria-label="Slide 4">
 <img src="upload/infra/leaderships-4.webp" alt="Mrs. VINEET ARORA" loading="lazy" decoding="async">
 </button>
 <button type="button" data-bs-target="#carouselExampleControls2" data-bs-slide-to="4" aria-label="Slide 5">
 <img src="upload/infra/leaderships-5.webp" alt="MR. SAITHJEET SINGH ARORA" loading="lazy" decoding="async">
 </button>
 <button type="button" data-bs-target="#carouselExampleControls2" data-bs-slide-to="5" aria-label="Slide 6">
 <img src="upload/infra/lalit.webp" alt="Dr. LALIT KUMAR" loading="lazy" decoding="async">
 </button>
 </div>
 </div>
 <div class="text-center mt-5">
 <a href="/about/leadership.php" class="btn btn-lg btn-primary btn-shadow">View All <i class="fa fa-long-arrow-right ms-1" aria-hidden="true"></i></a>
 </div>
 </section>
 <?php require "research-sample.php"; ?>
 <?php
// Put this where you need the section on index.php
$blogs = json_decode(file_get_contents('blog.json'), true);
if (!$blogs) $blogs = [];

// Show latest first
$blogs = array_reverse($blogs);
$latestBlogs = array_slice($blogs, 0, 5);
?>
<?php
if (!function_exists('slugify')) {
  function slugify(string $text, string $divider = '-'): string {
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    if (function_exists('iconv')) $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, $divider);
    $text = preg_replace('~-+~', $divider, $text);
    $text = strtolower($text);
    return $text === '' ? 'n-a' : $text;
  }
}

// compute base path that works on root and subfolder installs
$scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base = ($scriptDir === '' || $scriptDir === '/' || $scriptDir === '\\') ? '' : $scriptDir;
?>
<section class="mdublog-section">
 <div class="mdublog-container">
 <h2 class="mdublog-title">Latest <span>Blogs</span></h2>
 <div class="mdublog-wrapper">
 <div class="mdublog-side mdublog-left">
 <?php for ($i = 0; $i < 2; $i++):
          if (!isset($latestBlogs[$i])) break;
          $b = $latestBlogs[$i];

          $img = (!empty($b['image']) && file_exists(str_replace('./', '', $b['image'])))
            ? str_replace('./', '', $b['image'])
            : 'admin/uploads/placeholder.jpg';

          $postSlug = !empty($b['slug']) ? $b['slug'] : slugify($b['title']);
          $pretty = ($base === '' ? '' : $base) . '/post/' . rawurlencode($postSlug);
          $fallback = ($base === '' ? '' : $base) . '/post.php?slug=' . rawurlencode($postSlug);
        ?>
 <a class="mdublog-card mdublog-small" href="<?= htmlspecialchars($pretty) ?>"
 data-fallback="<?= htmlspecialchars($fallback) ?>">
 <div class="mdublog-img" style="background-image:url('<?= htmlspecialchars($img) ?>')"></div>
 <div class="mdublog-content">
 <h3><?= htmlspecialchars($b['title']) ?></h3>
 <p class="mdublog-date"><?= htmlspecialchars($b['date']) ?></p>
 </div>
 </a>
 <?php endfor; ?>
 </div>
 <?php if (isset($latestBlogs[2])):
        $featured = $latestBlogs[2];
        $fimg = (!empty($featured['image']) && file_exists(str_replace('./', '', $featured['image'])))
          ? str_replace('./', '', $featured['image'])
          : 'admin/uploads/placeholder-large.jpg';

        $featuredSlug = !empty($featured['slug']) ? $featured['slug'] : slugify($featured['title']);
        $featuredPretty = ($base === '' ? '' : $base) . '/post/' . rawurlencode($featuredSlug);
        $featuredFallback = ($base === '' ? '' : $base) . '/post.php?slug=' . rawurlencode($featuredSlug);
      ?>
 <a class="mdublog-featured" href="<?= htmlspecialchars($featuredPretty) ?>"
 data-fallback="<?= htmlspecialchars($featuredFallback) ?>">
 <div class="mdublog-featured-img" style="background-image:url('<?= htmlspecialchars($fimg) ?>')"></div>
 <div class="mdublog-featured-content">
 <h2><?= htmlspecialchars($featured['title']) ?></h2>
 <p class="mdublog-meta"><?= htmlspecialchars($featured['author']) ?> — <?= htmlspecialchars($featured['date']) ?></p>
 </div>
 </a>
 <?php endif; ?>
 <div class="mdublog-side mdublog-right">
 <?php for ($i = 3; $i < 5; $i++):
          if (!isset($latestBlogs[$i])) break;
          $b = $latestBlogs[$i];

          $img = (!empty($b['image']) && file_exists(str_replace('./', '', $b['image'])))
            ? str_replace('./', '', $b['image'])
            : 'admin/uploads/placeholder.jpg';

          $postSlug = !empty($b['slug']) ? $b['slug'] : slugify($b['title']);
          $pretty = ($base === '' ? '' : $base) . '/post/' . rawurlencode($postSlug);
          $fallback = ($base === '' ? '' : $base) . '/post.php?slug=' . rawurlencode($postSlug);
        ?>
 <a class="mdublog-card mdublog-small" href="<?= htmlspecialchars($pretty) ?>"
 data-fallback="<?= htmlspecialchars($fallback) ?>">
 <div class="mdublog-img" style="background-image:url('<?= htmlspecialchars($img) ?>')"></div>
 <div class="mdublog-content">
 <h3><?= htmlspecialchars($b['title']) ?></h3>
 <p class="mdublog-date"><?= htmlspecialchars($b['date']) ?></p>
 </div>
 </a>
 <?php endfor; ?>
 </div>
 </div>
 </div>
</section>
<script>
/*
 Small client-side check: verify pretty URL exists (same-origin HEAD).
 If it 404s or errors (e.g. mod_rewrite not enabled), swap href to fallback query URL.
 This runs quickly on page load and only checks unique hrefs to avoid duplicate requests.
*/
(function(){
 if (!window.fetch) return;
 const anchors = Array.from(document.querySelectorAll('.mdublog-card[data-fallback], .mdublog-featured[data-fallback]'));
 if (!anchors.length) return;
 // map unique pretty URLs to anchors
 const map = {};
 anchors.forEach(a => {
 const pretty = a.getAttribute('href');
 const fallback = a.dataset.fallback;
 if (!pretty || !fallback) return;
 if (!map[pretty]) map[pretty] = { anchors: [], fallback };
 map[pretty].anchors.push(a);
 });
 // for each unique pretty URL, do a HEAD request and swap if 404 or error
 Object.keys(map).forEach(url => {
 // use HEAD for speed; some servers may not support HEAD — if so fall back to GET
 fetch(url, { method: 'HEAD', credentials: 'same-origin' })
 .then(resp => {
 if (!resp || resp.status === 404) {
 map[url].anchors.forEach(a => a.href = map[url].fallback);
 }
 })
 .catch(() => {
 // network error or HEAD not allowed — try GET as fallback
 fetch(url, { method: 'GET', credentials: 'same-origin' })
 .then(r => {
 if (!r || r.status === 404) {
 map[url].anchors.forEach(a => a.href = map[url].fallback);
 }
 })
 .catch(() => {
 map[url].anchors.forEach(a => a.href = map[url].fallback);
 });
 });
 });
})();
</script>
<style>
.mdublog-section {
 padding: 60px 0;
 background: #f9fafc;
 overflow: hidden;
 margin: auto 5px;
}
.mdublog-title {
 font-size: 2rem;
 font-weight: 700;
 text-align: center;
 margin-bottom: 40px;
}
.mdublog-title span {
 color: #0078ff;
}
/* Layout */
.mdublog-wrapper {
 max-width: 1300px;
 margin: 0 auto;
 display: flex;
 gap: 10px;
 align-items: stretch;
 justify-content: center;
}
.mdublog-side {
 display: flex;
 flex-direction: column;
 gap: 10px;
 width: 300px;
}
.mdublog-featured {
 flex: 1 1 520px;
 max-width: 520px;
 display: flex;
 flex-direction: column;
 text-decoration: none;
 color: inherit;
 height: 510px;
 border-radius: 14px;
 overflow: hidden;
 box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
 transition: transform 0.4s ease, box-shadow 0.4s ease;
}
.mdublog-featured:hover {
 transform: scale(1.03);
 box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
}
/* Small cards */
.mdublog-card {
 display: block;
 background: #fff;
 border-radius: 12px;
 overflow: hidden;
 box-shadow: 0 6px 18px rgba(0, 0, 0, 0.07);
 transition: transform 0.3s ease, box-shadow 0.3s ease;
 text-decoration: none;
 color: inherit;
 height: 250px;
}
.mdublog-card:hover {
 transform: translateY(-6px);
 box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}
.mdublog-img {
 height: 160px;
 background-size: cover;
 background-position: center;
}
.mdublog-content {
 padding: 12px;
}
.mdublog-content h3 {
 font-size: 1rem;
 margin: 0 0 5px;
 font-weight: 600;
}
.mdublog-date {
 font-size: 0.8rem;
 color: #777;
 margin: 0;
}
/* Featured styles */
.mdublog-featured-img {
 height: 380px;
 background-size: cover;
 background-position: center;
}
.mdublog-featured-content {
 padding: 20px;
}
.mdublog-featured-content h2 {
 font-size: 1.3rem;
 margin: 0 0 10px;
}
.mdublog-meta {
 font-size: 0.9rem;
 color: #666;
}
/* Scroll Animation Base */
.mdublog-left, .mdublog-right, .mdublog-featured {
 opacity: 0;
 transform: translateY(50px);
 transition: all 0.8s ease-out;
}
.mdublog-left.mdublog-visible {
 opacity: 1;
 transform: translateX(0);
}
.mdublog-right.mdublog-visible {
 opacity: 1;
 transform: translateX(0);
}
.mdublog-featured.mdublog-visible {
 opacity: 1;
 transform: translateY(0);
}
/* Initial directions */
.mdublog-left {
 transform: translateX(-80px);
}
.mdublog-right {
 transform: translateX(80px);
}
.mdublog-featured {
 transform: translateY(80px);
}
/* Responsive */
@media (max-width: 900px) {
 .mdublog-wrapper {
 flex-direction: column;
 gap: 30px;
 }
 .mdublog-side {
 flex-direction: row;
 width: 100%;
 gap: 15px;
 }
 .mdublog-card {
 width: 48%;
 height: auto;
 }
 .mdublog-featured {
 max-width: none;
 height: auto;
 }
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
 const observer = new IntersectionObserver((entries) => {
 entries.forEach(entry => {
 const el = entry.target;
 if (entry.isIntersecting) {
 el.classList.add('mdublog-visible');
 } else {
 el.classList.remove('mdublog-visible');
 }
 });
 }, { threshold: 0.2 });
 document.querySelectorAll('.mdublog-left, .mdublog-right, .mdublog-featured').forEach(el => {
 observer.observe(el);
 });
});
</script>
 <?php require "testimoni-2.php"; ?>
 <?php require "application-process.php"; ?>
 <?php require "common/footer.php"; ?>
 <script>
 jQuery(document).ready(function($) {
 $(".infrasturcture-slider").slick({
 slidesToShow: 2,
 slidesToScroll: 1,
 autoplay: true,
 autoplaySpeed: 4000,
 responsive: [{
 breakpoint: 720,
 settings: {
 slidesToShow: 1,
 }
 }]
 });
 });
 </script>
 <script>
 jQuery(document).ready(function($) {
 $(".slide-container").slick({
 slidesToShow: 3,
 slidesToScroll: 1,
 autoplay: true,
 autoplaySpeed: 4000,
 responsive: [{
 breakpoint: 720,
 settings: {
 slidesToShow: 1,
 }
 }]
 });
 });
 </script>
 <script>
 jQuery(document).ready(function($) {
 $('.slider').slick({
 slidesToShow: 5,
 slidesToScroll: 1,
 autoplay: true,
 autoplaySpeed: 1000,
 arrows: true,
 dots: false,
 responsive: [{
 breakpoint: 768,
 settings: {
 slidesToShow: 3,
 }
 }]
 });
 });
 </script>
 <script>
 document.addEventListener('DOMContentLoaded', function() {
 let counters = document.querySelectorAll('span[data-count]');
 let duration = 2000; // Duration of counting in milliseconds
 counters.forEach(counter => {
 let startTime = Date.now();
 let target = +counter.getAttribute('data-count');
 let extra = counter.getAttribute('data-extra') || "";
 let count = 1;
 function updateCount() {
 let timePassed = Date.now() - startTime;
 let progress = timePassed / duration;
 let current = Math.floor(progress * target);
 if (timePassed < duration) {
 counter.innerText = current + extra;
 requestAnimationFrame(updateCount);
 } else {
 counter.innerText = target + extra;
 }
 }
 updateCount();
 });
 });
 </script>
 <script>
 var navLinks = document.getElementById("navLinks");
 function showMenu() {
 navLinks.style.right = "0";
 }
 function hideMenu() {
 navLinks.style.right = "-200px";
 }
 </script>
 <script>
 $(document).ready(function() {
 $('.slide-container-blog').slick({
 slidesToShow: 3,
 slidesToScroll: 1,
 dots: true,
 arrows: true,
 infinite: true,
 autoplay: true,
 responsive: [{
 breakpoint: 768,
 settings: {
 slidesToShow: 1,
 slidesToScroll: 1
 }
 }]
 });
 });
 </script>
 <script>
 $(document).ready(function($) {
 $('.topCompanies-block').slick({
 infinite: true,
 slidesToShow: 7,
 slidesToScroll: 1,
 autoplay: true,
 autoplaySpeed: 250,
 dots: false,
 arrows: true,
 responsive: [{
 breakpoint: 768,
 settings: {
 slidesToShow: 4,
 slidesToScroll: 1,
 infinite: true,
 dots: false,
 arrows: false
 }
 }]
 });
 });
 </script>
</body>
</html>