<?php

session_start();
//$id = $_POST['id'];
if (!isset($_COOKIE['status'])) {
    header('location: login.php?error=bad_request');
}

// $msg = $_GET['msg'] ?? '';


// if ($msg === 'update_success') {
//     echo "<p>Course edited successfully.</p>";
// } else if ($msg === 'update_failed') {
//     echo "<p>Course edit failed.</p>";
// }
$message = $_GET['message'] ?? '';

if ($message === 'success') {
    echo "<p>Course added successfully.</p>";
}

$con = mysqli_connect('localhost', 'root', '', 'makretplace');
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$id = $_SESSION['user']['id'];
$query = "SELECT username FROM reg WHERE id = '$id'";
$result = mysqli_query($con, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $username = isset($row['username']) ? $row['username'] : '';
} else {
    $username = '';
}

$instructorQuery = "SELECT id, username FROM reg WHERE role = 'admin'";
$instructorResult = mysqli_query($con, $instructorQuery);
$instructors = [];
if ($instructorResult) {
    while ($instructorRow = mysqli_fetch_assoc($instructorResult)) {
        $instructors[] = $instructorRow;
    }
}

mysqli_close($con);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Course</title>
    <link rel="stylesheet" type="text/css" href="../css/coursestyle.css">
</head>

<body>
    <table border="1" align="center">
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'null') {
                echo "Please input all the fields properly!";
            } else if ($_GET['error'] == 'capital') {
                echo "Title and Desription must start with capital letter";
            } else if ($_GET['error'] == 'vidlink') {
                echo "Link must start with https://";
            }
        }
        ?>
        <tr>
            <td>
                <p style="text-align:left;">
                    <?php echo "Logged in as " . $username . " | " ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <form method="post" action="../controller/coursesval.php" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Create Course</legend>
                        <table>
                            <table>
                                <tr>
                                    <td>
                                        Course Name:
                                    </td>
                                    <td>
                                        <input type="text" id="cname" name="cname" size="50">

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Category:
                                    </td>
                                    <td>
                                        <select name="category" id="category">
                                            <option value="1">EEE</option>
                                            <option value="2">CSE</option>
                                            <option value="3">Accounting</option>
                                            <option value="4">Mechanical</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Select Instructor:
                                    </td>
                                    <td>
                                        <select name="instructor_id" id="instructor_id">
                                            <?php foreach ($instructors as $instructor) : ?>
                                                <option value="<?php echo $instructor['id']; ?>"><?php echo $instructor['username']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Course Description:
                                    </td>
                                    <td>
                                        <textarea rows="5" cols="60" id="cdescription" name="cdescription"></textarea><br>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Add Cover:
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="file" name="cover" id="cover">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Submit">
                                    </td>
                                </tr>
                            </table>
                            <br><br>
                            <a href="adminblog.php">Back</a> | <a href="../controller/logout.php">Logout</a>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
    <br><br>
        <br><br>
    <table border="1" align="center">
    <tr>
            <td>
                <form method="post" action="../controller/coursesval.php" enctype="">
                    <fieldset>
                        <legend>Added Courses:</legend>
                        <table>
</fieldset>
</form>
</td>
</tr>
</table>

<table border="1" align="center">
<tr>
    <th>Course Name</th>
    <th>Category</th>
    <th>Instructor</th>
    <th>Description</th>
    <th>Cover</th>
</tr>

<?php
require_once('../model/usermodel.php');
$courses = getAllCourses();
foreach ($courses as $course) {
    echo "<tr>";
    echo "<td>{$course['cname']}</td>";
    echo "<td>{$course['category']}</td>";
    echo "<td>{$course['instructor_id']}</td>";
    echo "<td>{$course['cdescription']}</td>";
    echo "<td><img src='../{$course['cover']}' alt='' height='100' width='100'></td>";
    echo "</tr>";
}
// print_r($_POST);
?>

</table>
</body>
</html>
