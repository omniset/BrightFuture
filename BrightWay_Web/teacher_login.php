<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for simplicity
    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['teacher_logged_in'] = true;
        header('Location: teacher_dashboard.php');
        exit;
    } else {
        echo "<script>alert('Invalid credentials!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;

            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .main-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            text-align: left;
        }
        .input-group label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .input-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .login-button:hover {
            background-color: #45a049;
        }
        header {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .home-button {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="index.php" class="home-button"><button class="login-button">Home</button></a>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Teacher Login</h1>
        <form method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>
