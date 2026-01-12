<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>About US | GNC - Leading Institute in Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GNC, the leading institute in Dehradun, established in 2009, offers a range of educational programs designed to empower students.">
    <link rel="canonical" href="https://www.gnc.edu.in/about-us">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="GNC - Leading Institute in Dehradun" />
    <meta property="og:description" content="GNC offers educational programs designed to empower students since 2009." />
    <meta property="og:url" content="https://www.gnc.edu.in/about-us" />
    <meta property="og:site_name" content="GNC Dehradun" />
    <meta property="og:image" content="https://www.gnc.edu.in/upload/about-us-head.webp" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        :root {
            --gnc-navy: #003d82;
            --gnc-cyan: #00b5fb;
            --gnc-dark: #1a1c1e;
            --gnc-red: #003d82;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--gnc-dark);
            line-height: 1.8;
            overflow-x: hidden;
        }

        /* 1. HERO BANNER */
        .gnc-main-hero {
            min-height: 100vh;
            padding: 100px 0;
            background: linear-gradient(rgba(0, 43, 92, 0.75), rgba(0, 43, 92, 0.5)),
                        url('upload/infra/about-us-banner.webp') center/cover no-repeat fixed;
            display: flex;
            align-items: end;
            color: white;
            position: relative;
        }
        .gnc-hero-text {
            margin-bottom: 80px;
        }
        .gnc-hero-text h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
        }
        .gnc-hero-text small {
            font-size: 1.25rem;
            display: block;
            border-left: 4px solid var(--gnc-cyan);
            padding-left: 20px;
            opacity: 0.9;
        }

        /* 2. UPDATED INTRO SECTION - Image on Right, No Border Radius */
        .gnc-intro-section {
            padding: 50px 0;
            background-color: #fff;
        }

        .gnc-section-title {
            color: var(--gnc-navy);
            font-weight: 800;
            font-size: 2.5rem;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .gnc-highlight {
            color: var(--gnc-cyan);
            font-weight: 700;
        }

        .gnc-intro-content p {
            margin-bottom: 20px;
            font-size: 1.05rem;
            color: #444;
            text-align: justify;
        }

        /* Image Composition Styling */
        .gnc-image-wrapper {
            position: relative;
            padding: 30px;
            
        }

        .gnc-image-main {
            width: 100%;
            height: 650px;
            object-fit: cover;
            position: relative;
            z-index: 2;
            border-radius: 0 !important; /* Force remove border radius */
            box-shadow: 15px 15px 50px rgba(0,0,0,0.1);
        }

        .gnc-image-shape {
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: var(--gnc-cyan);
            z-index: 1;
            border-radius: 0 !important;
        }

        .gnc-image-experience {
            position: absolute;
            bottom: 0;
            left: 0;
            background: var(--gnc-navy);
            color: white;
            padding: 30px;
            z-index: 3;
            text-align: center;
        }

        .gnc-image-experience span {
            display: block;
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1;
        }

        /* 3. PHILOSOPHY SECTION */
        .gnc-philosophy-bg {
            padding: 30px 0;
            background: linear-gradient(rgba(0, 61, 130, 0.92), rgba(0, 61, 130, 0.85)),
                        url('upload/gncmh-scaled.webp') center/cover no-repeat fixed;
        }


        .gnc-icon {
    width: 45px;
    height: 45px;
    margin-bottom: 18px;
    color: var(--gnc-cyan)); /* Ensures icons use your theme red */
    font-size: 2rem;       /* Adjusts the size of the FontAwesome icon */
    display: flex;
    align-items: center;
}

