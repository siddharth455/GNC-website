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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imagePath = '';

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

    // Use manually selected date; fallback to today's date if not provided
    $selectedDate = !empty($_POST['manual_date']) ? $_POST['manual_date'] : date('Y-m-d');

    // Prepare the new post data
    $newPost = [
        'title' => htmlspecialchars($_POST['title']),
        'author' => htmlspecialchars($_POST['author']),
        'date' => $selectedDate, // Manually selected date
        'content' => $_POST['content'],
        'image' => $imagePath
    ];

    $posts = json_decode(file_get_contents($jsonFile), true);
    $posts = $posts ?: [];

    // Add the new post
    $posts[] = $newPost;
    file_put_contents($jsonFile, json_encode($posts, JSON_PRETTY_PRINT));

    // Redirect to prevent duplicate form submissions
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.7/quill.snow.css">
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

    <h1 class="mt-5">Add New Post</h1>
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
            <label for="manual_date">Select Date</label>
            <input type="date" class="form-control" name="manual_date" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <div id="editor" style="height: 300px;"></div>
            <input type="hidden" name="content" id="content">
        </div>
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</div>

<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
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

    // Sync Quill content to hidden input on form submit
    document.querySelector('form').onsubmit = function() {
        document.querySelector('#content').value = quill.root.innerHTML;
    };
</script>
</body>
</html>
