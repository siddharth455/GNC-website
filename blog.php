<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Professional Blog Page</title>
    <style>
        /* Banner Section */
        .banner {
            background-image: url('images/blog.webp');
            background-size: cover;
            background-position: center;
            height: 550px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            color: #fff;
        }

        .banner::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }



        /* Featured Blog Card */
        .featured-blog {
            background-color: #fff;
            border-radius: 15px;
            position: relative;
            display: flex;
            height: auto;
            margin: 0;
            flex-direction: column;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .featured-blog img {
            width: 600px;
            height: 250px;
            object-fit: cover;
        }

        .featured-blog-content {
            padding: 20px;
            align-items: center;
            align-self: center;
            align-content: center;
        }

        .featured-blog h3 {
            font-size: 1.35rem;
            color: #343a40;
        }

        .featured-blog p {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .btn-read-more {
            display: inline-block;
            padding: 10px 20px;
            font-size: 0.9rem;
            font-weight: bold;
            color: #fff;
            background-color: #0066cc;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-read-more:hover {
            background-color: #004c99;
            transform: translateY(-2px);
        }

        /* Blog Cards */
        .blog-card {
            background-color: #fff;
            border: none;
            width: 400px;
            display: flex;
            flex-direction: column;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-card .card-body {
            padding: 20px;
        }

        .blog-card h5 {
            font-size: 1.25rem;
            color: #343a40;
        }

        .blog-card p {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .blog-card .meta {
            font-size: 0.85rem;
            color: #6c757d;
            margin-bottom: 10px;
        }

        /* Blog Container with Grid Layout */
        .blog-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            /* 2fr for featured blog, 1fr for smaller blog cards */
            gap: 30px;
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 15px;
        }

        .blog-main-content {
            display: flex;
            flex-direction: row;
            border-radius: 15px;
            /* Rounded corners */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            /* Light shadow for separation */
            margin-bottom: 30px;
            /* Space between blogs */
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Apply transition to both properties */
        }

        .blog-main-content:hover {
            transform: translateY(-10px);
            /* Move the blog up on hover */
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
            /* Increase shadow on hover */
        }

        /* Smaller Blog Cards */
        .smaller-blog-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            height: auto;
        }

        /* code for custome blog part */
        /* Blog container styling */
        .unique-blog-container {
            display: flex;
            flex-wrap: wrap;
            /* Wrap to the next row if not enough space */
            gap: 20px;
            /* Space between cards */
            justify-content: flex-start;
            /* Align items to the left */
            padding: 10px;
            /* Optional padding around the container */

        }

        /* Blog card styling */
        .unique-blog-card {
            display: flex;
            flex-direction: column;
            /* Stack content vertically inside the card */
            width: 280px;
            /* Fixed width for each card */
            border: 1px solid #ddd;
            /* Light border around the card */
            border-radius: 8px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add subtle shadow */
            background-color: #fff;
            /* White background */
            overflow: hidden;
            /* Ensure content stays inside the card */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* Apply transition to both properties */
        }

        .unique-blog-card:hover {
            transform: translateY(-10px);
            /* Move the blog up on hover */
            box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
            /* Increase shadow on hover */
        }

        /* Image styling */
        .unique-blog-image {
            width: 100%;
            /* Full width of the card */
            height: auto;
            /* Fixed height for images */
            object-fit: cover;
            /* Cover the area without distortion */
        }

        /* Content area styling */
        .unique-blog-content {
            padding: 15px;
            display: flex;
            flex-direction: column;
            /* Stack content vertically */
            gap: 10px;
            /* Space between elements */

        }

        .unique-blog-card h6 {
            font-size: 1.15rem;
            color: #343a40;
        }

        /* Title styling */
        .unique-blog-title {
            font-size: 1.2em;
            font-weight: bold;
            margin: 0;
            color: #333;
        }

        /* Meta information styling */
        .unique-blog-meta {
            font-size: 0.9em;
            color: #777;
            /* Subtle grey */
        }

        /* Excerpt styling */
        .unique-blog-excerpt {
            flex-grow: 1;
            /* Allow this to take up remaining space */
            font-size: 0.95em;
            color: #555;
        }

        /* Read more button styling */
        .unique-blog-read-more {
            align-self: flex-start;
            /* Align button to the left */
            padding: 10px 15px;
            background-color: #007bff;
            /* Primary blue */
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .unique-blog-read-more:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
        }




        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .blog-container {
                grid-template-columns: 1fr;
                /* Stack both sections in one column for mobile devices */
            }

            .blog-main-content {
                display: flex;
                flex-direction: column;
                border-radius: 15px;
                /* Rounded corners */
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
                /* Light shadow for separation */
                margin-bottom: 30px;
                /* Space between blogs */
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                /* Apply transition to both properties */
            }

            .banner {
                background-image: url('images/blog.webp');
                background-size: cover;
                background-position: center;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                color: #fff;
                height: 200px;
            }

            .unique-blog-card {
                width: 100%;
            }

            .blog-card {
                width: auto;
                height: auto;
            }

            .blog-main-content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <?php require "common/header.php"; ?>

    <!-- Banner Section -->
    <div class="banner">

    </div>

    <!-- Blog Section -->
    <section>
    <div class="blog-container">
        <!-- Featured Blog -->
        <div class="featured-blog">
            <?php
            // Fetch blog posts from the JSON file
            $json = file_get_contents('blog.json');
            $posts = json_decode($json, true);
            $posts = array_reverse($posts); // Reverse the posts to show the most recent first

            // Display the Featured Blog (first post)
            if (!empty($posts[0])) {
                $featured = $posts[0];
                $slug = strtolower(trim($featured['title']));
                $slug = preg_replace('/[^a-z0-9]+/', '-', $slug); // Replace spaces & special chars with hyphens
                $slug = trim($slug, '-'); // Generate slug

                echo '
                <div class="blog-main-content">
                    <div class="featured-blog-image">
                        <img src="' . htmlspecialchars($featured['image']) . '" alt="' . htmlspecialchars($featured['title']) . '" class="img-fluid">
                    </div>
                    <div class="featured-blog-content">
                        <h3>' . htmlspecialchars($featured['title']) . '</h3>
                        <p>' . strip_tags(substr($featured['content'], 0, 200)) . '...</p>
                        <a href="post.php?id=0&title=' . urlencode($slug) . '" class="btn-read-more">Read More</a>
                    </div>
                </div>';
            }

            // Loop through the next 4 blog posts and display them
            $blogCount = 4;
            for ($i = 1; $i <= $blogCount; $i++) {
                if (!empty($posts[$i])) {
                    $blog = $posts[$i];
                    $slug = strtolower(trim($blog['title']));
                    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
                    $slug = trim($slug, '-');

                    echo '
                    <div class="blog-main-content">
                        <div class="featured-blog-image">
                            <img src="' . htmlspecialchars($blog['image']) . '" alt="' . htmlspecialchars($blog['title']) . '" class="img-fluid">
                        </div>
                        <div class="featured-blog-content">
                            <h3>' . htmlspecialchars($blog['title']) . '</h3>
                            <p>' . strip_tags(substr($blog['content'], 0, 200)) . '...</p>
                            <a href="post.php?id=' . $i . '&title=' . urlencode($slug) . '" class="btn-read-more">Read More</a>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>

        <!-- Smaller Blog Cards (Right side) -->
        <div class="smaller-blog-container">
            <?php
            // Loop through posts from index 5 to 9
            for ($i = 5; $i < min(8, count($posts)); $i++) {
                $title = strtolower(trim($posts[$i]['title']));
                $slug = preg_replace('/[^a-z0-9]+/', '-', $title);
                $slug = trim($slug, '-');

                echo '
                <div class="blog-card">
                    <img src="' . htmlspecialchars($posts[$i]['image']) . '" alt="' . htmlspecialchars($posts[$i]['title']) . '" class="img-fluid">
                    <div class="card-body">
                        <h5>' . htmlspecialchars($posts[$i]['title']) . '</h5>
                        <p class="meta">By ' . htmlspecialchars($posts[$i]['author']) . ' on ' . htmlspecialchars($posts[$i]['date']) . '</p>
                        <p>' . strip_tags(substr($posts[$i]['content'], 0, 100)) . '...</p>
                        <a href="post.php?id=' . $i . '&title=' . urlencode($slug) . '" class="btn-read-more">Read More</a>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section>
    <div class="unique-blog-container blog-container">
        <?php
        // Ensure $posts is an array and contains data
        if (!empty($posts) && is_array($posts)) {
            // Loop through posts starting from index 9
            for ($i = 8; $i < count($posts); $i++) {
                $slug = strtolower(trim($posts[$i]['title']));
                $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
                $slug = trim($slug, '-');

                echo '
                <div class="unique-blog-card">
                    <img src="' . htmlspecialchars($posts[$i]['image']) . '" alt="' . htmlspecialchars($posts[$i]['title']) . '" class="unique-blog-image">
                    <div class="unique-blog-content">
                        <h6 class="unique-blog-title">' . htmlspecialchars($posts[$i]['title']) . '</h6>
                        <p class="unique-blog-meta">By ' . htmlspecialchars($posts[$i]['author']) . ' on ' . htmlspecialchars($posts[$i]['date']) . '</p>
                        <p class="unique-blog-excerpt">' . strip_tags(substr($posts[$i]['content'], 0, 100)) . '...</p>
                        <a href="post.php?id=' . $i . '&title=' . urlencode($slug) . '" class="unique-blog-read-more">Read More</a>
                    </div>
                </div>';
            }
        } else {
            echo '<p>No blog posts available.</p>';
        }
        ?>
    </div>
</section>





    <!-- Footer -->
    <?php require "common/footer.php"; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>