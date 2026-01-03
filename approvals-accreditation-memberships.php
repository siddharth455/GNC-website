<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Guru Nanak College Dehradun | Affiliations & Approvals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Guru Nanak College Dehradun, Recognized by UGC & Approved by AICTE, affiliated to HNBGU UTU">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #003d82;
            --secondary-blue: #0056b3;
            --bg-light: #f8f9fa;
            --text-main: #2d3436;
            --border-color: #e9ecef;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-main);
            background-color: #fff;
            line-height: 1.6;
        }

        /* Large Hero Section - Height set to 850px */
        .hero-section {
            position: relative;
            height: 850px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(0, 38, 82, 0.75), rgba(0, 38, 82, 0.75)), 
                        url('upload/campus-tour.webp') center/cover no-repeat;
            color: white;
            text-align: center;
        }

        .hero-section h1 {
            font-weight: 800;
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            letter-spacing: -1px;
            text-transform: uppercase;
        }

        .hero-section p {
            font-size: 1.25rem;
            max-width: 900px;
            margin: 0 auto;
            opacity: 0.95;
            line-height: 1.8;
            font-weight: 400;
        }

        /* Trust Ribbon (Logos) */
        .logo-bar {
            background: white;
            padding: 50px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .logo-bar img {
            max-height: 70px;
            width: auto;
            margin: 20px 40px;
            object-fit: contain;
        }

        /* Content Cards - No Hover Effects */
        .approval-grid {
            padding:20px 0;
            background-color: #ffffff;
        }

        .modern-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 45px 35px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
            /* Box shadow is static, no hover transition */
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        }

        .card-icon-wrapper {
            width: 210px;
            height: 210px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8fbff;
            border-radius: 50%;
            padding: 20px;
            border: 1px solid #edf2f7;
            overflow: hidden;
        }

        .card-icon-wrapper img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            display: block;
            transition: transform 0.2s ease;
        }

        /* Compensate logos with excessive transparent padding (UTU specifically) */
        .card-icon-wrapper img[alt="UTU"],
        .card-icon-wrapper img[src*="utu"] {
            transform: scale(1.90);
        }

        .modern-card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 20px;
            min-height: 54px; /* Ensures alignment */
            display: flex;
            align-items: center;
            
        }

        .modern-card p {
            font-size: 1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 0;
            text-wrap: pretty;
            text-align: justify;
        }

        /* Animation Utility */
        .fade-in-up {
            animation: fadeInUp 1.2s ease forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 991px) {
            .hero-section { height: 600px; }
            .hero-section h1 { font-size: 2.5rem; }
        }

        @media (max-width: 768px) {
            .hero-section { height: 500px; }
            .hero-section h1 { font-size: 1.8rem; }
            .logo-bar img { max-height: 55px; margin: 10px 20px; }
            .card-icon-wrapper {
                width: 160px;
                height: 160px;
                padding: 16px;
            }
            .card-icon-wrapper img[alt="UTU"],
            .card-icon-wrapper img[src*="utu"] {
                transform: scale(1.15);
            }
        }
    </style>
</head>

