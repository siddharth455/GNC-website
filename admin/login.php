<?php
session_start();

// Set session timeout duration (10 minutes)
define('SESSION_TIMEOUT', 600); // 10 minutes in seconds

// Check if the session has expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
$_SESSION['last_activity'] = time(); // Update last activity time

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

// Token generation function
function generateToken()
{
    return bin2hex(openssl_random_pseudo_bytes(16)); // Generates a random 32-character token
}

// Process User Login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_login'])) {
    $user_username = htmlspecialchars($_POST['user_username']);
    $user_password = htmlspecialchars($_POST['user_password']);

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ? AND role = 'user'");
    $stmt->bind_param("s", $user_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($user_password, $hashed_password)) {
            // User successfully logged in
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user_username;
            $_SESSION['role'] = 'user';  // Store user role in session
            header('Location: user.php'); // Redirect to User Page
            exit();
        } else {
            $error_message = 'Invalid User username or password.';
        }
    } else {
        $error_message = 'Invalid User username or password.';
    }
    $stmt->close();
}

// Process Admin Login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['admin_login'])) {
    $admin_username = htmlspecialchars($_POST['admin_username']);
    $admin_password = htmlspecialchars($_POST['admin_password']);

    $stmt = $conn->prepare("SELECT password FROM users WHERE username = ? AND role = 'admin'");
    $stmt->bind_param("s", $admin_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        if (password_verify($admin_password, $hashed_password)) {
            // Admin successfully logged in
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $admin_username;
            $_SESSION['role'] = 'admin';  // Store admin role in session
            header('Location: admin.php'); // Redirect to Admin Page
            exit();
        } else {
            $error_message = 'Invalid Admin username or password.';
        }
    } else {
        $error_message = 'Invalid Admin username or password.';
    }
    $stmt->close();
}


// Process Admin Registration
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register_admin'])) {
    // Sanitize user input
    $new_admin_username = htmlspecialchars(trim($_POST['new_admin_username']));
    $new_admin_password = htmlspecialchars(trim($_POST['new_admin_password']));
    $verification_key = htmlspecialchars(trim($_POST['verification_key']));

    // Define the correct verification key
    $correct_verification_key = "7079554814"; // Replace with your actual verification key

    // Check the verification key
    if ($verification_key !== $correct_verification_key) {
        $error_message = 'Invalid verification key. Registration failed.';
    } else {
        // Hash the password
        $hashed_password = password_hash($new_admin_password, PASSWORD_DEFAULT);

        // Check if the username already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("s", $new_admin_username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error_message = 'Admin username already exists.';
        } else {
            // Generate a unique token
            $token = generateToken();

            // Insert the new admin user
            $stmt = $conn->prepare("INSERT INTO users (username, password, role, token) VALUES (?, ?, 'admin', ?)");
            if (!$stmt) {
                die("Prepare failed: " . $conn->error);
            }

            $stmt->bind_param("sss", $new_admin_username, $hashed_password, $token);

            if ($stmt->execute()) {
                $success_message = 'Admin registered successfully!';
            } else {
                $error_message = 'Error: ' . $stmt->error;
            }
        }
        $stmt->close();
    }
}
    

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
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
        }

        .login-panel h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            font-weight: 900;
        }

        .login-panel hr {
            margin: 20px 0;
        }

        .btn-primary,
        .btn-success {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
            background-color: chocolate;
            color: white;
            margin-bottom: 10px;

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
    <div class="login-panel container mt-5">
        <h1 class="text-center">Login</h1>
        <hr>
        <?php if (isset($error_message)): ?>
            <p class="text-danger text-center"><?= $error_message; ?></p>
        <?php endif; ?>
        <?php if (isset($success_message)): ?>
            <p class="text-success text-center"><?= $success_message; ?></p>
        <?php endif; ?>

        <!-- User Login Section -->
        <div id="user-login" class="login-section">
            <h2>User Login</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="user_username" name="user_username" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="user_password" name="user_password" required>
                </div>
                <br>
                <button type="submit" name="user_login" class="btn btn-success w-100">User Login</button>
                <br>
                <button id="show-admin-login" name="admin_login" class="btn btn-success w-100">Admin Login</button>

            </form>

        </div>

        <!-- Admin Login Section -->
        <div id="admin-login" class="login-section" style="display: none;">
            <h2>Admin Login</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="admin_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="admin_username" name="admin_username" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="admin_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="admin_password" name="admin_password" required>
                </div>
                <br>
                <button type="submit" name="admin_login" class="btn btn-primary w-100">Admin Login</button>
                <button id="show-admin-register" name="create_admin" class="btn btn-primary w-100">Create Admin Account</button>

            </form>
        </div>

        <!-- Admin Registration Section -->
        <!-- Admin Registration Section -->
        <div id="admin-register" class="login-section" style="display: none;">
            <h2>Register Admin</h2>
            <form action="" method="POST"> <!-- Make sure action points to the same script -->
                <div class="mb-3">
                    <label for="new_admin_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="new_admin_username" name="new_admin_username" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="new_admin_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="new_admin_password" name="new_admin_password" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="verification_key" class="form-label">Verification Key</label>
                    <input type="password" class="form-control" id="verification_key" name="verification_key" required>
                </div>
                <br>
                <button type="submit" name="register_admin" class="btn btn-primary w-100">Register Admin</button>
                <a href="login.php" class="btn btn-secondary w-100">Back to Login</a>
            </form>
        </div>

    </div>

    <script>
        document.getElementById('show-admin-login').addEventListener('click', function() {
            document.getElementById('user-login').style.display = 'none';
            document.getElementById('admin-login').style.display = 'block';
        });

        document.getElementById('show-admin-register').addEventListener('click', function() {
            document.getElementById('admin-login').style.display = 'none';
            document.getElementById('admin-register').style.display = 'block';
        });

        document.getElementById('show-admin-login-back').addEventListener('click', function() {
            document.getElementById('admin-register').style.display = 'none';
            document.getElementById('admin-login').style.display = 'block';
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>