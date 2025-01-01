<?php
include '../db.php';

$query = $pdo->query("SELECT students.NAME, violations.description, violations.points 
                      FROM violations 
                      JOIN students ON violations.student_id = students.id");

$violations = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Violations</title>
    <script src="../js/scripts.js" defer></script>
</head>
<body>
    <h1>Student Violations</h1>
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Description</th>
            <th>Points</th>
        </tr>
        <?php foreach ($violations as $violation): ?>
        <tr>
            <td><?= $violation['NAME']; ?></td>
            <td><?= $violation['description']; ?></td>
            <td><?= $violation['points']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <button onclick="goToHomePage()" class="back-btn">Go to Homepage</button>
</body>
</html>
