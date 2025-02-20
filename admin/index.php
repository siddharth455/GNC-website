<?php
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set a session timeout duration (30 minutes)
define('SESSION_TIMEOUT', 600); // 30 minutes in seconds

// Check if the session has expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();     // Unset all session variables
    session_destroy();   // Destroy the session
    header('Location: login.php'); // Redirect to login page
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}
?>
<?php
$jsonFile = '../blog.json';
$posts = json_decode(file_get_contents($jsonFile), true);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #343a40;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        .btn {
            margin-right: 10px;
        }

        .table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            background-color: #007bff;
            color: white;
            padding: 12px;
            text-align: left;
        }

        .table td {
            padding: 12px;
            border: 1px solid #dee2e6;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }

        .table .btn {
            padding: 6px 12px;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <h1>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</h1>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        <!-- Your page content goes here -->
        <h1 class="mt-5">Admin Panel</h1>
        <a href="add_post.php" class="btn btn-primary mb-3">Add New Post</a>
        <h2>Posts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $index => $post): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($post['title']); ?></td>
                        <td>
                            <a href="edit_post.php?id=<?php echo $index; ?>" class="btn btn-warning">Edit</a>
                            <!-- <a href="delete_post.php?id=<?php echo $index; ?>" class="btn btn-danger">Delete</a> -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>