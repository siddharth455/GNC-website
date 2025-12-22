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
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: var(--text-dark);
        }

        /* ---------- HERO BANNER ---------- */
        .pageBanner-inner {
            position: relative;
            padding-top: 100px; /* Space for fixed header */
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
            line-height: 1.2;
            margin: 0;
            text-transform: uppercase;
            color: #ffffff;
            text-shadow: 2px 4px 10px rgba(0,0,0,0.3);
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
            max-width: 1100px;
            margin: auto;
            padding: 80px 20px;
        }

        h2 {
            font-size: 36px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 12px;
        }

        h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 70px;
            height: 4px;
            background: var(--gold-accent);
        }

        p {
            font-size: 17px;
            line-height: 1.8;
            color: var(--text-muted);
            margin-bottom: 25px;
        }

        /* ---------- POINT-BASED LIST STYLING ---------- */
        .content-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .content-item {
            position: relative;
            padding-left: 35px;
            margin-bottom: 30px;
            font-size: 16px;
            line-height: 1.8;
            color: var(--text-muted);
        }

        .content-item::before {
            content: "◎"; /* Bullet icon matching your previous style */
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary-color);
            font-weight: bold;
            font-size: 20px;
        }

        .content-item strong {
            color: var(--primary-color);
            display: block;
            font-size: 19px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        /* ---------- SECTION SPACING ---------- */
        .vision-section, .mission-section, .values-section {
            margin-bottom: 80px;
        }

        @media (max-width: 768px) {
            .upper-banner-content h3 { font-size: 34px; }
            .upper-banner-content small { font-size: 16px; }
            .page-container { padding: 50px 20px; }
            .pageBanner-inner { padding-top: 80px; }
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

    <section class="vision-section">
        <h2>Our Vision</h2>
        <p>
            At Guru Nanak College , the vision is to create a learning environment that goes beyond traditional education. Inspired by Guru Nanak Dev Ji’s teachings, the college focuses on 'Learning by Doing,' providing practical, hands-on experiences that equip students with real-world skills. The college endeavors to keep education affordable and promote an international culture, ensuring quality education is accessible to everyone, regardless of caste, creed, or gender. An inclusive community that values diversity and encourages lifelong learning is central to our vision.
        </p>
    </section>

    <section class="mission-section">
        <h2>Our Mission</h2>
        <div class="content-list">
            <div class="content-item">To combine digital knowledge with academic excellence by incorporating modern technology into the curriculum and ensuring students gain practical, hands-on experiences that develop real-world skills through 'Learning by Doing''.</div>
            <div class="content-item">To support female students by encouraging entrepreneurial ventures and develop innovation, while providing resources and support services for physically challenged students, promoting independence and self-sufficiency.</div>
            <div class="content-item">To maintain a faculty of experienced teachers, researchers, scientists, and professionals, and include industry experts in the management team for enriching students' learning experiences with corporate insights and expertise.</div>
            <div class="content-item">To uplift defense wards, athletes, meritorious students, girls, and economically weaker sections by offering scholarships, and to support nearby villages by providing free education. This includes inspiring higher education, lifelong learning, and empowering students with educational guidance, medical assistance, and skills for a sustainable livelihood.</div>
            <div class="content-item">To offer clear guidance on career paths, including jobs, research, entrepreneurship, and further studies in India and abroad.</div>
            <div class="content-item">To support our students in researching and developing affordable generic medicines, via our advanced research resources and expert guidance ensuring accessible healthcare solutions for all with a no-profit-no-loss approach.</div>
        </div>
    </section>

    <section class="values-section">
        <h2>Core Values</h2>
        <div class="content-list">
            <div class="content-item">
                <strong>Excellence & Knowledge Dissemination</strong>
                To be globally recognized as a Centre of Excellence for Research, Innovation, Entrepreneurship and disseminating knowledge by providing inspirational learning to produce professional leaders for serving the society.
            </div>
            <div class="content-item">
                <strong>Inclusivity & Diversity</strong>
               Inclusivity and diversity are at the heart of our community. We welcome staff from all backgrounds, valuing the unique perspectives and experiences they bring. This diversity fosters a rich, collaborative environment, essential for both personal growth and academic excellence.
            </div>
            <div class="content-item">
                <strong>Innovation in Education</strong>
                Innovation is key to our success. We encourage our staff to think creatively, explore new teaching methodologies, and engage in research that pushes the boundaries of traditional education. This culture of innovation not only benefits our students but also ensures a stimulating and dynamic work environment for our staff.
            </div>
            <div class="content-item">
                <strong>Ethics & Integrity</strong>
                Ethical behavior and integrity, guided by the teachings of Guru Nanak College , are fundamental to our institution. We strive to create leaders who are not just successful in their fields but also mindful of their ethical responsibilities. Our employees are expected to uphold these values, creating a trustworthy and respectful workplace.
            </div>
            <div class="content-item">
                <strong>Community & Environmental Responsibility</strong>
                We also emphasize the importance of community engagement and environmental responsibility. Our staff are encouraged to participate in outreach programs and contribute to sustainability initiatives, reflecting our commitment to social and environmental stewardship.
            </div>
            <div class="content-item">
                <strong>Fulfilling Career Paths</strong>
                If you share these values and are passionate about making a difference in education, Guru Nanak College offers a fulfilling and enriching career path. Join us in our mission to educate, inspire, and empower, one student at a time.
            </div>
            <div class="content-item">
                <strong>Operational Integrity</strong>
                Ethical conduct, inspired by the teachings of Guru Nanak College , underpins all our operations, ensuring integrity in our academic and administrative activities.
            </div>
        </div>
    </section>

</div>

<?php require "company-logo.php"?>
<?php require "testimoni-2.php"?>
<?php require "common/footer.php"; ?>

</body>
</html>