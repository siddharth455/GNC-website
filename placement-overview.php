<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions | GNC Dehradun</title>
    <!-- Tailwind CDN Removed -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #000;
            overflow-x: hidden;
            margin: 0;
        }

        /* --- Tailwind Replacements --- */
        
        /* Layout & Position */
        .relative { position: relative; }
        .absolute { position: absolute; }
        .fixed { position: fixed; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .bottom-12 { bottom: 3rem; }
        .left-0 { left: 0; }
        .bottom-10 { bottom: 2.5rem; }
        .right-10 { right: 2.5rem; }
        .top-2 { top: 0.5rem; }
        .right-3 { right: 0.75rem; }
        .-bottom-2 { bottom: -0.5rem; }
        .right-6 { right: 1.5rem; }
        .z-0 { z-index: 0; }
        .z-10 { z-index: 10; }
        .z-20 { z-index: 20; }
        .z-30 { z-index: 30; }
        .z-40 { z-index: 40; }
        .z-9999 { z-index: 9999; }
        .overflow-hidden { overflow: hidden; }
        .overflow-x-hidden { overflow-x: hidden; }

        /* Sizing */
        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .w-12 { width: 3rem; }
        .h-12 { height: 3rem; }
        .h-1 { height: 0.25rem; }
        .h-4 { height: 1rem; }
        .w-4 { width: 1rem; }
        .w-5 { width: 1.25rem; }
        .h-5 { height: 1.25rem; }
        .min-h-screen { min-height: 100vh; }
        .min-h-550px { min-height: 550px; }
        .min-h-500px { min-height: 500px; }
        .max-w-md { max-width: 28rem; }
        .max-w-3xl { max-width: 48rem; }
        .max-w-5xl { max-width: 64rem; }
        .max-w-1024px { max-width: 1024px; }
        .w-320px { width: 320px; }
        .object-cover { object-fit: cover; }
        .bg-cover { background-size: cover; }
        .bg-center { background-position: center; }

        /* Flex & Grid */
        .flex { display: flex; }
        .inline-flex { display: inline-flex; }
        .inline-block { display: inline-block; }
        .flex-col { flex-direction: column; }
        .flex-row { flex-direction: row; }
        .flex-wrap { flex-wrap: wrap; }
        .justify-center { justify-content: center; }
        .justify-start { justify-content: flex-start; }
        .items-center { align-items: center; }
        .items-start { align-items: flex-start; }
        .items-end { align-items: flex-end; }
        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .gap-2 { gap: 0.5rem; }
        .gap-3 { gap: 0.75rem; }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        .gap-8 { gap: 2rem; }

        /* Spacing */
        .m-0 { margin: 0; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .ml-1 { margin-left: 0.25rem; }
        .ml-3 { margin-left: 0.75rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 0.75rem; }
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-10 { margin-bottom: 2.5rem; }
        .mb-12 { margin-bottom: 3rem; }
        .pl-6 { padding-left: 1.5rem; }
        .pr-6 { padding-right: 1.5rem; }
        .pt-56 { padding-top: 14rem; }
        .pb-1 { padding-bottom: 0.25rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .px-10 { padding-left: 2.5rem; padding-right: 2.5rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-8 { padding-top: 2rem; padding-bottom: 2rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .py-24 { padding-top: 6rem; padding-bottom: 6rem; }
        .p-6 { padding: 1.5rem; }

        /* Typography */
        .font-sans { font-family: 'Inter', sans-serif; }
        .font-light { font-weight: 300; }
        .font-normal { font-weight: 400; }
        .font-medium { font-weight: 500; }
        .font-bold { font-weight: 700; }
        .font-extrabold { font-weight: 800; }
        .font-black { font-weight: 900; }
        .uppercase { text-transform: uppercase; }
        .leading-tight { line-height: 1.25; }
        .leading-relaxed { line-height: 1.625; }
        .tracking-wider { letter-spacing: 0.05em; }
        .tracking-widest { letter-spacing: 0.1em; }
        .text-left { text-align: left; }
        .text-center { text-align: center; }
        
        .text-sm { font-size: 0.875rem; line-height: 1.25rem; }
        .text-lg { font-size: 1.125rem; line-height: 1.75rem; }
        .text-xl { font-size: 1.25rem; line-height: 1.75rem; }
        .text-2xl { font-size: 1.5rem; line-height: 2rem; }
        .text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
        .text-10px { font-size: 10px; }
        .text-9px { font-size: 9px; }
        .text-11px { font-size: 11px; }
        .text-12px { font-size: 12px; }
        .text-13px { font-size: 13px; }

        /* Colors & Backgrounds */
        .bg-black { background-color: #000; }
        .bg-white { background-color: #fff; }
        .text-white { color: #fff; }
        .text-white-90 { color: rgba(255, 255, 255, 0.9); }
        .text-white-95 { color: rgba(255, 255, 255, 0.95); }
        .text-gray-400 { color: #9ca3af; }
        .text-gray-500 { color: #6b7280; }
        .text-gray-800 { color: #1f2937; }
        .text-gray-900 { color: #111827; }
        .text-cyan-600 { color: #0891b2; }
        .bg-cyan-600 { background-color: #0891b2; }
        .bg-custom-blue { background-color: #00b5fb; }
        .bg-custom-red { background-color: #e31e24; }
        .text-orange-500 { color: #f97316; }

        .border-l-2 { border-left-width: 2px; }
        .border-l-4 { border-left-width: 4px; }
        .border-r { border-right-width: 1px; }
        .border-b { border-bottom-width: 1px; }
        .border-b-2 { border-bottom-width: 2px; }
        .border { border-width: 1px; }
        
        .border-cyan-600 { border-color: #0891b2; }
        .border-white-20 { border-color: rgba(255, 255, 255, 0.2); }
        .border-gray-100 { border-color: #f3f4f6; }
        .border-gray-200 { border-color: #e5e7eb; }
        .border-orange-500 { border-color: #f97316; }

        /* Effects */
        .opacity-0 { opacity: 0; }
        .opacity-40 { opacity: 0.4; }
        .opacity-70 { opacity: 0.7; }
        .opacity-80 { opacity: 0.8; }
        .opacity-90 { opacity: 0.9; }
        .shadow-lg { box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); }
        .shadow-xl { box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04); }
        .shadow-2xl { box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25); }
        .rounded-sm { border-radius: 0.125rem; }
        .rounded-xl { border-radius: 0.75rem; }
        .rounded-full { border-radius: 9999px; }
        .brightness-0 { filter: brightness(0); }
        .brightness-50 { filter: brightness(0.5); }
        .brightness-40 { filter: brightness(0.4); }
        .blur-sm { filter: blur(4px); }
        .invert { filter: invert(1); }
        
        .transition-all { transition-property: all; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-duration: 150ms; }
        .duration-300 { transition-duration: 300ms; }
        .transition-transform { transition-property: transform; }
        .translate-y-4 { transform: translateY(1rem); }
        .rotate-45 { transform: rotate(45deg); }

        /* Pseudo-classes */
        .hover-bg-cyan-700:hover { background-color: #0e7490; }
        .hover-text-gray-600:hover { color: #4b5563; }
        .group:hover .group-hover-translate-x-1 { transform: translateX(0.25rem); }
        .last-border-0:last-child { border-width: 0; }
        .hidden { display: none; }

        /* Media Queries */
        @media (min-width: 640px) {
            .sm-block { display: block; }
        }
        @media (min-width: 768px) {
            .md-text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .md-text-base { font-size: 1rem; line-height: 1.5rem; }
            .md-px-24 { padding-left: 6rem; padding-right: 6rem; }
            .md-text-6xl { font-size: 3.75rem; line-height: 1; }
            .md-text-xl { font-size: 1.25rem; line-height: 1.75rem; }
            .md-text-2xl { font-size: 1.5rem; line-height: 2rem; }
            .md-px-12 { padding-left: 3rem; padding-right: 3rem; }
            .md-mt-40 { margin-top: 10rem; }
            .md-mt-20 { margin-top: 5rem; }
            .md-mt-64 { margin-top: 16rem; }
        }
        @media (min-width: 1024px) {
            .lg-px-24 { padding-left: 6rem; padding-right: 6rem; }
            .lg-grid-cols-12 { grid-template-columns: repeat(12, minmax(0, 1fr)); }
            .lg-col-span-6 { grid-column: span 6 / span 6; }
            .lg-text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
            .lg-text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
        }

        /* Slide Dot helper for JS */
        .slide-dot {
            height: 0.25rem;
            width: 2rem;
            transition: all 0.3s;
            background-color: rgba(255, 255, 255, 0.2);
            margin-right: 0.5rem;
        }
        .slide-dot.active {
            background-color: #0891b2; /* bg-cyan-600 */
        }

        /* --- Existing Styles Preserved --- */

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
            right: 0;
            left: auto;
            height: 45%; 
            z-index: 15;
            pointer-events: none;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
        }

        @media (min-width: 768px) {
             .student-image-wrap {
                height: 50%;
                right: 5%;
             }
             .gnc-placement-clean{
                padding: 40px 0;
             }
        }

        @media (min-width: 1024px) {
            .student-image-wrap {
                height: 75%;
                right: auto;
                left: 50%;
                transform: translateX(-50%);
                justify-content: center;
            }
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
            animation: bgFromLeft 1.2s ease forwards;
        }

        .slide-item.active .slide-student {
            animation: studentFromRight 1.2s ease forwards;
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
                <img src="upload/infra/acad-image.webp" class="w-full h-full object-cover brightness-50 blur-sm">
                <div class="absolute inset-0 bg-overlay"></div>
            </div>
            
            <div>
                <div class="student-image-wrap slide-student">
                    <img src="upload/infra/abhishek.webp" alt="Student Image">
                </div>
            </div>

            <div class="container mx-auto px-6 lg-px-24 z-20 relative h-full pt-56">
                <div class="w-full grid grid-cols-1 lg-grid-cols-12 gap-8 items-start">
                    <div class="lg-col-span-6 text-white text-left animate-up">
                        <h1 class="text-2xl md-text-3xl lg-text-3xl font-normal mb-3 uppercase leading-tight">
                            Best-Rated Pharmaceutical <span class="font-black text-cyan-600">College</span> <br>
                            in Dehradun (Uttarakhand)
                        </h1>
                        <div class="w-12 h-1 bg-cyan-600 mb-6"></div>
                        <p class="text-sm md-text-base opacity-90 max-w-md mb-8 font-normal leading-relaxed">
                           Driving innovation in 2025 by shaping professionals through inclusive education and groundbreaking research.
                        </p>
                        <a href="https://application.gnc.edu.in/" class="bg-custom-blue hover-bg-cyan-700 text-white font-bold py-4 px-10 text-12px uppercase tracking-widest mb-10 inline-flex items-center transition-all rounded-sm shadow-xl group">
                            Apply Today <i class="fa-solid fa-arrow-right ml-3 group-hover-translate-x-1 transition-transform"></i>
                      </a>
                        
                        <div class="flex flex-row items-center justify-start gap-4 border-l-2 border-cyan-600 pl-6 mb-10">
                            <div class="text-left leading-tight">
                                <p class="text-base font-black uppercase">Abhishek Pandey</p>
                                <p class="text-12px text-gray-400">Placed in</p>
                                <p class="text-12px text-gray-400">Coachywoods</p>
                               
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-item">
            <div class="absolute inset-0 slide-bg">
                <img src="upload/infra/place-banner.webp" class="w-full h-full object-cover brightness-40 blur-sm">
                <div class="absolute inset-0 bg-overlay"></div>
            </div>

            <div>
                <div class="student-image-wrap slide-student">
                    <img src="upload/infra/ritika.webp" alt="Student Image">
                </div>
            </div>
            
            <div class="container mx-auto px-6 lg-px-24 z-20 relative h-full pt-56">
                <div class="w-full grid grid-cols-1 lg-grid-cols-12 gap-8 items-start">
                    <div class="lg-col-span-6 text-white text-left animate-up">
                        <h1 class="text-2xl md-text-3xl lg-text-4xl font-normal mb-3 uppercase leading-tight">
                            Global <span class="font-black text-cyan-600">Placements</span> <br>
                            & Top Rankings
                        </h1>
                        <div class="w-12 h-1 bg-cyan-600 mb-6"></div>
                        <p class="text-sm md-text-base opacity-90 max-w-md mb-8 font-normal leading-relaxed">
                            Join the university ranked amongst the top 5% globally with a track record of 9500+ placement offers.
                        </p>
                        <a  href ='/Gnc-website/admissions.php' class="bg-custom-blue hover-bg-cyan-700 text-white font-bold py-4 px-10 text-12px uppercase tracking-widest mb-10 inline-flex items-center transition-all rounded-sm shadow-xl group">
                            Explore Programs <i class="fa-solid fa-arrow-right ml-3 group-hover-translate-x-1 transition-transform"></i>
                      </a>

                        <div class="flex flex-row items-center justify-start gap-4 border-l-2 border-cyan-600 pl-6 mb-10">
                            <div class="text-left leading-tight">
                                <p class="text-base font-black uppercase">Ritika Aggarwal</p>
                                <p class="text-12px text-gray-400">Placed in</p>
                                <p class="text-12px text-gray-400">Hike Education</p>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="text-left">
                                    <p class="text-9px uppercase font-bold text-gray-400">Total Offers</p>
                                    <p class="text-2xl font-black">9,500 <span class="text-sm">+</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="absolute bottom-12 left-0 w-full z-40">
            <div class="container mx-auto px-6 lg-px-24">
                <div class="w-full grid grid-cols-1 lg-grid-cols-12">
                    <div class="lg-col-span-6 flex flex-col items-start gap-4">
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

    <div class="relative w-full min-h-550px flex flex-col justify-center px-6 md-px-24 py-16 overflow-hidden">
        <img src="upload/infra/gnc.webp" class="absolute inset-0 w-full h-full object-cover z-0" alt="GNC Hero">
        <div class="absolute inset-0 hero-overlay z-10"></div>

        <div class="relative z-20 max-w-5xl">
            <h1 class="text-white text-4xl md-text-6xl font-extrabold leading-tight mb-4">With a focus on innovation and academic strength, <br>Guru Nanak College Dehradun creates pathways for success.</h1>
            <p class="text-white-95 text-lg md-text-xl font-light mb-12 max-w-3xl leading-relaxed">The institution goes beyond traditional learning by nurturing talent, values, and professional skills essential for tomorrow’s pharmaceutical professionals.</p>
            
            <div class="flex flex-wrap items-center gap-6 text-white-90">
                <div class="flex items-center gap-2 border-r border-white-20 pr-6 last-border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/3074/3074058.png" class="w-5 h-5 invert"> 
                    <span class="text-10px font-bold uppercase tracking-wider">Academic Excellence</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white-20 pr-6 last-border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/993/993891.png" class="w-5 h-5 invert"> 
                    <span class="text-10px font-bold uppercase tracking-wider">Industry Patronage</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white-20 pr-6 last-border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/2622/2622112.png" class="w-5 h-5 invert"> 
                    <span class="text-10px font-bold uppercase tracking-wider">Global Exposure</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white-20 pr-6 last-border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/1063/1063376.png" class="w-5 h-5 invert"> 
                    <span class="text-10px font-bold uppercase tracking-wider">Choice Based Careers</span>
                </div>
                <div class="flex items-center gap-2 border-r border-white-20 pr-6 last-border-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/2168/2168931.png" class="w-5 h-5 invert"> 
                    <span class="text-10px font-bold uppercase tracking-wider">Return on Investment</span>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-custom-red py-8 text-center shadow-lg relative z-30">
        <h2 class="text-white text-lg md-text-2xl font-black uppercase tracking-widest">As a member of Guru Nanak College, you have an edge!</h2>
    </div>

    <div class="relative py-24 px-6 md-px-12 lg-px-24 bg-cover bg-center" style="background-image: url('upload/infra/gnc.webp');">
        <div class="absolute"></div>
    
        <div class="relative z-10 max-w-1024px mx-auto stagger-grid">
            
            <div class="column-offset md-mt-40">
                <div class="bg-gnc-teal card-inner text-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/3074/3074058.png" class="w-12 h-12 invert mb-6 opacity-80">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with<br>Internships and On-the-job Trainings</h3>
                    <p class="text-13px leading-relaxed opacity-90">During your course of studies, you will have ample opportunities to gain industry experience through internships and on-the-job training.</p>
                </div>
            </div>

            <div class="flex flex-col gap-3">
                <div class="bg-gnc-yellow card-inner text-gray-900">
                    <img src="https://cdn-icons-png.flaticon.com/512/993/993891.png" class="w-12 h-12 mb-6 opacity-70">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with <br>Corporate Connect Program</h3>
                    <p class="text-13px leading-relaxed font-medium">We have established the Career Competency Program (CCP) at Guru Nanak College with the aim of boosting our graduates' job prospects and creating an environment that attracts a greater number of multinational corporations (MNCs).</p>
                </div>
                <div class="bg-gnc-white card-inner text-gray-800 border-l-4 border-gray-200">
                    <img src="https://cdn-icons-png.flaticon.com/512/2622/2622112.png" class="w-12 h-12 mb-6 opacity-40">
                    <h3 class="text-xl font-bold mb-3 uppercase text-gray-900 leading-tight">Edge with <br>Career Resource Centre</h3>
                    <p class="text-12px leading-relaxed">Empowerment comes through awareness. At Guru Nanak College, the Career Resource Centre is dedicated to enlightening, linking, and offering guidance to students regarding placement prospects.</p>
                </div>
            </div>

            <div class="column-offset md-mt-20">
                <div class="bg-gnc-dark card-inner text-white min-h-500px">
                    <img src="https://cdn-icons-png.flaticon.com/512/1063/1063376.png" class="w-12 h-12 invert mb-6 opacity-70">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with<br>Accreditations & Validations</h3>
                    <p class="text-13px leading-relaxed opacity-90">Accreditations and validations stand as the foundational pillars of accuracy and trustworthiness, playing a pivotal role in attracting multinational corporations to our campus for recruitment purposes.</p>
                </div>
            </div>

            <div class="column-offset md-mt-64">
                <div class="bg-gnc-pink card-inner text-white">
                    <img src="https://cdn-icons-png.flaticon.com/512/2168/2168931.png" class="w-12 h-12 invert mb-6 opacity-80">
                    <h3 class="text-2xl font-bold mb-4 uppercase leading-tight">Edge with Foreign  <br>Internships & Semester Exchange</h3>
                    <p class="text-13px leading-relaxed opacity-90">Participating in Global Internships and Semester Exchange programs enhances your marketability by providing you with a unique blend of international exposure, hands-on experience, and a wealth of knowledge and skills acquired on the job.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed bottom-10 right-10 z-9999 flex flex-col items-end">
        <div id="scholarship-modal" class="hidden opacity-0 translate-y-4 bg-white p-6 rounded-xl shadow-2xl w-320px mb-4 border border-gray-100 relative transition-all duration-300">
            <button id="close-modal" class="absolute top-2 right-3 text-gray-400 hover-text-gray-600 text-xl">×</button>
            <div class="flex items-center gap-2 mb-2">
                <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                <span class="text-11px font-bold text-gray-500 uppercase">GNC 2026</span>
            </div>
            <h4 class="text-sm font-black text-gray-900 mb-2">₹200 Crore in Scholarships Await!</h4>
            <a href="#" class="inline-block text-11px font-black text-orange-500 uppercase border-b-2 border-orange-500 pb-1">Apply Now !</a>
            <div class="absolute -bottom-2 right-6 w-4 h-4 bg-white rotate-45 border-r border-b border-gray-100"></div>
        </div>

        <!-- <button id="bell-trigger" class="bg-custom-blue w-12 h-12 rounded-full shadow-2xl flex items-center justify-center transition-transform hover-scale-110 vibrating-forever">
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

            if(bell) {
                bell.onclick = (e) => {
                    e.stopPropagation();
                    stopVibration();
                    
                    modal.classList.remove('hidden');
                    setTimeout(() => {
                        modal.classList.remove('opacity-0', 'translate-y-4');
                    }, 10);
                };
            }

            if(close) {
                close.onclick = (e) => {
                    e.stopPropagation();
                    modal.classList.add('opacity-0', 'translate-y-4');
                    
                    setTimeout(() => {
                        modal.classList.add('hidden');
                        // Restart vibration after 3 seconds
                        vibrationTimeout = setTimeout(startVibration, 3000);
                    }, 300);
                };
            }
        });
    </script>
</section>

  <!-- Placement Slider -->
<section class="placement-slider-pure" id="placement-section">
    <style>
        .placement-slider-pure {
            padding: 40px 0;
            background: #f8f9fa;
            width: 100%;
            overflow: hidden; 
            position: relative;
        }

        /* Large Screen: Limit width to 1150px */
        .placement-container {
            
            margin: 0 auto;
            position: relative;
           
        }

        .placement-row {
            width: 100%;
            margin-bottom: 25px;
            display: flex;
        }

        .placement-track {
            display: flex;
            width: max-content;
            gap: 30px;
            will-change: transform;
        }

        /* Desktop Animation Logic */
        @media (min-width: 769px) {
            .placement-track.scroll-left { animation: desktop-left 400s linear infinite; }
            .placement-track.scroll-right { animation: desktop-right 400s linear infinite; }
            .placement-row:hover .placement-track { animation-play-state: paused; }
            
            /* Edge Fading for Desktop */
            .placement-container::before, .placement-container::after {
                content: ""; position: absolute; top: 0; width: 100px; height: 100%; z-index: 2; pointer-events: none;
            }
            .placement-container::before { left: 0; background: linear-gradient(to right, #f8f9fa, transparent); }
            .placement-container::after { right: 0; background: linear-gradient(to left, #f8f9fa, transparent); }
        }

        @keyframes desktop-left { from { transform: translateX(0); } to { transform: translateX(-50%); } }
        @keyframes desktop-right { from { transform: translateX(-50%); } to { transform: translateX(0); } }

        .placement-track img {
            height: 280px;
            width: auto;
            min-width: 250px;
            padding: 10px;
            background: #fff;
            border-radius: 12px;
            object-fit: contain;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        /* --- Mobile "Slick-Style" Snapshot --- */
        @media (max-width: 768px) {
            .placement-container { max-width: 100vw; }
            .placement-track { 
                gap: 0; 
                /* Animation timing for the "Slide" movement */
                transition: transform 0.7s cubic-bezier(0.645, 0.045, 0.355, 1.000); 
            }
            .placement-track img {
                width: 100vw; /* Exact screen width */
                min-width: 100vw;
                max-width: 100vw;
                height: auto;
                background: transparent;
                box-shadow: none;
                padding: 10px 20px;
            }
        }
    </style>

    <h3 class="text-center" style="text-align: center; font-family: sans-serif;">Success Gallery</h3>
    <p class="text-center" style="text-align: center; margin-bottom: 20px; color: #666;">Our students at global industry leaders.</p>

    <div class="placement-container">
        <div class="placement-row">
            <div class="placement-track scroll-left" id="m-track1">
                <?php
                for ($i = 1; $i <= 150; $i++) {
                    echo '<img src="upload/placement/placement-1%20(' . $i . ').webp" alt="Placement">';
                }
                ?>
            </div>
        </div>

        <div class="placement-row">
            <div class="placement-track scroll-right" id="m-track2">
                <?php
                for ($i = 150; $i >= 1; $i--) {
                    echo '<img src="upload/placement/placement-1%20(' . $i . ').webp" alt="Placement">';
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        (function() {
            if (window.innerWidth <= 768) {
                const track1 = document.getElementById('m-track1');
                const track2 = document.getElementById('m-track2');
                const images = track1.getElementsByTagName('img');
                const totalSlides = images.length;
                let currentSlide = 0;

                // Stop the CSS continuous animation so JS can handle the "Slick" snap
                track1.style.animation = "none";
                track2.style.animation = "none";

                function performSlide() {
                    currentSlide++;
                    
                    if (currentSlide >= totalSlides) {
                        // Reset to first slide without transition
                        currentSlide = 0;
                        track1.style.transition = "none";
                        track2.style.transition = "none";
                        track1.style.transform = "translateX(0)";
                        track2.style.transform = "translateX(0)";
                        
                        // Small delay to re-enable transitions
                        setTimeout(() => {
                            track1.style.transition = "transform 0.7s cubic-bezier(0.645, 0.045, 0.355, 1.000)";
                            track2.style.transition = "transform 0.7s cubic-bezier(0.645, 0.045, 0.355, 1.000)";
                        }, 50);
                    } else {
                        // Slide by exactly 100% of the viewport width
                        const moveAmount = currentSlide * 100;
                        track1.style.transform = `translateX(-${moveAmount}vw)`;
                        track2.style.transform = `translateX(-${moveAmount}vw)`;
                    }
                }

                // Set the "Hold" time (3000ms = 3 seconds)
                setInterval(performSlide, 3000);
            }
        })();
    </script>
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
                // Removed Tailwind Classes in JS
                dot.className = `slide-dot ${i === 0 ? 'active' : ''}`;
                dot.id = `dot-${i}`;
                indicatorContainer.appendChild(dot);
            });

            function showSlide(index) {
    slides[currentSlide].classList.remove('active');

    // force reflow to reset animations
    void slides[currentSlide].offsetWidth;

    currentSlide = (index + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
    
    // Update dots
    document.querySelectorAll('.slide-dot').forEach((dot, i) => {
        if (i === currentSlide) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });

    resetTimer();
}


            window.nextSlide = function() { showSlide(currentSlide + 1); }
            window.prevSlide = function() { showSlide(currentSlide - 1); }

            function resetTimer() {
                clearInterval(slideInterval);
                slideInterval = setInterval(window.nextSlide, 10000);
            }

            resetTimer();
        });
    </script>
    <?php require "company-logo.php"?>
    <?php require "testimoni-2.php"?>
    <?php require "common/footer.php"; ?>
</body>
</html>