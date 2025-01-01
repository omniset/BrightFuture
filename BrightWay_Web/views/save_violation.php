<?php
include '../db.php';

$student_id = $_POST['student_id'];
$description = $_POST['description'];
$points = $_POST['points'];

try {
    $stmt = $pdo->prepare("INSERT INTO violations (student_id, description, points) VALUES (?, ?, ?)");
    $stmt->execute([$student_id, $description, $points]);

    $stmt = $pdo->prepare("UPDATE students SET points = points + ? WHERE id = ?");
    $stmt->execute([$points, $student_id]);

    echo "Violation added successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
