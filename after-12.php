<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Job Oriented Professional Programs After 12th | GNC Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --gnc-blue: #0056b3;
            --gnc-light-blue: rgb(3 175 255);
            --gnc-yellow: #ffcb05;
            --text-dark: #333;
            --bg-light: #f4f7f9;
            --gnc-orange: rgb(251 123 28);
            --grid-bg: #0072bc;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* --- HERO SECTION & ANIMATIONS --- */
        @keyframes paneFadeInUp {
            from { opacity: 0; transform: translateY(100px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes titleFadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes contentSlideInRight {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .hero-section {
            background: url('upload/infra/after-12-image.webp') no-repeat center center;
            background-size: cover;
            min-height: 1000px;
            position: relative;
            display: flex;
            align-items: flex-start;
            justify-content: flex-end; 
        }

        .hero-overlay-pane {
            background: rgba(236, 236, 236, 0.6);
            width: 100%;
            max-width: 500px;
            position: absolute;
            top: 0; 
            right: 100px;
            height: 100%; 
            z-index: 10;
            padding: 240px 40px 100px 40px; 
            mask-image: linear-gradient(to bottom, black 97%, transparent 100%);
            box-sizing: border-box;
            animation: paneFadeInUp 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards;
        }

        .hero-title { 
            font-weight: 800; 
            text-transform: uppercase; 
            line-height: 1.1; 
            animation: titleFadeInDown 1s ease-out 0.5s forwards;
            opacity: 0;
        }

        .hero-title span { 
            color:var(--gnc-blue); font-size: 22px; display: block; 
            animation: contentSlideInRight 0.8s ease-out 1s forwards;
            opacity: 0;
        }
        .hero-title strong { 
            color:var(--gnc-blue); font-size: 30px; display: block; 
            animation: contentSlideInRight 0.8s ease-out 1.2s forwards;
            opacity: 0;
        }
        .hero-title big { 
            color: var(--gnc-blue); font-size: 55px; display: block; 
            animation: contentSlideInRight 0.8s ease-out 1.4s forwards;
            opacity: 0;
        }

        .hero-subtext { 
            color: #282727; font-size: 15px; margin: 20px 0; line-height: 1.5; 
            animation: contentSlideInRight 0.8s ease-out 1.6s forwards;
            opacity: 0;
        }

        .form-container-inside {
            animation: titleFadeInDown 0.5s ease-out 0.5s forwards;
            opacity: 0;
        }

        /* --- RESPONSIVE HERO FIXES --- */
        @media (max-width: 1200px) {
            .hero-overlay-pane { right: 50px; }
        }

        @media (max-width: 992px) {
            .hero-section { min-height: 800px; background-position: left center; }
            .hero-overlay-pane { 
                right: 0; 
                max-width: 450px; 
                padding-top: 150px; 
                -webkit-mask-image: none; 
                mask-image: none;
                background: rgba(241, 62, 46, 0.95); /* Ensure readability */
            }
        }

        @media (max-width: 768px) {
            .hero-section { 
                min-height: auto; 
                display: flex; 
                flex-direction: column; 
            }
            .hero-overlay-pane { 
                position: relative; 
                right: auto; 
                max-width: 100%; 
                width: 100%;
                padding: 60px 20px; 
                height: auto;
                -webkit-mask-image: none;
                mask-image: none;
                animation: none; 
                opacity: 1;
            }

            .hero-title{padding-top: 6rem;}
            
            .hero-title, .hero-title span, .hero-title strong, .hero-title big, .hero-subtext, .form-container-inside {
                opacity: 1;
                animation: none;
            }
            .hero-title big { font-size: 38px; }
            .hero-title strong { font-size: 24px; }
            .hero-title span { font-size: 18px; }
        }

        /* --- INTRO SECTION --- */
        .intro-block { padding: 60px 0 20px 0; text-align: center; }
        .intro-block h2 { font-weight: 700; font-size: 32px; color: #333; }
        .intro-block p { max-width: 900px; margin: 0 auto; color: #666; line-height: 1.8; }

        .container { max-width: 1200px; margin: 0 auto; padding: 0 15px; }

        /* --- MASONRY GRID --- */
        .program-masonry { background: var(--grid-bg); padding: 60px 0; }
        .masonry-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            align-items: start;
        }

        .grid-col { display: flex; flex-direction: column; gap: 20px; }

        .program-card {
            background: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .program-card h4 {
            font-size: 18px;
            font-weight: 800;
            color: var(--gnc-blue);
            text-transform: uppercase;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin: 0 0 12px 0;
        }

        .program-card h4 i { 
               color: var(--gnc-orange);
               margin-right: 15px;
                font-size: 18px;
              }

        .program-card ul { list-style: none; padding: 0; margin: 0; }
        .program-card ul li { margin-bottom: 8px; position: relative; padding-left: 20px; }
        .program-card ul li::before {
            content: "\f061";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: -12px;
            top: 4px;
            font-size: 10px;
            color: #ccc;
        }
        .program-card ul li a { text-decoration: none; color: #555; font-size: 15px; transition: 0.3s; line-height: 1.4; display: block; }
        .program-card ul li a:hover { color: var(--gnc-light-blue); transform: translateX(5px); }

        /* --- RESEARCH PROMO CARD --- */
        .research-promo-card {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url('upload/infra/hm.webp');
            background-size: cover;
            background-position: center;
            padding: 30px 20px;
            border-radius: 8px;
            text-align: left;
            min-height: 440px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .research-promo-card h3 {
            color: #fff;
            font-size: 20px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 1.2;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
        }

        .apply-btn {
            background: var(--gnc-yellow);
            color: #000;
            text-decoration: none;
            padding: 12px 25px;
            font-weight: 800;
            font-size: 13px;
            text-transform: uppercase;
            border-radius: 4px;
            display: inline-block;
            width: fit-content;
            transition: 0.3s;
        }
        .apply-btn:hover { background: #fff; transform: scale(1.05); }

        /* Special Card Styles */
        .banner-card {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;   
            color: #fff;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            position: relative;
        }
        .banner-card::after { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.3); z-index: 1; border-radius: 4px; }
        .banner-card * { position: relative; z-index: 2; }
        
        .related-links { background: rgba(0, 40, 80, 0.9); color: #fff; border-radius: 8px; }
        .related-links h4 { color: #fff; border-bottom: 1px solid rgba(255,255,255,0.2); }
        .related-links ul li { border-bottom: 1px solid rgba(255,255,255,0.1); padding: 8px 0; }
        .related-links ul li::before { content: "\f08e"; color: #fff; opacity: 0.7; }
        .related-links ul li a { color: #fff; font-size: 12px; font-weight: 600; text-transform: uppercase; }

        /* --- STANDOUT SECTION --- */
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
            .masonry-container { grid-template-columns: repeat(2, 1fr); }
            .standout-flex { flex-direction: column; }
        }
        @media (max-width: 768px) { 
            .masonry-container { grid-template-columns: 1fr; }
            .standout-grid { grid-template-columns: 1fr; }
            .standout-title { font-size: 28px; }
        }
    </style>
</head>

<body>

    <?php require "common/header.php"; ?>

    <section class="hero-section">
        <div class="hero-overlay-pane">
            <div class="hero-title">
                <span>Job Oriented</span>
                <strong>Professional Programs</strong>
                <big>after 12th</big>
            </div>
            <p class="hero-subtext">Guru Nanak College promotes an all-inclusive environment with the perfect blend of academics, sports, and extra-curricular activities on campus.</p>
            <div class="form-container-inside">
                <div id="ee-form-6">
                    <script src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/applycbc/ee-form-widget/form-6/widget.js" defer></script>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-block">
        <div class="container">
            <h2>Job Oriented Professional Programs after 12th</h2>
            <p>Guru Nanak College has come a long way since its inception providing world-class education. The creative and unique programs at Guru Nanak College keep our students a step ahead of others in terms of an assured professionally bright career ahead.</p>
        </div>
    </section>

    <section class="program-masonry">
        <div class="container">
            <div class="masonry-container">
                
                <div class="grid-col">
                    <div class="program-card">
                        <h4><i class="fa-solid fa-laptop-code"></i> Computer Sciences</h4>
                        <ul>
                            <li><a href="Best-College-for-BCA-in-Dehradun-Uttarakhand.php">Bachelor of Computer Applications</a></li>
                        </ul>
                    </div>

                    <div class="program-card">
                        <h4><i class="fa-solid fa-microscope"></i> Life & Allied Science</h4>
                        <ul>
                            <li><a href="Bsc-microbiology-Colleges-in-Dehradun-Uttarakhand.php">B.Sc. Microbiology</a></li>
                            <li><a href="bsc-biotechnology.php">B.Sc. Biotechnology</a></li>
                            <li><a href="bsc-food-technology.php">B.Sc. Food Technology</a></li>
                            <li><a href="Bsc-pcm-Colleges-in-Dehradun-Uttarakhand.php">B.Sc. PCM</a></li>
                            <li><a href="bsc-cbz.php">B.Sc. CBZ</a></li>
                            <li><a href="Bsc-geology-College-in-Dehradun-Uttarakhand.php">B.Sc. Geology</a></li>
                        </ul>
                    </div>

                    <div class="research-promo-card">
                        <h3>Advance your education at Guru Nanak College research-focused campus</h3>
                        <a href="https://application.gnc.edu.in/" class="apply-btn">Apply Today</a>
                    </div>
                </div>

                <div class="grid-col">
                    <div class="program-card">
                        <h4><i class="fa-solid fa-kit-medical"></i> Paramedical Programs</h4>
                        <ul>
                             <li><a href="Best-BMRIT-bachelor-in-medical-radio-imagingtechnology-college-in-dehradun.php">Bachelor of Medical Radio Diagnosis And Imaging Technology</a></li>
                            <li><a href="Best-bmlt-college-in-dehradun.php">Bachelor of Medical Laboratory Technology</a></li>
                            <li><a href="Best-BPT-college-in-Dehradun-Uttarakhand.php">Bachelor of Physiotherapy</a></li>
                            <li><a href="Best-bsc-optometry-College-in-dehradun.php">Bachelor of Optometry</a></li>
                             <li><a href="Best-operation-theatre-technology-colleges-in-dehradun.php">Bachelor of Operation Theatre Technology</a></li>
                        </ul>
                    </div>
                    <div class="program-card">
                        <h4><i class="fa-solid fa-pills"></i> Pharmacy Programs</h4>
                        <ul>
                           <li><a href="best-College-for-B-Pharmacy-in-Dehradun-Uttarakhand.php">Bachelor of Pharmacy</a></li>
                           <li><a href="B-Pharm-Lateral-Entry-Colleges-in-Dehradun-Uttarakhand.php">Lateral Entry in B. Pharma</a></li>
                           <li><a href="Best-College-for-D-Pharm-in-Dehradun-Uttarakhand.php">Diploma in Pharmacy</a></li>
                        </ul>
                    </div>
                    <div class="program-card">
                        <h4><i class="fa-solid fa-briefcase"></i> Business School</h4>
                        <ul>
                            <li><a href="best-bba-college-in-dehradun.php">Bachelor of Business Administration</a></li>
                        </ul>
                    </div>
                </div>

                <div class="grid-col">
                    <div class="program-card banner-card" style="background-image: url('upload/infra/img-3.webp');">
                        <h5 style="font-weight: 800; font-size: 18px; margin-bottom:15px;">LAY THE FOUNDATION OF A SUCCESSFUL CAREER</h5>
                        <a href="https://application.gnc.edu.in/" class="apply-btn">APPLY TODAY</a>
                    </div>
                    
                    <div class="program-card">
                        <h4><i class="fa-solid fa-user-nurse"></i> Nursing Program</h4>
                        <ul>
                            <li><a href="Best-B-Sc-Nursing-Colleges-in-dehradun.php">B.Sc. Nursing</a></li>
                            <li><a href="best-gnm-college-in-dehradun.php">General Nursing and Midwifery</a></li>
                            <li><a href="post-basic-nursing.php">Post Basic B.Sc. Nursing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="grid-col">
                    <div class="program-card related-links">
                        <h4>Related Links</h4>
                        <ul>
                            <li><a href="about-us.php">Why Join GNC?</a></li>
                            <li><a href="admissions.php">Admissions 2026</a></li>
                            <li><a href="cultural.php">Cultural Activities</a></li>
                            <li><a href="placement-overview.php">Placements</a></li>
                            <li><a href="sport.php">Sports & Adventure</a></li>
                            <li><a href="campus-life.php">Campus Life</a></li>
                        </ul>
                    </div>
                    <div class="program-card">
                        <h4><i class="fa-solid fa-wheat-awn"></i> Agriculture Science</h4>
                        <ul>
                           <li><a href="agriculture-science.php">B.Sc. Agriculture</a></li>
                           <li><a href="Best-Bsc-Forestry-colleges-in-Dehradun.php">B.Sc. Forestry</a></li>
                        </ul>
                    </div>
                    <div class="program-card">
                        <h4><i class="fa-solid fa-hotel"></i> Hotel Management</h4>
                        <ul>
                            <li><a href="Best-DHM-Colleges-in-Dehradun.php">Diploma in Hotel Management</a></li>
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
    <?php require "common/footer.php"; ?>

</body>
</html>