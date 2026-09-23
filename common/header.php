<?php
/**
 * common/header.php
 * ---------------------------------------------------------------------------
 * Site header markup only. This file is required from inside each page's
 * <body>, so it must not open <html>, <head> or <body> - everything that
 * belongs in <head> now lives in common/head.php.
 */

// Safety net: if a page forgot to include the shared <head>, pull it in here
// so the stylesheets and schema still load.
require_once __DIR__ . '/head.php';

// Start buffering the page so common/footer.php can print a FAQPage block
// generated from the FAQ accordion that is actually on the page.
require_once __DIR__ . '/schema-faq.php';
gnc_faq_buffer_start();
?>
     <header class="gnc-header">
          <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGJTL3SJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Top Marquee Bar -->
    <div class="top-bar">
      <div class="marquee-container">
        <marquee behavior="scroll" direction="left">
          <i class="fa-solid fa-circle-arrow-right"></i>
          Disclaimer: This is our official website. There is no other website for any admission to Guru Nanak College, Jhajra, Dehradun. Please do not send any amount to any account other than the official one.
          <a href="bank-details" class="btn btn-danger btn-sm ms-2" style="background:#0f9af1;color:#fff;padding:2px 8px;border-radius:4px;text-decoration:none;">CLICK HERE for account details</a> 
        </marquee>
      </div>
      
      <div class="social-icons">
        <a href="https://wa.me/917300900900?text=Hi GNC" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
        <a href="tel:+917300900900" aria-label="Give a miss call"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a href="https://maps.app.goo.gl/WWNhKqccPRahyEya9" target="_blank" rel="noopener noreferrer"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/gncmh"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/gncdehradun/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/gncdehradun/"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="https://www.youtube.com/@gncdehradun"><i class="fa-brands fa-youtube"></i></a>
      </div>
       
    </div>

    <!-- Middle Logo + Links -->
    <div class="middle-bar">
      <a class="navbar-brand" href="./">
        
        <img src="images/logo.webp" alt="Guru Nanak College logo" width="180">
      </a>
      <div class="middle-right">
        <ul class="top-links">
          <li><a href="https://student.gncdehradun.com/" target="_blank" rel="noopener noreferrer">Student ERP Login</a></li>
          <li><a href="https://staff.gncdehradun.com/" target="_blank" rel="noopener noreferrer">Staff ERP Login</a></li>
          <li><a href="library">Library</a></li>
          <li><a href="careers">Careers</a></li>
          <li><a href="alumni">Alumni</a></li>
          <li><a href="contact"> Contact Us</a></li>
          <li><a href="blog"> Blog</a></li>
          
        </ul>
      </div>
  <a href="https://application.gnc.edu.in/"><div class="admission-apply-btn" id="openOverlay-2">Apply Now</div></a>
      <button class="admission-btn" id="openOverlay">
        Admission Helpline<br><span style="font-weight:700;font-size:14px;"> 7300900900</span><i class="fa-solid fa-bars"></i>
      </button>
     
    </div>
    </div>
     

    <!-- Bottom Menu (full width, with inner centered container) -->
     
    <nav class="bottom-menu" aria-label="Main menu">
      <div class="menu-inner">
        <ul>
          <li>
            <a href="#">About</a>
            <!-- Dropdown starts here -->
            <div class="dropdown">
              <div class="dropdown-column">
                <h4>About Guru Nanak College</h4>
                <ul>
                  <li><a href="about-us">The Guru Nanak College</a></li>
                  <li><a href="leadership">Leadership</a></li>
                  <li>
                    <a href="vision-mission">Vision &amp; Mission</a>
                  </li>
                  <li>
                    <a href="iai">Industry-Academia Interface</a>
                  </li>
                  <li>
                    <a href="approvals-accreditation-memberships">Approvals,
                      Accreditation &amp; Memberships</a>
                  </li>
                </ul>
              </div>
              <div class="dropdown-column">
                <h4>Related Links</h4>
                <ul>
                  <li>
                    <a href="admissions">Admissions</a>
                  </li>
                  <li>
                    <a href="scholarships">Scholarships</a>
                  </li>
                  <li>
                    <a href="campus-life">Campus Life</a>
                  </li>
                  <li><a href="contact">How to Reach Us?</a></li>
                </ul>
              </div>
              <div class="dropdown-image">
                <div>
                  <i class="fa-solid fa-handshake"></i>
                  <p>Human Dignity</p>
                </div>
                <div>
                  <i class="fa-solid fa-heart"></i>
                  <p>Empathy</p>
                </div>
                <div>
                  <i class="fa-solid fa-user"></i>
                  <p>Humility</p>
                </div>
                <div>
                  <i class="fa-solid fa-hand-holding-heart"></i>
                  <p>Giving</p>
                </div>
                <!-- ✅ Added tagline -->
                <div class="dropdown-tagline">
                  <h3>GNC College</h3>
                  <p>Best Educational Institution</p>
                </div>
              </div>
            </div>
          </li>
          <li class="programs-menu">
            <a href="#">Programs</a>
            <div class="dropdown">
              <!-- Column 1 -->
              <div class="dropdown-column">
                <h4><a href="paramedical-college-in-dehradun-uttarakhand" style="color: #0f9af1 !important;">Paramedical Programs</a></h4>
                <ul>
                  <li><a href="best-bmrit-bachelor-in-medical-radio-imagingtechnology-college-in-dehradun">Bachelor of Medical Radio Diagnosis And Imaging Technology</a></li>
                  <li><a href="best-bmlt-college-in-dehradun">Bachelor of Medical Laboratory Technology</a></li>
                  <li><a href="best-bpt-college-in-dehradun-uttarakhand">Bachelor of Physiotherapy</a></li>
                  <li><a href="best-bsc-optometry-college-in-dehradun">Bachelor of Optometry</a></li>
                  <li><a href="best-operation-theatre-technology-colleges-in-dehradun">Bachelor of Operation Theatre Technology</a></li>
                  <li><a href="masters-in-lab-technician">Master of Medical Laboratory Technology</a></li>
                  <li><a href="best-mpt-master-of-physiotherapy-college">Master of Physiotherapy</a></li>
                  <!-- <li><a href="best-diploma-in-dialysis-technology">Diploma in Dialysis Technology</a></li> -->
                </ul>
              </div>
              <!-- Column 2 -->
              <div class="dropdown-column">
                <h4><a href="pharmacy-college-in-dehradun-uttarakhand" style="color: #0f9af1 !important;">Pharmacy Programs</a></h4>
                <ul>
                  <li><a href="best-college-for-b-pharmacy-in-dehradun-uttarakhand">Bachelor of Pharmacy</a></li>
                  <li><a href="b-pharm-lateral-entry-colleges-in-dehradun-uttarakhand">Lateral Entry in B. Pharma</a></li>
                  <li><a href="best-college-for-d-pharm-in-dehradun-uttarakhand">Diploma in Pharmacy</a></li>
                </ul>
                <h4><a href="top-health-science-college-in-dehradun-uttarakhand" style="color: #0f9af1 !important;">Health Science</a></h4>
                <ul>
                  <li><a href="master-of-public-health">Master of Public Health</a></li>
                  <li><a href="master-of-hospital-administration">Master of Hospital Administration</a></li>
                </ul>
                <h4><a href="nursing-college-in-dehradun-uttarakhand" style="color: #0f9af1 !important;">Nursing Program</a></h4>
                <ul>
                  <li><a href="best-b-sc-nursing-colleges-in-dehradun">B.Sc. Nursing</a></li>
                  <li><a href="best-gnm-college-in-dehradun">General Nursing and Midwifery</a></li>
                  <li><a href="post-basic-nursing">Post Basic B.Sc. Nursing</a></li>
                </ul>
              </div>
              <!-- Column 3 -->
              <div class="dropdown-column">
                <h4><a href="top-college-for-life-and-allied-sciences-in-dehradun-uttarakhand" style="color: #0f9af1 !important;">Life & Allied Science</a></h4>
                <ul>
                  <li><a href="bsc-microbiology-colleges-in-dehradun-uttarakhand">B.Sc. Microbiology</a></li>
                  <li><a href="bsc-biotechnology">B.Sc. Biotechnology</a></li>
                  <li><a href="bsc-food-technology">B.Sc. Food Technology</a></li>
                  <li><a href="bsc-pcm-colleges-in-dehradun-uttarakhand">B.Sc. PCM</a></li>
                  <li><a href="bsc-cbz">B.Sc. CBZ</a></li>
                  <li><a href="bsc-geology-college-in-dehradun-uttarakhand">B.Sc. Geology</a></li>
                  <li><a href="msc-microbiology-colleges-in-dehradun">M.Sc. Microbiology</a></li>
                  <li><a href="msc-food-tech-colleges-in-dehradun-uttarakhand">M.Sc. Food Technology</a></li>
                  <li><a href="msc-chemistry-colleges-in-dehradun-uttarakhand">M.Sc. Chemistry</a></li>
                  <li><a href="msc-physics-college-in-dehradun-uttarakhand">M.Sc. Physics</a></li>
                  <li><a href="msc-botany-colleges-in-uttarakhand">M.Sc. Botany</a></li>
                  <li><a href="msc-zoology-colleges-in-dehradun-uttarakhand">M.Sc. Zoology</a></li>
                </ul>
              </div>
              <!-- Column 4 -->
              <div class="dropdown-column">
                <h4><a href="best-college-for-computer-science-in-dehradun" style="color: #0f9af1 !important;">Computer Sciences</a></h4>
                <ul>
                  <li><a href="best-college-for-btech-computer-science-in-dehradun-uttarakhand">B.Tech Computer Science</a></li>
                  <li><a href="best-college-for-bca-in-dehradun-uttarakhand">Bachelor of Computer Applications</a></li>
                  
                </ul>
                <h4><a href="best-management-college-in-dehradun" style="color: #0f9af1 !important;">Business School</a></h4>
                <ul>
                  <li><a href="best-bba-college-in-dehradun">Bachelor of Business Administration</a></li>
                </ul>
                <h4><a href="best-bsc-agriculture-college-in-dehradun-uttarakhand" style="color: #0f9af1 !important;">Agriculture Science</a></h4>
                <ul>
                  <li><a href="agriculture-science">B.Sc. Agriculture</a></li>
                  <li><a href="best-bsc-forestry-colleges-in-dehradun">B.Sc. Forestry</a></li>
                  <li><a href="best-msc-agronomy-colleges-in-dehradun">M.Sc. Agronomy</a></li>
                  <li><a href="msc-horticulture">M.Sc. Horticulture</a></li>
                </ul>
              </div>
              <div class="dropdown-column">
                <h4><a href="best-hotel-management-college-in-dehradun" style="color: #0f9af1 !important;">Hotel Management</a></h4>
                <ul>
                  <li><a href="best-dhm-colleges-in-dehradun">Diploma in Hotel Management</a></li>
                </ul>
               
                <!-- Right Section -->
                <div class="dropdown-image">
                  <div><i class="fa-solid fa-stethoscope"></i></div>
                  <div><i class="fa-solid fa-pills"></i></div>
                  <div><i class="fa-solid fa-dna"></i></div>
                  <div><i class="fa-solid fa-computer"></i></div>
                  <div class="dropdown-tagline">
                    <h3>Explore GNC Programs</h3>
                    <p>Choose Your Path to Excellence</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="#">Academics</a>
            <!-- Dropdown starts here -->
            <div class="dropdown">
              <div class="dropdown-column">
                <h4>Academics</h4>
                <ul>
                  <li><a href="academic-overview">Academics Overview</a></li>
                  <li><a href="college-and-department">Colleges & Departments</a></li>
                  <li><a href="library">Libraries</a></li>
                  <li><a href="lab">Lab Infrastructure</a></li>
                  <li><a href="sport">Sports & Adventure</a></li>
                  <li><a href="calendar">Academic Calendar</a></li>
                </ul>
              </div>
              <div class="dropdown-image">
                <div>
                  <i class="fa-solid fa-graduation-cap"></i>
                  <p>Excellence</p>
                </div>
                <div>
                  <i class="fa-solid fa-book-open"></i>
                  <p>Knowledge</p>
                </div>
                <div>
                  <i class="fa-solid fa-chalkboard-teacher"></i>
                  <p>Guidance</p>
                </div>
                <div>
                  <i class="fa-solid fa-lightbulb"></i>
                  <p>Innovation</p>
                </div>

                <div class="dropdown-tagline">
                  <h3>Academic Brilliance</h3>
                  <p>Building Bright Futures with Quality Education</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="#">Admissions</a>
            <!-- Dropdown starts here -->
            <div class="dropdown">
              <div class="dropdown-column">
                <h4>Job Oriented Programs</h4>
                <ul>
                  <li><a href="after-12">After 12th</a></li>
                  <li><a href="after-graduation">After Graduation</a></li>
                  <li><a href="admissions">Admission Overview</a></li>
                </ul>
              </div>
              <div class="dropdown-column">
                <h4>Admission</h4>
                <ul>
                  <li><a href="iai">Industry-Academia Interface</a></li>
                  <li><a href="https://application.gnc.edu.in/">How to Apply</a></li>
                  <li><a href="scholarships">Scholarships</a></li>
                </ul>
              </div>
              <div class="dropdown-image">
                <div>
                  <i class="fa-solid fa-file-signature"></i>
                  <p>Apply Now</p>
                </div>
                <div>
                  <i class="fa-solid fa-user-check"></i>
                  <p>Eligibility</p>
                </div>
                <div>
                  <i class="fa-solid fa-calendar-check"></i>
                  <p>Important Dates</p>
                </div>
                <div>
                  <i class="fa-solid fa-envelope-open-text"></i>
                  <p>Admission Helpdesk</p>
                </div>
                <div class="dropdown-tagline">
                  <h3>Join GNC Today</h3>
                  <p>Start Your Journey Toward Excellence</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="global-learning">CBC-Global Pathways</a>
            
          </li>
          <li>
            <a href="#">Campus Life</a>
            <!-- Dropdown starts here -->
            <div class="dropdown">
              <div class="dropdown-column">
                <h4>A Home away from Home</h4>
                <ul>
                  <li><a href="campus-life">Campus Life Overview</a></li>
                  <li><a href="cultural">Cultural Activities</a></li>
                  <li><a href="nss">NSS</a></li>
                  <li><a href="events">Events</a></li>
                </ul>
              </div>
              <div class="dropdown-image">
                <div>
                  <i class="fa-solid fa-people-group"></i>
                  <p>Community</p>
                </div>
                <div>
                  <i class="fa-solid fa-music"></i>
                  <p>Events</p>
                </div>
                <div>
                  <i class="fa-solid fa-dumbbell"></i>
                  <p>Sports</p>
                </div>
                <div>
                  <i class="fa-solid fa-tree"></i>
                  <p>Environment</p>
                </div>

                <div class="dropdown-tagline">
                  <h3>Vibrant Campus Life</h3>
                  <p>Experience, Explore & Grow Beyond Classrooms</p>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown-align-left">
            <a href="#">Placements</a>
            <!-- Dropdown starts here -->
            <div class="dropdown">
              <div class="dropdown-column">
                <h4>Placements</h4>
                <ul>
                  <li><a href="placement-overview">Placement Overview</a></li>
                  <li><a href="corporate-partners">Corporate Partners</a></li>
                  <li><a href="industrial-visit">Industrial Visit</a></li>
                </ul>
              </div>
              <div class="dropdown-image">
                <div>
                  <i class="fa-solid fa-briefcase"></i>
                  <p>Career</p>
                </div>
                <div>
                  <i class="fa-solid fa-handshake"></i>
                  <p>Opportunities</p>
                </div>
                <div>
                  <i class="fa-solid fa-chart-line"></i>
                  <p>Growth</p>
                </div>
                <div>
                  <i class="fa-solid fa-user-tie"></i>
                  <p>Success</p>
                </div>

                <div class="dropdown-tagline">
                  <h3>Empowering Careers</h3>
                  <p>Bridging Talent with Global Opportunities</p>
                </div>
              </div>
            </div>
          </li>
          <li class="dropdown-align-left">
            <a href="#">Research & Innovations</a>
            <!-- Dropdown starts here -->
            <div class="dropdown">
              <div class="dropdown-column">
                <h4>Research Intensive College</h4>
                <ul>
                  <li><a href="research">Research Papers</a></li>
                  <li><a href="research-committee">R & D Cell And Code of Ethics</a></li>
                </ul>
              </div>
              <div class="dropdown-image">
                <div>
                  <i class="fa-solid fa-flask"></i>
                  <p>Innovation</p>
                </div>
                <div>
                  <i class="fa-solid fa-microscope"></i>
                  <p>Discovery</p>
                </div>
                <div>
                  <i class="fa-solid fa-brain"></i>
                  <p>Creativity</p>
                </div>
                <div>
                  <i class="fa-solid fa-lightbulb"></i>
                  <p>Ideas</p>
                </div>
                <div class="dropdown-tagline">
                  <h3>Research & Innovation</h3>
                  <p>Advancing Knowledge Through Discovery & Creativity</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Full Page Admission Overlay -->
  <div class="admission-overlay" id="admissionOverlay" aria-hidden="true">
    <span class="close-overlay" id="closeOverlay" title="Close overlay"><i class="fa-solid fa-xmark"></i></span>
    <div class="admission-content" role="dialog" aria-modal="true" aria-label="Admission Helpline">
      <div class="admission-images">
        <img src="upload/Bachelor-of-Optometry.webp" class="active" alt="Paramedical">
        <img src="upload/Bachelor-of-Pharmacy.webp" alt="Pharmacy">
        <img src="upload/Bachelor-of-Science-in-Nursing.webp" alt="Nursing">
        <img src="upload/health-science-head.webp" alt="Health Science">
        <img src="upload/infra/life-allied.webp" alt="Life & Allied Sciences">
        <img src="upload/infra/agri-image.webp" alt="Agriculture Science">
        <img src="upload/infra/bca.webp" alt="Computer Science">
        <img src="upload/hero/mange-1.webp" alt="Business School">
        <img src="upload/Diploma-in-Hotel-Management.webp" alt="Hotel Management">
      </div>
      <div class="admission-list">
        <ul>
          <li><a href ="paramedical-college-in-dehradun-uttarakhand">Paramedical Programs</a></li>
          <li><a href ="pharmacy-college-in-dehradun-uttarakhand">Pharmacy Programs</a></li>
          <li><a href ="nursing-college-in-dehradun-uttarakhand">Nursing Programs</a></li>
          <li><a href ="top-health-science-college-in-dehradun-uttarakhand">Health Science</a></li>
          <li><a href ="top-college-for-life-and-allied-sciences-in-dehradun-uttarakhand">Life & Allied Sciences Programs</a></li>
          <li><a href ="best-bsc-agriculture-college-in-dehradun-uttarakhand">Agriculture Science Programs</a></li>
          <li><a href ="best-college-for-computer-science-in-dehradun">Computer Science Programs</a></li>
          <li><a href ="best-management-college-in-dehradun">Business School Programs</a></li>
          <li><a href ="best-hotel-management-college-in-dehradun">Hotel Management</a></li>
        </ul>
      </div>
    </div>
  </div>
