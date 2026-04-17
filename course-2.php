<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Top GNM Nursing College in Dehradun | GNC Uttarakhand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Guru Nanak College, Dehradun's best Nursing & Midway (GNM) institution. With a comprehensive curriculum, experienced faculty, and hands-on clinical training, Guru Nanak College nurtures future nursing professionals ready to make a difference in healthcare.">
    <link rel="canonical" href="https://gnc.edu.in/best-gnm-college-in-dehradun">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,300&family=Playfair+Display:ital,wght@0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --orange: #fb7b1c;
            --blue: #007bff;
            --dark: #0d1117;
            --mid: #1a2233;
            --text: #2c3347;
            --text-light: #5a6480;
            --white: #ffffff;
            --off-white: #f8f9fc;
            --card-bg: #ffffff;
            --border: rgba(0,0,0,0.08);
        }

        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: var(--white);
            overflow-x: hidden;
        }

        /* ── SCROLL ANIMATIONS ── */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1);
        }
        .reveal.revealed { opacity: 1; transform: none; }
        .reveal-left  { opacity: 0; transform: translateX(-50px); transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1); }
        .reveal-right { opacity: 0; transform: translateX(50px);  transition: opacity 0.7s cubic-bezier(.22,1,.36,1), transform 0.7s cubic-bezier(.22,1,.36,1); }
        .reveal-left.revealed, .reveal-right.revealed { opacity: 1; transform: none; }
        .reveal-scale { opacity: 0; transform: scale(0.88); transition: opacity 0.6s ease, transform 0.6s cubic-bezier(.34,1.56,.64,1); }
        .reveal-scale.revealed { opacity: 1; transform: scale(1); }

        .delay-1 { transition-delay: 0.1s !important; }
        .delay-2 { transition-delay: 0.2s !important; }
        .delay-3 { transition-delay: 0.3s !important; }
        .delay-4 { transition-delay: 0.4s !important; }
        .delay-5 { transition-delay: 0.5s !important; }
        .delay-6 { transition-delay: 0.6s !important; }

        /* ── HERO BANNER ── */
        .page-banner {
            position: relative;
            min-height: 520px;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--dark);
        }
        .page-banner__bg {
            position: absolute; inset: 0;
            background-image: url('upload/gnm-head.webp');
            background-size: cover;
            background-position: center;
            opacity: 0.35;
            transform: scale(1.05);
            animation: kenBurns 18s ease-in-out infinite alternate;
        }
        @keyframes kenBurns {
            0%   { transform: scale(1.05) translateX(0); }
            100% { transform: scale(1.12) translateX(-20px); }
        }
        .page-banner__overlay {
            position: absolute; inset: 0;
            background: linear-gradient(120deg, rgba(0,0,0,0.85) 40%, rgba(0,123,255,0.18) 100%);
        }
        .page-banner__content {
            position: relative; z-index: 2;
            max-width: 1200px; margin: 0 auto;
            padding: 80px 24px 80px;
            display: flex; align-items: center; gap: 60px;
        }
        .banner-text { flex: 1; }
        .banner-tag {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(251,123,28,0.15);
            border: 1px solid rgba(251,123,28,0.4);
            color: var(--orange);
            font-size: 0.8rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase;
            padding: 6px 14px; border-radius: 100px;
            margin-bottom: 18px;
            animation: fadeSlideDown 0.7s ease both;
        }
        .banner-tag::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--orange); display: block; animation: pulse 1.8s infinite; }
        @keyframes pulse { 0%,100%{opacity:1;transform:scale(1)} 50%{opacity:.5;transform:scale(1.5)} }
        @keyframes fadeSlideDown { from{opacity:0;transform:translateY(-20px)} to{opacity:1;transform:none} }

        .banner-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4.5vw, 3.6rem);
            color: var(--white);
            line-height: 1.15;
            margin-bottom: 16px;
            animation: fadeSlideUp 0.8s 0.1s ease both;
        }
        .banner-title span { color: var(--orange); }
        @keyframes fadeSlideUp { from{opacity:0;transform:translateY(30px)} to{opacity:1;transform:none} }

        .banner-subtitle {
            color: rgba(255,255,255,0.7);
            font-size: 1rem; line-height: 1.7;
            max-width: 480px; margin-bottom: 30px;
            animation: fadeSlideUp 0.8s 0.2s ease both;
        }
        .banner-btns { display: flex; gap: 12px; flex-wrap: wrap; animation: fadeSlideUp 0.8s 0.3s ease both; }

        .btn-primary-gnc {
            display: inline-flex; align-items: center; gap: 8px;
            background: linear-gradient(135deg, var(--orange), #ff5c00);
            color: #fff; font-weight: 700; font-size: 0.92rem;
            padding: 13px 28px; border-radius: 8px;
            text-decoration: none; border: none; cursor: pointer;
            box-shadow: 0 8px 24px rgba(251,123,28,0.35);
            transition: transform 0.25s, box-shadow 0.25s;
        }
        .btn-primary-gnc:hover { transform: translateY(-3px); box-shadow: 0 14px 32px rgba(251,123,28,0.45); }

        .btn-secondary-gnc {
            display: inline-flex; align-items: center; gap: 8px;
            background: rgba(255,255,255,0.1); backdrop-filter: blur(8px);
            color: #fff; font-weight: 600; font-size: 0.92rem;
            padding: 13px 28px; border-radius: 8px;
            text-decoration: none; border: 1px solid rgba(255,255,255,0.25);
            transition: background 0.25s, transform 0.25s;
        }
        .btn-secondary-gnc:hover { background: rgba(255,255,255,0.18); transform: translateY(-3px); }

        /* Banner Stats */
        .banner-stats {
            display: flex; gap: 24px; flex-wrap: wrap;
            margin-top: 36px; padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.12);
            animation: fadeSlideUp 0.8s 0.4s ease both;
        }
        .stat-item { text-align: left; }
        .stat-num { font-family:'Playfair Display',serif; font-size: 2rem; font-weight: 800; color: var(--orange); line-height: 1; }
        .stat-label { font-size: 0.78rem; color: rgba(255,255,255,0.55); margin-top: 4px; text-transform: uppercase; letter-spacing: .08em; }

        /* Banner image card */
        .banner-image-card {
            flex: 0 0 380px; position: relative;
            animation: fadeSlideUp 0.9s 0.3s ease both;
        }
        .banner-image-card img {
            width: 100%; border-radius: 16px;
            box-shadow: 0 30px 70px rgba(0,0,0,0.5);
            display: block;
        }
        .banner-image-card::before {
            content: ''; position: absolute;
            inset: -10px -10px auto auto; width: 80px; height: 80px;
            background: var(--orange); border-radius: 50%; opacity: 0.15;
            z-index: -1;
        }

        /* ── ABOUT SECTION ── */
        .about-section {
            background: var(--off-white);
            padding: 70px 24px;
        }
        .container-gnc { max-width: 1200px; margin: 0 auto; }

        .section-label {
            display: inline-block;
            font-size: 0.75rem; font-weight: 700; letter-spacing: .14em;
            text-transform: uppercase; color: var(--orange);
            margin-bottom: 10px;
        }
        .section-label::before { content: '— '; }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(1.7rem, 3vw, 2.5rem);
            color: var(--dark); line-height: 1.2; margin-bottom: 16px;
        }
        .section-title span { color: var(--blue); }

        .about-grid {
            display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
            align-items: center;
        }
        .about-text p {
            color: var(--text-light); line-height: 1.8; font-size: 1rem; margin-bottom: 16px;
        }
        .about-image { position: relative; }
        .about-image img { width: 100%; border-radius: 16px; display: block; }
        .about-image-badge {
            position: absolute; bottom: -20px; right: -20px;
            background: linear-gradient(135deg, var(--orange), #ff5c00);
            color: white; padding: 18px 22px; border-radius: 12px;
            text-align: center; box-shadow: 0 12px 30px rgba(251,123,28,0.3);
        }
        .about-image-badge strong { display: block; font-size: 1.8rem; font-weight: 800; line-height: 1; }
        .about-image-badge span { font-size: 0.7rem; opacity: .85; text-transform: uppercase; letter-spacing: .05em; }

        /* ── FEE + ELIGIBILITY ── */
        .fee-section {
            background: var(--white);
            padding: 70px 24px;
        }
        .fee-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start; }

        .tab-nav {
            display: flex; gap: 0; margin-bottom: 24px;
            border: 1px solid var(--border); border-radius: 10px; overflow: hidden;
        }
        .tab-btn {
            flex: 1; padding: 12px 20px; font-size: 0.88rem; font-weight: 600;
            background: none; border: none; cursor: pointer; color: var(--text-light);
            transition: all 0.25s; font-family: 'DM Sans', sans-serif;
        }
        .tab-btn.active { background: linear-gradient(135deg, var(--orange), #ff5c00); color: white; }

        .tab-pane-gnc { display: none; }
        .tab-pane-gnc.active { display: block; }

        .eligibility-box {
            background: linear-gradient(135deg, #eef6ff, #dceeff);
            border-left: 4px solid var(--blue);
            border-radius: 10px; padding: 18px 20px; margin-bottom: 20px;
            font-size: 0.9rem; line-height: 1.7; color: var(--text);
        }
        .eligibility-box p { margin-bottom: 8px; }
        .eligibility-box p:last-child { margin: 0; }

        .fee-table {
            width: 100%; border-collapse: collapse; font-size: 0.88rem; margin-bottom: 20px;
        }
        .fee-table th {
            background: var(--dark); color: white; padding: 11px 14px; text-align: left; font-weight: 600;
        }
        .fee-table td { padding: 10px 14px; border-bottom: 1px solid var(--border); }
        .fee-table tr:last-child td { border: none; }
        .fee-table tr:hover td { background: #f5f7fa; }
        .fee-table .note-row td { background: #fffbf5; font-size: 0.8rem; color: var(--text-light); }

        .scholarship-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 10px; }
        .sch-card {
            background: linear-gradient(135deg, var(--off-white), #eef2f8);
            border-radius: 10px; padding: 14px 12px; text-align: center;
            border: 1px solid var(--border);
            transition: transform 0.25s, box-shadow 0.25s;
        }
        .sch-card:hover { transform: translateY(-4px); box-shadow: 0 8px 20px rgba(0,0,0,0.08); }
        .sch-card .pct { font-size: 1.5rem; font-weight: 800; color: var(--orange); display: block; }
        .sch-card .range { font-size: 0.7rem; color: var(--text-light); margin-top: 4px; }

        /* Video + Note */
        .video-wrap {
            border-radius: 16px; overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.12);
            aspect-ratio: 16/9; margin-bottom: 20px;
        }
        .video-wrap iframe { width: 100%; height: 100%; border: none; }

        .note-card {
            background: linear-gradient(135deg, var(--dark), var(--mid));
            border-radius: 14px; padding: 24px;
            color: white;
        }
        .note-card h4 { font-size: 1rem; font-weight: 700; margin-bottom: 14px; color: var(--orange); }
        .note-card li { margin-bottom: 10px; font-size: 0.88rem; color: rgba(255,255,255,0.75); padding-left: 18px; position: relative; }
        .note-card li::before { content: '›'; position: absolute; left: 0; color: var(--orange); font-weight: 700; }
        .note-card ol { margin: 8px 0 0 16px; }
        .note-card ol li::before { display: none; }
        .note-card ol li { list-style: decimal; padding-left: 0; }

        /* ── ACADEMIC NOTES ── */
        .academic-section {
            padding: 70px 24px;
            background: linear-gradient(135deg, var(--dark) 0%, var(--mid) 100%);
            position: relative; overflow: hidden;
        }
        .academic-section::before {
            content: '';
            position: absolute; top: -100px; right: -100px;
            width: 400px; height: 400px; border-radius: 50%;
            background: radial-gradient(circle, rgba(251,123,28,0.12), transparent 70%);
        }
        .academic-grid { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; }

        .ac-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 16px; padding: 28px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s, border-color 0.3s, background 0.3s;
        }
        .ac-card:hover { transform: translateY(-6px); border-color: var(--orange); background: rgba(255,255,255,0.08); }
        .ac-card.wide { grid-column: span 2; }
        .ac-icon { width: 44px; height: 44px; border-radius: 10px; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; font-size: 1.1rem; }
        .ac-icon.orange { background: rgba(251,123,28,0.2); color: var(--orange); }
        .ac-icon.blue   { background: rgba(0,123,255,0.2); color: var(--blue); }
        .ac-card h4 { font-size: 1rem; font-weight: 700; color: white; margin-bottom: 12px; }
        .ac-card ul { padding: 0; list-style: none; }
        .ac-card ul li {
            font-size: 0.85rem; color: rgba(255,255,255,0.65);
            padding: 7px 0; border-bottom: 1px solid rgba(255,255,255,0.06);
            padding-left: 16px; position: relative;
        }
        .ac-card ul li:last-child { border: none; }
        .ac-card ul li::before { content: '›'; position: absolute; left: 0; color: var(--orange); }
        .ac-card p { font-size: 0.88rem; color: rgba(255,255,255,0.65); line-height: 1.7; }
        .ac-card .highlight { color: var(--orange); font-weight: 700; }

        /* ── CAREER SECTION ── */
        .career-section { padding: 70px 24px; background: var(--off-white); }
        .career-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .career-text p { font-size: 1rem; color: var(--text-light); line-height: 1.8; margin-bottom: 14px; }

        .career-cards-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; margin-top: 24px; }
        .career-card {
            background: white; border-radius: 12px; padding: 18px;
            border: 1px solid var(--border);
            display: flex; gap: 14px; align-items: flex-start;
            transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
        }
        .career-card:hover { transform: translateY(-4px); box-shadow: 0 10px 28px rgba(0,0,0,0.08); border-color: var(--orange); }
        .career-icon { width: 40px; height: 40px; border-radius: 10px; background: linear-gradient(135deg, rgba(251,123,28,0.12), rgba(251,123,28,0.05)); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--orange); }
        .career-card h5 { font-size: 0.85rem; font-weight: 700; color: var(--dark); margin-bottom: 4px; }
        .career-card p { font-size: 0.78rem; color: var(--text-light); line-height: 1.5; margin: 0; }

        /* ── WHY JOIN ── */
        .why-section {
            padding: 70px 24px;
            background: linear-gradient(135deg, var(--blue) 0%, #0050cc 100%);
            position: relative; overflow: hidden;
        }
        .why-section::after {
            content: '';
            position: absolute; bottom: -80px; right: -80px;
            width: 300px; height: 300px; border-radius: 50%;
            background: rgba(255,255,255,0.05);
        }
        .why-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 60px; align-items: center; }
        .why-text .section-title { color: white; }
        .why-text .section-label { color: rgba(255,255,255,0.7); }
        .why-text p { color: rgba(255,255,255,0.75); line-height: 1.8; font-size: 1rem; margin-bottom: 16px; }

        .benefits-list { display: grid; grid-template-columns: 1fr; gap: 12px; margin-top: 20px; }
        .benefit-item {
            display: flex; align-items: flex-start; gap: 14px;
            background: rgba(255,255,255,0.08); border-radius: 10px; padding: 14px 16px;
            border: 1px solid rgba(255,255,255,0.12);
            transition: background 0.25s, transform 0.25s;
        }
        .benefit-item:hover { background: rgba(255,255,255,0.14); transform: translateX(6px); }
        .benefit-check { width: 28px; height: 28px; border-radius: 50%; background: rgba(251,123,28,0.25); color: var(--orange); display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 0.75rem; }
        .benefit-item p { color: rgba(255,255,255,0.8); font-size: 0.88rem; line-height: 1.6; margin: 0; }

        .why-image-card { position: relative; }
        .why-image-card img { width: 100%; border-radius: 20px; display: block; box-shadow: 0 30px 60px rgba(0,0,0,0.3); }
        .why-floating-badge {
            position: absolute; top: -16px; right: -16px;
            background: var(--orange); color: white;
            padding: 14px 20px; border-radius: 12px;
            font-weight: 800; font-size: 1.6rem; line-height: 1;
            box-shadow: 0 10px 28px rgba(251,123,28,0.4);
        }
        .why-floating-badge small { display: block; font-size: 0.7rem; font-weight: 400; opacity: .8; margin-top: 2px; }

        /* ── ADMISSION PROCESS ── */
        .admission-section { padding: 70px 24px; background: white; }
        .steps-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 24px; margin-top: 48px; position: relative; }
        .steps-grid::before {
            content: ''; position: absolute; top: 28px; left: 10%; right: 10%;
            height: 2px; background: linear-gradient(90deg, var(--orange), var(--blue));
            z-index: 0;
        }
        .step-card {
            position: relative; z-index: 1; text-align: center;
            transition: transform 0.3s;
        }
        .step-card:hover { transform: translateY(-8px); }
        .step-num {
            width: 56px; height: 56px; border-radius: 50%;
            background: linear-gradient(135deg, var(--orange), #ff5c00);
            color: white; font-weight: 800; font-size: 1.2rem;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 18px; box-shadow: 0 8px 22px rgba(251,123,28,0.35);
        }
        .step-card h5 { font-size: 0.9rem; font-weight: 700; color: var(--dark); margin-bottom: 8px; }
        .step-card p { font-size: 0.8rem; color: var(--text-light); line-height: 1.6; }

        /* ── CTA STRIP ── */
        .cta-strip {
            background: linear-gradient(135deg, var(--orange), #ff5c00);
            padding: 50px 24px;
            text-align: center;
        }
        .cta-strip h2 { font-family: 'Playfair Display',serif; font-size: clamp(1.6rem,3vw,2.4rem); color: white; margin-bottom: 10px; }
        .cta-strip p { color: rgba(255,255,255,0.85); margin-bottom: 24px; font-size: 1rem; }
        .btn-white-gnc {
            display: inline-flex; align-items: center; gap: 8px;
            background: white; color: var(--orange); font-weight: 700; font-size: 0.95rem;
            padding: 14px 32px; border-radius: 8px; text-decoration: none;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            transition: transform 0.25s, box-shadow 0.25s;
        }
        .btn-white-gnc:hover { transform: translateY(-3px); box-shadow: 0 14px 36px rgba(0,0,0,0.2); }

        /* ── DOWNLOAD FEE BTN ── */
        .btn-download-gnc {
            display: inline-flex; align-items: center; gap: 8px;
            background: linear-gradient(135deg, var(--blue), #0050cc);
            color: white; font-weight: 600; font-size: 0.85rem;
            padding: 10px 20px; border-radius: 8px; text-decoration: none;
            margin-bottom: 20px;
            box-shadow: 0 6px 18px rgba(0,123,255,0.25);
            transition: transform 0.2s;
        }
        .btn-download-gnc:hover { transform: translateY(-2px); }

        /* ── RESPONSIVE ── */
        @media (max-width: 1024px) {
            .page-banner__content { flex-direction: column; }
            .banner-image-card { display: none; }
            .about-grid, .fee-grid, .career-grid, .why-grid { grid-template-columns: 1fr; }
            .academic-grid { grid-template-columns: 1fr; }
            .ac-card.wide { grid-column: span 1; }
            .steps-grid { grid-template-columns: 1fr 1fr; }
            .steps-grid::before { display: none; }
        }
        @media (max-width: 640px) {
            .career-cards-grid { grid-template-columns: 1fr; }
            .scholarship-grid { grid-template-columns: 1fr 1fr; }
            .steps-grid { grid-template-columns: 1fr; }
            .tab-nav { flex-direction: column; }
        }
    </style>
</head>
<body>

<!-- ═══════════════════════════════ HERO BANNER ════════════════════════════ -->
<section class="page-banner">
    <div class="page-banner__bg"></div>
    <div class="page-banner__overlay"></div>
    <div class="page-banner__content">
        <div class="banner-text">
            <div class="banner-tag">Healthcare Education</div>
            <h1 class="banner-title">General Nursing &<br><span>Midwifery (GNM)</span></h1>
            <p class="banner-subtitle">A comprehensive diploma program shaping compassionate, skilled nursing professionals ready to transform healthcare in India and globally.</p>
            <div class="banner-btns">
                <a href="https://application.gnc.edu.in/" target="_blank" class="btn-primary-gnc">Apply Now <i class="fas fa-arrow-right"></i></a>
                <a href="upload/pdf/GNM.pdf" target="_blank" class="btn-secondary-gnc"><i class="fas fa-download"></i> Download Brochure</a>
            </div>
            <div class="banner-stats">
                <div class="stat-item">
                    <div class="stat-num">3 Yrs</div>
                    <div class="stat-label">Diploma Duration</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">40%</div>
                    <div class="stat-label">Min. Eligibility</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">₹1.25L</div>
                    <div class="stat-label">Per Year Fee</div>
                </div>
                <div class="stat-item">
                    <div class="stat-num">100%</div>
                    <div class="stat-label">Placement Support</div>
                </div>
            </div>
        </div>
        <div class="banner-image-card">
            <img src="upload/infra/gnm.webp" alt="GNM Nursing at GNC Dehradun">
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ ABOUT ════════════════════════════════ -->
<section class="about-section">
    <div class="container-gnc">
        <div class="about-grid">
            <div class="about-text reveal-left">
                <span class="section-label">About the Program</span>
                <h2 class="section-title">Best GNM College in<br><span>Dehradun, Uttarakhand</span></h2>
                <p>General Nursing and Midwifery (GNM) is an essential healthcare course designed for individuals aspiring to enter the nursing and midwifery profession. This diploma program, which usually spans three years, encompasses a comprehensive curriculum that combines theoretical knowledge with extensive practical training.</p>
                <p>The GNM course aims to prepare students to deliver high-quality care in various healthcare settings. It covers a wide range of subjects, including human anatomy, physiology, nutrition, psychology, and principles of nursing. The program also focuses on maternal and child health, providing specialized training in midwifery.</p>
                <a href="https://application.gnc.edu.in/" target="_blank" class="btn-primary-gnc" style="margin-top:8px;">Apply Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="about-image reveal-right">
                <img src="upload/infra/gnm.webp" alt="GNM Students at GNC">
                <div class="about-image-badge reveal-scale delay-3">
                    <strong>Guru Nanak</strong>
                    <span>College, Dehradun</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ FEE + ELIGIBILITY ════════════════════ -->
<section class="fee-section">
    <div class="container-gnc">
        <div class="fee-grid">
            <!-- Left: Fee Details -->
            <div class="reveal-left">
                <span class="section-label">Fee & Eligibility</span>
                <h2 class="section-title">Eligibility &<br><span>Fee Structure</span></h2>
                <a href="upload/pdf/fee-structure-2026-27.pdf" target="_blank" class="btn-download-gnc"><i class="fas fa-file-pdf"></i> Download Fee Structure 2026-27</a>

                <!-- Tabs -->
                <div class="tab-nav">
                    <button class="tab-btn active" onclick="switchTab('fee')">Fee Structure</button>
                    <button class="tab-btn" onclick="switchTab('hostel')">Hostel Fees</button>
                </div>

                <!-- Tab: Fee -->
                <div class="tab-pane-gnc active" id="tab-fee">
                    <div class="eligibility-box">
                        <p><strong>Eligibility Criteria</strong></p>
                        <p>10+2 with English and minimum 40% marks at the qualifying examination from any recognized board. Candidates from State Open School / NIOS are also eligible. Science is preferable.</p>
                        <p>10+2 with English (40%) in vocational ANM course from Indian Nursing Council recognized school, or Vocational Stream – Health Care Science from recognized CBSE board.</p>
                    </div>
                    <h5 style="font-size:.85rem;font-weight:700;margin-bottom:10px;color:var(--dark);">All India Quota — Fee in INR</h5>
                    <table class="fee-table">
                        <thead><tr><th>Heads</th><th>Course Fee (Per Year)</th></tr></thead>
                        <tbody>
                            <tr><td>Total Package Fee</td><td><strong>₹1,25,000</strong></td></tr>
                            <tr class="note-row"><td colspan="2">Includes: Registration, Admission, Lab, Library, Medical Consultation & Ambulance, ERP Membership, Hospital Training, Uniform Charges.</td></tr>
                        </tbody>
                    </table>
                    <h5 style="font-size:.85rem;font-weight:700;margin:18px 0 10px;color:var(--dark);">Merit Based Scholarships (12th %)</h5>
                    <div class="scholarship-grid">
                        <div class="sch-card reveal-scale delay-1"><span class="pct">10%</span><div class="range">65 – 74.99%</div></div>
                        <div class="sch-card reveal-scale delay-2"><span class="pct">15%</span><div class="range">75 – 84.99%</div></div>
                        <div class="sch-card reveal-scale delay-3"><span class="pct">20%</span><div class="range">85 – 94.99%</div></div>
                        <div class="sch-card reveal-scale delay-4"><span class="pct" style="font-size:1rem;">TFW</span><div class="range">95% & above</div></div>
                    </div>
                </div>

                <!-- Tab: Hostel -->
                <div class="tab-pane-gnc" id="tab-hostel">
                    <h5 style="font-size:.85rem;font-weight:700;margin-bottom:10px;color:var(--dark);">Hostel Fee Per Year (INR)</h5>
                    <table class="fee-table">
                        <thead><tr><th>Room Type</th><th>Without Package</th><th>With Package</th></tr></thead>
                        <tbody>
                            <tr><td>Four Sharing</td><td>₹65,000</td><td>₹58,000</td></tr>
                            <tr><td>Three Sharing</td><td>₹78,000</td><td>₹70,000</td></tr>
                            <tr><td>Two Sharing</td><td>₹90,000</td><td>₹80,000</td></tr>
                            <tr class="note-row"><td colspan="3">Hostel Enrollment & Furnishing: ₹5,000/- (Once) | Laundry: ₹4,800/- Per Year</td></tr>
                            <tr class="note-row"><td colspan="3"><strong>Note:</strong> Package seats are for the complete duration of the course only.</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Right: Video + Notes -->
            <div class="reveal-right">
                <div class="video-wrap">
                    <iframe src="https://www.youtube.com/embed/VVkrWNioLT4?autoplay=1&mute=1&playlist=VVkrWNioLT4&loop=1" title="GNM Program Video" allowfullscreen></iframe>
                </div>
                <div class="note-card">
                    <h4>Additional Scholarships Available</h4>
                    <ul>
                        <li>These scholarships can be combined with merit-based scholarships:
                            <ol>
                                <li>10% — Uttarakhand Domicile</li>
                                <li>10% — Girl Child</li>
                                <li>10% — Orphan Student</li>
                                <li>10% — Sports Achievement</li>
                                <li>10% — Siblings enrolled at GNC</li>
                            </ol>
                        </li>
                        <li><strong style="color:#fff;">Note:</strong> Merit & additional scholarships apply to first year only, subject to Scholarship Committee approval.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ ACADEMIC NOTES ══════════════════════ -->
<section class="academic-section">
    <div class="container-gnc">
        <div style="text-align:center;margin-bottom:48px;" class="reveal">
            <span class="section-label" style="color:rgba(255,255,255,0.6);">Important Information</span>
            <h2 class="section-title" style="color:white;">Academic Notes &<br><span style="color:var(--orange);">Kalpana Chawla Scholarship</span></h2>
        </div>
        <div class="academic-grid">
            <div class="ac-card wide reveal-left">
                <div class="ac-icon orange"><i class="fas fa-info-circle"></i></div>
                <h4>Important Academic Notes</h4>
                <ul>
                    <li>Examination Fees: External as per University/Board/College norms — payable separately.</li>
                    <li>Career Development, Recruitment & Entrepreneurship: Power Degree by Career Buddy Club.</li>
                    <li>Dissertation Charges: ₹5,000/- in final year (for applicable courses per university curriculum).</li>
                    <li>Transportation Fee (Optional): For day scholars to/from Dehradun city — charged as per distance.</li>
                    <li>Transportation Fee (Optional): For internship/clinical posting/OJT for hostellers & day scholars.</li>
                    <li>Package seats are offered for the complete duration of the course only.</li>
                </ul>
            </div>
            <div class="reveal-right">
                <div class="ac-card" style="height:100%;">
                    <div class="ac-icon orange"><i class="fas fa-star"></i></div>
                    <h4>Kalpana Chawla Scholarship</h4>
                    <p style="margin-bottom:12px;"><span class="highlight">Special opportunity</span> for top-performing 5% students each calendar year.</p>
                    <p><strong style="color:rgba(255,255,255,0.9);">Eligibility:</strong></p>
                    <p>Students who perform best in the calendar year are awarded <strong style="color:var(--orange);">10% or 20% scholarship</strong> based on internal marks and a minimum 75% attendance each year.</p>
                    <div style="margin-top:20px;padding:14px;background:rgba(251,123,28,0.1);border-radius:10px;border:1px solid rgba(251,123,28,0.2);">
                        <p style="font-size:0.8rem;color:rgba(255,255,255,0.7);">Rewarding academic excellence and consistent dedication.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ CAREER SCOPE ════════════════════════ -->
<section class="career-section">
    <div class="container-gnc">
        <div class="career-grid">
            <div class="career-text reveal-left">
                <span class="section-label">Career Opportunities</span>
                <h2 class="section-title">Career Scope in<br><span>Nursing (GNM)</span></h2>
                <p>Graduates of General Nursing and Midwifery (GNM) have diverse career opportunities in the healthcare sector. They can work as Registered Nurses in hospitals, clinics, and community health centers, providing patient care and support.</p>
                <p>GNM graduates can also enter nursing education, teaching future nurses, or take up administrative roles like nursing supervisors. Opportunities extend to industrial and home care nursing, and for those looking internationally, there's a high demand for skilled nurses abroad.</p>
                <a href="https://application.gnc.edu.in/" target="_blank" class="btn-primary-gnc" style="margin-top:12px;">Apply Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="reveal-right">
                <img src="upload/infra/student-1.webp" alt="GNM Students" style="width:100%;border-radius:16px;margin-bottom:24px;box-shadow:0 20px 50px rgba(0,0,0,0.1);">
                <div class="career-cards-grid">
                    <div class="career-card reveal delay-1">
                        <div class="career-icon"><i class="fas fa-hospital"></i></div>
                        <div><h5>Registered Nurse</h5><p>Hospitals, clinics, and community health centers.</p></div>
                    </div>
                    <div class="career-card reveal delay-2">
                        <div class="career-icon"><i class="fas fa-stethoscope"></i></div>
                        <div><h5>Clinical Specialization</h5><p>Pediatrics, critical care with added training.</p></div>
                    </div>
                    <div class="career-card reveal delay-3">
                        <div class="career-icon"><i class="fas fa-heartbeat"></i></div>
                        <div><h5>Public Health</h5><p>Community education & wellness campaigns.</p></div>
                    </div>
                    <div class="career-card reveal delay-4">
                        <div class="career-icon"><i class="fas fa-globe"></i></div>
                        <div><h5>International Demand</h5><p>High-demand nursing roles globally.</p></div>
                    </div>
                    <div class="career-card reveal delay-5">
                        <div class="career-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                        <div><h5>Education & Admin</h5><p>Teaching or nursing supervisor roles.</p></div>
                    </div>
                    <div class="career-card reveal delay-6">
                        <div class="career-icon"><i class="fas fa-home"></i></div>
                        <div><h5>Home & Industrial</h5><p>Private home care and corporate nursing.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ WHY JOIN ════════════════════════════ -->
<section class="why-section">
    <div class="container-gnc">
        <div class="why-grid">
            <div class="why-text reveal-left">
                <span class="section-label" style="color:rgba(255,255,255,0.6);">Why Choose Us</span>
                <h2 class="section-title" style="color:white;">Why Join Guru Nanak College<br><span style="color:var(--orange);">for GNM in Dehradun?</span></h2>
                <p>At the School of Nursing, a part of the renowned Guru Nanak College in Dehradun, we commit ourselves to delivering exceptional education in nursing sciences. Our aim is to cultivate proficient professionals who are well-prepared to meet global healthcare challenges.</p>
                <div class="benefits-list">
                    <div class="benefit-item reveal delay-1">
                        <div class="benefit-check"><i class="fas fa-check"></i></div>
                        <p>A rich, centrally managed library with extensive academic resources.</p>
                    </div>
                    <div class="benefit-item reveal delay-2">
                        <div class="benefit-check"><i class="fas fa-check"></i></div>
                        <p>Modern laboratories outfitted with cutting-edge medical technology.</p>
                    </div>
                    <div class="benefit-item reveal delay-3">
                        <div class="benefit-check"><i class="fas fa-check"></i></div>
                        <p>Faculty comprising highly qualified and seasoned healthcare professionals.</p>
                    </div>
                    <div class="benefit-item reveal delay-4">
                        <div class="benefit-check"><i class="fas fa-check"></i></div>
                        <p>Value-based education with critical thinking, problem-solving, and research focus.</p>
                    </div>
                    <div class="benefit-item reveal delay-5">
                        <div class="benefit-check"><i class="fas fa-check"></i></div>
                        <p>Comprehensive placement training for thriving careers in nursing & healthcare.</p>
                    </div>
                </div>
                <a href="https://application.gnc.edu.in/" target="_blank" class="btn-white-gnc" style="margin-top:28px;">Apply Now <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="why-image-card reveal-right">
                <img src="upload/infra/gnm.webp" alt="GNC Nursing Campus">
                <div class="why-floating-badge reveal-scale delay-3">
                    #1
                    <small>GNM College<br>Dehradun</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ ADMISSION STEPS ═════════════════════ -->
<section class="admission-section">
    <div class="container-gnc">
        <div style="text-align:center;" class="reveal">
            <span class="section-label">Get Started</span>
            <h2 class="section-title">Admission <span>Procedure</span></h2>
            <p style="color:var(--text-light);max-width:480px;margin:12px auto 0;">Admission is determined by a merit-based selection process considering marks in the qualifying examination, followed by university counselling.</p>
        </div>
        <div class="steps-grid">
            <div class="step-card reveal delay-1">
                <div class="step-num">01</div>
                <h5>Fill Application</h5>
                <p>Complete the online application form with your personal and academic details.</p>
            </div>
            <div class="step-card reveal delay-2">
                <div class="step-num">02</div>
                <h5>Merit Selection</h5>
                <p>Shortlisting is based on marks obtained in qualifying examination (10+2).</p>
            </div>
            <div class="step-card reveal delay-3">
                <div class="step-num">03</div>
                <h5>Counselling</h5>
                <p>Attend university-conducted counselling to assess eligibility and finalize seat.</p>
            </div>
            <div class="step-card reveal delay-4">
                <div class="step-num">04</div>
                <h5>Confirm Admission</h5>
                <p>Submit required documents and fee to secure your admission at GNC.</p>
            </div>
        </div>
    </div>
</section>

<!-- ═══════════════════════════════ CTA STRIP ═══════════════════════════ -->
<section class="cta-strip reveal">
    <div class="container-gnc">
        <h2>Begin Your Nursing Career at GNC Dehradun</h2>
        <p>Limited seats available — Apply now for the 2026-27 academic year.</p>
        <a href="https://application.gnc.edu.in/" target="_blank" class="btn-white-gnc">Apply Now <i class="fas fa-arrow-right"></i></a>
    </div>
</section>

<!-- ═══════════════════════════════ JS ══════════════════════════════════ -->
<script>
    /* ── Intersection Observer for scroll animations ── */
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(el => observer.observe(el));

    /* ── Tab Switch ── */
    function switchTab(tab) {
        document.querySelectorAll('.tab-pane-gnc').forEach(p => p.classList.remove('active'));
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.getElementById('tab-' + tab).classList.add('active');
        event.target.classList.add('active');
    }

    /* ── Stagger card animations on reveal ── */
    document.querySelectorAll('.career-cards-grid, .benefits-list, .steps-grid').forEach(grid => {
        const items = grid.querySelectorAll('.career-card, .benefit-item, .step-card, .sch-card');
        items.forEach((item, i) => {
            item.style.transitionDelay = (i * 0.08) + 's';
        });
    });
</script>

</body>
</html>