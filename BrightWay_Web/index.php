<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Teacher Web</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js" defer></script>
</head>
<body>
    <!-- Header Section (without logo) -->
    <header>
        <div class="menu-icon" onclick="toggleMenu()">&#9776;</div> <!-- Hamburger Menu Icon -->
    </header>

    <!-- Sidebar Menu -->
    <nav id="menu">
        <ul>
            <li><a href="views/add_student.php">Teacher: Add Student</a></li>
            <li><a href="views/add_violation.php">Teacher: Add Violation</a></li>
            <li><a href="views/teacher_violations.php">Teacher: View Violations</a></li>
            <li><a href="views/mental_health_form.php">Student: Mental Health Form</a></li>
            <li><a href="views/request_consultation.php">Student: Request Consultation</a></li>
        </ul>
    </nav>

    <!-- Landing Page Section with Background Image -->
    <section id="landing">
        <h1>Welcome to the Student-Teacher Web</h1>
        <p>Your platform for managing student violations and supporting mental health.</p>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Student-Teacher Web. All rights reserved.</p>
    </footer>
</body>
</html>
