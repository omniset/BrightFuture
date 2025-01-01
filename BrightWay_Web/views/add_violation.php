<?php include '../db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Violation</title>
    <script src="../js/scripts.js" defer></script>
</head>
<body>
    <h1>Add Student Violation</h1>

    <?php
    $students = $pdo->query("SELECT * FROM students")->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <form action="save_violation.php" method="POST">
        <label for="student_id">Student:</label>
        <select name="student_id" id="student_id" required>
            <option value="">Select Student</option>
            <?php foreach ($students as $student): ?>
                <option value="<?= $student['id'] ?>"><?= $student['NAME'] ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label for="description">Violation Description:</label><br>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea>
        <br><br>

        <label for="points">Points:</label>
        <input type="number" name="points" id="points" required min="1">
        <br><br>

        <button type="submit">Add Violation</button>
    </form>
    <button onclick="goToHomePage()" class="back-btn">Go to Homepage</button>
</body>
</html>
