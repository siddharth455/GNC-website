<?php
/**
 * common/head.php
 * ---------------------------------------------------------------------------
 * Everything that belongs in <head> on every page of the site.
 * Include it from inside each page's own <head>, immediately before </head>:
 *
 *     <?php require_once __DIR__ . "/common/head.php"; ?>
 *
 * It prints, once per page:
 *   - the shared stylesheets / preloads / Google Tag Manager snippet
 *   - a rel="canonical" built from the request path (no www, no .php,
 *     no query string, no trailing slash)
 *   - the matching og:url
 *   - the ONE CollegeOrUniversity block for the whole site
 *
 * Individual pages must NOT hard-code their own canonical, og:url or
 * organisation schema - that is what made them drift apart.
 */

if (!defined('GNC_HEAD_INCLUDED')) {
    define('GNC_HEAD_INCLUDED', true);

    if (!defined('GNC_SITE_URL')) {
        define('GNC_SITE_URL', 'https://gnc.edu.in');
    }

    /**
     * Canonical path for the current request.
     * /Best-College-for-BCA...php?utm=x  ->  /best-college-for-bca...
     * /index.php                         ->  /
     */
    if (!function_exists('gnc_canonical_path')) {
        function gnc_canonical_path()
        {
            $uri  = $_SERVER['REQUEST_URI'] ?? '/';
            $path = strtok($uri, '?');
            if ($path === false || $path === '') {
                $path = '/';
            }
            $path = preg_replace('/\.php$/i', '', $path);
            $path = rtrim($path, '/');
            if ($path === '' || strtolower($path) === '/index') {
                $path = '/';
            }
            return $path;
        }
    }

    if (!function_exists('gnc_canonical_url')) {
        function gnc_canonical_url()
        {
            $path = gnc_canonical_path();
            return GNC_SITE_URL . ($path === '/' ? '/' : $path);
        }
    }

    $gncCanonical = gnc_canonical_url();
?>
<link rel="canonical" href="<?= htmlspecialchars($gncCanonical, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:url" content="<?= htmlspecialchars($gncCanonical, ENT_QUOTES, 'UTF-8') ?>" />
  <meta name="robots" content="INDEX, FOLLOW">

  <!-- ✅ Preload critical CSS -->
  <link rel="preload" as="style" href="css/style.css">
  <!-- ✅ Preload hero image (LCP) -->
  <link rel="preload" as="image" href="upload/infra/accredition-banner.webp" fetchpriority="high">
  <link href="./css/main-purged-2024.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/addtohomescreen.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <!-- SWIPER JS (place before your init, near end of body) -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KGJTL3SJ');</script>
<!-- End Google Tag Manager -->
  <style>
    /* base resets */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }
    
    body,
    ul {
      margin: 0;
      padding: 0;
    }

    ul {
      list-style: none;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #222;
    }

    .gnc-header {
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
    }

    /* Top Bar */
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.6);
      padding: 5px 20px;
      color: white;
      transition: background-color 0.4s ease, color 0.4s ease;
      z-index: 999;
    }

    /* When scrolled */
    .top-bar.scrolled {
      background-color: rgba(0, 0, 0, 0.6);
      transition: background-color 0.4s ease, color 0.4s ease;
      backdrop-filter: blur(8px);
    }

    .top-bar.scrolled a,
    .top-bar.scrolled i {
      color: #fff !important;
    }

    .marquee-container {
      flex: 0 0 60%;
      box-shadow: 1px 0 0 0 rgba(255, 255, 255, 0.12);
    }

    .marquee-container marquee {
      color: white;
      font-size: 14px;
      font-weight: 500;
      transition: color 0.4s ease;
    }

    /* When the top bar is scrolled */
    .top-bar.scrolled .marquee-container marquee {
      color: #fff !important;
    }

    .social-icons {
      flex: 0 0 40%;
      text-align: right;
    }

    .social-icons a {
      color: white;
      margin-left: 15px;
      font-size: 16px;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #ff3b3b;
    }

    /* Middle Bar */
    .middle-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.6);
      padding: 10px 40px;
      position: relative;
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.12);
      transition: background-color 0.4s ease, color 0.4s ease;
    }

    /* When scrolled */
    .middle-bar.scrolled {
      background-color: rgba(0, 0, 0, 0.6);
      transition: background-color 0.4s ease, color 0.4s ease;
      backdrop-filter: blur(8px);
    }

    .middle-bar.scrolled a,
    .middle-bar.scrolled i,
    .middle-bar.scrolled span {
      color: #fff !important;
    }

    .navbar-brand img {
      display: block;
      max-width: 180px;
      height: auto;
    }

    /* center area holds top-links; we keep layout same as your code */
    .middle-right {
      display: flex;
      align-items: center;
      gap: 40px;
      flex: 1;
      justify-content: center;
    }

    .top-links {
      display: flex;
      gap: 25px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .top-links li {
      list-style: none;
    }

    .top-links a {
      color: white;
      text-decoration: none;
      font-size: 14px;
      position: relative;
      padding-bottom: 6px;
    }

    /* underline on hover */
    .top-links a::after {
      content: "";
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: #ff3b3b;
      transition: width 0.25s ease;
    }

    .top-links a:hover::after {
      width: 100%;
    }

    /* Admission Helpline Button (kept larger) */
    .admission-btn {
      background-color: #0f9af1;
      color: white;
      border: none;
      padding: 10px 22px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: background 0.3s;
      font-weight: 600;
      white-space: nowrap;
    }
.admission-apply-btn {
      background-color: #0f9af1;
      color: white;
      border: none;
      margin: 5px;
      padding: 10px 22px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      transition: background 0.3s;
      font-weight: 600;
      white-space: nowrap;
    }
    .admission-apply-btn:hover {
      background: #e52d2d;
    }
    .admission-btn:hover {
      background: #e52d2d;
    }

    /* Full-page Admission Overlay (slide-down) */
    .admission-overlay {
      position: fixed;
      top: -100%;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.65);
      backdrop-filter: blur(6px);
      display: flex;
      justify-content: center;
      align-items: flex-start;
      /* align to top when slide down */
      opacity: 0;
      pointer-events: none;
      transition: all 0.55s ease;
      z-index: 9999;
      overflow: auto;
      padding: 40px 20px;
    }

    .admission-overlay.show {
      top: 0;
      opacity: 1;
      pointer-events: auto;
    }

    .admission-content {
      background: #fff;
      color: #000;
      border-radius: 10px;
      display: flex;
      width: 90%;
      max-width: 1100px;
      overflow: hidden;
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.3);
      transform: translateY(-40px);
      transition: transform 0.45s ease;
      margin-top: 30px;
    }

    .admission-overlay.show .admission-content {
      transform: translateY(0);
    }

    .admission-images {
      flex: 1;
      min-width: 300px;
      background: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .admission-images img {
      width: 100%;
      max-width: 420px;
      border-radius: 8px;
      display: none;
      object-fit: cover;
    }

    .admission-images img.active {
      display: block;
    }

    .admission-list {
      flex: 1;
      min-width: 300px;
      padding: 28px 34px;
      display: flex;
      align-items: center;
    }

    .admission-list ul {
      width: 100%;
      padding: 0;
      margin: 0;
    }

    .admission-list ul li {
      padding: 12px 0;
      border-bottom: 1px solid #e6e6e6;
      cursor: pointer;
      font-weight: 600;
      transition: color 0.25s;
      position: relative;
    }

    .admission-list ul li:hover {
      color: #ff3b3b;
    }

    .admission-list ul li:last-child {
      border-bottom: 0;
    }

    .close-overlay {
      position: absolute;
      top: 18px;
      right: 28px;
      font-size: 28px;
      color: #fff;
      cursor: pointer;
      z-index: 1001;
    }

    /* Bottom menu: full-width bar with partitions and gaps */
    .bottom-menu {
  background-color: rgba(0, 0, 0, 0.6);
  width: 100%;
  box-sizing: border-box;
  padding: 10px 0;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.12);
  transition: background-color 0.4s ease, color 0.4s ease;
}