<!-- Bell -->
<!--<div id="admission-bell" class="admission-bell" aria-label="Notifications">-->
<!--  <i class="fa-solid fa-bell"></i>-->
<!--</div>-->

<!-- Popup -->
<!--<a href="https://application.gnc.edu.in/"-->
<!--   id="admission-popup"-->
<!--   class="admission-popup"-->
<!--   aria-label="Admissions Open 2026">-->

<!--  <div class="popup-content">-->
<!--    <strong>Admissions Open 2026</strong>-->
<!--    <p>Click to Apply Now</p>-->
<!--  </div>-->

<!--  <button class="popup-close" aria-label="Close notification">✕</button>-->
<!--</a>-->

<style>
 .admission-bell {
  position: fixed;
  right: 20px;
  bottom: 65px;
  width: 56px;
  height: 56px;
  background: #0f9af1;
  color: #fff;
  border-radius: 50%;
  font-size: 26px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10000;
  box-shadow: 0 8px 20px rgba(0,0,0,.25);
}

/* Popup */
.admission-popup {
  position: fixed;
  right: 20px;
  bottom: 122px;
  width: 260px;
  background: #fff;
  color: #000;
  padding: 14px 16px;
  border-radius: 14px;
  display: none; /* IMPORTANT */
  text-decoration: none;
  z-index: 10000;
  box-shadow: 0 10px 25px rgba(0,0,0,.25);
  display: flex;
  justify-content: space-between;
  gap: 10px;
}

