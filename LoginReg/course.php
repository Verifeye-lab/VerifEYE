<?php
// Database credentials
$servername = "localhost";
$username = "root";  // Replace with your MySQL username
$password = "";      // Replace with your MySQL password
$dbname = "courses_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch courses from database
$sql = "SELECT id, course_name, course_description, instructor, duration FROM courses";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Available Courses</h1>
    <?php
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Course Name</th><th>Description</th><th>Instructor</th><th>Duration</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo '<a  class="lesson_button" href="courseinfo.php">';
            echo '<div class="lesson_button">';
            echo '<h2 class="coursesc">' . $row["course_name"] . "</h2>";  
            echo "</div>";
            echo "</a>";
        }
        echo "</table>";
    } else {
        echo "<p>No courses available.</p>";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>
