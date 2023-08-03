<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
    header('Location: login.php?error=null');
    exit();
}

$con = mysqli_connect('localhost', 'root', '', 'empll');
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM emps WHERE username = '$username' AND pass = '$password'";
$status = mysqli_query($con, $sql);

if ($status){
        setcookie('status', 'true', time() + 3600, '/');
        header('Location: addproducts.php');
        exit();
   
} else {
    header('Location: login.php?error=invalid');
    exit();
}

mysqli_close($con);
?>
