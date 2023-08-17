<?php

session_start();
//require_once('../controller/adminblogval.php');
//$id = $_POST['id'];
if (!isset($_COOKIE['status'])) {
    header('location: login.php?error=bad_request');
}

$msg = $_GET['msg'] ?? '';


if ($msg === 'update_success') {
    echo "<p>Blog post edited successfully.</p>";
}else if($msg === 'update_failed'){
    echo "<p>Blog post edit failed.</p>";
}

$message = $_GET['message'] ?? '';


if ($message === 'success') {
    echo "<p>Blog post added successfully.</p>";
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
mysqli_close($con);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="../css/adminblgstyle.css">
</head>

<body>
    <table border="1" align="center">
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'null') {
                echo "Please input all the fields properly!";
            } else if ($_GET['error'] == 'capital') {
                echo "Title and Desription must start with capital letter";
            }else if ($_GET['error'] == 'vidlink') {
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
                <form method="post" action="../controller/adminblogval.php" enctype="">
                    <fieldset>
                        <legend>Insert Post</legend>
                        <table>
                            <table>
                                <tr>
                                    <td>
                                        Title:
                                    </td>
                                    <td>
                                        <input type="text" id="title" name="title" size="50">

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Post selection:
                                    </td>
                                    <td>
                                        <select name="posttype" id="posttype">
                                            <option value="image">image</option>
                                            <option value="video">video</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Video Link:
                                    </td>
                                    <td>
                                        <input type="text" id="link" name="link" size="50">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Post Description:
                                    </td>
                                    <td>
                                        <textarea rows="5" cols="60" id="postdescription" name="postdescription"></textarea><br>
                                        <input type="submit" name="submit" value="Submit">
                                    </td>
                                </tr>
                            </table>
                            <br><br>
                            <a href="allcontents.php">Your Contents</a> | <a href="courses.php">Create Courses</a> | <a href="input.php">Search Courses</a> | <a href="../controller/logout.php">Logout</a> 


</body>
</html>