.popup-content p {
  margin: 4px 0 0;
  font-size: 13px;
  color: #555;
}

.popup-close {
  background: none;
  border: none;
  font-size: 18px;
  cursor: pointer;
}

/* Mobile */
@media (max-width: 480px) {
  .admission-popup {
    right: 12px;
    left: 12px;
    bottom:15px;
    width: auto;
  }
  .admission-popup {
  position: fixed;
  left: 120px;
  bottom: 120px;
  width: 250px;
}
}

  </style>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const bell = document.getElementById("admission-bell");
  const popup = document.getElementById("admission-popup");
  const closeBtn = document.querySelector(".popup-close");

  let popupVisible = false;

  // On load: show popup unless user closed it
  if (popup && localStorage.getItem("admissionPopupClosed") !== "true") {
    popup.style.display = "flex";
    popupVisible = true;
  }

  // Bell toggle
  if (bell && popup) {
    bell.addEventListener("click", function () {
      popupVisible = !popupVisible;
      popup.style.display = popupVisible ? "flex" : "none";
    });
  }

  // Close button
  if (closeBtn && popup) {
    closeBtn.addEventListener("click", function (e) {
      e.preventDefault();   // stop link
      e.stopPropagation();  // stop bubbling
      popup.style.display = "none";
      popupVisible = false;
      localStorage.setItem("admissionPopupClosed", "true");
    });
  }

});
</script>

  <script>
    // overlay logic (open, close, hover image swap, close on background click & ESC)
    const openOverlay = document.getElementById('openOverlay');
    const closeOverlay = document.getElementById('closeOverlay');
    const overlay = document.getElementById('admissionOverlay');
    const listItems = overlay.querySelectorAll('.admission-list ul li');
    const images = overlay.querySelectorAll('.admission-images img');

    function openAdmission() {
      overlay.classList.add('show');
      overlay.setAttribute('aria-hidden', 'false');
      document.documentElement.style.overflow = 'hidden';
      document.body.style.overflow = 'hidden';
    }

    function closeAdmission() {
      overlay.classList.remove('show');
      overlay.setAttribute('aria-hidden', 'true');
      document.documentElement.style.overflow = '';
      document.body.style.overflow = '';
    }

    openOverlay.addEventListener('click', openAdmission);
    closeOverlay.addEventListener('click', closeAdmission);

    // hover to change images
    listItems.forEach((item, i) => {
      item.addEventListener('mouseenter', () => {
        images.forEach(img => img.classList.remove('active'));
        if (images[i]) images[i].classList.add('active');
      });
      // support focus for keyboard users
      item.addEventListener('focus', () => {
        images.forEach(img => img.classList.remove('active'));
        if (images[i]) images[i].classList.add('active');
      });
    });

    // close when clicking overlay background (outside content)
    overlay.addEventListener('click', function(e) {
      const content = this.querySelector('.admission-content');
      if (!content.contains(e.target)) {
        closeAdmission();
      }
    });

    // close on ESC
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeAdmission();
    });
  </script>
  <!-- ================= MOBILE HEADER START ================= -->
  <header class="mobile-header">
  <!-- ================== MOBILE HEADER BAR ================== -->
  <div class="mobile-header-bar">
    <!-- Logo -->
    <a class="mobile-logo" href="./">
      <img src="images/logo.webp" alt="Guru Nanak College logo" width="140">
    </a>
    <!-- Admission Helpline -->
    <div class="mobile-helpline-wrapper">
      <button class="mobile-admission-btn">
        Admission Helpline<br>
        <span style="font-weight:700;font-size:14px;">7300900900</span>
      </button>
    </div>
    <!-- Hamburger -->
    <button class="mobile-hamburger" id="mobileHamburger">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- ================== MOBILE MENU ================== -->
  <nav class="mobile-menu" id="mobileMenu">
    <ul>
      <li>
        <a href="#">About <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">
          <li><a href="about-us">The Guru Nanak College</a></li>
          <li><a href="leadership">Leadership</a></li>
          <li><a href="vision-mission">Vision & Mission</a></li>
          <li><a href="iai">Industry-Academia Interface</a></li>
          <li><a href="approvals-accreditation-memberships">Approvals & Memberships</a></li>
          <li><a href="admissions">Admissions</a></li>
          <li><a href="scholarships">Scholarships</a></li>
          <li><a href="campus-life">Campus Life</a></li>
          <li><a href="contact">How to Reach Us?</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Programs <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">

          <li>
            <a href="paramedical-college-in-dehradun-uttarakhand">Paramedical Programs <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="best-bmrit-bachelor-in-medical-radio-imagingtechnology-college-in-dehradun">B.Sc. Medical Radio Diagnosis & Imaging Technology</a></li>
              <li><a href="best-bmlt-college-in-dehradun">B.Sc. Medical Laboratory Technology</a></li>
              <li><a href="best-bpt-college-in-dehradun-uttarakhand">Bachelor of Physiotherapy</a></li>
              <li><a href="best-bsc-optometry-college-in-dehradun">Bachelor of Optometry</a></li>
              <li><a href="best-operation-theatre-technology-colleges-in-dehradun">Bachelor of Operation Theatre Technology</a></li>
              <li><a href="masters-in-lab-technician">M.Sc. Medical Laboratory Technology</a></li>
              <li><a href="best-mpt-master-of-physiotherapy-college">Master of Physiotherapy</a></li>
              <!-- <li><a href="best-diploma-in-dialysis-technology">Diploma in Dialysis Technology</a></li> -->
            </ul>
          </li>

          <li>
            <a href="pharmacy-college-in-dehradun-uttarakhand">Pharmacy Programs <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="best-college-for-b-pharmacy-in-dehradun-uttarakhand">Bachelor of Pharmacy</a></li>
              <li><a href="b-pharm-lateral-entry-colleges-in-dehradun-uttarakhand">Lateral Entry in B. Pharma</a></li>
              <li><a href="best-college-for-d-pharm-in-dehradun-uttarakhand">Diploma in Pharmacy</a></li>
            </ul>
          </li>

          <li>
            <a href="top-health-science-college-in-dehradun-uttarakhand">Health Science <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="master-of-public-health">Master of Public Health</a></li>
              <li><a href="master-of-hospital-administration">Master of Hospital Administration</a></li>
            </ul>
          </li>

          <li>
            <a href="nursing-college-in-dehradun-uttarakhand">Nursing Programs <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="best-b-sc-nursing-colleges-in-dehradun">B.Sc. Nursing</a></li>
              <li><a href="best-gnm-college-in-dehradun">General Nursing & Midwifery</a></li>
              <li><a href="post-basic-nursing">Post Basic B.Sc. Nursing</a></li>
            </ul>
          </li>

          <li>
            <a href="top-college-for-life-and-allied-sciences-in-dehradun-uttarakhand">Life & Allied Science <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="bsc-microbiology-colleges-in-dehradun-uttarakhand">B.Sc. Microbiology</a></li>
              <li><a href="bsc-biotechnology">B.Sc. Biotechnology</a></li>
              <li><a href="bsc-food-technology">B.Sc. Food Technology</a></li>
              <li><a href="bsc-pcm-colleges-in-dehradun-uttarakhand">B.Sc. PCM</a></li>
              <li><a href="bsc-cbz">B.Sc. CBZ</a></li>
              <li><a href="bsc-geology-college-in-dehradun-uttarakhand">B.Sc. Geology</a></li>
              <li><a href="msc-microbiology-colleges-in-dehradun">M.Sc. Microbiology</a></li>
              <li><a href="msc-food-tech-colleges-in-dehradun-uttarakhand">M.Sc. Food Technology</a></li>
              <li><a href="msc-chemistry-colleges-in-dehradun-uttarakhand">M.Sc. Chemistry</a></li>
              <li><a href="msc-physics-college-in-dehradun-uttarakhand">M.Sc. Physics</a></li>
              <li><a href="msc-botany-colleges-in-uttarakhand">M.Sc. Botany</a></li>
              <li><a href="msc-zoology-colleges-in-dehradun-uttarakhand">M.Sc. Zoology</a></li>
            </ul>
          </li>

          <li>
            <a href="best-college-for-computer-science-in-dehradun">Computer Sciences <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="best-college-for-btech-computer-science-in-dehradun-uttarakhand">B.Tech Computer Science</a></li>
              <li><a href="best-college-for-bca-in-dehradun-uttarakhand">Bachelor of Computer Applications</a></li>
            </ul>
          </li>

          <li>
            <a href="best-management-college-in-dehradun">Business School <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="best-bba-college-in-dehradun">Bachelor of Business Administration</a></li>
            </ul>
          </li>

          <li>
            <a href="best-bsc-agriculture-college-in-dehradun-uttarakhand">Agriculture Science<i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="agriculture-science">B.Sc. Agriculture</a></li>
              <li><a href="best-bsc-forestry-colleges-in-dehradun">B.Sc. Forestry</a></li>
              <li><a href="best-msc-agronomy-colleges-in-dehradun">M.Sc. Agronomy</a></li>
              <li><a href="msc-horticulture">M.Sc. Horticulture</a></li>
            </ul>
          </li>

          <li>
            <a href="best-hotel-management-college-in-dehradun">Hotel Management<i class="fa-solid fa-chevron-down arrow-icon"></i></a>
            <ul class="mobile-sub-dropdown">
              <li><a href="best-dhm-colleges-in-dehradun">Diploma in Hotel Management</a></li>
            </ul>
          </li>

        </ul>
      </li>

      <li>
        <a href="#">Academics <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">
          <li><a href="academic-overview">Academic Overview</a></li>
          <li><a href="college-and-department">Colleges & Departments</a></li>
          <li><a href="library">Libraries</a></li>
          <li><a href="lab">Lab Infrastructure</a></li>
          <li><a href="sport">Sports & Adventure</a></li>
          <li><a href="calendar">Academic Calendar</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Admissions <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">
          <li><a href="after-12">After 12th</a></li>
          <li><a href="after-graduation">After Graduation</a></li>
          <li><a href="admissions">Admission Overview</a></li>
          <li><a href="scholarships">Scholarships</a></li>
          <li><a href="https://application.gnc.edu.in/">How to Apply</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Campus Life <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">
          <li><a href="campus-life">Campus Life Overview</a></li>
          <li><a href="cultural">Cultural Activities</a></li>
          <li><a href="nss">NSS</a></li>
          <li><a href="events">Events</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Placements <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">
          <li><a href="placement-overview">Placement Overview</a></li>
          <li><a href="corporate-partners">Corporate Partners</a></li>
          <li><a href="industrial-visit">Industrial Visit</a></li>
        </ul>
      </li>

      <li>
        <a href="#">Research & Innovations <i class="fa-solid fa-chevron-down arrow-icon"></i></a>
        <ul class="mobile-dropdown">
          <li><a href="research">Research Papers</a></li>
          <li><a href="research-committee">R & D Cell & Code of Ethics</a></li>
        </ul>
      </li>
