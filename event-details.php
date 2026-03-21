<?php
// 1. DYNAMIC BASE URL CALCULATION
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$script_path = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_url = rtrim($protocol . "://" . $host . $script_path, '/') . '/';

// 2. DATA LOADING
$events_file = 'events.json';
$events = file_exists($events_file) ? json_decode(file_get_contents($events_file), true) : [];
$slug = isset($_GET['slug']) ? $_GET['slug'] : "";

$current_event = null;
foreach ($events as $event) {
    if ($event['slug'] == $slug) {
        $current_event = $event;
        break;
    }
}

if (!$current_event || strpos($current_event['image'], 'upload/gnc-events/') !== 0) {
    header("Location: " . $base_url . "events.php");
    exit();
}

// 3. CAPTURE AND FIX HEADER
ob_start();
require "common/header.php";
$header_html = ob_get_clean();

// Inject dynamic title
$page_title = $current_event['title'] . " - Guru Nanak College Dehradun";
$header_html = preg_replace('/<title>.*?<\/title>/i', "<title>$page_title</title>", $header_html);

// Resolve asset paths (handles css/, js/, images/, assets/)
$header_html = str_replace(
['href="./css/', 'href="css/', 'src="js/', 'src="images/', 'href="assets/', 'href="./assets/', 'src="assets/', 'src="./assets/'],
[
    'href="' . $base_url . 'css/',
    'href="' . $base_url . 'css/',
    'src="' . $base_url . 'js/',
    'src="' . $base_url . 'images/',
    'href="' . $base_url . 'assets/',
    'href="' . $base_url . 'assets/',
    'src="' . $base_url . 'assets/',
    'src="' . $base_url . 'assets/'
],
    $header_html
);


$header_html = preg_replace('/href="(?!(http|https|#|\/))([^"]+\.php)"/i', 'href="' . $base_url . '$2"', $header_html);

