<?php
include '../db.php';

$response = $_POST['response'];
$student_id = 1; // Replace with actual student ID

$query = $pdo->prepare("INSERT INTO mental_health_forms (student_id, response, submitted_at) VALUES (?, ?, NOW())");
$query->execute([$student_id, $response]);

echo "Form submitted successfully!";
?>
