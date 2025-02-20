<?php
session_start();

// Set a session timeout duration (30 minutes)
define('SESSION_TIMEOUT', 600); // 30 minutes in seconds

// Check if the session has expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
$_SESSION['last_activity'] = time();

$servername = "localhost";
$username = "blog";   
$password = "Alumni#2024#";
$dbname = "blog_admin"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Process registration if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $new_username = htmlspecialchars($_POST['new_username']);
    $new_password = htmlspecialchars($_POST['new_password']);
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Prepare and execute the insert query
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $new_username, $hashed_password);

    if ($stmt->execute()) {
        $success_message = 'User registered successfully!';
    } else {
        $error_message = 'Error: ' . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/webp" href="../images/logog.webp">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://gncdehradun.com/assets/images/about-gnc.webp');
            /* Add your background image */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
        }

        .login-panel {
            width: 400px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            position: relative;
            align-items: center;
        }

        .login-panel h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-weight: 900;
        }


        .btn-primary,
        .btn-success {
        
            background-color: chocolate;
            color: white;

        }

        .btn-primary:hover {
            background-color: #00b7ff;
        }

        .btn-success:hover {
            background-color: #00b7ff;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            height: 30px;
            width: 100%;
        }

        .text-danger,
        .text-success {
            text-align: center;
            margin: 10px 0;
        }

        @media (max-width: 500px) {
            .login-panel {
                width: 90%;
            }
        }

        .login-panel {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #343a40;
        }

        .nav-tabs .nav-link {
            border: none;
        }

        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        
        <div class="login-panel">
        <div class="d-flex justify-content-between align-items-center mt-5">
            <h2>Welcome, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
            <h2 class="text-center login-page-heading">Create User</h2>
            <?php if (isset($success_message)): ?>
                <p class="text-success"><?= $success_message; ?></p>
            <?php endif; ?>
            <?php if (isset($error_message)): ?>
                <p class="text-danger"><?= $error_message; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="new_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="new_username" name="new_username" required>
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="new_password" name="new_password" required>
                </div>
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                <button type="submit" name="register" class="btn btn-success">Create User</button>
            </form>
        </div>
    </div>

</body>

</html>