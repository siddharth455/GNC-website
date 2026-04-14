<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technojashan 2026</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/techno-loader.css">
    <link rel="stylesheet" href="css/techno-style.css">
</head>

<body class="big-image">

    <div id="tj-loader">
        <div class="tj-floating-words"></div>
        <div class="tj-logo-wrapper">
            <div class="tj-img-container">
                <img src="upload/techno-2026/technoj-logo.png" alt="Technojashan Logo">
            </div>
            <div class="tj-status-container">
                <div class="tj-status-bar">
                    <div class="tj-bar-fill" id="tj-bar-fill"></div>
                </div>
                <div class="tj-progress-text" id="tj-progress-text">Loading 0%</div>
            </div>
        </div>
    </div>

    <div id="tj-main-wrapper">
        <header id="tj-header" class="tj-header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="https://gnc.edu.in">
                        <img src="upload/techno-2026/logo.webp" alt="Guru Nanak Logo" class="tj-nav-logo me-2">
                        <img src="upload/techno-2026/technoj-logo.png" alt="Technojashan Logo" class="tj-nav-logo-secondary">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#tj-navbar-nav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="tj-navbar-nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="technojashan2026.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About Fest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#featured-events">Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://forms.gle/vF3VaveaGZJPQpj56" target="_blank"
                                    rel="noopener noreferrer">Register </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="tj-content">
            <section class="tj-hero-banner">
                <!-- <video id="hero-video" class="tj-hero-video" autoplay muted loop playsinline>
                    <source src="upload/techno-2026/hero-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video> -->
                <iframe id="tj-hero-video-iframe" class="tj-hero-iframe"
                    src="https://www.youtube.com/embed/I8eIYQITVBg?autoplay=1&mute=1&loop=1&playlist=I8eIYQITVBg&controls=0&playsinline=1&modestbranding=1&rel=0&enablejsapi=1"
                    title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
              
                <div class="tj-hero-overlay">
                    <div
                        class="container h-100 d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="tj-hero-content">
                            <img src="upload/techno-2026/technoj-logo.png" alt="Technojashan 2026" class="tj-hero-logo mb-2">
                            <p class="tj-hero-subtitle mb-4">Inter-College Cultural, Technical & Career Fest</p>
                            <h2 class="tj-hero-date-loc mb-4">28–30 April | Dehradun</h2>

                            <div class="tj-hero-btns mb-5">
                                <a href="https://forms.gle/vF3VaveaGZJPQpj56" class="tj-btn-primary me-3"
                                    target="_blank" rel="noopener noreferrer">Register Now</a>
                                <a href="#explore-events" class="tj-btn-outline">Explore Events</a>
                            </div>

                            <div id="tj-countdown" class="tj-countdown d-flex justify-content-center gap-3">
                                <div class="tj-countdown-item">
                                    <span id="days" class="tj-countdown-value">00</span>
                                    <span class="tj-countdown-label">DAYS</span>
                                </div>
                                <div class="tj-countdown-item">
                                    <span id="hours" class="tj-countdown-value">00</span>
                                    <span class="tj-countdown-label">HOURS</span>
                                </div>
                                <div class="tj-countdown-item">
                                    <span id="minutes" class="tj-countdown-value">00</span>
                                    <span class="tj-countdown-label">MINUTES</span>
                                </div>
                                <div class="tj-countdown-item">
                                    <span id="seconds" class="tj-countdown-value">00</span>
                                    <span class="tj-countdown-label">SECONDS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tj-video-controls">
                    <button id="video-toggle" class="tj-video-btn" title="Pause">
                        <svg id="icon-pause" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <rect x="6" y="4" width="4" height="16"></rect>
                            <rect x="14" y="4" width="4" height="16"></rect>
                        </svg>
                        <svg id="icon-play" class="d-none" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                    </button>
                </div>
            </section>

            <section id="about" class="tj-philosophy-section pb-9 pt-9 position-relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tj-philosophy-content pe-lg-5">
                                <!-- <span class="tj-philosophy-subtitle">ABOUT THE FEST</span> -->
                                <img src="upload/techno-2026/technoj-logo.png" alt="Technojashan 2026"
                                    class="tj-about-logo mt-3 mb-4">
                                <p class="tj-philosophy-text mb-4" style="text-align: justify;">Uniting young and
                                    passionate innovators with experienced and distinguished leaders from diverse
                                    domains under one roof, Technojashan 2026 will create a dynamic ecosystem to
                                    collaborate, create, and innovate.</p>
                                <p class="tj-philosophy-text" style="text-align: justify;">As India’s premier Confluence
                                    for Innovation & Impact, it will fuel next-generation ideas and accelerate
                                    breakthroughs in emerging interdisciplinary frontier. The fest will feature
                                    immersive hackathons, expert panel discussions, innovation competitions, and
                                    collaborative sessions to translate ideas into impactful solutions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tj-philosophy-images mt-5 mt-lg-0">
                                <div class="tj-phi-image-container tj-single-about-image">
                                    <div class="tj-phi-img-wrapper">
                                        <img src="upload/techno-2026/tech-about.JPG" alt="Technojashan About"
                                            class="tj-grayscale">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="tj-event-usps pb-9 pt-9"
                style="background: url(upload/techno-2026/tech-bg.jpg) top center / cover no-repeat fixed">
                <div class="container">
                    <div class="tj-main-heading text-center mb-5 position-relative z-1">
                        <h2>Key Highlights</h2>
                    </div>

                    <!-- Row 1: Counters -->
                    <div class="row justify-content-center g-4 g-lg-5 mb-5 position-relative z-1">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="tj-usp-point">
                                <div class="tj-usp-number">
                                    <span class="tj-counter" data-target="30">0</span><span class="plus">+</span>
                                </div>
                                <p class="tj-usp-title">Events</p>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="tj-usp-point">
                                <div class="tj-usp-number">
                                    <span class="tj-counter" data-target="2500">0</span><span class="plus">+</span>
                                </div>
                                <p class="tj-usp-title">Students</p>

                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Highlights -->
                    <div class="row justify-content-center g-4 g-lg-5 position-relative z-1">
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="tj-usp-point">
                                <span class="tj-usp-main">AI Conference</span>
                                <p class="tj-usp-title">Exploring Intelligent Solutions for Tommorrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="tj-usp-point">
                                <span class="tj-usp-main">Career Fest</span>
                                <p class="tj-usp-title">Exploring Future Pathways for Career Excellence</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="tj-usp-point">
                                <span class="tj-usp-main">Celebrity Night</span>
                                <p class="tj-usp-title">Experience an Unforgettable Night with Star Power</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="featured-events" class="tj-featured-events pt-9  position-relative">
                <div class="container position-relative z-1">
                    <div class="tj-featured-heading text-center text-white">
                        <h2>Featured Events</h2>
                    </div>

                    <div class="row justify-content-center g-4 g-lg-5">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tj-featured-card">
                                <div class="tj-featured-media position-relative">
                                    <img src="upload/techno-2026/tech-eve.jpg" alt="Cultural Events">
                                </div>
                                <h3>Cultural Events</h3>
                                <div class="tj-featured-cat">Star Event</div>
                                <a class="tj-featured-details" href="#" data-fancybox="mygallery">Register</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tj-featured-card">
                                <div class="tj-featured-media position-relative">
                                    <img src="upload/techno-2026/career-expo.jpeg" alt="Career Expo" style="object-fit: cover;">

                                </div>
                                <h3>Career-Expo</h3>
                                <div class="tj-featured-cat">Star Event</div>
                                <a class="tj-featured-details" href="" data-fancybox="mygallery">Register</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="tj-featured-card">
                                <div class="tj-featured-media position-relative">
                                    <img src="upload/techno-2026/paint-ball.avif" alt="Paint Ballss">

                                </div>
                                <h3>Paint Ball</h3>
                                <div class="tj-featured-cat">Star Event</div>
                                <a class="tj-featured-details" href="" data-fancybox="mygallery">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- Events Start -->
 <!-- TECHNO JASHAN 2026 - COMPLETE EVENTS LIST -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">

