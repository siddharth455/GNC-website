<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Guru Nanak College (GNC) Dehradun, Uttarakhand | Campus Life</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Campus life at Guru Nanak College (GNC) in Dehradun is vibrant and enriching, offering students a well-rounded experience that goes beyond academics. Overall, campus life at Guru Nanak College is designed to foster personal growth, academic excellence, and a sense of community among students. It's truly a home away from home!">
    <link rel="canonical" href="https://www.gnc.edu.in/campus-life">
    <!-- Open Graph Tags (Preserved) -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Best Paramedical, Nursing, Pharmacy, Vocational, Health Science, Life & Allied Sciences, Agriculture Science, Management & Technology College in Dehradun, Uttarakhand, India - GNC Dehradun" />
    <meta property="og:description" content="Campus life at Guru Nanak College (GNC) in Dehradun is vibrant and enriching..." />
    <meta property="og:url" content="https://www.gnc.edu.in/campus-life" />
    <meta property="og:site_name" content="GNC Dehradun" />
    <meta property="og:image" content="https://www.gnc.edu.in/upload/about-us-head.webp" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --gnc-navy: #003d82;
            --gnc-cyan: #00b5fb;
            --gnc-dark: #1a1c1e;
            --gnc-light: #f8f9fa;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--gnc-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- GLOBAL RESPONSIVE PADDING --- */
        .section-padding {
            padding: clamp(40px, 8vw, 80px) 0;
        }

        /* --- HERO BANNER --- */
        .gnc-main-hero {
            min-height: 100vh;
            padding: 120px 0 60px;
            background: linear-gradient(rgba(0, 43, 92, 0.8), rgba(0, 43, 92, 0.6)),
                        url('upload/infra/campus-banner.webp') center/cover no-repeat fixed;
            display: flex;
            align-items: center;
            color: white;
        }

        /* For iOS/Mobile: Background fixed often breaks, so we disable on small screens */
        @media (max-width: 768px) {
            .gnc-main-hero { background-attachment: scroll; min-height: 80vh; }
        }

        .gnc-hero-text h1 {
            font-size: clamp(2.2rem, 8vw, 4.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .gnc-hero-text .intro-text {
            font-size: clamp(1rem, 2vw, 1.1rem);
            display: block;
            border-left: 5px solid var(--gnc-cyan);
            padding-left: clamp(15px, 3vw, 25px);
            opacity: 0.95;
            max-width: 900px;
        }

        /* --- HEADINGS --- */
        .gnc-section-title {
            color: var(--gnc-navy);
            font-weight: 800;
            font-size: clamp(1.7rem, 5vw, 2.5rem);
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .gnc-highlight { color: var(--gnc-cyan); font-weight: 700; }

        /* --- VIDEO WRAPPER (Fluid 16:9) --- */
        .gnc-video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            background: #000;
            border-radius: 8px;
        }

        .gnc-video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* --- FEATURE CARDS --- */
        .gnc-feature-box {
            background: #fff;
            height: 100%;
            border: 2px dotted var(--gnc-cyan);
            transition: 0.4s;
            display: flex;
            flex-direction: column;
        }

        .gnc-feature-box:hover {
            border-color: var(--gnc-cyan);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .gnc-feature-box img {
            width: 100%;
            height: clamp(200px, 30vw, 350px);
            object-fit: cover;
        }

        .gnc-feature-content { padding: 20px; flex-grow: 1; }
        .gnc-feature-content h5 { color: var(--gnc-navy); font-weight: 700; font-size: 1.25rem; }
        .gnc-feature-content p { font-size: 0.95rem; color: #555; text-align: justify; margin-bottom: 0; }

        /* --- SERVICE BOXES --- */
        .gnc-service-box {
            background: #fff;
            height: 100%;
            border: 1px solid #eee;
            transition: 0.4s;
            display: flex;
            flex-direction: column;
        }
        
        .gnc-service-box img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        /* --- BUTTONS --- */
        .btn-gnc {
            background: var(--gnc-cyan);
            color: white !important;
            padding: 12px 25px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
            text-transform: uppercase;
            font-size: 0.85rem;
            border: none;
            border-radius: 4px;
        }

        .btn-gnc:hover { background: var(--gnc-navy); }

        /* --- DELIGACY OVERLAYS --- */
        .deligacy-card { position: relative; overflow: hidden; border: 4px solid #fff; border-radius: 8px; }
        .deligacy-overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: linear-gradient(transparent, rgba(0, 61, 130, 0.95));
            padding: 15px;
            text-align: center;
        }

        /* --- LISTS --- */
        .gnc-list { list-style: none; padding-left: 0; }
        .gnc-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 12px;
            font-size: 0.95rem;
        }
        .gnc-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--gnc-cyan);
            font-weight: 900;
        }

        /* --- BACKGROUND HELPERS --- */
        .bg-navy { background-color: var(--gnc-navy); color: white; }
        .bg-light { background-color: var(--gnc-light); }

        /* --- CAROUSEL FIX --- */
        .carousel-item img {
            aspect-ratio: 4/3;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <?php require "common/header.php" ?>

    <!-- 🎓 HERO SECTION -->
    <section class="gnc-main-hero">
        <div class="container text-center text-md-start">
            <div class="gnc-hero-text">
                <h1>Campus Life</h1>
                <p class="intro-text">At our college, campus life is centered around fostering a supportive and engaging community where students can grow academically, socially, and personally. With a range of extracurricular activities, events, and student organizations, there’s always something happening to enhance your college experience.</p>
            </div>
        </div>
    </section>

    <!-- 🏫 CAMPUS OVERVIEW -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="gnc-section-title">A Beacon of <span class="gnc-highlight">Holistic Education</span></h2>
                    <p>Guru Nanak College, Dehradun, is a prestigious institution committed to fostering holistic education and student welfare. The college offers a wide array of academic programs, providing state-of-the-art classrooms equipped with modern teaching aids to ensure an engaging learning environment.</p>
                    <p>Its well-equipped laboratories for science, technology, and computer studies enable hands-on learning, nurturing practical skills and critical thinking. The library is a treasure trove of knowledge, offering an extensive collection of books, journals, and digital resources.</p>
                    <p>Beyond academics, the college prioritizes student welfare through career counseling, mentorship programs, and skill development workshops. The campus also houses modern facilities such as a cafeteria, health services, and Wi-Fi connectivity.</p>
                    <p class="fw-bold text-navy mb-0">With dedicated faculty and a student-centric approach, Guru Nanak College stands as a beacon of academic excellence and comprehensive development in Dehradun.</p>
                </div>
                <div class="col-lg-6">
                    <div class="gnc-video-container shadow-lg">
                        <iframe src="https://www.youtube.com/embed/PpkHaa1lPjI?autoplay=1&mute=1&playlist=PpkHaa1lPjI&loop=1" title="Guru Nanak College Dehradun" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🎭 CULTURAL LIFE SECTION -->
    <section class="section-padding bg-navy">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-7 order-2 order-lg-1 text-center text-lg-start">
                    <h2 class="text-white fw-800 mb-4">Celebrate Unity & Embrace <span class="gnc-highlight">Cultural Harmony</span></h2>
                    <p class="text-white-50">Guru Nanak College, Dehradun, is a vibrant hub of cultural diversity and creativity, offering students a dynamic platform to celebrate unity and showcase their talents. The college emphasizes the importance of extracurricular activities alongside academics, and one of its standout features is the grand cultural festivals it organizes annually. </p>
                    <p class="text-white-50">These festivals bring together students from various backgrounds, religions, and regions, fostering an inclusive environment where diversity is celebrated and respected. The events, which include music, dance, drama, and art competitions, provide students with opportunities to express their creative abilities, whether through a classical dance performance, a musical competition, or a theatrical play. More than just entertainment, these cultural fests promote teamwork, unity, and mutual respect among students, helping to create a sense of belonging and camaraderie within the campus. The college encourages all students, regardless of their background, to participate, ensuring that everyone has a chance to showcase their skills and engage with others. </p>
                    <p class="text-white-50">These celebrations not only offer an escape from routine academic life but also contribute to the development of a vibrant, inclusive campus community where students form lasting memories and friendships, all while embracing the rich diversity that defines the college.</p>
                    <a href="https://www.gnc.edu.in/cultural" class="btn-gnc mt-3">Know More</a>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div id="culturalSlider" class="carousel slide shadow-lg" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="upload/hardy.webp" class="d-block w-100" alt="Cultural Event"></div>
                            <div class="carousel-item"><img src="upload/gulnazar.webp" class="d-block w-100" alt="Cultural Event"></div>
                            <div class="carousel-item"><img src="upload/milind.webp" class="d-block w-100" alt="Cultural Event"></div>
                            <div class="carousel-item"><img src="upload/amrit.webp" class="d-block w-100" alt="Cultural Event"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🏅 SPORTS & FITNESS SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-5">
                    <div id="sportSlider" class="carousel slide shadow-lg" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="upload/sport/1.webp" class="d-block w-100" alt="Sport 1"></div>
                            <div class="carousel-item"><img src="upload/sport/2.webp" class="d-block w-100" alt="Sport 2"></div>
                            <div class="carousel-item"><img src="upload/sport/3.webp" class="d-block w-100" alt="Sport 3"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="gnc-section-title">Rise Above and Play <span class="gnc-highlight">with Pride</span></h2>
                    <p>Guru Nanak College places a strong emphasis on the holistic development of its students, recognizing that academic success is only part of the equation for preparing individuals for the future. As part of this approach, the college provides exceptional sports facilities that cater to a wide range of activities, including badminton, football, volleyball, basketball, cricket, and table tennis, all situated on well-maintained grounds and courts. </p>
                    <p>These facilities encourage students to stay active, engage in physical fitness, and experience the numerous benefits that come with sports participation. Beyond improving physical health, sports at Guru Nanak College promote valuable life skills such as teamwork, where students work together towards shared goals, and discipline, as they learn the importance of regular practice, focus, and commitment. Leadership skills are also cultivated as students take on responsibilities within their teams, motivating and guiding their peers, while time management is enhanced as they balance academic work with athletic commitments. Overall, the college’s sports facilities serve as a comprehensive platform for students to develop both physically and personally, ensuring they graduate not only academically accomplished but also as well-rounded individuals equipped with the character and skills needed to succeed in various aspects of life.</p>
                    <a href="https://www.gnc.edu.in/sport" class="btn-gnc mt-3">Know More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 🧘 FEATURE GRID -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-6">
                    <div class="gnc-feature-box shadow-sm">
                        <img src="upload/extra/health.webp" alt="Health & Wellness">
                        <div class="gnc-feature-content">
                            <h5>Health & Wellness</h5>
                            <p>Health and wellness are integral to the student experience at Guru Nanak College, Dehradun, reflecting its commitment to holistic development. The college prioritizes physical fitness, mental health, and emotional well-being through various initiatives designed to support a balanced lifestyle. Modern sports facilities and regular fitness programs encourage students to stay active, while yoga sessions and meditation workshops promote mental clarity and stress relief. Wellness campaigns, expert seminars on nutrition, and mental health awareness create an informed and supportive campus community. Regular health check-ups and access to counseling services ensure students have the resources needed to address personal challenges. By fostering an environment that values well-being alongside academics, Guru Nanak College empowers students to cultivate healthy habits, build resilience, and lead fulfilling lives both during their studies and beyond.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="gnc-feature-box shadow-sm">
                        <img src="upload/extra/dance.webp" alt="Co-Curricular">
                        <div class="gnc-feature-content">
                            <h5>Co-Curricular Activities</h5>
                            <p>Guru Nanak College, Dehradun, places great emphasis on co-curricular activities, recognizing their vital role in shaping well-rounded individuals. The college offers a diverse range of opportunities for students to explore their passions and talents beyond academics. Activities such as debates, quizzes, and public speaking contests nurture critical thinking and communication skills, while cultural programs, music, and dance performances foster creativity and self-expression. Sports tournaments and fitness challenges promote physical well-being and teamwork, while clubs and societies focused on literature,art,technology and social service provide platforms for leadership and community engagement.Students are encouraged to explore their interests and talents through activities.These activities not only enhance personal and professional growth but also instill confidence and a sense of belonging, preparing students for success in all aspects of life.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="gnc-feature-box shadow-sm">
                        <img src="upload/extra/international.webp" alt="National & International">
                        <div class="gnc-feature-content">
                            <h5>National & International</h5>
                            <p>Guru Nanak College, Dehradun, is committed to providing education that meets both national and international standards, preparing students to thrive in a globalized world. The college offers a diverse curriculum that blends academic rigor with practical skills, fostering critical thinking, innovation, and adaptability. With experienced faculty and state-of-the-art facilities, students receive exposure to modern teaching methodologies and interdisciplinary learning. International collaborations, exchange programs, and guest lectures by global experts open doors to cross-cultural learning, broadening students’ perspectives and understanding of global issues. Additionally, the college emphasizes values of unity, inclusivity, and respect, ensuring students are equipped with ethical and cultural competence. By integrating national heritage with global trends, Guru Nanak College nurtures leaders who excel in their chosen fields and contribute meaningfully to both local and international communities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="gnc-feature-box shadow-sm">
                        <img src="upload/extra/ragging.webp" alt="Ragging Free">
                        <div class="gnc-feature-content">
                            <h5>Ragging Free Campus</h5>
                            <p>Guru Nanak College, Dehradun, takes immense pride in maintaining a ragging-free campus, fostering an environment of respect, inclusivity, and safety for all students. The college strictly adheres to the guidelines of the University Grants Commission (UGC) and other regulatory bodies, ensuring that anti-ragging measures are implemented effectively. A zero-tolerance policy is in place, with strict disciplinary actions for violations, ensuring that every student feels secure and valued. The institution actively promotes awareness campaigns to educate students about the harmful effects of ragging and their rights. An Anti-Ragging Committee and a dedicated helpline are available round-the-clock to address any concerns. Senior students are encouraged to mentor and guide juniors, creating a bond of mutual respect and camaraderie. Guru Nanak College believes that a positive and nurturing environment is essential for academic and personal growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🏢 SERVICES & FACILITIES -->
    <section class="section-padding">
        <div class="container">
            <h2 class="text-center gnc-section-title mb-5">Our <span class="gnc-highlight">Campus Services</span></h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="gnc-service-box shadow-sm">
                        <img src="upload/infra/5l.webp" alt="Hostel">
                        <div class="gnc-feature-content">
                            <h5>Hostel</h5>
                            <p>Guru Nanak College, Dehradun, provides excellent hostel facilities for students, ensuring a comfortable and secure living environment. The hostels are well-equipped with modern amenities, including Wi-Fi, clean dormitories, and nutritious meals. Dedicated staff ensure the safety and well-being of students, creating a supportive community. With a focus on discipline and camaraderie, the hostel experience at Guru Nanak College offers students a home away from home during their academic journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gnc-service-box shadow-sm">
                        <img src="upload/extra/infrastructure.webp" alt="Infrastructure">
                        <div class="gnc-feature-content">
                            <h5>Best Infrastructure</h5>
                            <p>Guru Nanak College, Dehradun, boasts state-of-the-art infrastructure designed to enhance the student experience. The campus features modern classrooms, well-equipped laboratories, a well-stocked library, and advanced sports facilities. With Wi-Fi-enabled spaces, dedicated study zones, and comfortable student lounges, the college ensures a conducive learning environment. This excellent infrastructure supports academic growth, extracurricular activities, and student well-being, making it an ideal place for holistic development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="gnc-service-box shadow-sm">
                        <img src="upload/extra/placement-02.webp" alt="Placement">
                        <div class="gnc-feature-content">
                            <h5>Best Placement</h5>
                            <p>Guru Nanak College, Dehradun, offers exceptional placement opportunities for its students. The college’s dedicated placement cell actively works to connect students with top companies across various industries. Through workshops, internships, and career counseling, students are equipped with the skills needed to succeed in competitive job markets. The college's strong industry ties and focused approach ensure a high placement rate, helping students kickstart successful careers post-graduation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🎉 DELICACY OF GNC -->
    <section class="section-padding bg-light text-center">
        <div class="container">
            <h2 class="gnc-section-title mb-5">Deligacy of <span class="gnc-highlight">GNC</span></h2>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-4">
                    <div class="deligacy-card h-100 shadow-sm">
                        <img src="upload/cultural-1.webp" class="img-fluid w-100 h-100" style="object-fit:cover" alt="Cultural">
                        <div class="position-absolute bottom-0 start-0 w-100 h-20-percent d-flex align-items-center justify-content-center overlay">
              <div class="text-white text-center mt-3">
                <h4>Cultural Events<br><a href="https://www.gnc.edu.in/cultural" class="btn-sm">Explore More</a></h4>
              </div>
            </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="deligacy-card h-100 shadow-sm">
                        <img src="upload/sports-1.webp" class="img-fluid w-100 h-100" style="object-fit:cover" alt="Sports">
                         <div class="position-absolute bottom-0 start-0 w-100 h-20-percent d-flex align-items-center justify-content-center overlay">
              <div class="text-white text-bottom text-center mt-3">
                <h4 class="text-white">Sports<br><a href="https://www.gnc.edu.in/sport" class=" btn-sm">Explore More</a></h4>
              </div>
            </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="deligacy-card h-100 shadow-sm">
                        <img src="upload/conferences-1.webp" class="img-fluid w-100 h-100" style="object-fit:cover" alt="Seminars">
                        <div class="position-absolute bottom-0 start-0 w-100 h-20-percent d-flex align-items-center justify-content-center overlay">
              <div class="text-white text-bottom text-center mt-3">
                <h4 class="text-white">Seminars, Workshops &amp; Conferences<br><a href="#" class="btn-sm">Explore More</a></h4>
              </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌈 CLOSING SECTION -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="gnc-section-title">Embrace Diversity & <span class="gnc-highlight">Cultural Fusion</span></h2>
                    <p>In our college, cultural programs are vibrant realms of diversity and creativity. From mesmerizing dance performances to captivating art exhibitions and enriching music concerts, these events foster a sense of shared cultural heritage.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="gnc-list p-4 bg-white border rounded shadow-sm">
                        <li>Supportive learning and inclusive environment.</li>
                        <li>Diverse range of courses and career aspirations.</li>
                        <li>Dedicated faculty for academic excellence.</li>
                        <li>Vibrant student community clubs and societies.</li>
                        <li>Focus on personal and professional development.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php require "company-logo.php" ?>
    <?php require "testimoni-2.php" ?>
    <?php require "common/footer.php" ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>