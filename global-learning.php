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

    <!-- Apply form widget (preconnect for faster load) -->
    <link rel="preconnect" href="https://eeconfigstaticfiles.blob.core.windows.net" crossorigin>
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
            scroll-behavior: smooth;
        }

        #gl-apply-form {
            scroll-margin-top: 110px;
        }

       @media (max-width: 991px) {
            #gl-apply-form img {
                display: none;
            }
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
            overflow-y: visible;
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
            cursor: pointer;
            border: none;
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

        /* ===== Hero apply-form card (right side) ===== */
        .gl-apply-card {
            border-radius: 20px;
            padding: 23px 23px 10px;
            animation: glFadeUp 1s ease .3s both;
            /* Intentionally no fixed/max height and no overflow clipping here —
               that combination is what was cutting the form in half before. */
        }


        .gl-apply-card-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(0, 181, 251, .12);
            color: var(--gnc-navy);
            font-weight: 700;
            font-size: .72rem;
            letter-spacing: .3px;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 50px;
            margin-bottom: 10px;
        }

        .gl-apply-card-head h3 {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--gnc-navy);
            margin-bottom: 4px;
        }

        .gl-apply-card-head p {
            font-size: .8rem;
            color: #6b7280;
            margin: 0;
        }

        @media (max-width: 991px) {
            .gl-apply-card {
                margin-top: 30px;
            }
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
            cursor: pointer;
            background: none;
            border: none;
            padding: 0;
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

        /* ===== Values chips ===== */
        .gl-values-strip {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 14px;
            margin-top: 22px;
        }

        .gl-value-chip {
            background: rgba(0, 181, 251, .08);
            border: 1px solid rgba(0, 181, 251, .25);
            color: var(--gnc-navy);
            font-weight: 700;
            font-size: .82rem;
            padding: 8px 18px;
            border-radius: 50px;
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
                    <p class="lead">Since 2009, Guru Nanak College has been building INC-recognized nurses, GNM practitioners and physiotherapists in Dehradun. The Global Learning Track — delivered with our industry partner Career Buddy College — adds structured international hospital exposure across Dubai, China and Singapore, plus a dedicated Japan/Germany career pathway, on top of your regular GNC degree.</p>
                    <div class="gl-hero-ctas">
                        <a href="#gl-apply-form" class="gl-btn-gold">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
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
               <div class="col-lg-4" id="gl-apply-form" style="position:relative;">

    <img src="upload/cbc-gnc-partnership.webp"
         alt="Career Buddy College x Guru Nanak College Dehradun partnership"
         style="position:absolute; left:-180px; top:50%; transform:rotate(270deg); width:300px; height:auto;">

    <div class="gl-apply-card gl-reveal-right is-visible">
        <span id="ee-form-36">
            <script src="https://eeconfigstaticfiles.blob.core.windows.net/staticfiles/applyadmission.gnc/ee-form-widget/form-36/widget.js"></script>
        </span>
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
                    <div class="gl-stat-icon" style="background:var(--gl-grad-purple);"><i class="fa-solid fa-graduation-cap"></i></div>
                    <div class="gl-stat-num">15+</div>
                    <div class="gl-stat-label">Years of GNC Excellence</div>
                </div>
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-coral);"><i class="fa-solid fa-handshake"></i></div>
                    <div class="gl-stat-num">100+</div>
                    <div class="gl-stat-label">Recruiting Companies at GNC</div>
                </div>
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-gold);"><i class="fa-solid fa-earth-asia"></i></div>
                    <div class="gl-stat-num">4+</div>
                    <div class="gl-stat-label">Countries of Global Exposure</div>
                </div>
                <div>
                    <div class="gl-stat-icon" style="background:var(--gl-grad-green);"><i class="fa-solid fa-certificate"></i></div>
                    <div class="gl-stat-num">INC/IAP</div>
                    <div class="gl-stat-label">Recognized Core Curriculum</div>
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
                <p>Guru Nanak College, Jhajhra, Chakrata Road, Dehradun, has been shaping nursing, paramedical and healthcare professionals since 2009, with programs recognized by the Indian Nursing Council (INC), the Indian Association of Physiotherapists (IAP) and other regulatory bodies. Career Buddy College is our industry-facing partner for this track — bringing international hospital exposure, language training and global placement support. Together, they power the Global Learning Track for our Nursing, GNM and Physiotherapy students, without changing who awards your degree or runs your core curriculum.</p>
                <div class="gl-values-strip">
                    <span class="gl-value-chip">Human Dignity</span>
                    <span class="gl-value-chip">Empathy</span>
                    <span class="gl-value-chip">Humility</span>
                    <span class="gl-value-chip">Giving</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= WHY GLOBAL ================= -->
    <section class="gl-section-padding">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">Same GNC Degree, More Behind It</span>
                <h2 class="gl-heading">What The Global Track Actually Adds</h2>
                <p class="gl-sub mx-auto">Every GNC nursing, GNM and physiotherapy student already gets INC-recognized training and access to our Career Development Cell, which brings 100+ recruiting companies to campus each year. The Global Learning Track sits on top of that — it doesn't replace your regular programme, it adds four years of structured international exposure to it. Here's the side-by-side.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="gl-compare-card gl-pro gl-reveal-left">
                        <h4><i class="fa-solid fa-globe me-2"></i>GNC Global Learning Track</h4>
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i> The same INC-recognized GNC degree, with a guided international layer added on</li>
                            <li><i class="fa-solid fa-circle-check"></i> Faculty-accompanied hospital exposure in Dubai, China and Singapore, one country per year</li>
                            <li><i class="fa-solid fa-circle-check"></i> German and Japanese language classes built into your final-year timetable</li>
                            <li><i class="fa-solid fa-circle-check"></i> AR/VR clinical simulation modules added alongside your regular labs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Career Buddy College's global network plugged into GNC's existing placement cell</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gl-compare-card gl-con gl-reveal-right">
                        <h4><i class="fa-solid fa-circle-minus me-2"></i>The Regular GNC Programme</h4>
                        <ul>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Same strong INC-recognized curriculum, no built-in foreign hospital exposure</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Clinical training stays within GNC's Dehradun-affiliated hospitals</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> No German or Japanese language classes as part of the timetable</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> Placement support through GNC's Career Development Cell, India-focused</li>
                            <li><i class="fa-solid fa-triangle-exclamation"></i> A great degree, just without the added international layer</li>
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
                <h2 class="gl-heading">Your Global Learning Journey at GNC</h2>
                <p class="gl-sub mx-auto">You remain a GNC student throughout — attending classes, clinicals and exams on our Dehradun campus every semester. What changes is that each year of your degree, we add a short, faculty-accompanied international exposure module, planned jointly by GNC's academic team and Career Buddy College. Here's how the four years actually break down.</p>
            </div>

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="gl-timeline">
                        <div class="gl-tl-item gl-reveal">
                            <span class="gl-tl-dot" style="background:var(--gl-grad-purple);"></span>
                            <div class="gl-tl-content">
                                <span class="gl-tl-year" style="background:rgba(124,92,255,.12);color:#5b3fd9;">Year 1</span>
                                <h4><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/ae.png" srcset="https://flagcdn.com/80x60/ae.png 2x" alt="UAE flag" width="30" height="22" loading="lazy">Dubai Track</h4>
                                <p>Dubai track is the specially designed health care study & practice tour for Nursing & Physiotherpay students offering a unique opportunity to explore Dubai's world-class health care eco-system, Modern medical facilities & International health care practices.</p>
                                <ul> Program Outcome
                                    <li>Hospital & healthcare facility visits.</li>
                                    <li>Understanding International health care standards & patient care practices.</li>
                                    <li>Professional learning sessions</li>
                                    <li>Guidance on health care licensing pathways in the UAE</li>
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
                                <p>The China track is a speically designed study & practice tour for Nursing & Physiotherapy students, offering an exciting opportunity to experience how Artificial Intelligence(AI) is transforming health care in one of the world's leading technology & innovation hubs.</p>
                                <ul>Program Outcome
                                    <li>Learning how AI assist in diagnosis, patient monitoring, & treatment planning</li>
                                    <li>Visits to advanced health care institutions & innovation centers</li>
                                    <li>Introduction to robotic rehabilitation systems</li>
                                    <li>Experienced Chinese culture, Education & tehnological advancement</li>
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
                                <p>The Singapore track is a specially designed health care study & practice tour for students offering an opportunity to experience a high health care standards, excellent preparation outcomes, advanced medical infrastructure & strong emphasis on preventive care, making it an ideal destination for future health care professionals.</p>
                                <ul>
                                    <li>Understanding Singapore's health care delivery model</li>
                                    <li>Learning evidence-based clinical practices</li>
                                    <li>Understanding digital health & electronic medical records</li>
                                    <li>Exposure to community & preventive health care programs</li>
                                    <li>Understanding elderly care & rehabilitation services in Singapore</li>
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
                                <h4><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/jp.png" alt="Japan flag" width="30" height="22" loading="lazy"><img class="gl-flag-img-lg" src="https://flagcdn.com/40x30/de.png" alt="Germany flag" width="30" height="22" loading="lazy" style="margin-left:-10px;">Germany/Japan Career Track</h4>
                                <p>The Japan/Germany career track is a specialised placement-driven program designed for nursing & physiotherapy students who aspire to build succedful careers in Germany or Japan.
