<?php
//require_once('usermodel.php');
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
// $message = $_GET['message'] ?? '';

// if ($message === 'success') {
//     echo "<p>Course added successfully.</p>";
// }

$con = mysqli_connect('localhost', 'root', '', 'e_learning');
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
</head>

<body>
    <table border="1" align="center">

        <tr>
            <td>
                <p style="text-align:left;">
                    <?php echo "Logged in as " . $username . " | " ?>
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <fieldset>
                    <legend>Search Course</legend>
                    <table border="1" align="center">
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Search Courses</legend>
                                    <input type="text" id="searchQuery" placeholder="Search courses..." onkeypress="searchCourses2()">
                                    <input type="button" name="search" value="Submit" onclick="searchCourses2()">
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                    <table border="1" align="center">
                        <thead id="theadID">
                            <tr>
                                <th>Course Name</th>
                                <th>Category</th>
                                <th>Instructor</th>
                                <th>Description</th>
                                <th>Cover</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyID">
                          
                        </tbody>

                    </table>

                  
                    <br><br>
                    |<a href="adminblog.php">Back</a> | <a href="../controller/logout.php">Logout</a>
                </fieldset>
            </td>
        </tr>
    </table>

    <script src="../js/contents.js"></script>
    

</body>

</html>