<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vision, Mission & Core Values | Guru Nanak College Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #003366;
            --accent-color: #f3f3f3;
            --text-dark: #111111;
            --text-muted: #444444;
            --gold-accent: #ffcc00;
            --icon-blue: #5b69bc; 
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-image: url('/images/bg.avif'); 
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            color: var(--text-dark);
        }

        /* ---------- HERO BANNER ---------- */
        .pageBanner-inner {
            position: relative;
            padding-top: 100px; 
            background-image: url('upload/infra/vission-banner.webp');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.65); 
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
        }

        .upper-banner-content h3 {
            font-size: 52px;
            font-weight: 800;
            color: #ffffff;
            text-transform: uppercase;
        }

        .upper-banner-content small {
            font-size: 20px;
            font-weight: 400;
            display: block;
            margin-top: 20px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
        }

        /* ---------- LAYOUT CONTENT ---------- */
        .page-container {
            max-width: 1350px;
            margin: 12px auto;
            padding: 40px 40px;
            background: rgba(255, 255, 255, 0.98);
           
        }

        h2 {
            font-size: 42px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 30px;
        }

        
        .vision-row {
            display: flex;
            align-items: center;
            gap: 60px;
            
        }

        .vision-text { flex: 1.2; }
        .vision-image-box { flex: 0.8; display: flex; justify-content: center; }
        
        .vision-circle {
            width: 380px;
            height: 380px;
            border-radius: 50%;
            overflow: hidden;
            border: 12px solid #fff;
            box-shadow: 0 15px 45px rgba(0,0,0,0.15);
        }
        .vision-circle img { width: 100%; height: 100%; object-fit: cover; }

        
        .mission-row {
            display: flex;
            flex-direction: row-reverse; 
            align-items: center;
            gap: 60px;
            background: #f8f9fc;
            padding: 60px 40px;
            border-radius: 20px;
            margin-top:2rem;
        }

        .mission-text-area { flex: 1.5; }
        .mission-image-area { flex: 1; display: flex; justify-content: center; }

        
        .mission-img-styled {
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            /* This inverts/mirrors the image horizontally to match your request */
            transform: scaleX(-1); 
        }

        .mission-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        /* Reference-style icons */
        .mission-item {
            display: flex;
            gap: 15px;
            font-size: 14px;
            line-height: 1.6;
            color: var(--text-muted);
        }

        .mission-item::before {
            content: "◎"; /* Custom bullet matching the reference style */
            color: var(--icon-blue);
            font-size: 20px;
            font-weight: bold;
            flex-shrink: 0;
        }

        /* CORE VALUES */
        .values-section { margin-top: 100px; }
        .values-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .value-card {
            background: #fff;
            padding: 30px;
            border-left: 4px solid var(--gold-accent);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .value-card strong { display: block; margin-bottom: 10px; color: var(--primary-color); font-size: 18px; }

        @media (max-width: 992px) {
            .vision-row, .mission-row { flex-direction: column !important; text-align: center; padding-top:1rem;}
            .mission-grid { grid-template-columns: 1fr; text-align: left; }
            .vision-circle { width: 300px; height: 300px; }

        }

        @media (max-width: 600px) {
            .page-container { padding: 40px 20px; }
            .margin: 0 !important;
            }
    </style>
</head>
<body>

<?php require "common/header.php"; ?>

<section class="pageBanner-inner">
    <div class="hero-overlay">
        <div class="upper-banner-content">
            <h3>Vision & Mission</h3>
            <small>
                A brand new approach to holistic education. Join Guru Nanak College in <br>
                our mission to educate, inspire, and empower, one student at a time.
            </small>
           
        </div>
    </div>
</section>

<div class="page-container">

    
    <section class="vision-row">
        <div class="vision-text">
            <h2>Our Vision</h2>
            <p>At Guru Nanak College, the vision is to create a learning environment that goes beyond traditional education. Inspired by Guru Nanak Dev Ji’s teachings, the college focuses on 'Learning by Doing,' providing practical, hands-on experiences that equip students with real-world skills.</p>
            <p>The college endeavors to keep education affordable and promote an international culture, ensuring quality education is accessible to everyone, regardless of caste, creed, or gender.</p>
        </div>
        <div class="vision-image-box">
            <div class="vision-circle">
             <img src="images/vision-1.webp" alt="College Vision">
            </div>
        </div>
    </section>

    
    <section class="mission-row">
        <div class="mission-text-area">
            <h2>Our Mission</h2>
            <div class="mission-grid">
                <div class="mission-item">To combine digital knowledge with academic excellence by incorporating modern technology into the curriculum.</div>
                <div class="mission-item">To support female students by encouraging entrepreneurial ventures and innovation.</div>
                <div class="mission-item">To maintain a faculty of experienced teachers, researchers, and industry experts for corporate insights.</div>
                <div class="mission-item">To uplift defense wards, athletes, and meritorious students by offering extensive scholarships.</div>
                <div class="mission-item">To offer clear guidance on career paths, including jobs, research, and entrepreneurship globally.</div>
                <div class="mission-item">To support students in researching and developing affordable generic medicines via advanced resources.</div>
            </div>
        </div>
        <div class="mission-image-area">
            
            <img src="images/mission.webp" alt="College Mission" class="mission-img-styled">
        </div>
    </section>

    
    <section class="values-section">
        <h2>Core Values</h2>
        <div class="values-list">
            <div class="value-card">
                <strong>Excellence & Knowledge</strong>
                To be globally recognized as a Centre of Excellence for Research, Innovation, and Entrepreneurship.
            </div>
            <div class="value-card">
                <strong>Inclusivity & Diversity</strong>
                Inclusivity and diversity are at the heart of our community, valuing unique perspectives and experiences.
            </div>
            <div class="value-card">
                <strong>Innovation in Education</strong>
                Encouraging staff to think creatively and explore new methodologies that push traditional boundaries.
            </div>
            <div class="value-card">
                <strong>Ethics & Integrity</strong>
                Ethical behavior and integrity, guided by the teachings of Guru Nanak College , are fundamental to our institution. We strive to create leaders who are not just successful in their fields but also mindful of their ethical responsibilities. Our employees are expected to uphold these values, creating a trustworthy and respectful workplace.
            </div>
            
            <div class="value-card">
                <strong>Community & Environmental Responsibility</strong>
                We also emphasize the importance of community engagement and environmental responsibility. Our staff are encouraged to participate in outreach programs and contribute to sustainability initiatives, reflecting our commitment to social and environmental stewardship.
            </div>
            <div class="value-card">
                <strong>Fulfilling Career Paths</strong>
                If you share these values and are passionate about making a difference in education, Guru Nanak College offers a fulfilling and enriching career path. Join us in our mission to educate, inspire, and empower, one student at a time.
            </div>
          

            
        </div>
    </section>

</div>

<?php require "company-logo.php"?>
<?php require "testimoni-2.php"?>
<?php require "common/footer.php"; ?>

</body>
</html>