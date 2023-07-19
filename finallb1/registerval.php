<?php
$empname = $_POST["empname"];
$compname = $_POST["compname"];
$contactno = $_POST["contactno"];
$username = $_POST["username"];
$password = $_POST["password"];

if ($empname == "" || $compname == "" || $contactno == "" || $username == "" || $password == "") {
    header('location: addproduct.php?err=null');
} else {
    $con = mysqli_connect('localhost', 'root', '', 'emp');
    $sql = "INSERT INTO empl (empname, compname, contactno, username, password) VALUES ('$empname', '$compname', '$contactno', '$username', '$password')";
    $status = mysqli_query($con, $sql);
    if ($status) {
        header('location: display.php?message=registration_successful');
    } else {
        echo "Registration Failed!";
    }
}
?>
