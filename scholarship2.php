<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Scholarships – Empowering Student Dreams| Guru Nanak College (GNC) Dehradun Uttarakhand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="At Guru Nanak College (GNC) in Dehradun, we believe in empowering students by providing them with opportunities to achieve their academic dreams. Our scholarships program is designed to support and recognize students who demonstrate exceptional academic performance and talent">
    <link rel="canonical" href="https://www.gnc.edu.in/scholarships">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40eBKSF5+oHw/Nn3tI8EHM649+sKkIpfGv+zJ2tM6j1f+P/L8Q0H/q2/V/Lq/G1T0I9/uUq5zW" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Define common variables */
        :root {
            --gnc-primary: #0b1b2b; /* Dark text/header color */
            --gnc-secondary: #007bff; /* Blue for links/accents (if using original Bootstrap style) */
            --gnc-accent: #df6b2a; /* Orange accent from the inspiration section */
            --gnc-muted: #f7f7f7; /* Light background for sections/cards */
            --gnc-text: rgba(11, 27, 43, 0.85); /* Standard body text color */
            --max-content-width: 1200px;
            --card-radius: 8px;

            /* NEW VARIABLES for Vertical Wrapper */
            --red: #d80000;
            --dark-bg: #222;
            --gold: #ffcc00; /* Adjusted gold for better contrast */
            --white: #fff;
            --transparent-red: rgba(216, 0, 0, 0.7); /* Slightly less transparent for readability */
            --transparent-dark: rgba(24, 24, 24, 0.7); /* Slightly less transparent for readability */
            --icon-color: #f7ff00;

            /* ADDED VARIABLE for new table header color */
            --table-header-blue: #0f9af1;
        }

        /* --- Base and Layout --- */
        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--gnc-text);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: var(--white); /* Ensure body has a default background */
        }

        .container {
            max-width: var(--max-content-width);
            margin: 0 auto;
            padding: 0 15px;
        }

        /* --- Section Styling --- */
        .scholarship-section {
            padding: 50px 0;
        }

        /* New section style for merit scholarship table for separation */
        .scholarship-merit-table {
            padding: 40px 0;
            background-color: var(--white);
        }

        .scholarship-section.hero-banner {
            background-color: var(--gnc-primary);
            color: white;
            padding: 80px 0;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        /* FIX: Increased opacity for better text contrast on the hero image */
        .scholarship-section.hero-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6); /* Increased from 0.5 */
            z-index: 1; /* Ensure it's below content, but above background image */
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .hero-content h1 {
            font-size: clamp(32px, 5vw, 56px);
            margin-bottom: 10px;
            font-weight: 800;
        }

        .hero-content p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 18px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-heading h2 {
            font-size: clamp(24px, 3vw, 36px);
            color: var(--gnc-primary);
            font-weight: 700;
            margin: 0;
        }

        .page-heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .page-heading h2 {
            color: var(--gnc-primary);
            font-size: 32px;
            font-weight: 700;
            border-bottom: 3px solid var(--gnc-accent);
            display: inline-block;
            padding-bottom: 5px;
        }

        /* --- Table Styling for Merit Scholarship --- */
        .table-bordered {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 16px;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: center;
            vertical-align: middle;
            background-color: white; /* Explicitly set body cells to white */
        }
        .table-bordered thead th {
            /* UPDATED COLOR HERE */
            background-color: var(--table-header-blue);
            color: white;
            font-weight: 700;
        }
        .table-bordered tbody tr:nth-child(even) {
            background-color: var(--gnc-muted); /* Light grey for even rows */
        }
        .table-bordered tbody tr:hover {
            background-color: #e9ecef;
        }
        /* Specific styling for the free education slab */
        .table-bordered tbody tr:nth-child(4) td {
            background-color: #d4edda;
            color: #155724;
            font-weight: 700;
        }


        /* --- List Styling for National Level Entry Test & Terms --- */
        .info-grid {
            display: grid;
            /* FIX: Ensure min width is lower for better small-device flow */
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
            margin-top: 20px;
        }
        
        .info-grid > img{
            position: absolute; 
            top:0; 
            left:69%; 
            transform: translateX(-50%); 
            width: 100%; 
            height: 79%; 
            object-fit: contain; 
            max-width: 800px; 
            pointer-events: none;
        }
        /* NEW: Styling for the disclaimer list wrapper */
        .disclaimer-grid {
            max-width: 900px;
            margin: 0 auto;
        }

        .info-card {
            background-color: var(--gnc-muted);
            padding: 25px;
            border-radius: var(--card-radius);
            margin-bottom: 20px; /* Added spacing for the disclaimer section */
        }

        .info-card h3 {
            color: var(--gnc-primary);
            margin-top: 0;
            font-size: 22px;
            border-bottom: 2px solid var(--gnc-accent);
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        /* NEW: Styling for Disclaimer h3 */
        .disclaimer-section h3 {
            border-bottom-color: var(--gnc-primary);
        }

        .list-unstyled {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        /* .list-unstyled li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        } */

        /* .list-unstyled li::before {
            content: '✓';
            color: var(--gnc-accent);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
            position: absolute;
            left: 0;
        } */

        /* NEW: Use a different icon for Disclaimers */
        .disclaimer-list li::before {
            content: '•';
            color: var(--red);
            font-weight: 900;
            font-size: 1.5em;
            line-height: 0.8;
        }

        .contact-info {
            text-align: center;
            font-size: 16px;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #ccc;
        }
        .contact-info a {
            color: var(--gnc-accent);
            text-decoration: none;
            font-weight: 600;
        }


        /* --- KC Scholarship (Inspired Section) --- */
        .kc-scholarship-benefits {
            background-color: var(--white); 
            padding: 60px 0;
        }

        .kc-head {
            text-align: center;
            margin-bottom: 50px;
        }

        .kc-head h2 {
            margin: 0;
            font-size: clamp(28px, 3.6vw, 44px);
            font-weight: 800;
            letter-spacing: -0.02em;
            color: var(--gnc-primary);
        }

        .kc-head p.lead {
            margin: 12px auto 0;
            max-width: 920px;
            color: var(--gnc-text);
            font-size: clamp(14px, 1.6vw, 16px);
            line-height: 1.6;
        }

        .kc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            align-items: stretch;
        }

        .kc-card {
            background: var(--gnc-muted);
            border-radius: var(--card-radius);
            padding: 30px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(10, 20, 30, 0.06);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: 280px;
            transition: box-shadow 0.3s ease; 
        }

        .kc-card:hover { /* Added a subtle hover effect */
            box-shadow: 0 15px 40px rgba(10, 20, 30, 0.1);
        }

        .kc-card::before {
            content: attr(data-number);
            position: absolute;
            right: 15px;
            bottom: 10px;
            font-size: 120px;
            color: rgba(11, 27, 43, 0.06);
            font-weight: 900;
            line-height: 1;
            pointer-events: none;
            user-select: none;
            transition: transform 0.3s ease;
        }

        .kc-card:hover::before {
            transform: scale(1.05);
        }

        .kc-icon {
            width: 48px;
            height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            color: white;
            background-color: var(--gnc-accent);
            border-radius: 50%;
        }

        .kc-title {
            font-size: 20px;
            font-weight: 800;
            margin: 0 0 10px 0;
            color: var(--gnc-primary);
        }

        .kc-desc {
            margin: 0;
            color: var(--gnc-text);
            line-height: 1.6;
            font-size: 15px;
            margin-bottom: 18px;
        }

        .kc-cta {
            margin-top: auto;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .kc-badge {
            font-size: 13px;
            padding: 8px 12px;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--gnc-accent), #ff9b6b);
            color: #fff;
            font-weight: 700;
            box-shadow: 0 4px 10px rgba(222, 107, 42, 0.2);
        }


        /* --- RESPONSIVE --- */
        @media (max-width: 769px) {
            .hero-content h1 {
                font-size: 40px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-grid >img{
                    position: absolute;
                    top: -17%;
                    left: 50%;                   
                    transform: translateX(-50%);
                    width: 100%;
                    height: 87%;
                    object-fit: cover;
                    max-width: 800px ;
                    pointer-events: none;
                    opacity:0.3 ;
            }
        }

        @media (max-width: 480px) {
            .info-grid img{
                position: absolute;
                top: -2%;
                left: 50% transform: translateX(-50%);
                width: 100%;
                height: 48%;
                object-fit: cover;
                max-width: 800px;
                pointer-events: none;
                opacity: 0.3;
            }
        }

        @media (max-width: 650px) {
            .table-bordered thead th, .table-bordered tbody td {
                padding: 8px;
                font-size: 14px;
            }
            .table-bordered thead th:nth-child(1), .table-bordered tbody td:nth-child(1) {
                display: none; /* Hide Slab number on small screens */
            }
            .table-bordered thead th:nth-child(3), .table-bordered tbody td:nth-child(3) {
                 /* Give more room for the percentage/category on small screens */
                width: 40%;
            }
        }

        /* Contacts- Section */

         .app-contact-section {
        display: flex;
        justify-content: center;
        background-color: #ffffff;
        padding: 20px 0;
    }

    /* Container for the two columns (Max width 1350px, centered) */
    .app-contact-container {
        display: flex;
        flex-direction: column; /* Stacked by default on small screens */
        max-width: 1250px;
        width: 90%; /* Use 90% width for padding on smaller screens */
        min-height: 400px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px; /* Added slight rounding for aesthetics */
        overflow: hidden;
    }

    /* Image Column (100% width on mobile, fixed height) */
    .app-contact-image-col {
        flex: 0 0 200px; /* Fixed height for image on mobile */
        width: 100%;
        position: relative;
        overflow: hidden;
        background-color: #333;
    }
    
    /* Image styles */
    .app-contact-image-col img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: grayscale(100%);
        z-index: 1;
    }

    /* Info Column (100% width on mobile) */
    .app-contact-info-col {
        flex: 1 1 auto;
        width: 100%;
        background-color: #fd7e14;
        color: white;
        padding: 30px; /* Slightly reduced padding for mobile */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .app-contact-info-col h2 {
        font-size: 1.8em;
    }
    
    .app-contact-info-col p {
        font-size: 1em;
    }
    
    /* Media query for larger screens (e.g., tablets and desktop) */
    @media (min-width: 768px) {
        .app-contact-container {
            flex-direction: row; /* Side-by-side on larger screens */
            width: 100%; /* Use full max-width */
        }

        .app-contact-image-col {
            flex: 1; /* Takes remaining space on desktop */
            min-height: 400px; /* Ensures minimum height on desktop */
        }

        .app-contact-info-col {
            flex: 0 0 40%; /* Fixed 40% width for info column on desktop */
            padding: 40px; /* Original padding */
        }
        
        .app-contact-info-col h2 {
            font-size: 2.2em;
        }
        
        .app-contact-info-col p {
            font-size: 1.1em;
        }
    }
    </style>
</head>

<body>
    <?php require 'common/header.php'; ?>
     <section class="pageBanner-inner">
        <div style="background-image: url('upload/infra/scholar-image.webp'); background-repeat: no-repeat; background-size: cover;">
            <div class="pageBanner-inner_in">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-xl-7">
                            <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                                <div class="upper-banner-content">
                                    <h3 class="mb-1 mt-3">Scholarships Program<br><small>The college offers a range of scholarships designed to support students in achieving their academic goals. These scholarships are awarded based on various criteria, including academic excellence, financial need, and community involvement. The institution’s commitment to student success is reflected in the availability of these scholarships, which aim to make higher education more accessible and affordable. Scholarships are regularly reviewed to ensure they meet the evolving needs of students.</small></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="kc-scholarship-benefits" aria-labelledby="kc-scholarship-title">
        <div class="container">
            <div class="kc-head">
                <h2 id="kc-scholarship-title">Kalpana Chawla Scholarship — Multiple Benefits</h2>
                <p class="lead">Guru Nanak College’s Kalpana Chawla Scholarship program provides comprehensive support — merit-based awards, financial aid and pathways to career development. Select scholars can receive fee waivers up to **100%** to ensure education is accessible to every deserving student.</p>
    </div>

            <div class="kc-grid" role="list">
                <article class="kc-card" role="listitem" data-number="01" aria-labelledby="card1-title">
                    <div class="kc-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>

                    <h3 id="card1-title" class="kc-title">Access to Quality Education</h3>
                    <p class="kc-desc">The scholarship opens doors to world-class teaching and facilities at Guru Nanak College — supporting students to pursue **diploma, UG, and PG** courses with merit-based assistance.</p>

                    <div class="kc-cta">
                        <span class="kc-badge">Merit &amp; Need</span>
                    </div>
                </article>

                <article class="kc-card" role="listitem" data-number="02" aria-labelledby="card2-title">
                    <div class="kc-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 17v2a1 1 0 0 0 1 1h16"></path>
                            <path d="M7 11l5-5 5 5"></path>
                            <path d="M12 6v12"></path>
                        </svg>
                    </div>

                    <h3 id="card2-title" class="kc-title">Competitive Edge in Careers</h3>
                    <p class="kc-desc">Scholarship recipients receive **mentorship, placement guidance, and priority access** to internships — helping them stand out in recruitment and their chosen career pathways.</p>

                    <div class="kc-cta">
                        <span class="kc-badge">Mentorship</span>
                    </div>
                </article>

                <article class="kc-card" role="listitem" data-number="03" aria-labelledby="card3-title">
                    <div class="kc-icon" aria-hidden="true">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l3 6 6 1-4.5 4 1 6-5.5-3-5.5 3 1-6L3 9l6-1 3-6z"></path>
                        </svg>
                    </div>
                    <h3 id="card3-title" class="kc-title">Up to 100% Fee Waiver</h3>
                    <p class="kc-desc">Top-tier performers are eligible for a **full fee waiver** under this scholarship — enabling truly free education for selected students across eligible programs.</p>

                    <div class="kc-cta">
                        <span class="kc-badge">Full Tuition Covered</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="scholarship-section scholarship-merit-table">
        <div class="container">
            <div class="page-heading">
                <h2>Merit Scholarship</h2>
            </div>
            <p style="color: var(--gnc-text); text-align: center;">Guru Nanak College in Dehradun values academic excellence and offers scholarships to students who perform exceptionally well in their qualifying examinations. These scholarships demonstrate the college's commitment to fostering scholarly aptitude and providing support to deserving students.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Slab</th>
                        <th>Admission is taken</th>
                        <th>Percentage / Category</th>
                        <th>Fee Waiver</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Diploma/UG/PG</td>
                        <td>65-75%</td>
                        <td>15%</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Diploma/UG/PG</td>
                        <td>75-90%</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Diploma/UG/PG</td>
                        <td>90-95%</td>
                        <td>50%</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Diploma/UG/PG</td>
                        <td>95-100%</td>
                        <td>Free Education</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Diploma/UG/PG</td>
                        <td>Sports Category</td>
                        <td>5-10%</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Diploma/UG/PG</td>
                        <td>Uttarakhand Domicile</td>
                        <td>15%</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Diploma/UG/PG</td>
                        <td>Extracurricular</td>
                        <td>5-10%</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Diploma/UG/PG</td>
                        <td>Social Service(NCC/NSS)</td>
                        <td>10%</td>
                    </tr>
                </tbody>
            </table>
            <p style="color: var(--gnc-text); text-align: center; margin-top: 20px; font-size: 14px;"><strong>Note:</strong> The management and college authorities have the authority to make changes to scholarships, including withdrawal, cancellation, or modification. Scholarships are contingent upon seat availability in the selected course, and this statement is not legally binding for claiming scholarships.</p>
        </div>
    </section>
   <section class="scholarship-section" style="background-color: var(--gnc-muted); position: relative; overflow: hidden;" aria-labelledby="terms-heading">
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-heading" id="terms-heading">
            <h2 class="" style="font-weight: 700;">Application Details &amp; Important Conditions</h2>
        </div>

        <div class="info-grid" style="display: flex; flex-direction: column; gap: 20px; position: relative;">

            <img src="images/graduation-girl.avif" alt="Smiling graduate student pointing up, representing scholarship achievement.">

            <div class="" style="position: relative; z-index: 2;">
                <h3 style="width: fit-content; border-bottom: 2px solid #df6b2a;">Accepted National Level Entry Tests</h3>
                <p>Qualifying or scoring well in the following national entrance <br>examinations may also be considered for scholarship eligibility:</p>

                <ul class="entry-test-list" style="list-style: none; padding: 0;">
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>JEE Main</strong>
                        </div>
                        <span class="test-desc">Joint Entrance Examination - Main</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>JEE Advanced</strong>
                        </div>
                        <span class="test-desc">Joint Entrance Examination - Advanced</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>NEET</strong>
                        </div>
                        <span class="test-desc">National Eligibility cum Entrance Test</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>CAT</strong>
                        </div>
                        <span class="test-desc">Common Admission Test</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>GATE</strong>
                        </div>
                        <span class="test-desc">Graduate Aptitude Test in Engineering</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>NATA</strong>
                        </div>
                        <span class="test-desc">National Aptitude Test in Architecture</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>CLAT / LSAT</strong>
                        </div>
                        <span class="test-desc">Law Admission Tests</span>
                    </li>
                    <li class="entry-test-item" style="padding: 10px 0;">
                        <div class="test-name">
                            <strong>ICAR</strong>
                        </div>
                        <span class="test-desc">Indian Council of Agricultural Research</span>
                    </li>
                </ul>
            </div>

            <div class="info-card" style="background-color: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 8px; position: relative; z-index: 99;">
                <h3>Key Terms &amp; Conditions for Scholarship</h3>
                <p>The scholarship shall be awarded based on aggregate marks of Class XII or bachelor’s results. In the case of CGPA, it shall be converted according to CBSE/ICSE/National Board/UGC /University norms. If the conversion criteria are not mentioned in the mark sheet, then the following criteria shall be applicable :-</p>
                <ul style="list-style: disc; padding-left: 20px;">
                    <li>Scholarships in the bracket of 95% or more marks may be awarded to applicants who have obtained 10 CGPA.</li>
                    <li>Scholarships in the bracket of 90% to 94.99% marks may be awarded to applicants who have obtained 9.5 CGPA to 9.99 CGPA.</li>
                    <li>Scholarship in the bracket of 80% to 89.99% marks may be awarded to an applicant who has obtained 8.5 CGPA to 9.49 CGPA.</li>
                    <li>Scholarship in the bracket of 70% to 79.99% marks may be awarded to an applicant who has obtained 7.5 CGPA to 8.49 CGPA.</li>
                    <li>If a student gets a scholarship from a government/NGO/other agency, the Scholarship amount would be restricted to the difference between the sanctioned amount by Govt./NGO/other agency and the Scholarship at GNC.</li>
                    <li>Scholarships are based on early admission and are further subject to availability of seats, course applied, and documents authentication as per the requirement of the institution.</li>
                </ul>
            </div>
        </div>
        <p style="text-align: left; margin-top: 40px; font-size: 16px; color: var(--gnc-text); position: relative; z-index: 2;">Scholarships offered may be on a different basis such as scholarship based on GD/PI, Uttarakhand Domicile, Scholarship based on percentage, Scholarship based on Sports, Cultural, R&D, Co-curricular, Social Service etc. Scholarship based on Qualifying examinations. But it can be availed only under one category. Also, Scholarships shall be applied at the time of application or subject to seat availability. It shall not be allowed to change/apply at a later stage. Curricular, Social Services, etc. will only be awarded in case of competition meeting the guidelines approved by the said organizations as mentioned on the scholarship page. Students applying for admission through Scholarships will be required to upload documents/proof/certificates in the application portal after receiving login credentials for verification and authentication. Certificates validity from 31st March 2025 till the date of application shall be accepted only. Scholarships may or may not be applicable in case of a change of course subject to scholarship seat availability in the chosen course.</p>
        <p style="text-align: left; margin-top: 40px; font-size: 14px; color: var(--gnc-text); position: relative; z-index: 2;">
           <strong>Note:</strong> All Scholarships shall be applied at the time of application and cannot be changed or applied at a later stage.*
        </p>
    </div>
</section>
<!-- All Contact Section -->
<section class="app-contact-section">
    <!-- Outer container for max-width and centering -->
    <div class="app-contact-container">
        
        <!-- Left Column: Image with Contact Icons -->
        <div class="app-contact-image-col">
            <img src="images/get-in-touch.avif" alt="Person using a smartphone with floating contact icons (phone, mail, at-sign)">

            <div class="image-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.1); z-index: 2;"></div>
        </div>

        <!-- Right Column: Contact Information -->
        <div class="app-contact-info-col">
            <h2 style="color: white; margin-bottom: 20px;">Get in Touch</h2>
            <p style="color: white; margin-bottom: 20px; line-height: 1.6;">
                Guru Nanak College<br>
                Jhajhra, Chakrata Rd, Dehradun,<br>
                Uttarakhand, India – 248007
            </p>

            <p style="color: white; margin-bottom: 10px;">
                <strong>Student Helpline No:</strong><br>
                <a href="tel:+917300900900" style="color: white; text-decoration: none; font-weight: bold;">
                    7300900900
                </a>
            </p>

            <p style="color: white;">
                <strong>Email:</strong><br>
                <a href="mailto:info@gnc.edu.in" style="color: white; text-decoration: none; font-weight: bold;">
                    info@gnc.edu.in
                </a>
            </p>
        </div>
    </div>
</section>


<?php require 'common/footer.php'; ?>
</body>

</html>
