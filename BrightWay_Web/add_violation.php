<?php
session_start();
if (!isset($_SESSION['teacher_logged_in'])) {
    header('Location: teacher_login.php');
    exit;
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $violation_description = $_POST['violation_description'];

    $sql = "INSERT INTO violations (student_nis, violation_description) VALUES (:nis, :description)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nis', $nis);
    $stmt->bindParam(':description', $violation_description);

    if ($stmt->execute()) {
        echo "Violation added successfully!";
    } else {
        echo "Error adding violation.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Violation</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Form container */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            text-align: left;
        }

        label {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em;
            background-color: #fafafa;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        button:active {
            background-color: #388e3c;
        }

        .back-button {
            background-color: #f44336;
            color: white;
            width: 100px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            
        }

        .back-button:hover {
            background-color: #e53935;
        }

        .back-button:active {
            background-color: #d32f2f;
        }

    </style>
</head>
<body>
    <div>
        <h1>Add Violation</h1>
        <form method="POST">
            <label for="nis">Student NIS:</label>
            <input type="text" id="nis" name="nis" required>
            
            <label for="violation_description">Violation Description:</label>
            <textarea id="violation_description" name="violation_description" required></textarea>
            
            <button type="submit">Add Violation</button>
        </form>
        
        <!-- Back Button -->
        <a href="teacher_dashboard.php">
            <button class="back-button">Back</button>
        </a>
    </div>
</body>
</html>