<section id="tj-events-2026">
    <style>
        :root {
            --accent-teal: #00ffcc;
            --bg-dark: #000000;
            --card-bg: #0d0d0d;
            --text-main: #ffffff;
            --text-dim: #a1a1aa;
            --border-color: #222222;
            --special-red: #ff0055;
            /* Eligibility Colors */
            --tag-both: #3b82f6; /* Blue */
            --tag-college: #a855f7; /* Purple */
            --tag-internal: #ef4444; /* Red */
        }

        #tj-events-2026 {
            background-color: var(--bg-dark);
            color: var(--text-main);
            font-family: 'Inter', sans-serif;
            padding: 60px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* --- Header Section --- */
        .tj-header {
            text-align: center;
            padding-bottom: 50px;
        }
        .tj-header h1 {
            font-size: clamp(2rem, 7vw, 3.5rem);
            letter-spacing: 6px;
            font-weight: 900;
            margin: 0;
            text-transform: uppercase;
        }
        .tj-header h1 span { color: var(--accent-teal); }
        .tj-header p {
            color: var(--text-dim);
            letter-spacing: 2px;
            font-size: 1rem;
            margin-top: 10px;
            text-transform: uppercase;
        }

        /* --- Navigation Filters --- */
        .filter-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-bottom: 50px;
            position: sticky;
            top: 10px;
            z-index: 100;
        }
        .filter-btn {
            background: rgba(20, 20, 20, 0.8);
            backdrop-filter: blur(5px);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.75rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }
        .filter-btn:hover { border-color: var(--accent-teal); }
        .filter-btn.active {
            background: var(--accent-teal);
            color: #000;
            border-color: var(--accent-teal);
            box-shadow: 0 0 15px rgba(0, 255, 204, 0.3);
        }

        /* --- Event Grid --- */
        .event-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        /* --- Event Card Styling --- */
        .event-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 25px;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease;
        }
        .event-card:hover {
            border-color: #444;
            transform: translateY(-5px);
            background: #141414;
        }
        .cat-label {
            font-size: 0.65rem;
            color: var(--text-dim);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: block;
        }
        .event-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        /* Eligibility Tags */
        .tag {
            font-size: 0.65rem;
            font-weight: 700;
            padding: 4px 8px;
            border-radius: 3px;
            display: inline-block;
            text-transform: uppercase;
        }
        .tag-both { background: rgba(59, 130, 246, 0.15); color: var(--tag-both); }
        .tag-college { background: rgba(168, 85, 247, 0.15); color: var(--tag-college); }
        .tag-internal { background: rgba(239, 68, 68, 0.15); color: var(--tag-internal); }

        /* --- PAINTBALL SPECIAL ATTRACTION --- */
        .special-attraction-card {
            grid-column: 1 / -1;
            position: relative;
            padding: 100px 40px;
            text-align: center;
            border-radius: 8px;
            overflow: hidden;
            background-color: #000;
            background-image: url('upload/techno-2026/games.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            border: 2px solid #333;
            margin-bottom: 20px;
        }
        .special-attraction-card::before {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            background: radial-gradient(circle, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.9) 100%);
            z-index: 1;
        }
        .attraction-content {
            position: relative;
            z-index: 2;
            animation: textPulse 3s infinite ease-in-out;
        }
        .special-attraction-card h2 { 
            font-size: clamp(2rem, 8vw, 4rem);
            margin: 10px 0;
            color: #fff;
            font-weight: 900;
            letter-spacing: 5px;
            text-shadow: 0 0 20px rgba(255, 0, 85, 0.8);
            text-transform: uppercase;
        }
        .special-attraction-card .sub-text {
            color: #ccc;
            font-size: 1.2rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        /* Animations */
        @keyframes textPulse {
            0%, 100% { transform: scale(1); opacity: 0.9; }
            50% { transform: scale(1.05); opacity: 1; }
        }

        @media (max-width: 768px) {
            .special-attraction-card { background-attachment: scroll; padding: 70px 20px; }
            .event-grid { grid-template-columns: 1fr; }
        }
    </style>

    <div class="container">
        <div class="tj-header">
            <h1>TECHNO JASHAN <span>2026</span></h1>
            <p>Inter-College Cultural, Technical & Career Fest</p>
        </div>

        <!-- Filter Tabs -->
        <div class="filter-wrapper">
            <button class="filter-btn active" onclick="filterEvents('all', this)">All Events</button>
            <button class="filter-btn" onclick="filterEvents('cultural', this)">Cultural</button>
            <button class="filter-btn" onclick="filterEvents('sports', this)">Sports</button>
            <button class="filter-btn" onclick="filterEvents('technical', this)">Technical & Academic</button>
            <button class="filter-btn" onclick="filterEvents('fun', this)">Fun & Engagement</button>
            <button class="filter-btn" onclick="filterEvents('online', this)">Online Games</button>
        </div>

        <div class="event-grid" id="eventGrid">
            
            <!-- SPECIAL ATTRACTION (Fixed at Top) -->
            <div class="special-attraction-card" data-category="fun">
                <div class="attraction-content">
                    <span class="tag tag-both" style="font-size: 0.9rem; padding: 5px 15px;">Main Attraction</span>
                    <h2>PAINTBALL GAME</h2>
                    <p class="sub-text">(Have a feel of REAL PUBG)</p>
                </div>
            </div>

            <!-- CULTURAL EVENTS -->
            <div class="event-card" data-category="cultural">
                <div><span class="cat-label">Cultural</span><div class="event-title">Solo Dance</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="cultural">
                <div><span class="cat-label">Cultural</span><div class="event-title">Solo Singing</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="cultural">
                <div><span class="cat-label">Cultural</span><div class="event-title">Couple Dance</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="cultural">
                <div><span class="cat-label">Cultural</span><div class="event-title">Group Dance</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="cultural">
                <div><span class="cat-label">Cultural</span><div class="event-title">Battle of Bands</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="cultural">
                <div><span class="cat-label">Cultural</span><div class="event-title">Ramp Show (Theme based)</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>

            <!-- SPORTS -->
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">Cricket</div></div>
                <span class="tag tag-internal">Internal Only</span>
            </div>
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">Futsal</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">Volleyball</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">Kabaddi</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">Tug-O-War</div></div>
                <span class="tag tag-internal">Internal Only</span>
            </div>
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">ARM Wrestling</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="sports">
                <div><span class="cat-label">Sports</span><div class="event-title">Athletics (Track & Field)</div></div>
                <span class="tag tag-internal">Internal Only</span>
            </div>

            <!-- TECHNICAL OR ACADEMIC -->
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Coding Contest (IT/CS)</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Open Quiz</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Marketing War (AD-MAD)</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Debate or Extempore</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Poetry Slam</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Photography Contest</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Short Film/ Reel/ Meme Making</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Stand-up Comedy</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">SHARK Tank Event</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Technical</span><div class="event-title">Face Painting</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Pharmacy</span><div class="event-title">Drug Formulation Contest</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Nursing</span><div class="event-title">First Aid Contest</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Medical</span><div class="event-title">Health Quiz</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Paramedical</span><div class="event-title">Analyse and Report (X-Rays/Scans)</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>
            <div class="event-card" data-category="technical">
                <div><span class="cat-label">Medical</span><div class="event-title">Poster on Health Awareness</div></div>
                <span class="tag tag-college">Colleges Only</span>
            </div>

            <!-- FUN & ENGAGEMENT -->
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">Treasure Hunt</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">Spin Wheel</div></div>
                <span class="tag tag-internal">Internal Only</span>
            </div>
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">Dart Game</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">1-Minute Games</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">Open Mic</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">Eat or Drink Challenge</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="fun">
                <div><span class="cat-label">Fun</span><div class="event-title">Escape Room</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>

            <!-- ONLINE GAMES -->
            <div class="event-card" data-category="online">
                <div><span class="cat-label">Online</span><div class="event-title">Free Fire</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="online">
                <div><span class="cat-label">Online</span><div class="event-title">LAN Games</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>
            <div class="event-card" data-category="online">
                <div><span class="cat-label">Online</span><div class="event-title">VR Games</div></div>
                <span class="tag tag-both">Schools & Colleges</span>
            </div>

        </div>
    </div>

    <script>
        function filterEvents(category, btn) {
            // Update Active Class on Buttons
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Filter the Cards
            const cards = document.querySelectorAll('.event-card, .special-attraction-card');
            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</section>

<!-- Events End -->
            <section id="highlights-video" class="tj-video-section pt-6 pb-6 position-relative">
                <div class="container position-relative z-1">
                    <div class="tj-video-heading text-center text-white">
                        <h2>A Glimpse of Technojashan</h2>
                    </div>
                    <div class="row justify-content-center g-4">

          <div class="col-lg-6 col-md-10 col-12">
          <div class="tj-video-embed" style="position:relative;width:100%;height:350px;overflow:hidden;">
      <iframe 
        src="https://www.youtube.com/embed/PoY-mTub0EY?autoplay=1&mute=1&loop=1&playlist=PoY-mTub0EY&controls=0&playsinline=1&modestbranding=1&rel=0"
        frameborder="0"
        allow="autoplay; encrypted-media"
        allowfullscreen
        style="position:absolute;top:50%;left:50%;width:177.78%;height:100%;transform:translate(-50%,-50%);pointer-events:none;">
      </iframe>
    </div>
  </div>

  <div class="col-lg-6 col-md-10 col-12">
    <div class="tj-video-embed" style="position:relative;width:100%;height:350px;overflow:hidden;">
      <iframe 
        src="https://www.youtube.com/embed/DeDXYhXrUo0?autoplay=1&mute=1&loop=1&playlist=DeDXYhXrUo0&controls=0&playsinline=1&modestbranding=1&rel=0"
        frameborder="0"
        allow="autoplay; encrypted-media"
        allowfullscreen
        style="position:absolute;top:50%;left:50%;width:177.78%;height:100%;transform:translate(-50%,-50%);pointer-events:none;">
      </iframe>
    </div>
  </div>

</div>
                </div>
            </section>
            <style>
                .marquee-container {
                    overflow: hidden;
                    width: 100%;
                }

                .marquee-track {
                    display: flex;
                    gap: 70px;
                    animation: scroll 6s linear infinite;
                    align-items: center;
                }
                .marquee-item p{
                    text-align:center;

                }
                .marquee-track img {
                    height: 200px;
                }

                @keyframes scroll {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(-50%);
                    }
                }
            </style>
            <section id="sponsored" class="sponsored-section events-section pt-6 pb-6 position-relative">
                <div class="container position-relative z-1">
                    <div class="main-heading s-f text-center text-white">
                        <h2>Sponsored By</h2>
                    </div>
                    <div class="marquee-container">
                        <div class="marquee-track">
                            <!-- Original Items -->
                            <div class="marquee-item">
                                <img src="upload/techno-2026/cbc-logo.webp" alt="Career Buddy Club">
                                <p>Career Buddy Club</p>
                            </div>
                            <div class="marquee-item">
                                <img src="upload/techno-2026/PYM.avif" alt="Plan Your Memories">
                                <p>Plan Your Memories</p>
                            </div>
                            <div class="marquee-item">
                                <img src="upload/techno-2026/inanna-logo.webp" alt="Inanna">
                                <p>Inanna</p>
                            </div>

                            <!-- Duplicate for seamless loop -->
                            <div class="marquee-item">
                                <img src="upload/techno-2026/cbc-logo.webp" alt="Career Buddy Club">
                                <p>Career Buddy Club</p>
                            </div>
                            <div class="marquee-item">
                                <img src="upload/techno-2026/PYM.avif" alt="Plan Your Memories">
                                <p>Plan Your Memories</p>
                            </div>
                            <div class="marquee-item">
                                <img src="upload/techno-2026/inanna-logo.webp" alt="Inanna">
                                <p>Inanna</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <style>
        /* Sponsorship Section Styles */
        .sponsorship-wrapper {
            background-color: #000;
            color: #fff;
            padding: 60px 20px;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        .sponsorship-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .sponsorship-header h2 {
            font-size: 2.5rem;
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
            background: linear-gradient(90deg, #00f2fe 0%, #4facfe 100%);
            -webkit-text-fill-color: transparent;

        }

        .sponsor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Individual Cards */
        .sponsor-card {
            background: #111;
            border: 1px solid #222;
            border-radius: 16px;
            padding: 30px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }

        .sponsor-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            border-color: #444;
        }

        /* Tier Specific Accents */
        .tier-title {
            border-top: 4px solid #00f2fe;
        }

        .tier-co {
            border-top: 4px solid #a18cd1;
        }

        .tier-gold {
            border-top: 4px solid #ffd700;
        }

        .tier-silver {
            border-top: 4px solid #c0c0c0;
        }

        .tier-event {
            border-top: 4px solid #ff416c;
        }

        .sponsor-card h3 {
            margin: 0;
            font-size: 1.5rem;
            letter-spacing: 1px;
        }

        .sponsor-price {
            font-size: 1.8rem;
            font-weight: bold;
            margin: 15px 0;
            color: #fff;
        }

        .benefit-list {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            flex-grow: 1;
        }

        .benefit-list li {
            padding: 8px 0;
            color: #bbb;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
        }

        .benefit-list li::before {
            content: "✓";
            color: inherit;
            margin-right: 10px;
            font-weight: bold;
        }

        /* Event Specific Grid */
        .event-sub-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-top: 15px;
        }

        .event-box {
            background: #1a1a1a;
            padding: 10px;
            border-radius: 8px;
            font-size: 0.8rem;
            text-align: center;
            border: 1px solid #333;
        }

        .event-box span {
            display: block;
            font-weight: bold;
            color: #ff416c;
        }

        /* Responsive Fix for Title Sponsor */
        @media (min-width: 992px) {
            .sponsor-card.tier-title {
                grid-column: span 2;
                flex-direction: row;
                align-items: center;
                gap: 40px;
            }

            .title-content {
                flex: 1;
            }
        }

        @media (max-width: 600px) {
            .sponsor-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <section class="sponsorship-wrapper">
        <div class="main-heading s-f text-center text-white">
            <h2>Sponsorship Opportunities</h2>
            <p>Partner with Techno Jashan and showcase your brand to thousands.</p>
        </div>

        <div class="sponsor-grid">
            <!-- TITLE SPONSOR -->
            <div class="sponsor-card tier-title">
                <div class="title-content">
                    <h3>TITLE SPONSOR</h3>
                    <div class="sponsor-price">₹4–5 Lakhs</div>
                    <p style="color: #00f2fe; font-weight: bold;">"Techno Jashan powered by [Your Brand]"</p>
                </div>
                <ul class="benefit-list" style="color: #00f2fe;">
                    <li>Prime logo placement (Stage LED & All Creatives)</li>
                    <li>Opening ceremony recognition</li>
                    <li>Premium space / On-stage Brand Discussion</li>
                    <li>Full Social media promotions</li>
                </ul>
            </div>

            <!-- CO-POWERED -->
            <div class="sponsor-card tier-co">
                <h3>CO-POWERED</h3>
                <div class="sponsor-price">₹2–3 Lakhs</div>
                <ul class="benefit-list">
                    <li>Logo on stage backdrop LED</li>
                    <li>Branding in key areas</li>
                    <li>Exhibition stall</li>
                    <li>Digital promotions</li>
                </ul>
            </div>

            <!-- GOLD -->
            <div class="sponsor-card tier-gold">
                <h3 style="color: #ffd700;">GOLD SPONSOR</h3>
                <div class="sponsor-price">₹1–1.5 Lakhs</div>
                <ul class="benefit-list">
                    <li>Logo on posters & banners</li>
                    <li>Stall space</li>
                    <li>Social media mentions</li>
                </ul>
            </div>

            <!-- SILVER -->
            <div class="sponsor-card tier-silver">
                <h3 style="color: #c0c0c0;">SILVER SPONSOR</h3>
                <div class="sponsor-price">₹50k–1 Lakh</div>
                <ul class="benefit-list">
                    <li>Logo on standees</li>
                    <li>Limited branding</li>
                    <li>Stall space</li>
                </ul>
            </div>

            <!-- EVENT SPONSOR -->
            <div class="sponsor-card tier-event">
                <h3>EVENT SPONSOR</h3>
                <div class="sponsor-price">₹30k–50k</div>
                <p style="font-size: 0.85rem; color: #888;">Sponsor specific high-footfall events:</p>
                <div class="event-sub-grid">
                    <div class="event-box">Battle of Bands <span>₹50,000</span></div>
                    <div class="event-box">Fashion Show <span>₹75,000</span></div>
                    <div class="event-box">Coding Contest <span>₹25,000</span></div>
                    <div class="event-box">Healthcare Zone <span>₹50,000</span></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pop up Button -->
     <!-- POPUP SECTION START -->
<section id="popup-section">

  <!-- Popup -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <span class="close-btn">&times;</span>
      <img src="upload/techno-2026/tech-artist.jpeg" alt="Popup Image">
    </div>
  </div>

</section>

<style>
/* Overlay */
.popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.75);
  display: none;
  justify-content: center;  /* horizontal center */
  align-items: center;      /* vertical center */
  z-index: 9999;
}