/* When scrolled */
.bottom-menu.scrolled {
  background-color: rgba(0, 0, 0, 0.6);
      transition: background-color 0.4s ease, color 0.4s ease;
      backdrop-filter: blur(8px);
}
.bottom-menu.scrolled a {
  color: #fff !important;
}
/* Make only top-level nav items (not dropdowns) black on scroll */

/* ✅ Keep dropdown menu styles unaffected */
.bottom-menu .dropdown,
.bottom-menu .dropdown a,
.bottom-menu .dropdown i {
  color: white !important;
}

    .bottom-menu .menu-inner {
      max-width: 1400px;
      /* control central width to match header */
      margin: 0 auto;
      /* center inner content */
      padding: 0 20px;
      /* small side padding */
      display: flex;
      align-items: center;
      width: 100%;
    }

    .bottom-menu ul {
      display: flex;
      justify-content: space-between;
      /* distribute items evenly within inner */
      gap: 0;
      flex-wrap: nowrap;
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .bottom-menu ul li {
      list-style: none;
      padding: 10px 30px;
      /* horizontal gap for each item */
      position: relative;
      display: flex;
      align-items: center;
      height: 100%;
    }

    /* vertical partition line between menu items (except last) */
    .bottom-menu ul li:not(:last-child)::after {
      content: "";
      position: absolute;
      right: 0;
      top: 22%;
      width: 1px;
      height: 56%;
      background-color: rgba(255, 255, 255, 0.12);
    }

    .bottom-menu a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      letter-spacing: 0.6px;
      position: relative;
      font-size: 16px;
      padding-bottom: 6px;
    }

    .bottom-menu a::after {
      content: "";
      position: absolute;
      bottom: -6px;
      left: 0;
      width: 0;
      height: 2px;
      background: #ff3b3b;
      transition: width 0.25s;
    }

    .bottom-menu a:hover::after {
      width: 100%;
    }

    .bottom-menu a:hover {
      color: #ff3b3b;
    }

    /* responsive */
    @media (max-width: 1000px) {
      .admission-content {
        flex-direction: column;
        width: 94%;
      }

      .admission-images,
      .admission-list {
        min-width: 100%;
      }

      .middle-bar {
        padding: 12px 20px;
      }

      .bottom-menu .menu-inner {
        padding: 0 12px;
        max-width: 100%;
      }

      .bottom-menu ul {
        gap: 4px;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .bottom-menu ul li {
        padding: 10px 20px;
        white-space: nowrap;
      }
    }

    @media (max-width: 640px) {
      .top-links {
        gap: 12px;
        font-size: 13px;
      }

      .admission-btn {
        padding: 8px 12px;
        font-size: 14px;
      }

      .navbar-brand img {
        width: 140px;
      }
    }

    .bottom-menu ul li {
      position: relative;
    }

    .dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      width: 1000px;
      background: #0d0d0d;
      color: #fff;
      display: none;
      padding: 30px 40px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      border-radius: 0 0 8px 8px;
      z-index: 200;
    }

    .bottom-menu ul li:hover .dropdown {
      display: flex;
      align-items: flex-start;
      gap: 25px;
      /* tighter space between columns */
      justify-content: flex-start;
    }

    /* Dropdown container */
    .bottom-menu ul li .dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      width: auto;
      background-color: #000;
      color: #fff;
      padding: 20px 10px;
      display: flex;
      align-items: stretch;
      /* ✅ ensures equal height columns */
      justify-content: flex-start;
      opacity: 0;
      visibility: hidden;
      transform: translateY(15px);
      transition: all 0.35s ease;
      border-radius: 0 0 10px 10px;
      z-index: 1000;
      gap: 50px;
      box-sizing: border-box;
    }

    /* Smooth dropdown reveal */
    .bottom-menu ul li:hover .dropdown {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    /* Each column */
    .dropdown-column {
      flex: 0 0 220px;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: flex-start;
      gap: 6px;
      padding: 10px 0;
      box-sizing: border-box;
    }

    /* Headings */
    .dropdown-column h4 {
      color: #0f9af1;
      font-size: 17px;
      margin: 0 0 12px 0;
      height: 30px;
      text-transform: uppercase;
      font-weight: 600;
      line-height: 1.2;
    }

    /* UL - vertical links */
    .dropdown-column ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .dropdown-column ul li {
      display: block;
      padding: 0px;
    }
/* Ensure dropdown never goes off-screen to the right */
.bottom-menu ul li .dropdown {
  left: 0;
  right: auto;
  transform-origin: top left; /* smooth animation from left side */
}

/* For right-side items like 'Placements', open from the left edge instead */
.bottom-menu ul li.dropdown-align-left .dropdown {
  left: auto;
  right: 0;
  transform-origin: top right;
}

    .dropdown-column ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 15px;
      transition: all 0.25s ease;
      display: inline-block;
      line-height: 1.6;
    }

    .dropdown-column ul li a:hover {
      color: #00bcd4;
      padding-left: 4px;
    }

    /* Right side box with icons */
    .dropdown-image {
      flex: 0 0 300px;
      background: linear-gradient(135deg, #005f99, #0099cc);
      padding: 25px;
      border-radius: 10px;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 25px;
      align-items: center;
      justify-items: center;
      transition: all 0.3s ease;
      box-sizing: border-box;
    }

    /* ✅ Match height of dropdown columns */
    .dropdown-column,
    .dropdown-image {
      height: 100%;
      /* makes all columns equal height */
    }

    /* Icon section styling */
    .dropdown-image div {
      text-align: center;
      color: #fff;
    }

    .dropdown-image i {
      font-size: 28px;
      margin-bottom: 8px;
      transition: transform 0.3s ease;
    }

    .dropdown-image div:hover i {
      transform: scale(1.2);
    }

    .dropdown-image p {
      font-size: 14px;
      margin: 0;
      font-weight: 500;
    }

    /* Tagline below icons */
    .dropdown-tagline {
      grid-column: 1 / -1;
      /* span full width of the grid */
      text-align: center;
      margin-top: 15px;
      border-top: 1px solid rgba(255, 255, 255, 0.3);
      padding-top: 12px;
    }

    .dropdown-tagline h3 {
      font-size: 18px;
      color: #fff;
      margin: 0;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .dropdown-tagline p {
      font-size: 14px;
      color: #e0f7fa;
      margin: 4px 0 0;
      font-style: italic;
    }

    /* Apply this ONLY to the Programs menu */
    li:has(> a[href="#"]:contains("Programs")) .dropdown {
      position: absolute;
      top: 100%;
      left: 0;
      transform: none;
      display: flex;
      flex-wrap: nowrap;
      justify-content: space-between;
      align-items: flex-start;
      width: 100vw;
      background: #000;
      /* keep consistent */
      padding: 25px 40px;
      box-sizing: border-box;
    }

    /* Properly align all columns horizontally */
    li:has(> a[href="#"]:contains("Programs")) .dropdown-column {
      flex: 1 1 20%;
      min-width: 220px;
      max-width: 280px;
    }

    /* Compact spacing & readable style */
    li:has(> a[href="#"]:contains("Programs")) .dropdown-column h4 {
      margin-bottom: 6px;
      font-size: 15px;
      text-transform: uppercase;
    }

    li:has(> a[href="#"]:contains("Programs")) .dropdown-column ul {
      list-style: none;
      padding: 0;
      margin: 0 0 12px 0;
    }

    li:has(> a[href="#"]:contains("Programs")) .dropdown-column ul li a {
      display: block;
      padding: 3px 0;
      font-size: 14px;
    }

    /* Align right-side visual box properly */
    li:has(> a[href="#"]:contains("Programs")) .dropdown-image {
      flex: 1 1 250px;
      max-width: 280px;
      background: linear-gradient(135deg, #0078d7, #00aaff);
      padding: 20px;
      border-radius: 12px;
      color: #fff;
      text-align: center;
      align-self: stretch;
    }

    /* Make headings clickable but keep color same */
    .dropdown-column h4 a {
      color: inherit;
      text-decoration: none;
      display: inline-block;
    }

    /* Adjust dropdown position logic */
    .programs-menu .dropdown {
      left: auto;
      right: 0;
      transform-origin: top right;
      min-width: max-content;
      max-width: 95vw;
      overflow-x: auto;
    }
/* ===== Hide Desktop Header/Menu on Mobile ===== */
@media (max-width: 991px) {
  .gnc-header,
  .navbar,
  .main-menu,
  header .lower-header,
  .header-menu,
  .step-first-menu {
    display: none !important;
  }
}
/* === Header Shrink Effect on Scroll (Desktop Only) === */
@media (min-width: 992px) {
  .middle-bar,
  .top-bar,
  .bottom-menu {
    transition: all 0.4s ease;
  }

  /* When scrolled */
  .middle-bar.scrolled {
    padding: 6px 40px !important;
  }

  .top-bar.scrolled {
    padding: 2px 20px !important;
  }

  .bottom-menu.scrolled {
    padding: 6px 0 !important;
  }

  /* Shrink the logo */
  .middle-bar.scrolled .navbar-brand img {
    max-width: 140px !important;
    transition: all 0.4s ease;
  }

  /* Optionally shrink menu text a little */
  .bottom-menu.scrolled a {
    font-size: 15px !important;
  }
}

</style>
<script>
window.addEventListener("scroll", function () {
  const scrollY = window.scrollY;
  const topBar = document.querySelector(".top-bar");
  const middleBar = document.querySelector(".middle-bar");
  const bottomMenu = document.querySelector(".bottom-menu");

  if (scrollY > 50) {
    topBar?.classList.add("scrolled");
    middleBar?.classList.add("scrolled");
    bottomMenu?.classList.add("scrolled");
  } else {
    topBar?.classList.remove("scrolled");
    middleBar?.classList.remove("scrolled");
    bottomMenu?.classList.remove("scrolled");
  }
});
</script>

  <!-- One organisation block for the whole site. Do not repeat it per page. -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollegeOrUniversity",
    "@id": "https://gnc.edu.in/#organization",
    "name": "Guru Nanak College",
    "alternateName": "GNC Dehradun, Guru Nanak College of Pharmaceutical & Paramedical Sciences",
    "url": "https://gnc.edu.in/",
    "logo": "https://gnc.edu.in/images/logo.webp",
    "telephone": "+91-7300900900",
    "email": "admission@gnc.edu.in",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Jhajhra, Chakrata Road",
      "addressLocality": "Dehradun",
      "addressRegion": "Uttarakhand",
      "postalCode": "248007",
      "addressCountry": "IN"
    },
    "sameAs": [
      "https://www.facebook.com/gncmh",
      "https://www.instagram.com/gncdehradun",
      "https://www.linkedin.com/company/gncdehradun/",
      "https://www.youtube.com/@gncdehradun"
    ]
  }
  </script>
<?php
}
