<?php
session_start();

if (!isset($_SESSION['username']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['code'] ?? '';
    $correct_code = '808480'; // Replace with dynamic code logic if desired

    if ($code === $correct_code) {
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit();
    } else {
        $error = 'Invalid 2FA code. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Admin 2FA Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:rgb(181, 142, 142);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 300px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .info {
            font-size: 14px;
            color: #777;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Two-Factor Authentication</h2>
    <form method="POST">
        <input type="text" name="code" placeholder="Enter 6-digit code" required>
        <button type="submit">Verify</button>
    </form>
    <?php if ($error): ?>
        <div class="error"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>
    <div class="info">Need help? Contact your admin.</div>
</div>
</body>
</html>
