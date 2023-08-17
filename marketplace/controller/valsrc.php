<?php
$con = mysqli_connect('localhost', 'root', '', 'makretplace');
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

    $courseName = $_POST['course_name'];
    $query = "SELECT * FROM course WHERE cname = '$courseName'";
    $result = mysqli_query($con, $query);
    echo "<h2>Course Details:</h2>";
    if ($result && mysqli_num_rows($result) > 0) {
        $courseData = mysqli_fetch_assoc($result);
        echo "<p>Course Name: " . $courseData['cname'] . "</p>";
        echo "<p>Category: " . $courseData['category'] . "</p>";
        echo "<p>Instructor ID: " . $courseData['instructor_id'] . "</p>";
        echo "<p>Description: " . $courseData['cdescription'] . "</p>";
    } else {
        echo "<p>No course found with the name '$courseName'</p>";
    }

mysqli_close($con);
?>
