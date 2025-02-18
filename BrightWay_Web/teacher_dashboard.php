<?php
session_start();
if (!isset($_SESSION['teacher_logged_in'])) {
    header('Location: teacher_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <script src="scripts.js" defer></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        
        .menu-button, .login-button {
            background-color: green;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .menu-button:hover, .login-button:hover {
            background-color: darkslategray;
        }
        .sliding-menu {
            display: none;
            top: 50px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 10px;
            border-radius: 5px;
            z-index: 1000;
            width: 200px;
            text-align: left;
        }
        .sliding-menu a {
            display: block;
            color: white;
            padding: 10px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .sliding-menu a:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <!-- Header with Menu and Logout Buttons -->
    <header>
        <button class="menu-button" onclick="toggleMenu()">Menu</button>
        <a href="logout.php"><button class="login-button">Logout</button></a>
    </header>

    <!-- Sliding Menu -->
    <div class="sliding-menu" id="menu">
        <a href="add_student.php">Add Student</a>
        <a href="add_violation.php">Add Violation</a>
        <a href="view_violations.php">View Violations</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h1>Teacher Dashboard</h1>
        <p>Welcome, Teacher! Use the menu above to manage students and violations.</p>
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    </script>
</body>
</html>