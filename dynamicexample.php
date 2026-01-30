<?php
// Simulate user logged-in check (optional)
$user_logged_in = true; // set false to test "not logged in" message
$username = "Ali";

// Degree programs (PHP array)
$degrees = [
    "BSc Science in Information Technology",
    "BSc Science in Chemistry",
    "BSc in Psychology"
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>University of Technology</title>
</head>
<body>
    <h1>WELCOME</h1>

    <?php
    // Show greeting if user is logged in
    if ($user_logged_in) {
        echo "<p>Hello, $username! You are logged in.</p>";
        echo "<p>Here are the BSc degree programs offered by our university:</p>";

        // Dynamically generate the degree list
        echo "<ul>";
        foreach ($degrees as $degree) {
            echo "<li>$degree</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Please log in to view our degree programs.</p>";
    }
    ?>
</body>
</html>
