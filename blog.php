<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Professional Blog Page</title>
    <style>
        :root {
            --primary: #0066cc;
            --primary-dark: #004c99;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --border-radius: 12px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
            --page-bg: #f5f7fa;
            --card-bg: #ffffff;
        }
        /* Main Content Wrapper */
        .content-wrapper {
            flex: 1;
            padding-bottom: 60px;
            background: #F1F1E9;;
        }

        /* Main Blog Container */
        .main-blog-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Featured Posts Section */
        .featured-posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .featured-post {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .featured-post:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .featured-post-img-container {
            overflow: hidden;
            height: 220px;
        }

        .featured-post-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .featured-post:hover .featured-post-img {
            transform: scale(1.05);
        }

        .featured-post-content {
            padding: 25px;
        }

        .featured-post h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark);
            transition: var(--transition);
        }

        .featured-post:hover h3 {
            color: var(--primary);
        }

        .featured-post p {
            color: var(--gray);
            margin-bottom: 20px;
        }

        .post-meta {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            color: var(--gray);
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px solid var(--light-gray);
        }

        .post-meta span {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        .post-meta i {
            margin-right: 5px;
            color: var(--primary);
        }

        /* Blog Grid Section */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .blog-card {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .blog-card-img-container {
            overflow: hidden;
            height: 180px;
        }

        .blog-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .blog-card:hover .blog-card-img {
            transform: scale(1.05);
        }

        .blog-card-content {
            padding: 20px;
        }

        .blog-card h5 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
            transition: var(--transition);
        }

        .blog-card:hover h5 {
            color: var(--primary);
        }

        .blog-card p {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 15px;
        }

        /* Read More Button */
        .btn-read-more {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            margin: 15px 0px;
            background-color: var(--primary);
            color: white;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-read-more:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 102, 204, 0.2);
        }

        .btn-read-more i {
            margin-left: 5px;
            transition: var(--transition);
        }

        .btn-read-more:hover i {
            transform: translateX(3px);
        }

        /* Section Title */
        .section-title {
            position: relative;
            margin-bottom: 40px;
            text-align: center;
        }

        .section-title h2 {
            font-weight: 700;
            color: var(--dark);
            display: inline-block;
            margin-bottom: 0;
            padding-bottom: 15px;
            position: relative;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--primary);
            border-radius: 3px;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .banner h1 {
                font-size: 2.4rem;
            }
            
            .banner p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .banner {
                height: 300px;
            }
            
            .banner h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .banner h1 {
                font-size: 1.8rem;
            }
            
            .featured-posts, .blog-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <?php require "common/header.php"; ?>

    <div class="content-wrapper">
        <!-- Banner Section -->
        <section class="heroBanner">
        <div id="myCarousel" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/blog.webp" class="d-block w-100 img-fluid" alt="Slide 1" loading="lazy">
                </div> 
            </div>
        </div>
    </section>
        <!-- Main Blog Container -->
        <div class="main-blog-container">
            <!-- Featured Posts Section -->
            <section>
                <div class="section-title">
                    <h2>Featured Posts</h2>
                </div>
                
                <div class="featured-posts">
                    <?php
                    // Fetch blog posts from the JSON file
                    $json = file_get_contents('blog.json');
                    $posts = json_decode($json, true);
                    $posts = array_reverse($posts); // Reverse the posts to show the most recent first

                    // Display the first 3 posts as featured
                    for ($i = 0; $i < min(3, count($posts)); $i++) {
                        $post = $posts[$i];
                        $slug = strtolower(trim($post['title']));
                        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
                        $slug = trim($slug, '-');

                        echo '
                        <div class="featured-post animate__animated animate__fadeInUp">
                            <div class="featured-post-img-container">
                                <img src="' . htmlspecialchars($post['image']) . '" alt="' . htmlspecialchars($post['title']) . '" class="featured-post-img">
                            </div>
                            <div class="featured-post-content">
                                <h3>' . htmlspecialchars($post['title']) . '</h3>
                                <p>' . strip_tags(substr($post['content'], 0, 150)) . '...</p>
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> ' . htmlspecialchars($post['author']) . '</span>
                                    <span><i class="far fa-calendar"></i> ' . htmlspecialchars($post['date']) . '</span>
                                </div>
                                <a href="post.php?id=' . $i . '&title=' . urlencode($slug) . '" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </section>

            <!-- All Blog Posts Section -->
            <section>
                <div class="section-title">
                    <h2>Latest Articles</h2>
                </div>
                
                <div class="blog-grid">
                    <?php
                    // Display remaining posts in the grid
                    for ($i = 3; $i < count($posts); $i++) {
                        $post = $posts[$i];
                        $slug = strtolower(trim($post['title']));
                        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
                        $slug = trim($slug, '-');

                        echo '
                        <div class="blog-card animate__animated animate__fadeIn">
                            <div class="blog-card-img-container">
                                <img src="' . htmlspecialchars($post['image']) . '" alt="' . htmlspecialchars($post['title']) . '" class="blog-card-img">
                            </div>
                            <div class="blog-card-content">
                                <h5>' . htmlspecialchars($post['title']) . '</h5>
                                <p>' . strip_tags(substr($post['content'], 0, 100)) . '...</p>
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> ' . htmlspecialchars($post['author']) . '</span>
                                </div>
                                <a href="post.php?id=' . $i . '&title=' . urlencode($slug) . '" class="btn-read-more">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </section>
        </div>
    </div>

    <?php require "common/footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add animation delays to blog cards
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.animate__fadeIn');
            cards.forEach((card, index) => {
                card.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>
</html>