<?php
session_start();
// require "config.php"; // Your database connection settings

// Initialize PDO connection
$pdo = new PDO('mysql:host=localhost;dbname=blog_db', 'root', '');

// Handle like and share updates via AJAX
if (isset($_POST['action']) && isset($_POST['post_id'])) {
    $post_id = (int)$_POST['post_id'];
    if ($_POST['action'] === 'like') {
        $stmt = $pdo->prepare("UPDATE posts SET likes = likes + 1 WHERE id = ?");
        $stmt->execute([$post_id]);
        $stmt = $pdo->prepare("SELECT likes FROM posts WHERE id = ?");
        $stmt->execute([$post_id]);
        echo $stmt->fetchColumn();
    } elseif ($_POST['action'] === 'share') {
        $stmt = $pdo->prepare("UPDATE posts SET shares = shares + 1 WHERE id = ?");
        $stmt->execute([$post_id]);
        $stmt = $pdo->prepare("SELECT shares FROM posts WHERE id = ?");
        $stmt->execute([$post_id]);
        echo $stmt->fetchColumn();
    }
    exit; // Important to stop further execution
}

// Handle comment submission 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $post_id = (int)$_POST['post_id'];

    $stmt = $pdo->prepare("INSERT INTO comments (post_id, name, comment) VALUES (?, ?, ?)");
    if ($stmt->execute([$post_id, $name, $comment])) {
        $_SESSION['message'] = "Your comment was submitted successfully!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "There was an error submitting your comment. Please try again.";
        $_SESSION['message_type'] = "danger";
    }

    // Redirect to avoid form resubmission
    header("Location: post.php?id=$post_id");
    exit;
}

// Fetch comments
if (isset($_GET['post_id'])) {
    $post_id = (int)$_GET['post_id'];
    $stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = :post_id ORDER BY created_at DESC");
    $stmt->execute(['post_id' => $post_id]);
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    exit;
}
?>
