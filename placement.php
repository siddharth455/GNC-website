<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions | Chandigarh University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #000;
            overflow-x: hidden;
            margin: 0;
        }

        .bg-overlay {
            background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.2) 50%, rgba(0,0,0,0.8) 100%);
        }

        .slide-item {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            pointer-events: none;
            z-index: 1;
        }
        .slide-item.active {
            opacity: 1;
            z-index: 10;
            pointer-events: auto;
        }

        .animate-up {
            transform: translateY(20px);
            opacity: 0;
        }
        .active .animate-up {
            animation: slideUp 0.6s ease-out forwards;
        }
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .form-input-custom {
            background: #ffffff !important;
            border: 1px solid #d1d5db !important;
            border-radius: 4px !important;
            padding: 6px 10px !important;
            font-size: 11px !important;
            color: #374151;
            width: 100%;
            outline: none;
        }

        .student-image-wrap {
            position: absolute;
            bottom: 0; 
            left: 50%;
            transform: translateX(-50%);
            height: 70%; 
            z-index: 15;
            pointer-events: none;
            display: flex;
            align-items: flex-end;
            
        }
        .student-image-wrap img {
            height: 100%;
            width: auto;
            object-fit: contain;
        }

        .nav-btn {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        .nav-btn:hover {
            background: #00b5fb;
            border-color: #00b5fb;
            transform: scale(1.1);
        }

        #hero-slider {
            height: 100vh;
            min-height: 750px;
        }

        /* Slider animation */
        /* =========================================
   SLIDE DIRECTION ANIMATIONS
========================================= */

/* Default states (off-screen) */
.slide-bg {
    transform: translateX(-80px);
    opacity: 0;
}

.slide-student {
    transform: translateX(80px);
    opacity: 0;
}

/* Active slide animations */
.slide-item.active .slide-bg {
    animation: bgFromLeft 0.50s ease forwards;
}

.slide-item.active .slide-student {
    animation: studentFromRight 0.50s ease forwards;
}

