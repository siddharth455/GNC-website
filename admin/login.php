<?php
session_start();

// Session timeout settings (10 minutes)
define('SESSION_TIMEOUT', 600);
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}
$_SESSION['last_activity'] = time();

$conn = new mysqli("localhost", "root", "", "blog_admin");
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

function clean_input($data) {
    return trim(htmlspecialchars($data));
}

// Use the same secret key and site key pair here
$recaptcha_secret = '6LcuJE0rAAAAAPdxQgSH7cTFyEyww7XjmsmLZ_IN'; // Your secret key
$recaptcha_sitekey = '6LcuJE0rAAAAAGEhhdjO4ZM6uCsQqapmxTfiNUAV'; // Your site key (used in HTML)

$error_message = '';
$success_message = '';

function verifyRecaptchaV2($secret, $response) {
    if (empty($response)) {
        return false;
    }
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $secret,
        'response' => $response
    ];
    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ]
    ];
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) return false;

    $resultData = json_decode($result);
    return $resultData->success;
}

// User Login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_login'])) {
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
    if (!verifyRecaptchaV2($recaptcha_secret, $recaptcha_response)) {
        $error_message = 'reCAPTCHA verification failed. Please try again.';
    } else {
        $user_username = clean_input($_POST['user_username']);
        $user_password = $_POST['user_password'];

        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ? AND role = 'user'");
        $stmt->bind_param("s", $user_username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();
            if (password_verify($user_password, $hashed_password)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $user_username;
                $_SESSION['role'] = 'user';
                header('Location: user_dashboard.php');
                exit();
            } else {
                $error_message = 'Invalid username or password.';
            }
        } else {
            $error_message = 'Invalid username or password.';
        }
        $stmt->close();
    }
}

// Admin Login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['admin_login'])) {
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
    if (!verifyRecaptchaV2($recaptcha_secret, $recaptcha_response)) {
        $error_message = 'reCAPTCHA verification failed. Please try again.';
    } else {
        $admin_username = clean_input($_POST['admin_username']);
        $admin_password = $_POST['admin_password'];

        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ? AND role = 'admin'");
        $stmt->bind_param("s", $admin_username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hashed_password);
            $stmt->fetch();
            if (password_verify($admin_password, $hashed_password)) {
                $_SESSION['username'] = $admin_username;
                $_SESSION['role'] = 'admin';
                $_SESSION['2fa_verified'] = false; // mark 2FA pending
                header('Location: two_factor.php');
                exit();
            } else {
                $error_message = 'Invalid admin credentials.';
            }
        } else {
            $error_message = 'Invalid admin credentials.';
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" type="image/webp" href="../images/logog.webp" />
    <title>Admin & User Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://gncdehradun.com/assets/images/about-gnc.webp');
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

        .btn-primary {
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
    </style>
</head>

<body>
    <div class="login-panel container mt-5">
        <h1 class="text-center">Login</h1>
        <hr>
        <?php if (!empty($error_message)): ?>
            <p class="text-danger"><?= htmlspecialchars($error_message); ?></p>
        <?php endif; ?>
        <?php if (!empty($success_message)): ?>
            <p class="text-success"><?= htmlspecialchars($success_message); ?></p>
        <?php endif; ?>

        <!-- User Login Section -->
        <div id="user-login" class="login-section">
            <h2>User Login</h2>
            <form action="" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="user_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="user_username" name="user_username" required />
                </div>

                <div class="mb-3">
                    <label for="user_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="user_password" name="user_password" required />
                </div>

                <!-- Google reCAPTCHA widget -->
                <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="<?= htmlspecialchars($recaptcha_sitekey) ?>"></div>
                </div>

                <button type="submit" name="user_login" class="btn btn-primary mt-2">Login as User</button>
            </form>
            <hr>
            <p class="text-center">
                Are you an admin? <button id="show-admin-login" class="btn btn-link p-0">Login here</button>
            </p>
        </div>

        <!-- Admin Login Section -->
        <div id="admin-login" class="login-section" style="display:none;">
            <h2>Admin Login</h2>
            <form action="" method="POST" autocomplete="off">
                <div class="mb-3">
                    <label for="admin_username" class="form-label">Admin Username</label>
                    <input type="text" class="form-control" id="admin_username" name="admin_username" required />
                </div>

                <div class="mb-3">
                    <label for="admin_password" class="form-label">Admin Password</label>
                    <input type="password" class="form-control" id="admin_password" name="admin_password" required />
                </div>

                <!-- Google reCAPTCHA widget -->
                <div class="mb-3">
                    <div class="g-recaptcha" data-sitekey="<?= htmlspecialchars($recaptcha_sitekey) ?>"></div>
                </div>

                <button type="submit" name="admin_login" class="btn btn-primary mt-2">Login as Admin</button>
            </form>
            <hr>
            <p class="text-center">
                Not a user? <button id="show-user-login" class="btn btn-link p-0">User Login</button>
            </p>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        const userLoginSection = document.getElementById('user-login');
        const adminLoginSection = document.getElementById('admin-login');

        document.getElementById('show-admin-login').addEventListener('click', () => {
            userLoginSection.style.display = 'none';
            adminLoginSection.style.display = 'block';
        });

        document.getElementById('show-user-login').addEventListener('click', () => {
            userLoginSection.style.display = 'block';
            adminLoginSection.style.display = 'none';
        });
    </script>
</body>
</html>
