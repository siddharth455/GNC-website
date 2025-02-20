<?php
// Path to your JSON file
$jsonFile = '../blog.json';

// Check if the post ID is provided
if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; // Get the post index (id) from the URL

    // Decode the JSON data to an array
    $posts = json_decode(file_get_contents($jsonFile), true);

    // Check if the ID is valid
    if ($id >= 0 && $id < count($posts)) {
        // Remove the post from the array
        array_splice($posts, $id, 1);

        // Encode the array back to JSON and save it
        file_put_contents($jsonFile, json_encode($posts, JSON_PRETTY_PRINT));

        // Redirect back to the posts page after deletion
        header('Location: admin.php');
        exit();
    } else {
        echo "Invalid post ID.";
    }
} else {
    echo "No post ID provided.";
}
?>