<li><a href="global-learning">CBC-Global Pathways</a></li>
      <li><a href="https://student.gncdehradun.com/AccSoft_GNC/" target="_blank" rel="noopener noreferrer">Student ERP Login</a></li>
      <li><a href="https://staff.gncdehradun.com/AccSoft_GNC/Login.aspx" target="_blank" rel="noopener noreferrer">Staff ERP Login</a></li>
      <li><a href="library">Library</a></li>
      <li><a href="careers">Careers</a></li>
      <li><a href="alumni">Alumni</a></li>
      <li><a href="contact">Contact Us</a></li>
      <li><a href="blog">Blog</a></li>
    </ul>
  </nav>
</header>
<style>
.arrow-icon {
  margin-left: 6px;
  font-size: 12px;
  transition: transform 0.3s ease;
}

li.active > a .arrow-icon {
  transform: rotate(180deg);
}

.mobile-sub-dropdown {
  display: none;
  background: rgba(0,0,0,0.6);
  padding-left: 25px;
}
.mobile-sub-dropdown a {
  font-size: 13px;
  padding: 8px 0;
}
.mobile-dropdown li.active > .mobile-sub-dropdown {
  display: block;
}

.top-bar .marquee-container { flex: 1; }
.top-bar .social-icons a {
  color: white; margin-left: 10px; font-size: 15px; transition: color 0.3s;
}
.top-bar .social-icons a:hover { color: #00a1e9; }

.mobile-header {
  display: none;
}

@media (max-width: 991px) {
  .mobile-header {
    display: block;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
    background: rgba(30,30,30,0.15);
    backdrop-filter: blur(8px);
    transition: background-color 0.4s ease;
  }
  .top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color:rgba(30,30,30,0.15);
    padding: 5px 20px;
    color: white;
    backdrop-filter: blur(8px);
    transition: background-color 0.4s ease;
    z-index: 999;
  }
  .top-bar.scrolled{
    background-color: #ff9c5a !important;
    backdrop-filter: none;
  }
  .mobile-header.scrolled {
    background-color: #ff9c5a !important;
    backdrop-filter: none;
  }

  .mobile-header-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 15px;
  }
  .mobile-logo img { width: 120px; }
  .mobile-hamburger {
    background: none; border: none; color: #fff;
    font-size: 26px; cursor: pointer;
  }
  .mobile-helpline-wrapper { text-align: center; }
  .mobile-admission-btn {
    background: #0f9af1;
    color: #fff;
    border: 1px solid rgba(255,255,255,0.7);
    border-radius: 8px;
    padding: 8px 15px;
    font-size: 13px;
    backdrop-filter: blur(6px);
  }

  .mobile-menu {
    display: none;
    background-color: rgba(0,0,0,0.9);
    max-height: 85vh;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: rgba(255,255,255,0.3) transparent;
  }

  .mobile-menu::-webkit-scrollbar {
    width: 6px;
  }
  .mobile-menu::-webkit-scrollbar-thumb {
    background-color: rgba(255,255,255,0.3);
    border-radius: 10px;
  }

  .mobile-menu.show {
    display: block;
    animation: slideDown 0.3s ease-in-out;
  }

  @keyframes slideDown {
    from {opacity: 0; transform: translateY(-10px);}
    to {opacity: 1; transform: translateY(0);}
  }

  .mobile-menu a {
    color: #fff;
    display: block;
    padding: 12px 18px;
    text-decoration: none;
  }

  .mobile-dropdown {
    display: none;
    background: rgba(0,0,0,0.6);
  }
  .mobile-menu li.active > .mobile-dropdown {
    display: block;
  }
  .mobile-dropdown a {
    padding: 10px 35px;
    font-size: 14px;
  }
}
</style>

<!-- ================== SCRIPTS ================== -->
<script>
window.addEventListener("scroll", function() {
  const header = document.querySelector(".mobile-header");
  if (window.scrollY > 50) header.classList.add("scrolled");
  else header.classList.remove("scrolled");
});

const mobileHamburger = document.getElementById('mobileHamburger');
const mobileMenu = document.getElementById('mobileMenu');

mobileHamburger.addEventListener('click', () => {
  mobileMenu.classList.toggle('show');
});

// Handle dropdown & sub-dropdowns
document.querySelectorAll('.mobile-menu li > a').forEach(link => {
  link.addEventListener('click', e => {
    const parent = e.target.closest('li');
    const subMenu = parent.querySelector('.mobile-dropdown, .mobile-sub-dropdown');

    if (subMenu) {
      e.preventDefault();

      // Check if already active
      const isActive = parent.classList.contains('active');

      // Close all other open menus at the same level
      const siblings = parent.parentElement.querySelectorAll(':scope > li.active');
      siblings.forEach(sib => {
        if (sib !== parent) sib.classList.remove('active');
      });

      // Toggle the clicked one
      parent.classList.toggle('active', !isActive);
    }
  });
});
</script>