/* Popup Box */
.popup-content {
  position: relative;
  max-width: 500px;
  width: 90%;
  animation: popupFade 0.4s ease;
}

/* Image */
.popup-content img {
  width: 100%;
  border-radius: 12px;
  display: block;
}

/* Close Button */
.close-btn {
  position: absolute;
  top: -12px;
  right: -12px;
  background: #fff;
  color: #000;
  font-size: 22px;
  padding: 6px 12px;
  cursor: pointer;
  border-radius: 50%;
  font-weight: bold;
  line-height: 1;
}

/* Animation */
@keyframes popupFade {
  from {
    opacity: 0;
    transform: scale(0.85);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}
</style>

<script>
// Show popup on page load
window.onload = function () {
  document.getElementById("popup").style.display = "flex";
};

// Close button click
document.querySelector(".close-btn").onclick = function () {
  document.getElementById("popup").style.display = "none";
};

// Click outside to close (optional but good UX)
document.getElementById("popup").onclick = function (e) {
  if (e.target.id === "popup") {
    this.style.display = "none";
  }
};
</script>
<!-- POPUP SECTION END -->
     <!-- Pop end  -->

    <section id="contact" class="tj-final-cta">
        <div class="container">
            <div class="tj-final-cta-inner">
                <div class="tj-cta-left">
                    <img src="upload/techno-2026/logo.webp" alt="Guru Nanak College Logo" class="tj-cta-logo">
                    <div class="tj-cta-contact">
                        <h4>CONTACT DETAILS</h4>
                        <p>
                            <span class="tj-contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                    <path
                                        d="M6.62 10.79a15.054 15.054 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.72 11.72 0 0 0 3.68.59 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.3 21 3 13.7 3 4a1 1 0 0 1 1-1h3.47a1 1 0 0 1 1 1c0 1.26.2 2.5.59 3.68a1 1 0 0 1-.24 1.02l-2.2 2.09z" />
                                </svg>
                            </span>
                            +91-7300777717
                        </p>
                        <p>
                            <span class="tj-contact-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                                    <path
                                        d="M20 4H4a2 2 0 0 0-2 2v.2l10 6.25L22 6.2V6a2 2 0 0 0-2-2zm2 4.55-9.47 5.92a1 1 0 0 1-1.06 0L2 8.55V18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8.55z" />
                                </svg>
                            </span>
                            events@gnc.edu.in
                        </p>
                        <p>Guru Nanak College, Dehradun</p>
                    </div>
                </div>

                <div class="tj-cta-center text-center">
                    <h2>Register Now &amp; Be Part of Techno Jashan 👉</h2>
                    <a href="https://forms.gle/vF3VaveaGZJPQpj56" class="tj-btn-primary" target="_blank"
                        rel="noopener noreferrer">Register Now</a>
                </div>

                <div class="tj-cta-right">
                    <img src="upload/techno-2026/techno-Qr.jpeg" alt="Techno Jashan Registration QR" class="tj-cta-qr-img">
                    <p class="tj-cta-sponsored">QR Code tickets sponsored by <a href="https://qr-code-ticket.com" target="_blank">qr-code-ticket.com</a></p>
                </div>
            </div>
        </div>

        <div class="tj-sub-footer">
            <div class="container text-center">
                <p>Copyright All rights reserved 2026 GNC</p>
            </div>
        </div>
    </section>

    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/techno-loading-animation.js"></script>
</body>

</html>