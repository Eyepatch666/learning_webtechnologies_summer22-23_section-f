 <?php
session_start();
if (isset($_SESSION['user']['username'])) {
    $username = $_SESSION['user']['username'];
} else {
    $username = '';
}
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Feedback</title>
    <script src="../js/feedbacks.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/fdbkstyle.css">
</head>

<body>
    <table align="center">
        <td>
            <p style="text-align:left;">
                 <?php echo "Logged in as " . $username ?> 
            </p>
        </td>
        <tr>
            <td id="td1">
                Write Your Feedback:
            </td>
            <br>
        </tr>
        <tr>
            <td>
                <textarea rows="5" cols="40" id="feedback" name="feedback"></textarea><br>
                <input type="button" id="submit" name="submit" value="Submit" onclick="ajax()">
            </td>
        </tr>
    </table>
    <p align="center"><a href="../controller/logout.php">Logout</a> | <a href="userblog.php">Back</a></p>
</body>

</html>