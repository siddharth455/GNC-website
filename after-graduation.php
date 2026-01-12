<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Master Program After Graduation | Guru Nanak College Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elevate your career with Job Oriented Master Programs at GNC Dehradun. Specialized postgraduate courses in Paramedical, Life Sciences, and Agriculture.">
    
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Swiper Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root {
            --gnc-blue: #0056b3;
            --gnc-light-blue: #00aae7;
            --gnc-yellow: #ffcb05;
            --text-dark: #333;
            --bg-light: #f4f7f9;
            --gnc-orange: #ff6f61;
            --grid-bg: #0072bc;
        }

        body { font-family: 'Open Sans', sans-serif; background-color: #fff; margin: 0; padding: 0; overflow-x: hidden; }

        /* --- HERO SECTION ANIMATIONS --- */
        @keyframes paneFadeInUp { from { opacity: 0; transform: translateY(100px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes titleFadeInDown { from { opacity: 0; transform: translateY(-50px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes contentSlideInRight { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: translateX(0); } }

        .hero-section {
            background: url('upload/After-Graduation-head.webp') no-repeat center center;
            background-size: cover;
            min-height: 1050px;
            position: relative;
            display: flex;
            align-items: flex-start;
        }

        .hero-overlay-pane {
            background: var(--gnc-orange);
            backdrop-filter: blur(12px);
            width: 100%;
            max-width: 500px;
            position: absolute;
            top: 0; right: 100px; height: 100%; z-index: 10;
            padding: 220px 40px 100px 40px;
            -webkit-mask-image: linear-gradient(to bottom, black 85%, transparent 100%);
            mask-image: linear-gradient(to bottom, black 92%, transparent 100%);
            box-sizing: border-box;
            animation: paneFadeInUp 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        .hero-title { font-weight: 800; text-transform: uppercase; line-height: 1.1; animation: titleFadeInDown 1s ease-out 0.5s forwards; opacity: 0; }
        .hero-title span { color:var(--gnc-blue); font-size: 22px; display: block; animation: contentSlideInRight 0.8s ease-out 1s forwards; opacity: 0; }
        .hero-title strong { color:var(--gnc-blue); font-size: 30px; display: block; animation: contentSlideInRight 0.8s ease-out 1.2s forwards; opacity: 0; }
        .hero-title big { color: var(--gnc-blue); font-size: 55px; display: block; animation: contentSlideInRight 0.8s ease-out 1.4s forwards; opacity: 0; }
        .hero-subtext { color: #fff; font-size: 15px; margin: 20px 0; line-height: 1.5; animation: contentSlideInRight 0.8s ease-out 1.6s forwards; opacity: 0; }

        /* --- MASONRY GRID --- */
        .program-masonry { background: var(--grid-bg); padding: 80px 0; }
        .masonry-container { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; align-items: start; }
        .grid-col { display: flex; flex-direction: column; gap: 20px; }
        .program-card { background: #fff; padding: 25px; border-radius: 4px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        .program-card h4 { font-size: 14px; font-weight: 800; color: var(--gnc-blue); text-transform: uppercase; border-bottom: 1px solid #eee; padding-bottom: 12px; margin: 0 0 15px 0; }
        .program-card ul { list-style: none; padding: 0; margin: 0; }
        .program-card ul li { margin-bottom: 10px; position: relative; padding-left: 20px; }
        .program-card ul li::before { content: "\f061"; font-family: "Font Awesome 6 Free"; font-weight: 900; position: absolute; left: -10px; top: 4px; font-size: 10px; color: #ccc; }
        .program-card ul li a { text-decoration: none; color: #444; font-size: 13px; font-weight: 600; transition: 0.3s; display: block; }
        .program-card ul li a:hover { color: var(--gnc-light-blue); transform: translateX(5px); }

        .research-promo-card {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.8)), url('upload/infra/hm.webp');
            background-size: cover; background-position: center;
            padding: 30px 20px; border-radius: 8px; min-height: 400px;
            display: flex; flex-direction: column; justify-content: flex-end; color: #fff;
        }
        .banner-card {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('upload/infra/img-2.webp');
            background-size: cover; background-position: center;
            padding: 30px 20px; border-radius: 8px; min-height: 450px;
            display: flex; flex-direction: column; justify-content: flex-end; color: #fff;
        }
        .apply-btn { background: var(--gnc-yellow); color: #000; text-decoration: none; padding: 12px 20px; font-weight: 800; font-size: 12px; text-transform: uppercase; border-radius: 4px; display: inline-block; width: fit-content; margin-top: 15px; transition: 0.3s; }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .hero-overlay-pane { right: 0; max-width: 100%; padding-top: 180px; }
            .masonry-container { grid-template-columns: 1fr; }
        }

        /* Standout-Section */
                .standout-section { padding: 80px 0; background: #fff; }
        .standout-flex { display: flex; gap: 40px; align-items: center; }
        .standout-content { flex: 1; }
        .standout-image { flex: 1; position: relative; }
        .standout-image img { width: 100%; box-shadow: 20px 20px 0 var(--bg-light); }
        
        .standout-title { font-size: 36px; font-weight: 800; color: var(--gnc-blue); margin-bottom: 20px; }
        .standout-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 25px; }
        .standout-item { 
            display: flex; 
            align-items: center; 
            gap: 10px; 
            background: var(--bg-light); 
            padding: 12px; 
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #444;
            transition: 0.3s;
        }
        .standout-item i { color: var(--gnc-orange); font-size: 18px; }
        .standout-item:hover { background: var(--gnc-blue); color: #fff; transform: translateY(-3px); }

          @media (max-width: 1100px) { 
            
            .standout-flex { flex-direction: column; }
        }
        @media (max-width: 768px) { 
            
            .standout-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body>
    <?php require "common/header.php" ?>

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-overlay-pane">
            <div class="hero-title">
                <span>Advance Your Potential</span>
                <strong>Master Programs</strong>
                <big>after Graduation</big>
            </div>
            <p class="hero-subtext">Deepen your technical expertise and build research-driven leadership. Our postgraduate programs at GNC prepare you for global excellence.</p>
            <div class="form-container-inside" style="opacity:2">
                <div id="ee-form-6">
                    <script src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/applycbc/ee-form-widget/form-6/widget.js" defer></script>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAMS MASONRY -->
    <section class="program-masonry">
        <div class="container">
            <div class="masonry-container">
                <div class="grid-col">
                    <div class="program-card">
                        <h4><i class="fa-solid fa-microscope"></i> Life & Allied Science</h4>
                        <ul>
                            <li><a href="https://gnc.edu.in/msc-microbiology-Colleges-in-Dehradun">M.Sc. Microbiology</a></li>
                            <li><a href="https://gnc.edu.in/msc-food-tech-Colleges-in-Dehradun-Uttarakhand">M.Sc. Food Technology</a></li>
                            <li><a href="https://gnc.edu.in/msc-zoology-Colleges-in-Dehradun-Uttarakhand">M.Sc. Zoology</a></li>
                            <li><a href="https://gnc.edu.in/msc-chemistry-Colleges-in-Dehradun-Uttarakhand">M.Sc. Chemistry</a></li>
                            <li><a href="https://gnc.edu.in/msc-physics-College-in-Dehradun-Uttarakhand">M.Sc. Physics</a></li>
                            <li><a href="https://gnc.edu.in/msc-botany-Colleges-in-Uttarakhand">M.Sc. Botany</a></li>
                        </ul>
                    </div>
                    <div class="research-promo-card">
                        <h3 style="font-weight: 800; font-size: 22px;">India's Premier Research-Intensive Campus</h3>
                        <a href="https://application.gnc.edu.in/" class="apply-btn">Apply Today</a>
                    </div>
                </div>

                <div class="grid-col">
                    <div class="program-card">
                        <h4><i class="fa-solid fa-kit-medical"></i> Paramedical Programs</h4>
                        <ul>
                            <li><a href="masters-in-lab-technician.php">Master of Medical Laboratory Technology</a></li>
                            <li><a href="https://gnc.edu.in/Best-MPT-Master-of-Physiotherapy-College.php">Master of Physiotherapy</a></li>
                        </ul>
                    </div>
                    <div class="program-card">
                        <h4><i class="fa-solid fa-heart-pulse"></i> Health Science</h4>
                        <ul>
                            <li><a href="https://gnc.edu.in/master-of-public-health">Master of Public Health</a></li>
                            <li><a href="https://gnc.edu.in/master-of-hospital-administration">Master of Hospital Administration</a></li>
                        </ul>
                    </div>
                </div>

                <div class="grid-col">
                    <div class="program-card banner-card">
                        <h5 style="font-weight: 800; font-size: 20px; margin:0;">BUILD A SUCCESSFUL PROFESSIONAL CAREER</h5>
                        <a href="https://application.gnc.edu.in/" class="apply-btn">APPLY TODAY</a>
                    </div>
                    <div class="program-card">
                        <h4><i class="fa-solid fa-wheat-awn"></i> Agriculture Science</h4>
                        <ul>
                            <li><a href="https://gnc.edu.in/Best-Msc-Agronomy-Colleges-in-Dehradun">M.Sc. Agronomy</a></li>
                            <li><a href="https://gnc.edu.in/msc-horticulture">M.Sc. Horticulture</a></li>
                        </ul>
                    </div>
                </div>

                <div class="grid-col">
                    <div class="program-card" style="background: rgba(0, 40, 80, 0.9); color: #fff;">
                        <h4 style="color: #fff; border-bottom: 1px solid rgba(255,255,255,0.2);">Quick Links</h4>
                        <ul>
                            <li><a href="placement-overview.php" style="color: #fff;">Placement</a></li>
                            <li><a href="admissions.php" style="color: #fff;">Admissions</a></li>
                            <li><a href="scholarships.php" style="color: #fff;">Scholarships</a></li>
                            <li><a href="contact.php" style="color: #fff;">How to reach us ?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require "facilities.php"; ?>
    <section class="standout-section">
        <div class="container">
            <div class="standout-flex">
                <div class="standout-content">
                    <h2 class="standout-title">What makes GNC Standout?</h2>
                    <p style="color:#666; font-size: 16px; line-height: 1.6;">Guru Nanak College, Dehradun introduces a fresh perspective to fundamental concepts. Our diverse array of learning opportunities empowers students to choose the course that suits them best, combining convenience and effectiveness.</p>
                    
                    <div class="standout-grid">
                        <div class="standout-item"><i class="fa-solid fa-check-circle"></i> Conducive Learning Environment</div>
                        <div class="standout-item"><i class="fa-solid fa-globe"></i> Holistic Development</div>
                        <div class="standout-item"><i class="fa-solid fa-face-smile"></i> Student Satisfaction</div>
                        <div class="standout-item"><i class="fa-solid fa-chalkboard-user"></i> Learned Faculty</div>
                        <div class="standout-item"><i class="fa-solid fa-briefcase"></i> Training & Placement</div>
                        <div class="standout-item"><i class="fa-solid fa-users-rectangle"></i> Workshops & Seminars</div>
                        <div class="standout-item"><i class="fa-solid fa-graduation-cap"></i> Teaching Excellence</div>
                        <div class="standout-item"><i class="fa-solid fa-lightbulb"></i> Research & Innovation</div>
                    </div>

                    <p style="margin-top: 30px; font-style: italic; color: #555;">We cherish the ideals of providing value-based technical education that would enable our students to achieve empowerment, problem-solving skills, and innovation.</p>
                </div>
                <div class="standout-image">
                    <img src="upload/gncmh-scaled.webp" alt="GNC Standout">
                </div>
            </div>
        </div>
    </section>
    <?php require "company-logo.php" ?>
    <?php require "application-process.php" ?>
    <?php require "testimoni-2.php" ?>
    <?php require "common/footer.php" ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>