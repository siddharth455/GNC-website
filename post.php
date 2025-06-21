<?php
session_start();
$json = file_get_contents('blog.json');
$posts = array_reverse(json_decode($json, true));

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$post = isset($posts[$id]) ? $posts[$id] : null;
$showTOC = isset($post['show_toc']) && $post['show_toc'];
$shareableLink = "http://gnc.edu.in/post.php?id=" . $id;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/webp" href="images/logog.webp">
    <title>Blog - Guru Nanak College Dehradun</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .blog-post,
        .comment-form,
        .suggested-posts {
            padding: 15px;
            background-color: #fff;
            border-radius: 5px;
            border: 1px solid #000;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .blog-post h2, h3 {
            margin-top: 0;
            font-weight: bolder;
        }
        .meta { color: #777; font-size: 0.9em; }
        .blog-post img, .suggested-posts img {
            max-width: 100%; height: auto; border-radius: 5px;
        }
        .navigation-buttons {
            display: flex; justify-content: space-between; margin-top: 20px;
        }
        #toc {
            background: #f9f9f9;
            padding: 15px;
            margin-bottom: 20px;
            border-left: 4px solid #007bff;
            border-radius: 5px;
        }
        #toc h4 { margin-top: 0; font-weight: bold; }
        #toc ul { list-style: none; padding-left: 0; }
        #toc li a {
            text-decoration: none;
            color: #007bff;
            display: block;
            margin-bottom: 5px;
        }
        #toc li a:hover { text-decoration: underline; }

        [id^="heading-"]::before {
            content: "";
            display: block;
            height: 100px;
            margin-top: -100px;
            visibility: hidden;
        }
    </style>
</head>
<body>
<?php require "common/header.php"; ?>

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

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <?php if ($post): ?>
                <div class="blog-post">
                    <?php if (isset($post['image'])): ?>
                        <img src="<?= htmlspecialchars($post['image']); ?>" alt="<?= htmlspecialchars($post['title']); ?>">
                    <?php endif; ?>

                    <h2><?= htmlspecialchars($post['title']); ?></h2>
                    <p class="meta">By <?= htmlspecialchars($post['author']); ?> on <?= htmlspecialchars($post['date']); ?></p>

                    <?php if ($showTOC): ?><div id="toc"></div><?php endif; ?>

                    <div class="post-content" id="post-content">
                        <?= htmlspecialchars_decode($post['content']); ?>
                    </div>
                </div>
            <?php else: ?>
                <p>Post not found.</p>
            <?php endif; ?>

            <div class="navigation-buttons">
                <?php if ($id > 0): ?>
                    <a href="post.php?id=<?= $id - 1; ?>" class="btn btn-primary">Previous Post</a>
                <?php endif; ?>
                <?php if ($id < count($posts) - 1): ?>
                    <a href="post.php?id=<?= $id + 1; ?>" class="btn btn-primary ms-auto">Next Post</a>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-center mt-2 mb-2">
                <a href="blog.php" class="btn btn-secondary">Back to Blog</a>
            </div>
        </div>

        <div class="col-lg-4 col-sm-12 mt-4 mt-md-0">
            <div class="suggested-posts">
                <h3>Suggested Posts</h3>
                <hr>
                <ul class="list-unstyled">
                    <?php
                    $counter = 0;
                    foreach ($posts as $key => $suggestedPost) {
                        if ($key != $id) {
                            echo '<li>';
                            if (isset($suggestedPost['image'])) {
                                echo '<img src="' . htmlspecialchars($suggestedPost['image']) . '" alt="' . htmlspecialchars($suggestedPost['title']) . '">';
                            }
                            echo '<h4><a href="post.php?id=' . $key . '">' . htmlspecialchars($suggestedPost['title']) . '</a></h4>';
                            echo '<p class="meta">By ' . htmlspecialchars($suggestedPost['author']) . ' on ' . htmlspecialchars($suggestedPost['date']) . '</p>';
                            echo '</li><hr>';
                            if (++$counter >= 5) break;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php if ($showTOC): ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const content = document.getElementById('post-content');
    const toc = document.getElementById('toc');
    const headings = content.querySelectorAll('h1, h2, h3');

    if (headings.length && toc.children.length === 0) {
        const ul = document.createElement('ul');
        toc.innerHTML = '<h4>Table of Contents</h4>';

        headings.forEach((heading, i) => {
            if (!heading.id) heading.id = 'heading-' + i;
            const li = document.createElement('li');
            li.style.marginLeft = `${(parseInt(heading.tagName[1]) - 1) * 20}px`;
            const a = document.createElement('a');
            a.href = `#${heading.id}`;
            a.textContent = heading.textContent;
            a.addEventListener('click', function (e) {
                e.preventDefault();
                const y = document.getElementById(heading.id).getBoundingClientRect().top + window.pageYOffset - 100;
                window.scrollTo({ top: y, behavior: 'smooth' });
            });
            li.appendChild(a);
            ul.appendChild(li);
        });
        toc.appendChild(ul);
    }
});
</script>
<?php endif; ?>

<?php require "common/footer.php"; ?>
</body>
</html>
