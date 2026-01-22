<style>
    .aboutProgram {
        margin-bottom: 30px;
    }

    .aboutProgram.main h1,
    .aboutProgram h2 {
        font-size: 26px;
        line-height: 26px;
        margin-bottom: 15px;
        margin-top: 15px;
        vertical-align: bottom;
    }

    .aboutProgram h3 {
        font-size: 20px;
        line-height: 20px;
        margin: 20px 0 10px;
    }

    .aboutProgram h3.af-title {
        font-size: 22px;
        line-height: 22px;
        margin-bottom: 20px;
    }

    .steps ul,
    .title-number {
        display: flex;
    }

    .steps ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        justify-content: space-between;
        position: relative;
    }

    .steps {
        padding: 40px 20px 10px;
        position: relative;
        z-index: 1;
    }

    .stepss span:after {
        position: absolute;
        content: "";
        height: 2px;
        width: 130%;
        left: 135%;
        transform: translateX(-50%);
        background: #9999993d;
        z-index: 9;
        top: 22px;
    }

    .steps ul li {
        position: relative;
        z-index: 99;
        text-indent: unset !important;
        opacity: 1 !important;
        width: auto !important;
        height: auto !important;
        background-color: transparent !important;
        border-top: 0 !important;
        border-bottom: 0 !important;
    }

    .steps ul li a {
        cursor: pointer;
    }

    .steps ul .active .title-number {
        color: #fff;
        background: rgb(3 175 255);
    }

    .title-text {
        display: block;
        font-size: 12px;
        line-height: 18px;
        padding-bottom: 5px;
        color: black;
        margin-top: 10px;
        white-space: nowrap;
        font-weight: bold;
        text-align: center;
    }

    .title p {
        font-size: 16px;
        line-height: 18px;
        padding-bottom: 8px;
        color: #333;
        text-align: center;
    }

    .title-number {
        font-size: 14px;
        width: 44px;
        height: 44px;
        border-radius: 50%;
        border: 4px solid #f8f9fa;
        background: #e9ecef;
        color: #6c757d;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.2s ease-in-out;
    }

    /* Button styling */
    a.bfit-btn {
        display: inline-block;
        padding: 12px 25px;
        text-decoration: none;
        color: white !important;
        font-weight: bold;
        border-radius: 5px;
        text-align: center;
        transition: all 0.3s ease;
        margin-right: 10px;
    }

    a.bfit-btn.red-bg {
        background-color: rgb(3 175 255);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    a.bfit-btn.red-bg:hover {
        background-color: rgb(251 123 28);
        box-shadow: 0 6px 12px rgba(3, 175, 255, 0.3);
        transform: translateY(-2px);
    }

    /* The Image Overlay Container */
    .image-cta-container {
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8)), url('upload/infra/student-2.webp');
        background-size: cover;
        background-position: center;
        border: 1px solid #ddd;
        border-radius: 8px;
        min-height: 450px;
        display: flex;
        align-items: flex-end; /* Pushes content to bottom */
        padding: 40px;
    }

    .cta-content-box {
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
    }

    @media (max-width: 768px) {
        .aboutProgram.main h1, .aboutProgram h2, .aboutProgram h3 {
            font-size: 18px;
            line-height: 22px;
        }
        .title-number { width: 32px; height: 32px; }
        .steps { padding: 20px 10px; }
        .stepss span:after { width: 110%; left: 126%; top: 12px; }
        .image-cta-container { min-height: 400px; padding: 20px; margin-top: 30px;}
    }

    @media (max-width: 480px) {
        .title-number { width: 28px; height: 28px; font-size: 12px; }
        .bfit-btn { width: 100%; margin-bottom: 10px; margin-right: 0; }
    }
</style>

<section class="white-bg pb-9" style="margin-bottom: 10px;">
    <div class="container patent-section pt-0">
        <div class="row pt-4 apply-section">
            <!-- Left Side: Steps -->
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="aboutProgram">
                            <h2>How to Apply?</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div id="myCarousel5" class="carousel slide" data-bs-ride="carousel">
                            <div class="steps">
                                <ul class="carousel-indicators">
                                    <li data-bs-target="#myCarousel5" data-bs-slide-to="0" class="active">
                                        <div class="title stepss active">
                                            <span class="title-number"><i class="fa fa-sign-in"></i></span>
                                            <span class="title-text">Step 1</span>
                                            <p>Registration Form</p>
                                        </div>
                                    </li>
                                    <li data-bs-target="#myCarousel5" data-bs-slide-to="1">
                                        <div class="title stepss">
                                            <span class="title-number"><i class="fa fa-check"></i></span>
                                            <span class="title-text">Step 2</span>
                                            <p>Application Form</p>
                                        </div>
                                    </li>
                                    <li data-bs-target="#myCarousel5" data-bs-slide-to="2">
                                        <div class="title">
                                            <span class="title-number"><i class="fa fa-check"></i></span>
                                            <span class="title-text">Step 3</span>
                                            <p>Verification &amp; Admission</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="3500">
                                    <div class="aboutProgram mb-5">
                                        <h3 class="af-title">Step 1 - Registration Form</h3>
                                        <p>Apply now and register to secure your spot for an exciting opportunity.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <div class="aboutProgram mb-5">
                                        <h3 class="af-title">Step 2 - Application Form</h3>
                                        <p>Fill out the information and upload documents for the application processing and verification.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="3500">
                                    <div class="aboutProgram mb-5">
                                        <h3 class="af-title">Step 3 - Document Verification &amp; Admission</h3>
                                        <p>Wait for the approval, pay the program fee, and begin your journey with us!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Image with Content Overlaid -->
            <div class="offset-lg-1 col-lg-5 image-cta-container">
                <div class="cta-content-box">
                    <div class="aboutProgram text-white">
                        <h2 style="color:white; font-weight: 800; font-size: 30px; line-height: 1.2; margin-bottom: 15px;">
                            Aspire to Inspire:<br> Master Your Field <br>at Guru Nanak College!
                        </h2>
                        <p style="color: rgba(255,255,255,0.9); font-size: 16px; line-height: 1.5;">
                            Take the first step towards a bright future at Guru Nanak College Dehradun. 
                            Apply Now and join a community dedicated to academic excellence and personal growth!
                        </p>
                    </div>
                    <div class="mt-4">
                        <a href="https://application.gnc.edu.in/" class="bfit-btn red-bg">Apply Today</a>
                        <a href="upload/Brochure_.pdf" class="bfit-btn red-bg">Download Brochure</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>