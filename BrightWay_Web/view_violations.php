<?php
include 'db.php';

// Fetch violations with student names
$sql = "SELECT students.name, violations.violation_description, violations.date_added, violations.point
        FROM violations 
        JOIN students ON violations.student_nis = students.nis";
$stmt = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h1 {
        font-size: 2.5em;
        color: #333;
        margin-bottom: 20px;
    }

    .search-container {
        margin-bottom: 20px;
    }

    #search-bar {
        padding: 10px;
        font-size: 16px;
        width: 200px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 1.1em;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    td {
        background-color: #f9f9f9;
        border-bottom: 1px solid #ddd;
    }

    tr:hover td {
        background-color: #f1f1f1;
    }

    tbody tr:nth-child(even) td {
        background-color: #f4f4f4;
    }

    tbody tr:nth-child(odd) td {
        background-color: #fff;
    }

    /* Login Button */
    .back-button {
        background-color: #4CAF50; /* Green */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .back-button:hover {
        background-color: #45a049;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public View</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="container">
        <h1>Student Violations</h1>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" id="search-bar" placeholder="Search by student name..." onkeyup="searchTable()">
        </div>

        <!-- Table -->
        <table id="violations-table">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Violation</th>
                    <th>Date</th>
                    <th>Point</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['violation_description']; ?></td>
                    <td><?php echo $row['date_added']; ?></td>
                    <td><?php echo $row['point']; ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="teacher_dashboard.php"><button class="back-button">Back</button></a>
    </div>

    <script>
        // Search function
        function searchTable() {
            // Get the search input value and convert it to lowercase
            const input = document.getElementById('search-bar').value.toLowerCase();
            const table = document.getElementById('violations-table');
            const rows = table.getElementsByTagName('tr');

            // Loop through all table rows (skip the header row)
            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const nameCell = row.getElementsByTagName('td')[0]; // Get the student name cell
                if (nameCell) {
                    const name = nameCell.textContent.toLowerCase(); // Get the student name text
                    // Show or hide the row based on whether the name matches the search input
                    if (name.includes(input)) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                }
            }
        }
    </script>
</body>

</html>