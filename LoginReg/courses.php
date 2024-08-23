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
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="RocketCake">
  <title>Verifeye - Cources</title>
  <link rel="stylesheet" type="text/css" href="courses_html.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="textstyle1">
    <div id="container_502a3849">
      <div id="container_502a3849_padding">
        <div class="textstyle2">
          <div id="menu_775b86c0" style="overflow: visible;">
            <div class="menuholder1" style="overflow: hidden;"><a href="javascript:void(0);">
                <div id="menuentry_40f71978" class="menustyle1 menu_775b86c0_mainMenuEntry mobileEntry">
                  <div class="menuentry_text1">
                    <span class="textstyle3">MENU ▼</span>
                  </div>
                </div>
              </a>
              <a href="index.php" style="text-decoration:none">
                <div id="menuentry_19eb25b" class="menustyle1 menu_775b86c0_mainMenuEntry normalEntry">
                  <div class="menuentry_text2">
                    <span class="textstyle4">HOME</span>
                  </div>
                </div>
              </a>
              <a href="about.php" style="text-decoration:none">
                <div id="menuentry_5290aaf6" class="menustyle2 menu_775b86c0_mainMenuEntry normalEntry">
                  <div class="menuentry_text2">
                    <span class="textstyle4">ABOUT</span>
                  </div>
                </div>
              </a>
              <a href="javascript:void(0);">
                <div id="menuentry_7b617898" class="menustyle3 menu_775b86c0_mainMenuEntry normalEntry">
                  <div class="menuentry_text2">
                    <span class="textstyle5">COURSES</span>
                  </div>
                </div>
              </a>
              <a href="login.php">
                <div id="menuentry_7b617898" class="menustyle4 menu_775b86c0_mainMenuEntry normalEntry">
                  <div class="menuentry_text2">
                    <span class="textstyle5">LOGIN</span>
                  </div>
                </div>
              </a>

              <script type="text/javascript" src="rc_images/wsp_menu.js"></script>
              <script type="text/javascript">
                var js_menu_775b86c0 = new wsp_menu('menu_775b86c0', 'menu_775b86c0', 10, null, true);

                js_menu_775b86c0.createMenuForItem('menuentry_40f71978', ["      <span class=\"textstyle6\">HOME</span> ", 'index.php', '',
                  "      <span class=\"textstyle6\">ABOUT</span> ", 'about.php', '',
                  "      <span class=\"textstyle6\">COURSES</span> ", 'javascript:void(0);', '']);
                js_menu_775b86c0.createMenuForItem('menuentry_19eb25b', []);
                js_menu_775b86c0.createMenuForItem('menuentry_5290aaf6', []);
                js_menu_775b86c0.createMenuForItem('menuentry_7b617898', []);

              </script>
            </div>
            <div id="menu_775b86c0_pane"
              style="position: absolute; left: 0px; top: 10px; overflow: visible; z-index: 10; visibility: hidden; display: none; width: 119px; white-space: nowrap;">
              <a href="index.php">
                <div id="menu_775b86c0_entry" style="width: 99px;"> <span class="textstyle6">HOME</span> </div>
              </a><a href="about.php">
                <div id="menu_775b86c0_entry" style="width: 99px;"> <span class="textstyle6">ABOUT</span> </div>
              </a><a href="javascript:void(0);">
                <div id="menu_775b86c0_entry" style="width: 99px;"> <span class="textstyle6">COURSES</span> </div>
              </a>
              </a><a href="login.php">
                <div id="menu_775b86c0_entry" style="width: 99px;"> <span class="textstyle6">LOGIN</span> </div>
              </a>
            </div>
          </div>
        </div>
        <div style="clear:both"></div>
      </div>
    </div><br><br>
    <div class="classes">
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
    <!-- 
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 1</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 2</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 3</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 4</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 5</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 6</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 7</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 8</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 9</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 10</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 11</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 12</h2>
      </div>
      </a>
      <a class="lesson_button" href="courseinfo.php">
      <div class="lesson_button">
        <h2 class="coursesc">Lesson 13</h2>
      </div>
      </a>
      -->
    </div>
  </div>
</body>

</html>