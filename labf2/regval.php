<?php
$empname = $_POST["empname"];
$contactno = $_POST["contactno"];
$username = $_POST["username"];
$password = $_POST["password"];

if ($empname == "" || $contactno == "" || $username == "" || $password == "") {
    header('location: reg.php?err=null');
} else {
    $con = mysqli_connect('localhost', 'root', '', 'empll');
    $sql = "INSERT INTO emps (empname, contactno, username, pass) VALUES ('$empname', '$contactno', '$username', '$password')";
    $status = mysqli_query($con, $sql);
    if ($status) {
        header('location: login.php?message=registration_successful');
    } else {
        echo "Registration Failed!";
    }
}
?>