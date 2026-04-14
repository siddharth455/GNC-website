<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
    :root {
        --ap-orange: #ff5722;
        --ap-blue: #00b7ff;
        --ap-font: 'Plus Jakarta Sans', sans-serif;
    }

    /* Admission Process Scoped Styles - Refined "Reference" Version */
    .gnc-admission-process {
        font-family: var(--ap-font);
        color: #222;
        background: #fff;
        line-height: 1.5;
    }

    /* Layout Utilities */
    .gnc-pt-large { padding-top: 50px; }
    .gnc-pb-large { padding-bottom: 70px; }
    
    .gnc-title-box h3 {
        font-size: 36px;
        line-height: 1.2;
        font-weight: 800;
        color: #222;
        margin-bottom: 35px;
        letter-spacing: -0.5px;
    }

    /* Wider side margins for a centered "zoomed out" look */
    .gnc-px-responsive { 
        padding-left: 120px; 
        padding-right: 120px; 
        max-width: 1400px;
        margin: 0 auto;
    }

    /* Admission Step Navigation */
    .gnc-nav-slider {
        background: #f5f5f5;
        border-radius: 12px;
        padding: 8px;
        box-shadow: none;
        display: block;
    }

    .gnc-nav-item {
        border-radius: 10px;
        display: flex !important;
        justify-content: center;
        align-items: center;
        height: 70px; /* Slimmer nav */
        width: 32.5%;
        flex-direction: column;
        transition: all 0.3s ease;
        background: transparent;
        margin-right: 1%;
    }

    .gnc-nav-item:hover { cursor: pointer; }
    .gnc-nav-item.is-selected { 
        background: #ffffff !important;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04) !important;
    }

    .gnc-nav-item span {
        font-size: 10px;
        line-height: 1;
        font-weight: 600;
        color: #888;
        display: block;
        margin-bottom: 5px;
        text-transform: capitalize;
    }

    .gnc-nav-item h5 {
        font-size: 15px;
        line-height: 1.2;
        font-weight: 800;
        color: #222;
        margin-bottom: 0;
    }

    /* Process Content Slider */
    .gnc-main-slider {
        margin-top: 50px;
    }

    .gnc-slide {
        display: flex !important;
        align-items: center; /* Changed from flex-start to center */
        gap: 60px;
        width: 100%;
        padding: 5px 0;
    }

    .gnc-img-box {
        flex: 0 0 52%;
        height: 320px;
        overflow: hidden;
        border-radius: 18px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    }

    .gnc-img-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .gnc-text-box {
        flex: 1;
       text-align:left;
    }

    .gnc-text-box h6 {
        font-size: 20px;
        line-height: 1.2;
        font-weight: 800;
        color: #222;
        margin-bottom: 18px;
    }

    .gnc-text-box p {
        font-size: 13.5px; /* Smaller, sharper font */
        line-height: 1.6;
        font-weight: 400;
        color: #555;
        margin-bottom: 12px;
    }

    /* Mobile & Tablet Optimizations */
    @media (max-width: 1399px) {
        .gnc-px-responsive { padding-left: 60px; padding-right: 60px; }
    }

    @media (max-width: 1199px) {
        .gnc-px-responsive { padding-left: 40px; padding-right: 40px; }
        .gnc-img-box { flex: 0 0 50%; height: 300px; }
    }

    @media (max-width: 991px) {
        .gnc-px-responsive { padding-left: 20px; padding-right: 20px; }
        .gnc-slide { flex-direction: column; text-align: center; gap: 30px; }
        .gnc-img-box { flex: 0 0 100%; width: 100%; height: 260px; }
        .gnc-text-box p { max-width: 100%; }
    }

    @media (max-width: 767px) {
        .gnc-title-box h3 { font-size: 26px; }
        .gnc-nav-item { height: 65px; width: 31%; }
        .gnc-nav-item h5 { font-size: 13px; }
        .gnc-img-box { height: 200px; }
    }
</style>

<section class="gnc-admission-process gnc-pt-large gnc-pb-large">
    <div class="container gnc-px-responsive">
        <div class="gnc-title-box text-center" data-aos="fade-up">
            <h3>How to Apply?</h3>
        </div>
        
        <!-- Step Navigation -->
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7 col-xl-6"> 
                <div class="gnc-nav-slider">
                    <div class="gnc-nav-item">
                        <span>Step 1</span>
                        <h5>Signup</h5>
                    </div>
                    <div class="gnc-nav-item">
                        <span>Step 2</span>
                        <h5>Registration</h5>
                    </div>
                    <div class="gnc-nav-item">
                        <span>Step 3</span>
                        <h5>Admission</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Slides -->
        <div class="row mt-2 justify-content-center">
            <div class="col-xl-11">
                <div class="gnc-main-slider">
                    <!-- Step 1 -->
                    <div class="gnc-slide">
                        <div class="gnc-img-box">
                            <img src="images/step-1.jpg" alt="Registration Process">
                        </div>
                        <div class="gnc-text-box">
                            <h6>Step 1 - Signup</h6>
                            <p>Start your journey by registering on our official admission portal. Provide your basic details including Name, Email ID, and Contact Number to create your candidate profile.</p>
                            <p>Upon successful registration, you will receive your login credentials via email and SMS. Use these details to access your dashboard at any time.</p>
                        </div>
                    </div>
                    
                    <!-- Step 2 -->
                    <div class="gnc-slide">
                        <div class="gnc-img-box">
                            <img src="images/step-2.jpg" alt="Application Selection">
                        </div>
                        <div class="gnc-text-box">
                            <h6>Step 2 - Registration</h6>
                            <p>Login to your portal and complete the comprehensive application form. You will need to upload your academic documents, identity proof, and recent photographs.</p>
                            <p>After filling in the details, select your preferred course and schedule your entrance interview or test as per the college guidelines.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="gnc-slide">
                        <div class="gnc-img-box">
                            <img src="images/step-3.jpg" alt="Final Selection">
                        </div>
                        <div class="gnc-text-box">
                            <h6>Step 3 - Admission</h6>
                            <p>Once your application is reviewed and entrance requirements are met, the final merit list will be generated. Shortlisted candidates will receive a provisional admission letter.</p>
                            <p>Confirm your seat by paying the requisite admission fee and completing the document verification process at the college campus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        // GNC Step Navigation Controller
        var $navSlider = $('.gnc-nav-slider').flickity({
            asNavFor: '.gnc-main-slider',
            cellAlign: 'left',
            autoPlay: 8000,
            contain: true,
            pageDots: false,
            draggable: false,
            prevNextButtons: false
        });

        // GNC Main Content Slider
        var $mainSlider = $('.gnc-main-slider').flickity({
            cellAlign: 'left',
            pageDots: false,
            autoPlay: 8000,
            pauseAutoPlayOnHover: false,
            contain: true,
            draggable: true,
            prevNextButtons: false
        });
    });
</script>








