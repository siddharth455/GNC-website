<?php
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set a session timeout duration (30 minutes)
define('SESSION_TIMEOUT', 1800);

// Check if the session has expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit();
}

$jsonFile = '../blog.json';
$posts = json_decode(file_get_contents($jsonFile), true);

if (!isset($_GET['id']) || !isset($posts[$_GET['id']])) {
    die('Post not found.');
}

$post = $posts[$_GET['id']];
$imagePath = $post['image']; // Keep existing image

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatedDate = !empty($_POST['manual_date']) ? $_POST['manual_date'] : $post['date'];

    // Handle image upload
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

    $posts[$_GET['id']] = [
        'title' => htmlspecialchars($_POST['title']),
        'author' => htmlspecialchars($_POST['author']),
        'date' => $updatedDate,
        'content' => $_POST['content'],
        'image' => $imagePath
    ];

    file_put_contents($jsonFile, json_encode($posts, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.7/quill.snow.css"> <!-- Quill CSS -->
    <link rel="icon" type="image/webp" href="../images/logog.webp">
    <style>
        .post h1, .post h2, .post h3 {
            margin-top: 1em;
            margin-bottom: 0.5em;
            font-weight: bold;
        }

        .post p {
            margin-top: 0.5em;
            margin-bottom: 1em;
            line-height: 1.6;
        }
    </style>
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
                <div id="editor" style="height: 300px;"><?= htmlspecialchars_decode($post['content']); ?></div>
                <input type="hidden" name="content" id="content">
            </div>
            <div class="form-group">
                <label for="image">Upload New Image (Optional)</label>
                <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
                <?php if (!empty($post['image'])): ?>
                    <p class="mt-2">Current Image:</p>
                    <img src="<?= htmlspecialchars($post['image']); ?>" alt="Post Image" style="max-width: 300px;">
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script> <!-- Quill JS -->
    <script>
        // Initialize Quill editor
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Write your content here...',
            modules: {
                toolbar: [
                    [{ header: [1, 2, 3, false] }],
                    ['bold', 'italic', 'underline'],
                    ['blockquote', 'code-block'],
                    [{ list: 'ordered' }, { list: 'bullet' }],
                    ['link', 'image'],
                    ['clean']
                ]
            }
        });

        // Set initial Quill content
        quill.root.innerHTML = `<?= htmlspecialchars_decode($post['content']); ?>`;

        // Sync Quill content to hidden input on form submit
        document.querySelector('form').onsubmit = function() {
            document.querySelector('#content').value = quill.root.innerHTML;
        };
    </script>
</body>

</html>