<body>

    <?php require "common/header.php"; ?>

    <section class="hero-section">
        <div class="container fade-in-up">
            <h1 class="text-primary">Approvals, Accreditation & Memberships</h1>
            <p>
                Guru Nanak College holds prestigious approvals and affiliations that validate our 
                commitment to high academic standards. Our institution ensures that every program 
                meets rigorous quality benchmarks set by national and state authorities.
            </p>
        </div>
    </section>

    <!-- <div class="logo-bar text-center">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                <img src="images/aicte-logo-1.webp" alt="AICTE">
                <img src="images/ugc.webp" alt="UGC">
                <img src="images/pci.jpeg" alt="PCI">
                <img src="upload/infra/inc-logo.png" alt="INC">
                <img src="images/utu.webp" alt="UTU">
            </div>
        </div>
    </div> -->

    <section class="approval-grid">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/aicte-logo-1.webp" alt="AICTE">
                        </div>
                        <h3>All India Council for Technical Education</h3>
                        <p>AICTE which is also known as All India Council for Technical Education was organised in 1945. This organization is a national level organization which works as an advisory organization. The statutory of AICTE was made on May 12th, 1988. This establishment was done with a vision of proper coordination and planning for the development of the education system across the country. It also takes care of norms and standards.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/ugc.webp" alt="UGC">
                        </div>
                        <h3>University Grants Commission</h3>
                        <p>The University Grants Commission (UGC), founded in 1956, is a statutory body overseeing higher education in India. Based in New Delhi, it ensures academic standards, recognizes universities, and allocates funds. The UGC promotes research, quality assurance, and development in education. It also frames regulations and monitors accreditation to maintain excellence in higher education institutions across the country.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/msme.webp" alt="MSME">
                        </div>
                        <h3>Ministry of MSME</h3>
                        <p>The Ministry of Micro, Small, and Medium Enterprises (MSME) in India aims to promote and develop the MSME sector. It supports the growth of small businesses through financial assistance, training, technology, and market access. The ministry works to enhance the sector's contribution to employment, innovation, and overall economic development.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/HNBGMU.webp" alt="HNBGU">
                        </div>
                        <h3>HNB Garhwal University</h3>
                        <p>Hemvati Nandan Bahuguna Garhwal University (HNBGU) is a public university located in Uttarakhand, India. Established in 1973, it offers undergraduate, postgraduate, and doctoral programs across various disciplines. Known for its scenic campus in the Garhwal region, the university focuses on research, higher education, and community development, contributing to the socio-economic growth of the region.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/pci.jpeg" alt="PCI">
                        </div>
                        <h3>Pharmacy Council of India</h3>
                        <p>The Pharmacy Council of India (PCI) is a statutory body under the Ministry of Health and Family Welfare, responsible for regulating pharmacy education and practice in India. Established in 1948, PCI ensures the standardization of pharmacy education, licensing of pharmacists, and the promotion of ethical practices in the pharmaceutical industry, safeguarding public health and safety.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/UBTER.webp" alt="UBTER">
                        </div>
                        <h3>Uttarakhand Board of Technical Education</h3>
                        <p>Uttarakhand Board of Technical Education has been set up by Act no 27 of 2003. This set up was done by Uttarakhand legislative assembly approved by the governor on January 13 th, 2004. This was notified on January 15 th, 2004. It provides assistance for the constitution and establishment of Board of Technical Education in Uttarakhand.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper" >
                            <img src="images/utu.webp" alt="UTU">
                        </div>
                        <h3>Uttarakhand Technical University</h3>
                        <p>Uttarakhand Technical University (UTU), established in 2005, is located in Dehradun, India. It offers undergraduate, postgraduate, and doctoral programs in engineering, management, computer science, and other technical fields. UTU aims to provide high-quality education, research, and industry collaboration, fostering innovation and skill development. It plays a key role in the state's technological and industrial growth.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="upload/infra/iap-logo.jpeg" alt="IAP">
                        </div>
                        <h3>Indian Association of Physiotherapists</h3>
                        <p>Guru Nanak College is affiliated with the Indian Association of Physiotherapists (IAP), a government-recognized national body established in 1962 and registered under the Societies Registration Act. This affiliation ensures our physiotherapy program meets the professional standards set by IAP and is recognized nationally and internationally.The IAP is a registered organization under the Societies Registration Act XXI of 1860 (Registration No. S-2339), established in 1962, and is officially recognized by the Government of India.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="upload/infra/inc-logo.png" alt="INC">
                        </div>
                        <h3>The Indian Nursing Council</h3>
                        <p>Guru Nanak College is recognized by the Indian Nursing Council (INC), New Delhi, a statutory body constituted under the Indian Nursing Council Act, 1947 (Act No. XLVIII of 1947), for the regulation and maintenance of standards of nursing education and training in India. The college’s nursing programs are approved in accordance with the guidelines and norms laid down by INC, ensuring compliance with national standards of professional education and practice. The recognition grants our students eligibility for registration and practice across India and abroad.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="modern-card">
                        <div class="card-icon-wrapper">
                            <img src="images/sdsuu.webp" alt="SDSUU">
                        </div>
                        <h3>Sri Dev Suman Uttarakhand University</h3>
                        <p>Sri Dev Suman Uttarakhand University is established as a State University of Uttarakhand vide Sate Government notification No 270/XXXVI(3)/2012/48(1)/2012 dtd 19th October, 2012 in continuation to amendment of erstwhile Pt Deen Dayal Upadhyay Uttarakhand Vishwavidhyalaya Act. 2011 (Uttarakhand Act No 22 of 2011) as notified by State Government vide No 357/XXXVI(3)/201 1/57(1)/2010 dated 4th November, 2011.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php require "company-logo.php" ?>
    <?php require "testimoni-2.php"; ?>
    <?php require "common/footer.php"; ?>

</body>
</html>
