<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Global Learning Track | International Healthcare Exposure | Guru Nanak College Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the Global Learning Track at Guru Nanak College Dehradun, in partnership with Career Buddy College — international hospital exposure across Dubai, China, Singapore, Japan & Germany for Nursing, GNM and Physiotherapy students.">
    <link rel="canonical" href="https://www.gnc.edu.in/global-learning">
    <!-- Open Graph Tags -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Global Learning Track | Guru Nanak College Dehradun x Career Buddy College" />
    <meta property="og:description" content="International hospital exposure across Dubai, China, Singapore, Japan & Germany for healthcare students at GNC Dehradun, in partnership with Career Buddy College." />
    <meta property="og:url" content="https://gnc.edu.in/global-learning" />
    <meta property="og:site_name" content="GNC Dehradun" />
    <meta property="og:image" content="https://gnc.edu.in/images/gnc-og-banner.jpg">

    <!-- Google Fonts (preconnect for speed) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --gnc-navy: #003d82;
            --gnc-cyan: #00b5fb;
            --gnc-dark: #1a1c1e;
            --gnc-light: #f8f9fa;
            --gl-gold: #ffc233;
            --gl-coral: #ff6b5b;
            --gl-purple: #7c5cff;
            --gl-green: #16c79a;
            --gl-grad: linear-gradient(135deg, #002e63 0%, #0061b3 55%, #00b5fb 100%);
            --gl-grad-coral: linear-gradient(135deg, #ff8a5b, #ff5b7a);
            --gl-grad-purple: linear-gradient(135deg, #7c5cff, #4a3fd9);
            --gl-grad-green: linear-gradient(135deg, #16c79a, #0aa3c2);
            --gl-grad-gold: linear-gradient(135deg, #ffc233, #ff8a3d);
        }

        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }

        .gl-page {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--gnc-dark);
            line-height: 1.65;
            overflow-x: hidden;
            max-width: 100vw;
        }

        .gl-page * {
            box-sizing: border-box;
        }

        .gl-page ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .gl-section-padding {
            padding: 70px 0;
        }

        @media (max-width: 768px) {
            .gl-section-padding {
                padding: 45px 0;
            }
        }

        /* ===== Reveal animation engine ===== */
        .gl-reveal {
            opacity: 0;
            transform: translateY(35px);
            transition: opacity .8s cubic-bezier(.22, 1, .36, 1), transform .8s cubic-bezier(.22, 1, .36, 1);
        }

        .gl-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .gl-reveal-left {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity .8s cubic-bezier(.22, 1, .36, 1), transform .8s cubic-bezier(.22, 1, .36, 1);
        }

        .gl-reveal-left.is-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .gl-reveal-right {
            opacity: 0;
            transform: translateX(40px);
            transition: opacity .8s cubic-bezier(.22, 1, .36, 1), transform .8s cubic-bezier(.22, 1, .36, 1);
        }

        .gl-reveal-right.is-visible {
            opacity: 1;
            transform: translateX(0);
        }

        .gl-reveal-scale {
            opacity: 0;
            transform: scale(.85);
            transition: opacity .7s ease, transform .7s cubic-bezier(.22, 1, .36, 1);
        }

        .gl-reveal-scale.is-visible {
            opacity: 1;
            transform: scale(1);
        }

        /* ===== Hero ===== */
        .gl-hero {
            position: relative;
            background: var(--gl-grad);
            padding: 250px 0 110px;
            overflow: hidden;
            color: #fff;
            width: 100%;
            max-width: 100vw;
        }

        @media (max-width: 991px) {
            .gl-hero {
                padding: 175px 0 80px;
            }
        }

        .gl-hero-bgdots {
            position: absolute;
            inset: 0;
            background-image: radial-gradient(rgba(255, 255, 255, .14) 1.5px, transparent 1.5px);
            background-size: 26px 26px;
            opacity: .5;
            mask-image: linear-gradient(180deg, rgba(0, 0, 0, .9), transparent 75%);
        }

        .gl-hero::before,
        .gl-hero::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            filter: blur(2px);
        }

        .gl-hero::before {
            width: 420px;
            height: 420px;
            top: -160px;
            right: -120px;
            background: radial-gradient(circle at 30% 30%, rgba(124, 92, 255, .45), rgba(124, 92, 255, 0) 70%);
            animation: glFloat 9s ease-in-out infinite;
        }

        .gl-hero::after {
            width: 320px;
            height: 320px;
            bottom: -140px;
            left: -90px;
            background: radial-gradient(circle at 30% 30%, rgba(255, 107, 91, .35), rgba(255, 107, 91, 0) 70%);
            animation: glFloat 7s ease-in-out infinite reverse;
        }

        @keyframes glFloat {

            0%,
            100% {
                transform: translateY(0) scale(1);
            }

            50% {
                transform: translateY(-25px) scale(1.06);
            }
        }

        .gl-hero .gl-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, .15);
            border: 1px solid rgba(255, 255, 255, .35);
            backdrop-filter: blur(6px);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: .85rem;
            font-weight: 600;
            letter-spacing: .5px;
            margin-bottom: 22px;
            animation: glFadeDown .8s ease both;
        }

        .gl-badge i {
            color: var(--gl-gold);
        }

        @keyframes glFadeDown {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gl-hero h1 {
            font-size: clamp(2rem, 4.5vw, 3.3rem);
            font-weight: 800;
            line-height: 1.18;
            margin-bottom: 20px;
            animation: glFadeUp .9s ease .1s both;
        }

        .gl-hero h1 span {
            background: linear-gradient(90deg, var(--gl-gold), var(--gl-coral));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .gl-hero p.lead {
            font-size: 1.1rem;
            max-width: 560px;
            color: rgba(255, 255, 255, .9);
            margin-bottom: 32px;
            animation: glFadeUp .9s ease .25s both;
        }

        @keyframes glFadeUp {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gl-hero-ctas {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            animation: glFadeUp .9s ease .4s both;
        }

        .gl-btn-gold {
            background: linear-gradient(90deg, var(--gl-gold), var(--gl-coral));
            color: #1a1c1e;
            font-weight: 700;
            padding: 14px 30px;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: transform .3s ease, box-shadow .3s ease;
            box-shadow: 0 10px 25px rgba(255, 107, 91, .3);
        }

        .gl-btn-gold:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 32px rgba(255, 107, 91, .4);
            color: #1a1c1e;
        }

        .gl-btn-outline {
            border: 2px solid rgba(255, 255, 255, .7);
            color: #fff;
            font-weight: 700;
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            transition: all .3s ease;
        }

        .gl-btn-outline:hover {
            background: #fff;
            color: var(--gnc-navy);
        }

        .gl-hero-flags {
            display: flex;
            gap: 14px;
            margin-top: 36px;
            flex-wrap: wrap;
            animation: glFadeUp .9s ease .55s both;
        }

        .gl-flag-chip {
            background: rgba(255, 255, 255, .12);
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 50px;
            padding: 7px 16px;
            font-size: .82rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 7px;
            transition: transform .3s ease, background .3s ease;
        }

        .gl-flag-chip:hover {
            transform: translateY(-3px);
            background: rgba(255, 255, 255, .22);
        }

        .gl-flag-img {
            width: 20px;
            height: 15px;
            object-fit: cover;
            border-radius: 3px;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, .4);
            display: inline-block;
        }

        .gl-flag-img-lg {
            width: 30px;
            height: 22px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .08);
            display: inline-block;
        }

        /* ===== Partner strip ===== */
        .gl-partner-strip {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            background: rgba(255, 255, 255, .92);
            border-radius: 16px;
            padding: 10px 20px;
            margin-bottom: 26px;
            box-shadow: 0 12px 30px rgba(0, 20, 50, .25);
            animation: glFadeDown .8s ease both;
        }

        .gl-partner-strip span {
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .8px;
            text-transform: uppercase;
            color: #6b7280;
            white-space: nowrap;
        }

        .gl-partner-strip img {
            height: 30px;
            width: auto;
            display: block;
        }

        @media (max-width: 575px) {
            .gl-partner-strip {
                padding: 8px 14px;
                gap: 10px;
            }

            .gl-partner-strip img {
                height: 24px;
            }

            .gl-partner-strip span {
                font-size: .62rem;
            }
        }

        .gl-cta-partner img {
            height: 100px;
            width: auto;
            margin-bottom: 20px;
            border-radius: 12px;
        }

        /* ===== Big Partnership section ===== */
        .gl-partner-section {
            background: linear-gradient(180deg, #f8fafc 0%, #eef4fb 100%);
            position: relative;
            overflow: hidden;
        }

        .gl-partner-section::before {
            content: "";
            position: absolute;
            top: -120px;
            right: -120px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 181, 251, .12), transparent 70%);
        }

        .gl-partner-box {
            background: #fff;
            border-radius: 26px;
            padding: 56px 40px;
            text-align: center;
            box-shadow: 0 25px 60px rgba(0, 32, 80, .1);
            border: 1px solid #eef1f5;
            position: relative;
        }

        .gl-partner-box img {
            width: 100%;
            max-width: 500px;
            height: auto;
            margin: 18px auto 28px;
            display: block;
        }

        .gl-partner-box .gl-kicker {
            display: block;
            text-align: center;
        }

        .gl-partner-box p {
            max-width: 640px;
            margin: 0 auto;
            color: #5b6470;
            font-size: 1.02rem;
        }

        @media (max-width: 575px) {
            .gl-partner-box {
                padding: 36px 20px;
            }

            .gl-partner-box img {
                margin: 14px auto 20px;
            }
        }

        /* ===== Hero illustration (right side) ===== */
        .gl-hero-art {
            position: relative;
            height: 420px;
            animation: glFadeUp 1s ease .3s both;
        }

        @media (max-width: 991px) {
            .gl-hero-art {
                height: 300px;
                margin-top: 30px;
            }
        }

        .gl-orbit-core {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 170px;
            height: 170px;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            background: radial-gradient(circle at 35% 30%, #5fd4ff, #0061b3 65%, #002e63 100%);
            box-shadow: 0 0 60px rgba(0, 181, 251, .55), inset -12px -12px 30px rgba(0, 0, 0, .3);
            animation: glSpinSlow 18s linear infinite;
        }

        @keyframes glSpinSlow {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .gl-orbit-core::before {
            content: "";
            position: absolute;
            inset: 8px;
            border-radius: 50%;
            background-image: repeating-linear-gradient(100deg, rgba(255, 255, 255, .12) 0 2px, transparent 2px 14px), repeating-linear-gradient(10deg, rgba(255, 255, 255, .08) 0 2px, transparent 2px 18px);
        }

        .gl-orbit-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            border: 1.5px dashed rgba(255, 255, 255, .35);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .gl-orbit-ring.r1 {
            width: 280px;
            height: 280px;
            animation: glSpinSlow 26s linear infinite;
        }

        .gl-orbit-ring.r2 {
            width: 400px;
            height: 400px;
            animation: glSpinSlow 38s linear infinite reverse;
        }

        @media (max-width: 991px) {
            .gl-orbit-ring.r1 {
                width: 220px;
                height: 220px;
            }

            .gl-orbit-ring.r2 {
                width: 300px;
                height: 300px;
            }

            .gl-orbit-core {
                width: 130px;
                height: 130px;
            }
        }

        .gl-orbit-flag {
            position: absolute;
            background: #fff;
            color: var(--gnc-navy);
            font-weight: 700;
            font-size: .78rem;
            padding: 9px 16px;
            border-radius: 50px;
            box-shadow: 0 10px 24px rgba(0, 20, 50, .35);
            display: flex;
            align-items: center;
            gap: 7px;
            animation: glBob 4.5s ease-in-out infinite;
            white-space: nowrap;
        }

        .gl-orbit-flag.f1 {
            top: 2%;
            left: 38%;
            animation-delay: 0s;
        }

        .gl-orbit-flag.f2 {
            top: 22%;
            right: 0%;
            animation-delay: .5s;
        }

        .gl-orbit-flag.f3 {
            top: 43%;
            animation-delay: 1s;
        }

        .gl-orbit-flag.f4 {
            bottom: 10%;
            right: 6%;
            animation-delay: 1.5s;
        }

        .gl-orbit-flag.f5 {
            bottom: 2%;
            left: 22%;
            animation-delay: 2s;
        }

        .gl-orbit-flag.f6 {
            top: 28%;
            left: -6%;
            animation-delay: 2.5s;
        }

        @keyframes glBob {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-12px);
            }
        }

        @media (max-width: 575px) {
            .gl-orbit-flag {
                font-size: .68rem;
                padding: 6px 11px;
            }
        }

        /* ===== Stats strip ===== */
        .gl-stats {
            background: #fff;
            margin-top: -55px;
            position: relative;
            z-index: 3;
        }

        .gl-stats-card {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 20px 50px rgba(0, 32, 80, .12);
            padding: 36px 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 24px;
            text-align: center;
        }

        .gl-stat-icon {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.1rem;
            margin: 0 auto 10px;
        }

        .gl-stat-num {
            font-size: clamp(1.6rem, 3vw, 2.3rem);
            font-weight: 800;
            background: var(--gl-grad);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .gl-stat-label {
            font-size: .85rem;
            color: #5b6470;
            font-weight: 600;
        }

        /* ===== Section heading ===== */
        .gl-kicker {
            color: var(--gnc-cyan);
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: .8rem;
            margin-bottom: 10px;
            display: block;
        }

        .gl-heading {
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 800;
            color: var(--gnc-navy);
            margin-bottom: 14px;
        }

        .gl-sub {
            color: #5b6470;
            max-width: 680px;
        }

        /* ===== Why global comparison ===== */
        .gl-compare-card {
            border-radius: 18px;
            padding: 34px 28px;
            height: 100%;
            transition: transform .35s ease, box-shadow .35s ease;
        }

        .gl-compare-card:hover {
            transform: translateY(-8px);
        }

        .gl-compare-card.gl-pro {
            background: linear-gradient(160deg, #ffffff, #eaf7ff);
            border: 1px solid #d4ecfb;
            box-shadow: 0 15px 35px rgba(0, 61, 130, .08);
        }

        .gl-compare-card.gl-con {
            background: #fbfbfc;
            border: 1px dashed #d8dce1;
        }

        .gl-compare-card h4 {
            font-weight: 800;
            margin-bottom: 18px;
            color: var(--gnc-navy);
        }

        .gl-compare-card.gl-con h4 {
            color: #6b7280;
        }

        .gl-compare-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .gl-compare-card li {
            display: flex;
            gap: 12px;
            margin-bottom: 14px;
            font-size: .95rem;
        }

        .gl-compare-card.gl-pro li i {
            color: #16a34a;
            margin-top: 3px;
        }

        .gl-compare-card.gl-con li i {
            color: #d97706;
            margin-top: 3px;
        }

        /* ===== Timeline ===== */
        .gl-timeline {
            position: relative;
            padding-left: 34px;
        }

        .gl-timeline::before {
            content: "";
            position: absolute;
            left: 9px;
            top: 6px;
            bottom: 6px;
            width: 3px;
            background: linear-gradient(180deg, var(--gnc-cyan), var(--gnc-navy));
            border-radius: 4px;
        }

        .gl-tl-item {
            position: relative;
            margin-bottom: 38px;
            padding: 0;
            background: #fff;
            border-radius: 16px;
            border: 1px solid #eef1f5;
            box-shadow: 0 10px 28px rgba(20, 30, 60, .06);
            overflow: hidden;
            display: flex;
            align-items: stretch;
            flex-wrap: wrap;
        }

        .gl-tl-item:last-child {
            margin-bottom: 0;
        }

        .gl-tl-content {
            flex: 1 1 320px;
            padding: 26px;
        }

        .gl-tl-media {
            flex: 0 0 300px;
            min-height: 220px;
            position: relative;
        }

        .gl-tl-media img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @media (max-width: 767px) {
            .gl-tl-media {
                flex: 1 1 100%;
                min-height: 200px;
                order: -1;
            }
        }

        .gl-tl-dot {
            position: absolute;
            left: -34px;
            top: 28px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: var(--gl-grad);
            border: 4px solid #fff;
            box-shadow: 0 0 0 3px rgba(0, 181, 251, .25);
            z-index: 2;
        }

        .gl-tl-year {
            display: inline-block;
            background: rgba(0, 181, 251, .12);
            color: var(--gnc-navy);
            font-weight: 700;
            font-size: .78rem;
            padding: 4px 14px;
            border-radius: 50px;
            margin-bottom: 10px;
        }

        .gl-tl-content h4 {
            font-weight: 800;
            color: var(--gnc-navy);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .gl-tl-content h4 .gl-flag-emoji {
            font-size: 1.3rem;
        }

        .gl-tl-content p {
            color: #545d68;
            margin-bottom: 14px;
            font-size: .95rem;
        }

        .gl-tl-content ul {
            margin: 0;
            padding-left: 0;
            color: #4a525c;
            font-size: .92rem;
            list-style: none;
        }

        .gl-tl-content ul li {
            margin-bottom: 8px;
            display: flex;
            gap: 10px;
        }

        .gl-tl-content ul li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--gnc-cyan);
            font-size: .8rem;
            margin-top: 3px;
        }

        /* ===== Feature grid ===== */
        .gl-feature-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px 24px;
            height: 100%;
            border: 1px solid #eef1f5;
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .gl-feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 38px rgba(0, 61, 130, .12);
            border-color: transparent;
        }

        .gl-feature-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            background: var(--gl-grad);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.4rem;
            margin-bottom: 18px;
            transition: transform .35s ease;
        }

        .gl-feature-card:hover .gl-feature-icon {
            transform: rotate(-8deg) scale(1.08);
        }

        .gl-feature-card h5 {
            font-weight: 700;
            color: var(--gnc-navy);
            margin-bottom: 10px;
        }

        .gl-feature-card p {
            color: #5b6470;
            font-size: .92rem;
            margin: 0;
        }

        /* ===== Programs ===== */
        .gl-prog-card {
            background: #fff;
            border-radius: 18px;
            border: 1px solid #eef1f5;
            overflow: hidden;
            height: 100%;
            transition: transform .35s ease, box-shadow .35s ease;
            display: flex;
            flex-direction: column;
        }

        .gl-prog-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(0, 61, 130, .12);
        }

        .gl-prog-top {
            background: var(--gl-grad);
            color: #fff;
            padding: 24px 24px 18px;
        }

        .gl-prog-top h5 {
            font-weight: 800;
            margin: 6px 0 0;
            font-size: 1.15rem;
        }

        .gl-prog-tag {
            background: rgba(255, 255, 255, .18);
            font-size: .72rem;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 50px;
            display: inline-block;
        }

        .gl-prog-body {
            padding: 22px 24px 26px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .gl-prog-body ul {
            list-style: none;
            padding: 0;
            margin: 0 0 18px;
        }

        .gl-prog-body li {
            display: flex;
            gap: 10px;
            font-size: .9rem;
            margin-bottom: 9px;
            color: #4a525c;
        }

        .gl-prog-body li i {
            color: var(--gnc-cyan);
            margin-top: 3px;
        }

        .gl-prog-fee {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            background: #f4f8fc;
            border: 1px solid #e6eef6;
            border-radius: 12px;
            padding: 12px 16px;
            margin: 0 0 18px;
        }

        .gl-prog-fee .gl-fee-label {
            font-size: .78rem;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: .4px;
        }

        .gl-prog-fee .gl-fee-amount {
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--gnc-navy);
        }

        .gl-prog-fee .gl-fee-amount small {
            font-size: .7rem;
            font-weight: 600;
            color: #6b7280;
        }

        .gl-prog-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--gnc-navy);
            font-weight: 700;
            text-decoration: none;
            font-size: .9rem;
            margin-top: auto;
        }

        .gl-prog-btn i {
            transition: transform .3s ease;
        }

        .gl-prog-btn:hover i {
            transform: translateX(5px);
        }

        /* ===== Process steps ===== */
        .gl-step {
            text-align: center;
            position: relative;
        }

        .gl-step-num {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: var(--gl-grad);
            color: #fff;
            font-weight: 800;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            box-shadow: 0 10px 22px rgba(0, 61, 130, .25);
        }

        .gl-step h6 {
            font-weight: 700;
            color: var(--gnc-navy);
            margin-bottom: 6px;
        }

        .gl-step p {
            font-size: .85rem;
            color: #5b6470;
        }

        /* ===== FAQ ===== */
        .gl-accordion .accordion-button {
            font-weight: 700;
            color: var(--gnc-navy);
        }

        .gl-accordion .accordion-button:not(.collapsed) {
            background: rgba(0, 181, 251, .08);
            color: var(--gnc-navy);
            box-shadow: none;
        }

        .gl-accordion .accordion-button:focus {
            box-shadow: none;
        }

        /* ===== CTA ===== */
        .gl-cta {
            background: var(--gl-grad);
            border-radius: 26px;
            padding: 56px 40px;
            color: #fff;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .gl-cta::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 80% 20%, rgba(255, 255, 255, .15), transparent 55%);
        }

        .gl-cta h3 {
            font-weight: 800;
            font-size: clamp(1.4rem, 3vw, 2rem);
            margin-bottom: 14px;
            position: relative;
        }

        .gl-cta p {
            color: rgba(255, 255, 255, .9);
            margin-bottom: 26px;
            position: relative;
        }
    </style>
