<?php
session_start();
if (!isset($_COOKIE['status'])) {
    header('location: login.php?error=bad_request');
}

$con = mysqli_connect('localhost', 'root', '', 'finalb');
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = $_GET['message'] ?? '';
if ($message === 'success') {
    echo "<p>added successfully.</p>";
}

if (isset($_GET['error'])) {
    if ($_GET['error'] == 'null') {
        echo "Please input all the fields properly!";
    }
}

$userid = $_SESSION['user']['userid'];
$query = "SELECT username FROM user WHERE userid = '$userid'";
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
    <title>Make PRD</title>
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
                <form method="post" action="addfeaturesval.php" enctype="">
                    <fieldset>
                        <legend>Insert Informations</legend>
                        <table>
                            <table>
                                <tr>
                                    <td>
                                        Feature Name:
                                    </td>
                                    <td>
                                        <textarea rows="5" cols="60" id="fname" name="fname"></textarea><br>
                                        <input type="submit" name="submit" value="Submit">
                                    </td>
                                </tr>
                            </table>
                            <br><br>
                            |<a href="adminhome.php">Back</a> | <a href="logout.php">Logout</a> | <a href="features.php">Added Features</a> 
                        </table>
                </form>
</body>

</html>