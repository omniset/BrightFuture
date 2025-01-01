<?php
include '../db.php';

$name = $_POST['name'];

try {
    $stmt = $pdo->prepare("INSERT INTO students (name) VALUES (?)");
    $stmt->execute([$name]);
    echo "Student added successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