Unlike a study tour, this is long-term career development pathway that prepares students through language training, International health care orientation, interview preparation, certification support, & placement assistance.</p>
                                <ul>Program Outcome
                                    <li>International career planning</li>
                                    <li>German language training</li>
                                    <li>Japanese language training</li>
                                    <li>English & IELTS preparation</li>
                                    <li>AR/VR classes for advanced health care training purpose</li>
                                    <li>Mock examinations & practice sessions</li>
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

    <!-- ================= WHY CHOOSE GNC ================= -->
    <section class="gl-section-padding">
        <div class="container">
            <div class="text-center mx-auto mb-5 gl-reveal" style="max-width:700px;">
                <span class="gl-kicker">Why Choose Guru Nanak College</span>
                <h2 class="gl-heading">Why Students Choose GNC for the Global Track</h2>
                <p class="gl-sub mx-auto">Career Buddy College brings the international exposure layer — but the degree, the campus, the faculty and the day-to-day education is all GNC. Here's what that actually means for you.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-purple);"><i class="fa-solid fa-certificate"></i></div>
                        <h5>A Degree That Stands on Its Own</h5>
                        <p>Since 2009, GNC has been an INC-recognized institution. Your degree is awarded by GNC regardless of whether you take the Global Track — the international exposure is an add-on layer, not a substitute for a real qualification.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.1s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-coral);"><i class="fa-solid fa-building-columns"></i></div>
                        <h5>A Campus You Actually Live On</h5>
                        <p>Modern labs, on-campus hostels for boys and girls, a 500-seat auditorium, and a well-stocked library — you're not commuting between disconnected training centres, everything is on one campus in Jhajhra, Dehradun.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.2s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-green);"><i class="fa-solid fa-people-group"></i></div>
                        <h5>An Established Placement Cell</h5>
                        <p>GNC's Career Development Cell already brings 100+ recruiting companies to campus every year. The Global Track plugs Career Buddy College's international network into that existing pipeline — you're not relying on a placement process built from scratch.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.3s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-gold);"><i class="fa-solid fa-shield-heart"></i></div>
                        <h5>15+ Years of Track Record</h5>
                        <p>GNC isn't new to healthcare education. Fifteen-plus years of running nursing, paramedical and pharmacy programs means the fundamentals of your training are already proven — the Global Track adds to that, it doesn't replace it.</p>
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
                <p class="gl-sub mx-auto">INC-recognized, globally aligned undergraduate programs at GNC Dehradun, built to make you internationally job-ready from day one.</p>
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
                                <span class="gl-fee-label">Indicative Fee</span>
                                <span class="gl-fee-amount">₹ 18.50 Lakhs</span>
                            </div>
                             <div class="gl-prog-fee">
                                <span class="gl-fee-label">Avg. Salary Package</span>
                                <span class="gl-fee-amount">₹18 - 35 LPA</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> AI in healthcare practice exposure — China</li>
                                <li><i class="fa-solid fa-check"></i> German language classes</li>
                                <li><i class="fa-solid fa-check"></i> International clinical practice — Dubai & Singapore</li>
                                <li><i class="fa-solid fa-check"></i> IELTS preparation classes</li>
                            </ul>
                            <a href="#gl-apply-form" class="gl-prog-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
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
                                <span class="gl-fee-label">Indicative Fee</span>
                                <span class="gl-fee-amount">₹ 11.50 Lakhs</span>
                            </div>
                              <div class="gl-prog-fee">
                                <span class="gl-fee-label">Avg. Salary Package</span>
                                <span class="gl-fee-amount">₹15 - 30 LPA</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> International general nursing practice</li>
                                <li><i class="fa-solid fa-check"></i> Global hospital exposure — Dubai, China & Singapore</li>
                                <li><i class="fa-solid fa-check"></i> German language classes</li>
                                <li><i class="fa-solid fa-check"></i> IELTS preparation classes</li>
                            </ul>
                            <a href="#gl-apply-form" class="gl-prog-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
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
                                <span class="gl-fee-label">Indicative Fee</span>
                                <span class="gl-fee-amount">₹ 12.50 Lakhs</span>
                            </div>
                            <div class="gl-prog-fee">
                                <span class="gl-fee-label">Avg. Salary Package</span>
                                <span class="gl-fee-amount">₹20 - 40 LPA</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-check"></i> Dubai clinical exposure pathway</li>
                                <li><i class="fa-solid fa-check"></i> China AI & smart rehabilitation exposure</li>
                                <li><i class="fa-solid fa-check"></i> Japan / Germany career-track preparation</li>
                                <li><i class="fa-solid fa-check"></i> German language training (A1–B2)</li>
                            </ul>
                            <a href="#gl-apply-form" class="gl-prog-btn">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
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
                        <p>Built on GNC's INC-recognized curriculum, updated to reflect international healthcare standards and practices.</p>
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
                        <p>Guidance from GNC's experienced faculty and healthcare mentors, with regular one-on-one sessions.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="gl-feature-card gl-reveal" style="transition-delay:.3s;">
                        <div class="gl-feature-icon" style="background:var(--gl-grad-gold);"><i class="fa-solid fa-plane-departure"></i></div>
                        <h5>Abroad Placement Support</h5>
                        <p>Backed by GNC's Career Development Cell and Career Buddy College's dedicated career services — interview prep, referrals and international placement assistance.</p>
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
                <p>The CBCAT isn't just another entrance test. It's designed to identify students with the aptitude and mindset for Healthcare Studies.</p>
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

        <div class="text-center mt-4">
            <a href="#gl-apply-form" class="gl-btn-gold">Start Your Application <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
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
                            <div id="glFaq4" class="accordion-collapse collapse" data-bs-parent="#glFaqAccordion">
                                <div class="accordion-body">Use the "Apply Now" button anywhere on this page to open our application form, or reach out to GNC's Admission Helpline at 7300900900. Our team will walk you through eligibility, the CBCAT process (if applicable) and the Global Track add-on for your chosen program.</div>
                            </div>
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
                <p>Limited seats available for the 2026 batch under the Global Learning Track, in partnership with Career Buddy College. Call our Admission Helpline at 7300900900 or apply online.</p>
                <a href="#gl-apply-form" class="gl-btn-gold">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
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