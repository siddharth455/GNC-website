<?php
// Load and decode the JSON file
$json = file_get_contents('blog.json');
$posts = json_decode($json, true);

// Reverse the array to display the newest post first
$posts = array_reverse($posts);

// Get the post ID from the URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Ensure the post exists after reversing
$post = isset($posts[$id]) ? $posts[$id] : null;

// Define the shareable link
$shareableLink = "http://gnc.edu.in/post.php?id=" . $id;
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Blog - Guru Nanak College Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image:type" content="image/webp" />
    <style>
        .blog-post,
        .comment-form,
        .suggested-posts {
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: #000 1px solid;
        }

        .blog-post h2,
        h3 {
            margin-top: 0;
            font-weight: bolder;
        }

        .blog-post .meta {
            color: #777;
            font-size: 0.9em;
        }

        .blog-post img,
        .suggested-posts img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .social-buttons {
            margin-top: 20px;
        }

        .social-buttons .btn {
            margin-right: 10px;
        }

        .comment-list {
            margin-top: 20px;
        }

        .comment-list .comment h5 {
            margin-top: 0;
            font-weight: bold;
        }

        .comment-list .comment p {
            margin-bottom: 0;
        }

        .navigation-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        p {
            color: #000 !important;
        }
    </style>
</head>

<body>
    <?php require "common/header.php"; ?>
    <section class="pageBanner-inner">
        <div style="background-image: url('images/post.webp'); background-repeat: no-repeat; background-size: cover;">
            <div class="pageBanner-inner_in">
                <div class="container">
                    <div class=" align-items-center">
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

    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Main Post -->
            <div class="col-lg-8 col-sm-12">
                <!-- Alert Message -->
                <?php if (isset($_SESSION['message'])): ?>
                    <div class="alert alert-<?php echo $_SESSION['message_type']; ?> mt-4">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        unset($_SESSION['message_type']);
                        ?>
                    </div>
                <?php endif; ?>

                <?php
                // Display the selected post
                if ($post) {
                    echo '<div class="blog-post">';
                    if (isset($post['image'])) {
                        echo '<img src="' . htmlspecialchars($post['image']) . '" alt="' . htmlspecialchars($post['title']) . '">';
                    }
                    echo '<h2>' . htmlspecialchars($post['title']) . '</h2>';
                    echo '<p class="meta">By ' . htmlspecialchars($post['author']) . ' on ' . htmlspecialchars($post['date']) . '</p>';
                    
                    // ✅ FIX: Properly decode content so HTML renders correctly
                    echo '<div class="post-content">' . htmlspecialchars_decode($post['content']) . '</div>';
                    
                    echo '</div>';
                } else {
                    echo '<p>Post not found.</p>';
                }
                ?>

                <!-- Navigation Buttons -->
                <div class="navigation-buttons">
                    <?php if ($id > 0): ?>
                        <a href="post.php?id=<?php echo $id - 1; ?>" class="btn btn-primary">Previous Post</a>
                    <?php endif; ?>
                    <?php if ($id < count($posts) - 1): ?>
                        <a href="post.php?id=<?php echo $id + 1; ?>" class="btn btn-primary ms-auto">Next Post</a>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-center mt-2 mb-2">
                    <a href="blog.php" class="btn btn-secondary">Back to Blog</a>
                </div>

            </div>
            <!-- Suggested Posts -->
            <div class="col-lg-4 col-sm-12 mt-4 mt-md-0">
                <div class="suggested-posts">
                    <h3>Suggested Posts</h3>
                    <hr>
                    <ul class="list-unstyled">
                        <?php
                        // Display suggested posts (excluding the current post)
                        $counter = 0;
                        foreach ($posts as $key => $suggestedPost) {
                            if ($key != $id) {
                                echo '<li>';
                                if (isset($suggestedPost['image'])) {
                                    echo '<img src="' . htmlspecialchars($suggestedPost['image']) . '" alt="' . htmlspecialchars($suggestedPost['title']) . '">';
                                }
                                echo '<h4><a href="post.php?id=' . $key . '">' . htmlspecialchars($suggestedPost['title']) . '</a></h4>';
                                echo '<p class="meta">By ' . htmlspecialchars($suggestedPost['author']) . ' on ' . htmlspecialchars($suggestedPost['date']) . '</p>';
                                echo '</li>';
                                echo '<hr>';
                                $counter++;
                                if ($counter >= 5) {
                                    break; // Stop after displaying 5 posts
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require "common/footer.php"; ?>
</body>

</html>
 