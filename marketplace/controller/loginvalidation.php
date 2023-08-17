<?php
//require_once('usermodel.php');
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];

if ($userid == "" || $password == "") {
    header('Location: ../view/login.php?error=null');
    exit();
}

$con = mysqli_connect('localhost', 'root', '', 'makretplace');
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM reg WHERE userid = '$userid' AND password = '$password'";
$status = mysqli_query($con, $sql);

if ($status && mysqli_num_rows($status) > 0) {
    $row = mysqli_fetch_assoc($status);
    $user = $row;
    $_SESSION['user'] = $user;
    if ($row['role'] === 'admin') {
        setcookie('status', 'true', time() + 3600, '/');
        header('Location: ../view/adminblog.php');
        exit();
    } else {
        setcookie('status', 'true', time() + 3600, '/');
        header('Location: ../view/userblog.php');
        exit();
    }
} else {
    header('Location: ../view/login.php?error=invalid');
    exit();
}



mysqli_close($con);
?>