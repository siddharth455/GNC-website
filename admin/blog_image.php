<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowed = [
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'webp' => 'image/webp'
        ];
        $filename = $_FILES['image']['name'];
        $filetype = $_FILES['image']['type'];
        $filesize = $_FILES['image']['size'];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file type
        if (!in_array($filetype, $allowed)) {
            die("Error: Invalid file type.");
        }

        // Verify file size (limit to 5MB)
        if ($filesize > 5 * 1024 * 1024) {
            die("Error: File size is larger than the allowed limit.");
        }

        // Check if the file already exists
        if (file_exists("uploads/" . $filename)) {
            echo "Error: " . $filename . " already exists.";
        } else {
            // Move the uploaded file to the uploads directory
            move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $filename);
            echo "Your file was uploaded successfully.";
        }
    } else {
        echo "Error: " . $_FILES['image']['error'];
    }
}
?>
