<?php
$jsonFile = 'blog.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newPost = [
        'title' => $_POST['title'],
        'author' => $_POST['author'],
        'date' => date('Y-m-d H:i:s'),
        'content' => $_POST['content'],
        'image' => $_POST['image'] // Optional
    ];

    $posts = json_decode(file_get_contents($jsonFile), true);
    $posts[] = $newPost;
    file_put_contents($jsonFile, json_encode($posts, JSON_PRETTY_PRINT));
    header('Location: index.php');
}
?>
<?php
// Start the session for authentication (if required)
session_start();

// Example authentication check (optional, ensure only admins can delete pages)
// if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
//     header('Location: login.php');
//     exit;
// }

// Handle deletion request
if (isset($_GET['delete'])) {
    $fileToDelete = basename($_GET['delete']);  // Sanitize the input to avoid path traversal
    $directory = './';  // Define your directory

    $filePath = $directory . $fileToDelete;

    // Check if the file exists and is not critical
    if (file_exists($filePath) && $fileToDelete !== 'manage_pages.php' && $fileToDelete !== 'index.php') {
        // Attempt to delete the file
        if (unlink($filePath)) {
            $message = "File {$fileToDelete} deleted successfully.";
        } else {
            $message = "Error deleting file {$fileToDelete}.";
        }
    } else {
        $message = "Invalid file or file does not exist.";
    }
}

// List all pages
$directory = './';  // Directory where the pages are stored
$pages = glob($directory . "*.php");  // Get all .php files

?>

<!DOCTYPE html>
<html>

<head>
    <title>Add New Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1 class="mt-5">Add New Post</h1>
        <form method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="text" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
    </div>
    <div class="container">
        <h1>Manage Pages</h1>

        <?php if (isset($message)) { ?>
            <p style="color: red;"><?php echo $message; ?></p>
        <?php } ?>

        <ul>
            <?php
            // Display the pages
            foreach ($pages as $page) {
                $pageName = basename($page);  // Get the file name

                // Exclude critical files like manage_pages.php and index.php
                if ($pageName !== 'manage_pages.php' && $pageName !== 'index.php') {
                    echo "<li>{$pageName} 
                <a href='?delete={$pageName}' onclick=\"return confirm('Are you sure you want to delete {$pageName}?');\">Delete</a>
                </li>";
                }
            }
            ?>
        </ul>
    </div>
</body>

</html>