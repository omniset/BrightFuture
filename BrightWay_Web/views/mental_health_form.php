<!DOCTYPE html>
<html>
<head>
    <title>Mental Health Form</title>
    <script src="../js/scripts.js" defer></script>
</head>
<body>
    <h1>Mental Health Form</h1>
    <form action="submit_form.php" method="POST">
        <textarea name="response" rows="10" cols="30" placeholder="How are you feeling?"></textarea><br>
        <button type="submit">Submit</button>
    </form>
    <button onclick="goToHomePage()" class="back-btn">Go to Homepage</button>
</body>
</html>
