<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('SESSION_TIMEOUT', 1800);
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
$_SESSION['last_activity'] = time();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

$jsonFile = '../blog.json';
$posts = json_decode(file_get_contents($jsonFile), true);

if (!isset($_GET['id']) || !isset($posts[$_GET['id']])) {
    die('Post not found.');
}

$post_id = $_GET['id'];
$post = $posts[$post_id];
$imagePath = $post['image'];

// --- SLUG GENERATION FUNCTIONS (Copied from add_blog.php) ---
function slugify($text, array $posts = [], $current_post_id = null)
{
    // Replace non-alphanumeric characters (except spaces and hyphens) with nothing
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate non-Latin characters to Latin
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove characters that are not a-z, 0-9, or hyphen
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim hyphens from start/end
    $text = trim($text, '-');
    // Convert to lowercase
    $text = strtolower($text);
    
    if (empty($text)) {
        return 'n-a';
    }

    $originalSlug = $text;
    $counter = 1;

    // Check for slug uniqueness, excluding the current post
    while (isSlugExists($text, $posts, $current_post_id)) {
        $text = $originalSlug . '-' . $counter;
        $counter++;
    }

    return $text;
}

// Function to check if the generated slug already exists
function isSlugExists($slug, array $posts, $current_post_id = null)
{
    foreach ($posts as $id => $post) {
        // Skip the current post being edited
        if ($id == $current_post_id) {
            continue;
        }
        if (isset($post['slug']) && $post['slug'] === $slug) {
            return true;
        }
    }
    return false;
}
// -------------------------------------------------------------

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatedDate = !empty($_POST['manual_date']) ? $_POST['manual_date'] : $post['date'];
    $newTitle = trim($_POST['title']);
    $currentSlug = isset($post['slug']) ? $post['slug'] : '';
    
    // --- SLUG UPDATE LOGIC ---
    if ($newTitle !== $post['title']) {
        // Title has changed: Regenerate the slug
        $updatedSlug = slugify($newTitle, $posts, $post_id);
    } elseif (!empty($currentSlug)) {
        // Title hasn't changed, and slug already exists: Keep the current slug
        $updatedSlug = $currentSlug;
    } else {
        // Title hasn't changed, but slug is missing (legacy post): Generate a slug
        $updatedSlug = slugify($newTitle, $posts, $post_id);
    }
    // -------------------------

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];

        if (in_array($imageFileType, $allowed)) {
            $target_file = $target_dir . uniqid() . '.' . $imageFileType;
            $check = getimagesize($_FILES["image"]["tmp_name"]);

            if ($check !== false) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $imagePath = './admin/' . $target_file;
                }
            }
        }
    }
    
    // Preserve existing fields that are not part of the form, but ensure the new slug is saved
    $posts[$post_id] = array_merge($post, [
        'title'    => htmlspecialchars($newTitle),
        'slug'     => $updatedSlug, // <-- UPDATED SLUG FIELD
        'author'   => htmlspecialchars($_POST['author']),
        'date'     => $updatedDate,
        'content'  => $_POST['content'],
        'image'    => $imagePath,
        'show_toc' => isset($_POST['show_toc']) ? true : false
    ]);

    file_put_contents($jsonFile, json_encode($posts, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
    <link rel="icon" type="image/webp" href="../images/logog.webp">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#content',
            height: 400,
            plugins: 'table lists link image code preview',
            toolbar: 'undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | link image | code preview',
            content_style: "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }"
        });
    </script>
</head>

<body>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-5">
        <h1>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</h1>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <h1 class="mt-5">Edit Post</h1>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="<?= htmlspecialchars($post['title']); ?>" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" value="<?= htmlspecialchars($post['author']); ?>" required>
        </div>

        <div class="form-group">
            <label for="manual_date">Select Date</label>
            <input type="date" class="form-control" name="manual_date" value="<?= htmlspecialchars($post['date']); ?>" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content"><?= htmlspecialchars($post['content']); ?></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload New Image (Optional)</label>
            <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
            <?php if (!empty($post['image'])): ?>
                <p class="mt-2">Current Image:</p>
                <img src="<?= htmlspecialchars($post['image']); ?>" alt="Post Image" style="max-width: 300px;">
            <?php endif; ?>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="show_toc" name="show_toc" <?= !empty($post['show_toc']) ? 'checked' : ''; ?>>
            <label class="form-check-label" for="show_toc">Enable Table of Contents</label>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
</body>
</html>