.gnc-feature-card h4 {
    min-height: 3em; /* Keeps headings aligned even if they wrap differently */
}

        .gnc-glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 50px 35px;
            border-radius: 24px;
            height: 100%;
            text-align: center;
            color: white;
            transition: 0.3s;
        }

        .gnc-glass-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: scale(1.02);
        }

        .gnc-glass-card img {
            width: 80px;
            margin-bottom: 25px;
            filter: brightness(0) invert(1);
        }

        .gnc-glass-card h3 {
            color: var(--gnc-cyan);
            font-weight: 700;
            font-size: 1.6rem;
            margin-bottom: 15px;
        }

        /* 4. RECENT SECTION STYLES (Slider Area) */
        .gnc-section-wrapper {
            width: 100%;
            background-color: #f8f9fa;
            padding: 40px 0;
            overflow: hidden;
        }

        .gnc-header-container {
            text-align: center;
            max-width: 900px;
            margin: 0 auto 60px;
        }

        .gnc-content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            gap: 30px;
        }

        .gnc-red-card {
            background-color: var(--gnc-cyan);
            color: white;
            flex: 1;
            max-width: 400px;
            border-radius: 0; /* Updated to Square */
            display: flex;
            flex-direction: column;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(158, 27, 50, 0.2);
        }

        .gnc-red-content { padding: 40px 30px; }
        .gnc-red-card-img { width: 100%; height: 100%; object-fit: cover;  opacity: 0.8; }

        .gnc-right-content { flex: 2; display: flex; flex-direction: column; gap: 25px; min-width: 0; }
        .gnc-slider-viewport { width: 100%; overflow: hidden; position: relative; padding: 10px 5px; }
        .gnc-slider-track { display: flex; gap: 20px; transition: transform 0.5s ease-in-out; }

        .gnc-feature-card {
            background: white;
            padding: 30px 25px;
            border-radius: 0; /* Updated to Square */
            box-shadow: 0 5px 20px rgba(0,0,0,0.06);
            flex: 0 0 calc(50% - 10px);
        }

        .gnc-icon { width: 45px; height: 45px; margin-bottom: 18px; fill: var(--gnc-red); }
        .gnc-feature-card h4 { color: var(--gnc-cyan); font-size: 1.1rem; font-weight: 700; margin-bottom: 12px; }
        .gnc-feature-card h4::after { content: ''; display: block; width: 35px; height: 3px; background: var(--gnc-cyan); margin-top: 8px; }

        .gnc-control-btn { width: 45px; height: 45px; border-radius: 50%; border: 1px solid #ddd; background: white; cursor: pointer; transition: 0.3s; }
        .gnc-control-btn:hover { background: var(--gnc-red); color: white; border-color: var(--gnc-red); }

        .gnc-building-wide {
            width: 100%;
            height: 250px;
            background-image: url('upload/infra/grad-cerem.webp');
            background-size: cover;
            background-position: center;
        }

        @media (max-width: 991px) {
            .gnc-intro-section { padding: 60px 0; }
            .gnc-content-container { flex-direction: column; }
            .gnc-red-card { max-width: 100%; }
            .gnc-feature-card { flex: 0 0 100%; }
            .gnc-image-main { height: 400px; }
        }


        /* GNC Student Journey Section UI */
.gnc-student-journey {
    padding: 40px 0;
    background-color: #ffffff;
    border-top: 1px solid #f2f2f2;
}

.gnc-journey-header {
    border-left: 6px solid var(--gnc-navy); /* Bold vertical accent */
    padding-left: 30px;
}

.gnc-journey-header h4 {
    font-size: 1.85rem;
    line-height: 1.4;
    color: var(--gnc-dark);
}

.gnc-info-card {
    background: #ffffff;
    padding: 40px;
    height: 100%;
    border: 1px solid #eeeeee;
    transition: all 0.4s ease;
    border-radius: 0 !important; /* Strict Square Edges */
}

.gnc-info-card:hover {
    border-color: var(--gnc-cyan);
    box-shadow: 15px 15px 0px rgba(0, 181, 251, 0.05); /* Square offset shadow */
    transform: translateY(-5px);
}

.gnc-card-icon {
    width: 55px;
    height: 55px;
    background: rgba(0, 61, 130, 0.05);
    color: var(--gnc-navy);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.3rem;
    margin-bottom: 25px;
    border-radius: 0 !important;
}

.gnc-info-card h5 {
    font-weight: 800;
    color: var(--gnc-navy);
    margin-bottom: 15px;
    font-size: 1.2rem;
    letter-spacing: -0.5px;
}

.gnc-info-card p {
    font-size: 0.95rem;
    line-height: 1.8;
    color: #555;
    margin: 0;
    text-align: justify;
}

@media (max-width: 991px) {
    .gnc-student-journey { padding: 60px 0; }
    .gnc-journey-header { margin-bottom: 40px; }
    .gnc-info-card { padding: 30px; }
}

@media (max-width:768px){
    .gnc-building-wide {
             width: 100%;
            height: 250px;
            background-image: url('upload/infra/grad-cerem.webp');
            background-size: cover;
            background-position: center;
        
    }
}
    </style>

    <?php require "common/header.php"; ?>
</head>

<body>

    <section class="gnc-main-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="gnc-hero-text">
                        <h1>About Guru Nanak College</h1>
                        <small>Inspired by the teachings of Guru Nanak Dev Ji, GNC blends academic excellence with strong values and community service.</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gnc-intro-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="gnc-intro-content">
                        <h2 class="gnc-section-title">Your Gateway to a Career in <span class="gnc-highlight">Pharmacy</span>, <span class="gnc-highlight">Paramedical</span> & <span class="gnc-highlight">Nursing</span><span class="gnc-highlight">Management </span>& <span class="gnc-highlight">Technology</span></h2>
                        <p>Guru Nanak College, situated in the serene and academically vibrant city of Dehradun, has established itself as a prestigious center of higher education since its inception under the aegis of NIMS, Dehradun in 2009. The college has become a top Pharmaceutical and Paramedical College in the region because of its expertise in pharmacy education and paramedical studies. It has gained recognition as one of the most prestigious Pharmacy Colleges in Dehradun despite its short history.</p>
                        <p>Guru Nanak College's culture is deeply committed to nurturing the development of the next generation of pharmaceutical professionals, paramedics, and nurses. This commitment goes beyond just teaching academics; the college takes pride in instilling values of innovation, ethical practice, and academic excellence. Through its diverse course offerings, it advocates for the belief that education is a crucial factor in personal and societal advancement.</p>
                        <p>Guru Nanak College's collaboration with Career Buddy Club (CBC) is a special feature that distinguishes it from other colleges. CBC is a Dubai-based firm known for its extensive career guidance and mentoring. The college's commitment to career readiness has resulted in a remarkable job placement rate of up to 100% for graduates due to this partnership. The collaborations with CBC India and CBC Dubai further expand employment possibilities. India Accelerator's partnership exemplifies the college's commitment to developing entrepreneurial talent among students, which can help transform innovative ideas into successful ventures.</p>
                        <p>GNC not only excels in academic offerings, but it also provides excellent living conditions through its fully furnished and comfortable hostel facilities. The creation of a homely and conducive environment in these hostels contributes to the overall well-being of the students. GNC has academic programs that are dispersed throughout its Schools of Nursing, Pharmacy, Paramedical Sciences, Health Sciences, and Vocational Studies. Practical and research-based learning is the focus of every program, which is meticulously designed. Students are well-equipped to meet challenges in their respective fields through this approach. The college's curriculum is constantly being updated to meet the latest industry developments, ensuring that students are learning the most up-to-date and relevant information.</p>
                    </div>
                </div>

                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="gnc-image-wrapper">
                        <div class="gnc-image-shape"></div>
                        <img src="upload/infra/img-3.webp" alt="GNC Campus" class="gnc-image-main">
                        <div class="gnc-image-experience">
                            <span>16+</span>
                            <p class="m-0">Years of Academic <br> Excellence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gnc-philosophy-bg">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-white fw-800" style="font-size: 2.5rem;">Our Core Foundation</h2>
                <div style="width: 80px; height: 4px; background: var(--gnc-cyan); margin: 20px auto;"></div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="gnc-glass-card">
                        <img src="upload/icon-3.webp" alt="Philosophy Icon">
                        <h3>Our Philosophy</h3>
                        <p>Education at GNC is a collaborative journey, transforming students into life-long learners and proactive contributors to society.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gnc-glass-card">
                        <img src="upload/icon-4.webp" alt="Principle Icon">
                        <h3>GNC Principle</h3>
                        <p>GNC embodies holistic growth, nurturing individuality amidst the vitality of communal learning and personal discovery.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="gnc-glass-card">
                        <img src="upload/icon-2.webp" alt="Success Icon">
                        <h3>Key Of Success</h3>
                        <p>Our success formula blends academic rigor with character development, creating well-rounded individuals poised for lifelong achievement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gnc-section-wrapper">
        <div class="gnc-header-container">
            <h2>Experience <span class="gnc-highlight">Excellence.</span><br>Shape Your Path to <span class="gnc-highlight">Success.</span></h2>
            <p>When you choose to learn with us:
Our dedicated faculty members, state-of-the-art facilities, and commitment to student success make Guru Nanak College an ideal place to pursue your educational aspirations. We strive to create a nurturing and intellectually stimulating environment where students can thrive, explore their potential, and become leaders in their respective fields.</p>
        </div>

        <div class="gnc-content-container">
            <div class="gnc-red-card">
                <div class="gnc-red-content">
                    <h3>Future-Ready, Multidisciplinary Education at GNC Dehradun.</h3>
                    <p>Experience a modern campus powered by experiential learning, innovation, and industry-aligned education that helps turn aspirations into achievements.</p>
                </div>
                <img src="images/gnc-building-1.webp" class="gnc-red-card-img" alt="Architecture">
            </div>

            <div class="gnc-right-content">
                <div style="position: relative;">
                    <div class="d-flex justify-content-end gap-2 mb-3">
                        <button class="gnc-control-btn" id="cuPrevBtn"><i class="fas fa-chevron-left"></i></button>
                        <button class="gnc-control-btn" id="cuNextBtn"><i class="fas fa-chevron-right"></i></button>
                    </div>

                   <div class="gnc-slider-viewport">
    <div class="gnc-slider-track" id="cuSliderTrack">
        <div class="gnc-feature-card">
            <div class="gnc-icon"><i class="fas fa-skating"></i></div>
            <h4>Experience a vibrant student life</h4>
            <p>Our campus is a hub of energy, offering a blend of cultural festivals, sports, and student-led clubs that create a rich, social atmosphere beyond the classroom.</p>
        </div>

        <div class="gnc-feature-card">
            <div class="gnc-icon"><i class="fas fa-globe"></i></div>
            <h4>Gain a global perspective</h4>
            <p>We integrate international case studies and global industry trends into our curriculum, ensuring our graduates are prepared to compete and lead in a worldwide market.</p>
        </div>

        <div class="gnc-feature-card">
            <div class="gnc-icon"><i class="fas fa-graduation-cap"></i></div>
            <h4>Explore a range of flexible academic opportunities</h4>
            <p>From multidisciplinary electives to specialized certifications, we provide a versatile learning path that adapts to your evolving career interests and goals.</p>
        </div>

        <div class="gnc-feature-card">
            <div class="gnc-icon"><i class="fas fa-seedling"></i></div>
            <h4>Catalyse your career growth</h4>
            <p>Through rigorous professional training and entrepreneurship workshops, we fast-track your transition from an ambitious student to a successful industry professional.</p>
        </div>

        <div class="gnc-feature-card">
            <div class="gnc-icon"><i class="fas fa-user-graduate"></i></div>
            <h4>Access world-class student support for a lifetime</h4>
            <p>Our commitment doesn't end at graduation; we provide lifelong career counseling, mental wellness resources, and networking access for all our alumni.</p>
        </div>

        <div class="gnc-feature-card">
            <div class="gnc-icon"><i class="fas fa-building"></i></div>
            <h4>Partner with 100+ Companies</h4>
            <p>Our deep-rooted industry connections with over 100 leading corporations ensure premium internship placements and excellent campus recruitment opportunities.</p>
        </div>
    </div>
</div>
                </div>
                <div class="gnc-building-wide"></div>
            </div>
        </div>
    </div>

   <section class="gnc-student-journey">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="gnc-journey-header">
                    <h4 class="fw-800">Your Journey into <span class="gnc-highlight">Higher Education</span> Starts Here.</h4>
                    <p class="small text-muted mt-3 fw-bold tracking-wider">EMPOWERING FUTURE LEADERS</p>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="gnc-info-card">
                            <div class="gnc-card-icon"><i class="fas fa-unlock-alt"></i></div>
                            <h5>Catalyst for Change</h5>
                            <p>Education is the key to unlocking doors to countless opportunities. Guru Nanak College, Dehradun is the ultimate destination for those who aspire to be a catalyst for change. We break free from conventional pedagogy boundaries to ensure real-world readiness.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gnc-info-card">
                            <div class="gnc-card-icon"><i class="fas fa-user-shield"></i></div>
                            <h5>Confidence & Leadership</h5>
                            <p>Our approach is meant to give you the confidence to tackle any challenge. We are committed to developing leaders who pursue their chosen career path without fear, equipping you with essential professional skills and global perspectives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div id="mypopupModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0 position-relative">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" style="position: absolute; right: 15px; top: 15px; z-index: 100;"></button>
                    <a href="https://application.gnc.edu.in/">
                        <img src="upload/gnc-popup-banner.webp" alt="Admission Open" class="w-100 img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('cuSliderTrack');
            const prevBtn = document.getElementById('cuPrevBtn');
            const nextBtn = document.getElementById('cuNextBtn');
            let index = 0;

            function updateSlider() {
                const totalSlides = document.querySelectorAll('.gnc-feature-card').length;
                const slidesPerView = window.innerWidth <= 992 ? 1 : 2;
                const maxIndex = totalSlides - slidesPerView;
                if(index > maxIndex) index = 0;
                if(index < 0) index = maxIndex;
                const move = index * (100 / slidesPerView);
                track.style.transform = `translateX(-${move}%)`;
            }

            nextBtn.addEventListener('click', () => { index++; updateSlider(); });
            prevBtn.addEventListener('click', () => { index--; updateSlider(); });
            window.addEventListener('resize', updateSlider);
            setInterval(() => { index++; updateSlider(); }, 5000);
        });
    </script>

    <?php require "company-logo.php"?>
    <?php require "testimoni-2.php"?>
    <?php require "common/footer.php"; ?>
</body>
</html>