/* Keyframes */
@keyframes bgFromLeft {
     from {
        transform: translateX(80px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes studentFromRight {
     from {
        transform: translateX(80px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

    </style>
</head>
<body>
    
    <?php require "common/header.php"; ?>

    <section id="hero-slider" class="relative w-full bg-black overflow-hidden">
        
        <div class="slide-item active">
            <div class="absolute inset-0 slide-bg">
                <img src="upload/infra/acad-image.webp" class="w-full h-full object-cover brightness-[0.5] blur-sm">
                <div class="absolute inset-0 bg-overlay"></div>
            </div>
            
            <div>
                <div class="student-image-wrap slide-student">
                    <img src="upload/infra/abhishek.webp" alt="Student Image">
                </div>
            </div>

            <div class="container mx-auto px-6 lg:px-24 z-20 relative h-full pt-56">
                <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-6 text-white text-left animate-up">
                        <h1 class="text-2xl md:text-3xl lg:text-3xl font-normal mb-3 uppercase leading-tight">
                            Best-Rated Pharmaceutical <span class="font-black text-cyan-600">College</span> <br>
                            in Dehradun (Uttarakhand)
                        </h1>
                        <div class="w-12 h-1 bg-cyan-600 mb-6"></div>
                        <p class="text-sm md:text-base opacity-90 max-w-md mb-8 font-normal leading-relaxed">
                           Driving innovation in 2025 by shaping professionals through inclusive education and groundbreaking research.
                        </p>
                        <button class="bg-[#00b5fb] hover:bg-cyan-700 text-white font-bold py-4 px-10 text-[12px] uppercase tracking-widest mb-10 inline-flex items-center transition-all rounded-sm shadow-xl group">
                            Apply Today <i class="fa-solid fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        
                        <div class="flex flex-row items-center justify-start gap-4 border-l-2 border-cyan-600 pl-6 mb-10">
                            <div class="text-left leading-tight hidden sm:block">
                                <p class="text-base font-black uppercase">Abhishek Pandey</p>
                                <p class="text-[10px] text-gray-400">Placed in</p>
                                <p class="text-[10px] text-gray-400">Coachywoods</p>
                               
                            </div>
                            <div class="flex items-center gap-4">
                                
                                
                                <img src="images/Lam_Research_Logo.webp" class="h-4 brightness-0 invert opacity-80">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item">
            <div class="absolute inset-0 slide-bg">
                <img src="upload/infra/place-banner.webp" class="w-full h-full object-cover brightness-[0.4] blur-sm">
                <div class="absolute inset-0 bg-overlay"></div>
            </div>

            <div>
                <div class="student-image-wrap slide-student">
                    <img src="upload/infra/ritika.webp" alt="Student Image">
                </div>
            </div>
            
            <div class="container mx-auto px-6 lg:px-24 z-20 relative h-full pt-56">
                <div class="w-full grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    <div class="lg:col-span-6 text-white text-left animate-up">
                        <h1 class="text-2xl md:text-3xl lg:text-4xl font-normal mb-3 uppercase leading-tight">
                            Global <span class="font-black text-cyan-600">Placements</span> <br>
                            & Top Rankings
                        </h1>
                        <div class="w-12 h-1 bg-cyan-600 mb-6"></div>
                        <p class="text-sm md:text-base opacity-90 max-w-md mb-8 font-normal leading-relaxed">
                            Join the university ranked amongst the top 5% globally with a track record of 9500+ placement offers.
                        </p>
                        <button class="bg-[#00b5fb] hover:bg-cyan-700 text-white font-bold py-4 px-10 text-[12px] uppercase tracking-widest mb-10 inline-flex items-center transition-all rounded-sm shadow-xl group">
                            Explore Programs <i class="fa-solid fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform"></i>
                        </button>

                        <div class="flex flex-row items-center justify-start gap-4 border-l-2 border-cyan-600 pl-6 mb-10">
                            <div class="text-left leading-tight hidden sm:block">
                                <p class="text-base font-black uppercase">Ritika Aggarwal</p>
                                <p class="text-[10px] text-gray-400">Placed in</p>
                                <p class="text-[10px] text-gray-400">Hike Education</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="text-left">
                                    <p class="text-[9px] uppercase font-bold text-gray-400">Total Offers</p>
                                    <p class="text-2xl font-black">9,500 <span class="text-sm">+</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="absolute bottom-12 left-0 w-full z-[40]">
            <div class="container mx-auto px-6 lg:px-24">
                <div class="w-full grid grid-cols-1 lg:grid-cols-12">
                    <div class="lg:col-span-6 flex flex-col items-start gap-4">
                        <div class="flex items-center gap-4">
                            <div onclick="prevSlide()" class="nav-btn"><i class="fa-solid fa-chevron-left"></i></div>
                            <div onclick="nextSlide()" class="nav-btn"><i class="fa-solid fa-chevron-right"></i></div>
                        </div>
                        <div class="flex gap-2 ml-1" id="slide-indicators"></div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!--Youtube-Section  -->

    <section class="gnc-placement-clean">
    <style>
        :root {
            --primary-orange: #ff5722;
            --text-dark: #1e293b;
            --text-gray: #64748b;
        }

        .gnc-placement-clean {
            background-color: #ffffff; /* White background as requested */
            padding: 80px 0;
            color: var(--text-dark);
            font-family: 'Poppins', sans-serif;
        }

        /* --- VIDEO BLOCK --- */
        .video-wrapper-modern {
            background: #f8fafc; /* Light gray subtle contrast */
            border-radius: 30px;
            padding: 25px;
            border: 1px solid #e2e8f0;
        }

        .video-frame {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            aspect-ratio: 16 / 9;
        }

        .video-frame iframe {
            width: 100%;
            height: 100%;
        }

        /* --- CONTENT BLOCK --- */
        .placement-info-box {
            padding-left: 40px;
        }

        .tag-excellence {
            background: rgba(255, 87, 34, 0.1);
            color: var(--primary-orange);
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .placement-info-box h2 {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .highlight-accent { color: var(--primary-orange); }

        .btn-main-orange {
            background: var(--primary-orange);
            color: #fff;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 600;
            border: none;
            transition: 0.3s ease;
            margin-right: 15px;
            box-shadow: 0 4px 15px rgba(255, 87, 34, 0.3);
        }

        .btn-main-orange:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 87, 34, 0.4);
        }

        .btn-outline-dark {
            background: transparent;
            color: var(--text-dark);
            padding: 14px 32px;
            border-radius: 10px;
            border: 1px solid #cbd5e1;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-outline-dark:hover {
            background: #f1f5f9;
        }

        /* --- STATS COUNTER --- */
        .stats-divider {
            margin-top: 45px;
            border-top: 1px solid #e2e8f0;
            padding-top: 35px;
            display: flex;
            gap: 50px;
        }

        .stat-card h4 { 
            font-weight: 800; 
            margin-bottom: 2px; 
            font-size: 1.6rem;
            color: var(--text-dark);
        }
        
        .stat-card p { 
            color: var(--text-gray); 
            font-size: 14px; 
            margin: 0;
        }

        @media (max-width: 991px) {
            .placement-info-box { padding-left: 0; margin-top: 45px; }
            .placement-info-box h2 { font-size: 2.2rem; }
            .stats-divider { gap: 25px; flex-wrap: wrap; }
        }
    </style>

    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-lg-7">
                <div class="video-wrapper-modern">
                    <div class="video-frame">
                        <iframe 
                            src="https://www.youtube.com/embed/PpkHaa1lPjI?autoplay=1&mute=1&loop=1&playlist=PpkHaa1lPjI" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="placement-info-box">
                    <span class="tag-excellence">Placement Cell Excellence</span>
                    <h2>Unlock Your Potential with <br><span class="highlight-accent">Rs. 1.01 CR Placements!</span></h2>
                    
                    <p class="text-muted mb-4">
                        See how Guru Nanak College students prepare and bag record-breaking placements at top multinational corporations. Over 100+ corporates visited in the current session.
                    </p>
                    
                    

                    <div class="stats-divider">
                        <div class="stat-card">
                            <h4>100+</h4>
                            <p>Recruiters</p>
                        </div>
                        <div class="stat-card">
                            <h4>1.01 CR</h4>
                            <p>Highest Package</p>
                        </div>
                        <div class="stat-card">
                            <h4>95%</h4>
                            <p>Placement Rate</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


     <!-- Global Landing Section -->

   <section id="gnc-global-landing" class="relative min-h-screen overflow-x-hidden font-sans bg-white">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #gnc-global-landing { font-family: 'Inter', sans-serif; }
        /* Hero Overlay to ensure text readability */
        .hero-overlay { background: linear-gradient(to right, rgba(29, 145, 154, 0.85) 0%, rgba(77, 177, 145, 0.7) 50%, rgba(244, 162, 97, 0.5) 100%); }
        
        /* GNC Card Colors */
        .bg-gnc-teal { background-color: #1d919a; }
        .bg-gnc-yellow { background-color: #f6c444; }
        .bg-gnc-white { background-color: #ffffff; }
        .bg-gnc-dark { background-color: #333333; }
        .bg-gnc-pink { background-color: #d33b65; }

        /* Continuous Vibration Animation */
        @keyframes bell-vibrate {
            0% { transform: rotate(0); }
            10% { transform: rotate(15deg); }
            20% { transform: rotate(-15deg); }
            30% { transform: rotate(15deg); }
            40% { transform: rotate(-15deg); }
            50% { transform: rotate(10deg); }
            60% { transform: rotate(-10deg); }
            100% { transform: rotate(0); }
        }
        
        .vibrating-forever { 
            animation: bell-vibrate 0.6s linear infinite; 
            transform-origin: top center;
        }

        /* Staggered Grid with Little Gap */
        .stagger-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px; /* The "little gap" requested */
            align-items: start;
        }

        .card-inner { 
            padding: 2.5rem 2rem; 
            min-height: 420px; 
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            position: relative;
            transition: transform 0.3s ease;
        }

        @media (max-width: 1024px) {
            .stagger-grid { grid-template-columns: 1fr; gap: 24px; }
            .column-offset { margin-top: 0 !important; }
        }
    </style>

    <div class="relative w-full min-h-[550px] flex flex-col justify-center px-6 md:px-24 py-16 overflow-hidden">
        <img src="upload/infra/gnc.webp" class="absolute inset-0 w-full h-full object-cover z-0" alt="GNC Hero">
        <div class="absolute inset-0 hero-overlay z-10"></div>

        <div class="relative z-20 max-w-5xl">
            <h1 class="text-white text-4xl md:text-6xl font-extrabold leading-tight mb-4">With a focus on innovation and academic strength, <br>Guru Nanak College Dehradun creates pathways for success.</h1>
            <p class="text-white/95 text-lg md:text-xl font-light mb-12 max-w-3xl leading-relaxed">The institution goes beyond traditional learning by nurturing talent, values, and professional skills essential for tomorrow’s pharmaceutical professionals.</p>
            
            <div class="flex flex-wrap items-center gap-6 text-white/90">
                <div class="flex items-center gap-2 border-r border-white/20 pr-6 last:border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/3074/3074058.png" class="w-5 h-5 invert"> 
                    <span class="text-[10px] font-bold uppercase tracking-wider">Academic Excellence</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white/20 pr-6 last:border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/993/993891.png" class="w-5 h-5 invert"> 
                    <span class="text-[10px] font-bold uppercase tracking-wider">Industry Patronage</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white/20 pr-6 last:border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/2622/2622112.png" class="w-5 h-5 invert"> 
                    <span class="text-[10px] font-bold uppercase tracking-wider">Global Exposure</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white/20 pr-6 last:border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/1063/1063376.png" class="w-5 h-5 invert"> 
                    <span class="text-[10px] font-bold uppercase tracking-wider">Choice Based Careers</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white/20 pr-6 last:border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/2168/2168931.png" class="w-5 h-5 invert"> 
                    <span class="text-[10px] font-bold uppercase tracking-wider">Return on Investment</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#e31e24] py-8 text-center shadow-lg relative z-30">
        <h2 class="text-white text-lg md:text-2xl font-black uppercase tracking-widest">As a member of Guru Nanak College, you have an edge!</h2>
    </div>

    <div class="relative py-24 px-6 md:px-12 lg:px-24 bg-cover bg-center" style="background-image: url('upload/infra/gnc.webp');">
        <div class="absolute"></div>
    
        <div class="relative z-10 max-w-[1024px] mx-auto stagger-grid">
            
            <div class="column-offset md:mt-40">
                <div class="bg-gnc-teal card-inner text-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/3074/3074058.png" class="w-12 h-12 invert mb-6 opacity-80">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with<br>Internships and On-the-job Trainings</h3>
                    <p class="text-[13px] leading-relaxed opacity-90">During your course of studies, you will have ample opportunities to gain industry experience through internships and on-the-job training.</p>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="bg-gnc-yellow card-inner text-gray-900">
                    <img src="https://cdn-icons-png.flaticon.com/512/993/993891.png" class="w-12 h-12 mb-6 opacity-70">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with <br>Corporate Connect Program</h3>
                    <p class="text-[13px] leading-relaxed font-medium">We have established the Career Competency Program (CCP) at Guru Nanak College with the aim of boosting our graduates' job prospects and creating an environment that attracts a greater number of multinational corporations (MNCs).</p>
                </div>
                <div class="bg-gnc-white card-inner text-gray-800 border-l-4 border-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/512/2622/2622112.png" class="w-12 h-12 mb-6 opacity-40">
                    <h3 class="text-xl font-bold mb-3 uppercase text-gray-900 leading-tight">Edge with <br>Career Resource Centre</h3>
                    <p class="text-[12px] leading-relaxed">Empowerment comes through awareness. At Guru Nanak College, the Career Resource Centre is dedicated to enlightening, linking, and offering guidance to students regarding placement prospects.</p>
                </div>
            </div>

            <div class="column-offset md:mt-20">
                <div class="bg-gnc-dark card-inner text-white min-h-[500px]">
                    <img src="https://cdn-icons-png.flaticon.com/512/1063/1063376.png" class="w-12 h-12 invert mb-6 opacity-70">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with<br>Accreditations & Validations</h3>
                    <p class="text-[13px] leading-relaxed opacity-90">Accreditations and validations stand as the foundational pillars of accuracy and trustworthiness, playing a pivotal role in attracting multinational corporations to our campus for recruitment purposes.</p>
                </div>
            </div>

            <div class="column-offset md:mt-64">
                <div class="bg-gnc-pink card-inner text-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/2168/2168931.png" class="w-12 h-12 invert mb-6 opacity-80">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with Foreign  <br>Internships & Semester Exchange</h3>
                    <p class="text-[13px] leading-relaxed opacity-90">Participating in Global Internships and Semester Exchange programs enhances your marketability by providing you with a unique blend of international exposure, hands-on experience, and a wealth of knowledge and skills acquired on the job.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-10 right-10 z-[9999] flex flex-col items-end">
        <div id="scholarship-modal" class="hidden opacity-0 translate-y-4 bg-white p-6 rounded-xl shadow-2xl w-[320px] mb-4 border border-gray-100 relative transition-all duration-300">
            <button id="close-modal" class="absolute top-2 right-3 text-gray-400 hover:text-gray-600 text-xl">×</button>
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                <span class="text-[11px] font-bold text-gray-500 uppercase">GNC 2026</span>
            </div>
            <h4 class="text-sm font-black text-gray-900 mb-2">₹200 Crore in Scholarships Await!</h4>
            <a href="#" class="inline-block text-[11px] font-black text-orange-500 uppercase border-b-2 border-orange-500 pb-1">Apply Now !</a>
            <div class="absolute -bottom-2 right-6 w-4 h-4 bg-white rotate-45 border-r border-b border-gray-100"></div>
        </div>

        <!-- <button id="bell-trigger" class="bg-[#00b5fb] w-12 h-12 rounded-full shadow-2xl flex items-center justify-center transition-transform hover:scale-110 vibrating-forever">
            <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
        </button> -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bell = document.getElementById('bell-trigger');
            const modal = document.getElementById('scholarship-modal');
            const close = document.getElementById('close-modal');
            let vibrationTimeout;

            const startVibration = () => {
                bell.classList.add('vibrating-forever');
            };

            const stopVibration = () => {
                bell.classList.remove('vibrating-forever');
                if (vibrationTimeout) clearTimeout(vibrationTimeout);
            };

            bell.onclick = (e) => {
                e.stopPropagation();
                stopVibration();
                
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('opacity-0', 'translate-y-4');
                }, 10);
            };

            close.onclick = (e) => {
                e.stopPropagation();
                modal.classList.add('opacity-0', 'translate-y-4');
                
                setTimeout(() => {
                    modal.classList.add('hidden');
                    // Restart vibration after 3 seconds
                    vibrationTimeout = setTimeout(startVibration, 3000);
                }, 300);
            };
        });
    </script>
</section>

  <!-- Placement Slider -->

  <section class="placement-slider-pure">
    <style>
        .placement-slider-pure {
            padding: 30px 0;
            background: #f8f9fa;
            overflow: hidden;
            position: relative;
        }

        /* Professional Edge Fading Effect */
        .placement-slider-pure::before,
        .placement-slider-pure::after {
            content: "";
            position: absolute;
            top: 0;
            width: 15vw;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }
        .placement-slider-pure::before {
            left: 0;
            background: linear-gradient(to right, #f8f9fa, transparent);
        }
        .placement-slider-pure::after {
            right: 0;
            background: linear-gradient(to left, #f8f9fa, transparent);
        }

        .placement-row {
            width: 100%;
            overflow: hidden;
            margin-bottom: 30px;
            position: relative;
        }

        .placement-track {
            display: flex;
            gap: 40px;
            width: max-content;
            /* 500s creates a slow, prestigious crawl */
            animation: scroll-left 500s linear infinite;
        }

        .placement-row.reverse .placement-track {
            animation: scroll-right 500s linear infinite;
        }

        /* Pause on Hover: Important for user experience */
        .placement-row:hover .placement-track {
            animation-play-state: paused;
        }

        .placement-track img {
            height: 300px; /* Maintain requested size */
            width: auto;
            min-width: 250px;
            padding: 15px;
            background: #ffffff;
            border-radius: 15px;
            object-fit: contain;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .placement-track img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        @keyframes scroll-left {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        @keyframes scroll-right {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }

        /* Mobile specific adjustments */
        @media (max-width: 768px) {
            .placement-track img { 
                height: 150px; 
                min-width: 180px; 
            }
            .placement-track {
                animation-duration: 100s; /* Faster relative speed for shorter mobile width */
            }
            .placement-slider-pure::before,
            .placement-slider-pure::after { width: 50px; }
        }
    </style>

    <div class="placement-row">
        <h3 class="text-center">Success Gallery</h3>
<p class="text-center">Moments of pride as our students secure their future at industry leaders across the globe.</p>
        <div class="placement-track">
            <?php
            // We loop twice to make the 'translateX(-50%)' animation seamless
            for ($j = 0; $j < 2; $j++) {
                for ($i = 1; $i <= 150; $i++) {
                    echo '<img src="upload/placement/placement-1%20(' . $i . ').webp" alt="GNC Dehradun Placement Record">';
                }
            }
            ?>
        </div>
    </div>

    <div class="placement-row reverse">
        <div class="placement-track">
            <?php
            for ($j = 0; $j < 2; $j++) {
                for ($i = 150; $i >= 1; $i--) {
                    echo '<img src="upload/placement/placement-1%20(' . $i . ').webp" alt="GNC Dehradun Placement Record">';
                }
            }
            ?>
        </div>
    </div>
</section>

 <!-- Vision Section -->

   
   <section class="gnc-vision-skills py-5">
    <style>
        .gnc-vision-skills {
            background-color: #ffffff;
            font-family: 'Inter', sans-serif;
        }

        /* --- Vision Content --- */
        .vision-tag {
            color: #ff5722;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: block;
        }

        .vision-header {
            font-size: 32px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 20px;
        }

        .vision-p {
            color: #64748b;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 600px;
        }

        /* --- Best Practice Cards --- */
        .practice-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            height: 100%;
            border: 1px solid #f1f5f9;
            margin-bottom: 20px;
        }

        .practice-icon-box {
            width: 36px;
            height: 36px;
            background: rgba(255, 87, 34, 0.1);
            color: #ff5722;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .practice-card h5 {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .practice-card p {
            font-size: 13px;
            color: #64748b;
            margin: 0;
        }

        /* --- Skills Dark Card (Right Side) --- */
        .skills-dark-card {
            background: #0f172a;
            border-radius: 30px;
            padding: 40px;
            color: #ffffff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .skills-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 30px;
            font-size: 20px;
            font-weight: 700;
        }

        .skills-header i { color: #ff5722; font-size: 24px; }

        .skills-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 35px;
        }

        .skill-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #e2e8f0;
        }

        .skill-item i {
            color: #22c55e; /* Green checkmark */
            font-size: 14px;
        }

        /* --- Director Quote Box --- */
        .director-quote {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
        }

        .director-quote p {
            font-style: italic;
            font-size: 13px;
            color: #94a3b8;
            margin-bottom: 10px;
        }

        .director-name {
            color: #ff5722;
            font-weight: 700;
            font-size: 13px;
        }

        @media (max-width: 991px) {
            .skills-list { grid-template-columns: 1fr; }
            .gnc-vision-skills { padding-bottom: 40px; }
        }
    </style>

    <div class="container">
        <div class="row g-5 align-items-center">
            
            <div class="col-lg-7">
                <span class="vision-tag">OUR VISION</span>
                <h2 class="vision-header">Empowering Careers with Industry Insight</h2>
                <p class="vision-p">
                    At Guru Nanak College, Dehradun, our vision for placements is focused on empowering students with the necessary skills and opportunities for a seamless transition into their professional careers. We prioritize practical, industry-relevant training and maintain strong industry linkages to provide diverse placement opportunities.
                </p>

                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="practice-card">
                            <div class="practice-icon-box"><i class="fas fa-desktop"></i></div>
                            <h5>Flexible Training Modules</h5>
                            <p>Adaptable offline and online training programs designed to fit diverse schedules, ensuring every student receives comprehensive industry-aligned skill development.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="practice-card">
                            <div class="practice-icon-box"><i class="fas fa-sync-alt"></i></div>
                            <h5>Seamless Integration</h5>
                            <p>Harmonious blend of classroom learning, practical workshops, and real-world projects creating a cohesive pathway from academics to professional employment.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="practice-card">
                            <div class="practice-icon-box"><i class="fas fa-user-graduate"></i></div>
                            <h5>Student-Centric Process</h5>
                            <p>Personalized career guidance and mentorship tailored to individual strengths, aspirations, and goals, ensuring each student’s unique potential is fully realized.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="practice-card">
                            <div class="practice-icon-box"><i class="fas fa-brain"></i></div>
                            <h5>Adaptable Strategies</h5>
                            <p>Dynamic placement approaches accommodating varied learning styles, academic backgrounds, and career preferences to maximize opportunities for every student’s success.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="skills-dark-card">
                    <div class="skills-header">
                        <i class="fas fa-user-tie"></i>
                        Students Learn to:
                    </div>

                    <div class="skills-list">
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Resume & Cover Letter Writing</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Interview Skills Mastery</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Job Search Strategies</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Career Guidance</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Networking Skills</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Workplace Etiquette</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Access to Global Opportunities</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Industry Insights</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Soft Skills Development</div>
                        <div class="skill-item"><i class="fas fa-check-circle"></i> Personal Branding</div>
                    </div>

                    <div class="director-quote">
                        <p>"Our commitment extends beyond placement statistics we nurture professionals who carry forward the principles of excellence, integrity, and lifelong learning into every stage of their careers."</p>
                        <span class="director-name">— Placement Director, GNC</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.slide-item');
            let currentSlide = 0;
            let slideInterval;

            const indicatorContainer = document.getElementById('slide-indicators');
            slides.forEach((_, i) => {
                const dot = document.createElement('div');
                dot.className = `h-1 w-8 transition-all duration-300 ${i === 0 ? 'bg-cyan-600' : 'bg-white/20'}`;
                dot.id = `dot-${i}`;
                indicatorContainer.appendChild(dot);
            });

            function showSlide(index) {
    slides[currentSlide].classList.remove('active');

    // force reflow to reset animations
    void slides[currentSlide].offsetWidth;

    currentSlide = (index + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');

    resetTimer();
}


            window.nextSlide = function() { showSlide(currentSlide + 1); }
            window.prevSlide = function() { showSlide(currentSlide - 1); }

            function resetTimer() {
                clearInterval(slideInterval);
                slideInterval = setInterval(window.nextSlide, 6000);
            }

            resetTimer();
        });
    </script>
    <?php require "company-logo.php"?>
    <?php require "testimoni-2.php"?>
    <?php require "common/footer.php"; ?>
</body>
</html>
