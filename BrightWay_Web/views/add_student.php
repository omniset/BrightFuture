<?php include '../db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <script src="../js/scripts.js" defer></script>
</head>
<body>
    <!-- Back Button (placed near the top or wherever suitable) -->
    <!-- <button onclick="goBack()" class="back-btn">Back</button> -->

    <h1>Add New Student</h1>
    <form action="save_student.php" method="POST">
        <label for="name">Student Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <button type="submit">Add Student</button>
    </form>
    <button onclick="goToHomePage()" class="back-btn">Go to Homepage</button>

</body>
</html>