<!DOCTYPE html>
<html>
<head>
    <title>Search Course</title>
    <link rel="stylesheet" type="text/css" href="../css/srcinputstyle.css">
    <script src="../js/script.js"></script>
</head>
<body>
    <div class="container">
        <form id="courseForm">
            <label for="course_name">Enter Course Name:</label><br>
            <input type="text" id="course_name" name="course_name"><br><br>
            <button type="button" id="submit" onclick="fetchAndDisplayCourse()">Search</button>
            <a class="link" href="../controller/logout.php">Logout</a>
        </form>

        <div id="results"></div>
    </div>
</body>
</html>
