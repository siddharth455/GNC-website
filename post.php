<?php
session_start();
// --- START: PATH FIX FOR CLEAN URLs ---
// 1. Define the protocol (http or https)
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";

// If the site is on the live domain (gnc.edu.in), the base path is '/'.
// If it's on localhost, use the folder name ('/gncupdate/').
if ($_SERVER['HTTP_HOST'] === 'gnc.edu.in' || $_SERVER['HTTP_HOST'] === 'www.gnc.edu.in') {
    $project_folder = "/";
} else {
    // This assumes your local project name is 'gncupdate'
    $project_folder = "/gncupdate/"; 
}

// 3. Construct the absolute base URL
$base_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $project_folder;
// --- END: PATH FIX FOR CLEAN URLs ---

// FIX THE BLOG JSON PATH
$blogPath = __DIR__ . '/blog.json';

if (!file_exists($blogPath)) {
    $blogPath = $_SERVER['DOCUMENT_ROOT'] . '/blog.json';
}

$json = file_get_contents($blogPath);
$all_posts = json_decode($json, true);


// Create the reversed array (newest first), which is used for display and 'id' lookup
$posts_reversed = array_reverse($all_posts);

$post = null;
$lookup_key = null; 

// 1. **PRIMARY CHECK:** Check for the clean URL slug or GET parameter
$slug = isset($_GET['slug']) ? $_GET['slug'] : null;

if ($slug) {
    // Look up the post by slug in the reversed array
    foreach ($posts_reversed as $key => $p) {
        if (isset($p['slug']) && $p['slug'] === $slug) {
            $post = $p;
            $lookup_key = $key;
            break;
        }
    }
} 
// 2. **FALLBACK CHECK:** Check for the old 'id' (post.php?id=0)
else {
    $id = isset($_GET['id']) ? (int)$_GET['id'] : null;
    if ($id !== null && isset($posts_reversed[$id])) {
        $post = $posts_reversed[$id];
        $lookup_key = $id; 
    }
}

$showTOC = isset($post['show_toc']) && $post['show_toc'];

// The shareable link should use the slug if available (Using the clean format for sharing)
if ($post && isset($post['slug'])) {
    $shareableLink = $base_url . "post/" . $post['slug']; 
} else {
    $shareableLink = $base_url . "post.php?id=" . $lookup_key;
}
?>
<!DOCTYPE html>
<html>
<head>
    <base href="<?= $base_url ?>">
    <link rel="icon" type="image/webp" href="images/logog.webp"> 
    <title><?= $post ? htmlspecialchars($post['title']) : 'Post Not Found' ?> - Guru Nanak College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style> 
        /* --- CSS STYLES --- */
        
        /* FIX: Ensures anchor targets land below a fixed header */
        /* ADJUST THIS VALUE (e.g., 100px, 120px) to be slightly larger than your fixed header's height */
        h2[id], h3[id] {
            scroll-margin-top: 180px; 
        }
        
        .post-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .pageBanner-inner {
            margin-bottom: 30px;
        }
        
        .blog-content {
            background: #F1F1E9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .post-image {
            width: 100%;
            max-height: 100%;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        
        .post-meta {
            color: #6c757d;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        
        .post-body {
            font-size: 1.05rem;
            line-height: 1.7;
        }
        
        .post-body p {
            margin-bottom: 1rem;
        }
        
        .post-body img {
            max-width: 100%;
            height: auto;
            border-radius: 6px;
            margin: 15px 0;
        }
        
        #toc {
            background: #f1f8ff;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            border-left: 4px solid #0066cc;
        }
        
        .suggested-posts {
            background: #F1F1E9;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .suggested-posts h4 {
            font-weight: 600;
            margin-bottom: 20px;
            font-size: 1.25rem;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            color: #333;
        }
        
        .suggested-post {
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 15px;
            margin-bottom: 15px;
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
            border: 1px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .suggested-post:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-color: #0066cc;
        }
        
        #toc h4 {
            font-size: 1.1rem;
            color: #0052a5;
            margin-bottom: 8px;
        }

        .toc-link {
            text-decoration: none;
            color: #333;
            font-size: 0.95rem;
            display: block;
            padding: 4px 0;
        }

        .toc-link:hover {
            color: #0066cc;
        }

        .suggested-post:last-child {
            margin-bottom: 0;
        }
        
        .suggested-post-img {
            width: 100%;
            height: 300px;
            object-fit: fill;
            border-radius: 4px;
        }
        
        .suggested-post-content h5 {
            font-size: 1rem;
            margin-bottom: 5px;
            line-height: 1.4;
        }
        
        .suggested-post-content h5 a {
            color: #333;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .suggested-post-content h5 a:hover {
            color: #0066cc;
        }
        
        .suggested-post-date {
            font-size: 0.85rem;
            color: #6c757d;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .post-navigation {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
        }
        
        @media (max-width: 768px) {
            .suggested-post {
                flex-direction: column;
            }
            
            .suggested-post-img {
                width: 100%;
                height: 300px;
            }
        }
    </style>
</head>
<body>
<?php 
require "common/header.php"; 
?>

