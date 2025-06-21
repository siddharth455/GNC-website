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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imagePath = '';

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
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "File is not an image.";
            }
        } else {
            echo "Only JPG, JPEG, PNG, and WEBP files are allowed.";
        }
    }

    date_default_timezone_set('Asia/Kolkata');
    $selectedDate = !empty($_POST['manual_date']) ? $_POST['manual_date'] : date('Y-m-d');
    $showTOC = isset($_POST['show_toc']) ? true : false;

    $newPost = [
        'title' => htmlspecialchars($_POST['title']),
        'author' => htmlspecialchars($_POST['author']),
        'date' => $selectedDate,
        'content' => $_POST['content'],
        'image' => $imagePath,
        'show_toc' => $showTOC
    ];

    $posts = json_decode(file_get_contents($jsonFile), true);
    $posts = $posts ?: [];

    $posts[] = $newPost;
    file_put_contents($jsonFile, json_encode($posts, JSON_PRETTY_PRINT));

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
    <meta charset="UTF-8">
    <link rel="icon" type="image/webp" href="../images/logog.webp">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- TinyMCE -->
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
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>

    <h3>Add New Blog Post</h3>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" required>
        </div>

        <div class="form-group">
            <label for="manual_date">Date</label>
            <input type="date" class="form-control" name="manual_date" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
        </div>

        <div class="form-group">
            <label><input type="checkbox" name="show_toc" value="1"> Show Table of Contents</label>
        </div>

        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</div>
</body>
</html>