// Inject Extra CSS
$extra_styles = '
<style>
    @import url(\'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap\');

    :root {
        --gnc-red: rgb(251 123 28);
        --gnc-blue: rgb(3 175 255);
        --text-dark: #1e293b;
        --text-gray: #64748b;
        --bg-light: #f3f5f7;
    }

    body {
        background-color: var(--bg-light) !important;
        color: var(--text-dark);
        line-height: 1.8;
        font-family: \'Plus Jakarta Sans\', sans-serif !important;
    }

    .site-wrap {
        max-width: 1300px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .article-layout {
        display: grid;
        grid-template-columns: 1fr 260px;
        gap: 40px;
        margin-top: 0;
        position: relative;
        z-index: 10;
    }

    .main-content {
        background: transparent;
        padding: 0;
        border-radius: 0;
        box-shadow: none;
    }

    .back-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--gnc-blue);
        text-decoration: none;
        font-weight: 700;
        margin-bottom: 25px;
        font-size: 0.95rem;
        background: rgba(255,255,255,0.8);
        padding: 8px 15px;
        border-radius: 50px;
        backdrop-filter: blur(5px);
    }

    .back-btn:hover {
        color: var(--gnc-red);
        background: #fff;
    }

    .event-title-main {
        font-size: clamp(2rem, 4vw, 2.6rem);
        font-weight: 800;
        margin-bottom: 20px;
        line-height: 1.2;
        color: var(--text-dark);
    }

    .event-meta {
        font-size: 1.05rem;
        color: var(--text-gray);
        margin-bottom: 40px;
        padding-bottom: 20px;
        border-bottom: 2px solid rgba(0,0,0,0.05);
    }

    .event-body {
        font-size: 1.05rem;
        color: var(--text-gray);
        line-height: 1.8;
    }

    .event-gallery {
        margin-top: 60px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
    }

    .gallery-img {
        aspect-ratio: 1 / 1;
        border-radius: 0;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        background: #eee;
    }

    .gallery-img img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        background: #000;
        transition: transform 0.5s ease;
    }

    .gallery-img:hover img {
        transform: scale(1.1);
    }

    /* SIDEBAR */
    aside {
        position: sticky;
        top: 100px;
        height: fit-content;
    }

    .sidebar-card {
        background: #fff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        margin-bottom: 20px;
    }

    .sidebar-title {
        font-weight: 700;
        font-size: 1.1rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        color: var(--text-dark);
        border-left: 4px solid var(--gnc-blue);
        padding-left: 12px;
    }

    .recent-event-link {
        display: block;
        margin-bottom: 12px;
        text-decoration: none;
        color: var(--text-dark);
        font-weight: 600;
        font-size: 0.95rem;
        transition: all 0.3s;
        padding: 8px 12px;
        border-radius: 8px;
        background: #f8fafc;
    }

    .recent-event-link:hover {
        color: #fff;
        background: var(--gnc-blue);
        transform: translateX(5px);
    }

    .promo-card {
        background:var( --gnc-red);
        color: #fff;
        padding: 30px 20px;
        border-radius: 20px;
        text-align: center;
        
    }

    .promo-card h4 {
        font-weight: 800;
        font-size: 1.3rem;
        text-transform: uppercase;
        margin-bottom: 12px;
        color: #fff;
    }

    .promo-card p {
        font-size: 1.05rem;
        opacity: 0.9;
        margin-bottom: 25px;
    }

    .promo-card .btn-inquire {
        display: inline-block;
        padding: 12px 30px;
        background: #fff;
        color: var(--gnc-blue);
        text-decoration: none;
        font-weight: 700;
        border-radius: 50px;
        text-transform: uppercase;
        font-size: 0.9rem;
        transition: all 0.3s;
    }

    .promo-card .btn-inquire:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }

    @media (max-width: 1200px) {
        .article-layout {
            grid-template-columns: 1fr 240px;
            gap: 30px;
        }
    }

    @media (max-width: 991px) {
        .article-layout {
            grid-template-columns: 1fr;
            margin-top: 0;
        }
        .site-wrap {
            padding: 40px 20px;
        }
        aside {
            position: static;
        }
        .event-gallery {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .event-gallery {
            grid-template-columns: 1fr;
        }
        .event-title-main {
            font-size: 2.2rem;
        }
    }
</style>
';
$header_html = str_replace('</head>', $extra_styles . '</head>', $header_html);

echo $header_html;

// 4. BANNER BOX
$banner_img = $current_event['image'];
if (!filter_var($banner_img, FILTER_VALIDATE_URL) && strpos($banner_img, '/') !== 0) {
    $banner_img = $base_url . $banner_img;
}
?>

 <section class="pageBanner-inner" style="height: 600px !important;">
    <div
      style="background-image: url('<?php echo $base_url; ?>images/post.webp'); background-repeat: no-repeat; background-size: cover;height:600px">
      <div class="pageBanner-inner_in">
        <div class="container">
          <div class="align-items-center">
            <div class="pageBanner-inner__content inner-content head-sm text-md-start">
              <div class="upper-banner-content">
                <h3 class="mb-1 mt-3 text-center">Events & Activities</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<div class="site-wrap">
    <div class="article-layout">
        <main class="main-content">
            <a href="<?php echo $base_url; ?>events.php" class="back-btn">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back to Events
            </a>
            <h1 class="event-title-main">
                <?php echo $current_event['title']; ?>
            </h1>
            <div class="event-meta">
                <span style="display: inline-flex; align-items: center; gap: 8px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <strong>Date:</strong> <?php echo $current_event['date']; ?>
                </span>
            </div>

            <div class="event-body">
                <?php echo $current_event['fullDescription']; ?>
            </div>
            
            <h3
                style="margin-top: 80px; font-size: 1.8rem; font-weight: 900; text-transform: uppercase; color: var(--text-dark); display: flex; align-items: center; gap: 15px;">
                <span style="width: 50px; height: 4px; background: var(--gnc-blue); border-radius: 2px;"></span>
                Event Gallery
            </h3>
            <div class="event-gallery">
                <?php
if (isset($current_event['gallery']) && !empty($current_event['gallery'])) {
    foreach ($current_event['gallery'] as $img_url) {
        $g_img = $img_url;
        if (!filter_var($g_img, FILTER_VALIDATE_URL) && strpos($g_img, '/') !== 0) {
            $g_img = $base_url . $g_img;
        }
        echo "<div class='gallery-img'><img src='{$g_img}' alt='Gallery Image' loading='lazy'></div>";
    }
}
else {
    echo "<p>No gallery images available for this event.</p>";
}
?>
            </div>
        </main>

        <aside>
            <div class="sidebar-card">
                <h3 class="sidebar-title">Recent Events</h3>
                <div class="recent-events-list">
                    <?php
$count = 0;
foreach ($events as $e) {
    $has_local_image = strpos($e['image'], 'upload/gnc-events/') === 0;
    if ($e['slug'] != $slug && $has_local_image && $count < 4) {
        echo "<a href='{$base_url}event-details.php?slug={$e['slug']}' class='recent-event-link'>{$e['title']}</a>";
        $count++;
    }
}
?>
                </div>
            </div>
            <div class="promo-card">
                <h4>Admissions Open</h4>
                <p>Join Guru Nanak College for the 2026 academic session. Shape your future with excellence.</p>
                <a href="https://application.gnc.edu.in/" class="btn-inquire">Apply Now</a>
            </div>
        </aside>
    </div>
</div>

<?php
// 5. CAPTURE AND FIX FOOTER
ob_start();
require "common/footer.php";
$footer_html = ob_get_clean();

// Resolve paths in footer (specifically logo and scripts)
$footer_html = str_replace(
['src="./images/', 'src="images/', 'src="js/', 'href="contact.php"'],
[
    'src="' . $base_url . 'images/',
    'src="' . $base_url . 'images/',
    'src="' . $base_url . 'js/',
    'href="' . $base_url . 'contact.php"'
],
    $footer_html
);

// Fix navigation links in footer as well
$footer_html = preg_replace('/href="(?!(http|https|#|\/))([^"]+\.php)"/i', 'href="' . $base_url . '$2"', $footer_html);

echo $footer_html;
?>