<section class="pageBanner-inner">
    <div style="background-image: url('images/post.webp'); background-repeat: no-repeat; background-size: cover;">
        <div class="pageBanner-inner_in">
            <div class="container">
                <div class="align-items-center">
                    <div class="pageBanner-inner__content inner-content head-sm text-md-start">
                        <div class="upper-banner-content">
                            <h3 class="mb-1 mt-3 text-center"><?php echo $post ? htmlspecialchars($post['title']) : 'Post Not Found'; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="post-container">
    <div class="row">
        <div class="col-lg-8">
            <?php if ($post): ?>
                <div class="blog-content">
                    <?php if (isset($post['image'])): ?>
                        <img src="<?= htmlspecialchars($post['image']) ?>" class="post-image" alt="<?= htmlspecialchars($post['title']) ?>">
                    <?php endif; ?>
                    
                    <div class="post-meta">
                        <span><i class="fas fa-user"></i> <?= htmlspecialchars($post['author']) ?></span>
                        <span><i class="fas fa-calendar-alt"></i> <?= htmlspecialchars($post['date']) ?></span>
                    </div>
                    
                    <?php if ($showTOC): ?>
                        <div id="toc"></div>
                    <?php endif; ?>
                    
                    <div class="post-body" id="post-content">
                        <?= htmlspecialchars_decode($post['content']) ?>
                    </div>
                    
                    <div class="post-navigation">
                        <?php 
                        // Previous Post: uses the next index in the reversed array
                        $prev_key = $lookup_key + 1;
                        if ($prev_key < count($posts_reversed) && isset($posts_reversed[$prev_key])): 
                            $prev_post = $posts_reversed[$prev_key];
                            // Navigation link uses $base_url
                            $prev_url = isset($prev_post['slug']) ? $base_url . 'post/' . htmlspecialchars($prev_post['slug']) : 'post.php?id=' . $prev_key;
                        ?>
                            <a href="<?= $prev_url ?>" class="btn btn-primary">
                                <i class="fas fa-arrow-left"></i> Previous Post
                            </a>
                        <?php else: ?>
                            <div></div>
                        <?php endif; ?>
                        
                        <?php 
                        // Next Post: uses the previous index in the reversed array
                        $next_key = $lookup_key - 1;
                        if ($next_key >= 0 && isset($posts_reversed[$next_key])): 
                            $next_post = $posts_reversed[$next_key];
                            // Navigation link uses $base_url
                            $next_url = isset($next_post['slug']) ? $base_url . 'post/' . htmlspecialchars($next_post['slug']) : 'post.php?id=' . $next_key;
                        ?>
                            <a href="<?= $next_url ?>" class="btn btn-primary">
                                Next Post <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="text-center mt-3">
                        <a href="blog.php" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Back to All Posts
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-danger">Post not found.</div>
            <?php endif; ?>
        </div>
        
        <div class="col-lg-4">
            <div class="suggested-posts">
                <h4>You May Also Like</h4>
                
                <?php
                $counter = 0;
                // Loop through the reversed list ($posts_reversed)
                foreach ($posts_reversed as $key => $suggestedPost) {
                    // Check if the current post is NOT the one being displayed
                    if ($key != $lookup_key && $counter < 5) {
                        
                        // Navigation link uses $base_url
                        $suggested_url = isset($suggestedPost['slug']) 
                            ? $base_url . 'post/' . htmlspecialchars($suggestedPost['slug']) 
                            : 'post.php?id=' . $key;

                        echo '<div class="suggested-post">';
                        if (isset($suggestedPost['image'])) {
                            // Image path still needs $base_url if 'image' is an absolute path or relative to root
                            echo '<img src="' . htmlspecialchars($suggestedPost['image']) . '" class="suggested-post-img" alt="' . htmlspecialchars($suggestedPost['title']) . '">';
                        }
                        echo '<div class="suggested-post-content">';
                        // Navigation link uses $base_url
                        echo '<h5><a href="' . $suggested_url . '">' . htmlspecialchars($suggestedPost['title']) . '</a></h5>';
                        echo '<div class="suggested-post-date"><i class="far fa-calendar-alt"></i> ' . htmlspecialchars($suggestedPost['date']) . '</div>';
                        echo '</div></div>';
                        $counter++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php if ($showTOC): ?>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const content = document.getElementById('post-content');
    const toc = document.getElementById('toc');
    const headings = content.querySelectorAll('h2, h3');

    if (headings.length && toc) {
        const tocTitle = document.createElement('h4');
        tocTitle.textContent = 'Table of Contents';
        tocTitle.style.marginBottom = '10px';
        toc.appendChild(tocTitle);

        const tocContainer = document.createElement('div');
        tocContainer.className = 'toc-container';

        headings.forEach((heading, i) => {
            if (!heading.id) heading.id = 'heading-' + i;

            const tocItem = document.createElement('div');
            tocItem.className = 'toc-item';

            const tocLink = document.createElement('a');
            tocLink.href = ''; 
            tocLink.textContent = heading.textContent;
            tocLink.className = 'toc-link';
            
            tocLink.addEventListener('click', function(e) {
                e.preventDefault(); 
                
                document.getElementById(heading.id).scrollIntoView({
                    behavior: 'smooth'
                });
                
                // *** REMOVED LINE: history.pushState(null, null, '#' + heading.id); ***
                // The URL will no longer change when a TOC link is clicked.
            });

            tocItem.appendChild(tocLink);
            tocContainer.appendChild(tocItem);
        });

        toc.appendChild(tocContainer);
    }
});
</script>

<?php endif; ?>

<?php 
require "common/footer.php"; 
?>
</body>
</html>