<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $purpose = $_POST['purpose'];

    $sql = "INSERT INTO consultations (student_nis, consultation_purpose) VALUES (:nis, :purpose)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nis', $nis);
    $stmt->bindParam(':purpose', $purpose);

    if ($stmt->execute()) {
        echo "Consultation requested successfully!";
    } else {
        echo "Error requesting consultation.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Consultation</title>
    <style>
        /* General styles */
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
            margin: 8px 0 20px 0;
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

        textarea {
            resize: vertical;
            min-height: 120px;
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
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        button:active {
            background-color: #388e3c;
        }

        .back-button {
            background-color: #f44336;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #e53935;
        }

        .back-button:active {
            background-color: #d32f2f;
        }

        /* Container for button links */
        .form-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }

        .form-buttons a {
            text-decoration: none;
            font-size: 1em;
            color: #4CAF50;
            transition: color 0.3s ease;
        }

        .form-buttons a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <div>
        <h1>Request Consultation</h1>
        <form method="POST">
            <label for="nis">Student NIS:</label>
            <input type="text" id="nis" name="nis" required>
            
            <label for="purpose">Purpose:</label>
            <textarea id="purpose" name="purpose" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
        
        <div class="form-buttons">
            <a href="index.php"><button class="back-button">Back</button></a>
        </div>
    </div>
</body>
</html>
