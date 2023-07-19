<?php
$empname = $_POST["empname"];
$compname = $_POST["compname"];
$contactno = $_POST["contactno"];
$username = $_POST["username"];
$password = $_POST["password"];
$row_name;

if (isset($_COOKIE['row_name'])) {
    $row_name = $_COOKIE['row_name'];
}

if ($empname == "" || $compname == "" || $username == "" || $contactno == "" || $password == "") {
    header('location: editreg.php?err=null');
} else {
    $con = mysqli_connect('localhost', 'root', '', 'emp');
    $sql = "UPDATE empl SET empname='$empname', compname='$compname', username='$username', contactno='$contactno', password='$password' WHERE empname='$row_name'";
    $status = mysqli_query($con, $sql);
    
    if ($status) {
        setcookie('row_name', '', time() - 3600, '/');
        header('location: display.php?message=update_successful');
    } else {
        header('location: display.php?err=update_failed');
    }
}
?>