</head>

<body class="gl-page">
    <h1 style="position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;">Global Learning Track at Guru Nanak College Dehradun</h1>

    <?php require "common/header.php" ?>

    <!-- ================= HERO ================= -->
    <section class="gl-hero">
        <div class="gl-hero-bgdots"></div>
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="gl-badge"><i class="fa-solid fa-earth-asia"></i> Admissions Open — 2026 Batch</span>
                    <h1>Go Global With Your <span>Healthcare Career</span></h1>
                    <p class="lead">A specially curated International Exposure Track for Nursing, GNM and Physiotherapy students — delivered in partnership with Career Buddy College, combining hospital practice across Dubai, China and Singapore with a dedicated Japan/Germany career pathway, on top of your regular GNC degree.</p>
                    <div class="gl-hero-ctas">
                        <a href="https://careerbuddycollege.com/" target="_blank" class="gl-btn-gold">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="#gl-journey" class="gl-btn-outline">Explore the Journey</a>
                    </div>
                    <div class="gl-hero-flags">
                        <span class="gl-flag-chip"><img class="gl-flag-img" src="https://flagcdn.com/40x30/ae.png" srcset="https://flagcdn.com/80x60/ae.png 2x" alt="UAE flag" width="20" height="15" loading="lazy">Dubai</span>
                        <span class="gl-flag-chip"><img class="gl-flag-img" src="https://flagcdn.com/40x30/cn.png" srcset="https://flagcdn.com/80x60/cn.png 2x" alt="China flag" width="20" height="15" loading="lazy">China</span>
                        <span class="gl-flag-chip"><img class="gl-flag-img" src="https://flagcdn.com/40x30/sg.png" srcset="https://flagcdn.com/80x60/sg.png 2x" alt="Singapore flag" width="20" height="15" loading="lazy">Singapore</span>
                        <span class="gl-flag-chip"><img class="gl-flag-img" src="https://flagcdn.com/40x30/jp.png" srcset="https://flagcdn.com/80x60/jp.png 2x" alt="Japan flag" width="20" height="15" loading="lazy">Japan</span>
                        <span class="gl-flag-chip"><img class="gl-flag-img" src="https://flagcdn.com/40x30/de.png" srcset="https://flagcdn.com/80x60/de.png 2x" alt="Germany flag" width="20" height="15" loading="lazy">Germany</span>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="gl-hero-art">
                        <div class="gl-orbit-ring r2"></div>
                        <div class="gl-orbit-ring r1"></div>
                        <div class="gl-orbit-core"><i class="fa-solid fa-globe" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:2.4rem;color:rgba(255,255,255,.85);"></i></div>
                        <span class="gl-orbit-flag f1"><img class="gl-flag-img" src="https://flagcdn.com/40x30/ae.png" srcset="https://flagcdn.com/80x60/ae.png 2x" alt="UAE flag" width="20" height="15" loading="lazy">Dubai</span>
                        <span class="gl-orbit-flag f2"><img class="gl-flag-img" src="https://flagcdn.com/40x30/cn.png" srcset="https://flagcdn.com/80x60/cn.png 2x" alt="China flag" width="20" height="15" loading="lazy">China</span>
                        <span class="gl-orbit-flag f3"><img class="gl-flag-img" src="https://flagcdn.com/40x30/sg.png" srcset="https://flagcdn.com/80x60/sg.png 2x" alt="Singapore flag" width="20" height="15" loading="lazy">Singapore</span>
                        <span class="gl-orbit-flag f4"><img class="gl-flag-img" src="https://flagcdn.com/40x30/jp.png" srcset="https://flagcdn.com/80x60/jp.png 2x" alt="Japan flag" width="20" height="15" loading="lazy">Japan</span>
                        <span class="gl-orbit-flag f5"><img class="gl-flag-img" src="https://flagcdn.com/40x30/de.png" srcset="https://flagcdn.com/80x60/de.png 2x" alt="Germany flag" width="20" height="15" loading="lazy">Germany</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= STATS ================= -->
    <section class="gl-stats">
        <div class="container">
            <div class="gl-stats-card gl-reveal">
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-purple);"><i class="fa-solid fa-earth-americas"></i></div>
                    <div class="gl-stat-num">4+</div>
                    <div class="gl-stat-label">Countries of Exposure</div>
                </div>
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-coral);"><i class="fa-solid fa-handshake"></i></div>
                    <div class="gl-stat-num">100+</div>
                    <div class="gl-stat-label">Global Hiring Partners</div>
                </div>
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-gold);"><i class="fa-solid fa-sack-dollar"></i></div>
                    <div class="gl-stat-num">₹18–35L</div>
                    <div class="gl-stat-label">Avg. Global Package Range</div>
                </div>
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-green);"><i class="fa-solid fa-certificate"></i></div>
                    <div class="gl-stat-num">INC</div>
                    <div class="gl-stat-label">Recognized Curriculum</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PARTNERSHIP ================= -->
    <section class="gl-section-padding gl-partner-section">
        <div class="container position-relative">
            <div class="gl-partner-box gl-reveal-scale">
                <span class="gl-kicker">A Powerful Collaboration</span>
                <h2 class="gl-heading">Bringing Together Two Trusted Names</h2>
                <img src="upload/cbc-gnc-partnership.webp" alt="Career Buddy College x Guru Nanak College Dehradun partnership" loading="lazy" width="1098" height="551">
                <p>Guru Nanak College Dehradun brings INC-recognized academic excellence, while Career Buddy College brings the industry-facing layer — international hospital exposure, language training and global placement support. Together, they power the Global Learning Track for our Nursing, GNM and Physiotherapy students.</p>
            </div>
        </div>
    </section>

    <!-- ================= WHY GLOBAL ================= -->
    <section class="gl-section-padding">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">The Healthcare Job Market Is Changing</span>
                <h2 class="gl-heading">Why Settle For A Regular Degree?</h2>
                <p class="gl-sub mx-auto">Nursing and Physiotherapy graduates with international exposure are being hired faster and paid significantly more than those with a purely local-track education. Here's the difference the Global Learning Track makes.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="gl-compare-card gl-pro gl-reveal-left">
                        <h4><i class="fa-solid fa-globe me-2"></i>With Global Learning Track</h4>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> Curriculum aligned to international healthcare standards</li>
                            <li><i class="fa-solid fa-circle-check"></i> Hospital exposure across 4 countries during the course</li>
                            <li><i class="fa-solid fa-circle-check"></i> German / Japanese language training included</li>
                            <li><i class="fa-solid fa-circle-check"></i> AR/VR-based modern clinical training modules</li>
                            <li><i class="fa-solid fa-circle-check"></i> Graduate with a global-ready healthcare portfolio</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gl-compare-card gl-con gl-reveal-right">
                        <h4><i class="fa-solid fa-circle-minus me-2"></i>Traditional Nursing / Physiotherapy</h4>
                        <ul>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Curriculum rarely updated, exam-heavy approach</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Little to no international clinical exposure</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Limited internship opportunities in final year</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> No structured language or global placement support</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Job search left entirely to the student</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= JOURNEY TIMELINE ================= -->
    <section class="gl-section-padding" id="gl-journey" style="background:#f8fafc;">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">Year-Wise Roadmap</span>
                <h2 class="gl-heading">Your Global Learning Journey</h2>
                <p class="gl-sub mx-auto">A structured, year-on-year international exposure pathway built directly into your degree program.</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="gl-timeline">
                        <div class="gl-tl-item gl-reveal">
                            <span class="gl-tl-dot" style="background:var(--gl-grad-purple);"></span>
                            <div class="gl-tl-content">
                                <span class="gl-tl-year" style="background:rgba(124,92,255,.12);color:#5b3fd9;">Year 1</span>
                                <h4><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/ae.png" srcset="https://flagcdn.com/80x60/ae.png 2x" alt="UAE flag" width="30" height="22" loading="lazy">Dubai Track</h4>
                                <p>An immersive healthcare study tour introducing students to Dubai's world-class hospital infrastructure and international patient-care standards.</p>
                                <ul>
                                    <li>Guided visits to leading hospitals & healthcare facilities</li>
                                    <li>Exposure to international care protocols</li>
                                    <li>Professional learning sessions with practitioners</li>
                                    <li>Orientation on UAE healthcare licensing pathways</li>
                                </ul>
                            </div>
                            <div class="gl-tl-media">
                                <img src="upload/dubai.webp" alt="Dubai healthcare exposure track" loading="lazy">
                            </div>
                        </div>
                        <div class="gl-tl-item gl-reveal">
                            <span class="gl-tl-dot" style="background:var(--gl-grad-coral);"></span>
                            <div class="gl-tl-content">
                                <span class="gl-tl-year" style="background:rgba(255,107,91,.12);color:#d9402b;">Year 2</span>
                                <h4><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/cn.png" srcset="https://flagcdn.com/80x60/cn.png 2x" alt="China flag" width="30" height="22" loading="lazy">China Track</h4>
                                <p>A technology-focused track exploring how Artificial Intelligence is reshaping diagnosis, monitoring and rehabilitation in modern healthcare.</p>
                                <ul>
                                    <li>Understanding AI-assisted diagnosis & treatment planning</li>
                                    <li>Visits to advanced hospitals and innovation centres</li>
                                    <li>Introduction to robotic rehabilitation systems</li>
                                    <li>Cultural and academic immersion</li>
                                </ul>
                            </div>
                            <div class="gl-tl-media">
                                <img src="upload/china.webp" alt="China AI healthcare exposure track" loading="lazy">
                            </div>
                        </div>
                        <div class="gl-tl-item gl-reveal">
                            <span class="gl-tl-dot" style="background:var(--gl-grad-green);"></span>
                            <div class="gl-tl-content">
                                <span class="gl-tl-year" style="background:rgba(22,199,154,.12);color:#0e9c79;">Year 3</span>
                                <h4><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/sg.png" srcset="https://flagcdn.com/80x60/sg.png 2x" alt="Singapore flag" width="30" height="22" loading="lazy">Singapore Track</h4>
                                <p>Exposure to one of the world's most advanced healthcare delivery systems, with a strong focus on preventive and evidence-based care.</p>
                                <ul>
                                    <li>Understanding Singapore's healthcare delivery model</li>
                                    <li>Evidence-based clinical practice exposure</li>
                                    <li>Digital health records & systems orientation</li>
                                    <li>Elderly care and rehabilitation services overview</li>
                                </ul>
                            </div>
                            <div class="gl-tl-media">
                                <img src="upload/singapore.webp" alt="Singapore healthcare exposure track" loading="lazy">
                            </div>
                        </div>
                        <div class="gl-tl-item gl-reveal">
                            <span class="gl-tl-dot" style="background:var(--gl-grad-gold);"></span>
                            <div class="gl-tl-content">
                                <span class="gl-tl-year" style="background:rgba(255,194,51,.18);color:#b3690a;">Year 4</span>
                                <h4><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/jp.png" alt="Japan flag" width="30" height="22" loading="lazy"><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/de.png" alt="Germany flag" width="30" height="22" loading="lazy" style="margin-left:-10px;">Japan / Germany Career Track</h4>
                                <p>A dedicated, placement-driven pathway preparing final-year students for long-term healthcare careers abroad — not just a study tour, but a complete career launchpad.</p>
                                <ul>
                                    <li>German & Japanese language training</li>
                                    <li>English & IELTS preparation</li>
                                    <li>AR/VR based advanced clinical training</li>
                                    <li>Mock interviews and global placement assistance</li>
                                </ul>
                            </div>
                            <div class="gl-tl-media">
                                <img src="upload/germany.webp" alt="Japan and Germany healthcare career track" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PROGRAMS ================= -->
    <section class="gl-section-padding">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">Featured Programs</span>
                <h2 class="gl-heading">Choose Your Global Track</h2>
                <p class="gl-sub mx-auto">Globally aligned undergraduate programs at GNC Dehradun, built to make you internationally job-ready from day one.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="gl-prog-card gl-reveal-scale">
                        <div class="gl-prog-top" style="background:var(--gl-grad-purple);">
                            <span class="gl-prog-tag">4 Years · Full Time</span>
                            <h5>B.Sc Nursing (Global Track)</h5>
                        </div>
                        <div class="gl-prog-body">
                            <div class="gl-prog-fee">
                                <span class="gl-fee-label">Fee</span>
                                <span class="gl-fee-amount">₹ 18.50 Lakhs</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> AI in healthcare practice exposure — China</li>
                                <li><i class="fa-solid fa-check"></i> German language classes</li>
                                <li><i class="fa-solid fa-check"></i> International clinical practice</li>
                                <li><i class="fa-solid fa-check"></i> IELTS preparation classes</li>
                            </ul>
                            <a href="https://careerbuddycollege.com/" target="_blank" class="gl-prog-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gl-prog-card gl-reveal-scale" style="transition-delay:.1s;">
                        <div class="gl-prog-top" style="background:var(--gl-grad-coral);">
                            <span class="gl-prog-tag">3 Years · Full Time</span>
                            <h5>GNM (Global Track)</h5>
                        </div>
                        <div class="gl-prog-body">
                            <div class="gl-prog-fee">
                                <span class="gl-fee-label">Fee</span>
                                <span class="gl-fee-amount">₹ 11.50 Lakhs</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> International general nursing practice</li>
                                <li><i class="fa-solid fa-check"></i> Global hospital exposure</li>
                                <li><i class="fa-solid fa-check"></i> German language classes</li>
                                <li><i class="fa-solid fa-check"></i> IELTS preparation classes</li>
                            </ul>
                            <a href="https://careerbuddycollege.com/" target="_blank" class="gl-prog-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gl-prog-card gl-reveal-scale" style="transition-delay:.2s;">
                        <div class="gl-prog-top" style="background:var(--gl-grad-green);">
                            <span class="gl-prog-tag">4 Years · Full Time</span>
                            <h5>Bachelor of Physiotherapy (Global Track)</h5>
                        </div>
                        <div class="gl-prog-body">
                            <div class="gl-prog-fee">
                                <span class="gl-fee-label">Fee</span>
                                <span class="gl-fee-amount">₹ 12.50 Lakhs</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Dubai clinical exposure pathway</li>
                                <li><i class="fa-solid fa-check"></i> China AI & smart rehabilitation exposure</li>
                                <li><i class="fa-solid fa-check"></i> Australia career-track preparation</li>
                                <li><i class="fa-solid fa-check"></i> German language training (A1–B2)</li>
                            </ul>
                            <a href="https://careerbuddycollege.com/" target="_blank" class="gl-prog-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FEATURES ================= -->
    <section class="gl-section-padding" style="background:#f8fafc;">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">What Makes It Different</span>
                <h2 class="gl-heading">Healthcare Education, Reimagined</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-purple);"><i class="fa-solid fa-book-open-reader"></i></div>
                        <h5>Global-Aligned Curriculum</h5>
                        <p>Designed around international healthcare standards and updated practices.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.1s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-coral);"><i class="fa-solid fa-hospital"></i></div>
                        <h5>Live International Exposure</h5>
                        <p>Hands-on experience in hospitals across Dubai, China, Singapore, Japan & Germany.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.2s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-green);"><i class="fa-solid fa-user-tie"></i></div>
                        <h5>1:1 Mentor Support</h5>
                        <p>Guidance from experienced healthcare mentors with regular one-on-one sessions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.3s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-gold);"><i class="fa-solid fa-plane-departure"></i></div>
                        <h5>Abroad Placement Support</h5>
                        <p>Dedicated career services for international placements, interview prep and referrals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <style>
    /* Force white background for admission section */
    .admsn-wrapper {
        background: #ffffff !important;
        color: #111827 !important;
        padding: 40px 20px;
    }

    .admsn-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .admsn-section-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .admsn-section-label {
        display: inline-block;
        font-size: 0.75rem;
        font-weight: 800;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #7c3aed;
        margin-bottom: 8px;
    }

    .admsn-section-title {
        font-family: 'Sora', sans-serif;
        font-size: 2.5rem;
        font-weight: 800;
        color: #111827 !important;
        margin-bottom: 16px;
    }

    .admsn-section-subtitle {
        color: #475569;
        font-size: 0.95rem;
    }

    .admsn-hero-card {
        background: linear-gradient(135deg, #f3e8ff 0%, #e0f2fe 100%);
        border-radius: 24px;
        padding: 32px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 32px;
        margin-bottom: 32px;
        border: 1px solid #e5e7eb;
    }

    .admsn-hero-left h2 {
        font-family: 'Sora', sans-serif;
        font-size: 1.8rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 20px;
    }

    .admsn-hero-left p {
        color: #475569;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    .admsn-zapt-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(124, 58, 237, 0.1);
        border: 1px solid rgba(124, 58, 237, 0.3);
        padding: 8px 16px;
        border-radius: 999px;
        font-size: 0.8rem;
        font-weight: 700;
        color: #7c3aed;
        margin-bottom: 20px;
    }

    .admsn-zapt-badge span {
        display: inline-block;
        width: 4px;
        height: 4px;
        background: #7c3aed;
        border-radius: 50%;
    }

    .admsn-hero-metrics {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .admsn-metric-item {
        background: #1e293b;
        color: #ffffff;
        padding: 16px;
        border-radius: 12px;
    }

    .admsn-metric-item strong {
        display: block;
        font-size: 1.25rem;
        font-weight: 800;
        color: #22d3ee;
    }

    .admsn-metric-item span {
        font-size: 0.75rem;
        color: #9ca3af;
    }

    .admsn-hero-right {
        background: #0f172a;
        border-radius: 16px;
        padding: 20px;
    }

    .admsn-hero-right h4 {
        color: #ffffff;
        font-size: 0.95rem;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .admsn-feature-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .admsn-feature-item {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        background: rgba(255, 255, 255, 0.05);
        padding: 12px 16px;
        border-radius: 12px;
    }

    .admsn-feature-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: #111827;
        flex-shrink: 0;
    }

    .admsn-feature-icon.admsn-purple { background: #a78bfa; }
    .admsn-feature-icon.admsn-cyan { background: #22d3ee; }
    .admsn-feature-icon.admsn-pink { background: #ec4899; }
    .admsn-feature-icon.admsn-green { background: #4ade80; }

    .admsn-feature-text strong {
        display: block;
        color: #ffffff;
        font-size: 0.9rem;
        margin-bottom: 2px;
    }

    .admsn-feature-text span {
        color: #9ca3af;
        font-size: 0.75rem;
    }

    .admsn-steps-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .admsn-step-card {
        background: #f3f4f6;
        border: 1px solid #e5e7eb;
        border-radius: 16px;
        padding: 20px;
        display: flex;
        gap: 16px;
        transition: all 0.3s ease;
    }

    .admsn-step-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .admsn-step-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: #ffffff;
        flex-shrink: 0;
        font-size: 1.1rem;
    }

    .admsn-step-icon.admsn-one { background: linear-gradient(135deg, #a78bfa, #7c3aed); }
    .admsn-step-icon.admsn-two { background: linear-gradient(135deg, #22d3ee, #0ea5e9); }
    .admsn-step-icon.admsn-three { background: linear-gradient(135deg, #4ade80, #22c55e); }
    .admsn-step-icon.admsn-four { background: linear-gradient(135deg, #f97316, #ea580c); }

    .admsn-step-content h4 {
        font-size: 1rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 4px;
    }

    .admsn-step-content p {
        color: #475569;
        font-size: 0.85rem;
        margin-bottom: 6px;
    }

    .admsn-step-content span {
        font-size: 0.75rem;
        font-weight: 700;
    }

    .admsn-step-content span.admsn-purple { color: #7c3aed; }
    .admsn-step-content span.admsn-cyan { color: #0ea5e9; }
    .admsn-step-content span.admsn-green { color: #22c55e; }
    .admsn-step-content span.admsn-orange { color: #ea580c; }
    
    /* Modal Styles */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 9999;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }
    
    .modal-overlay.active {
        display: flex;
    }
    
    .modal-content {
        background: white;
        border-radius: 16px;
        max-width: 800px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
    }
    
    .modal-close {
        position: absolute;
        top: 16px;
        right: 16px;
        background: #f3f4f6;
        border: none;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: background 0.2s;
    }
    
    .modal-close:hover {
        background: #e5e7eb;
    }
    
    .admsn-apply-btn {
        cursor: pointer;
        text-decoration: underline;
        transition: color 0.2s;
    }
    
    .admsn-apply-btn:hover {
        color: #5b21b6;
    }

    @media (max-width: 768px) {
        .admsn-hero-card {
            grid-template-columns: 1fr;
        }

        .admsn-steps-grid {
            grid-template-columns: 1fr;
        }

        .admsn-section-title {
            font-size: 2rem;
        }
    }
</style>

<div class="admsn-wrapper" id="admission">
    <div class="admsn-container">
        <div class="admsn-section-header">
            <div class="admsn-section-label">Your Path to <span class="text-accent">Career Buddy College</span><sup class="logo-sup">+<sup></div>
            <h1 class="admsn-section-title">Admission Process</h1>
            <p class="admsn-section-subtitle">A simple 4-step journey from application to enrollment.</p>
        </div>

        <div class="admsn-hero-card">
            <div class="admsn-hero-left">
                <div class="admsn-zapt-badge">
                   CBC <span></span> CBC Aptitude Test
                </div>
                <h2>Don't Worry About Your NEET Rank</h2>
                <p>The CBCAT  isn't just another entrance test. It's designed to identify students with the aptitude and mindset for Healthcare Studies.</p>
                <div class="admsn-hero-metrics">
                    <div class="admsn-metric-item">
                        <strong>60 questions</strong>
                        <span>Test Details</span>
                    </div>
                    <div class="admsn-metric-item">
                        <strong>Online</strong>
                        <span>From Home</span>
                    </div>
                </div>
                 <p>
    <strong>Note:</strong> Students who have secured <strong>75% or above</strong> in their qualifying academic examination are eligible. Students scoring below 75% are required to appear for the <strong>CBCAT</strong>. Final admission for these candidates will be based on their CBCAT performance followed by a personal interview as per the norms of Indian Nursing Council (INC)/Paramedical Council and State Government.</p> 
            </div>

            <div class="admsn-hero-right">
                <h4>CBCAT Test</h4>
                <div class="admsn-feature-list">
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-purple">1</div>
                        <div class="admsn-feature-text">
                            <strong>Interest Mapping</strong>
                            <span>Identify subjects and career areas you enjoy most</span>
                        </div>
                    </div>
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-cyan">2</div>
                        <div class="admsn-feature-text">
                            <strong>Aptitude Analysis</strong>
                            <span>Assess natural strengths and learning abilities</span>
                        </div>
                    </div>
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-pink">3</div>
                        <div class="admsn-feature-text">
                            <strong>Personality Insights</strong>
                            <span>Understand your behavioral traits and preferences</span>
                        </div>
                    </div>
                    <div class="admsn-feature-item">
                        <div class="admsn-feature-icon admsn-green">4</div>
                        <div class="admsn-feature-text">
                            <strong>Career Recommendations</strong>
                            <span>Explore suitable academic streams and career paths</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="admsn-steps-grid">
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-one">1</div>
                <div class="admsn-step-content">
                    <h4>Apply Online</h4>
                    <p>Fill out the application form with your details. Takes less than 5 minutes.</p>
                    <span class="admsn-purple">Applications Open</span>
                </div>
            </div>
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-two">2</div>
                <div class="admsn-step-content">
                    <h4>Take the CBCAT Test</h4>
                    <p>Appear for our online Healthcare aptitude test from the comfort of your home.</p>
                    <span class="admsn-cyan">60 Minutes Online</span>
                </div>
            </div>
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-three">3</div>
                <div class="admsn-step-content">
                    <h4>Personal Interview</h4>
                    <p>A conversation to understand your goals, passion for Healthcare, and fit for Career Buddy College.</p>
                    <span class="admsn-green">15-20 Minutes</span>
                </div>
            </div>
            <div class="admsn-step-card">
                <div class="admsn-step-icon admsn-four">4</div>
                <div class="admsn-step-content">
                    <h4>Get Your Offer</h4>
                    <p>Receive your admission offer. Confirm your seat!</p>
                    <span class="admsn-orange">Within 7 Days</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal-overlay" id="applyModal">
        <div class="modal-content">
            <button class="modal-close" id="closeModal">&times;</button>
            <div class="cta-contact-form cta-reveal-up" style="padding: 40px;">
                <span id="ee-form-36-modal">
                    <!-- Widget will be initialized here manually -->
                </span>
            </div>
        </div>
    </div>

    <!-- Modal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openBtn = document.getElementById('openApplyModal');
            const closeBtn = document.getElementById('closeModal');
            const modal = document.getElementById('applyModal');
            let modalWidgetInitialized = false;

            const initializeModalWidget = async () => {
                if (modalWidgetInitialized) return;
                if (window._eeFormWidget) {
                    await window._eeFormWidget.init("applycbc", "form-36", "ee-form-36-modal");
                    modalWidgetInitialized = true;
                } else {
                    // Wait for _eeFormWidget to be available
                    const checkWidget = setInterval(async () => {
                        if (window._eeFormWidget) {
                            clearInterval(checkWidget);
                            await window._eeFormWidget.init("applycbc", "form-36", "ee-form-36-modal");
                            modalWidgetInitialized = true;
                        }
                    }, 100);
                }
            };

            if (openBtn && modal) {
                openBtn.addEventListener('click', () => {
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                    initializeModalWidget();
                });
            }

            if (closeBtn && modal) {
                closeBtn.addEventListener('click', () => {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                });
            }

            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            }

            // Close modal on escape key
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && modal && modal.classList.contains('active')) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });
    </script>
</div>



    <!-- ================= FAQ ================= -->
    <section class="gl-section-padding" style="background:#f8fafc;">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">Have Questions?</span>
                <h2 class="gl-heading">Frequently Asked Questions</h2>
            </div>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="accordion gl-accordion gl-reveal" id="glFaqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#glFaq1">
                                    What does the Global Learning Track actually include?
                                </button>
                            </h2>
                            <div id="glFaq1" class="accordion-collapse collapse show" data-bs-parent="#glFaqAccordion">
                                <div class="accordion-body">It is a structured, year-wise international exposure pathway built into your regular GNC degree — covering hospital visits and clinical exposure in Dubai, China and Singapore, plus a dedicated language and placement-focused career track for Japan/Germany in the final year.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#glFaq2">
                                    Which programs offer the Global Track?
                                </button>
                            </h2>
                            <div id="glFaq2" class="accordion-collapse collapse" data-bs-parent="#glFaqAccordion">
                                <div class="accordion-body">B.Sc Nursing, GNM (General Nursing & Midwifery) and Bachelor of Physiotherapy at GNC currently offer the Global Learning Track as an add-on to the regular curriculum.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#glFaq3">
                                    Is the degree still recognised in India?
                                </button>
                            </h2>
                            <div id="glFaq3" class="accordion-collapse collapse" data-bs-parent="#glFaqAccordion">
                                <div class="accordion-body">Yes. Your core degree continues to be awarded and recognised as per the applicable regulatory body (such as the Indian Nursing Council), with the Global Track running as an additional international-exposure layer alongside it.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#glFaq4">
                                    How do I get more details or apply?
                                </button>
                            </h2>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#glFaq5">
                                    Who is Career Buddy College and what is their role?
                                </button>
                            </h2>
                            <div id="glFaq5" class="accordion-collapse collapse" data-bs-parent="#glFaqAccordion">
                                <div class="accordion-body">Career Buddy College is GNC's industry partner for the Global Learning Track. Your degree, admissions, curriculum and examinations remain entirely with Guru Nanak College — Career Buddy College supports the career-readiness layer: international hospital exposure, language training, AR/VR clinical modules and global placement assistance.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="gl-section-padding">
        <div class="container">
            <div class="gl-cta gl-reveal-scale">
                <div class="gl-cta-partner">
                    <img src="upload/cbc-gnc-partnership.webp" alt="Career Buddy College x Guru Nanak College Dehradun" loading="lazy" width="200" height="40">
                </div>
                <h3>Ready to Build a Global Healthcare Career?</h3>
                <p>Limited seats available for the 2026 batch under the Global Learning Track, in partnership with Career Buddy College.</p>
                <a href="https://careerbuddycollege.com/" target="_blank" class="gl-btn-gold">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>

    <?php require "common/footer.php" ?>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const glObserverOptions = {
                threshold: 0.15
            };
            const glObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        glObserver.unobserve(entry.target);
                    }
                });
            }, glObserverOptions);

            document.querySelectorAll('.gl-reveal, .gl-reveal-left, .gl-reveal-right, .gl-reveal-scale')
                .forEach((el) => glObserver.observe(el));
        });
    </script>
</body>

</html>